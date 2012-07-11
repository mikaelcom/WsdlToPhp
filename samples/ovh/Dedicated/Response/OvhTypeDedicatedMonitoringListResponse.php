<?php
/**
 * Class file for OvhTypeDedicatedMonitoringListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMonitoringListResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedMonitoringListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedMonitoringStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedMonitoringStructType return
	 * @return OvhTypeDedicatedMonitoringListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedMonitoringStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedMonitoringStructType return
	 * @return MyArrayOfDedicatedMonitoringStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedMonitoringStructType
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