<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mvc extends CI_Controller {

    public function __construct () {
        parent::__construct();
        $this->load->model('mvc_model');
        $this->load->database();
    }

    public function index()
    {
        $result = $this->mvc_model->getAggregasi();
        print_r($result);

    }
}