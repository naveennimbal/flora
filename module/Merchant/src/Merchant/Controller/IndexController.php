<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Merchant\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Merchant\Model\Merchant;
use Merchant\Model\MerchantTable;
use Merchant\Form\AddMerchantForm;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Input;
use Zend\Filter\File\RenameUpload;
use Zend\Validator\File\Size;
use Zend\Validator\File\Extension;
use Zend\Validator\File\MimeType;
use Zend\Session\SessionManager;
use Zend\Session\Container;


class IndexController extends AbstractActionController
{
    protected $merchnatTable;
    
    public function getMerchantTable() {
        if (!$this->merchnatTable) {
            $sm = $this->getServiceLocator();
            $this->merchnatTable = $sm->get('Merchant\Model\MerchantTable');
        }
        return $this->merchnatTable;
    }
    
    
    public function indexAction()
    {
       
        return new ViewModel();
    }
    
    public function addAction(){
        $form = new AddMerchantForm();
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            $sm = $this->getServiceLocator();
            $chapter = new Merchant();
            $form->setInputFilter($chapter->getInputFilter());
            $form->setData($request->getPost());
            //var_dump($form->ge); //exit;
            //var_dump($request->getPost()); exit;
            //var_dump($form->isValid()); exit;
            $input = $form->getInputFilter();
            $g_filter = $input->get('merchant_id');
            $g_filter->setRequired(false);
            if ($form->isValid()) {
                $chapter->exchangeArray($request->getPost());
                $this->getMerchantTable()->saveMerchant($chapter);
                return $this->redirect()->toRoute('merchant');
            } else {
              var_dump($form->get("merchant_id")); exit;  
            }
        }
        
        
       return array('form' => $form);
        
    }
    
    public function editAction(){
        $form = new AddMerchantForm();
        $request = $this->getRequest();
        //echo base64_encode('hello');exit;
        echo base64_decode($this->params()->fromQuery('a'));exit;
        echo $this->params()->fromRoute('id', 0); exit;
        var_dump($request->getQuery()); exit;
        
        return array('form' => $form);
    
    }
}
