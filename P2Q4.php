<?php

    /*
        Tips
        =====
        - PHP Variables [https://www.w3schools.com/php/php_variables.asp]
        - PHP Functions [https://www.w3schools.com/php/php_functions.asp]
        - PHP Operators [https://www.w3schools.com/php/php_operators.asp]
        - PHP if Statements [https://www.w3schools.com/php/php_if_else.asp]
        - PHP switch Statement [https://www.w3schools.com/php/php_switch.asp]
    */    


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>P2Q4</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <table style="border:1px solid black;">
            <tr>
                <th>Name</th>
                <th>Mark</th>
                <th>Grade</th>
                <th>Comment</th>
            </tr>
            <?php
            
            

            function getGrade($mark){
                 if ($mark >=80){
                    return "A";
                 } else if ($mark >=70 && $mark < 80){
                    return "B";
                    } else if ($mark >=60 && $mark < 70){
                    return "C";
                    } else if ($mark >=50 && $mark < 60){
                    return "D";
                    } else {
                    return "F";
                    }

                 }
            
                 

            function getComment($grade){
                switch($grade){
                    case "A":
                        return "Passed with distinction";
                        break;
                    case "B":
                        return "Passed";
                        break;
                    case "C":
                        return "Passed";
                        break;
                    case "D":
                        return "Passed with condition";
                        break;
                    case "F":
                        return "Failed";
                        break;
                }
            }

            

            $marks = array("Alex"=>90,"Barbie"=>65,"Christine"=>45,"Danny"=>55,"Elaine"=>75);
            foreach($marks as $studentName=>$marksObtained){
             echo "<tr>";
             echo "<td>".$studentName."</td>";
                echo "<td>".$marksObtained."</td>";
                echo "<td>".getGrade($marksObtained)."</td>";
                echo "<td>".getComment(getGrade($marksObtained))."</td>";
             echo "</tr>";
            }
            
                /*
                    Tips
                    =====
                    - PHP Variables [https://www.w3schools.com/php/php_variables.asp]
                    - PHP Functions [https://www.w3schools.com/php/php_functions.asp]
                    - PHP echo and print Statements [https://www.w3schools.com/php/php_echo_print.asp]
                    - PHP Associative Arrays [https://www.w3schools.com/php/php_arrays_associative.asp]
                    - PHP foreach Loop [https://www.w3schools.com/php/php_looping_foreach.asp]
                    - PHP Strings [https://www.w3schools.com/php/php_string.asp]
                */ 

            $marks = array(
                "Alex " => 90,
                "Barbie" => 65,
                "Christina" => 45,
                "Danny" => 55,
                "Elaine" => 75,    
            );
                    
        foreach ($marks as $key => $Value)
        {
            $grade = getGrade($value);
            $comment = getComment($grade);
            
            echo "
            <tr>
            <td>$key</td>
            <td>$value</td>
            <td>$grade</td>
            <td>$comment</td>
            </tr>";
            
        }
            ?>
            
        </table>

        <p>
            [ <a href="index.php">Back</a> ]
        </p>
    </body>
</html>