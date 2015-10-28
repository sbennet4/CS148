
<?php
include "top.php";
//##############################################################################
//
// This page lists the records based on the query given
// 
// i tend to print out each array to see what is inside it. this helps with my
// understanding
// if ($debug) {
//    print "<p>Contents of the fields array<pre>";
//    print_r($fields);
//    print "</pre></p>";
// }
//##############################################################################
if(isset($_GET['offset'])) {$offset = $_GET['offset'];
}
$limit = 10;
//$offset = 999;

$query = 'SELECT fldFirstName, fldLastName FROM tblTeachers LIMIT ' . $limit . ' OFFSET ' . $offset;
$records = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);
// the array $records is both associative and indexed, column zero is associative
// which you see in teh above print_r statement     



$fields = array_keys($records[0]);
$labels = array_filter($fields, "is_string");
$columns = count($labels);
print '<table>';
print '<tr><th colspan="' . $columns . '">' . $query . '</th></tr>';
// print out the column headings, note i always use a 3 letter prefix
// and camel case like pmkCustomerId and fldFirstName
print '<tr>';
foreach ($labels as $label) {
    print '<th>';
    $camelCase = preg_split('/(?=[A-Z])/', substr($label, 3));
    foreach ($camelCase as $one) {
        print $one . " ";
    }
    print '</th>';
}
print '</tr>';
//now print out each record
foreach ($records as $record) {
    print '<tr>';
    for ($i = 0; $i < $columns; $i++) {
        print '<td>'. $record[$i] . '</td>';
    }
    print '</tr>';
}
// all done
print '</table>';

if($offset != 999)
{
  $next = $offset + 10;
print '<p> <a href = "https://sbennet4.w3.uvm.edu/cs148develop/misc/friday.php?offset=' . $next . '"> next </a> </p>';  
}
   
if($offset != 0)
{
$back = $offset - 10; 
print '<p> <a href = "https://sbennet4.w3.uvm.edu/cs148develop/misc/friday.php?offset=' . $back . '"> back </a> </p>';
}
include "footer.php";
?>
