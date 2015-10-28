<?php include "top.php"; ?>


<body id="home">
    
    <header>
		<h1>Skomer Bennett-Clemmow: Assignment 2.0</h1>
</header>


<nav>
<ul>
  
   <li>Q1:

<a href="q1.php">'SELECT pmkNetId FROM tblTeachers';</a>
   </li>
   
   <li> Q2:
       
   <a href="q2.php">'SELECT fldDepartment from tblCourses WHERE fldCourseName LIKE "Introduction%"';</a>
   </li>
   <li> Q3:
       
   <a href="q3.php">'SELECT * FROM tblSections WHERE fldStart="13:10:00" AND fldBuilding= "Kalkin"';</a>
   </li>
   <li> Q4:
       
   <a href="q4.php">'SELECT * FROM tblCourses WHERE pmkCourseID="392" ';</a>
   </li>
   <li> Q5:
       
   <a href="q5.php">'SELECT fldLastName, fldFirstName FROM tblTeachers WHERE pmkNetId LIKE "r%" AND pmkNetId LIKE "%o"';</a>
   </li>
   <li> Q6:
       
   <a href="q6.php">'SELECT fldCourseName FROM tblCourses WHERE fldCourseName LIKE "%data%" AND  fldDepartment NOT LIKE "CS"';</a>
   </li>
   <li> Q7:
       
   <a href="q7.php">'SELECT COUNT(DISTINCT fldDepartment) FROM tblCourses';</a>
   </li>
   <li> Q8:
       
   <a href="q8.php">'SELECT COUNT(fldSection), fldBuilding FROM tblSections GROUP BY fldBuilding';</a>
   </li>
   <li> Q9:
       
   <a href="q9.php">'SELECT COUNT(fldNumStudents), fldBuilding FROM tblSections WHERE fldDays LIKE "%W%" GROUP BY fldBuilding ORDER BY COUNT(fldNumStudents) DESC';</a>
   </li>
   
   <li> Q10:
       
   <a href="q10.php">'SELECT COUNT(fldNumStudents), fldBuilding FROM tblSections WHERE fldDays LIKE "%f%" GROUP BY fldBuilding ORDER BY COUNT(fldNumStudents) DESC';</a>
   </li>
   
   <li> Q11:
       
   <a href="q11.php">'SELECT fnkCourseId FROM tblSections GROUP BY fnkCourseId HAVING COUNT(fnkCourseID) >= "50"';</a>
   </li>
   
   <li> Q12:
       
   <a href="q12.php">'SELECT COUNT(fldNumStudents - fldMaxStudents) FROM tblSections WHERE fldNumStudents>fldMaxStudents';</a>
   </li>
</ul>
    
</nav>
</body>




<?php //include "footer.php";
