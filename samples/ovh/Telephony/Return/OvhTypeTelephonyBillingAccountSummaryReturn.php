<?php
/**
 * Class file for OvhTypeTelephonyBillingAccountSummaryReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillingAccountSummaryReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillingAccountSummaryReturn extends OvhWsdlClass
{
	/**
	 * The billingAccount
	 * @var OvhTypeTelephonyBillingAccountSummaryBillingAccountStruct
	 */
	public $billingAccount;
	/**
	 * The lines
	 * @var OvhTypeMyArrayOfTelephonyBillingAccountSummaryLineStructType
	 */
	public $lines;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyBillingAccountSummaryBillingAccountStruct billingAccount
	 * @param OvhTypeMyArrayOfTelephonyBillingAccountSummaryLineStructType lines
	 * @return OvhTypeTelephonyBillingAccountSummaryReturn
	 */
	public function __construct($_billingAccount = null,$_lines = null)
	{
		parent::__construct(array('billingAccount'=>$_billingAccount,'lines'=>new OvhTypeMyArrayOfTelephonyBillingAccountSummaryLineStructType($_lines)));
	}
	/**
	 * Set billingAccount
	 * @param telephonyBillingAccountSummaryBillingAccountStruct billingAccount
	 * @return telephonyBillingAccountSummaryBillingAccountStruct
	 */
	public function setBillingAccount($_billingAccount)
	{
		return ($this->billingAccount = $_billingAccount);
	}
	/**
	 * Get billingAccount
	 * @return OvhTypetelephonyBillingAccountSummaryBillingAccountStruct
	 */
	public function getBillingAccount()
	{
		return $this->billingAccount;
	}
	/**
	 * Set lines
	 * @param MyArrayOfTelephonyBillingAccountSummaryLineStructType lines
	 * @return MyArrayOfTelephonyBillingAccountSummaryLineStructType
	 */
	public function setLines($_lines)
	{
		return ($this->lines = $_lines);
	}
	/**
	 * Get lines
	 * @return OvhTypeMyArrayOfTelephonyBillingAccountSummaryLineStructType
	 */
	public function getLines()
	{
		return $this->lines;
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