<?php
/**
 * Class file for PayPalTypeBillOutstandingAmountResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBillOutstandingAmountResponseType
 * @date 14/07/2012
 */
class PayPalTypeBillOutstandingAmountResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The BillOutstandingAmountResponseDetails
	 * @var PayPalTypeBillOutstandingAmountResponseDetailsType
	 */
	public $BillOutstandingAmountResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeBillOutstandingAmountResponseDetailsType BillOutstandingAmountResponseDetails
	 * @return PayPalTypeBillOutstandingAmountResponseType
	 */
	public function __construct($_BillOutstandingAmountResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('BillOutstandingAmountResponseDetails'=>$_BillOutstandingAmountResponseDetails));
	}
	/**
	 * Set BillOutstandingAmountResponseDetails
	 * @param BillOutstandingAmountResponseDetailsType BillOutstandingAmountResponseDetails
	 * @return BillOutstandingAmountResponseDetailsType
	 */
	public function setBillOutstandingAmountResponseDetails($_BillOutstandingAmountResponseDetails)
	{
		return ($this->BillOutstandingAmountResponseDetails = $_BillOutstandingAmountResponseDetails);
	}
	/**
	 * Get BillOutstandingAmountResponseDetails
	 * @return PayPalTypeBillOutstandingAmountResponseDetailsType
	 */
	public function getBillOutstandingAmountResponseDetails()
	{
		return $this->BillOutstandingAmountResponseDetails;
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