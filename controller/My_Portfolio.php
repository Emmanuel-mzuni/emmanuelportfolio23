<?php 

namespace Controller;

class My_Portfolio extends baseController {

    public function index()
    {
        $data = $this->runQuery($this->select('about'));
        return $this->view('pages/index', $data);
    }

    public function Skills()
    {
        $data = $this->runQuery($this->select('skills'));
        return $this->view('pages/skills', $data);
    }

    public function Portfolio()
    {
        $data = $this->runQuery($this->select('projects'));
        return $this->view('pages/portfolio', $data);
    }

    public function Contact()
    {
        $data = $this->runQuery($this->select('mycontacts'));
        return $this->view('pages/contact', $data);
    }
}