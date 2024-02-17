<?php

// Validate data for the finer app

// return true if food is valid
function validFood($food) {
    // remove white space
    if (trim($food == "")) {
        return false;
    }
    // checks if every character in $food is a letter
    if (!ctype_alpha($food)) {
        return false;
    }
    return true;
}

function validMeal($meal) {
    // return true/false if $meal is equal to one of the values in getMeals()
    return in_array($meal, getMeals());
}

// Job App
// =========================================================================
function validName($name) {
    // remove white space
    if (trim($name == "")) {
        return false;
    }
    // checks if every character in $food is a letter
    if (!ctype_alpha($name)) {
        return false;
    }
    return true;
}

function validGithub($github) {
    // Return true or false depending if it's a valid url
    return filter_var($github, FILTER_VALIDATE_URL);
}

function validExperience($experience) {
    // return true/false if $experience is equal to one of the values in getExperience()
    return in_array($experience, getExperience());
}

function validPhone($phoneNum) {
    // This should remove everything that isn't digits
    $phoneNumValid = preg_replace('~\D~', '', $phoneNum);

    // Valid if 123-456-7890 or 1 123-456-7890
    if (strlen($phoneNumValid) >= 10 && strlen($phoneNumValid) <= 11) {
        return true;
    }
    else {
        return false;
    }
}

function validEmail($gmail) {
    // Returns true or false depending on if it's valid email
    return filter_var($gmail, FILTER_VALIDATE_EMAIL);
}