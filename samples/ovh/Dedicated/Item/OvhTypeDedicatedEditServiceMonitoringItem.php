<?php
/**
 * Class file for OvhTypeDedicatedEditServiceMonitoringItem
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedEditServiceMonitoringItem
 * @date 02/07/2012
 */
class OvhTypeDedicatedEditServiceMonitoringItem extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The itemId
	 * @var int
	 */
	public $itemId;
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
	 * Constructor
	 * @param string session
	 * @param string ip
	 * @param int itemId
	 * @param string period
	 * @param string string
	 * @return OvhTypeDedicatedEditServiceMonitoringItem
	 */
	public function __construct($_session = null,$_ip = null,$_itemId = null,$_period = null,$_string = null)
	{
		parent::__construct(array('session'=>$_session,'ip'=>$_ip,'itemId'=>$_itemId,'period'=>$_period,'string'=>$_string));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
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
	 * Set itemId
	 * @param int itemId
	 * @return int
	 */
	public function setItemId($_itemId)
	{
		return ($this->itemId = $_itemId);
	}
	/**
	 * Get itemId
	 * @return int
	 */
	public function getItemId()
	{
		return $this->itemId;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>