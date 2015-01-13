<?php

App::uses('AppController', 'Controller');

class QuestionsController extends AppController {
    public $components = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index() {
        $this->Paginator->settings = $this->Question->getPaginationSettings();
        $this->set('questions', $this->paginate());
    }
}
