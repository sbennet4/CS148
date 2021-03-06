<?php

//##############################################################################
//
// This page lists your tables and fields within your database. if you click on
// a database name it will show you all the records for that table. 
// 
// 
// This file is only for class purposes and should never be publicly live
//##############################################################################
include "top.php";
$columns=3;
      
        //now print out each record  
    // ######## for assignment 2 copy and change to display SQL statments ######

$query = 'SELECT fldFirstName, fldLastName, SUM(fldNumStudents) '
        . 'AS Total '
        . 'FROM tblSections '
        . 'JOIN tblTeachers '
        . 'ON fnkTeacherNetId = pmkNetId '
        . 'JOIN tblCourses '
        . 'ON pmkCourseId = fnkCourseId '
        . 'WHERE fldType != "LAB" '
        . 'AND fldNumStudents > 0 '
        . 'AND fldDepartment = "CS" '
        . 'GROUP BY fnkTeacherNetId '
        . 'ORDER BY Total DESC';

########################################################################
    // Performs a select query and returns an associtative array
    // 
    // $query should be in the form:
    //       SELECT fieldNames FROM table WHERE field = ?
    //       
    // $values is an array that holds the values for all the ? in $query.
    // 
    // Hackers try to add more where clauses and conditions so this is an 
    // attempt to not let them.
    // 
    // $wheres is the total number of WHERE statements in the query. 
    // 
    // $conditions is how many AND, &&, OR, ||, NOT, !, XOR ORDER BY are in the $query 
    //
    // $quotes is how many quotes your query string has
    // 
    // $symbols is for < and > in your conditional expression 
    // 
    // all of the above can be inside the wuery any place.
    //
    // function returns "" if it is not correct
    //
    // $this->sanitizeQuery is another attempt to stop Hackers
    //
    //  $spacesAllowed are %20 and not a blank space
    //  $semiColonAllowed is ; and generally you do not have them in your query
    //
    //public function select($query, $values = "", $wheres = 1, $conditions = 0, $quotes = 0, $symbols = 0, $spacesAllowed = false, $semiColonAllowed = false) 

            echo $query; 
            print "<br>";
    $results = $thisDatabaseReader->select($query, "", 1, 4, 4, 1, false, false);
echo count ($results);
     
    print "<table>";
 foreach ($results as $row) {
     print "<tr>";
    print "<th>";
     for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $row[$i] . '</td>';
        }
        print "</tr>";
        print "</th>";
        // used to highlight alternate rows
         $highlight = 1; 
    
    
    
 }
 print "</table>";
    // all done


include "footer.php";
?>