<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/MyStyle.css">
    <style>
        .contener{
            margin: 50px 0 10px 120px;
        }
        .img img{
            box-shadow: 0 0 10px rgba(58, 57, 57, 0.671);
            width: 90%;
        }
        .img_sec{
            margin-top: -35px;
        }
       .hero_titel{
            margin: 30px 0 0 100px;
            line-height: 1.6;
        }


    </style> 

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
                <h1>Course "Web Technelogy"</h1>
                <p>from 20/1/2021 to 15/4/2021 ,totaly 45 training hours</p>
                <p>Institution was " coursera site"</p>
            </div>
            
        </section>
        <section class="img_sec">
            <div class="contener">
                <div class="img">
                    <img src="../images/attachment.png" alt="">
                </div>
                <span>Certifcate File</span>
            </div>
           
        </section>
    </main>
    <footer></footer>
</body>
</html>