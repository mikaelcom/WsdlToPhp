<?php
/**
 * Class file for PayPalTypeBillUserRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBillUserRequestType
 * @date 14/07/2012
 */
class PayPalTypeBillUserRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The MerchantPullPaymentDetails
	 * @var PayPalTypeMerchantPullPaymentType
	 */
	public $MerchantPullPaymentDetails;
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
	 * @param PayPalTypeMerchantPullPaymentType MerchantPullPaymentDetails
	 * @param int ReturnFMFDetails
	 * @return PayPalTypeBillUserRequestType
	 */
	public function __construct($_MerchantPullPaymentDetails = null,$_ReturnFMFDetails = null)
	{
		PayPalWsdlClass::__construct(array('MerchantPullPaymentDetails'=>$_MerchantPullPaymentDetails,'ReturnFMFDetails'=>$_ReturnFMFDetails));
	}
	/**
	 * Set MerchantPullPaymentDetails
	 * @param MerchantPullPaymentType MerchantPullPaymentDetails
	 * @return MerchantPullPaymentType
	 */
	public function setMerchantPullPaymentDetails($_MerchantPullPaymentDetails)
	{
		return ($this->MerchantPullPaymentDetails = $_MerchantPullPaymentDetails);
	}
	/**
	 * Get MerchantPullPaymentDetails
	 * @return PayPalTypeMerchantPullPaymentType
	 */
	public function getMerchantPullPaymentDetails()
	{
		return $this->MerchantPullPaymentDetails;
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