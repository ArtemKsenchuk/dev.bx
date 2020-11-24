<?php
error_reporting();
require('ReadFromConsole.php');
$input = '';

function FindAmountOfBiggest()
{
    $input = '';
    if ($input != 'stop')
    {
        $input = ReadOutOfConsole($input);
        $OurArray[] = $input;
        FindAmountOfBiggest();
    } else {
        print_r($OurArray);
        }
    }
FindAmountOfBiggest();