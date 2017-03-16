<h2>Form Examples</h2>

<form  action="form_example.php" method="post">
    <select class="" name="country">
        <option value="1">Yasuo</option>
        <option value="2">Zed</option>
        <option value="3">Jax</option>
        <option value="4">Yi</option>
    </select>
    <input type="submit" name="btnSend" value="Send">
   
</form>
 <?php
        $theButton=$_POST['btnSend'];
        if(isset($theButton)){

$chosen=$_POST['country'];
echo 'You have chosen: '.$chosen;
unset($theButton);
        }
?>
