<?php
/**
 * Class file for OvhTypeDedicatedMonitoringServiceListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMonitoringServiceListResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedMonitoringServiceListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedMonitoringServiceStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedMonitoringServiceStructType return
	 * @return OvhTypeDedicatedMonitoringServiceListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedMonitoringServiceStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedMonitoringServiceStructType return
	 * @return MyArrayOfDedicatedMonitoringServiceStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedMonitoringServiceStructType
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