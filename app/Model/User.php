<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

    public $recursive = -1;

    public $validate = array(
        'mail' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'メールアドレスが入力されていません'
            ),
            'maxLength' => array(
                'rule' => array('maxLength', 255),
                'message' => 'メールアドレスは255文字以下で入力してください。'
            ),
            'isUnique' => array(
                'rule' => array('isUnique'),
                'message' => '既に登録されているメールアドレスです。',
                'on' => 'create'
            )
        ),
        'password' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'パスワードが入力されていません'
            ),
            'maxLength' => array(
                'rule' => array('maxLength', 255),
                'message' => 'パスワードは255文字以下で入力してください。'
            )
        )
    );

    // To hash password
    public function beforeSave($options = array()) {
        if (!$this->id) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }
        return true;
    }
}