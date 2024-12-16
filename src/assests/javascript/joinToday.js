document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = {};

        const firstNameInput = form.querySelector('input[type="text"][placeholder="First Name"]');
        const lastNameInput = form.querySelector('input[type="text"][placeholder="Last Name"]');
        const ageInput = form.querySelector('input[type="number"][placeholder="Age"]');
        const emailInput = form.querySelector('input[type="email"][placeholder="Email"]');
        const addressInput = form.querySelector('input[type="text"][placeholder="Address"]');
        const phoneInput = form.querySelector('input[type="tel"][placeholder="Phone"]');
        const genderInput = form.querySelector('input[name="gender"]:checked');

        // Validation
        const errors = [];

        if (!firstNameInput.value.trim()) {
            errors.push("First name is required");
        }
        if (!lastNameInput.value.trim()) {
            errors.push("Last name is required");
        }
        if (!ageInput.value.trim()) {
            errors.push("Age is required");
        } else if (isNaN(ageInput.value) || parseInt(ageInput.value) < 1) {
            errors.push("Age must be a positive number");
        }
        if (!emailInput.value.trim()) {
            errors.push("Email is required");
        } else if (!isValidEmail(emailInput.value)) {
            errors.push("Invalid email address");
        }
        if (!addressInput.value.trim()) {
            errors.push("Address is required");
        }
        if (!phoneInput.value.trim()) {
            errors.push("Phone number is required");
        } else if (!isValidPhoneNumber(phoneInput.value)) {
            errors.push("Invalid phone number format. Please enter a valid Australian phone number.");
        }
        
        if (!genderInput) {
            errors.push("Gender is required");
        }

        if (errors.length > 0) {
            // Display error messages
            swal({
                title: "Error!",
                text: errors.map(error => `* ${error}`).join("\n\n"),
                icon: "warning",
            });
            return; // Prevent form submission if there are errors
        }

        // Log user inputs
        console.log("First Name:", firstNameInput.value.trim());
        console.log("Last Name:", lastNameInput.value.trim());
        console.log("Age:", ageInput.value.trim());
        console.log("Email:", emailInput.value.trim());
        console.log("Address:", addressInput.value.trim());
        console.log("Phone:", phoneInput.value.trim());
        console.log("Gender:", genderInput.value);

        // AJAX request to send form data to joinToday.php
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'joinToday.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onload = function () {
            if (xhr.status === 200) {
                // Successful response
                swal({
                    title: "Great!",
                    text: "Your information has been submitted!",
                    icon: "success",
                });
                form.reset();
            } else {
                // Error handling
                swal({
                    title: "Error!",
                    text: "An error occurred while submitting the form.",
                    icon: "error",
                });
            }
        };

        // Convert FormData to query string and send it
        const params = new URLSearchParams();
        params.append('firstName', firstNameInput.value.trim());
        params.append('lastName', lastNameInput.value.trim());
        params.append('age', ageInput.value.trim());
        params.append('email', emailInput.value.trim());
        params.append('address', addressInput.value.trim());
        params.append('phone', phoneInput.value.trim());
        params.append('gender', genderInput.value);
        
        xhr.send(params);
    });
});

// Function to validate email address
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function isValidPhoneNumber(phoneNumber) {
    // Australian phone number regex (matches formats: (02) 1234 5678, 02 1234 5678, +61 2 1234 5678, 0412 345 678)
    const phoneRegex = /^(?:\+?61|0)(?:2|3|4|7|8)\s?\d{4}\s?\d{3}$/;
    return phoneRegex.test(phoneNumber);
}