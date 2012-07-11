<?php
/**
 * Class file for OvhTypeDedicatedMonitoringServiceDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMonitoringServiceDel
 * @date 02/07/2012
 */
class OvhTypeDedicatedMonitoringServiceDel extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The itemsIdTable
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $itemsIdTable;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param OvhTypeMyArrayOfStringType itemsIdTable
	 * @return OvhTypeDedicatedMonitoringServiceDel
	 */
	public function __construct($_session = null,$_hostname = null,$_itemsIdTable = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'itemsIdTable'=>new OvhTypeMyArrayOfStringType($_itemsIdTable)));
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
	 * Set hostname
	 * @param string hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get hostname
	 * @return string
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set itemsIdTable
	 * @param MyArrayOfStringType itemsIdTable
	 * @return MyArrayOfStringType
	 */
	public function setItemsIdTable($_itemsIdTable)
	{
		return ($this->itemsIdTable = $_itemsIdTable);
	}
	/**
	 * Get itemsIdTable
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getItemsIdTable()
	{
		return $this->itemsIdTable;
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