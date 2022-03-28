<?php

function marriageAgeCheck($name, $birthYear, $gender)
{
    $currentAge = date("Y") - $birthYear;
    $maleAge = 21;
    $femaleAge = 18;
    $waitMale = 21 - $currentAge;
    $waitFemale = 18 - $currentAge;



    if ($gender == 'male') {
        if ($currentAge >= $maleAge) {
            return "Hello $name, You are $currentAge years old & You are old enough to get married.";
        } else {
            return "Sorry $name, You are $currentAge years old & you have to wait $waitMale years.";
        }
    } else {
        if ($currentAge >= $femaleAge) {
            return "Hello $name, You are $currentAge years old & You are old enough to get married.";
        } else {
            return "Sorry $name, You are $currentAge years old & you have to wait $waitFemale years.";
        }
    }
}
