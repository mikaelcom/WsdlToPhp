<?php
/**
 * Class file for PaylineWebPaymentTypeBillingRecordList
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeBillingRecordList
 * Documentation : An array of billing record
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeBillingRecordList extends PaylineWebPaymentWsdlClass
{
	/**
	 * The billingRecord
	 * Meta informations :
	 * 	- maxOccurs : 100
	 * 	- minOccurs : 0
	 * @var PaylineWebPaymentTypeBillingRecord
	 */
	public $billingRecord;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeBillingRecord billingRecord
	 * @return PaylineWebPaymentTypeBillingRecordList
	 */
	public function __construct($_billingRecord = null)
	{
		parent::__construct(array('billingRecord'=>$_billingRecord));
	}
	/**
	 * Set billingRecord
	 * @param billingRecord billingRecord
	 * @return billingRecord
	 */
	public function setBillingRecord($_billingRecord)
	{
		return ($this->billingRecord = $_billingRecord);
	}
	/**
	 * Get billingRecord
	 * @return PaylineWebPaymentTypebillingRecord
	 */
	public function getBillingRecord()
	{
		return $this->billingRecord;
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