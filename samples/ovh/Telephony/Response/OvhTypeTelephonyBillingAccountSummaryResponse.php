<?php
/**
 * Class file for OvhTypeTelephonyBillingAccountSummaryResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillingAccountSummaryResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillingAccountSummaryResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyBillingAccountSummaryReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyBillingAccountSummaryReturn return
	 * @return OvhTypeTelephonyBillingAccountSummaryResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyBillingAccountSummaryReturn return
	 * @return telephonyBillingAccountSummaryReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyBillingAccountSummaryReturn
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