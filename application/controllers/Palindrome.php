<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Palindrome extends CI_Controller {
    public function index()
	{
		$wordList = ["Aku", "KaMu" , "MalAm" , "isi", 'string kosong']; 
        $this->palindrome($wordList);
	}

    public function __construct () {
        parent::__construct();
    }

    public function palindrome($x) 
    {
        // TO DO CODE
        foreach ($x as $data) {
            $poli = true;
            $panjang = strlen($data);
            if ($panjang % 2 == 1){
                for ($i=0;$i<intval($panjang/2);$i++) {
                    if ($data[$i] != $data[$panjang-1-$i]) {
                        $poli = false;
                        break;
                    }
                }
            } else {
                for ($i=0;$i<$panjang/2;$i++) {
                    if ($data[$i] != $data[$panjang-1-$i]) {
                        $poli = false;
                        break;
                    }
                }
            }
            if ($poli) {
                echo $data." adalah Palindrome";
            } else {
                echo $data." bukan Palindrome";
            }
            echo " , ";
        }
    }
}
