<?php

App::uses('AppController', 'Controller');

class OffersController extends AppController {

    public $components = array('Paginator');
    public $uses = array('Offer', 'Company');

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index() {
        $this->Paginator->settings = $this->Offer->getPaginationSettings($this->Auth->user('id'));
        $this->set('offers', $this->paginate());
    }

    public function accept($id) {
        $this->Offer->id = $id;
        $this->Offer->saveField('status', 1);
        $this->setFlashAndRedirect('オファーへの返答を完了しました', '/', array('class' => 'alert success'));
    }

    public function reject($id) {
        $this->Offer->id = $id;
        $this->Offer->saveField('status', 2);
        $this->setFlashAndRedirect('オファーへの返答を完了しました', '/', array('class' => 'alert success'));
    }
}
