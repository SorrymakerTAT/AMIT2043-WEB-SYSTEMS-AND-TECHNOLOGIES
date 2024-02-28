<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>P2Q1</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <?php
        /*
            Tips
            =====
            - date_default_timezone_set() [https://www.w3schools.com/php/func_date_default_timezone_set.asp]
            - PHP Variables [https://www.w3schools.com/php/php_variables.asp]
            - PHP date() Function [https://www.w3schools.com/php/func_date_date.asp]
            - PHP echo and print Statements [https://www.w3schools.com/php/php_echo_print.asp]
            - PHP Strings [https://www.w3schools.com/php/php_string.asp]
        */
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $now = date('d-F-Y h:i:s A'); 
        echo "<h1>$now</h1>";  
        
        ?>

        <p>
            [ <a href="index.php">Back</a> ]
        </p>
    </body>
</html>

