<?php

function hoosonbaina($field) {
    if($field != "") {
        return true; //1
    }
    return false; //0
 }

// if(isset($_GET['haaanaas']) && $_GET['haanaas'] != "") {
//     echo "Origin" . "haanaas:";
//     echo $_GET['haanaas'];
// }

if(count($_POST) > 0) {
    // print_r($_POST['password']);
    hr();
    foreach ($_POST as $index => $value) {
        if(hoosonbaina($value)) {
            echo "$index hooson baina";
            die();
        }
        echo "$index : $value <br>";
    }
    $password = $_POST['password'];
}

// $too = [1,2,3,4,5,6,7,78];
// foreach($too as $in => $to) {
//     echo "$in : $to <br>";
// }
// print_r($too);
?>
