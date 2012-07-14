<?php
/**
 * Class file for PayPalTypeDoNonReferencedCreditRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoNonReferencedCreditRequestType
 * @date 14/07/2012
 */
class PayPalTypeDoNonReferencedCreditRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The DoNonReferencedCreditRequestDetails
	 * @var PayPalTypeDoNonReferencedCreditRequestDetailsType
	 */
	public $DoNonReferencedCreditRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeDoNonReferencedCreditRequestDetailsType DoNonReferencedCreditRequestDetails
	 * @return PayPalTypeDoNonReferencedCreditRequestType
	 */
	public function __construct($_DoNonReferencedCreditRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('DoNonReferencedCreditRequestDetails'=>$_DoNonReferencedCreditRequestDetails));
	}
	/**
	 * Set DoNonReferencedCreditRequestDetails
	 * @param DoNonReferencedCreditRequestDetailsType DoNonReferencedCreditRequestDetails
	 * @return DoNonReferencedCreditRequestDetailsType
	 */
	public function setDoNonReferencedCreditRequestDetails($_DoNonReferencedCreditRequestDetails)
	{
		return ($this->DoNonReferencedCreditRequestDetails = $_DoNonReferencedCreditRequestDetails);
	}
	/**
	 * Get DoNonReferencedCreditRequestDetails
	 * @return PayPalTypeDoNonReferencedCreditRequestDetailsType
	 */
	public function getDoNonReferencedCreditRequestDetails()
	{
		return $this->DoNonReferencedCreditRequestDetails;
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