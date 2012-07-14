<?php
/**
 * Class file for PayPalTypeExecuteCheckoutOperationsRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeExecuteCheckoutOperationsRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeExecuteCheckoutOperationsRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The Token
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : On your first invocation of ExecuteCheckoutOperationsRequest, the value of this token is returned by ExecuteCheckoutOperationsResponse. Optional Include this element and its value only if you want to modify an existing checkout session with another invocation of ExecuteCheckoutOperationsRequest; for example, if you want the customer to edit his shipping address on PayPal. Character length and limitations: 20 single-byte characters
	 * @var PayPalTypeExpressCheckoutTokenType
	 */
	public $Token;
	/**
	 * The SetDataRequest
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : All the Data required to initiate the checkout session is passed in this element.
	 * @var PayPalTypeSetDataRequestType
	 */
	public $SetDataRequest;
	/**
	 * The AuthorizationRequest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : If auto authorization is required, this should be passed in with IsRequested set to yes.
	 * @var PayPalTypeAuthorizationRequestType
	 */
	public $AuthorizationRequest;
	/**
	 * Constructor
	 * @param PayPalTypeExpressCheckoutTokenType Token
	 * @param PayPalTypeSetDataRequestType SetDataRequest
	 * @param PayPalTypeAuthorizationRequestType AuthorizationRequest
	 * @return PayPalTypeExecuteCheckoutOperationsRequestDetailsType
	 */
	public function __construct($_Token = null,$_SetDataRequest,$_AuthorizationRequest = null)
	{
		parent::__construct(array('Token'=>$_Token,'SetDataRequest'=>$_SetDataRequest,'AuthorizationRequest'=>$_AuthorizationRequest));
	}
	/**
	 * Set Token
	 * @param ExpressCheckoutTokenType Token
	 * @return ExpressCheckoutTokenType
	 */
	public function setToken($_Token)
	{
		return ($this->Token = PayPalTypeExpressCheckoutTokenType::valueIsValid($_Token)?$_Token:null);
	}
	/**
	 * Get Token
	 * @return PayPalTypeExpressCheckoutTokenType
	 */
	public function getToken()
	{
		return $this->Token;
	}
	/**
	 * Set SetDataRequest
	 * @param SetDataRequestType SetDataRequest
	 * @return SetDataRequestType
	 */
	public function setSetDataRequest($_SetDataRequest)
	{
		return ($this->SetDataRequest = $_SetDataRequest);
	}
	/**
	 * Get SetDataRequest
	 * @return PayPalTypeSetDataRequestType
	 */
	public function getSetDataRequest()
	{
		return $this->SetDataRequest;
	}
	/**
	 * Set AuthorizationRequest
	 * @param AuthorizationRequestType AuthorizationRequest
	 * @return AuthorizationRequestType
	 */
	public function setAuthorizationRequest($_AuthorizationRequest)
	{
		return ($this->AuthorizationRequest = $_AuthorizationRequest);
	}
	/**
	 * Get AuthorizationRequest
	 * @return PayPalTypeAuthorizationRequestType
	 */
	public function getAuthorizationRequest()
	{
		return $this->AuthorizationRequest;
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