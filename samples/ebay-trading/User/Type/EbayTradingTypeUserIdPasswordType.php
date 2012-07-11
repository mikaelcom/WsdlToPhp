<?php
/**
 * Class file for EbayTradingTypeUserIdPasswordType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUserIdPasswordType
 * Documentation : 
 * @date 04/07/2012
 */
class EbayTradingTypeUserIdPasswordType extends EbayTradingWsdlClass
{
	/**
	 * The AppId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The application ID that is unique to each application you (or your company) has registered with the eBay Developers Program. If you are executing a call in the Sandbox, this is the "AppId" value that eBay issued to you when you received your Sandbox keys. If you are executing a call in Production, this is the "AppId" value that eBay issued to you when you received your Production keys.
	 * @var string
	 */
	public $AppId;
	/**
	 * The DevId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique developer ID that the eBay Developers Program issued to you (or your company). If you are executing a call in the Sandbox, this is the "DevId" value that eBay issued to you when you received your Sandbox keys. Typically, you receive your Sandbox keys when you register as a new developer. If you are executing a call in Production, this is the "DevId" value that eBay issued to you when you received your Production keys. Typically, you receive your Production keys when you certify an application.
	 * @var string
	 */
	public $DevId;
	/**
	 * The AuthCert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Authentication certificate that authenticates the application when making API calls. If you are executing a call in the Sandbox, this is the "CertId" value that eBay issued to you when you received your Sandbox keys. If you are executing a call in Production, this is the "CertId" value that eBay issued to you when you received your Production keys. This is unrelated to auth tokens.
	 * @var string
	 */
	public $AuthCert;
	/**
	 * The Username
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : eBay user ID (i.e., eBay.com Web site login name) for the user the application is retrieving a token for. This is typically the application's end-user (not the developer).
	 * @var string
	 */
	public $Username;
	/**
	 * The Password
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Password for the user specified in Username.
	 * @var string
	 */
	public $Password;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string AppId
	 * @param string DevId
	 * @param string AuthCert
	 * @param string Username
	 * @param string Password
	 * @param DOMDocument any
	 * @return EbayTradingTypeUserIdPasswordType
	 */
	public function __construct($_AppId = null,$_DevId = null,$_AuthCert = null,$_Username = null,$_Password = null,$_any = null)
	{
		parent::__construct(array('AppId'=>$_AppId,'DevId'=>$_DevId,'AuthCert'=>$_AuthCert,'Username'=>$_Username,'Password'=>$_Password,'any'=>$_any));
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
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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