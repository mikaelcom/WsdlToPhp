<?php
/**
 * Class file for PayPalTypeExecuteCheckoutOperationsReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeExecuteCheckoutOperationsReq
 * @date 14/07/2012
 */
class PayPalTypeExecuteCheckoutOperationsReq extends PayPalWsdlClass
{
	/**
	 * The ExecuteCheckoutOperationsRequest
	 * @var PayPalTypeExecuteCheckoutOperationsRequestType
	 */
	public $ExecuteCheckoutOperationsRequest;
	/**
	 * Constructor
	 * @param PayPalTypeExecuteCheckoutOperationsRequestType ExecuteCheckoutOperationsRequest
	 * @return PayPalTypeExecuteCheckoutOperationsReq
	 */
	public function __construct($_ExecuteCheckoutOperationsRequest = null)
	{
		parent::__construct(array('ExecuteCheckoutOperationsRequest'=>$_ExecuteCheckoutOperationsRequest));
	}
	/**
	 * Set ExecuteCheckoutOperationsRequest
	 * @param ExecuteCheckoutOperationsRequestType ExecuteCheckoutOperationsRequest
	 * @return ExecuteCheckoutOperationsRequestType
	 */
	public function setExecuteCheckoutOperationsRequest($_ExecuteCheckoutOperationsRequest)
	{
		return ($this->ExecuteCheckoutOperationsRequest = $_ExecuteCheckoutOperationsRequest);
	}
	/**
	 * Get ExecuteCheckoutOperationsRequest
	 * @return PayPalTypeExecuteCheckoutOperationsRequestType
	 */
	public function getExecuteCheckoutOperationsRequest()
	{
		return $this->ExecuteCheckoutOperationsRequest;
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