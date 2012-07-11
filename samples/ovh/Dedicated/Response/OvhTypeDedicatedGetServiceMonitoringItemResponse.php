<?php
/**
 * Class file for OvhTypeDedicatedGetServiceMonitoringItemResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedGetServiceMonitoringItemResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedGetServiceMonitoringItemResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDedicatedGetServiceMonitoringItemStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedGetServiceMonitoringItemStruct return
	 * @return OvhTypeDedicatedGetServiceMonitoringItemResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param dedicatedGetServiceMonitoringItemStruct return
	 * @return dedicatedGetServiceMonitoringItemStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypededicatedGetServiceMonitoringItemStruct
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