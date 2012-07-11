<?php
/**
 * Class file for EbayTradingTypeGetItemRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetItemRequestType
 * Documentation : Returns item data such as title, description, price information, seller information, and so on, for the specified <b>ItemID</b>. &nbsp;<b>Also for Half.com</b>.
 * @date 04/07/2012
 */
class EbayTradingTypeGetItemRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the <b>ItemID</b> that uniquely identifies the item listing for which to retrieve the data. <br><br> <b>ItemID</b> is a required input in most cases. <b>SKU</b> can be used instead in certain cases (see the description of SKU). If both <b>ItemID</b> and <b>SKU</b> are specified for items where the inventory tracking method is <b>ItemID</b>, <b>ItemID</b> takes precedence.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The IncludeWatchCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if the caller wants to include watch count for that item in the response. You must be the seller of the item to retrieve the watch count.
	 * @var boolean
	 */
	public $IncludeWatchCount;
	/**
	 * The IncludeCrossPromotion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether or not to include cross-promotion information for the item in the call response. <br><br> With a request version of 485 or higher, the default is false (do not include cross-promotion details). Set to true to retrieve cross-promotion information for the item. Cross-promotion information is returned in <b>Item.CrossPromotion.PromotedItem.PromotionDetails</b>. A promoted item will now contain multiple <b>PromotionDetails</b> containers. <br><br> With a request version lower than 485, the default is true (include cross-promotions). Set the value to false if you do not want to retrieve cross-promotion information. Cross-promotion information, <b>PromotedPrice</b> and <b>PromotedPriceType</b>, are returned in <b>Item.CrossPromotion.PromotedItem</b>. If a promoted item has multiple <b>PromotedPriceType</b> and <b>PromotedPrice</b> value pairs, only the last pair is returned.
	 * @var boolean
	 */
	public $IncludeCrossPromotion;
	/**
	 * The IncludeItemSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the response returns the <b>ItemSpecifics</b> node (if the listing has custom Item Specifics).<br> <br> Item Specifics are well-known aspects of items in a given category. For example, items in a washer and dryer category might have an aspect like Type=Top-Loading; whereas items in a jewelry category might have an aspect like Gemstone=Amber.<br> <br> (This does not cause the response to include ID-based attributes. To also retrieve ID-based attributes, pass <b>DetailLevel</b> in the request with the value <b>ItemReturnAttributes</b> or <b>ReturnAll</b>.)
	 * @var boolean
	 */
	public $IncludeItemSpecifics;
	/**
	 * The IncludeTaxTable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, an associated tax table is returned in the response. If no tax table is associated with the item, then no tax table is returned, even if <b>IncludeTaxTable</b> is set to true.
	 * @var boolean
	 */
	public $IncludeTaxTable;
	/**
	 * The SKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Retrieves an item that was listed by the user identified in AuthToken and that is being tracked by this SKU.<br> <br> A SKU (stock keeping unit) is an identifier defined by a seller. Some sellers use SKUs to track complex flows of products and information on the client side. eBay preserves the SKU on the item, enabling you to obtain it before and after an order line item is created. (SKU is recommended as an alternative to ApplicationData.)<br> <br> In <b>GetItem</b>, <b>SKU</b> can only be used to retrieve one of your own items, where you listed the item by using <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b>, and you set <b>Item.InventoryTrackingMethod</b> to <b>SKU</b> at the time the item was listed. (These criteria are necessary to uniquely identify the listing by a SKU.)<br> <br> Either <b>ItemID</b> or <b>SKU</b> is required in the request. If both are passed, they must refer to the same item, and that item must have <b>InventoryTrackingMethod</b> set to <b>/SKU<b>.
	 * @var EbayTradingTypeSKUType
	 */
	public $SKU;
	/**
	 * The VariationSKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Variation-level SKU that uniquely identifes a Variation within the listing identified by <b>ItemID</b>. Only applicable when the seller listed the item with Variation-level SKU (<b>Variation.SKU</b>) values. Retrieves all the usual <b>Item</b> fields, but limits the <b>Variations</b> content to the specified Variation. If not specified, the response includes all Variations.
	 * @var EbayTradingTypeSKUType
	 */
	public $VariationSKU;
	/**
	 * The VariationSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name-value pairs that identify one or more Variations within the listing identified by <b>ItemID</b>. Only applicable when the seller listed the item with Variations. Retrieves all the usual <b>Item</b> fields, but limits the Variations content to the specified Variation(s). If the specified pairs do not match any Variation, eBay returns all Variations.<br> <br> To retrieve only one variation, specify the full set of name/value pairs that match all the name-value pairs of one Variation. <br> <br> To retrieve multiple variations (using a wildcard), specify one or more name/value pairs that partially match the desired variations. For example, if the listing contains Variations for shirts in different colors and sizes, specify Color as Red (and no other name/value pairs) to retrieve all the red shirts in all sizes (but no other colors).
	 * @var EbayTradingTypeNameValueListArrayType
	 */
	public $VariationSpecifics;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier for an order line item (transaction). An order line item is created when a buyer commits to purchasing an item. <br><br> Since you can change active multiple-quantity fixed-price listings even after one of the items has been purchased, the <b>TransactionID</b> is associated with a snapshot of the item data at the time of the purchase. <br><br> After one item in a multi-quantity listing has been sold, sellers can not change the values in the Title, Primary Category, Secondary Category, Listing Duration, and Listing Type fields. However, all other fields are editable. <br><br> Specifying a <b>TransactionID</b> in the <b>GetItem</b> request allows you to retrieve a snapshot of the listing as it was when the order line item was created.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The IncludeItemCompatibilityList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is used to specify whether or not to retrieve Parts Compatiblity information. If true, any compatible applications associated with the item will be returned in the response (<b class="con"> Item.ItemCompatibilityList</b>). If no compatible applications have been specified for the item, no item compatibilities will be returned. <br><br> If false or not specified, the response will return a compatibility count (<b class="con">ItemCompatibilityCoun</b>t) when parts compatibilities have been specified for the item. <br><br> Parts Compatibility is supported in limited Parts & Accessories categories for the eBay US Motors (site ID 100) and eBay Germany (site ID 77) sites only.
	 * @var boolean
	 */
	public $IncludeItemCompatibilityList;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param boolean IncludeWatchCount
	 * @param boolean IncludeCrossPromotion
	 * @param boolean IncludeItemSpecifics
	 * @param boolean IncludeTaxTable
	 * @param EbayTradingTypeSKUType SKU
	 * @param EbayTradingTypeSKUType VariationSKU
	 * @param EbayTradingTypeNameValueListArrayType VariationSpecifics
	 * @param string TransactionID
	 * @param boolean IncludeItemCompatibilityList
	 * @return EbayTradingTypeGetItemRequestType
	 */
	public function __construct($_ItemID = null,$_IncludeWatchCount = null,$_IncludeCrossPromotion = null,$_IncludeItemSpecifics = null,$_IncludeTaxTable = null,$_SKU = null,$_VariationSKU = null,$_VariationSpecifics = null,$_TransactionID = null,$_IncludeItemCompatibilityList = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'IncludeWatchCount'=>$_IncludeWatchCount,'IncludeCrossPromotion'=>$_IncludeCrossPromotion,'IncludeItemSpecifics'=>$_IncludeItemSpecifics,'IncludeTaxTable'=>$_IncludeTaxTable,'SKU'=>$_SKU,'VariationSKU'=>$_VariationSKU,'VariationSpecifics'=>$_VariationSpecifics,'TransactionID'=>$_TransactionID,'IncludeItemCompatibilityList'=>$_IncludeItemCompatibilityList));
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
	 * Set IncludeWatchCount
	 * @param boolean IncludeWatchCount
	 * @return boolean
	 */
	public function setIncludeWatchCount($_IncludeWatchCount)
	{
		return ($this->IncludeWatchCount = $_IncludeWatchCount);
	}
	/**
	 * Get IncludeWatchCount
	 * @return boolean
	 */
	public function getIncludeWatchCount()
	{
		return $this->IncludeWatchCount;
	}
	/**
	 * Set IncludeCrossPromotion
	 * @param boolean IncludeCrossPromotion
	 * @return boolean
	 */
	public function setIncludeCrossPromotion($_IncludeCrossPromotion)
	{
		return ($this->IncludeCrossPromotion = $_IncludeCrossPromotion);
	}
	/**
	 * Get IncludeCrossPromotion
	 * @return boolean
	 */
	public function getIncludeCrossPromotion()
	{
		return $this->IncludeCrossPromotion;
	}
	/**
	 * Set IncludeItemSpecifics
	 * @param boolean IncludeItemSpecifics
	 * @return boolean
	 */
	public function setIncludeItemSpecifics($_IncludeItemSpecifics)
	{
		return ($this->IncludeItemSpecifics = $_IncludeItemSpecifics);
	}
	/**
	 * Get IncludeItemSpecifics
	 * @return boolean
	 */
	public function getIncludeItemSpecifics()
	{
		return $this->IncludeItemSpecifics;
	}
	/**
	 * Set IncludeTaxTable
	 * @param boolean IncludeTaxTable
	 * @return boolean
	 */
	public function setIncludeTaxTable($_IncludeTaxTable)
	{
		return ($this->IncludeTaxTable = $_IncludeTaxTable);
	}
	/**
	 * Get IncludeTaxTable
	 * @return boolean
	 */
	public function getIncludeTaxTable()
	{
		return $this->IncludeTaxTable;
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
	 * Set VariationSKU
	 * @param SKUType VariationSKU
	 * @return SKUType
	 */
	public function setVariationSKU($_VariationSKU)
	{
		return ($this->VariationSKU = EbayTradingTypeSKUType::valueIsValid($_VariationSKU)?$_VariationSKU:null);
	}
	/**
	 * Get VariationSKU
	 * @return EbayTradingTypeSKUType
	 */
	public function getVariationSKU()
	{
		return $this->VariationSKU;
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
	 * Set TransactionID
	 * @param string TransactionID
	 * @return string
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = $_TransactionID);
	}
	/**
	 * Get TransactionID
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set IncludeItemCompatibilityList
	 * @param boolean IncludeItemCompatibilityList
	 * @return boolean
	 */
	public function setIncludeItemCompatibilityList($_IncludeItemCompatibilityList)
	{
		return ($this->IncludeItemCompatibilityList = $_IncludeItemCompatibilityList);
	}
	/**
	 * Get IncludeItemCompatibilityList
	 * @return boolean
	 */
	public function getIncludeItemCompatibilityList()
	{
		return $this->IncludeItemCompatibilityList;
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