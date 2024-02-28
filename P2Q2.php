<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>P2Q2</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <?php

        /*
            Tips
            =====
            - PHP Variables [https://www.w3schools.com/php/php_variables.asp]
            - PHP echo and print Statements [https://www.w3schools.com/php/php_echo_print.asp]
            - PHP Regular Expressions [https://www.w3schools.com/php/php_regex.asp]
            - PHP preg_match() Function [https://www.w3schools.com/php/func_regex_preg_match.asp]
            - PHP Shorthand if Statements [https://www.w3schools.com/php/php_if_shorthand.asp]
            - PHP Concatenate Strings [https://www.w3schools.com/php/php_string_concatenate.asp]
        */
        $s1 = 'INVALID-ID';
        $s2 = '1234567890';
        $s3 = '00XXX12345';
        $s4 = '00WAD12345';
        
        $color = "red";

        //$pattern = '/^\d{2}[A-Z]{3}\d{5}$/'; // P1Q8(a)
        $pattern = '/^\d[ACJPSW][ABHPT][ABCDP]\d{5}$/'; // P1Q8(b)
        // Chapter 2-3 PHP Working with Strings - Slide 43- 47
        echo '<pre>';
        echo $s1. ' = ' . (preg_match($pattern, $s1) ? 'Matched' : 'Not matched') . "\n";
        echo $s2. ' = ' . (preg_match($pattern, $s2) ? 'Matched' : 'Not matched') . "\n";
        echo $s3. ' = ' . (preg_match($pattern, $s3) ? 'Matched' : 'Not matched') . "\n";
        echo $s4. ' = ' . (preg_match($pattern, $s4) ? 'Matched' : 'Not matched') . "\n";
        echo '</pre>';

        ?>

        <p>
            [ <a href="index.php">Back</a> ]
        </p>
    </body>
</html>
