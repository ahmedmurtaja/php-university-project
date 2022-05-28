<?php
include_once('../includes/DBconnection.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/MyStyle.css">
    <link rel="stylesheet" href="../css/secound.css">
</head>


<body>
    <div id="left"></div>
    <div id="right"></div>
    <div id="top"></div>
    <div id="bottom"></div>
    <header>
        <nav>
            <div class="container">
                <div class="contain">
                    <ul class="nav-links">
                        <li><a href="Home.php">Personal Information</a></li>
                        <li><a href="#" class="active">Courses Information</a></li>
                        <li><a href="ViewExperience.php">Experience Information</a></li>
                        <li><a href="AddCourse.php">Add Course</a></li>
                        <li><a href="AddExperience.php">Add Experience</a></li>
                    </ul>
                    <div class="logo">
                        <img src="../images/Azhar_WHITE_LOGO.png" alt="Logo" width="80" height="80">
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <h1>All Courses Informaiton</h1>
    <div class="courses-content">

        <table cellpadding="3" style="border-radius: 8px;" cellspacing="0">

            <tr class="c">
                <th rowspan="2" colspan="1" class="horo" id="b1">#</th>
                <th rowspan="2" colspan="2" width="200px">Course Name</th>
                <th rowspan="2" colspan="2" width="100px">Total Hours</th>
                <th colspan="2" width="200px">Date</th>
                <th rowspan="2" colspan="2" width="170">Institution</th>
                <th rowspan="2" colspan="2" width="100px">Attachment</th>
                <th rowspan="2" colspan="2" width="200px" id="b2">Notes</th>
            </tr>
            <tr class="c">

                <th width="100px">From</th>
                <th width="100px">To</th>
            </tr>
            <?php
            // pdo connection
            $pdo = new PDO('mysql:host=localhost;dbname=webproject', 'root', '');

            $courses = $pdo->query("SELECT * FROM course");
            $i = 1;
            while ($row = $courses->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr class="c">
                    <td class="horo"><?php echo $i; ?></td>
                    <td class="horo" colspan="2"><?php echo $row['name']; ?></td>
                    <td class="horo" colspan="2"><?php echo $row['hours']; ?></td>
                    <td class="horo"><?php echo $row['datefrom']; ?></td>
                    <td class="horo"><?php echo $row['dateto']; ?></td>
                    <td class="horo" colspan="2"><?php echo $row['ins']; ?></td>
                    <td class="horo" colspan="2"> <?php echo $row['url']; ?> </td>
                    <td class="horo"><?php echo $row['note']; ?></td>
                </tr>
            <?php
                $i++;
            }
            // $sql = "SELECT * FROM  Course";
            // $result = mysqli_query($connection, $sql);
            // if (mysqli_num_rows($result) > 0) {
            //     $i = 0;
            //     while ($row = mysqli_fetch_assoc($result)) { // output data of each row
            //         $courses[$i] = array(
            //             "id" => $row["id"],
            //             "name" => $row["name"],
            //             "total_hours" => $row["hours"],
            //             "start_date" => $row["datefrom"],
            //             "end_date" => $row["dateto"],
            //             "institution" => $row["ins"],
            //             "attachment" => $row["url"],
            //             "notes" => $row["note"]
            //         );
            //         $i++;
            //     }
            // } else
            //     echo "0 results";

            // for ($i = 0; $i < count($courses); $i++) {
            //     $id = $courses[$i]["id"];
            //     $name = $courses[$i]["name"];
            //     $start_date = $courses[$i]["start_date"];
            //     $total_hours = $courses[$i]["total_hours"];
            //     $end_date = $courses[$i]["end_date"];
            //     $institution = $courses[$i]["institution"];
            //     $attachment = $courses[$i]["attachment"];
            //     $notes = $courses[$i]["notes"];

            
            // <tr height="80px" >
            //     <th >$id</th>
            //     <td colspan="2">$name</td>
            //     <td colspan="2">$total_hours</td>
            //     <td>$start_date</td>
            //     <td>$end_date</td>
            //     <td colspan="2">$institution</td>
            //     <td colspan="2"><a href="Course_1View.php" target="_blank">View</a></td>
            //     <td >$notes</td>
            // </tr>'; } 
            ?>
            <tr height="80px">
                <th>2</th>
                <td colspan="2">Web Technelogy</td>
                <td colspan="2">45</td>
                <td>20/1/2021</td>
                <td>15/4/2021</td>
                <td colspan="2">Vision Plus</td>
                <td colspan="2"><a href="Course_2View.php" target="_blank">View</a></td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, iusto!</td>
            </tr>
            <tr height="80px">
                <th>3</th>
                <td colspan="2">Electrical Circuits</td>
                <td colspan="2">35</td>
                <td>10/6/2021</td>
                <td>15/7/2021</td>
                <td colspan="2">Coursera</td>
                <td colspan="2"><a href="Course_3View.php" target="_blank">View</a></td>
                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque, esse.</td>
            </tr>
            <tr height="80px">
                <th id="b3">4</th>
                <td colspan="2">Operationg Systems</td>
                <td colspan="2">25</td>
                <td>1/8/2021</td>
                <td>15/9/2021</td>
                <td colspan="2">Udemy</td>
                <td colspan="2"><a href="Course4View.php" target="_blank">View</a></td>
                <td id="b4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, vel.</td>
            </tr>
        </table>
    </div>

</body>

</html>