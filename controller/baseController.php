<?php 

namespace Controller;

use Model\Model;
use Services\Validations;

class baseController extends Model {

    use Validations;

    protected function view(string $path, array $data = NULL) 
    {
        if (file_exists('views/'.$path.'.php')) {

            return require_once 'views/'.$path.'.php';
      
        } else {
      
            error($path.': Page not found');
            exit();
      
        }
    }
    
}