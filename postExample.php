<h2>Post Method</h2>
<form method= "POST" action="postExample.php">
    <label for="fname">Firstname</label>
    <input type="text" name="fname" value="">
    <br>
    <label for="lname">Lastname</label>
    <input type="text" name="lname" value="">
    <br>
    <input type="submit" name="sendBtn" value="Send">
</form>
<?php

$fn=$_POST['fname'];
$ln=$_POST['lname'];
echo'Hello'.' '.$fn.' '.$ln;

?>