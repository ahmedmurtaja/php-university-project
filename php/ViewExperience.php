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
    <header>
        <nav>
            <div class="container">
                <div class="contain">
                    <ul class="nav-links">
                        <li><a href="Home.php">Personal Information</a></li>
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
                // fetch data from database
                $sql = "SELECT * FROM `Experience`";
                $result = mysqli_query($connection, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<section class="first">' . '<h3>'. $row['title'] .
                        '<sub>'. $row['institution'].'/'. $row['category'].'</sub>'.'</h3>'.
                        '<h4>'.'from' .$row['startdate'].'to'. $row['enddate'].'</h4>'.
                        '<p>'. $row['description'].'</p>'. '</section>';
                        
                    }
                }
                 else {
                    echo "0 results";
                }
                ?>
                <section class="first">
                    <h3>IOS <sub>Google/trainning</sub></h3>
                    <h4>from 5/2016 to 5/2020</h4>
                    <p>At the beginning of 2020, I noticed an increase in the demand in the labor market for the field of mobile software development, so I decided to take a Java course and start developing mobile software, and I finished training on 4/2021 and started tranning in Google company for 3 months and afterthat I started freelancing alone because I had a good experience in this field.</p>
                </section>
                <section class="first">
                    <h3>Backedn Development <sub>Facebook/Job</sub></h3>
                    <h4>from 5/2020 to 5/2021</h4>
                    <p>After the mobile software development experience, I became a second year university and took front end development (HTML, CSS and Javascript), and I liked the topic, then I improved my skills and I decided to take a back end development course (php) and become a full stack developer , after several months of expereince I decided to make a new experiment and alot of attemps finally , I could to work in Facebook company for 1 year.</p>
                </section>
                <section class="first">
                    <h3>Data Structure <sub>prog school/job</sub></h3>
                    <h4>from 5/2021 to 5/2022</h4>
                    <p>Machine learning works with huge data sets, so fundamental knowledge of computer science and the underlying architecture is compulsory. Expertise in working with big data analytics, and complex data structures, are a must. Thus, a degree or a formal course in these domains is required for a machine learning career. Your resume must display your skills at working with parallel/distributed architecture, data structure like trees and graphs, and complex computations. These are required to apply or implement, at the time of programming</p>
                </section>
                <section class="first">
                    <h3>Artificial Intelligence – R, Python, Java <sub>AliExpress company/job</sub></h3>
                    <h4>from 5/2022 to 5/2023</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, culpa? Exercitationem, minima dolorem laboriosam, et inventore ducimus laborum, totam doloremque sint velit necessitatibus enim assumenda hic libero mollitia nemo nihil quos fugit facere dignissimos. Magni accusamus at, numquam obcaecati molestiae dolores sequi odio veniam maiores rem expedita aliquam odit dolorem delectus corporis accusantium placeat, aperiam qui rerum cumque esse debitis?</p>
                </section>
                <section class="first">
                    <h3>Web programming <sub>Tesla/Job</sub></h3>
                    <h4>from 5/2023 to 5/2024</h4>
                    <p>The theories of probability are the mainstays of the most machine learning algorithm. Being familiar with probability enables you to deal with the uncertainty of data. Getting a grasp of the probability theories like Python, Gaussian Mixture Models, and Hidden Markov Models; is a must if you want to be considered for a machine learning job that centres around model building and evaluation.</p>
                </section>
            </div>

        </div>

    </main>


</body>

</html>