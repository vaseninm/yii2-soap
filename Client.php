<?php

namespace subdee\soapclient;

use yii\base\Component;

class Client extends Component
{
	public $url = 'http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL';
	private $_client;

	public function __construct($config = [])
	{
		parent::__construct($config);
	}

	public function init()
	{
		$this->_client = new \SoapClient($this->url);
	}

	public function getClient()
	{
		return $this->_client;
	}
} 