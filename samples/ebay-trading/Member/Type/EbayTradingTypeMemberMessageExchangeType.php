<?php
/**
 * Class file for EbayTradingTypeMemberMessageExchangeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMemberMessageExchangeType
 * Documentation : Container for message metadata.
 * @date 04/07/2012
 */
class EbayTradingTypeMemberMessageExchangeType extends EbayTradingWsdlClass
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The item about which the question was asked. Returned if the parent container is returned.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The Question
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains all the information about the question being asked. Returned if the parent container is returned.
	 * @var EbayTradingTypeMemberMessageType
	 */
	public $Question;
	/**
	 * The Response
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An answer to the question. Returned if the parent container is returned. <br/><br/> For GetAdFormatLeads, returned if the seller responded to the lead's question. Contains the body of the seller's response message.
	 * @var string
	 */
	public $Response;
	/**
	 * The MessageStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The status of the message. Returned if the parent container is returned.
	 * @var EbayTradingTypeMessageStatusTypeCodeType
	 */
	public $MessageStatus;
	/**
	 * The CreationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date the message was created. In the request, used to filter response. Returned if the parent container is returned.
	 * @var dateTime
	 */
	public $CreationDate;
	/**
	 * The LastModifiedDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date the message was last modified. Returned if the parent container is returned.
	 * @var dateTime
	 */
	public $LastModifiedDate;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemType Item
	 * @param EbayTradingTypeMemberMessageType Question
	 * @param string Response
	 * @param EbayTradingTypeMessageStatusTypeCodeType MessageStatus
	 * @param dateTime CreationDate
	 * @param dateTime LastModifiedDate
	 * @param DOMDocument any
	 * @return EbayTradingTypeMemberMessageExchangeType
	 */
	public function __construct($_Item = null,$_Question = null,$_Response = null,$_MessageStatus = null,$_CreationDate = null,$_LastModifiedDate = null,$_any = null)
	{
		parent::__construct(array('Item'=>$_Item,'Question'=>$_Question,'Response'=>$_Response,'MessageStatus'=>$_MessageStatus,'CreationDate'=>$_CreationDate,'LastModifiedDate'=>$_LastModifiedDate,'any'=>$_any));
	}
	/**
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return EbayTradingTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
	}
	/**
	 * Set Question
	 * @param MemberMessageType Question
	 * @return MemberMessageType
	 */
	public function setQuestion($_Question)
	{
		return ($this->Question = $_Question);
	}
	/**
	 * Get Question
	 * @return EbayTradingTypeMemberMessageType
	 */
	public function getQuestion()
	{
		return $this->Question;
	}
	/**
	 * Set Response
	 * @param string Response
	 * @return string
	 */
	public function setResponse($_Response)
	{
		return ($this->Response = $_Response);
	}
	/**
	 * Get Response
	 * @return string
	 */
	public function getResponse()
	{
		return $this->Response;
	}
	/**
	 * Set MessageStatus
	 * @param MessageStatusTypeCodeType MessageStatus
	 * @return MessageStatusTypeCodeType
	 */
	public function setMessageStatus($_MessageStatus)
	{
		return ($this->MessageStatus = EbayTradingTypeMessageStatusTypeCodeType::valueIsValid($_MessageStatus)?$_MessageStatus:null);
	}
	/**
	 * Get MessageStatus
	 * @return EbayTradingTypeMessageStatusTypeCodeType
	 */
	public function getMessageStatus()
	{
		return $this->MessageStatus;
	}
	/**
	 * Set CreationDate
	 * @param dateTime CreationDate
	 * @return dateTime
	 */
	public function setCreationDate($_CreationDate)
	{
		return ($this->CreationDate = $_CreationDate);
	}
	/**
	 * Get CreationDate
	 * @return dateTime
	 */
	public function getCreationDate()
	{
		return $this->CreationDate;
	}
	/**
	 * Set LastModifiedDate
	 * @param dateTime LastModifiedDate
	 * @return dateTime
	 */
	public function setLastModifiedDate($_LastModifiedDate)
	{
		return ($this->LastModifiedDate = $_LastModifiedDate);
	}
	/**
	 * Get LastModifiedDate
	 * @return dateTime
	 */
	public function getLastModifiedDate()
	{
		return $this->LastModifiedDate;
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