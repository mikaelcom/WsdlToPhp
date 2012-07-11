<?php
/**
 * Class file for EbayTradingTypeOrderIDArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeOrderIDArrayType
 * Documentation : A list of unique identifiers for orders.
 * @date 04/07/2012
 */
class EbayTradingTypeOrderIDArrayType extends EbayTradingWsdlClass
{
	/**
	 * The OrderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A unique identifier that identifies a single line item or multiple line item (Combined Payment) order. <br><br> For the GetOrders and GetOrderTransactions calls, the OrderID field can handle a hyphenated OrderLineItemID value. OrderLineItemID is a unique identifier for an eBay transaction and is based upon the concatenation of ItemID and TransactionID with a hyphen in between these two IDs. <br><br>
	 * @var EbayTradingTypeOrderIDType
	 */
	public $OrderID;
	/**
	 * Constructor
	 * @param EbayTradingTypeOrderIDType OrderID
	 * @return EbayTradingTypeOrderIDArrayType
	 */
	public function __construct($_OrderID = null)
	{
		parent::__construct(array('OrderID'=>$_OrderID));
	}
	/**
	 * Set OrderID
	 * @param OrderIDType OrderID
	 * @return OrderIDType
	 */
	public function setOrderID($_OrderID)
	{
		return ($this->OrderID = EbayTradingTypeOrderIDType::valueIsValid($_OrderID)?$_OrderID:null);
	}
	/**
	 * Get OrderID
	 * @return EbayTradingTypeOrderIDType
	 */
	public function getOrderID()
	{
		return $this->OrderID;
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