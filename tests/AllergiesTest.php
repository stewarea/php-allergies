<?php
  require_once "src/Allergies.php";
  class allergiesTest extends PHPUnit_Framework_TestCase
    {
        function test_countAllergies()
        {
           $allergie_input= 148;

           //Act
           $newAllergies = new Allergies;
           $result = $newAllergies->countAllergies($allergie_input);
           //Assert
           $this->assertEquals("cats tomatoes shellfish", $result);
        }
}
  ?>
