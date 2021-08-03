<?php 





#1
$names= array("ahmed" , "mohamed" ,"hassan");
echo  max  ($names);

echo "<hr>";

#2
/*$array =[1,2,3 ];
 $array=unset($array[2]);
 
 
print_r(array_keys($array));*/



echo "<hr>";


#3
echo(round(0.60) . "<br>");
echo(round(0.50) . "<br>");
echo(round(5) . "<br>");
echo(round(-4.40) . "<br>");
echo(round(-4.60));

echo "<hr>";

#5

$my_array = array("red","green","blue","yellow","purple");

shuffle($my_array);
print_r($my_array);


echo "<hr>";
#6
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<hr>";

#7
$names = ['ahmed', 'mohammed', 'hasan'] ; 
echo "<ul>";
foreach($names as $value){


    echo "<li> $value </li> ";


}
echo "</ul>";
echo "<hr>";


#8
$instructors = [
    'kareem fouad' => [
        'job' => 'backend developer',
        'track' => 'php',
    ],
    'ahmed bahnasy' => [
        'job' => 'frontend developer',
        'track' => 'angular',
    ],
    'ahmed nasr' => [
        'job' => 'backend developer',
        'track' => '.net',
    ],
];
echo"<ul>";
foreach($instructors as $instructor => $date ){

echo"<li>$instructor";

    
echo "<ul>";
    
foreach($date as $key => $value){

    echo "<li> $key :$value </li>";
    
    

   
    
}
    

echo "</ul>";
echo"</li>";

}
echo"</ul>";
?>
