<?php

App::uses('AppModel', 'Model');

class Offer extends AppModel {

    public $recursive = -1;

    public $belongsTo = array(
        'Company' => array(
            'className' => 'Company',
            'foreignKey' => 'company_id'
        )
    );

    public function getPaginationSettings($user_id) {
        return array(
            'limit' => 20,
            'fields' => array('Offer.id', 'Offer.description', 'Offer.user_id',
                              'Offer.company_id', 'Company.name'),
            'order' => array('Offer.id' => 'DESC'),
            'conditions' => array('Offer.user_id' => $user_id, 'Offer.status' => 0),
            'recursive' => 0
        );
    }
}