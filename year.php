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
        .topDiv{
            width: 100%;
            height: 80px;
            position: fixed;
            top: 60px;
        }
        .top {
            width: 1100px;
            height: 80px;
            background:#d7f7ef;
            border-bottom: 5px solid #666;
            color:white;
            text-align: center;
            font-size: 60px;
            margin: auto;
            animation: s 5s linear infinite;
        }
        @keyframes s {
            0%{
                
            }
            50%{
                
            }
            100%{
                
            }
        }

        main {
            margin: 137px auto;
            width: 1000px;
            height: 1500px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-content: flex-start;
        }

        .monthDiv {
            margin-top: 3px;
            width: 330px;
            height: 380px;
            background-color: #07252d;
            border-radius: 10px;
        }

        .monthDiv:hover {
            box-shadow: 0 0 10px #ccc;
        }

        a {
            text-decoration: none;
        }

        tr:nth-child(1)>td {
            font-size: 26px;
            color: white;
        }

        td {
            width: 45px;
            height: 45px;
            text-align: center;
            color: white;
            font-weight: bolder;
        }
    </style>
</head>
<?php
$year = date("Y");
$month = 1;
$month_day = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
$month_name = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
?>

<body>
    <?php
    include "nav.php";
    ?>
    <div class ="topDiv">
        <div class="top">
            <?= ($year) ?>
        </div>
    </div>
    <main>

        <?php
        for ($i = 0; $i < 12; $i++) {
            $da = $year . "-" . $month . "-1";
            if (date("L", strtotime($da)) == 1) {
                $month_day[1] = 29;
            }
            $startDiv = date("w", strtotime($da));
            echo "<div class = 'monthDiv'><a href='./index.php?year=$year&month=$month'><table>";
            for ($x = 0; $x < 8; $x++) {
                echo "<tr>";
                if ($x == 0) {
                    echo "<td colspan ='7'>" . $month_name[($month - 1)] . "</td>";
                } else if ($x == 1) {
                    echo "<td>Sun</td>";
                    echo "<td>Mon</td>";
                    echo "<td>Thus</td>";
                    echo "<td>Wed</td>";
                    echo "<td>Tues</td>";
                    echo "<td>Fri</td>";
                    echo "<td>Sat</td>";
                } else {
                    for ($y = 0; $y < 7; $y++) {
                        if((($x-2) * 7 + $y) >= $startDiv && (($x-2) * 7 + $y) < $startDiv + $month_day[($month - 1)]){
                            echo "<td>".(($x-2) * 7 + $y - $startDiv + 1)."</td>";
                        }else{
                        echo "<td></td>";
                        }
                    }
                }
                echo "</tr>";
            }
            echo "</table></a></div>";
            $month++;
        }
        ?>
    </main>
</body>

</html>