<?php
/**
 * Class file for OvhTypeTelephonyBillingAccountInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillingAccountInfoResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillingAccountInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyBillingAccountInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyBillingAccountInfoReturn return
	 * @return OvhTypeTelephonyBillingAccountInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyBillingAccountInfoReturn return
	 * @return telephonyBillingAccountInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyBillingAccountInfoReturn
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