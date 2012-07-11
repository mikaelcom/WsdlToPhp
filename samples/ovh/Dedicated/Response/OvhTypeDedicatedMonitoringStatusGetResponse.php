<?php
/**
 * Class file for OvhTypeDedicatedMonitoringStatusGetResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMonitoringStatusGetResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedMonitoringStatusGetResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDedicatedMonitoringStatusReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedMonitoringStatusReturn return
	 * @return OvhTypeDedicatedMonitoringStatusGetResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param dedicatedMonitoringStatusReturn return
	 * @return dedicatedMonitoringStatusReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypededicatedMonitoringStatusReturn
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