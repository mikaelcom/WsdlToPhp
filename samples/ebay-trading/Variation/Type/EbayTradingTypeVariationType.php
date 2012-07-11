<?php
/**
 * Class file for EbayTradingTypeVariationType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVariationType
 * Documentation : This type defines the details about one specific variation.
 * @date 04/07/2012
 */
class EbayTradingTypeVariationType extends EbayTradingWsdlClass
{
	/**
	 * The SKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A SKU (stock keeping unit) is an identifier defined by a seller. It is only intended for the seller's use (not for buyers). Many sellers assign a SKU to an item of a specific type, size, and color. For the seller's convenience, eBay preserves the SKU on the variation, and also on corresponding order line items. This enables you (as a seller) use the SKU to reconcile your eBay inventory with your own inventory system instead of using the variation specifics. It is a good idea to track how many items of each type, size, and color are selling so that you can restock your shelves or update the variation quantity on eBay according to customer demand. (eBay does not use the SKU.)<br> <br> If specified, all SKU values must be unique within the Variations node. That is, no two variations within the same listing can have the same SKU. <br> <br> If you set Item.InventoryTrackingMethod to true, the variation SKU values are required and they must be unique across all the seller's active listings.<br> <br> <b>For GetItem and related calls:</b> Only returned if the seller specified a SKU for the variation.
	 * @var EbayTradingTypeSKUType
	 */
	public $SKU;
	/**
	 * The StartPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The fixed price of all items identified by this variation. For example, a "Blue, Large" variation price could be USD 10.00, and a "Black, Medium" variation price could be USD 5.00.<br> <br> Each variation requires its own price, and the prices can be different for each variation. This enables sellers to provide discounts on certain variations without affecting the price of others. Required (and always returned) for listings with variations.<br> <br> You can revise a variation's price at any time (even if it has purchases). When you modify a variation during revise or relist, you need to include both its StartPrice and Quantity.
	 * @var EbayTradingTypeAmountType
	 */
	public $StartPrice;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>For AddFixedPriceItem and related calls:</b> On input, this should be the number of items available for sale that are associated with this variation. If you set Quantity to zero when you create a new listing (or relist), the variation is dropped from the listing.<br> <br> <b>For GetItem and related calls:</b> On output, this is the total number of items associated with the variation (including the quantity sold). To calculate the quantity available for sale, subtract QuantitySold from this value.<br> <br> <b>For ReviseFixedPriceItem:</b> You can revise a variation's quantity at any time, even if it has purchases. However, at least one variation must remain with a non-zero quantity in order for the listing to remain active. When you modify a variation during revise or relist, you need to include both its StartPrice and Quantity. If you revise the Quantity value for a variation after items have already sold, specify the quantity available for sale. (eBay will automatically add the quantity sold to the value you specify.) If you set the quantity to 0 and the variation has no purchases, the variation may be dropped from the listing.<br> <br> <b>For GetSellerTransactions:</b> See Item.Quantity instead.<br> <br> See the Trading API Guide for more details about setting and modifying a variation's quantity.
	 * @var int
	 */
	public $Quantity;
	/**
	 * The VariationSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of name/value pairs that uniquely identify the variation within the listing. All variations must specify the same set of names, and each variation must provide a unique combination of values for those names. For example, if the items vary by color and size, then every variation must specify Color and Size as names, and no two variations can specify the same combination of color and size values.<br> <br> When you revise a listing that includes variations, you can't add or change names or values in variation specifics (because the set of variation specifics serves as a unique identifier). However, you can delete or replace individual variations as needed to match your current inventory. Use the Variation.Delete field to delete a variation that has no sales (order line items). If the variation has sales, then set the Quantity to 0.<br> <br> <b>For GetSellerEvents</b> To keep the GetSellerEvents response smaller, variation specifics are not returned if the variation has a SKU. If the variation has no SKU, then variation specifics are returned instead. Optionally, you can pass IncludeVariationSpecifics as true in the request to force variation specifics to be returned, even when the SKU is returned.
	 * @var EbayTradingTypeNameValueListArrayType
	 */
	public $VariationSpecifics;
	/**
	 * The UnitsAvailable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Quantity of items in the seller's inventory for this Selling Manager product. This is not the same as the quantity available in a listed item. Required when a Selling Manager product defines variations.
	 * @var int
	 */
	public $UnitsAvailable;
	/**
	 * The UnitCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Cost of the Selling Manager product that matches this variation.
	 * @var EbayTradingTypeAmountType
	 */
	public $UnitCost;
	/**
	 * The SellingStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the variation's quantity sold. Always returned when variations are present.
	 * @var EbayTradingTypeSellingStatusType
	 */
	public $SellingStatus;
	/**
	 * The VariationTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The title of the variation. This is a concatenation of the listing title plus the values (no names) from the VariationSpecifics. For example, if the Title is "Polo Shirt" and the variation is for a medium pink shirt, the variation title could be "Polo Shirt[Pink,M]. PayPal may also use this value to identify item variations(for buyers and sellers).
	 * @var string
	 */
	public $VariationTitle;
	/**
	 * The VariationViewItemURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL for the variation on eBay. This links to eBay's View Item page, with the page configured to show details of the specified variation. The syntax of this URL is similar to Item.ViewItemURL (not optimized for natural search).
	 * @var anyURI
	 */
	public $VariationViewItemURL;
	/**
	 * The Delete
	 * Meta informations :
	 * 	- default : false
	 * 	- minOccurs : 0
	 * 	- documentation : Deletes the specified variation from the listing. In general, a listing with Item Variations must have at least one variation with a non-zero Quantity in order to remain active. Additional deletion rules depend on whether you are revising or relisting.<br> <br> <b>For ReviseFixedPriceItem only</b>: If a variation has any purchases (i.e., an order line item was created and QuantitySold is greather than 0), you can't delete the variation, but you can set its quantity to zero. If a variation has no purchases, you can delete it.<br> <br> To replace a varation, you can delete it and add the new or corrected one. However, you can't specify the same SKU twice in the same request (because the intent would be ambiguous). So, either use a new SKU for the newer variation, or use the call twice (once to delete the variation, and once to add the new variation with the same SKU).<br> <br> <b>For RelistFixedPriceItem only</b>: You can delete any variation, as long as the relisted listing includes at least 1 variation with a non-zero quantity. (That is, when you relist, you could delete all but one variation, or you could delete all existing variations and add a new one.)
	 * @var boolean
	 */
	public $Delete;
	/**
	 * The SellingManagerProductInventoryStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for statistics about the Selling Manager product that is associated with this variation.
	 * @var EbayTradingTypeSellingManagerProductInventoryStatusType
	 */
	public $SellingManagerProductInventoryStatus;
	/**
	 * The WatchCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of watches placed on this variation by eBay users.
	 * @var long
	 */
	public $WatchCount;
	/**
	 * The PrivateNotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A note a user makes on an item with variations in My eBay. <br> <br> For eBay.com, only GetMyeBaySelling (not GetItem) returns this field, and only if you pass IncludeNotes in the request. Only visible to the user who created the note.<br> <br> Not supported as input in ReviseFixedPriceItem. Use SetUserNotes instead.<br> <br> In SoldList, notes for variations are only returned at the Item level, not the variation level.
	 * @var string
	 */
	public $PrivateNotes;
	/**
	 * The DiscountPriceInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container provides information for an item that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP applies to only fixed price, BIN items. STP is available on the US, UK, and German (DE) sites, while MAP is available only on the US site. <br><br> Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a "sepcial account flag" (SAF) that allows them to apply Discount Pricing to both MSKU and Non-MSKU items. Sellers should contact their account manager or Customer Service to see if they qualify for the Strikethrough Pricing program. <br><br> As a seller listing Discount Price items, you are required to maintain records of your discount pricing in the event you are called upon to substantiate your item pricing. The following link details your legal obligations when you utilize Discount Pricing to sell items: <a href= "http://pages.ebay.com/help/sell/strike-through.html">Strikethrough Pricing Requirements </a> <br><br> <b>For AddFixedPriceItem, RelistFixedPriceItem, ReviseFixedPriceItem, and VerifyAddFixedPriceItem:</b> If you are listing variations (MSKU items), use Variation.DiscountPriceInfo for each variation.
	 * @var EbayTradingTypeDiscountPriceInfoType
	 */
	public $DiscountPriceInfo;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSKUType SKU
	 * @param EbayTradingTypeAmountType StartPrice
	 * @param int Quantity
	 * @param EbayTradingTypeNameValueListArrayType VariationSpecifics
	 * @param int UnitsAvailable
	 * @param EbayTradingTypeAmountType UnitCost
	 * @param EbayTradingTypeSellingStatusType SellingStatus
	 * @param string VariationTitle
	 * @param anyURI VariationViewItemURL
	 * @param boolean Delete
	 * @param EbayTradingTypeSellingManagerProductInventoryStatusType SellingManagerProductInventoryStatus
	 * @param long WatchCount
	 * @param string PrivateNotes
	 * @param EbayTradingTypeDiscountPriceInfoType DiscountPriceInfo
	 * @param DOMDocument any
	 * @return EbayTradingTypeVariationType
	 */
	public function __construct($_SKU = null,$_StartPrice = null,$_Quantity = null,$_VariationSpecifics = null,$_UnitsAvailable = null,$_UnitCost = null,$_SellingStatus = null,$_VariationTitle = null,$_VariationViewItemURL = null,$_Delete = false,$_SellingManagerProductInventoryStatus = null,$_WatchCount = null,$_PrivateNotes = null,$_DiscountPriceInfo = null,$_any = null)
	{
		parent::__construct(array('SKU'=>$_SKU,'StartPrice'=>$_StartPrice,'Quantity'=>$_Quantity,'VariationSpecifics'=>$_VariationSpecifics,'UnitsAvailable'=>$_UnitsAvailable,'UnitCost'=>$_UnitCost,'SellingStatus'=>$_SellingStatus,'VariationTitle'=>$_VariationTitle,'VariationViewItemURL'=>$_VariationViewItemURL,'Delete'=>$_Delete,'SellingManagerProductInventoryStatus'=>$_SellingManagerProductInventoryStatus,'WatchCount'=>$_WatchCount,'PrivateNotes'=>$_PrivateNotes,'DiscountPriceInfo'=>$_DiscountPriceInfo,'any'=>$_any));
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
	 * Set VariationSpecifics
	 * @param NameValueListArrayType VariationSpecifics
	 * @return NameValueListArrayType
	 */
	public function setVariationSpecifics($_VariationSpecifics)
	{
		return ($this->VariationSpecifics = $_VariationSpecifics);
	}
	/**
	 * Get VariationSpecifics
	 * @return EbayTradingTypeNameValueListArrayType
	 */
	public function getVariationSpecifics()
	{
		return $this->VariationSpecifics;
	}
	/**
	 * Set UnitsAvailable
	 * @param int UnitsAvailable
	 * @return int
	 */
	public function setUnitsAvailable($_UnitsAvailable)
	{
		return ($this->UnitsAvailable = $_UnitsAvailable);
	}
	/**
	 * Get UnitsAvailable
	 * @return int
	 */
	public function getUnitsAvailable()
	{
		return $this->UnitsAvailable;
	}
	/**
	 * Set UnitCost
	 * @param AmountType UnitCost
	 * @return AmountType
	 */
	public function setUnitCost($_UnitCost)
	{
		return ($this->UnitCost = $_UnitCost);
	}
	/**
	 * Get UnitCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getUnitCost()
	{
		return $this->UnitCost;
	}
	/**
	 * Set SellingStatus
	 * @param SellingStatusType SellingStatus
	 * @return SellingStatusType
	 */
	public function setSellingStatus($_SellingStatus)
	{
		return ($this->SellingStatus = $_SellingStatus);
	}
	/**
	 * Get SellingStatus
	 * @return EbayTradingTypeSellingStatusType
	 */
	public function getSellingStatus()
	{
		return $this->SellingStatus;
	}
	/**
	 * Set VariationTitle
	 * @param string VariationTitle
	 * @return string
	 */
	public function setVariationTitle($_VariationTitle)
	{
		return ($this->VariationTitle = $_VariationTitle);
	}
	/**
	 * Get VariationTitle
	 * @return string
	 */
	public function getVariationTitle()
	{
		return $this->VariationTitle;
	}
	/**
	 * Set VariationViewItemURL
	 * @param anyURI VariationViewItemURL
	 * @return anyURI
	 */
	public function setVariationViewItemURL($_VariationViewItemURL)
	{
		return ($this->VariationViewItemURL = $_VariationViewItemURL);
	}
	/**
	 * Get VariationViewItemURL
	 * @return anyURI
	 */
	public function getVariationViewItemURL()
	{
		return $this->VariationViewItemURL;
	}
	/**
	 * Set Delete
	 * @param boolean Delete
	 * @return boolean
	 */
	public function setDelete($_Delete)
	{
		return ($this->Delete = $_Delete);
	}
	/**
	 * Get Delete
	 * @return boolean
	 */
	public function getDelete()
	{
		return $this->Delete;
	}
	/**
	 * Set SellingManagerProductInventoryStatus
	 * @param SellingManagerProductInventoryStatusType SellingManagerProductInventoryStatus
	 * @return SellingManagerProductInventoryStatusType
	 */
	public function setSellingManagerProductInventoryStatus($_SellingManagerProductInventoryStatus)
	{
		return ($this->SellingManagerProductInventoryStatus = $_SellingManagerProductInventoryStatus);
	}
	/**
	 * Get SellingManagerProductInventoryStatus
	 * @return EbayTradingTypeSellingManagerProductInventoryStatusType
	 */
	public function getSellingManagerProductInventoryStatus()
	{
		return $this->SellingManagerProductInventoryStatus;
	}
	/**
	 * Set WatchCount
	 * @param long WatchCount
	 * @return long
	 */
	public function setWatchCount($_WatchCount)
	{
		return ($this->WatchCount = $_WatchCount);
	}
	/**
	 * Get WatchCount
	 * @return long
	 */
	public function getWatchCount()
	{
		return $this->WatchCount;
	}
	/**
	 * Set PrivateNotes
	 * @param string PrivateNotes
	 * @return string
	 */
	public function setPrivateNotes($_PrivateNotes)
	{
		return ($this->PrivateNotes = $_PrivateNotes);
	}
	/**
	 * Get PrivateNotes
	 * @return string
	 */
	public function getPrivateNotes()
	{
		return $this->PrivateNotes;
	}
	/**
	 * Set DiscountPriceInfo
	 * @param DiscountPriceInfoType DiscountPriceInfo
	 * @return DiscountPriceInfoType
	 */
	public function setDiscountPriceInfo($_DiscountPriceInfo)
	{
		return ($this->DiscountPriceInfo = $_DiscountPriceInfo);
	}
	/**
	 * Get DiscountPriceInfo
	 * @return EbayTradingTypeDiscountPriceInfoType
	 */
	public function getDiscountPriceInfo()
	{
		return $this->DiscountPriceInfo;
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