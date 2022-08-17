<?php
  class Pages {
    public function __construct(){
      echo 'HELLO IM ABOUT';
    }

    public function index(){

    }

    public function about($id){
      echo $id;
    }
  }