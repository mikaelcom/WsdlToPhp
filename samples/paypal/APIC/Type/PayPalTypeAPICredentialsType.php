<?php
/**
 * Class file for PayPalTypeAPICredentialsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAPICredentialsType
 * Documentation : APICredentialsType
 * @date 14/07/2012
 */
class PayPalTypeAPICredentialsType extends PayPalWsdlClass
{
	/**
	 * The Username
	 * Meta informations :
	 * 	- documentation : Merchant’s PayPal API usernameCharacter length and limitations: 128 alphanumeric characters
	 * @var string
	 */
	public $Username;
	/**
	 * The Password
	 * Meta informations :
	 * 	- documentation : Merchant’s PayPal API passwordCharacter length and limitations: 40 alphanumeric characters
	 * @var string
	 */
	public $Password;
	/**
	 * The Signature
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Merchant’s PayPal API signature, if one exists. Character length and limitations: 256 alphanumeric characters
	 * @var string
	 */
	public $Signature;
	/**
	 * The Certificate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Merchant’s PayPal API certificate in PEM format, if one exists The certificate consists of two parts: the private key (2,048 bytes) and the certificate proper (4,000 bytes). Character length and limitations: 6,048 alphanumeric characters
	 * @var string
	 */
	public $Certificate;
	/**
	 * The Type
	 * Meta informations :
	 * 	- documentation : Merchant’s PayPal API authentication mechanism. Auth-None: no authentication mechanism on file Cert: API certificate Sign: API signature Character length and limitations: 9 alphanumeric characters
	 * @var PayPalTypeAPIAuthenticationType
	 */
	public $Type;
	/**
	 * Constructor
	 * @param string Username
	 * @param string Password
	 * @param string Signature
	 * @param string Certificate
	 * @param PayPalTypeAPIAuthenticationType Type
	 * @return PayPalTypeAPICredentialsType
	 */
	public function __construct($_Username = null,$_Password = null,$_Signature = null,$_Certificate = null,$_Type = null)
	{
		parent::__construct(array('Username'=>$_Username,'Password'=>$_Password,'Signature'=>$_Signature,'Certificate'=>$_Certificate,'Type'=>$_Type));
	}
	/**
	 * Set Username
	 * @param string Username
	 * @return string
	 */
	public function setUsername($_Username)
	{
		return ($this->Username = $_Username);
	}
	/**
	 * Get Username
	 * @return string
	 */
	public function getUsername()
	{
		return $this->Username;
	}
	/**
	 * Set Password
	 * @param string Password
	 * @return string
	 */
	public function setPassword($_Password)
	{
		return ($this->Password = $_Password);
	}
	/**
	 * Get Password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->Password;
	}
	/**
	 * Set Signature
	 * @param string Signature
	 * @return string
	 */
	public function setSignature($_Signature)
	{
		return ($this->Signature = $_Signature);
	}
	/**
	 * Get Signature
	 * @return string
	 */
	public function getSignature()
	{
		return $this->Signature;
	}
	/**
	 * Set Certificate
	 * @param string Certificate
	 * @return string
	 */
	public function setCertificate($_Certificate)
	{
		return ($this->Certificate = $_Certificate);
	}
	/**
	 * Get Certificate
	 * @return string
	 */
	public function getCertificate()
	{
		return $this->Certificate;
	}
	/**
	 * Set Type
	 * @param APIAuthenticationType Type
	 * @return APIAuthenticationType
	 */
	public function setType($_Type)
	{
		return ($this->Type = PayPalTypeAPIAuthenticationType::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return PayPalTypeAPIAuthenticationType
	 */
	public function getType()
	{
		return $this->Type;
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