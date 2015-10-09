<!DOCTYPE html>
<html lang="en">
<head>
    <title>CS 148 Database Design</title>
    <meta charset="utf-8">
    <meta name="author" content="Skomer Bennett-Clemmow">
    <meta name="description" content="This is a site map to the assignments for CS 148.">
    <a href="xmlsitemap.xml"></a>
    
   <!--<link rel="stylesheet"
      href="stylesheet.css"
      media="screen">--!>

<?php
        $debug = false;
// %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// PATH SETUP
//

        
        $domain = "http://www.uvm.edu";
        if (isset($_SERVER['HTTPS'])) {
            if ($_SERVER['HTTPS']) {
                $domain = "http://www.uvm.edu";
            }
        }
        $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");
        $domain .= $server;
        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
        $path_parts = pathinfo($phpSelf);
        if ($debug) {
            print "<p>Domain" . $domain;
            print "<p>php Self" . $phpSelf;
            print "<p>Path Parts<pre>";
            print_r($path_parts);
            print "</pre>";
        }

  // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
//
// inlcude all libraries
//
  
        ('lib/security.php');
        if ($path_parts['filename'] == "form") {
            include "lib/validation-functions.php";
            include "lib/mail-message.php";
        }
        ?>

</head>
    <!-- ################ body section ######################### -->

    <?php
    print '<body id="' . $path_parts['filename'] . '">';
    ?>
   
   
    
</head>
<body id="home">
    
    <header>
		<h1>Skomer Bennett-Clemmow: CS 142 Advanced Web Design.</h1>
</header>


<nav>
<ul>
    <li>Assignment 1.0: 
<a href="assignment1.0/index.php">Assignment 1.0</a>

   </li>
   
   <li>Assignment 2.0: 
<a href="assignment2.0/select.php">Assignment 2.0</a>

   </li>
   
   <li>Friday Assignment 1.0: 
<a href="misc/friday.php">Assignment 2.0</a>

   </li>
   
   <li>Assignment 3.0: 
<a href="assignment3.0/join.php">Assignment 3.0</a>

   </li>
 
</ul>
    
</nav>
</body>