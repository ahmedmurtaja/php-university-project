<?php
include_once '../includes/DBconnection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `course` where id = $id";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/MyStyle.css">
    <link rel="stylesheet" href="../css/courseview.css">
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <div class="contain">
                    <ul class="nav-links">
                        <li><a href="Home.php">Personal Information</a></li>
                        <li><a href="ViewCourses.php">Courses Information</a></li>
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
    <main>


        <section class="hero">
            <div class="hero_titel">
                <h1>Course " <?php echo $row['name']; ?> "</h1>
                <p>from <?php echo $row['datefrom']; ?> to <?php echo $row['dateto']; ?> ,totaly <?php echo $row['hours']; ?> training hours</p>
                        <p>Institution was " <?php echo $row['ins']; ?> "</p>
            </div>
            <?php $urls = 'http://localhost:8080/php-university-project/' . $row['image']; ?>
        </section>
        <section class="img_sec">
            <div class="contener">
                <div class="img">
                    <img src="<?php echo 'http://localhost:8080/php-university-project/' . $row['image']; ?>" alt="">
                </div>
            </div>

        </section>
    </main>
    <footer></footer>
</body>

</html>