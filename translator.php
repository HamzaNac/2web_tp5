
<?php
$final_fantasy = array (
    "a" => "y",
    "b" => "p",
    "c" => "l",
    "d" => "t",
    "e" => "a",
    "f" => "v",
    "g" => "k",
    "h" => "r",
    "i" => "e",
    "j" => "z",
    "k" => "g",
    "l" => "m",
    "m" => "s",
    "n" => "h",
    "o" => "u",
    "p" => "b",
    "q" => "x",
    "r" => "n",
    "s" => "c",
    "t" => "d",
    "u" => "i",
    "v" => "j",
    "w" => "f",
    "x" => "q",
    "y" => "o",
    "z" => "w",
    " " => ' ',
);


function translated_word($str)
{
    global $final_fantasy;
    $s = '';
    $test = str_split($str);
    foreach ($test as $value)
    {
        $s .= $final_fantasy[$value];
    }

    return $s;

}
function return_word($str)
{
    echo translated_word($str);
}
echo "The translated word for ".$_POST['val']. " is : ".translated_word($_POST['val']);
?>