<?php
/**
 * File for AmazonElasticLoadBalancingWsdlClass to communicate with SOAP service
 * @date 10/07/2012
 */
/**
 * File for AmazonElasticLoadBalancingWsdlClass to communicate with SOAP service
 * Documentation : <fullname>Elastic Load Balancing</fullname> <p> Elastic Load Balancing is a cost-effective and easy to use web service to help you improve the availability and scalability of your application running on Amazon Elastic Cloud Compute (Amazon EC2). It makes it easy for you to distribute application loads between two or more EC2 instances. Elastic Load Balancing supports the growth in traffic of your application by enabling availability through redundancy. </p> <p>This guide provides detailed information about Elastic Load Balancing actions, data types, and parameters that can be used for sending a query request. Query requests are HTTP or HTTPS requests that use the HTTP verb GET or POST and a query parameter named Action or Operation. Action is used throughout this documentation, although Operation is supported for backward compatibility with other AWS Query APIs.</p> <p>For detailed information on constructing a query request using the actions, data types, and parameters mentioned in this guide, go to <a href="http://docs.amazonwebservices.com/ElasticLoadBalancing/latest/DeveloperGuide/using-query-api.html">Using the Query API</a> in the <i>Elastic Load Balancing Developer Guide</i>.</p> <p>For detailed information about Elastic Load Balancing features and their associated actions, go to <a href="http://docs.amazonwebservices.com/ElasticLoadBalancing/latest/DeveloperGuide/UserScenarios.html">Using Elastic Load Balancing</a> in the <i>Elastic Load Balancing Developer Guide</i>.</p> <p>This reference guide is based on the current WSDL, which is available at: <a href="elasticloadbalancing.amazonaws.com/doc/2012-06-01/ElasticLoadBalancing.wsdl"></a> </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingWsdlClass extends stdClass implements ArrayAccess,Iterator,Countable
{
	/**
	 * Option key to define WSDL url
	 * @var string
	 */
	const WSDL_URL = 'wsdl_url';
	/**
	 * Option key to define WSDL login
	 * @var string
	 */
	const WSDL_LOGIN = 'wsdl_login';
	/**
	 * Option key to define WSDL password
	 * @var string
	 */
	const WSDL_PASSWD = 'wsdl_password';
	/**
	 * Option key to define WSDL trace option
	 * @var string
	 */
	const WSDL_TRACE = 'wsdl_trace';
	/**
	 * Option key to define WSDL exceptions
	 * @var string
	 */
	const WSDL_EXCPTS = 'wsdl_exceptions';
	/**
	 * Option key to define WSDL cache_wsdl
	 * @var string
	 */
	const WSDL_CACHE_WSDL = 'wsdl_cache_wsdl';
	/**
	 * Option key to define WSDL stream_context
	 * @var string
	 */
	const WSDL_STREAM_CONTEXT = 'wsdl_stream_context';
	/**
	 * Option key to define WSDL soap_version
	 * @var string
	 */
	const WSDL_SOAP_VERSION = 'wsdl_soap_version';
	/**
	 * Option key to define WSDL compression
	 * @var string
	 */
	const WSDL_COMPRESSION = 'wsdl_compression';
	/**
	 * Option key to define WSDL encoding
	 * @var string
	 */
	const WSDL_ENCODING = 'wsdl_encoding';
	/**
	 * Option key to define WSDL connection_timeout
	 * @var string
	 */
	const WSDL_CONNECTION_TIMEOUT = 'wsdl_connection_timeout';
	/**
	 * Option key to define WSDL typemap
	 * @var string
	 */
	const WSDL_TYPEMAP = 'wsdl_typemap';
	/**
	 * Option key to define WSDL user_agent
	 * @var string
	 */
	const WSDL_USER_AGENT = 'wsdl_user_agent';
	/**
	 * Option key to define WSDL features
	 * @var string
	 */
	const WSDL_FEATURES = 'wsdl_features';
	/**
	 * Option key to define WSDL keep_alive
	 * @var string
	 */
	const WSDL_FKEEP_ALIVE = 'wsdl_keep_alive';
	/**
	 * Objet de la classe SOAP permettant de faire les requetes SOAP
	 * @var SoapClient
	 */
	private static $soapClient;
	/**
	 * Contains Soap call result
	 * @var mixed
	 */
	private $result;
	/**
	 * Contains last errors
	 * @var array
	 */
	private $lastError;
	/**
	 * Array that contains values when only one parameter is set when calling __construct method
	 * @var array
	 */
	private $internArrayToIterate;
	/**
	 * Bool that tells if array is set or not
	 * @var bool
	 */
	private $internArrayToIterateIsArray;
	/**
	 * Items index browser
	 * @var int
	 */
	private $internArrayToIterateOffset;
	/**
	 * Constructor
	 * @uses AmazonElasticLoadBalancingWsdlClass::setLastError()
	 * @uses AmazonElasticLoadBalancingWsdlClass::initSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::initInternArrayToIterate()
	 * @uses AmazonElasticLoadBalancingWsdlClass::_set()
	 * @param array values
	 * @return Lists
	 */
	public function __construct($_arrayOfValues = array())
	{
		$this->setLastError(array());
		/**
		 * Init soap Client
		 * Set default values
		 */
		$this->initSoapClient($_arrayOfValues);
		/**
		 * Init array of values if set
		 */
		$this->initInternArrayToIterate($_arrayOfValues);
		/**
		 * Generic set methods
		 */
		if(is_array($_arrayOfValues) && count($_arrayOfValues))
		{
			foreach($_arrayOfValues as $name=>$value)
				$this->_set($name,$value);
		}
	}
	/**
	 * @return SoapClient
	 */
	public static function getSoapClient()
	{
		return self::$soapClient;
	}
	/**
	 * @param SoapClient $soapClient
	 */
	protected static function setSoapClient(SoapClient $_soapClient)
	{
		return (self::$soapClient = $_soapClient);
	}
	/**
	 * Init SoapClient
	 * @uses AmazonElasticLoadBalancingWsdlClass::classMap()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getDefaultWsdlOptions()
	 * @param array WSDL options
	 */
	public function initSoapClient($_wsdlOptions)
	{
		if(class_exists('AmazonElasticLoadBalancingClassMap',true))
		{
			$wsdlOptions = array();
			$wsdlOptions['classmap'] = AmazonElasticLoadBalancingClassMap::classMap();
			$defaultWsdlOptions = self::getDefaultWsdlOptions();
			foreach($defaultWsdlOptions as $optioName=>$optionValue)
			{
				if(array_key_exists($optioName,$_wsdlOptions) && !empty($_wsdlOptions[$optioName]))
					$wsdlOptions[str_replace('wsdl_','',$optioName)] = $_wsdlOptions[$optioName];
				elseif(!empty($optionValue))
					$wsdlOptions[str_replace('wsdl_','',$optioName)] = $optionValue;
			}
			if(array_key_exists(str_replace('wsdl_','',self::WSDL_URL),$wsdlOptions))
			{
				$wsdlUrl = $wsdlOptions[str_replace('wsdl_','',self::WSDL_URL)];
				unset($wsdlOptions[str_replace('wsdl_','',self::WSDL_URL)]);
				self::setSoapClient(new SoapClient($wsdlUrl,$wsdlOptions));
			}
		}
	}
	/**
	 * Returns all default options values
	 * @uses AmazonElasticLoadBalancingWsdlClass::WSDL_CACHE_WSDL
	 * @uses AmazonElasticLoadBalancingWsdlClass::WSDL_COMPRESSION
	 * @uses AmazonElasticLoadBalancingWsdlClass::WSDL_CONNECTION_TIMEOUT
	 * @uses AmazonElasticLoadBalancingWsdlClass::WSDL_ENCODING
	 * @uses AmazonElasticLoadBalancingWsdlClass::WSDL_EXCPTS
	 * @uses AmazonElasticLoadBalancingWsdlClass::WSDL_FEATURES
	 * @uses AmazonElasticLoadBalancingWsdlClass::WSDL_LOGIN
	 * @uses AmazonElasticLoadBalancingWsdlClass::WSDL_PASSWD
	 * @uses AmazonElasticLoadBalancingWsdlClass::WSDL_SOAP_VERSION
	 * @uses AmazonElasticLoadBalancingWsdlClass::WSDL_STREAM_CONTEXT
	 * @uses AmazonElasticLoadBalancingWsdlClass::WSDL_TRACE
	 * @uses AmazonElasticLoadBalancingWsdlClass::WSDL_TYPEMAP
	 * @uses AmazonElasticLoadBalancingWsdlClass::WSDL_URL
	 * @uses AmazonElasticLoadBalancingWsdlClass::WSDL_USER_AGENT
	 * @return array
	 */
	public static function getDefaultWsdlOptions()
	{
		return array(
					self::WSDL_CACHE_WSDL=>WSDL_CACHE_NONE,
					self::WSDL_COMPRESSION=>null,
					self::WSDL_CONNECTION_TIMEOUT=>null,
					self::WSDL_ENCODING=>null,
					self::WSDL_EXCPTS=>true,
					self::WSDL_FEATURES=>null,
					self::WSDL_LOGIN=>null,
					self::WSDL_PASSWD=>null,
					self::WSDL_SOAP_VERSION=>null,
					self::WSDL_STREAM_CONTEXT=>null,
					self::WSDL_TRACE=>true,
					self::WSDL_TYPEMAP=>null,
					self::WSDL_URL=>null,
					self::WSDL_USER_AGENT=>null);
	}
	/**
	 * Alias to count
	 * @uses AmazonElasticLoadBalancingWsdlClass::count()
	 * @return int
	 */
	public function length()
	{
		return $this->count();
	}
	/**
	 * Method returning item length, alias to length
	 * @uses AmazonElasticLoadBalancingWsdlClass::internArrayToIterateIsArray()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getInternArrayToIterate()
	 * @return int
	 */
	public function count()
	{
		return $this->getInternArrayToIterateIsArray()?count($this->getInternArrayToIterate()):-1;
	}
	/**
	 * Returns the current element
	 * @uses AmazonElasticLoadBalancingWsdlClass::offsetGet()
	 * @return mixed
	 */
	public function current()
	{
		return $this->offsetGet($this->internArrayToIterateOffset);
	}
	/**
	 * Moves the current position to the next element
	 * @uses AmazonElasticLoadBalancingWsdlClass::getInternArrayToIterateOffset()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setInternArrayToIterateOffset()
	 * @return int
	 */
	public function next()
	{
		return $this->setInternArrayToIterateOffset($this->getInternArrayToIterateOffset() + 1);
	}
	/**
	 * Reset itemOffset
	 * @uses AmazonElasticLoadBalancingWsdlClass::setInternArrayToIterateOffset()
	 * @return int
	 */
	public function rewind()
	{
		return $this->setInternArrayToIterateOffset(0);
	}
	/**
	 * Check if current itemOffset points to an existing item
	 * @uses AmazonElasticLoadBalancingWsdlClass::getInternArrayToIterateOffset()
	 * @uses AmazonElasticLoadBalancingWsdlClass::offsetExists()
	 * @return bool true|false
	 */
	public function valid()
	{
		return $this->offsetExists($this->getInternArrayToIterateOffset());
	}
	/**
	 * Returns current itemOffset value, alias to getInternArrayToIterateOffset
	 * @uses AmazonElasticLoadBalancingWsdlClass::getInternArrayToIterateOffset()
	 * @return int
	 */
	public function key()
	{
		return $this->getInternArrayToIterateOffset();
	}
	/**
	 * Alias to offsetGet
	 * @see AmazonElasticLoadBalancingWsdlClass::offsetGet()
	 * @uses AmazonElasticLoadBalancingWsdlClass::offsetGet()
	 * @param int
	 * @return mixed
	 */
	public function item($_index)
	{
		return $this->offsetGet($_index);
	}
	/**
	 * Default method to add item to array
	 * @uses AmazonElasticLoadBalancingWsdlClass::getAttributeName()
	 * @uses AmazonElasticLoadBalancingWsdlClass::__toString()
	 * @uses AmazonElasticLoadBalancingWsdlClass::_set()
	 * @uses AmazonElasticLoadBalancingWsdlClass::_get()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setInternArrayToIterate()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setInternArrayToIterateIsArray()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setInternArrayToIterateOffset()
	 * @param mixed value
	 * @return bool true|false
	 */
	public function add($_item)
	{
		if($this->getAttributeName() != '' && strpos($this->__toString(),'ArrayOf') !== false)
		{
			/**
			 * init array
			 */
			if(!is_array($this->_get($this->getAttributeName())))
				$this->_set($this->getAttributeName(),array());
			/**
			 * current array
			 */
			$currentArray = $this->_get($this->getAttributeName());
			array_push($currentArray,$_item);
			$this->_set($this->getAttributeName(),$currentArray);
			$this->setInternArrayToIterate($currentArray);
			$this->setInternArrayToIterateIsArray(true);
			$this->setInternArrayToIterateOffset(0);
			return true;
		}
		return false;
	}
	/**
	 * Method to call when sending data to request for ArrayOf type classe
	 * @uses AmazonElasticLoadBalancingWsdlClass::getAttributeName()
	 * @uses AmazonElasticLoadBalancingWsdlClass::_get()
	 * @return mixed
	 */
	public function toSend()
	{
		if($this->getAttributeName() != '' && strpos($this->__toString(),'ArrayOf') !== false)
			return $this->_get($this->getAttributeName());
		else
			return null;
	}
	/**
	 * Method returning the first item
	 * @uses AmazonElasticLoadBalancingWsdlClass::item()
	 * @return mixed
	 */
	public function first()
	{
		return $this->item(0);
	}
	/**
	 * Method returning the last item
	 * @uses AmazonElasticLoadBalancingWsdlClass::item()
	 * @uses AmazonElasticLoadBalancingWsdlClass::length()
	 * @return mixed
	 */
	public function last()
	{
		return $this->item($this->length() - 1);
	}
	/**
	 * Method testing index in item
	 * @uses AmazonElasticLoadBalancingWsdlClass::getInternArrayToIterateIsArray()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getInternArrayToIterate()
	 * @param int
	 * @return bool true|false
	 */
	public function offsetExists($_offset)
	{
		return ($this->getInternArrayToIterateIsArray() && array_key_exists($_offset,$this->getInternArrayToIterate()));
	}
	/**
	 * Method returning the item at "index" value
	 * @uses AmazonElasticLoadBalancingWsdlClass::offsetExists()
	 * @param int
	 * @return mixed
	 */
	public function offsetGet($_offset)
	{
		return $this->offsetExists($_offset)?$this->internArrayToIterate[$_offset]:null;
	}
	/**
	 * Method useless but necessarly overriden, can't set
	 * @param null
	 * @param null
	 * @return null
	 */
	public function offsetSet($_offset,$_value)
	{
		return null;
	}
	/**
	 * Method useless but necessarly overriden, can't set
	 * @param null
	 * @param null
	 * @return null
	 */
	public function offsetUnset($_offset)
	{
		return null;
	}
	/**
	 * @return mixed
	 */
	public function getResult()
	{
		return $this->result;
	}
	/**
	 * @param mixed
	 * @return bool true
	 */
	protected function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * @return array
	 */
	public function getLastError()
	{
		return $this->lastError;
	}
	/**
	 * @param array
	 * @return array
	 */
	private function setLastError($_lastError)
	{
		return ($this->lastError = $_lastError);
	}
	/**
	 * Méthode permettant d'enregistrer les erreurs survenues lors des appels au service OVH
	 *
	 * @param string la méthode dnas laquelle est survenue l'erreur
	 * @param Soapault l'objet de l'erreur
	 * @return bool true
	 */
	protected function saveLastError($_methoName,SoapFault $_soapFault)
	{
		return ($this->lastError[$_methoName] = $_soapFault);
	}
	/**
	 * Méthode permettant de récupérer la dernière erreur relative à une méthode
	 *
	 * @param string le nom de la méthode
	 * @return SoapFault|null
	 */
	public function getLastErrorForMethod($_methoName)
	{
		return (is_array($this->lastError) && array_key_exists($_methoName,$this->lastError))?$this->lastError[$_methoName]:null;
	}
	/**
	 * @return array
	 */
	public function getInternArrayToIterate()
	{
		return $this->internArrayToIterate;
	}
	/**
	 * @param array $internArrayToIterate
	 */
	public function setInternArrayToIterate($_internArrayToIterate)
	{
		return ($this->internArrayToIterate = $_internArrayToIterate);
	}
	/**
	 * @return int
	 */
	public function getInternArrayToIterateOffset()
	{
		return $this->internArrayToIterateOffset;
	}
	/**
	 * Function to initiate internArrayToIterate
	 * @uses AmazonElasticLoadBalancingWsdlClass::setInternArrayToIterate()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setInternArrayToIterateOffset()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setInternArrayToIterateIsArray()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getAttributeName()
	 * @uses AmazonElasticLoadBalancingWsdlClass::initInternArrayToIterate()
	 * @uses AmazonElasticLoadBalancingWsdlClass::__toString()
	 * @param array $_array
	 * @param bool $_interCall
	 */
	public function initInternArrayToIterate(array $_array = array(),$_interCall = false)
	{
		if(strpos($this->__toString(),'ArrayOf') !== false)
		{
			if(count($_array))
			{
				$this->setInternArrayToIterate($_array);
				$this->setInternArrayToIterateOffset(0);
				$this->setInternArrayToIterateIsArray(true);
			}
			elseif(!$_interCall && $this->getAttributeName() != '' && property_exists($this->__toString(),$this->getAttributeName()))
				$this->initInternArrayToIterate($this->_get($this->getAttributeName()),true);
		}
	}
	/**
	 * @param int $internArrayToIterateOffset
	 */
	public function setInternArrayToIterateOffset($_internArrayToIterateOffset)
	{
		$this->internArrayToIterateOffset = $_internArrayToIterateOffset;
	}
	/**
	 * @return bool
	 */
	public function getInternArrayToIterateIsArray()
	{
		return $this->internArrayToIterateIsArray;
	}
	/**
	 * @param bool $internArrayToIterateIsArray
	 */
	public function setInternArrayToIterateIsArray($_internArrayToIterateIsArray = false)
	{
		return ($this->internArrayToIterateIsArray = $_internArrayToIterateIsArray);
	}
	/**
	 * Generic method to set value
	 * @param string property name to set
	 * @param mixed property value to use
	 * @return bool
	 */
	public function _set($_name,$_value)
	{
		$setMethod = 'set' . ucfirst($_name);
		if(method_exists($this,$setMethod))
		{
			$this->$setMethod($_value);
			return true;
		}
		else
			return false;
	}
	/**
	 * Generic method to get value
	 * @param string property name to get
	 * @return mixed
	 */
	public function _get($_name)
	{
		$getMethod = 'get' . ucfirst($_name);
		if(method_exists($this,$getMethod))
			return $this->$getMethod();
		else
			return false;
	}
	/**
	 * Method which returns alone attribute name when class is ArrayOf type
	 * @return string
	 */
	public function getAttributeName()
	{
		return '';
	}
	/**
	 * Méthode retournant le nom de la classe telle quelle
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>