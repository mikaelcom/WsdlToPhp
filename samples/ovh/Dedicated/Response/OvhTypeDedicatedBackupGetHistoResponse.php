<?php
/**
 * Class file for OvhTypeDedicatedBackupGetHistoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupGetHistoResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupGetHistoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedBackupHistoStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedBackupHistoStructType return
	 * @return OvhTypeDedicatedBackupGetHistoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedBackupHistoStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedBackupHistoStructType return
	 * @return MyArrayOfDedicatedBackupHistoStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedBackupHistoStructType
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