<?php
$halaman = $_GET['page'] ;

switch ($halaman) {
case 'home':
    include 'isikonten/home.php' ;
    break ;
case 'about':
    include 'isikonten/about.php' ;
    break ;
case 'contact':
    include 'isikonten/contact.php' ;
    break ;

default :
    echo "404 Not Found" ;
break;


}