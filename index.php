<html>
    <head>
       <script type="text/javascript" src="my.js">
       </script>
           
       </script>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div id="header">
     <h1>First PHP Example</h1>            
        </div>
        <div id="menu">
            
            <button class="btn btn-primary" type="button" onclick="loadPage('client.html')">Server Side</button>
            <button class="btn btn-danger" type="button" onclick="loadPage('server.php')">Client Side</button>
            <button class="btn btn-info" type="button" onclick="loadPage('array.php')">Array</button>
             <button class="btn btn-warning" type="button" onclick="loadPage('postExample.php')">POST</button>
             <button class="btn btn-success" type="button" onclick="loadPage('getExample.php')">GET</button>
             <button class="btn btn-default" type="button" onclick="loadPage('objExample.php')">Cat</button>
             <button class="btn btn-danger" type="button" onclick="loadPage('form_example.php')">Forms</button>
            <hr>    
        </div>
        <div id="content" class="container">
            Start
        </div>
        <?php
        $theButton=$_POST['btnSend'];
        if(isset($theButton)){

$chosen=$_POST['country'];
echo 'You have chosen: '.$chosen;
unset($theButton);
        }
?>
            <div id="footer">
            <hr> OAMK 2017
            </div>
            
    </body>
</html>