function do_html_header($title) { 
 // print an HTML header
?>
 <html>
 <head>
  <title><?php echo $title;?></title>
  <style>
   body { font-family: Arial, Helvetica, sans-serif; font-size: 13px; } 
   li, td { font-family: Arial, Helvetica, sans-serif; font-size: 13px; } 
   hr { color: #3333cc; } 
   a { color: #000000; } 
  </style>

  <link rel="stylesheet" type="text/css" href="new_ss.css"/>
  <script src="new_ajax.js" type="text/javascript"></script>

 </head>
 <body>
 <img src="bookmark.gif" alt="PHPbookmark logo" border="0"
    align="left" valign="bottom" height="55" width="57" />
 <h1>PHPbookmark</h1>
 <hr />
}
<?php
 if($title) { 
  do_html_heading($title);
 } 
