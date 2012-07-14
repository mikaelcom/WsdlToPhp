<?php
/**
 * Class file for PayPalTypeUserIdPasswordType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeUserIdPasswordType
 * @date 14/07/2012
 */
class PayPalTypeUserIdPasswordType extends PayPalWsdlClass
{
	/**
	 * The AppId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $AppId;
	/**
	 * The DevId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $DevId;
	/**
	 * The AuthCert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $AuthCert;
	/**
	 * The Username
	 * Meta informations :
	 * 	- documentation : The username is the identifier for an account.
	 * @var string
	 */
	public $Username;
	/**
	 * The Password
	 * Meta informations :
	 * 	- documentation : Password contains the current password associated with the username.
	 * @var string
	 */
	public $Password;
	/**
	 * The Signature
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Signature for Three Token authentication.
	 * @var string
	 */
	public $Signature;
	/**
	 * The Subject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field identifies an account (e.g., payment) on whose behalf the operation is being performed. For instance one account holder may delegate the abililty to perform certain operations to another account holder. This delegation is done through a separate mechanism. If the base username has not been authorized by the subject the request will be rejected.
	 * @var string
	 */
	public $Subject;
	/**
	 * The AuthToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Authentication Session Token for authentication and authorization.
	 * @var string
	 */
	public $AuthToken;
	/**
	 * Constructor
	 * @param string AppId
	 * @param string DevId
	 * @param string AuthCert
	 * @param string Username
	 * @param string Password
	 * @param string Signature
	 * @param string Subject
	 * @param string AuthToken
	 * @return PayPalTypeUserIdPasswordType
	 */
	public function __construct($_AppId = null,$_DevId = null,$_AuthCert = null,$_Username = null,$_Password = null,$_Signature = null,$_Subject = null,$_AuthToken = null)
	{
		parent::__construct(array('AppId'=>$_AppId,'DevId'=>$_DevId,'AuthCert'=>$_AuthCert,'Username'=>$_Username,'Password'=>$_Password,'Signature'=>$_Signature,'Subject'=>$_Subject,'AuthToken'=>$_AuthToken));
	}
	/**
	 * Set AppId
	 * @param string AppId
	 * @return string
	 */
	public function setAppId($_AppId)
	{
		return ($this->AppId = $_AppId);
	}
	/**
	 * Get AppId
	 * @return string
	 */
	public function getAppId()
	{
		return $this->AppId;
	}
	/**
	 * Set DevId
	 * @param string DevId
	 * @return string
	 */
	public function setDevId($_DevId)
	{
		return ($this->DevId = $_DevId);
	}
	/**
	 * Get DevId
	 * @return string
	 */
	public function getDevId()
	{
		return $this->DevId;
	}
	/**
	 * Set AuthCert
	 * @param string AuthCert
	 * @return string
	 */
	public function setAuthCert($_AuthCert)
	{
		return ($this->AuthCert = $_AuthCert);
	}
	/**
	 * Get AuthCert
	 * @return string
	 */
	public function getAuthCert()
	{
		return $this->AuthCert;
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
	 * Set Subject
	 * @param string Subject
	 * @return string
	 */
	public function setSubject($_Subject)
	{
		return ($this->Subject = $_Subject);
	}
	/**
	 * Get Subject
	 * @return string
	 */
	public function getSubject()
	{
		return $this->Subject;
	}
	/**
	 * Set AuthToken
	 * @param string AuthToken
	 * @return string
	 */
	public function setAuthToken($_AuthToken)
	{
		return ($this->AuthToken = $_AuthToken);
	}
	/**
	 * Get AuthToken
	 * @return string
	 */
	public function getAuthToken()
	{
		return $this->AuthToken;
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