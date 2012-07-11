<?php
/**
 * Class file for EbayTradingTypeMyMessagesResponseDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyMessagesResponseDetailsType
 * Documentation : Details relating to the response to a message.
 * @date 04/07/2012
 */
class EbayTradingTypeMyMessagesResponseDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ResponseEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether a message can be responded to. To respond to a message, use the URL in ResponseURL. You may need to log into the eBay Web site to complete the response.
	 * @var boolean
	 */
	public $ResponseEnabled;
	/**
	 * The ResponseURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A URL that the recipient must visit to respond to a message. Responding may require logging into the eBay Web site.
	 * @var anyURI
	 */
	public $ResponseURL;
	/**
	 * The UserResponseDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time the user responded to a message
	 * @var dateTime
	 */
	public $UserResponseDate;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean ResponseEnabled
	 * @param anyURI ResponseURL
	 * @param dateTime UserResponseDate
	 * @param DOMDocument any
	 * @return EbayTradingTypeMyMessagesResponseDetailsType
	 */
	public function __construct($_ResponseEnabled = null,$_ResponseURL = null,$_UserResponseDate = null,$_any = null)
	{
		parent::__construct(array('ResponseEnabled'=>$_ResponseEnabled,'ResponseURL'=>$_ResponseURL,'UserResponseDate'=>$_UserResponseDate,'any'=>$_any));
	}
	/**
	 * Set ResponseEnabled
	 * @param boolean ResponseEnabled
	 * @return boolean
	 */
	public function setResponseEnabled($_ResponseEnabled)
	{
		return ($this->ResponseEnabled = $_ResponseEnabled);
	}
	/**
	 * Get ResponseEnabled
	 * @return boolean
	 */
	public function getResponseEnabled()
	{
		return $this->ResponseEnabled;
	}
	/**
	 * Set ResponseURL
	 * @param anyURI ResponseURL
	 * @return anyURI
	 */
	public function setResponseURL($_ResponseURL)
	{
		return ($this->ResponseURL = $_ResponseURL);
	}
	/**
	 * Get ResponseURL
	 * @return anyURI
	 */
	public function getResponseURL()
	{
		return $this->ResponseURL;
	}
	/**
	 * Set UserResponseDate
	 * @param dateTime UserResponseDate
	 * @return dateTime
	 */
	public function setUserResponseDate($_UserResponseDate)
	{
		return ($this->UserResponseDate = $_UserResponseDate);
	}
	/**
	 * Get UserResponseDate
	 * @return dateTime
	 */
	public function getUserResponseDate()
	{
		return $this->UserResponseDate;
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