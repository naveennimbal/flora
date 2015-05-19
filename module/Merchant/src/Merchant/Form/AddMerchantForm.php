<?php

 namespace Merchant\Form;

 use Zend\Form\Form;
 
class AddMerchantForm extends Form {

    public function __construct($merchant_id = null) {
         parent::__construct('addMerchant');
         $this->setUseInputFilterDefaults(false);
         $this->setAttribute('enctype','multipart/form-data');
         //$this->setAttribute('action', $this->url('merchant', array('controller'=>'index','action' => 'add')));
         $this->add(array(
            'name' => 'merchant_id',
            'type' => 'hidden',
            'attributes' => array(
                'value' => $merchant_id,
            ),
        ));
         
     
         $this->add(array(
            'name' => 'name',
            'type' => 'text',
                //'required' => true,
                'attributes' => array(
                'id' => 'mname',
                 'class'=>""   
                ),
        ));
         $this->add(array(
            'name' => 'address',
            'type' => 'text',
                'required' => true,
                'attributes' => array(
                'id' => 'address',
                 'class'=>""   
                ),
        ));
         
         $this->add(array(
             'name' => 'city',
             'type' => 'text',
             //'required' => true,
             'attributes' => array(
                 'id' => 'address',
                 'class'=>""
             ),
         ));
         
         $this->add(array(
             'name' => 'state',
             'type' => 'text',
             //'required' => true,
             'attributes' => array(
                 'id' => 'state',
                 'class'=>""
             ),
         ));
         
         $this->add(array(
             'name' => 'pincode',
             'type' => 'text',
             //'required' => true,
             'attributes' => array(
                 'id' => 'pincode',
                 'class'=>""
             ),
         ));
          
         
         $this->add(array(
             'name' => 'country',
             'type' => 'text',
             //'required' => true,
             'attributes' => array(
                 'id' => 'country',
                 'class'=>""
             ),
         ));
         
         $this->add(array(
            'name' => 'phone',
            'type' => 'text',
               // 'required' => true,
                'attributes' => array(
                'id' => 'phone',
                 'class'=>""   
                ),
        ));
         
         $this->add(array(
             'name' => 'mobile',
             'type' => 'text',
             //'required' => true,
             'attributes' => array(
                 'id' => 'mobile',
                 'class'=>""
             ),
         ));
         
         $this->add(array(
            'name' => 'email',
            'type' => 'text',
               // 'required' => true,
                'attributes' => array(
                'id' => 'email',
                 'class'=>""   
                ),
        ));
         
         $this->add(array(
             'name' => 'company_name',
             'type' => 'text',
             //'required' => true,
             'attributes' => array(
                 'id' => 'company_name',
                 'class'=>""
             ),
         ));
         
         $this->add(array(
             'name' => 'specialisation',
             'type' => 'text',
             //'required' => true,
             'attributes' => array(
                 'id' => 'special',
                 'class'=>""
             ),
         ));
         
         $this->add(array(
             'name' => 'delivery_range',
             'type' => 'text',
             //'required' => true,
             'attributes' => array(
                 'id' => 'delivery',
                 'class'=>""
             ),
         ));
         
         $this->add(array(
             'name' => 'password',
             'type' => 'password',
             //'required' => true,
             'attributes' => array(
                 'id' => 'password',
                 'class'=>""
             ),
         ));
         
         $this->add(array(
             'name' => 'cpassword',
             'type' => 'password',
             //'required' => true,
             'attributes' => array(
                 'id' => 'cpassword',
                 'class'=>""
             ),
         ));
         
         
         $this->add(array(
            'name' => 'submit',
            'type' => 'submit',
                'attributes' => array(
                'id' => 'submit',
                'class' => 'btn btn-info',
                 'value' => "Register"   
            ),
         ));
     }

 }
