<?php
/**
 * Class file for PayPalTypeSetDataResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetDataResponseType
 * @date 14/07/2012
 */
class PayPalTypeSetDataResponseType extends PayPalWsdlClass
{
	/**
	 * The Token
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : If Checkout session was initialized successfully, the corresponding token is returned in this element.
	 * @var PayPalTypeExpressCheckoutTokenType
	 */
	public $Token;
	/**
	 * The SetDataError
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var PayPalTypeErrorType
	 */
	public $SetDataError;
	/**
	 * Constructor
	 * @param PayPalTypeExpressCheckoutTokenType Token
	 * @param PayPalTypeErrorType SetDataError
	 * @return PayPalTypeSetDataResponseType
	 */
	public function __construct($_Token = null,$_SetDataError = null)
	{
		parent::__construct(array('Token'=>$_Token,'SetDataError'=>$_SetDataError));
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
	 * Set SetDataError
	 * @param ErrorType SetDataError
	 * @return ErrorType
	 */
	public function setSetDataError($_SetDataError)
	{
		return ($this->SetDataError = $_SetDataError);
	}
	/**
	 * Get SetDataError
	 * @return PayPalTypeErrorType
	 */
	public function getSetDataError()
	{
		return $this->SetDataError;
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