<?php
/**
 * Class file for EbayTradingTypeAddItemRequestContainerType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddItemRequestContainerType
 * Documentation : Similar to AddItemRequestType, the AddItemRequestContainerType defines a single item to be listed. The AddItems request will support up to five (5) request containers.
 * @date 04/07/2012
 */
class EbayTradingTypeAddItemRequestContainerType extends EbayTradingWsdlClass
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container holding all values that define a new listing. One <b>Item</b> container is required for each <b>AddItemRequestContainer</b>.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The MessageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The MessageID element is used to correlate a given AddItemRequestContainer in the request with the corresponding AddItemResponseContainer in the response. When you pass a message ID in a request container, the same value is returned in the CorrelationID field in the matching response container. You can use this for tracking that a response is returned for every request and to match responses to specific requests.
	 * @var string
	 */
	public $MessageID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemType Item
	 * @param string MessageID
	 * @param DOMDocument any
	 * @return EbayTradingTypeAddItemRequestContainerType
	 */
	public function __construct($_Item = null,$_MessageID = null,$_any = null)
	{
		parent::__construct(array('Item'=>$_Item,'MessageID'=>$_MessageID,'any'=>$_any));
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
	 * Set MessageID
	 * @param string MessageID
	 * @return string
	 */
	public function setMessageID($_MessageID)
	{
		return ($this->MessageID = $_MessageID);
	}
	/**
	 * Get MessageID
	 * @return string
	 */
	public function getMessageID()
	{
		return $this->MessageID;
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