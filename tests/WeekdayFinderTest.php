<?php

    require_once "src/WeekdayFinder.php";

    class WeekdayFinderTest extends PHPUnit_Framework_TestCase {

        function test_findWeekday_today() {

            //Arrange
            $test_WeekdayFinder = new WeekdayFinder;
            $date = "2015-08-13";

            //Act
            $result = $test_WeekdayFinder->findWeekday($date);

            //Assert
            $this->assertEquals("Thursday", $result);
        }

        function test_findWeekday_yesterday() {

            //Arrange
            $test_WeekdayFinder = new WeekdayFinder;
            $date = "2015-08-12";

            //Act
            $result = $test_WeekdayFinder->findWeekday($date);

            //Assert
            $this->assertEquals("Wednesday", $result);
        }
    }

 ?>
