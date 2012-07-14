<?php
/**
 * Class file for PayPalTypeBillOutstandingAmountReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBillOutstandingAmountReq
 * @date 14/07/2012
 */
class PayPalTypeBillOutstandingAmountReq extends PayPalWsdlClass
{
	/**
	 * The BillOutstandingAmountRequest
	 * @var PayPalTypeBillOutstandingAmountRequestType
	 */
	public $BillOutstandingAmountRequest;
	/**
	 * Constructor
	 * @param PayPalTypeBillOutstandingAmountRequestType BillOutstandingAmountRequest
	 * @return PayPalTypeBillOutstandingAmountReq
	 */
	public function __construct($_BillOutstandingAmountRequest = null)
	{
		parent::__construct(array('BillOutstandingAmountRequest'=>$_BillOutstandingAmountRequest));
	}
	/**
	 * Set BillOutstandingAmountRequest
	 * @param BillOutstandingAmountRequestType BillOutstandingAmountRequest
	 * @return BillOutstandingAmountRequestType
	 */
	public function setBillOutstandingAmountRequest($_BillOutstandingAmountRequest)
	{
		return ($this->BillOutstandingAmountRequest = $_BillOutstandingAmountRequest);
	}
	/**
	 * Get BillOutstandingAmountRequest
	 * @return PayPalTypeBillOutstandingAmountRequestType
	 */
	public function getBillOutstandingAmountRequest()
	{
		return $this->BillOutstandingAmountRequest;
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