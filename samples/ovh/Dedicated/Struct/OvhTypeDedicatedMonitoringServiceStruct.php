<?php
/**
 * Class file for OvhTypeDedicatedMonitoringServiceStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMonitoringServiceStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedMonitoringServiceStruct extends OvhWsdlClass
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
	 * The destination
	 * @var string
	 */
	public $destination;
	/**
	 * Constructor
	 * @param int id
	 * @param string ip
	 * @param int port
	 * @param string protocol
	 * @param string period
	 * @param string string
	 * @param string url
	 * @param string destination
	 * @return OvhTypeDedicatedMonitoringServiceStruct
	 */
	public function __construct($_id = null,$_ip = null,$_port = null,$_protocol = null,$_period = null,$_string = null,$_url = null,$_destination = null)
	{
		parent::__construct(array('id'=>$_id,'ip'=>$_ip,'port'=>$_port,'protocol'=>$_protocol,'period'=>$_period,'string'=>$_string,'url'=>$_url,'destination'=>$_destination));
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
	 * Set destination
	 * @param string destination
	 * @return string
	 */
	public function setDestination($_destination)
	{
		return ($this->destination = $_destination);
	}
	/**
	 * Get destination
	 * @return string
	 */
	public function getDestination()
	{
		return $this->destination;
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