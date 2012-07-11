<?php
/**
 * Class file for OvhTypeDedicatedBackupGetDateResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupGetDateResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupGetDateResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedBackupDateStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedBackupDateStructType return
	 * @return OvhTypeDedicatedBackupGetDateResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedBackupDateStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedBackupDateStructType return
	 * @return MyArrayOfDedicatedBackupDateStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedBackupDateStructType
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