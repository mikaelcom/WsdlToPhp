<?php
/**
 * Class file for EbayTradingTypeItemTransactionIDType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemTransactionIDType
 * Documentation : This container is designed to return all order line items related to specific multiple-item, fixed-price listings. Additionally, a SKU filter can be used to return all order line items related to a specific product or variation of an item.
 * @date 04/07/2012
 */
class EbayTradingTypeItemTransactionIDType extends EbayTradingWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay item listing. A listing can have multiple order line items (transactions), but only one <b>ItemID</b>. Unless an <b>OrderLineItemID</b> or <b>SKU</b> value is specified in the same node, this field is required for each <b>ItemTransactionID</b> node included in the request.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay order line item (transaction). The <b>TransactionID</b> should match the <b>ItemID</b> specified in each <b>ItemTransactionID</b> node included in the request. Optionally, an <b>OrderLineItemID</b> value can substitute for the <b>ItemID</b>/<b>TransactionID</b> pair.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The SKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A SKU (stock keeping unit) is a unique identifier defined and used by the seller to identify a product or variation of an item. A listing can have multiple SKUs and it is possible that the same SKU can exist in multiple listings. Unless an <b>OrderLineItemID</b> or <b>ItemID</b>/<b>TransactionID</b> pair is specified in the same node, this field is required for each <b>ItemTransactionID</b> node included in the request. To retrieve order line items associated with a SKU, the <b>InventoryTrackingMethod</b> field must be set to SKU. The <b>InventoryTrackingMethod</b> field is set through <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b>.
	 * @var EbayTradingTypeSKUType
	 */
	public $SKU;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. If an <b>OrderLineItemID</b> is included in a <b>ItemTransactionID</b> node in the request, the <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> fields are not required and are ignored if they are included in the request. <br>
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string TransactionID
	 * @param EbayTradingTypeSKUType SKU
	 * @param string OrderLineItemID
	 * @param DOMDocument any
	 * @return EbayTradingTypeItemTransactionIDType
	 */
	public function __construct($_ItemID = null,$_TransactionID = null,$_SKU = null,$_OrderLineItemID = null,$_any = null)
	{
		parent::__construct(array('ItemID'=>$_ItemID,'TransactionID'=>$_TransactionID,'SKU'=>$_SKU,'OrderLineItemID'=>$_OrderLineItemID,'any'=>$_any));
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