<h2>PHP Class and Objects</h2>
<h3>Info about my cat</h3>
<?php
include 'cat.php';
$myCat=new Cat();
<<<<<<< HEAD
$myCat->SetColor('Black');
=======
$myCat->SetColor('orange');
>>>>>>> master
$myCat->SetName('Garfield');
echo 'The color of my cat is '.' '.$myCat->GetColor().' ';
echo 'And the name is '.' '.$myCat->GetName();
?>