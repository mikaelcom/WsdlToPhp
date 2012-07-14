<?php
/**
 * Class file for PayPalTypeCreateBillingAgreementReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCreateBillingAgreementReq
 * @date 14/07/2012
 */
class PayPalTypeCreateBillingAgreementReq extends PayPalWsdlClass
{
	/**
	 * The CreateBillingAgreementRequest
	 * @var PayPalTypeCreateBillingAgreementRequestType
	 */
	public $CreateBillingAgreementRequest;
	/**
	 * Constructor
	 * @param PayPalTypeCreateBillingAgreementRequestType CreateBillingAgreementRequest
	 * @return PayPalTypeCreateBillingAgreementReq
	 */
	public function __construct($_CreateBillingAgreementRequest = null)
	{
		parent::__construct(array('CreateBillingAgreementRequest'=>$_CreateBillingAgreementRequest));
	}
	/**
	 * Set CreateBillingAgreementRequest
	 * @param CreateBillingAgreementRequestType CreateBillingAgreementRequest
	 * @return CreateBillingAgreementRequestType
	 */
	public function setCreateBillingAgreementRequest($_CreateBillingAgreementRequest)
	{
		return ($this->CreateBillingAgreementRequest = $_CreateBillingAgreementRequest);
	}
	/**
	 * Get CreateBillingAgreementRequest
	 * @return PayPalTypeCreateBillingAgreementRequestType
	 */
	public function getCreateBillingAgreementRequest()
	{
		return $this->CreateBillingAgreementRequest;
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