<?php
/**
 * Class file for PaylineWebPaymentTypeDoWebPaymentResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoWebPaymentResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoWebPaymentResponse extends PaylineWebPaymentWsdlClass
{
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * The token
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $token;
	/**
	 * The redirectURL
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $redirectURL;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param string token
	 * @param string redirectURL
	 * @return PaylineWebPaymentTypeDoWebPaymentResponse
	 */
	public function __construct($_result = null,$_token = null,$_redirectURL = null)
	{
		parent::__construct(array('result'=>$_result,'token'=>$_token,'redirectURL'=>$_redirectURL));
	}
	/**
	 * Set result
	 * @param result result
	 * @return result
	 */
	public function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * Get result
	 * @return PaylineWebPaymentTyperesult
	 */
	public function getResult()
	{
		return $this->result;
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
	 * Set redirectURL
	 * @param string redirectURL
	 * @return string
	 */
	public function setRedirectURL($_redirectURL)
	{
		return ($this->redirectURL = $_redirectURL);
	}
	/**
	 * Get redirectURL
	 * @return string
	 */
	public function getRedirectURL()
	{
		return $this->redirectURL;
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