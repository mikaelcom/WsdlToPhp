<?php
/**
 * Class file for OvhTypeDedicatedCapabilitiesGetAllResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedCapabilitiesGetAllResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedCapabilitiesGetAllResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDedicatedCapabilitiesStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedCapabilitiesStructType return
	 * @return OvhTypeDedicatedCapabilitiesGetAllResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDedicatedCapabilitiesStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDedicatedCapabilitiesStructType return
	 * @return MyArrayOfDedicatedCapabilitiesStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDedicatedCapabilitiesStructType
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