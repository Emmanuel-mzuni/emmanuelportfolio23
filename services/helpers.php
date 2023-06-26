<?php 

function error($msg, $title = 'ERROR') {
   
   return require_once 'views/error/error.php';

}

//for form action
function _here() {

   echo $_SERVER['PHP_SELF'];
   
}

function let_in($path, $data = null) {

   if (file_exists('views/'.$path.'.php')) {

      return require_once 'views/'.$path.'.php';

   } else {

      error($path.': Page not found');
      exit();

   }
}

function URL($page) {   
     
   return 'http://'.HOST.'/'.ROOTDIR.'/'.'index.php?page='.$page;

}