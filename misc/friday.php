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
$columns=8;
      
        //now print out each record  
    // ######## for assignment 2 copy and change to display SQL statments ######

//selects all columns from the students, sorted by last name then first name
$query = 'SELECT * from tblStudents'
        . ' ORDER BY fldLastName, fldFirstName LIMIT ?,?';
//select * from tblStudents order by fldLastName, fldFirstName limit 10 offset 1000;

echo $query; 
print "<br>";


    $results = $thisDatabaseReader->select($query, "", 0, 1, 0, 0, false, false);
 echo count ($results);
   
    
          print "<table>";
          
      print "<tr><th>pmkStudentId</th><th>Last Name</th><th>First Name</th><th>Address</th><th>City</th><th>State</th><th>Zip</th><th>Gender</th></tr>";
    

       
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
