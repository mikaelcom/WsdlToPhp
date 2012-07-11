<?php
/**
 * Class file for OvhTypeDedicatedVirtualMacIpUsedGetListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedVirtualMacIpUsedGetListResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedVirtualMacIpUsedGetListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedIpVirtualMacUsedStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedIpVirtualMacUsedStructType return
	 * @return OvhTypeDedicatedVirtualMacIpUsedGetListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedIpVirtualMacUsedStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedIpVirtualMacUsedStructType return
	 * @return MyArrayOfDedicatedIpVirtualMacUsedStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedIpVirtualMacUsedStructType
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