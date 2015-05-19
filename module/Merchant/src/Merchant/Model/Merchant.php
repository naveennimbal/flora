<?php
namespace Merchant\Model;

 // Add these import statements
 use Zend\InputFilter\InputFilter;
 use Zend\InputFilter\InputFilterAwareInterface;
 use Zend\InputFilter\InputFilterInterface;

 class Merchant implements InputFilterAwareInterface
 {
     public $merchant_id;
     public $name;
     public $address;
     public $city;
     public $state;
     public $pincode;
     public $country;
     public $phone;
     public $mobile;
     public $company_name;
     public $email;
     public $specialisation;
     public $delivery_range;
     public $password;
          
     protected $inputFilter;

     public function exchangeArray($data)
     {
      
         $this->merchant_id = (isset($data['merchant_id'])) ? $data['merchant_id'] : null;
         $this->name = (isset($data['name'])) ? $data['name'] : null;
         $this->address = (isset($data['address'])) ? $data['address'] : null;
         $this->city = (isset($data['city'])) ? $data['city'] : null;
         $this->state = (isset($data['state'])) ? $data['state'] : null;
         $this->country = (isset($data['country'])) ? $data['country'] : null;
         $this->phone = (isset($data['phone'])) ? $data['phone'] : null;
         $this->pincode = (isset($data['pincode'])) ? $data['pincode'] : null;
         $this->mobile = (isset($data['mobile'])) ? $data['mobile'] : null;
         $this->company_name = (isset($data['company_name'])) ? $data['company_name'] : null;
         $this->email = (isset($data['email'])) ? $data['email'] : null;
         $this->specialisation = (isset($data['specialisation'])) ? $data['specialisation'] : null;
         $this->delivery_range = (isset($data['delivery_range'])) ? $data['delivery_range'] : null;
         $this->password = (isset($data['password'])) ? $data['password'] : null;
         
         
     }

     public function setInputFilter(InputFilterInterface $inputFilter)
     {
         throw new \Exception("Not used");
     }

     public function getInputFilter()
     {
         if (!$this->inputFilter) {
             $inputFilter = new InputFilter();
             
             $inputFilter->add(array(
                 'name'     => 'merchant_id',
                 //'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
                     
                 ),
             ));
             
             $inputFilter->add(array(
                 'name'     => 'name',
                 //'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
                      
                 ),
             ));
             
             $inputFilter->add(array(
                 'name'     => 'address',
                 //'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
             
                 ),
             ));
             $inputFilter->add(array(
                 'name'     => 'city',
                 //'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
             
                 ),
             ));
             $inputFilter->add(array(
                 'name'     => 'state',
                 //'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
             
                 ),
             ));
             
             $inputFilter->add(array(
                 'name'     => 'pincode',
                 //'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
                      
                 ),
             ));
             
             $inputFilter->add(array(
                 'name'     => 'country',
                 //'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
             
                 ),
             ));
             $inputFilter->add(array(
                 'name'     => 'phone',
                 //'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
             
                 ),
             ));
             $inputFilter->add(array(
                 'name'     => 'mobile',
                 //'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
             
                 ),
             ));
             $inputFilter->add(array(
                 'name'     => 'company_name',
                 //'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
             
                 ),
             ));
             $inputFilter->add(array(
                 'name'     => 'email',
                 //'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
             
                 ),
             ));
             $inputFilter->add(array(
                 'name'     => 'specialisation',
                 //'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
             
                 ),
             ));
             $inputFilter->add(array(
                 'name'     => 'delivery_range',
                 //'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
             
                 ),
             ));
             $inputFilter->add(array(
                 'name'     => 'password',
                 //'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
             
                 ),
             ));
             
             
             

             $this->inputFilter = $inputFilter;
         }
        return $this->inputFilter;
        // $this->inputFilter ;
         
     }
 }
