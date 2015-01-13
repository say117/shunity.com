<?php

App::uses('AppController', 'Controller');

class TopController extends AppController {
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }

    public function index() {
    }
}
