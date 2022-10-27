<?php
    function hoosonbish($field) {
      if($field != "") {
          return true; //1
      }
      return false; //0
    }
    function zugeerprinthiigerei() {
      echo "<br>";
    }

    function konop() {
        echo '<button type="submit">Calculate</button>';
    }

    function calculate($nom1, $nom2, $uildel) {
      switch($uildel) {
           case "+":
             return $nom1 + $nom2;
             break;
           case "-":
             return $nom1 - $nom2;
             break;
           case "*":
             return $nom1 * $nom2;
             break;
           case "/":
             return $nom1 / $nom2;
             break;

             default:
               $hariu = "error";
         }
         return "Big error";
    }
     

    if(isset($_GET['email'])) {
        print_r($_GET['email']);
    }
    

    if(hoosonbish($_POST['nomer1']) && hoosonbish($_POST['nomer2']) && hoosonbish($_POST['uildel'])) {
       $uildel = $_POST['uildel'];

       $hariu = calculate($_POST['nomer1'], $_POST['nomer2'], $_POST['uildel']);    

       if(hoosonbish($hariu)) {
         echo $hariu;
        }
        
    }

      //  switch($uildel) {
      //    case "+":
      //      $hariu = $_POST['nomer1'] + $_POST['nomer2'];
      //      break;
      //    case "-":
      //      $hariu = $_POST['nomer1'] - $_POST['nomer2'];
      //      break;
      //    case "*":
      //      $hariu = $_POST['nomer1'] * $_POST['nomer2'];
      //      break;
      //    case "/":
      //      $hariu = $_POST['nomer1'] / $_POST['nomer2'];
      //      break;
      //      default:
      //        $hariu = "error";
      //  }
    ?>