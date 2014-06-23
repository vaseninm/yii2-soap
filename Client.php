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
        /**
         * @var array {@link http://www.php.net/manual/en/soapclient.soapclient.php}
         */
        public $params = [];

        private $_client;

        public function  __call($name, $params)
        {
            return $this->getClient()->{$name}($params);
        }

        /**
         * @return \SoapClient
         */
        public function getClient()
        {
            if (! $this->_client) {
                $this->_client = new \SoapClient($this->url, $this->params);
            }

            return $this->_client;
        }
    }