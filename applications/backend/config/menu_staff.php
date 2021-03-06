<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Menu
| -------------------------------------------------------------------------
| This file lets you define navigation menu items on sidebar.
|
*/

$config['menu'] = array(

	'home' => array(
		'name'      => 'Accueil',
		'url'       => site_url(),
		'icon'      => 'fa fa-home'
	),

	'user' => array(
		'name'      => 'Users',
		'url'       => site_url('user'),
		'icon'      => 'fa fa-users'
	),

	'logout' => array(
		'name'      => 'Se déconnecter',
		'url'       => site_url('account/logout'),
		'icon'      => 'fa fa-sign-out'
	),
);