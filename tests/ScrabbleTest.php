<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_letterValue_oneLetter()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = "a";

            //Act
            $result = $test_Scrabble->letterValue($input);

            //Assert
            $this->assertEquals(1, $result);
        }
        function test_letterValue_multiLetters()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = "aggg";

            //Act
            $result = $test_Scrabble->letterValue($input);

            //Assert
            $this->assertEquals(7, $result);
        }
        function test_letterValue_allLetters()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = "xyzfb";

            //Act
            $result = $test_Scrabble->letterValue($input);

            //Assert
            $this->assertEquals(29, $result);
        }
    }

?>
