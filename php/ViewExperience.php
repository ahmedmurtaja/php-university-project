<?php

include_once('../includes/DBconnection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Experience</title>
    <link rel="stylesheet" href="../css/MyStyle.css">
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
                       <li><a href="Home.php" >Personal Information</a></li>
                       <li><a href="ViewCourses.php">Courses Information</a></li>
                       <li><a href="#" class="active">Experience Information</a></li> 
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
       <div class="container">
           <div class="viewExp">
            <h1>All Experience Information</h1>
               
          <?php
 $result = mysqli_query($connection, "SELECT * FROM experience");
 if (mysqli_num_rows($result) > 0) {
 }
 $i = 0;
 while ($row = mysqli_fetch_array($result)) { ?>
	<tr class="<?php if (isset($classname)) {
   echo $classname;
 } ?>     
               
            <section class="first">
                <h3><?php echo $row["category"]; ?>  <sub><?php echo $row["ins"]; ?> <?php echo '/ '; echo $row["title"]; ?></sub></h3>
                <h4>from <?php echo $row["smonth"]; ?> to <?php echo $row["emonth"]; ?></h4>
                <p><?php echo $row["description"]; ?> </p>
            </section>
            
           </div>
       </div>
   </main>
    <?php $i++;
                                            }
 ?>

    
</body>
</html>
