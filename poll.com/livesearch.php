<?php

  include('./inc/connect.inc.php');


/*  $xmlDoc=new DOMDocument();
   $xmlDoc->load("links.xml");

   $x=$xmlDoc->getElementsByTagName('link');

   //get the q parameter from URL
   $q=$_GET["q"];

   //lookup all links from the xml file if length of q>0
   if (strlen($q)>0) {
     $hint="";
     for($i=0; $i<($x->length); $i++) {
       $y=$x->item($i)->getElementsByTagName('title');
       $z=$x->item($i)->getElementsByTagName('url');
       if ($y->item(0)->nodeType==1) {
         //find a link matching the search text
         if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
           if ($hint=="") {
             $hint="<a href='" .
             $z->item(0)->childNodes->item(0)->nodeValue .
             "' target='_blank'>" .
             $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
           } else {
             $hint=$hint . "<br /><a href='" .
             $z->item(0)->childNodes->item(0)->nodeValue .
             "' target='_blank'>" .
             $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
           }
         }
       }
     }
   }

   // Set output to "no suggestion" if no hint was found
   // or to the correct values
   if ($hint=="") {
     $response="no suggestion";
   } else {
     $response=$hint;
   }

   //output the response
   echo $response;*/


  $partialResults = $_POST['partialResults'];

  $results = mysql_query("SELECT * FROM posts WHERE question LIKE '%$partialResults%'");
  while($row = mysql_fetch_array($results)) {

    $q = $row['question'];

    echo ."
      <div class='pollsearchresults'>
        <h1>$q</h1>
        <h2>1 week ago</h2>
        <h1 class='psrv'>1738</h1>
        </div>
    ";

  }



/*
$outputuser = '';
$outputpoll = '';
$searchtext = $_POST['searchVal'];

  if (isset($_POST['searchVal'])) {
    $searchquery = $_POST['searchVal'];

$queryuser = mysql_query("SELECT * FROM users WHERE username LIKE '%$searchquery%' OR name like '%$searchquery%'")
    or die ('could not search');

    $countuser=mysql_num_rows($queryuser);
    if ($countuser==0) {
      $outputuser = '<h1 class="sruerror">No results found :\'(</h1>';
    }
    else {
      while ($rowuser=mysql_fetch_array($queryuser)) {
        $un=$rowuser['username'];
        $n=$rowuser['name'];

        $outputuser .= "
        <div class='usersearchresults'>
          <img src='profpicsample.jpg'>
          <h1>$un</h1>
          <h2>$n</h1>
        </div>
        ";
      }
    }

    $querypoll = mysql_query("SELECT * FROM posts WHERE question LIKE '%$searchquery%'")
    or die ('could not search');

    $countpoll=mysql_num_rows($querypoll);
    if ($countpoll==0) {
      $outputpoll = '<h1 class="srperror">No results found :\'(</h1>';
    }
    else {
      while ($rowpoll=mysql_fetch_array($querypoll)) {
        $q=$rowpoll['question'];

        $outputpoll .= "
        <div class='pollsearchresults'>
          <h1>$q</h1>
          <h2>1 week ago</h2>
          <h1 class='psrv'>1738</h1>
        </div>
        ";
      }
    }
  }

echo ($outputuser);
echo ($outputpoll);*/

?>
