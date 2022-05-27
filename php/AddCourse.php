<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add course</title>
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
                       <li><a href="Home.html" >Personal Information</a></li>
                       <li><a href="ViewCourses.html">Courses Information</a></li>
                       <li><a href="ViewExperience.html">Experience Information</a></li>
                       <li><a href="#" class="active">Add Course</a></li>
                       <li><a href="AddExperience.html">Add Experience</a></li>
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
               <form action="">
                    <table cellspacing="30">
                        <tr>
                            <td>
                                <label for="cName">Course Name:</label>
                            </td>
                            <td>
                                <input type="text" id="cName" class="form-inputs">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="noHours">Number of Hours:</label>
                            </td>
                            <td>
                                <input type="number" id="noHours" class="form-inputs">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                     <label for="sDate">State Date:</label>
                            </td>
                            <td>
                                       <input type="date" id="sDate" class="form-inputs">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                     <label for="eDate">End Date:</label>
                            </td>
                            <td>
                                       <input type="date" id="eDate" class="form-inputs">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="ins">Institution:</label>
                            </td>
                            <td>
                                <input type="text" id="ins" class="form-inputs">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Attachment:
                            </td>
                            <td>
                                <input type="radio" name="attach">File
                                <input type="radio" name="attach" class="urlRadio">URL
                            </td>
                        </tr>
                        <tr>
                            <td>
                                  <label for="url">URL:</label>
                            </td>
                            <td>
                                <input type="url" id="url" class="form-inputs">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="file">File:</label>
                            </td> 
                            <td>
                                <input type="file" id="file">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="note">Note:</label>
                            </td>
                            <td>
                               <textarea name="" id="note"  class="form-inputs"></textarea>
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
    
</body>
</html>