<?php
/**
 * Class file for OvhTypeManagedServicesPartitionQuotaUsed
 * @date 02/07/2012
 */
/**
 * Class OvhTypeManagedServicesPartitionQuotaUsed
 * @date 02/07/2012
 */
class OvhTypeManagedServicesPartitionQuotaUsed extends OvhWsdlClass
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
	 * The partitionName
	 * @var string
	 */
	public $partitionName;
	/**
	 * Constructor
	 * @param string session
	 * @param string storage
	 * @param string partitionName
	 * @return OvhTypeManagedServicesPartitionQuotaUsed
	 */
	public function __construct($_session = null,$_storage = null,$_partitionName = null)
	{
		parent::__construct(array('session'=>$_session,'storage'=>$_storage,'partitionName'=>$_partitionName));
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
	 * Set partitionName
	 * @param string partitionName
	 * @return string
	 */
	public function setPartitionName($_partitionName)
	{
		return ($this->partitionName = $_partitionName);
	}
	/**
	 * Get partitionName
	 * @return string
	 */
	public function getPartitionName()
	{
		return $this->partitionName;
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