<?php
/**
 * Class file for OvhTypeDedicatedVirtualMacIpAvailableGetListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedVirtualMacIpAvailableGetListResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedVirtualMacIpAvailableGetListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDedicatedIpVirtualMacAvailableReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedIpVirtualMacAvailableReturn return
	 * @return OvhTypeDedicatedVirtualMacIpAvailableGetListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param dedicatedIpVirtualMacAvailableReturn return
	 * @return dedicatedIpVirtualMacAvailableReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypededicatedIpVirtualMacAvailableReturn
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