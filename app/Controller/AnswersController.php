<?php

App::uses('AppController', 'Controller');

class AnswersController extends AppController {
    public $uses = array('Answer', 'Question');

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function add($question_id) {
        if (!$this->request->is('post')) {
            $this->set('question', $this->Question->findById($question_id));
            return null;
        }

        $this->request->data['Answer']['user_id'] = $this->Auth->user('id');
        $question = $this->Question->findById($this->request->data['Answer']['question_id']);
        $this->request->data['Answer']['company_id'] = $question['Question']['company_id'];
        if (!$this->Answer->save($this->request->data)) {
            if (!empty($this->Answer->validationErrors)) {
                $this->set('errors', $this->Answer->validationErrors);
                return;
            }
            return $this->Session->setFlash('解答に失敗しました', 'default', array('class' => 'alert danger'));
        }
        $this->setFlashAndRedirect('解答が完了しました', '/', array('class' => 'alert success'));
    }
}
