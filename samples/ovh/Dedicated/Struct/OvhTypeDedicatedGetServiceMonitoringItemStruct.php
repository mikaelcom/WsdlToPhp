<?php
/**
 * Class file for OvhTypeDedicatedGetServiceMonitoringItemStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedGetServiceMonitoringItemStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedGetServiceMonitoringItemStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The port
	 * @var int
	 */
	public $port;
	/**
	 * The protocol
	 * @var string
	 */
	public $protocol;
	/**
	 * The period
	 * @var string
	 */
	public $period;
	/**
	 * The string
	 * @var string
	 */
	public $string;
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * The sms
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $sms;
	/**
	 * The email
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $email;
	/**
	 * Constructor
	 * @param int id
	 * @param string ip
	 * @param int port
	 * @param string protocol
	 * @param string period
	 * @param string string
	 * @param string url
	 * @param OvhTypeMyArrayOfStringType sms
	 * @param OvhTypeMyArrayOfStringType email
	 * @return OvhTypeDedicatedGetServiceMonitoringItemStruct
	 */
	public function __construct($_id = null,$_ip = null,$_port = null,$_protocol = null,$_period = null,$_string = null,$_url = null,$_sms = null,$_email = null)
	{
		parent::__construct(array('id'=>$_id,'ip'=>$_ip,'port'=>$_port,'protocol'=>$_protocol,'period'=>$_period,'string'=>$_string,'url'=>$_url,'sms'=>new OvhTypeMyArrayOfStringType($_sms),'email'=>new OvhTypeMyArrayOfStringType($_email)));
	}
	/**
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set ip
	 * @param string ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get ip
	 * @return string
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set port
	 * @param int port
	 * @return int
	 */
	public function setPort($_port)
	{
		return ($this->port = $_port);
	}
	/**
	 * Get port
	 * @return int
	 */
	public function getPort()
	{
		return $this->port;
	}
	/**
	 * Set protocol
	 * @param string protocol
	 * @return string
	 */
	public function setProtocol($_protocol)
	{
		return ($this->protocol = $_protocol);
	}
	/**
	 * Get protocol
	 * @return string
	 */
	public function getProtocol()
	{
		return $this->protocol;
	}
	/**
	 * Set period
	 * @param string period
	 * @return string
	 */
	public function setPeriod($_period)
	{
		return ($this->period = $_period);
	}
	/**
	 * Get period
	 * @return string
	 */
	public function getPeriod()
	{
		return $this->period;
	}
	/**
	 * Set string
	 * @param string string
	 * @return string
	 */
	public function setString($_string)
	{
		return ($this->string = $_string);
	}
	/**
	 * Get string
	 * @return string
	 */
	public function getString()
	{
		return $this->string;
	}
	/**
	 * Set url
	 * @param string url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}
	/**
	 * Set sms
	 * @param MyArrayOfStringType sms
	 * @return MyArrayOfStringType
	 */
	public function setSms($_sms)
	{
		return ($this->sms = $_sms);
	}
	/**
	 * Get sms
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getSms()
	{
		return $this->sms;
	}
	/**
	 * Set email
	 * @param MyArrayOfStringType email
	 * @return MyArrayOfStringType
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>