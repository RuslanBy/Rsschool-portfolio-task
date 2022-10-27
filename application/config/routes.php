<?php

return [
	// MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],

	'contact' => [
		'controller' => 'main',
		'action' => 'contact',
	],

	// AdminController
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'admin/add' => [
		'controller' => 'admin',
		'action' => 'add',
	],
	'admin/edit/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'edit',
	],
	'admin/delete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'delete',
	],
    'admin/messages/{page:\d+}' => [
        'controller' => 'admin',
        'action' => 'messages',
    ],
    'admin/messages' => [
        'controller' => 'admin',
        'action' => 'messages',
	],
    'admin/message' => [
        'controller' => 'admin',
        'action' => 'message',
    ],
    'admin/message/{page:\d+}' => [
        'controller' => 'admin',
        'action' => 'message',
    ],
];