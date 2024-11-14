<?php

require APPPATH . 'libraries/REST_Controller.php';

class Contents extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('getbase');
    }

    public function index_get($id = -1)
    {
        $language_slug = $this->input->get("slug");
        $data = $this->getbase->getinfo('content_translations', $id, 1, 100, "language_slug", $language_slug);
        $this->response($data, REST_Controller::HTTP_OK);
    }



}