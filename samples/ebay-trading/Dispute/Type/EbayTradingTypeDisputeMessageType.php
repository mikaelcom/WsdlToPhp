<?php
/**
 * Class file for EbayTradingTypeDisputeMessageType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeMessageType
 * Documentation : Contains a message posted to a dispute. The message can be posted by the buyer, the seller, or an eBay representative.
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeMessageType extends EbayTradingWsdlClass
{
	/**
	 * The MessageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An ID that uniquely identifies the message.
	 * @var int
	 */
	public $MessageID;
	/**
	 * The MessageSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The party who posted the message: the buyer, the seller, or an eBay representative.
	 * @var EbayTradingTypeDisputeMessageSourceCodeType
	 */
	public $MessageSource;
	/**
	 * The MessageCreationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time the message was created, in GMT.
	 * @var dateTime
	 */
	public $MessageCreationTime;
	/**
	 * The MessageText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The text of the message.
	 * @var string
	 */
	public $MessageText;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int MessageID
	 * @param EbayTradingTypeDisputeMessageSourceCodeType MessageSource
	 * @param dateTime MessageCreationTime
	 * @param string MessageText
	 * @param DOMDocument any
	 * @return EbayTradingTypeDisputeMessageType
	 */
	public function __construct($_MessageID = null,$_MessageSource = null,$_MessageCreationTime = null,$_MessageText = null,$_any = null)
	{
		parent::__construct(array('MessageID'=>$_MessageID,'MessageSource'=>$_MessageSource,'MessageCreationTime'=>$_MessageCreationTime,'MessageText'=>$_MessageText,'any'=>$_any));
	}
	/**
	 * Set MessageID
	 * @param int MessageID
	 * @return int
	 */
	public function setMessageID($_MessageID)
	{
		return ($this->MessageID = $_MessageID);
	}
	/**
	 * Get MessageID
	 * @return int
	 */
	public function getMessageID()
	{
		return $this->MessageID;
	}
	/**
	 * Set MessageSource
	 * @param DisputeMessageSourceCodeType MessageSource
	 * @return DisputeMessageSourceCodeType
	 */
	public function setMessageSource($_MessageSource)
	{
		return ($this->MessageSource = EbayTradingTypeDisputeMessageSourceCodeType::valueIsValid($_MessageSource)?$_MessageSource:null);
	}
	/**
	 * Get MessageSource
	 * @return EbayTradingTypeDisputeMessageSourceCodeType
	 */
	public function getMessageSource()
	{
		return $this->MessageSource;
	}
	/**
	 * Set MessageCreationTime
	 * @param dateTime MessageCreationTime
	 * @return dateTime
	 */
	public function setMessageCreationTime($_MessageCreationTime)
	{
		return ($this->MessageCreationTime = $_MessageCreationTime);
	}
	/**
	 * Get MessageCreationTime
	 * @return dateTime
	 */
	public function getMessageCreationTime()
	{
		return $this->MessageCreationTime;
	}
	/**
	 * Set MessageText
	 * @param string MessageText
	 * @return string
	 */
	public function setMessageText($_MessageText)
	{
		return ($this->MessageText = $_MessageText);
	}
	/**
	 * Get MessageText
	 * @return string
	 */
	public function getMessageText()
	{
		return $this->MessageText;
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