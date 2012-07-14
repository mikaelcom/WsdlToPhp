<?php
/**
 * Class file for PayPalTypeSetAuthFlowParamRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetAuthFlowParamRequestType
 * @date 14/07/2012
 */
class PayPalTypeSetAuthFlowParamRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The SetAuthFlowParamRequestDetails
	 * @var PayPalTypeSetAuthFlowParamRequestDetailsType
	 */
	public $SetAuthFlowParamRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeSetAuthFlowParamRequestDetailsType SetAuthFlowParamRequestDetails
	 * @return PayPalTypeSetAuthFlowParamRequestType
	 */
	public function __construct($_SetAuthFlowParamRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('SetAuthFlowParamRequestDetails'=>$_SetAuthFlowParamRequestDetails));
	}
	/**
	 * Set SetAuthFlowParamRequestDetails
	 * @param SetAuthFlowParamRequestDetailsType SetAuthFlowParamRequestDetails
	 * @return SetAuthFlowParamRequestDetailsType
	 */
	public function setSetAuthFlowParamRequestDetails($_SetAuthFlowParamRequestDetails)
	{
		return ($this->SetAuthFlowParamRequestDetails = $_SetAuthFlowParamRequestDetails);
	}
	/**
	 * Get SetAuthFlowParamRequestDetails
	 * @return PayPalTypeSetAuthFlowParamRequestDetailsType
	 */
	public function getSetAuthFlowParamRequestDetails()
	{
		return $this->SetAuthFlowParamRequestDetails;
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