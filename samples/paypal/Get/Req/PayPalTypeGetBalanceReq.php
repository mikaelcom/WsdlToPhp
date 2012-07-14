<?php
/**
 * Class file for PayPalTypeGetBalanceReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetBalanceReq
 * @date 14/07/2012
 */
class PayPalTypeGetBalanceReq extends PayPalWsdlClass
{
	/**
	 * The GetBalanceRequest
	 * @var PayPalTypeGetBalanceRequestType
	 */
	public $GetBalanceRequest;
	/**
	 * Constructor
	 * @param PayPalTypeGetBalanceRequestType GetBalanceRequest
	 * @return PayPalTypeGetBalanceReq
	 */
	public function __construct($_GetBalanceRequest = null)
	{
		parent::__construct(array('GetBalanceRequest'=>$_GetBalanceRequest));
	}
	/**
	 * Set GetBalanceRequest
	 * @param GetBalanceRequestType GetBalanceRequest
	 * @return GetBalanceRequestType
	 */
	public function setGetBalanceRequest($_GetBalanceRequest)
	{
		return ($this->GetBalanceRequest = $_GetBalanceRequest);
	}
	/**
	 * Get GetBalanceRequest
	 * @return PayPalTypeGetBalanceRequestType
	 */
	public function getGetBalanceRequest()
	{
		return $this->GetBalanceRequest;
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