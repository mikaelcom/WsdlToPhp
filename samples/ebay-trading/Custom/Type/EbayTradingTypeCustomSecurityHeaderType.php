<?php
/**
 * Class file for EbayTradingTypeCustomSecurityHeaderType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCustomSecurityHeaderType
 * Documentation : Security header used for SOAP API calls.
 * @date 04/07/2012
 */
class EbayTradingTypeCustomSecurityHeaderType extends EbayTradingWsdlClass
{
	/**
	 * The eBayAuthToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Authentication token representing the user who is making the request. The user's token must be retrieved from eBay. To determine a user's authentication token, see the Authentication and Authorization information in the eBay Web Services guide. For calls that list or retrieve item or transaction data, the user usually needs to be the seller of the item in question or, in some cases, the buyer. Similarly, calls that retrieve user or account data may be restricted to the user whose data is being requested. The documentation for each call includes information about such restrictions.
	 * @var string
	 */
	public $eBayAuthToken;
	/**
	 * The HardExpirationWarning
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Expiration date of the user's authentication token. Only returned within the 7-day period prior to a token's expiration. To ensure that user authentication tokens are secure and to help avoid a user's token being compromised, tokens have a limited life span. A token is only valid for a period of time (set by eBay). After this amount of time has passed, the token expires and must be replaced with a new token.
	 * @var string
	 */
	public $HardExpirationWarning;
	/**
	 * The Credentials
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Authentication information for the user on whose behalf the application is making the request, and authorization information for the application making the request. Only registered eBay users are allowed to make API calls. To verify that a user is registered, your application normally needs to pass a user-specific value called an "authentication token" in the request. This is equivalent to signing in on the eBay Web site. As API calls do not pass session information, you need to pass the user's authentication token every time you invoke a call on their behalf. All calls require an authentication token, except the calls you use to retrieve a token in the first place. For such calls, you use the eBay member's username and password instead.
	 * @var EbayTradingTypeUserIdPasswordType
	 */
	public $Credentials;
	/**
	 * The NotificationSignature
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A Base64-encoded MD5 hash that allows the recepient of a Platform Notification to verify this is a valid Platform Notification sent by eBay.
	 * @var string
	 */
	public $NotificationSignature;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string eBayAuthToken
	 * @param string HardExpirationWarning
	 * @param EbayTradingTypeUserIdPasswordType Credentials
	 * @param string NotificationSignature
	 * @param DOMDocument any
	 * @return EbayTradingTypeCustomSecurityHeaderType
	 */
	public function __construct($_eBayAuthToken = null,$_HardExpirationWarning = null,$_Credentials = null,$_NotificationSignature = null,$_any = null)
	{
		parent::__construct(array('eBayAuthToken'=>$_eBayAuthToken,'HardExpirationWarning'=>$_HardExpirationWarning,'Credentials'=>$_Credentials,'NotificationSignature'=>$_NotificationSignature,'any'=>$_any));
	}
	/**
	 * Set eBayAuthToken
	 * @param string eBayAuthToken
	 * @return string
	 */
	public function setEBayAuthToken($_eBayAuthToken)
	{
		return ($this->eBayAuthToken = $_eBayAuthToken);
	}
	/**
	 * Get eBayAuthToken
	 * @return string
	 */
	public function getEBayAuthToken()
	{
		return $this->eBayAuthToken;
	}
	/**
	 * Set HardExpirationWarning
	 * @param string HardExpirationWarning
	 * @return string
	 */
	public function setHardExpirationWarning($_HardExpirationWarning)
	{
		return ($this->HardExpirationWarning = $_HardExpirationWarning);
	}
	/**
	 * Get HardExpirationWarning
	 * @return string
	 */
	public function getHardExpirationWarning()
	{
		return $this->HardExpirationWarning;
	}
	/**
	 * Set Credentials
	 * @param UserIdPasswordType Credentials
	 * @return UserIdPasswordType
	 */
	public function setCredentials($_Credentials)
	{
		return ($this->Credentials = $_Credentials);
	}
	/**
	 * Get Credentials
	 * @return EbayTradingTypeUserIdPasswordType
	 */
	public function getCredentials()
	{
		return $this->Credentials;
	}
	/**
	 * Set NotificationSignature
	 * @param string NotificationSignature
	 * @return string
	 */
	public function setNotificationSignature($_NotificationSignature)
	{
		return ($this->NotificationSignature = $_NotificationSignature);
	}
	/**
	 * Get NotificationSignature
	 * @return string
	 */
	public function getNotificationSignature()
	{
		return $this->NotificationSignature;
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