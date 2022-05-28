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
    <link rel="stylesheet" href="../css/secound.css">
    <link rel="stylesheet" href="../css/MyStyle.css">

</head>


<body>
    <!-- <div id="left"></div>
    <div id="right"></div>
    <div id="top"></div>
    <div id="bottom"></div> -->
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
                <th calss="horo" rowspan="2" colspan="2" width="200px">Course Name</th>
                <th calss="horo" rowspan="2" colspan="2" width="100px">Total Hours</th>
                <th calss="horo" colspan="2" width="200px">Date</th>
                <th calss="horo" rowspan="2" colspan="2" width="170">Institution</th>
                <th calss="horo" rowspan="2" colspan="2" width="100px">Attachment</th>
                <th calss="horo" rowspan="2" colspan="2" width="200px" id="b2">Notes</th>
                <th calss="horo" rowspan="2" colspan="2" width="120px" id="b2">image</th>
                <th calss="horo" rowspan="2" colspan="2" width="120px" id="b2">view</th>
            </tr>
            <tr class="c">

                <th width="100px">From</th>
                <th width="100px">To</th>
            </tr>
            <?php
            // mysql fetch data

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
                    <?php $urls = 'http://localhost:8080/php-university-project/' . $row['image']; ?>
                    <td class="horo" colspan="2"><img src="<?php echo 'http://localhost:8080/php-university-project/' . $row['image']; ?>" alt="image" width="50" height="50"></td>
                    <td class="horo" colspan="2"><a href="<?php echo 'Course_1View.php?id='.$row['id'];?>"> view </a> </td>

                </tr>
            <?php
                $i++;
            }
            $pdo = null; // close connection

            ?>




        </table>
    </div>

</body>

</html>