<?php

namespace Feed\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FeedController extends AbstractActionController
{
	public function indexAction()
	{
		$feedService = $this->getServiceLocator()->get('Feed\Service\FeedService');
		$feeds = $feedService->getFeed();
		
		return new ViewModel(['nome' => 'Paulo Fabiano', 'work' => 'PHP programer' , 'feed' => $feeds  ]);
	}
}