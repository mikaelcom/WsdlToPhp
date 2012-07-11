<?php
/**
 * Class file for EbayTradingTypeSetUserNotesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetUserNotesRequestType
 * Documentation : Enables users to add, replace, and delete My eBay notes for items that are being tracked in the My eBay All Selling and All Buying areas.
 * @date 04/07/2012
 */
class EbayTradingTypeSetUserNotesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the item to which the My eBay note will be attached. Notes can only be added to items that are currently being tracked in My eBay.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The Action
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether to add/update the note or delete.
	 * @var EbayTradingTypeSetUserNotesActionCodeType
	 */
	public $Action;
	/**
	 * The NoteText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Text of the note. Maximum 250 characters. Required only if the Action is <b>AddOrUpdate</b>. This note text will completely replace any existing My eBay note for the specified item.
	 * @var string
	 */
	public $NoteText;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for the order line item (transaction) to which the My eBay note will be attached. Notes can only be added to order line items that are currently being tracked in My eBay. Buyers can view user notes made on order line items in the <b>PrivateNotes</b> field of the <b>WonList</b> container in <b>GetMyeBayBuying</b>, and sellers can view user notes made on order line items in the <b>PrivateNotes</b> field of the <b>SoldList</b> and <b>DeletedFromSoldList</b> containers in <b>GetMyeBaySellinging</b>.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The VariationSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of name-value pairs that identify (match) one variation within a fixed-price, multi-variation listing. The specified name-value pair(s) must exist in the listing specified by either the <b>ItemID</b> or <b>SKU</b> values specified in the request. If a specific order line item is targeted in the request with an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value, any specified <b>VariationSpecifics</b> container is ignored by the call.
	 * @var EbayTradingTypeNameValueListArrayType
	 */
	public $VariationSpecifics;
	/**
	 * The SKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : SKU value of the item variation to which the My eBay note will be attached. Notes can only be added to items that are currently being tracked in My eBay. A SKU (stock keeping unit) value is defined by and used by the seller to identify a variation within a fixed-price, multi- variation listing. The SKU value is assigned to a variation of an item through the <b>Variations.Variation.SKU</b> element. <br> <br> This field can only be used if the <b>Item.InventoryTrackingMethod</b> field (set with the <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> calls) is set to SKU. <br> <br> If a specific order line item is targeted in the request with an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value, any specified <b>SKU</b> is ignored by the call.
	 * @var EbayTradingTypeSKUType
	 */
	public $SKU;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier for an eBay order line item. This field is created as soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. <b>OrderLineItemID</b> can be used in the input instead of an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item. <br> <br> Notes can only be added to order line items that are currently being tracked in My eBay. Buyers can view user notes made on order line items in the <b>PrivateNotes</b> field of the <b>WonList</b> container in <b>GetMyeBayBuying</b>, and sellers can view user notes made on order line items in the <b>PrivateNotes</b> field of the <b>SoldList</b> and <b>DeletedFromSoldList</b> containers in <b>GetMyeBaySellinging</b>.
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeSetUserNotesActionCodeType Action
	 * @param string NoteText
	 * @param string TransactionID
	 * @param EbayTradingTypeNameValueListArrayType VariationSpecifics
	 * @param EbayTradingTypeSKUType SKU
	 * @param string OrderLineItemID
	 * @return EbayTradingTypeSetUserNotesRequestType
	 */
	public function __construct($_ItemID = null,$_Action = null,$_NoteText = null,$_TransactionID = null,$_VariationSpecifics = null,$_SKU = null,$_OrderLineItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'Action'=>$_Action,'NoteText'=>$_NoteText,'TransactionID'=>$_TransactionID,'VariationSpecifics'=>$_VariationSpecifics,'SKU'=>$_SKU,'OrderLineItemID'=>$_OrderLineItemID));
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
	 * Set Action
	 * @param SetUserNotesActionCodeType Action
	 * @return SetUserNotesActionCodeType
	 */
	public function setAction($_Action)
	{
		return ($this->Action = EbayTradingTypeSetUserNotesActionCodeType::valueIsValid($_Action)?$_Action:null);
	}
	/**
	 * Get Action
	 * @return EbayTradingTypeSetUserNotesActionCodeType
	 */
	public function getAction()
	{
		return $this->Action;
	}
	/**
	 * Set NoteText
	 * @param string NoteText
	 * @return string
	 */
	public function setNoteText($_NoteText)
	{
		return ($this->NoteText = $_NoteText);
	}
	/**
	 * Get NoteText
	 * @return string
	 */
	public function getNoteText()
	{
		return $this->NoteText;
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
	 * Set OrderLineItemID
	 * @param string OrderLineItemID
	 * @return string
	 */
	public function setOrderLineItemID($_OrderLineItemID)
	{
		return ($this->OrderLineItemID = $_OrderLineItemID);
	}
	/**
	 * Get OrderLineItemID
	 * @return string
	 */
	public function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
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