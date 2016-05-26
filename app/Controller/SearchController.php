<?php

App::import('Vendor', 'spotify-web-api-php/src/Request');
App::import('Vendor', 'spotify-web-api-php/src/Session');
App::import('Vendor', 'spotify-web-api-php/src/SpotifyWebAPI');
App::import('Vendor', 'spotify-web-api-php/src/SpotifyWebAPIException');

class SearchController extends AppController 
{
	public $uses = array();
	public $helpers = array('Html', 'Form', 'Js');
	var $components = array('Email', 'Auth', 'Cookie', 'Paginator');

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('index');
		$this->Auth->allow('searchEngine');
	}

	function index()
	{
		
	}

	function searchEngine($query = null)
	{
		if($query != null)
		{
			$api = new SpotifyWebAPI\SpotifyWebAPI();

			$tracks = json_decode(json_encode($api->search($query, 'track')), true);
			$this->set('tracks', $tracks);
		}
	}
}
?>
