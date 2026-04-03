"use strict";

// Class definition
var OdysseeAdminMAJ_Role = function () {
    // Shared variables
    const element = document.getElementById('odyssee_modal_update_role');
    const form = element.querySelector('#form_odysse_maj_role');
    const modal = new bootstrap.Modal(element);

    // Init add schedule modal
    var initUpdatePermissions = () => {

        // Init form validation rules
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'user_role': { // ✅ correction
                        validators: {
                            notEmpty: {
                                message: 'Vous devez sélectionner un rôle.'
                            }
                        }
                    },
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        // Cancel button handler
        const cancelButton = element.querySelector('[odyssee-users-modal-action-role="cancel"]');
        if (cancelButton) {
            cancelButton.addEventListener('click', e => {
                e.preventDefault();

                Swal.fire({
                    text: "Êtes-vous sûr de vouloir annuler ?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "OUI",
                    cancelButtonText: "NON",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then(function (result) {
                    if (result.value) {
                        form.reset(); 
                        modal.hide(); 				
                    }
                });
            });
        }

        // Submit button handler
        const submitButton = element.querySelector('[odyssee-users-modal-action-role="submit"]');
        if (submitButton) {
            submitButton.addEventListener('click', function (e) {
                e.preventDefault();

                if (validator) {
                    validator.validate().then(function (status) {
                        if (status === 'Valid') {
                            // Loading
                            submitButton.setAttribute('data-kt-indicator', 'on');
                            submitButton.disabled = true;

                            // Construire la requête GET
                            const formData = new FormData(form);
                            const params = new URLSearchParams(formData).toString();
                            const url = form.action + "?" + params;

                            fetch(url, {
                                method: "GET"
                            })
                            .then(response => response.text())
                            .then(data => {
                                // console.log("Réponse du serveur:", data);

                                Swal.fire({
                                    text: "Le rôle a bien été mis à jour",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "OK",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                }).then(() => {
                                    modal.hide();
                                });
                            })
                            .catch(err => {
                                Swal.fire({
                                    text: "Erreur lors de la mise à jour : " + err,
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "OK",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            })
                            .finally(() => {
                                submitButton.removeAttribute('data-kt-indicator');
                                submitButton.disabled = false;
                            });

                        } else {
                            Swal.fire({
                                text: "Veuillez sélectionner un rôle avant de continuer.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "OK",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                    });
                }
            });
        }
    }

    // Select all handler
    const handleSelectAll = () => {
        const selectAll = form.querySelector('#kt_roles_select_all');
        const allCheckboxes = form.querySelectorAll('[type="checkbox"]');

        if (selectAll) {
            selectAll.addEventListener('change', e => {
                allCheckboxes.forEach(c => {
                    c.checked = e.target.checked;
                });
            });
        }
    }

    return {
        init: function () {
            initUpdatePermissions();
            handleSelectAll();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    OdysseeAdminMAJ_Role.init();
});
