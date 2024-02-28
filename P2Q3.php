<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>P2Q3</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <table style="border:1px solid black;border-collapse:collapse">
            <tr style="background-color:#cccccc">
                <th>COURSE</th>
                <th>PASSING RATE</th>
            </tr>
            <?php
                /*
                    Tips
                    =====
                    - PHP Variables [https://www.w3schools.com/php/php_variables.asp]
                    - PHP Operators [https://www.w3schools.com/php/php_operators.asp]
                    - PHP echo and print Statements [https://www.w3schools.com/php/php_echo_print.asp]
                    - PHP Shorthand if Statements [https://www.w3schools.com/php/php_if_shorthand.asp]
                    - PHP Associative Arrays [https://www.w3schools.com/php/php_arrays_associative.asp]
                    - PHP foreach Loop [https://www.w3schools.com/php/php_looping_foreach.asp]
                    - PHP Concatenate Strings [https://www.w3schools.com/php/php_string_concatenate.asp]
                    - PHP Strings [https://www.w3schools.com/php/php_string.asp]
                */

            $data = array(
                "AACS3013" => 70,
                "AACS3073" => 95,
                "AAMS3683" => 55,
                "AACS3034" => 75,
                "AHLA3413" => 65
            );
            
            // Chapter 2-4 PHP Arrays: Slide 4 - 16
            // Chapter 2-2 PHP Decision and Loops: slide 7
            foreach ($data as $key => $value)
            {
                $width = ($value * 5) . 'px';
                $color = ($value >= 70 ? 'lightblue' : 'pink');

                echo "
                    <tr>
                    <td>$key</td>
                    <td><span style='
                        display: inline-block;
                        background-color: $color;
                        width: $width'>&nbsp;</span> $value%
                    </td>
                    </tr>";
            }                


            ?>
        </table>

        <p>
            [ <a href="index.php">Back</a> ]
        </p>
    </body>
</html>
