<?php
/**
 * Class file for PayPalTypeReverseTransactionResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeReverseTransactionResponseType
 * @date 14/07/2012
 */
class PayPalTypeReverseTransactionResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The ReverseTransactionResponseDetails
	 * @var PayPalTypeReverseTransactionResponseDetailsType
	 */
	public $ReverseTransactionResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeReverseTransactionResponseDetailsType ReverseTransactionResponseDetails
	 * @return PayPalTypeReverseTransactionResponseType
	 */
	public function __construct($_ReverseTransactionResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('ReverseTransactionResponseDetails'=>$_ReverseTransactionResponseDetails));
	}
	/**
	 * Set ReverseTransactionResponseDetails
	 * @param ReverseTransactionResponseDetailsType ReverseTransactionResponseDetails
	 * @return ReverseTransactionResponseDetailsType
	 */
	public function setReverseTransactionResponseDetails($_ReverseTransactionResponseDetails)
	{
		return ($this->ReverseTransactionResponseDetails = $_ReverseTransactionResponseDetails);
	}
	/**
	 * Get ReverseTransactionResponseDetails
	 * @return PayPalTypeReverseTransactionResponseDetailsType
	 */
	public function getReverseTransactionResponseDetails()
	{
		return $this->ReverseTransactionResponseDetails;
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