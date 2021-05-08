<?php 
namespace App\Controllers;

class Adjustment extends BaseController {
    
    public function __construct() {
        
    }

    public function index() {
        $data['title'] = 'MIS Adjustment';

        echo view('templates/header.php',$data);
        echo view('adjustment/adjustment');
        echo view('adjustment/script');
        echo view('templates/footer');
    }
}