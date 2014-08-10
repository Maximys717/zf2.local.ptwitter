<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction() {
		$date_time = date("H:i:s");
		$date_date = date("d-M-Y");
		
		$viewModel = new ViewModel(array(
			'date_time' => $date_time,
			'date_date' => $date_date
		));
		return $viewModel;
    }

	/*
	public function indexAction() {
		$objectManager = $this
			->getServiceLocator()
			->get('Doctrine\ORM\EntityManager');

		$user = new \Application\Entity\User();
		$user->fullName = 'Max Mik';

		$objectManager->persist($user);
		$objectManager->flush();

		die(var_dump($user->id)); // yes, I'm lazy
	}
	*/

}

