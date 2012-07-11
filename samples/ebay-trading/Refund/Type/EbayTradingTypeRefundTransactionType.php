<?php
/**
 * Class file for EbayTradingTypeRefundTransactionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundTransactionType
 * Documentation : A container consisting of details about the order line item against which the seller issued a refund. If an order ID is present, it indicates that the refund was issued against the entire order. If an item ID and transaction ID are present, that indicates that the refund was issued against that particular order line item.
 * @date 04/07/2012
 */
class EbayTradingTypeRefundTransactionType extends EbayTradingWsdlClass
{
	/**
	 * The OrderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The order against which the refund was issued. The presence of this value indicates that the refund was issued against the entire order.<br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundTransaction containers are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @var string
	 */
	public $OrderID;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The item against which the refund was issued. This value must be accompanied by a TransactionID value.<br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundTransaction containers are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @var string
	 */
	public $ItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The transaction against which the refund was issued. This value must be accompanied by an ItemID value.<br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundTransaction containers are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The RefundLineArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An array of refund lines identifying the order line items against which the refund was issued.<br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundTransaction containers are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @var EbayTradingTypeRefundLineArrayType
	 */
	public $RefundLineArray;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string OrderID
	 * @param string ItemID
	 * @param string TransactionID
	 * @param EbayTradingTypeRefundLineArrayType RefundLineArray
	 * @param DOMDocument any
	 * @return EbayTradingTypeRefundTransactionType
	 */
	public function __construct($_OrderID = null,$_ItemID = null,$_TransactionID = null,$_RefundLineArray = null,$_any = null)
	{
		parent::__construct(array('OrderID'=>$_OrderID,'ItemID'=>$_ItemID,'TransactionID'=>$_TransactionID,'RefundLineArray'=>$_RefundLineArray,'any'=>$_any));
	}
	/**
	 * Set OrderID
	 * @param string OrderID
	 * @return string
	 */
	public function setOrderID($_OrderID)
	{
		return ($this->OrderID = $_OrderID);
	}
	/**
	 * Get OrderID
	 * @return string
	 */
	public function getOrderID()
	{
		return $this->OrderID;
	}
	/**
	 * Set ItemID
	 * @param string ItemID
	 * @return string
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = $_ItemID);
	}
	/**
	 * Get ItemID
	 * @return string
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
	 * Set RefundLineArray
	 * @param RefundLineArrayType RefundLineArray
	 * @return RefundLineArrayType
	 */
	public function setRefundLineArray($_RefundLineArray)
	{
		return ($this->RefundLineArray = $_RefundLineArray);
	}
	/**
	 * Get RefundLineArray
	 * @return EbayTradingTypeRefundLineArrayType
	 */
	public function getRefundLineArray()
	{
		return $this->RefundLineArray;
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