<?php
/**
 * Class file for PayPalTypeBillOutstandingAmountRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBillOutstandingAmountRequestType
 * @date 14/07/2012
 */
class PayPalTypeBillOutstandingAmountRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The BillOutstandingAmountRequestDetails
	 * @var PayPalTypeBillOutstandingAmountRequestDetailsType
	 */
	public $BillOutstandingAmountRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeBillOutstandingAmountRequestDetailsType BillOutstandingAmountRequestDetails
	 * @return PayPalTypeBillOutstandingAmountRequestType
	 */
	public function __construct($_BillOutstandingAmountRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('BillOutstandingAmountRequestDetails'=>$_BillOutstandingAmountRequestDetails));
	}
	/**
	 * Set BillOutstandingAmountRequestDetails
	 * @param BillOutstandingAmountRequestDetailsType BillOutstandingAmountRequestDetails
	 * @return BillOutstandingAmountRequestDetailsType
	 */
	public function setBillOutstandingAmountRequestDetails($_BillOutstandingAmountRequestDetails)
	{
		return ($this->BillOutstandingAmountRequestDetails = $_BillOutstandingAmountRequestDetails);
	}
	/**
	 * Get BillOutstandingAmountRequestDetails
	 * @return PayPalTypeBillOutstandingAmountRequestDetailsType
	 */
	public function getBillOutstandingAmountRequestDetails()
	{
		return $this->BillOutstandingAmountRequestDetails;
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