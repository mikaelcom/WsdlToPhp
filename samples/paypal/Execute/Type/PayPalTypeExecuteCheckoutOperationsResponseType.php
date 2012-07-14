<?php
/**
 * Class file for PayPalTypeExecuteCheckoutOperationsResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeExecuteCheckoutOperationsResponseType
 * @date 14/07/2012
 */
class PayPalTypeExecuteCheckoutOperationsResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The ExecuteCheckoutOperationsResponseDetails
	 * @var PayPalTypeExecuteCheckoutOperationsResponseDetailsType
	 */
	public $ExecuteCheckoutOperationsResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeExecuteCheckoutOperationsResponseDetailsType ExecuteCheckoutOperationsResponseDetails
	 * @return PayPalTypeExecuteCheckoutOperationsResponseType
	 */
	public function __construct($_ExecuteCheckoutOperationsResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('ExecuteCheckoutOperationsResponseDetails'=>$_ExecuteCheckoutOperationsResponseDetails));
	}
	/**
	 * Set ExecuteCheckoutOperationsResponseDetails
	 * @param ExecuteCheckoutOperationsResponseDetailsType ExecuteCheckoutOperationsResponseDetails
	 * @return ExecuteCheckoutOperationsResponseDetailsType
	 */
	public function setExecuteCheckoutOperationsResponseDetails($_ExecuteCheckoutOperationsResponseDetails)
	{
		return ($this->ExecuteCheckoutOperationsResponseDetails = $_ExecuteCheckoutOperationsResponseDetails);
	}
	/**
	 * Get ExecuteCheckoutOperationsResponseDetails
	 * @return PayPalTypeExecuteCheckoutOperationsResponseDetailsType
	 */
	public function getExecuteCheckoutOperationsResponseDetails()
	{
		return $this->ExecuteCheckoutOperationsResponseDetails;
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