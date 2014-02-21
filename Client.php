<?php

namespace subdee\soapclient;

use yii\base\Component;

/**
 * The Client class for the consumer.
 *
 * @package subdee\soapclient
 */
class Client extends Component
{
	/**
	 * @var string $url The URL of the WSDL
	 */
	public $url;
	private $_client;

	/**
	 * @param array $config
	 */
	public function __construct($config = [])
	{
		parent::__construct($config);
	}

	/**
	 * @return \SoapClient|void
	 */
	public function init()
	{
		parent::init();
		return new \SoapClient($this->url);
	}
} 