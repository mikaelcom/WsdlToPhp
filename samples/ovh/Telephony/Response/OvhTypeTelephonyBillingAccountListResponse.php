<?php
/**
 * Class file for OvhTypeTelephonyBillingAccountListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillingAccountListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillingAccountListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyBillingAccountStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyBillingAccountStructType return
	 * @return OvhTypeTelephonyBillingAccountListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyBillingAccountStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyBillingAccountStructType return
	 * @return MyArrayOfTelephonyBillingAccountStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyBillingAccountStructType
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