<?php
/**
 * Class file for OvhTypeDedicatedSecondaryDNSInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedSecondaryDNSInfoResponse
 * @date 02/07/2012
 */
class OvhTypeDedicatedSecondaryDNSInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfSecondaryDNSStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfSecondaryDNSStructType return
	 * @return OvhTypeDedicatedSecondaryDNSInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfSecondaryDNSStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfSecondaryDNSStructType return
	 * @return MyArrayOfSecondaryDNSStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfSecondaryDNSStructType
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