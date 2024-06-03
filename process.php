<?php
    // Function to convert html markup to html entities, strip slashes and trim whitespaces and special characters from the given data
    function validate_input($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    // Define variable for errors
    $errors = [];
    // Define variables for name, age, email and colour
    $name = $age = $email = $colour = "";

    // Check that the method is POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if name input is empty
        if (empty($_POST["name"])) {
            // Add error message for name
            $errors['name'] = "Name is required.";
        } else {
            // Validate name input
            $name = validate_input($_POST["name"]);
        }

        // Check if age is empty
        if (empty($_POST["age"])) {
            // Add error message for age
            $errors['age'] = "Age is required.";
            // Check if age is not a number, less than 1 or bigger than 100
        } elseif (!filter_var($_POST["age"], FILTER_VALIDATE_INT) || $_POST["age"] < 1 || $_POST["age"] > 100) {
            // Add error message for age
            $errors['age'] = "Age must be a number between 1 and 100.";
        } else {
            // Validate age input
            $age = validate_input($_POST["age"]);
        }

        // Validate if email is empty
        if (empty($_POST["email"])) {
            // Add error message for email
            $errors['email'] = "Email is required.";
            // Check if email is not an email
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            // Add error message for email
            $errors['email'] = "Invalid email format.";
        } else {
            // Validate email input
            $email = validate_input($_POST["email"]);
        }

        // Valid colours
        $valid_colours = ['red', 'green', 'blue'];

        // Check if colour is empty
        if (empty($_POST["colour"])) {
            // Add error message for colour
            $errors['colour'] = "Favourite colour is required.";
            // Check if the colour input value is not in the $valid_colours array
        } elseif (!in_array($_POST["colour"], $valid_colours)) {
            // Add error message for colour
            $errors['colour'] = "Invalid colour selection.";
        } else {
            // Validate colour input
            $colour = validate_input($_POST["colour"]);
        }
    }
?>
