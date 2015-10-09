<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Index page.
     */
    public function index()
    {
        $page['result'] = json_decode(file_get_contents('http://laudsocialdev.azurewebsites.net/Test/GetBrands'));

        $this->load->view('header');
        $this->load->view('index',$page);
        $this->load->view('footer');
    }

    /**
     * View page.
     *
     * @param  int  $id
     */
    public function view($id)
    {
        $page = json_decode(file_get_contents('http://laudsocialdev.azurewebsites.net/Test/GetPosts?brandId='.$id));

        if(empty($page))
        {
            die;
        }

        $max_length = 200;

        foreach($page as $key => $result)
        {
            if (strlen($result->Description) > $max_length)
            {
                $offset = ($max_length - 3) - strlen($result->Description);
                $page[$key]->Description = substr($result->Description, 0, strrpos($result->Description, ' ', $offset)) . '...';
            }
        }

        $data['result'] = $page;

        $this->load->view('header');
        $this->load->view('view',$data);
        $this->load->view('footer');
    }

}