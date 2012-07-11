<?php
/**
 * Class file for PaylineWebPaymentTypeVerifyAuthenticationResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeVerifyAuthenticationResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeVerifyAuthenticationResponse extends PaylineWebPaymentWsdlClass
{
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * The authentication3DSecure
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeAuthentication3DSecure
	 */
	public $authentication3DSecure;
	/**
	 * The mpiResult
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $mpiResult;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param PaylineWebPaymentTypeAuthentication3DSecure authentication3DSecure
	 * @param string mpiResult
	 * @return PaylineWebPaymentTypeVerifyAuthenticationResponse
	 */
	public function __construct($_result = null,$_authentication3DSecure = null,$_mpiResult = null)
	{
		parent::__construct(array('result'=>$_result,'authentication3DSecure'=>$_authentication3DSecure,'mpiResult'=>$_mpiResult));
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
	 * Set authentication3DSecure
	 * @param authentication3DSecure authentication3DSecure
	 * @return authentication3DSecure
	 */
	public function setAuthentication3DSecure($_authentication3DSecure)
	{
		return ($this->authentication3DSecure = $_authentication3DSecure);
	}
	/**
	 * Get authentication3DSecure
	 * @return PaylineWebPaymentTypeauthentication3DSecure
	 */
	public function getAuthentication3DSecure()
	{
		return $this->authentication3DSecure;
	}
	/**
	 * Set mpiResult
	 * @param string mpiResult
	 * @return string
	 */
	public function setMpiResult($_mpiResult)
	{
		return ($this->mpiResult = $_mpiResult);
	}
	/**
	 * Get mpiResult
	 * @return string
	 */
	public function getMpiResult()
	{
		return $this->mpiResult;
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