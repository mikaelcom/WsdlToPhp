<?php
/**
 * Class file for EbayTradingTypeBidGroupItemType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBidGroupItemType
 * Documentation : Contains information about items that are part of a bid group.
 * @date 04/07/2012
 */
class EbayTradingTypeBidGroupItemType extends EbayTradingWsdlClass
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains a list of the items in a bid group.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The BidGroupItemStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the status of the items in the bid group.
	 * @var EbayTradingTypeBidGroupItemStatusCodeType
	 */
	public $BidGroupItemStatus;
	/**
	 * The MaxBidAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the maximum bid amount for the item in the bid group.
	 * @var EbayTradingTypeAmountType
	 */
	public $MaxBidAmount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemType Item
	 * @param EbayTradingTypeBidGroupItemStatusCodeType BidGroupItemStatus
	 * @param EbayTradingTypeAmountType MaxBidAmount
	 * @param DOMDocument any
	 * @return EbayTradingTypeBidGroupItemType
	 */
	public function __construct($_Item = null,$_BidGroupItemStatus = null,$_MaxBidAmount = null,$_any = null)
	{
		parent::__construct(array('Item'=>$_Item,'BidGroupItemStatus'=>$_BidGroupItemStatus,'MaxBidAmount'=>$_MaxBidAmount,'any'=>$_any));
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
	 * Set BidGroupItemStatus
	 * @param BidGroupItemStatusCodeType BidGroupItemStatus
	 * @return BidGroupItemStatusCodeType
	 */
	public function setBidGroupItemStatus($_BidGroupItemStatus)
	{
		return ($this->BidGroupItemStatus = EbayTradingTypeBidGroupItemStatusCodeType::valueIsValid($_BidGroupItemStatus)?$_BidGroupItemStatus:null);
	}
	/**
	 * Get BidGroupItemStatus
	 * @return EbayTradingTypeBidGroupItemStatusCodeType
	 */
	public function getBidGroupItemStatus()
	{
		return $this->BidGroupItemStatus;
	}
	/**
	 * Set MaxBidAmount
	 * @param AmountType MaxBidAmount
	 * @return AmountType
	 */
	public function setMaxBidAmount($_MaxBidAmount)
	{
		return ($this->MaxBidAmount = $_MaxBidAmount);
	}
	/**
	 * Get MaxBidAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getMaxBidAmount()
	{
		return $this->MaxBidAmount;
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