<?php

include_once('../includes/DBconnection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add course</title>
    <link rel="stylesheet" href="../css/MyStyle.css">
    <link rel="stylesheet" href="../css/style.css">

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
                        <li><a href="ViewCourses.php">Courses Information</a></li>
                        <li><a href="ViewExperience.php">Experience Information</a></li>
                        <li><a href="#" class="active">Add Course</a></li>
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
            <div class="AddCourses">
                <?php
                // upload image



                // if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                //     // $file_name = $_FILES['personal_image']['name'];        # img4784-5745sfs.png
                //     // $file_size = $_FILES['personal_image']['size'];
                //     // $file_tmp = $_FILES['personal_image']['tmp_name'];
                //     // $file_type = $_FILES['personal_image']['type'];
                //     // $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

                //     // $file_new_name = strval(time() + rand(1, 10000000)) . ".$file_ext";
                //     // $upload_path = '../images/' . $file_new_name;
                //     // move_uploaded_file($file_tmp, $upload_path);
                // }

                $nameErr = $hoursErr = $sDateErr = $eDateErr = $insErr = $attErr = $urlErr = "";

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $attach = $_POST['attach'];
                    $url = $_POST['url'];
                    $image = $_FILES['personal_image'];

                    $file_name = $_FILES['personal_image']['name'];
                    $image_tmp = $_FILES['personal_image']['tmp_name'];
                    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                    $file_new_name = strval(time() + rand(1, 10000000)) . ".$file_ext";
                    $upload_path = '../images/' . $file_new_name;
                    move_uploaded_file($image_tmp, $upload_path);

                    $image_path = str_replace('../', '', $upload_path);

                    if (empty($_POST['course_name'])) {
                        $nameErr = "Course name is required";
                    } else {
                        $name = ($_POST['course_name']);
                        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                            $nameErr = "Only letters and white space allowed";
                        }
                    }

                    if (empty($_POST['Hours'])) {
                        $hoursErr = "Total course hours is required";
                    } else {
                        $hours = ($_POST['Hours']);
                        if (!is_numeric($hours)) {
                            $hoursErr = "Only numeric values allowed";
                        }
                    }

                    if (empty($_POST['sDate'])) {
                        $sDateErr = "Start date of the course is required";
                    } else {
                        $startdate = ($_POST['sDate']);
                    }

                    if (empty($_POST['eDate'])) {
                        $eDateErr = "End date of the course is required";
                    } else {
                        $enddate = ($_POST['eDate']);
                    }

                    if (empty($_POST['ins'])) {
                        $insErr = "Institution name is required";
                    } else {
                        $ins = ($_POST['ins']);
                    }

                    $note = $_POST['note'];


                    if ($attach === "url") {
                        $url = $_POST['url'];
                        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
                            $urlErr = "Invalid URL";
                        }
                    }



                    if ($nameErr == "" && $hoursErr == "" && $sDateErr == "" && $eDateErr == "" && $insErr == "" && $attErr == "" && $urlErr == "") {
                        $query = "INSERT INTO `course` (`id`, `name`, `hours`, `datefrom`, `dateto`, `ins`, `note`, `url`,`image`) VALUES (NULL, '$name', '$hours', '$startdate', '$enddate', '$ins', '$note', '$url','$image_path') ";
                        $result = mysqli_query($connection, $query);
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
                                . '<p>' . $hoursErr . '</p>'
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
                            . '<p>' . $hoursErr . '</p>'
                            . '<p>' . $sDateErr . '</p>'
                            . '<p>' . $eDateErr . '</p>'
                            . '<p>' . $insErr . '</p>'
                            . '<p>' . $urlErr . '</p>'
                            . '<p>' . $attErr . '</p>'
                            . '</div>' . '</div>';
                    }
                }
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                    <table cellspacing="30">
                        <tr>
                            <td>
                                <label for="cName">Course Name:</label>
                            </td>
                            <td>
                                <input type="text" id="cName" class="form-inputs" name="course_name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="noHours">Number of Hours:</label>
                            </td>
                            <td>
                                <input type="number" id="noHours" class="form-inputs" name="Hours">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="sDate">Start Date:</label>
                            </td>
                            <td>
                                <input type="date" id="sDate" class="form-inputs" name="sDate">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="eDate">End Date:</label>
                            </td>
                            <td>
                                <input name="eDate" type="date" id="eDate" class="form-inputs">
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
                                Attachment:
                            </td>
                            <td>
                                <input type="radio" name="attach">File
                                <input type="radio" name="attach" class="urlRadio" value="url" checked>URL
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="url">URL:</label>
                            </td>
                            <td>
                                <input type="url" name="url" id="url" class="form-inputs">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="file">File:</label>
                            </td>
                            <td>
                                <input type="file" id="file" name="personal_image">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="note">Note:</label>
                            </td>
                            <td>
                                <textarea name="note" id="note" class="form-inputs"></textarea>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="Save">
                    <input type="reset" value="Reset">
                </form>
                <div class="image course">
                    <img src="../images/course.jpg" alt="Course">
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