<?php

namespace vaseninm\soap;

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
	 * @param string $url
	 * @param array $config
	 */
	public function __construct($config = [])
	{
		$this->url = $config['url'];
		$this->_client = new \SoapClient($this->url);
		parent::__construct($config);
	}

	public function init()
	{
		parent::init();
	}

	/**
	 * @return \SoapClient
	 */
	public function getClient()
	{
		return $this->_client;
	}
} 