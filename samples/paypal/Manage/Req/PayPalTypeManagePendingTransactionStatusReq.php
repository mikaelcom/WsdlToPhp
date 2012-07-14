<?php
/**
 * Class file for PayPalTypeManagePendingTransactionStatusReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeManagePendingTransactionStatusReq
 * @date 14/07/2012
 */
class PayPalTypeManagePendingTransactionStatusReq extends PayPalWsdlClass
{
	/**
	 * The ManagePendingTransactionStatusRequest
	 * @var PayPalTypeManagePendingTransactionStatusRequestType
	 */
	public $ManagePendingTransactionStatusRequest;
	/**
	 * Constructor
	 * @param PayPalTypeManagePendingTransactionStatusRequestType ManagePendingTransactionStatusRequest
	 * @return PayPalTypeManagePendingTransactionStatusReq
	 */
	public function __construct($_ManagePendingTransactionStatusRequest = null)
	{
		parent::__construct(array('ManagePendingTransactionStatusRequest'=>$_ManagePendingTransactionStatusRequest));
	}
	/**
	 * Set ManagePendingTransactionStatusRequest
	 * @param ManagePendingTransactionStatusRequestType ManagePendingTransactionStatusRequest
	 * @return ManagePendingTransactionStatusRequestType
	 */
	public function setManagePendingTransactionStatusRequest($_ManagePendingTransactionStatusRequest)
	{
		return ($this->ManagePendingTransactionStatusRequest = $_ManagePendingTransactionStatusRequest);
	}
	/**
	 * Get ManagePendingTransactionStatusRequest
	 * @return PayPalTypeManagePendingTransactionStatusRequestType
	 */
	public function getManagePendingTransactionStatusRequest()
	{
		return $this->ManagePendingTransactionStatusRequest;
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