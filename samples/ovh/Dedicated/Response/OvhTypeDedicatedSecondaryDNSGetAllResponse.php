<?php
/**
 * Class file for OvhTypeDedicatedSecondaryDNSGetAllResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedSecondaryDNSGetAllResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedSecondaryDNSGetAllResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfAllSecondaryDNSStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfAllSecondaryDNSStructType return
	 * @return OvhTypeDedicatedSecondaryDNSGetAllResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfAllSecondaryDNSStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfAllSecondaryDNSStructType return
	 * @return MyArrayOfAllSecondaryDNSStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfAllSecondaryDNSStructType
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