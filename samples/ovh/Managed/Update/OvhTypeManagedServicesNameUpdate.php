<?php
/**
 * Class file for OvhTypeManagedServicesNameUpdate
 * @date 02/07/2012
 */
/**
 * Class OvhTypeManagedServicesNameUpdate
 * @date 02/07/2012
 */
class OvhTypeManagedServicesNameUpdate extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The storage
	 * @var string
	 */
	public $storage;
	/**
	 * The customName
	 * @var string
	 */
	public $customName;
	/**
	 * Constructor
	 * @param string session
	 * @param string storage
	 * @param string customName
	 * @return OvhTypeManagedServicesNameUpdate
	 */
	public function __construct($_session = null,$_storage = null,$_customName = null)
	{
		parent::__construct(array('session'=>$_session,'storage'=>$_storage,'customName'=>$_customName));
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
	 * Set storage
	 * @param string storage
	 * @return string
	 */
	public function setStorage($_storage)
	{
		return ($this->storage = $_storage);
	}
	/**
	 * Get storage
	 * @return string
	 */
	public function getStorage()
	{
		return $this->storage;
	}
	/**
	 * Set customName
	 * @param string customName
	 * @return string
	 */
	public function setCustomName($_customName)
	{
		return ($this->customName = $_customName);
	}
	/**
	 * Get customName
	 * @return string
	 */
	public function getCustomName()
	{
		return $this->customName;
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