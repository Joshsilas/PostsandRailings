
<?php

 
function thelengthofthefence($posts, $railings) {
    if (!is_numeric($posts) || (!is_numeric($railings))) {
        return "Input must be a number";
    }
    if ($posts < 2 || $railings < 1){
        return "You need 2 posts and 1 railing to begin";
    }
    if ($posts -1 > $railings || $posts === $railings || $railings > $posts) {
            return 'Must have 1 post more than railings';
        } else { 
    $posts= 0.1 * $posts;
    $railings= 1.5 * $railings; 
    $fencelength = $posts + $railings;
     return "You put " .($_POST['posts'] . " posts, and " . $_POST['railings']) . " railings". 
     '<br>' . "The fence size will be $fencelength metres long."; 
     }
    }

 
function howManyPolesAndRailings($length) {
    if (!is_numeric($length)) {
        return "Input must be a number";
    }
    if ($length <= 1.6) {
        return 'The minimum fence size is 1.7 metres';
    }
    if ($length <= 1.7) {
        return "You need 2 posts and 1 railing"; 
    } else {
    $posts = 2;
    $railing= 1;
    $length = $length - 1.7;
    while ($length > 0) {
        $posts = $posts + 1 ;
        $railing = $railing +1;
        $length = $length - 1.6; 
    }
    $minlength = $length;
    $minlength = number_format($minlength, 1);
    return "You entered " . $_POST["length"].  " metres" . "<br>" . "You need " . ($posts) . " posts and " . ($railing) . " railings." . "<br>" .
    "The fence will be " . abs($minlength) . " metre/s more than the size you requested." . 
    "<br>" . " The length of the fence will be " . abs($minlength) + ($_POST['length']). " metres long";
    }
}



