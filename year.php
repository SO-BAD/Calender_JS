<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            background-color: #d7f7ef;
        }

        main {
            margin: 90px auto;
            width: 1000px;
            height: 1400px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-content: flex-start;
        }

        .monthDiv {
            margin-top: 3px;
            width: 330px;
            height: 330px;
            background-color: #07252d;
            border-radius: 10px;
        }

        .monthDiv:hover {
            box-shadow: 0 0 10px #ccc;
        }
        td{
            width: 45px;
            height: 45px;
            text-align: center;
            color:white;
            font-weight: bolder;
        }
    </style>
</head>
<?php
        $year  = 2021;
        $month = 1;
?>
<body>
    <?php
    include "nav.php";
    ?>
    <main>

        <?php

        for ($i = 0; $i < 12; $i++) {

            echo "<div class = 'monthDiv'><table>";
            for ($x = 0; $x < 7; $x++) {
                echo "<tr>";
                if ($x == 0) {
                    echo "<td colspan ='7'>$year-$month</td>";
                    $month++;
                }else if( $x ==1){
                    echo "<td>Sun</td>";
                    echo "<td>Mon</td>";
                    echo "<td>Thus</td>";
                    echo "<td>Wed</td>";
                    echo "<td>Tues</td>";
                    echo "<td>Fri</td>";
                    echo "<td>Sat</td>";
                }else {
                    for ($y = 0; $y < 7; $y++) {
                        echo "<td></td>";
                    }
                }

                echo "</tr>";
            }
            echo "</table></div>";
        }
        ?>
    </main>
</body>

</html>