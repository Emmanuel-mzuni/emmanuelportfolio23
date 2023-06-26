<?php 

namespace Services;

class Route {
    
    public function RunApp()
    {
        // defining classes for methods passed in url
        if (isset($_GET['page'])) {

            $page = trim(htmlspecialchars($_GET['page']));

            // $page_to_view = match($page) {

            //     'index'     => $this->run('My_Portfolio', $page),
            //     'skills'    => $this->run('My_Portfolio', $page),
            //     'portfolio' => $this->run('My_Portfolio', $page),
            //     'contact'   => $this->run('My_Portfolio', $page),
            //      default    => error('Undefined Method: '.$page),

            // };

            switch ($page) {
                case 'index';
                case 'skills';
                case 'portfolio';
                case 'contact';
                    $this->run('My_Portfolio', $page);
                    break;
                default:
                error('Undefined Method: '.$page);
            }

            // return $page_to_view;
            
        } else {

            return $this->run('My_Portfolio', 'index');
        }

    }
    
    public function run($class, $method)
    {
        // checking if file exists with associated class name
        /* All files in controller must be namespaced as controller */
        if (file_exists('controller/'.$class.'.php')) {

            $namespaced_class = 'controller\\'.$class;

            if (class_exists($namespaced_class)) {
    
                    $class__ = new $namespaced_class();

                    if (method_exists($class__, $method)) {
                        
                        $class__->$method();

                    } else {

                        error('Method not found');
                    }

            } else {
                
                error('class: '.$namespaced_class.' :not found');

            }

        } else {

            error($class.': Class not found or file might have been renamed');

        }
    }
}