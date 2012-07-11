<?php
/**
 * Class file for OvhTypeDedicatedBackupGetFreePlanningResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupGetFreePlanningResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupGetFreePlanningResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedBackupGetPlanningStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedBackupGetPlanningStructType return
	 * @return OvhTypeDedicatedBackupGetFreePlanningResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedBackupGetPlanningStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedBackupGetPlanningStructType return
	 * @return MyArrayOfDedicatedBackupGetPlanningStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedBackupGetPlanningStructType
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