<?php
/**
 * Class file for PayPalTypeReverseTransactionRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeReverseTransactionRequestType
 * @date 14/07/2012
 */
class PayPalTypeReverseTransactionRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The ReverseTransactionRequestDetails
	 * @var PayPalTypeReverseTransactionRequestDetailsType
	 */
	public $ReverseTransactionRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeReverseTransactionRequestDetailsType ReverseTransactionRequestDetails
	 * @return PayPalTypeReverseTransactionRequestType
	 */
	public function __construct($_ReverseTransactionRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('ReverseTransactionRequestDetails'=>$_ReverseTransactionRequestDetails));
	}
	/**
	 * Set ReverseTransactionRequestDetails
	 * @param ReverseTransactionRequestDetailsType ReverseTransactionRequestDetails
	 * @return ReverseTransactionRequestDetailsType
	 */
	public function setReverseTransactionRequestDetails($_ReverseTransactionRequestDetails)
	{
		return ($this->ReverseTransactionRequestDetails = $_ReverseTransactionRequestDetails);
	}
	/**
	 * Get ReverseTransactionRequestDetails
	 * @return PayPalTypeReverseTransactionRequestDetailsType
	 */
	public function getReverseTransactionRequestDetails()
	{
		return $this->ReverseTransactionRequestDetails;
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