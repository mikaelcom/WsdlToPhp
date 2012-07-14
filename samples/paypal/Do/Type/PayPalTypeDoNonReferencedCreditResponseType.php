<?php
/**
 * Class file for PayPalTypeDoNonReferencedCreditResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoNonReferencedCreditResponseType
 * @date 14/07/2012
 */
class PayPalTypeDoNonReferencedCreditResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The DoNonReferencedCreditResponseDetails
	 * @var PayPalTypeDoNonReferencedCreditResponseDetailsType
	 */
	public $DoNonReferencedCreditResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeDoNonReferencedCreditResponseDetailsType DoNonReferencedCreditResponseDetails
	 * @return PayPalTypeDoNonReferencedCreditResponseType
	 */
	public function __construct($_DoNonReferencedCreditResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('DoNonReferencedCreditResponseDetails'=>$_DoNonReferencedCreditResponseDetails));
	}
	/**
	 * Set DoNonReferencedCreditResponseDetails
	 * @param DoNonReferencedCreditResponseDetailsType DoNonReferencedCreditResponseDetails
	 * @return DoNonReferencedCreditResponseDetailsType
	 */
	public function setDoNonReferencedCreditResponseDetails($_DoNonReferencedCreditResponseDetails)
	{
		return ($this->DoNonReferencedCreditResponseDetails = $_DoNonReferencedCreditResponseDetails);
	}
	/**
	 * Get DoNonReferencedCreditResponseDetails
	 * @return PayPalTypeDoNonReferencedCreditResponseDetailsType
	 */
	public function getDoNonReferencedCreditResponseDetails()
	{
		return $this->DoNonReferencedCreditResponseDetails;
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