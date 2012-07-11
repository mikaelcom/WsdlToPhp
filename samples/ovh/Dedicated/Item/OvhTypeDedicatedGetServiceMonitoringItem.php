<?php
/**
 * Class file for OvhTypeDedicatedGetServiceMonitoringItem
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedGetServiceMonitoringItem
 * @date 02/07/2012
 */
class OvhTypeDedicatedGetServiceMonitoringItem extends OvhWsdlClass
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
	 * Constructor
	 * @param string session
	 * @param string ip
	 * @param int itemId
	 * @return OvhTypeDedicatedGetServiceMonitoringItem
	 */
	public function __construct($_session = null,$_ip = null,$_itemId = null)
	{
		parent::__construct(array('session'=>$_session,'ip'=>$_ip,'itemId'=>$_itemId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>