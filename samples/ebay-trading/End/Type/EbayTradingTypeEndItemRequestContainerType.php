<?php
/**
 * Class file for EbayTradingTypeEndItemRequestContainerType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeEndItemRequestContainerType
 * Documentation : A container to specify a single eBay item to end.
 * @date 04/07/2012
 */
class EbayTradingTypeEndItemRequestContainerType extends EbayTradingWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the item listing to be ended. An ItemID must be specified in the EndItems request, except that in the case of a Half.com item, either an ItemID or a SellerInventoryID must be specified.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The EndingReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the seller's reason for ending the listing early. This field is required if the seller is ending the item early and the item did not successfully sell. Also applicable to Half.com.
	 * @var EbayTradingTypeEndReasonCodeType
	 */
	public $EndingReason;
	/**
	 * The MessageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The MessageID element is used to correlate a given EndItemRequestContainer in the request with the corresponding EndItemResponseContainer in the response. If you pass a message ID in a request container, the same value is returned in the CorrelationID field in the matching response container. You can use this for tracking that a response is returned for every request and to match particular responses to particular requests. If you do not pass MessageID in the request, CorrelationID is not returned.
	 * @var string
	 */
	public $MessageID;
	/**
	 * The SellerInventoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier that the seller specified in Item.SellerInventoryID when they listed an item on Half.com. In the case of a Half.com item, either an ItemID or a SellerInventoryID must be specified in the call request. <br><br> The SellerInventoryID field is applicable only to Half.com. <br><br> For a Half.com item, you can either specify an ItemID or SellerInventoryID. An error occurs if you try to specify a conflicting ItemID and SellerInventoryID (for the same item).
	 * @var string
	 */
	public $SellerInventoryID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeEndReasonCodeType EndingReason
	 * @param string MessageID
	 * @param string SellerInventoryID
	 * @param DOMDocument any
	 * @return EbayTradingTypeEndItemRequestContainerType
	 */
	public function __construct($_ItemID = null,$_EndingReason = null,$_MessageID = null,$_SellerInventoryID = null,$_any = null)
	{
		parent::__construct(array('ItemID'=>$_ItemID,'EndingReason'=>$_EndingReason,'MessageID'=>$_MessageID,'SellerInventoryID'=>$_SellerInventoryID,'any'=>$_any));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set EndingReason
	 * @param EndReasonCodeType EndingReason
	 * @return EndReasonCodeType
	 */
	public function setEndingReason($_EndingReason)
	{
		return ($this->EndingReason = EbayTradingTypeEndReasonCodeType::valueIsValid($_EndingReason)?$_EndingReason:null);
	}
	/**
	 * Get EndingReason
	 * @return EbayTradingTypeEndReasonCodeType
	 */
	public function getEndingReason()
	{
		return $this->EndingReason;
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
	 * Set SellerInventoryID
	 * @param string SellerInventoryID
	 * @return string
	 */
	public function setSellerInventoryID($_SellerInventoryID)
	{
		return ($this->SellerInventoryID = $_SellerInventoryID);
	}
	/**
	 * Get SellerInventoryID
	 * @return string
	 */
	public function getSellerInventoryID()
	{
		return $this->SellerInventoryID;
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