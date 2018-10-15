<?php
require("Utility.php");
    
    class TicTacToe
    {
        public static $game = array(array(0,0,0),array(0,0,0),array(0,0,0));
        public static $cp = 2;

        static function tCase($arr)
        {
            $b = false;
            if ($arr[0][0] == 1 && $arr[0][1] == 1 && $arr[0][2] == 1) {
                $b = true;
            }
            if ($arr[1][0] == 1 && $arr[1][1] == 1 && $arr[1][2] == 1) {
                $b = true;
            }
            if ($arr[2][0] == 1 && $arr[2][1] == 1 && $arr[2][2] == 1) {
                $b = true;
            }
            if ($arr[0][0] == 1 && $arr[1][0] == 1 && $arr[2][0] == 1) {
                $$b = true;
            }
            if ($arr[0][1] == 1 && $arr[1][1] == 1 && $arr[2][1] == 1) {
                $b = true;
            }
            if ($arr[0][2] == 1 && $arr[1][2] == 1 && $arr[2][2] == 1) {
                $b = true;
            }
            if ($arr[0][0] == 1 && $arr[1][1] == 1 && $arr[2][2] == 1) {
                $b = true;
            }
            if ($arr[0][2] == 1 && $arr[1][1] == 1 && $arr[2][0] == 1) {
                $b = true;
            }
            return $b;
        }

        static function tCaseC($arr)
        {
            $b = false;
            if ($arr[0][0] == 2 && $arr[0][1] == 2 && $arr[0][2] == 2) {
                $b = true;
            }
            if ($arr[1][0] == 2 && $arr[1][1] == 2 && $arr[1][2] == 2) {
                $b = true;
            }
            if ($arr[2][0] == 2 && $arr[2][1] == 2 && $arr[2][2] == 2) {
                $b = true;
            }
            if ($arr[0][0] == 2 && $arr[1][0] == 2 && $arr[2][0] == 2) {
                $b = true;
            }
            if ($arr[0][1] == 2 && $arr[1][1] == 2 && $arr[2][1] == 2) {
                $b = true;
            }
            if ($arr[0][2] == 2 && $arr[1][2] == 2 && $arr[2][2] == 2) {
                $b = true;
            }
            if ($arr[0][0] == 2 && $arr[1][1] == 2 && $arr[2][2] == 2) {
                $b = true;
            }
            if ($arr[0][2] == 2 && $arr[1][1] == 2 && $arr[2][0] == 2) {
                $b = true;
            }
            return $b;
        }

        static function userInput()
        {
            echo "enter x"."\n";
            $x = Utility::getInt();
            echo "enter y"."\n";
            $y = Utility::getInt();
            if ($x < 1 || $x > 3 || $y < 1 || $y > 3 || TicTacToe::$game[$y - 1][$y - 1] != 0) {
                return false;
            }
            TicTacToe::$game[$x - 1][$y - 1] = 1;
            return true;
        }

        static function computerInput()
        {
            $x = random_int(0,2);
            $y = random_int(0,2);
            if(TicTacToe::$game[$x][$y] != 0)
            {
                return false;
            }
            
            TicTacToe::$game[$x][$y] = TicTacToe::$cp;
            return true;
        }

        static function mainFunction()
        {
            echo "entre value of x and y between 1 and 3"."\n";

            for($i = 1; $i <= 9; $i++)
            {
                if($i % 2 == 0)
                {
                    while(!TicTacToe::userInput())
                    {
                        echo "invalid location"."\n";
                    }
                }
                else
                {
                    
                    while(!TicTacToe::computerInput())
                    {
                       
                    }
                        
                }
                
                for ($j = 0; $j < 3; $j++) {
                    
                    for ($j2 = 0;$j2 < 3; $j2++) {
                        echo TicTacToe::$game[$j][$j2]." ";
                    }
                    echo "\n";
                }
                echo "\n";

                if(TicTacToe::tCase(TicTacToe::$game))
                {
                    echo "user win "."\n";
                }
                if (TicTacToe::tCaseC(TicTacToe::$game)) {
                    echo "computer win"."\n";
                    break;
                }
                if($i == 9)
                {
                    echo "draw"."\n";
                }
            }
        }
    }

    TicTacToe::mainFunction();

?>