<?php
/**
 * Class file for OvhTypeDedicatedBackupListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupListResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedBackupListStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedBackupListStructType return
	 * @return OvhTypeDedicatedBackupListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedBackupListStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedBackupListStructType return
	 * @return MyArrayOfDedicatedBackupListStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedBackupListStructType
	 */
	public function getReturn()
	{
		return $this->return;
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