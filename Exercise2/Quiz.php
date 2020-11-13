<?php
//access the global array called $_POST to get the values from the text fields

$questions = ["What is the Capital of Alabama","What is the Capital of California", "What is the Capital of Florida"," What is the Capital of Illinois", "What is the Capital of Kentucky"];
$awnsers = [$_POST["Q1"],$_POST["Q2"],$_POST["Q3"],$_POST["Q4"],$_POST["Q5"]];
$choices = [
    ["Montgomery","Juneau", "Phoenix", "Little Rock"],
    ["Denver","Sacramento", "Hartford", "Dover"],
    ["Atlanta","Honolulu", "Tallahassee", "Boise"],
    ["Springfield","Indianapolis", "Des Moines", "Topeka"],
    ["Baton Rouge","Augusta", "AnnapolisAnnapolis	", "Frankfort"],

];

$key = ["1","2", "3", "1","1"];

$score = 0;

for ($i=0; $i < 5; $i++) { 
    echo "<div>";
    echo "<h3> Question ". ($i+1) .": " .$questions[$i] .  " </h3>";
    echo "You Answered: " . $choices[$i][$awnsers[$i]-1] . "<br>";
    echo "Correct answer: " . $choices[$i][$key[$i] -1 ];
    echo "</div>";

    if ($choices[$i][$awnsers[$i]-1] == $choices[$i][$key[$i] -1 ]){
        $score++;
    }
    
}

echo "<div>";
echo "<h2> Score:</h2>";
if ($score == 0){
    echo ($score) ." out of 5 = " . (0) . "%";
}

else{
    echo ($score) ." out of 5 = " . ( (5/$score) *100) . "%";
}
echo "</div>";


?>
