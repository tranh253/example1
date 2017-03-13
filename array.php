<h2>Array Example</h2>
<?php
$student=array(
    array("fname" => 'Ann', "lname" => 'Smith'),
    array("fname" => 'Tim', "lname" => 'Smoth'),
    array("fname" => 'Lisa', "lname" => 'Jones'),
    array("fname" => 'Tom', "lname" => 'Hardy')
);
?>
<h3>Print one name from the array</h3>
<?php
echo'The first firstname is'.$student[0]['fname'];
?>
<h3>Print the whole array</h3>
<?php
foreach($student as $row)
{
    echo $row['fname'].' '.$row['lname'].'<br>';
}
?>
<<h3>Name in the</h3>
<table border=1>
    <tr><th>First name</th> <th>Last name</th></tr>
    <?php 
    foreach($student as $row)
    {
        echo '<tr><td>';
        echo $row['fname'];
        echo '</td><td>';
        echo $row['lname'];
        echo '</td></tr>'; 
    }
    ?>
</table>