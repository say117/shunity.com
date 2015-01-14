<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login', 'add');
    }

    public function login() {
        if (!$this->request->is('post')) {
            return;
        }

        if (!$this->Auth->login()) {
            return $this->Session->setFlash('ユーザー名かパスワードが違います', 'default', array('class' => 'alert alert-danger'));
        }
        $this->setFlashAndRedirect('ログインしました。', '/users/', array('class' => 'alert alert-success'));
    }

    public function logout() {
        $this->setFlashAndRedirect('ログアウトしました。', $this->Auth->logout(), array('class' => 'alert alert-success'));
    }

    public function index() {
    }

    public function add() {
        if (!$this->request->is('post')) {
           return null;
        }

        if (!$this->User->save($this->request->data)) {
            if (!empty($this->User->validationErrors)) {
                $this->set('errors', $this->User->validationErrors);
                return;
            }
            return $this->Session->setFlash('会員登録に失敗しました', 'default', array('class' => 'alert alert-danger'));
        }
        $this->setFlashAndRedirect('会員登録が完了しました', '/', array('class' => 'alert alert-success'));
    }

    public function edit($id = null) {
        if ($this->Auth->user('id') != $id) {
            $this->setFlashAndRedirect('不正なアクセスです', '/users/', array('class' => 'alert alert-danger'));
        }
        if (!$this->request->is('post')) {
           return;
        }

        $this->User->id = $this->Auth->user('id');
        if (!$this->User->save($this->request->data)) {
            if (!empty($this->User->validationErrors)) {
                $this->set('errors', $this->User->validationErrors);
                return;
            }
            return $this->Session->setFlash('ユーザー情報変更に失敗しました', 'default', array('class' => 'alert danger'));
        }
        // Update $this->Auth->user
        $auth = $this->User->find('first', array('conditions' => array('id' => $this->User->id)));
        unset($auth['User']['password']);  // Remove password
        $this->Session->write('Auth', $auth);
        $this->setFlashAndRedirect('ユーザー情報変更が完了しました。', '/users/', array('class' => 'alert success'));
    }
}
