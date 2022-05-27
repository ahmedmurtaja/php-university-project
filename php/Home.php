<?php
include_once('../includes/DBconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Website</title>
    <link rel="stylesheet" href="../css/MyStyle.css"> 
    <!-- <link rel="stylesheet" href="../css/secound.css"> -->
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
                       <li><a href="#" class="active">Personal Information</a></li>
                       <li><a href="ViewCourses.php">Courses Information</a></li>
                       <li><a href="ViewExperience.php">Experience Information</a></li>
                       <li><a href="AddCourse.php">Add Course</a></li>
                       <li><a href="AddExperience.php">Add Experience</a></li>
                   </ul>
                   <div class="logo">
                       <img src="../images/Azhar_WHITE_LOGO.png" alt="Logo" width="70" height="70">
                   </div> 
                 </div>
             </div>
       </nav>
   </header>
   <main>
       <div class="container">
            <section class="infos">
                <h1 class="infos-title">Personal Information</h1>
                
                <div class="personal-info">
                    <table cellspacing="30">
                      <?php

						$query = "SELECT * from users";
						$result = mysqli_query($connection, $query);

						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>'
                            .'<td>'.'Full Name:'.'</td>'
                            .'<td>'.'<b>'.$row['name'].'</b>'.'</td>'
                        .'</tr>'.
                        
                        '<tr>'
                            .'<td>'.'Gender:'.'</td>'
                            .'<td>'.'<b>'.$row['gender'].'</b>'.'</td>'
                        .'</tr>'.

                        '<tr>'
                            .'<td>'.'Birth Date:'.'</td>'
                            .'<td>'.'<b>'.$row['birthdate'].'</b>'.'</td>'
                        .'</tr>'.

                        '<tr>'
                            .'<td>'.'Nationality:'.'</td>'
                            .'<td>'.'<b>'.$row['nationality'].'</b>'.'</td>'
                        .'</tr>'.

                        '<tr>'
                            .'<td>'.'Place Of Birth:'.'</td>'
                            .'<td>'.'<b>'.$row['origin'].'</b>'.'</td>'
                        .'</tr>'.

                        '<tr>'
                            .'<td>'.'Job Title:'.'</td>'
                            .'<td>'.'<b>'.$row['job'].'</b>'.'</td>'
                        .'</tr>'.
                        
                        '<tr>'
                            .'<td>'.'Years Of Experience:'.'</td>'
                            .'<td>'.'<b>'.$row['exp'].'  years'.'</b>'.'</td>'
                        .'</tr>';
                        break;
                            }
                        }
                        mysqli_close($connection);
                        
                          ?>  
                        
                    </table>
                    <div class="image">
                        <img src="../images/Screenshot 2021-12-24 202108.png" alt="" >
                    </div>          
                </div>
            </section> 
       </div>
   </main>   
</body>
</html>