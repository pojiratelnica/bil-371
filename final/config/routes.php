<?php
return array(
	// 'books/([a-z]+)/([0-9]+)' => 'books/view/$1/$2',
	'personal/delete/([0-9]+)' => 'personal/delete/$1',
	'personal/update/([0-9]+)' => 'personal/update/$1',
	'personal' => 'personal/list', //actionList в BooksController

	'inventar/delete/([0-9]+)' => 'inventar/delete/$1',
	'inventar/update/([0-9]+)' => 'inventar/update/$1',
	// 'inventar/([0-9]+)' => 'inventar/list/$1', //actionList в CategoryController
	'inventar' => 'inventar/list', //actionList в CategoryController
	'' => 'default/view',
);