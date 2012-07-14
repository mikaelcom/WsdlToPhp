<?php
/**
 * Class file for PayPalTypeExecuteCheckoutOperationsRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeExecuteCheckoutOperationsRequestType
 * @date 14/07/2012
 */
class PayPalTypeExecuteCheckoutOperationsRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The ExecuteCheckoutOperationsRequestDetails
	 * @var PayPalTypeExecuteCheckoutOperationsRequestDetailsType
	 */
	public $ExecuteCheckoutOperationsRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeExecuteCheckoutOperationsRequestDetailsType ExecuteCheckoutOperationsRequestDetails
	 * @return PayPalTypeExecuteCheckoutOperationsRequestType
	 */
	public function __construct($_ExecuteCheckoutOperationsRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('ExecuteCheckoutOperationsRequestDetails'=>$_ExecuteCheckoutOperationsRequestDetails));
	}
	/**
	 * Set ExecuteCheckoutOperationsRequestDetails
	 * @param ExecuteCheckoutOperationsRequestDetailsType ExecuteCheckoutOperationsRequestDetails
	 * @return ExecuteCheckoutOperationsRequestDetailsType
	 */
	public function setExecuteCheckoutOperationsRequestDetails($_ExecuteCheckoutOperationsRequestDetails)
	{
		return ($this->ExecuteCheckoutOperationsRequestDetails = $_ExecuteCheckoutOperationsRequestDetails);
	}
	/**
	 * Get ExecuteCheckoutOperationsRequestDetails
	 * @return PayPalTypeExecuteCheckoutOperationsRequestDetailsType
	 */
	public function getExecuteCheckoutOperationsRequestDetails()
	{
		return $this->ExecuteCheckoutOperationsRequestDetails;
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