<?php
/**
 * Class file for PayPalTypeDoReferenceTransactionResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoReferenceTransactionResponseType
 * @date 14/07/2012
 */
class PayPalTypeDoReferenceTransactionResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The DoReferenceTransactionResponseDetails
	 * @var PayPalTypeDoReferenceTransactionResponseDetailsType
	 */
	public $DoReferenceTransactionResponseDetails;
	/**
	 * The FMFDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeFMFDetailsType
	 */
	public $FMFDetails;
	/**
	 * Constructor
	 * @param PayPalTypeDoReferenceTransactionResponseDetailsType DoReferenceTransactionResponseDetails
	 * @param PayPalTypeFMFDetailsType FMFDetails
	 * @return PayPalTypeDoReferenceTransactionResponseType
	 */
	public function __construct($_DoReferenceTransactionResponseDetails = null,$_FMFDetails = null)
	{
		PayPalWsdlClass::__construct(array('DoReferenceTransactionResponseDetails'=>$_DoReferenceTransactionResponseDetails,'FMFDetails'=>$_FMFDetails));
	}
	/**
	 * Set DoReferenceTransactionResponseDetails
	 * @param DoReferenceTransactionResponseDetailsType DoReferenceTransactionResponseDetails
	 * @return DoReferenceTransactionResponseDetailsType
	 */
	public function setDoReferenceTransactionResponseDetails($_DoReferenceTransactionResponseDetails)
	{
		return ($this->DoReferenceTransactionResponseDetails = $_DoReferenceTransactionResponseDetails);
	}
	/**
	 * Get DoReferenceTransactionResponseDetails
	 * @return PayPalTypeDoReferenceTransactionResponseDetailsType
	 */
	public function getDoReferenceTransactionResponseDetails()
	{
		return $this->DoReferenceTransactionResponseDetails;
	}
	/**
	 * Set FMFDetails
	 * @param FMFDetailsType FMFDetails
	 * @return FMFDetailsType
	 */
	public function setFMFDetails($_FMFDetails)
	{
		return ($this->FMFDetails = $_FMFDetails);
	}
	/**
	 * Get FMFDetails
	 * @return PayPalTypeFMFDetailsType
	 */
	public function getFMFDetails()
	{
		return $this->FMFDetails;
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