<?php
/**
 * Class file for PayPalTypeExternalRememberMeOptOutReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeExternalRememberMeOptOutReq
 * @date 14/07/2012
 */
class PayPalTypeExternalRememberMeOptOutReq extends PayPalWsdlClass
{
	/**
	 * The ExternalRememberMeOptOutRequest
	 * @var PayPalTypeExternalRememberMeOptOutRequestType
	 */
	public $ExternalRememberMeOptOutRequest;
	/**
	 * Constructor
	 * @param PayPalTypeExternalRememberMeOptOutRequestType ExternalRememberMeOptOutRequest
	 * @return PayPalTypeExternalRememberMeOptOutReq
	 */
	public function __construct($_ExternalRememberMeOptOutRequest = null)
	{
		parent::__construct(array('ExternalRememberMeOptOutRequest'=>$_ExternalRememberMeOptOutRequest));
	}
	/**
	 * Set ExternalRememberMeOptOutRequest
	 * @param ExternalRememberMeOptOutRequestType ExternalRememberMeOptOutRequest
	 * @return ExternalRememberMeOptOutRequestType
	 */
	public function setExternalRememberMeOptOutRequest($_ExternalRememberMeOptOutRequest)
	{
		return ($this->ExternalRememberMeOptOutRequest = $_ExternalRememberMeOptOutRequest);
	}
	/**
	 * Get ExternalRememberMeOptOutRequest
	 * @return PayPalTypeExternalRememberMeOptOutRequestType
	 */
	public function getExternalRememberMeOptOutRequest()
	{
		return $this->ExternalRememberMeOptOutRequest;
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