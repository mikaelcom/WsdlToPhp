<?php
/**
 * Class file for EbayTradingTypeInventoryStatusType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeInventoryStatusType
 * Documentation : Lightweight type for updating basic inventory status details. Primarily intended for bulk use cases.
 * @date 04/07/2012
 */
class EbayTradingTypeInventoryStatusType extends EbayTradingWsdlClass
{
	/**
	 * The SKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique SKU of the item being revised. A SKU (stock keeping unit) is an identifier defined by a seller. SKU can only be used to revise an item if you listed the item by using AddFixedPriceItem or RelistFixedPriceItem, and:<br> 1) You set Item.InventoryTrackingMethod to SKU at the time the item was listed; or <br> 2) You are modifying a multi-variation listing, and the SKU identifies one of the variations. (In this case, if InventoryTrackingMethod was set to ItemID, then you also need to specify ItemID in the request.)<br> (These criteria are necessary to uniquely identify the listing or variation by a SKU.)<br> <br> In the ReviseInventoryStatus request, if the listing has InventoryTrackingMethod set to SKU, then either ItemID or SKU is required. If both are passed in and they don't refer to the same listing, eBay ignores SKU and considers only the ItemID.<br> <br> If the listing has variations and InventoryTrackingMethod is set to ItemID, then ItemID and SKU are both required.<br> <br> In the response, SKU may be returned as an empty element if it was not defined on the listing.
	 * @var EbayTradingTypeSKUType
	 */
	public $SKU;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ItemID of a listing being changed. <br> <br> In the ReviseInventoryStatus request, either ItemID or SKU is required. If both are passed in and the SKU does not match, eBay ignores SKU and considers only the ItemID.<br> <br> Please note that the same ItemID can be returned multiple times in the same response if you revise several variations from the same multi-variation listing.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The StartPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the revised fixed price of the listing (or of a variation within a multi-variation listing). If you raise the price of a listing, the recent sales score of the listing is reset. (Best Match search ranking is based on buyer activity, and one of the factors affecting search ranking for fixed-price listings is the recent sales score.)<br> <br> Raising a listing's price may also affect the insertion fee (and therefore the overall listing fee).<br> <br> ReviseInventoryStatus requires either StartPrice or Quantity (or both) for each InventoryStatus node in the request.
	 * @var EbayTradingTypeAmountType
	 */
	public $StartPrice;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the latest quantity of the listing (or of a variation within a multi-variation listing).<br> <br> <b>For the ReviseInventoryStatus request:</b> Specify the entire quantity that is currently available for sale. (Typically, you only pass this in when you need to update the quantity.)<br> <br> ReviseInventoryStatus requires either StartPrice or Quantity (or you can specify both) for each InventoryStatus node in the request.<br> <br> <b>For the ReviseInventoryStatus response:</b> This returns a total of the quantity available for sale plus the quantity already sold. For example, suppose the listing originally had Quantity=10, and then 8 sold. Now you restock your inventory, and you pass Quantity=10 in the ReviseInventoryStatus request. In this case, ReviseInventoryStatus returns Quantity=18 (10 available + 8 sold). To determine the quantity available, use GetItem or GetSellerList, and subtract SellingStatus.QuantitySold from Quantity. Or see QuantityAvailable in GetMyeBaySelling.<br> <br> It is a good idea to maintain an adequate quantity available for fixed-price GTC listings to prevent the search rankings from dropping. Best Match search ranking is based on buyer activity, and one of the factors affecting search ranking for fixed-price listings is the recent sales score. Fixed-price items that are selling the fastest are given a relative lift in search results. Recent Sales history is tracked with a moving window to ensure it reflects the most recent activity. Due to he moving window, it is advantageous to maintain item availability (Quantity-QuantitySold) for a GTC listing.
	 * @var int
	 */
	public $Quantity;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSKUType SKU
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeAmountType StartPrice
	 * @param int Quantity
	 * @param DOMDocument any
	 * @return EbayTradingTypeInventoryStatusType
	 */
	public function __construct($_SKU = null,$_ItemID = null,$_StartPrice = null,$_Quantity = null,$_any = null)
	{
		parent::__construct(array('SKU'=>$_SKU,'ItemID'=>$_ItemID,'StartPrice'=>$_StartPrice,'Quantity'=>$_Quantity,'any'=>$_any));
	}
	/**
	 * Set SKU
	 * @param SKUType SKU
	 * @return SKUType
	 */
	public function setSKU($_SKU)
	{
		return ($this->SKU = EbayTradingTypeSKUType::valueIsValid($_SKU)?$_SKU:null);
	}
	/**
	 * Get SKU
	 * @return EbayTradingTypeSKUType
	 */
	public function getSKU()
	{
		return $this->SKU;
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
	 * Set StartPrice
	 * @param AmountType StartPrice
	 * @return AmountType
	 */
	public function setStartPrice($_StartPrice)
	{
		return ($this->StartPrice = $_StartPrice);
	}
	/**
	 * Get StartPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getStartPrice()
	{
		return $this->StartPrice;
	}
	/**
	 * Set Quantity
	 * @param int Quantity
	 * @return int
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->Quantity;
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