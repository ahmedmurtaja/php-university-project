<?php
include_once('../includes/DBconnection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Experience</title>
    <link rel="stylesheet" href="../css/MyStyle.css">
    <link rel="stylesheet" href="../css/style.css">
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
                        <li><a href="#" class="active">Add Experience</a></li>
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
            <div class="AddExp">
                <?php
                // erros statments
                $nameErr = $titleErr = $sDateErr = $eDateErr = $insErr = $attErr = $urlErr = "";





                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // experience name check
                    if (empty($_POST['ename'])) {
                        $nameErr = "Experience name is required";
                    } else {
                        $category = ($_POST['ename']);
                    }

                    // ins name check
                    if (empty($_POST['title'])) {
                        $titleErr = "title is required";
                    } else {
                        $title = $_POST['title'];
                    }

                    $note = $_POST['note'];

                    // ins check 
                    if (empty($_POST['ins'])) {
                        $insErr = "Institution name is required";
                    } else {
                        $ins = ($_POST['ins']);
                    }



                    if (empty($_POST['sDate'])) {
                        $sDateErr = "Start date of the course is required";
                    } else {
                        $startdate = ($_POST['sDate']);
                    }

                    if (empty($_POST['endDate'])) {
                        $eDateErr = "End date of the course 
                        is required";
                    } else {
                        $enddate = ($_POST['endDate']);
                    }
                




                if ($nameErr == "" && $titleErr == "" && $sDateErr == "" && $eDateErr == ""  && $attErr == "" && $urlErr == "") {
                    $sql = "INSERT INTO `experience` (id,category, title, startdate, enddate, institution, description)
                               VALUES (NULL,'$category', '$title', '$startdate', '$enddate', '$ins', '$note')";
                    $result = mysqli_query($connection, $sql);
                    if ($result) {
                        echo
                        '<div id="myModal" class="modal">' .
                            '<div class="modal-content">'
                            . '<span class="close">' . '&times;' . '</span>'
                            . '<p>' . 'New Record Added' . '</p>'
                            . '</div>' . '</div>';
                    } else {
                        echo
                        '<div id="myModal" class="modal">' .
                            '<div class="modal-content">'
                            . '<span class="close">' . '&times;' . '</span>'
                            . '<p>' . $nameErr . '</p>'
                            . '<p>' . $titleErr . '</p>'
                            . '<p>' . $sDateErr . '</p>'
                            . '<p>' . $eDateErr . '</p>'
                            . '<p>' . $insErr . '</p>'
                            . '<p>' . $urlErr . '</p>'
                            . '<p>' . $attErr . '</p>'
                            . '</div>' . '</div>' . mysqli_error($connection);;
                    }
                } else {
                    echo
                    '<div id="myModal" class="modal">' .
                        '<div class="modal-content">'
                        . '<span class="close">' . '&times;' . '</span>'
                        . '<p>' . $nameErr . '</p>'
                        . '<p>' . $titleErr . '</p>'
                        . '<p>' . $sDateErr . '</p>'
                        . '<p>' . $eDateErr . '</p>'
                        . '<p>' . $insErr . '</p>'
                        . '<p>' . $urlErr . '</p>'
                        . '<p>' . $attErr . '</p>'
                        . '</div>' . '</div>';
                }
            }

                ?>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <table cellspacing="30">
                        <tr>
                            <td>
                                <label for="cName">Experience Catogery:</label>
                            </td>
                            <td>
                                <input type="text" id="Cname" name="ename" class="form-inputs">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="title">title</label>
                            </td>
                            <td>
                                <input type="text" id="title" name="title" class="form-inputs">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="sDate" name="sDate">Start Date:</label>
                            </td>
                            <td>
                                <input type="date" id="sDate" name="sDate" class="form-inputs">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="eDate">End Date:</label>
                            </td>
                            <td>
                                <input type="date" name="endDate" id="eDate" class="form-inputs">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="ins">Institution:</label>
                            </td>
                            <td>
                                <input type="text" name="ins" id="ins" class="form-inputs">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="note">Note:</label>
                            </td>
                            <td>
                                <textarea name="note" name="note" id="note" class="form-inputs"></textarea>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="Save">
                    <input type="reset" value="Reset">

                </form>
                <div class="image exp">
                    <img src="../images/experience.jpg" alt="Course">
                </div>
            </div>
        </div>
    </main>
    <script>
        var modal = document.getElementById("myModal");
        var span = document.getElementsByClassName("close")[0];


        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>