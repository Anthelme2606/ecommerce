$(document).ready(function() {
    // Ajouter une validation pour le champ de nom
    $('#name').on('input', function() {
        if ($(this).val().trim().length < 2) {
            $(this).removeClass('is-valid').addClass('is-invalid');
        } else {
            $(this).removeClass('is-invalid').addClass('is-valid');
        }
    });

    // Ajouter une validation pour le champ d'email
    $('#email').on('input', function() {
        let email = $(this).val().trim();
        let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email.length == 0 || !regex.test(email)) {
            $(this).removeClass('is-valid').addClass('is-invalid');
        } else {
            $(this).removeClass('is-invalid').addClass('is-valid');
        }
    });

    // Ajouter une validation pour le champ de mot de passe
    $('#password').on('input', function() {
        if ($(this).val().trim().length < 8) {
            $(this).removeClass('is-valid').addClass('is-invalid');
        } else {
            $(this).removeClass('is-invalid').addClass('is-valid');
        }
    });

    // Ajouter une validation pour le champ de téléphone
    $('#phone').on('input', function() {
        let phone = $(this).val().trim();
        let regex = /^\d{10}$/;

        if (phone.length == 0 || !regex.test(phone)) {
            $(this).removeClass('is-valid').addClass('is-invalid');
        } else {
            $(this).removeClass('is-invalid').addClass('is-valid');
        }
    });

    // Empêcher la soumission du formulaire si les champs ne sont pas valides
    $('#registration-form').on('submit', function(event) {
        let valid = true;

        if ($('#name').val().trim().length < 2) {
            $('#name').removeClass('is-valid').addClass('is-invalid');
            valid = false;
        }

        let email = $('#email').val().trim();
        let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.length == 0 || !regex.test(email)) {
            $('#email').removeClass('is-valid').addClass('is-invalid');
            valid = false;
        }

        if ($('#password').val().trim().length < 8) {
            $('#password').removeClass('is-valid').addClass('is-invalid');
            valid = false;
        }

        let phone = $('#phone').val().trim();
        let phoneRegex = /^\d{10}$/;
        if (phone.length == 0 || !phoneRegex.test(phone)) {
            $('#phone').removeClass('is-valid').addClass('is-invalid');
            valid = false;
        }

        if (!valid) {
            event.preventDefault();
        }
    });
});