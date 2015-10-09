
<?php include "top.php"; ?>


<body id="home">
    
    <header>
		<h1>Skomer Bennett-Clemmow: Assignment 3.0</h1>
</header>


<nav>
<ul>
  
   <li>Q1:

<a href="q1.php">'SELECT DISTINCT(fldCourseName) FROM tblCourses INNER JOIN tblEnrolls ON pmkCourseId = fnkCourseId WHERE fldGrade = "100" GROUP BY fldCourseName';</a>
   </li>
   
   <li> Q2:
       
   <a href="q2.php">'SELECT DISTINCT fldDays, fldStart, fldStop 
       FROM tblSections INNER JOIN tblTeachers 
       ON tblTeachers.pmkNetId = tblSections.fnkTeacherNetId 
       WHERE fldLastName LIKE "%Snapp%" GROUP BY fldStart, fldStop';</a>
   </li>
   <li> Q3:
       
   <a href="q3.php">'SELECT DISTINCT fldCourseName, fldStart, fldStop 
       FROM tblSections INNER JOIN tblCourses ON tblCourses.pmkCourseId = tblSections.fnkCourseId INNER JOIN tblTeachers 
       ON tblTeachers.pmkNetId = tblSections.fnkTeacherNetId WHERE pmkNetId = "jlhorton" ORDER BY fldStart, fldStop';</a>
   </li>
   <li> Q4:
       
   <a href="q4.php">'SELECT fnkSectionId, fldFirstName, fldLastName 
       FROM tblStudents INNER JOIN tblEnrolls ON tblStudents.pmkStudentId = tblEnrolls.fnkStudentId INNER JOIN tblCourses '
    ON tblCourses.pmkCourseId = tblEnrolls.fnkCourseId WHERE fldCourseName LIKE "Database Design for the Web" ORDER BY fnkSectionId, fldFirstName, fldLastName';</a>
   </li>
   <li> Q5:
       
   <a href="q5.php">'SELECT fldFirstName, fldLastName, SUM(fldNumStudents) AS Total 
       FROM tblSections JOIN tblTeachers ON fnkTeacherNetId = pmkNetId JOIN tblCourses 'ON pmkCourseId = fnkCourseId 
       WHERE fldType != "LAB" AND fldNumStudents > 0 AND fldDepartment = "CS" GROUP BY fnkTeacherNetId ORDER BY Total DESC';</a>
   </li>
   <li> Q6:
       
   <a href="q6.php">SELECT tblTeachers.fldFirstName, fldPhone, fldSalary FROM tblTeachers WHERE fldSalary < (SELECT AVG(fldSalary) FROM tblTeachers)';</a>
   </li>
   <li> Q7:
       
   <a href="q7.php">7</a>
   </li>
   <li> Q8:
       
   <a href="q8.php">8</a>
   </li>
   
</ul>
    
</nav>
</body>




<?php //include "footer.php"; 