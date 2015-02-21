<?php

return[
//rota
	'router' => [
		'routes' => [
         	'feed-home' => [
         		'type' => 'Literal',
         		'options' => [
         			'route' => '/feed',
         			'defaults' => [
         				'controller' => 'Feed\Controller\Feed',
         				'action' => 'index',
         			],
         		]
         	]
		]
	],
	'service_manager' => [
		'invokables' => [
			'Feed\Service\FeedService' => 'Feed\Service\FeedService'
		]
	],
	//registro controler
	'controllers' => [
		'invokables' => [
			'Feed\Controller\Feed' => 'Feed\Controller\FeedController'
		]
	],

	'view_manager' => [
		'template_path_stack' => [
			__DIR__ . '/../view',
		]
	]
];