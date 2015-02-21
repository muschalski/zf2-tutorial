<?php

namespace Carro\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CarroController extends AbstractActionController
{
	public function indexAction()
	{
		$carroService = $this->getServiceLocator()->get('Carro\Service\CarroService');
		$carros = $carroService->getCarros();
		
		return new ViewModel(['nome' => 'Paulo Fabiano', 'work' => 'PHP programer', 'carros' => $carros ]);
	}
}