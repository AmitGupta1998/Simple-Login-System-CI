<?php

if(isset($_SESSION['id']))
{
    defined('BASEPATH') OR exit('No direct script access allowed');

    echo "welcome --->".$_SESSION['name'];   
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <a href="<?php base_url(); ?>logout">logout</a>
 </body>
 </html>
