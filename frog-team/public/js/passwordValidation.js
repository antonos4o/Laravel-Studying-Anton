// public/js/password-validation.js
const VALID = 'green';
const INVALID = 'red';

//Initial state of the fields
document.getElementById('min-length').style.color = INVALID;
document.getElementById('uppercase').style.color = INVALID;
document.getElementById('lowercase').style.color = INVALID;
document.getElementById('number').style.color = INVALID;
document.getElementById('special-char').style.color = INVALID;
document.getElementById('password-match').style.color = INVALID;

const submitButton = document.getElementById('submit-registration-button');
submitButton.classList.add('bg-gray-400');
submitButton.classList.remove('bg-blue-400', 'hover:bg-blue-500');
document.getElementById('password').addEventListener('input', validatePassword);
document.getElementById('password_confirmation').addEventListener('input', validatePassword);

function validatePassword() {
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('password_confirmation').value;
    
    const allChecksArePassed = password.length >= 8 && /[A-Z]/.test(password) && /[a-z]/.test(password) && /\d/.test(password) && /[@$!%*#?&]/.test(password) && (password === confirmPassword);
    
    if (allChecksArePassed) {
        submitButton.disabled = false;
        submitButton.classList.remove('bg-gray-400');  // Remove the gray background class
        submitButton.classList.add('bg-blue-400', 'hover:bg-blue-500');  // Restore the original blue background classes
    } else {
        submitButton.disabled = true;
        submitButton.classList.add('bg-gray-400');  // Add the gray background class
        submitButton.classList.remove('bg-blue-400', 'hover:bg-blue-500');  // Remove the original blue background classes
    }
    // Rule: At least 8 characters long
    if (password.length >= 8) {
        document.getElementById('min-length').style.color = VALID;
    } else {
        document.getElementById('min-length').style.color = INVALID;
    }

    // Rule: At least one uppercase letter
    if (/[A-Z]/.test(password)) {
        document.getElementById('uppercase').style.color = VALID;
    } else {
        document.getElementById('uppercase').style.color = INVALID;
    }

    // Rule: At least one lowercase letter
    if (/[a-z]/.test(password)) {
        document.getElementById('lowercase').style.color = VALID;
    } else {
        document.getElementById('lowercase').style.color = INVALID;
    }

    // Rule: At least one number
    if (/\d/.test(password)) {
        document.getElementById('number').style.color = VALID;
    } else {
        document.getElementById('number').style.color = INVALID;
    }

    // Rule: At least one special character
    if (/[@$!%*#?&]/.test(password)) {
        document.getElementById('special-char').style.color = VALID;
    } else {
        document.getElementById('special-char').style.color = INVALID;
    }
    
    if (password === confirmPassword) {
        document.getElementById('password-match').style.color = VALID;
    } else {
        document.getElementById('password-match').style.color = INVALID;
    }
};

