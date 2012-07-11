<?php
/**
 * Class file for EbayTradingTypeVATRateType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVATRateType
 * Documentation : Container to specify VAT rate information.
 * @date 04/07/2012
 */
class EbayTradingTypeVATRateType extends EbayTradingWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay item listing. A listing can have multiple order line items (transactions), but only one <b>ItemID</b>. An <b>ItemID</b> can be paired up with a corresponding <b>TransactionID</b> and used as an input filter for <b>ReviseSellingManagerSaleRecord</b>. However, if <b>OrderID</b> is passed in as an input filter for <b>ReviseSellingManagerSaleRecord</b>, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay order line item (transaction). An order line item is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one order line item during the duration of the listing, the <b>TransactionID</b> for auction listings is always 0. Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used and referenced during an order checkout flow and after checkout has been completed. The <b>ItemID</b>/<b>TransactionID</b> pair can be used as an input filter for <b>ReviseSellingManagerSaleRecord</b>. However, if <b>OrderID</b> is passed in as an input filter for <b>ReviseSellingManagerSaleRecord</b>, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The VATPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : VAT rate for the item, if any. When the <b>VATPercent</b> is specified, the item's VAT information appears on the item's listing page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. To specify a <b>VATPercent</b>, a seller must have a VAT-ID registered with eBay and must be listing the item on a VAT-enabled site. Max applicable length is 6 characters, including the decimal (e.g., 12.345). The scale is 3 decimal places. (If you pass in 12.3456, eBay may round up the value to 12.346.) Note: The View Item page may display the precision to 2 decimal places with no trailing zeros. However, the full value you send in is stored.
	 * @var float
	 */
	public $VATPercent;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. If a VATRate is specified in the <b>ReviseSellingManagerSaleRecord</b> request, <b>OrderLineItemID</b> can be used instead of <b>ItemID</b> and <b>TransactionID</b>. For a single line item order, the <b>OrderLineItemID</b> value can be passed into the <b>OrderID</b> field to revise the corresponding order.
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
	 * @param float VATPercent
	 * @param string OrderLineItemID
	 * @param DOMDocument any
	 * @return EbayTradingTypeVATRateType
	 */
	public function __construct($_ItemID = null,$_TransactionID = null,$_VATPercent = null,$_OrderLineItemID = null,$_any = null)
	{
		parent::__construct(array('ItemID'=>$_ItemID,'TransactionID'=>$_TransactionID,'VATPercent'=>$_VATPercent,'OrderLineItemID'=>$_OrderLineItemID,'any'=>$_any));
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
	 * Set VATPercent
	 * @param float VATPercent
	 * @return float
	 */
	public function setVATPercent($_VATPercent)
	{
		return ($this->VATPercent = $_VATPercent);
	}
	/**
	 * Get VATPercent
	 * @return float
	 */
	public function getVATPercent()
	{
		return $this->VATPercent;
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