<?php
/**
 * Class file for EbayTradingTypeMyMessagesForwardDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyMessagesForwardDetailsType
 * Documentation : Details relating to the forwarding of a message.
 * @date 04/07/2012
 */
class EbayTradingTypeMyMessagesForwardDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The UserForwardDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time a user forwarded a message.
	 * @var dateTime
	 */
	public $UserForwardDate;
	/**
	 * The ForwardMessageEncoding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Encoding used to forward a message.
	 * @var string
	 */
	public $ForwardMessageEncoding;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param dateTime UserForwardDate
	 * @param string ForwardMessageEncoding
	 * @param DOMDocument any
	 * @return EbayTradingTypeMyMessagesForwardDetailsType
	 */
	public function __construct($_UserForwardDate = null,$_ForwardMessageEncoding = null,$_any = null)
	{
		parent::__construct(array('UserForwardDate'=>$_UserForwardDate,'ForwardMessageEncoding'=>$_ForwardMessageEncoding,'any'=>$_any));
	}
	/**
	 * Set UserForwardDate
	 * @param dateTime UserForwardDate
	 * @return dateTime
	 */
	public function setUserForwardDate($_UserForwardDate)
	{
		return ($this->UserForwardDate = $_UserForwardDate);
	}
	/**
	 * Get UserForwardDate
	 * @return dateTime
	 */
	public function getUserForwardDate()
	{
		return $this->UserForwardDate;
	}
	/**
	 * Set ForwardMessageEncoding
	 * @param string ForwardMessageEncoding
	 * @return string
	 */
	public function setForwardMessageEncoding($_ForwardMessageEncoding)
	{
		return ($this->ForwardMessageEncoding = $_ForwardMessageEncoding);
	}
	/**
	 * Get ForwardMessageEncoding
	 * @return string
	 */
	public function getForwardMessageEncoding()
	{
		return $this->ForwardMessageEncoding;
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