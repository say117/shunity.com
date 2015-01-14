<?php

App::uses('AppController', 'Controller');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class CompaniesController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        if (isset($this->request->params['admin'])) {
            $this->Auth->allow('admin_login', 'admin_add');
        }
    }

    public function admin_login() {
        if (!$this->request->is('post')) {
            return;
        }

    $passwordHasher = new BlowfishPasswordHasher();
        $company = $this->Company->findById(4);
        debug($this->request->data['Company']['password']);
        debug($company['Company']['password']);
        debug($passwordHasher->check($this->request->data['Company']['password'], $company['Company']['password']));

        debug($this->request->data['Company']['mail']);
        debug($company['Company']['mail']);
        debug($this->request->data['Company']['mail'] == $company['Company']['mail'] ? true : false);

        debug($this->Auth->authenticate);
        debug(AuthComponent::$sessionKey);


        if (!$this->Auth->login()) {
            return $this->Session->setFlash('ユーザー名かパスワードが違います', 'default', array('class' => 'alert danger'));
        }
        $this->setFlashAndRedirect('ログインしました。', '/', array('class' => 'alert success'));
    }

    public function admin_logout() {
        $this->setFlashAndRedirect('ログアウトしました。', $this->Auth->logout(), array('class' => 'alert success'));
    }

    public function admin_index() {
    }

    public function admin_add() {
        if (!$this->request->is('post')) {
           return null;
        }

        if (!$this->Company->save($this->request->data)) {
            if (!empty($this->Company->validationErrors)) {
                $this->set('errors', $this->Company->validationErrors);
                return;
            }
            return $this->Session->setFlash('企業登録に失敗しました', 'default', array('class' => 'alert danger'));
        }
        $this->setFlashAndRedirect('企業登録が完了しました', '/', array('class' => 'alert success'));
    }
}
