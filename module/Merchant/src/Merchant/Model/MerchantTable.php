<?php
namespace Merchant\Model;

use Zend\Db\TableGateway\TableGateway;

class MerchantTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
    
    public function saveMerchant($merchant)
    {
        $data = array(
             'merchant_id'=>$merchant->merchant_id,
             'name'=>$merchant->name,
             'address'=>$merchant->address,
             'city'=>$merchant->city,
             'state'=>$merchant->state,
             'country'=>$merchant->country,
             'phone'=>$merchant->phone,
             'pincode'=>$merchant->pincode,
             'mobile'=>$merchant->mobile,
             'company_name'=>$merchant->company_name,
             'email'=>$merchant->email,
             'specialisation'=>$merchant->specialisation,
             'delivery_range'=>$merchant->delivery_range,
             'password'=>$merchant->password,
        );
        return $this->tableGateway->insert($data); 
    }
}
