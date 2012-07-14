<?php
/**
 * Class file for PayPalTypeExecuteCheckoutOperationsResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeExecuteCheckoutOperationsResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeExecuteCheckoutOperationsResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The SetDataResponse
	 * Meta informations :
	 * 	- minOccurs : 1
	 * @var PayPalTypeSetDataResponseType
	 */
	public $SetDataResponse;
	/**
	 * The AuthorizationResponse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeAuthorizationResponseType
	 */
	public $AuthorizationResponse;
	/**
	 * Constructor
	 * @param PayPalTypeSetDataResponseType SetDataResponse
	 * @param PayPalTypeAuthorizationResponseType AuthorizationResponse
	 * @return PayPalTypeExecuteCheckoutOperationsResponseDetailsType
	 */
	public function __construct($_SetDataResponse,$_AuthorizationResponse = null)
	{
		parent::__construct(array('SetDataResponse'=>$_SetDataResponse,'AuthorizationResponse'=>$_AuthorizationResponse));
	}
	/**
	 * Set SetDataResponse
	 * @param SetDataResponseType SetDataResponse
	 * @return SetDataResponseType
	 */
	public function setSetDataResponse($_SetDataResponse)
	{
		return ($this->SetDataResponse = $_SetDataResponse);
	}
	/**
	 * Get SetDataResponse
	 * @return PayPalTypeSetDataResponseType
	 */
	public function getSetDataResponse()
	{
		return $this->SetDataResponse;
	}
	/**
	 * Set AuthorizationResponse
	 * @param AuthorizationResponseType AuthorizationResponse
	 * @return AuthorizationResponseType
	 */
	public function setAuthorizationResponse($_AuthorizationResponse)
	{
		return ($this->AuthorizationResponse = $_AuthorizationResponse);
	}
	/**
	 * Get AuthorizationResponse
	 * @return PayPalTypeAuthorizationResponseType
	 */
	public function getAuthorizationResponse()
	{
		return $this->AuthorizationResponse;
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