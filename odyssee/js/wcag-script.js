
  // Couleurs de base
  let baseColors = [
    { hex: "#FFD46A" },
    { hex: "#FFAF6C" },
    { hex: "#C8E26A" },
    { hex: "#75D7FF" },
    { hex: "#004C6E" },
    { hex: "#002452" },
    { hex: "#8A5A00" },
    { hex: "#813900" },
    { hex: "#425700" }
  ];

  const bgLight = "#FAF9F6";
  const bgDark = "#0A141F";

  // Charger un profil depuis le cookie si présent
  const loadedCookie = document.cookie.split('; ').find(row => row.startsWith('wcag_colors_load='));
  if (loadedCookie) {
    try {
      const json = decodeURIComponent(loadedCookie.split('=')[1]);
      const colors = JSON.parse(json);
      if (Array.isArray(colors) && colors.length > 0) {
        baseColors = colors.map(c => ({ hex: c.hex }));
      }
      document.cookie = "wcag_colors_load=;expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
    } catch(e) { console.error(e); }
  }

  function hexToRgb(hex) {
    let h = hex.replace(/^#/, "");
    if (h.length === 3) h = h.split("").map(c => c+c).join("");
    const n = parseInt(h,16);
    return [(n>>16)&255,(n>>8)&255,n&255];
  }

  function luminance(r,g,b){
    const a=[r,g,b].map(v=>{
      v/=255; return v<=0.03928?v/12.92:Math.pow((v+0.055)/1.055,2.4);
    });
    return 0.2126*a[0]+0.7152*a[1]+0.0722*a[2];
  }

  function contrast(hex1,hex2){
    const [r1,g1,b1]=hexToRgb(hex1);
    const [r2,g2,b2]=hexToRgb(hex2);
    const L1=luminance(r1,g1,b1), L2=luminance(r2,g2,b2);
    const lighter=Math.max(L1,L2), darker=Math.min(L1,L2);
    return (lighter+0.05)/(darker+0.05);
  }

  function passFail(ratio,threshold){
    const pass = ratio >= threshold;
    return `<span class="badge fw-bold ${pass?'badge-light-success':'badge-light-danger'}">${pass?'PASS':'FAIL'}</span>`;
  }

  function renderPalette(){
    const p = document.getElementById("palette");
    p.innerHTML="";
    baseColors.forEach((c,i)=>{
      const item=document.createElement("div");
      item.className="text-center";
      item.innerHTML=`
        <div class="rounded-circle border border-gray-300 shadow-sm mb-2" 
             style="width:80px;height:80px;background:${c.hex};cursor:pointer;"
             data-idx="${i}"></div>
        <div class="fw-semibold text-gray-700 small">${c.hex}</div>
      `;
      item.querySelector("div").addEventListener("click",()=>scrollToRow(i));
      p.appendChild(item);
    });
  }

  function renderTable(){
    const tbody=document.getElementById("colorRows");
    tbody.innerHTML="";
    baseColors.forEach((c,i)=>{
      ["Clair","Sombre"].forEach(mode=>{
        const bg=mode==="Clair"?bgLight:bgDark;
        const ratio=contrast(c.hex,bg);
        const tr=document.createElement("tr");
        tr.style.background=bg;
        tr.innerHTML=`
          <td>${mode}</td>
          <td><div class="rounded-circle border border-gray-200 mx-auto" style="width:36px;height:36px;background:${c.hex};"></div></td>
          <td><input type="text" class="form-control form-control-sm hex" data-idx="${i}" value="${c.hex}"></td>
          <td><input type="color" class="form-control form-control-color" data-idx="${i}" value="${c.hex}"></td>
          <td>${ratio.toFixed(2)} : 1</td>
          <td>${passFail(ratio,4.5)}</td>
          <td>${passFail(ratio,7)}</td>
          <td>${passFail(ratio,3)}</td>
          <td>${passFail(ratio,4.5)}</td>
          <td>${ratio>=3?"🟢":"🔴"}</td>
          <td><button class="btn btn-sm" style="background:#000;color:${c.hex};">Texte</button></td>
          <td><button class="btn btn-sm" style="background:${c.hex};color:#fff;">Bouton</button></td>
          <td><button class="btn btn-sm" style="background:${c.hex};color:#000;">Texte</button></td>
        `;
        tbody.appendChild(tr);
      });
    });
    attachEvents();
  }

  function scrollToRow(i){
    const el=document.querySelector(`input[type="color"][data-idx="${i}"]`);
    if(el) el.scrollIntoView({behavior:"smooth",block:"center"});
  }

  function attachEvents(){
    document.querySelectorAll('input[type="color"]').forEach(inp=>{
      inp.addEventListener('input',()=>{
        const i=+inp.dataset.idx;
        baseColors[i].hex=inp.value.toUpperCase();
        renderPalette();
        renderTable();
      });
    });
    document.querySelectorAll('input.hex').forEach(inp=>{
      inp.addEventListener('change',e=>{
        const i=+inp.dataset.idx;
        const val=inp.value.trim().toUpperCase();
        if(/^#[0-9A-F]{6}$/.test(val)){
          baseColors[i].hex=val;
          renderPalette();
          renderTable();
        } else inp.value=baseColors[i].hex;
      });
    });
  }

  async function exportPNG(){
    const canvas=await html2canvas(document.getElementById("colorTable"));
    const a=document.createElement("a");
    a.href=canvas.toDataURL("image/png");
    a.download="audit-couleurs.png";
    a.click();
  }

  async function exportPDF(){
    const { jsPDF }=window.jspdf;
    const pdf=new jsPDF("p","pt","a4");
    const canvas=await html2canvas(document.querySelector(".card"));
    const img=canvas.toDataURL("image/png");
    pdf.addImage(img,"PNG",20,20,550,(canvas.height*550)/canvas.width);
    pdf.save("audit-couleurs.pdf");
  }

  function exportCSV(){
    let csv="Fond,Hex,Ratio\n";
    baseColors.forEach(c=>{
      csv+=`Clair,${c.hex},${contrast(c.hex,bgLight).toFixed(3)}\n`;
      csv+=`Sombre,${c.hex},${contrast(c.hex,bgDark).toFixed(3)}\n`;
    });
    const blob=new Blob([csv],{type:"text/csv"});
    const a=document.createElement("a");
    a.href=URL.createObjectURL(blob);
    a.download="audit-couleurs.csv";
    a.click();
  }

  document.getElementById("exportPNG").addEventListener("click",exportPNG);
  document.getElementById("exportPDF").addEventListener("click",exportPDF);
  document.getElementById("exportCSV").addEventListener("click",exportCSV);

  renderPalette();
  renderTable();
 
