<?php


// This file represents the data layer for my diner app

function getMeals() {
    return array('breakfast', 'brunch', 'lunch', 'dinner');
}

function getCondiments() {
    return array('ketchup', 'mustard', 'mayo', 'sriracha');
}

// Job App
// =========================================================================
function getExperience() {
    return array('experienceID1'=>'0-2', 'experienceID2'=>'2-4', 'experienceID3'=>'4+');
}

function getSoftwareJobs() {
    return array('SJ1'=>'JavaScript', 'SJ2'=>'PHP', 'SJ3'=>'Java', 'SJ4'=>'Python', 'SJ5'=>'HTML', 'SJ6'=>'CSS', 'SJ7'=>'ReactJS', 'SJ8'=>'NodeJs');
}

function getIndustryVerticals() {
    return array('IV1'=>'Health tech', 'IV2'=>'Ag tech', 'IV3'=>'HR tech', 'IV4'=>'Industrial tech', 'IV5'=>'Cybersecurity');
}