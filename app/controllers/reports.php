<?php

class Reports extends Controller {

    public function index() {
      //if $_SESSION['admin'] = true;
      if (isset($_SESSION['admin']) == 1){
        
        $this->view('reports/index');
      }else{
        header('Location: /home');
      }
    }

}
