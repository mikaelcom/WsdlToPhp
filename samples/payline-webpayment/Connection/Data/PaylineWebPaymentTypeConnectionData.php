<?php
/**
 * Class file for PaylineWebPaymentTypeConnectionData
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeConnectionData
 * Documentation : This element contains the merchant connection parameters
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeConnectionData extends PaylineWebPaymentWsdlClass
{
	/**
	 * The merchantId
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $merchantId;
	/**
	 * The userId
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $userId;
	/**
	 * The password
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $password;
	/**
	 * The secretQuestion
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $secretQuestion;
	/**
	 * The secretAnswer
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $secretAnswer;
	/**
	 * Constructor
	 * @param string merchantId
	 * @param string userId
	 * @param string password
	 * @param string secretQuestion
	 * @param string secretAnswer
	 * @return PaylineWebPaymentTypeConnectionData
	 */
	public function __construct($_merchantId = null,$_userId = null,$_password = null,$_secretQuestion = null,$_secretAnswer = null)
	{
		parent::__construct(array('merchantId'=>$_merchantId,'userId'=>$_userId,'password'=>$_password,'secretQuestion'=>$_secretQuestion,'secretAnswer'=>$_secretAnswer));
	}
	/**
	 * Set merchantId
	 * @param string merchantId
	 * @return string
	 */
	public function setMerchantId($_merchantId)
	{
		return ($this->merchantId = $_merchantId);
	}
	/**
	 * Get merchantId
	 * @return string
	 */
	public function getMerchantId()
	{
		return $this->merchantId;
	}
	/**
	 * Set userId
	 * @param string userId
	 * @return string
	 */
	public function setUserId($_userId)
	{
		return ($this->userId = $_userId);
	}
	/**
	 * Get userId
	 * @return string
	 */
	public function getUserId()
	{
		return $this->userId;
	}
	/**
	 * Set password
	 * @param string password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set secretQuestion
	 * @param string secretQuestion
	 * @return string
	 */
	public function setSecretQuestion($_secretQuestion)
	{
		return ($this->secretQuestion = $_secretQuestion);
	}
	/**
	 * Get secretQuestion
	 * @return string
	 */
	public function getSecretQuestion()
	{
		return $this->secretQuestion;
	}
	/**
	 * Set secretAnswer
	 * @param string secretAnswer
	 * @return string
	 */
	public function setSecretAnswer($_secretAnswer)
	{
		return ($this->secretAnswer = $_secretAnswer);
	}
	/**
	 * Get secretAnswer
	 * @return string
	 */
	public function getSecretAnswer()
	{
		return $this->secretAnswer;
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