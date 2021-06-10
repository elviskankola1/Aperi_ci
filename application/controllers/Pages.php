<?php

class Pages extends CI_Controller
{
    public function index($page = 'home')
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            $this->notfound();
        }
        $data['url'] = base_url() . '' . $page;
        $data['title'] = ucfirst($page);
        $data['types'] = "website";
       
        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }

    public function notfound()
    {
        $this->load->view('templates/header');
        $this->load->view('errors/404');
        $this->load->view('templates/footer');
    }
}
