<?php
/**
 * Class file for PayPalTypeBillAgreementUpdateReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBillAgreementUpdateReq
 * @date 14/07/2012
 */
class PayPalTypeBillAgreementUpdateReq extends PayPalWsdlClass
{
	/**
	 * The BAUpdateRequest
	 * @var PayPalTypeBAUpdateRequestType
	 */
	public $BAUpdateRequest;
	/**
	 * Constructor
	 * @param PayPalTypeBAUpdateRequestType BAUpdateRequest
	 * @return PayPalTypeBillAgreementUpdateReq
	 */
	public function __construct($_BAUpdateRequest = null)
	{
		parent::__construct(array('BAUpdateRequest'=>$_BAUpdateRequest));
	}
	/**
	 * Set BAUpdateRequest
	 * @param BAUpdateRequestType BAUpdateRequest
	 * @return BAUpdateRequestType
	 */
	public function setBAUpdateRequest($_BAUpdateRequest)
	{
		return ($this->BAUpdateRequest = $_BAUpdateRequest);
	}
	/**
	 * Get BAUpdateRequest
	 * @return PayPalTypeBAUpdateRequestType
	 */
	public function getBAUpdateRequest()
	{
		return $this->BAUpdateRequest;
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