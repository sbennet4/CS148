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

$query = 'SELECT fldLastName, fldFirstName FROM tblTeachers WHERE pmkNetId LIKE "r%" AND pmkNetId LIKE "%o"';

            echo $query; 
            print "<br>";
    $results = $thisDatabaseReader->select($query, "", 1, 1, 4, 0, false, false);
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