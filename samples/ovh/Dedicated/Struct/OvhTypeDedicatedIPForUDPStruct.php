<?php
/**
 * Class file for OvhTypeDedicatedIPForUDPStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedIPForUDPStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedIPForUDPStruct extends OvhWsdlClass
{
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The routedTo
	 * @var string
	 */
	public $routedTo;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The mac
	 * @var string
	 */
	public $mac;
	/**
	 * The reverse
	 * @var string
	 */
	public $reverse;
	/**
	 * Constructor
	 * @param string ip
	 * @param string routedTo
	 * @param string status
	 * @param string mac
	 * @param string reverse
	 * @return OvhTypeDedicatedIPForUDPStruct
	 */
	public function __construct($_ip = null,$_routedTo = null,$_status = null,$_mac = null,$_reverse = null)
	{
		parent::__construct(array('ip'=>$_ip,'routedTo'=>$_routedTo,'status'=>$_status,'mac'=>$_mac,'reverse'=>$_reverse));
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
	 * Set routedTo
	 * @param string routedTo
	 * @return string
	 */
	public function setRoutedTo($_routedTo)
	{
		return ($this->routedTo = $_routedTo);
	}
	/**
	 * Get routedTo
	 * @return string
	 */
	public function getRoutedTo()
	{
		return $this->routedTo;
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
	 * Set reverse
	 * @param string reverse
	 * @return string
	 */
	public function setReverse($_reverse)
	{
		return ($this->reverse = $_reverse);
	}
	/**
	 * Get reverse
	 * @return string
	 */
	public function getReverse()
	{
		return $this->reverse;
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