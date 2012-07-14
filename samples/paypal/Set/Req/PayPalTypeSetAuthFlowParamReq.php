<?php
/**
 * Class file for PayPalTypeSetAuthFlowParamReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetAuthFlowParamReq
 * @date 14/07/2012
 */
class PayPalTypeSetAuthFlowParamReq extends PayPalWsdlClass
{
	/**
	 * The SetAuthFlowParamRequest
	 * @var PayPalTypeSetAuthFlowParamRequestType
	 */
	public $SetAuthFlowParamRequest;
	/**
	 * Constructor
	 * @param PayPalTypeSetAuthFlowParamRequestType SetAuthFlowParamRequest
	 * @return PayPalTypeSetAuthFlowParamReq
	 */
	public function __construct($_SetAuthFlowParamRequest = null)
	{
		parent::__construct(array('SetAuthFlowParamRequest'=>$_SetAuthFlowParamRequest));
	}
	/**
	 * Set SetAuthFlowParamRequest
	 * @param SetAuthFlowParamRequestType SetAuthFlowParamRequest
	 * @return SetAuthFlowParamRequestType
	 */
	public function setSetAuthFlowParamRequest($_SetAuthFlowParamRequest)
	{
		return ($this->SetAuthFlowParamRequest = $_SetAuthFlowParamRequest);
	}
	/**
	 * Get SetAuthFlowParamRequest
	 * @return PayPalTypeSetAuthFlowParamRequestType
	 */
	public function getSetAuthFlowParamRequest()
	{
		return $this->SetAuthFlowParamRequest;
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