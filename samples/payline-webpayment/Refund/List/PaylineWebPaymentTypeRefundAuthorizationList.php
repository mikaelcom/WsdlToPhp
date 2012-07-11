<?php
/**
 * Class file for PaylineWebPaymentTypeRefundAuthorizationList
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeRefundAuthorizationList
 * Documentation : An array of authorization to refund
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeRefundAuthorizationList extends PaylineWebPaymentWsdlClass
{
	/**
	 * The refund
	 * Meta informations :
	 * 	- maxOccurs : 5000
	 * 	- minOccurs : 1
	 * @var PaylineWebPaymentTypeRefund
	 */
	public $refund;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeRefund refund
	 * @return PaylineWebPaymentTypeRefundAuthorizationList
	 */
	public function __construct($_refund)
	{
		parent::__construct(array('refund'=>$_refund));
	}
	/**
	 * Set refund
	 * @param refund refund
	 * @return refund
	 */
	public function setRefund($_refund)
	{
		return ($this->refund = $_refund);
	}
	/**
	 * Get refund
	 * @return PaylineWebPaymentTyperefund
	 */
	public function getRefund()
	{
		return $this->refund;
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