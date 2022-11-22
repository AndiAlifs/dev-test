<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FizzBuzz extends CI_Controller {
    public function index()
	{
		$node = 0;
        $fizz = 0;
        $buzz = 0;
        $this->fizzbuzz($node, $fizz, $buzz);
	}

    public function __construct () {
        parent::__construct();
    }

    public function fizzbuzz($x, $y, $z) 
    {
        // TO DO CODE
        for ($i=$x+1; $i <= 100; $i++) { 
            if ($i % 3 == $z) {
                echo "Buzz";
            } else if ($i % 2 == $y) {
                echo "Fizz";
            } else {
                echo $i;
            }
            echo ", ";
        }
    }
}
