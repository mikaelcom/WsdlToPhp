<?php
/**
 * Class file for PayPalTypeDoReferenceTransactionRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoReferenceTransactionRequestType
 * @date 14/07/2012
 */
class PayPalTypeDoReferenceTransactionRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The DoReferenceTransactionRequestDetails
	 * @var PayPalTypeDoReferenceTransactionRequestDetailsType
	 */
	public $DoReferenceTransactionRequestDetails;
	/**
	 * The ReturnFMFDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : This flag indicates that the response should include FMFDetails
	 * @var int
	 */
	public $ReturnFMFDetails;
	/**
	 * Constructor
	 * @param PayPalTypeDoReferenceTransactionRequestDetailsType DoReferenceTransactionRequestDetails
	 * @param int ReturnFMFDetails
	 * @return PayPalTypeDoReferenceTransactionRequestType
	 */
	public function __construct($_DoReferenceTransactionRequestDetails = null,$_ReturnFMFDetails = null)
	{
		PayPalWsdlClass::__construct(array('DoReferenceTransactionRequestDetails'=>$_DoReferenceTransactionRequestDetails,'ReturnFMFDetails'=>$_ReturnFMFDetails));
	}
	/**
	 * Set DoReferenceTransactionRequestDetails
	 * @param DoReferenceTransactionRequestDetailsType DoReferenceTransactionRequestDetails
	 * @return DoReferenceTransactionRequestDetailsType
	 */
	public function setDoReferenceTransactionRequestDetails($_DoReferenceTransactionRequestDetails)
	{
		return ($this->DoReferenceTransactionRequestDetails = $_DoReferenceTransactionRequestDetails);
	}
	/**
	 * Get DoReferenceTransactionRequestDetails
	 * @return PayPalTypeDoReferenceTransactionRequestDetailsType
	 */
	public function getDoReferenceTransactionRequestDetails()
	{
		return $this->DoReferenceTransactionRequestDetails;
	}
	/**
	 * Set ReturnFMFDetails
	 * @param int ReturnFMFDetails
	 * @return int
	 */
	public function setReturnFMFDetails($_ReturnFMFDetails)
	{
		return ($this->ReturnFMFDetails = $_ReturnFMFDetails);
	}
	/**
	 * Get ReturnFMFDetails
	 * @return int
	 */
	public function getReturnFMFDetails()
	{
		return $this->ReturnFMFDetails;
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