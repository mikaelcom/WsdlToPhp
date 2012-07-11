<?php
/**
 * Class file for EbayTradingTypeXMLRequesterCredentialsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeXMLRequesterCredentialsType
 * Documentation : 
 * @date 04/07/2012
 */
class EbayTradingTypeXMLRequesterCredentialsType extends EbayTradingWsdlClass
{
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
	 * The eBayAuthToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Authentication token representing the user who is making the request. The user's token must be retrieved from eBay. To determine a user's authentication token, see the Authentication and Authorization information in the eBay Web Services guide. For calls that list or retrieve item or transaction data, the user usually needs to be the seller of the item in question or, in some cases, the buyer. Similarly, calls that retrieve user or account data may be restricted to the user whose data is being requested. The documentation for each call includes information about such restrictions.
	 * @var string
	 */
	public $eBayAuthToken;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Username
	 * @param string Password
	 * @param string eBayAuthToken
	 * @param DOMDocument any
	 * @return EbayTradingTypeXMLRequesterCredentialsType
	 */
	public function __construct($_Username = null,$_Password = null,$_eBayAuthToken = null,$_any = null)
	{
		parent::__construct(array('Username'=>$_Username,'Password'=>$_Password,'eBayAuthToken'=>$_eBayAuthToken,'any'=>$_any));
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