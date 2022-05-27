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
                       <li><a href="Home.php" >Personal Information</a></li>
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
                   
    <table  cellpadding="3" style="border-radius: 8px;" cellspacing="0">
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
        <tr height="80px" >
            <th >1</th>
            <td colspan="2">Automata theory</td>
            <td colspan="2">48</td>
            <td>1/9/2021</td>
            <td>23/12/2021</td>
            <td colspan="2">Al-Azhar University</td>
            <td colspan="2"><a href="Course_1View.php" target="_blank">View</a></td>
            <td >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, necessitatibus!</td>
        </tr>
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
        <tr height="80px" >
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
            <td colspan="2" >Operationg Systems</td>
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