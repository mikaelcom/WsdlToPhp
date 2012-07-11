<?php
/**
 * Class file for OvhTypeDedicatedBandwidthManagementGetResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBandwidthManagementGetResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedBandwidthManagementGetResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDedicatedBandwidthManagementReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedBandwidthManagementReturn return
	 * @return OvhTypeDedicatedBandwidthManagementGetResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param dedicatedBandwidthManagementReturn return
	 * @return dedicatedBandwidthManagementReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypededicatedBandwidthManagementReturn
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