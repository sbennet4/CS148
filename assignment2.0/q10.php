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
$columns=2;
      
        //now print out each record  
    // ######## for assignment 2 copy and change to display SQL statments ######

$query = 'SELECT COUNT(fldNumStudents), fldBuilding FROM tblSections WHERE fldDays LIKE "%f%" GROUP BY fldBuilding ORDER BY COUNT(fldNumStudents) DESC';
      echo $query; 
            print "<br>";
            print "<p>On Friday Kalkin has 43 where as on the Wednesday it has 51, because we are able to bring up any selection of data from the table we are able to verify the results.   </p>";
    $results = $thisDatabaseReader->select($query, "", 1, 1, 2, 0, false, false);
echo count ($results);
    
    print "<table>";
 foreach ($results as $row) {
     print "<tr>";
     for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $row[$i] . '</td>';
        }
        print "</tr>";
        
        // used to highlight alternate rows
         $highlight = 1; 
    
    
    
 }
 print "</table>";
    // all done



include "footer.php";
?>