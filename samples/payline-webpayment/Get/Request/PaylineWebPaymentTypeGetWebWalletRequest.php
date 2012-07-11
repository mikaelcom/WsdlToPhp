<?php
/**
 * Class file for PaylineWebPaymentTypeGetWebWalletRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeGetWebWalletRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeGetWebWalletRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The token
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $token;
	/**
	 * Constructor
	 * @param string token
	 * @return PaylineWebPaymentTypeGetWebWalletRequest
	 */
	public function __construct($_token = null)
	{
		parent::__construct(array('token'=>$_token));
	}
	/**
	 * Set token
	 * @param string token
	 * @return string
	 */
	public function setToken($_token)
	{
		return ($this->token = $_token);
	}
	/**
	 * Get token
	 * @return string
	 */
	public function getToken()
	{
		return $this->token;
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