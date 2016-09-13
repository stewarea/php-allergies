<?php
    Class Allergies
    {

      function countAllergies($input)
      {
        $returned_array = array();
        while ($input > 0) {
          if ($input > 255) {
              return array("choose a lower number");
          }
          if (($input - 128) >= 0){
              array_push($returned_array, "cats");
              $input -= 128;
          } elseif (($input - 64) >= 0){
              array_push($returned_array, "pollen");
              $input -= 64;
          }  elseif (($input - 32) >= 0){
                array_push($returned_array, "chocolate");
                $input -= 32;
          }   elseif (($input - 16) >= 0){
                array_push($returned_array, "tomatoes");
                $input -= 16;
          }   elseif (($input - 8) >= 0){
                array_push($returned_array, "stawberries");
                $input -= 8;
          }   elseif (($input - 4) >= 0){
                array_push($returned_array, "shellfish");
                $input -= 4;
          }   elseif (($input - 2) >= 0){
                array_push($returned_array, "peanuts");
                $input -= 2;
          }   elseif (($input - 1) >= 0){
                array_push($returned_array, "eggs");
                $input -= 1;
          }
      }
      return ($returned_array);
    }
  }
 ?>
