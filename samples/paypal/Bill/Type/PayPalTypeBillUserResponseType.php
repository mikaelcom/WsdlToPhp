<?php
/**
 * Class file for PayPalTypeBillUserResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBillUserResponseType
 * @date 14/07/2012
 */
class PayPalTypeBillUserResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The BillUserResponseDetails
	 * @var PayPalTypeMerchantPullPaymentResponseType
	 */
	public $BillUserResponseDetails;
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
	 * @param PayPalTypeMerchantPullPaymentResponseType BillUserResponseDetails
	 * @param PayPalTypeFMFDetailsType FMFDetails
	 * @return PayPalTypeBillUserResponseType
	 */
	public function __construct($_BillUserResponseDetails = null,$_FMFDetails = null)
	{
		PayPalWsdlClass::__construct(array('BillUserResponseDetails'=>$_BillUserResponseDetails,'FMFDetails'=>$_FMFDetails));
	}
	/**
	 * Set BillUserResponseDetails
	 * @param MerchantPullPaymentResponseType BillUserResponseDetails
	 * @return MerchantPullPaymentResponseType
	 */
	public function setBillUserResponseDetails($_BillUserResponseDetails)
	{
		return ($this->BillUserResponseDetails = $_BillUserResponseDetails);
	}
	/**
	 * Get BillUserResponseDetails
	 * @return PayPalTypeMerchantPullPaymentResponseType
	 */
	public function getBillUserResponseDetails()
	{
		return $this->BillUserResponseDetails;
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