<?php
/**
 * Class file for OvhTypeTelephonyOfferInfoHardwareStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyOfferInfoHardwareStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyOfferInfoHardwareStruct extends OvhWsdlClass
{
	/**
	 * The brand
	 * @var string
	 */
	public $brand;
	/**
	 * The model
	 * @var string
	 */
	public $model;
	/**
	 * The protocol
	 * @var string
	 */
	public $protocol;
	/**
	 * The mac
	 * @var string
	 */
	public $mac;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The engage
	 * @var boolean
	 */
	public $engage;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The port
	 * @var int
	 */
	public $port;
	/**
	 * The outOfService
	 * @var boolean
	 */
	public $outOfService;
	/**
	 * Constructor
	 * @param string brand
	 * @param string model
	 * @param string protocol
	 * @param string mac
	 * @param string ip
	 * @param boolean engage
	 * @param string status
	 * @param int port
	 * @param boolean outOfService
	 * @return OvhTypeTelephonyOfferInfoHardwareStruct
	 */
	public function __construct($_brand = null,$_model = null,$_protocol = null,$_mac = null,$_ip = null,$_engage = null,$_status = null,$_port = null,$_outOfService = null)
	{
		parent::__construct(array('brand'=>$_brand,'model'=>$_model,'protocol'=>$_protocol,'mac'=>$_mac,'ip'=>$_ip,'engage'=>$_engage,'status'=>$_status,'port'=>$_port,'outOfService'=>$_outOfService));
	}
	/**
	 * Set brand
	 * @param string brand
	 * @return string
	 */
	public function setBrand($_brand)
	{
		return ($this->brand = $_brand);
	}
	/**
	 * Get brand
	 * @return string
	 */
	public function getBrand()
	{
		return $this->brand;
	}
	/**
	 * Set model
	 * @param string model
	 * @return string
	 */
	public function setModel($_model)
	{
		return ($this->model = $_model);
	}
	/**
	 * Get model
	 * @return string
	 */
	public function getModel()
	{
		return $this->model;
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
	 * Set mac
	 * @param string mac
	 * @return string
	 */
	public function setMac($_mac)
	{
		return ($this->mac = $_mac);
	}
	/**
	 * Get mac
	 * @return string
	 */
	public function getMac()
	{
		return $this->mac;
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
	 * Set engage
	 * @param boolean engage
	 * @return boolean
	 */
	public function setEngage($_engage)
	{
		return ($this->engage = $_engage);
	}
	/**
	 * Get engage
	 * @return boolean
	 */
	public function getEngage()
	{
		return $this->engage;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
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
	 * Set outOfService
	 * @param boolean outOfService
	 * @return boolean
	 */
	public function setOutOfService($_outOfService)
	{
		return ($this->outOfService = $_outOfService);
	}
	/**
	 * Get outOfService
	 * @return boolean
	 */
	public function getOutOfService()
	{
		return $this->outOfService;
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