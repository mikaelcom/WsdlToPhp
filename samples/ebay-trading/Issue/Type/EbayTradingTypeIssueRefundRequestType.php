<?php
/**
 * Class file for EbayTradingTypeIssueRefundRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeIssueRefundRequestType
 * Documentation : <b>Half.com only.</b>&nbsp;Issues a refund for a specific Half.com order line item. This can only be called by a seller. Sellers do not have the ability to issue a general refund (a refund not tied to an order line item) to a buyer.
 * @date 04/07/2012
 */
class EbayTradingTypeIssueRefundRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for the Half.com item listing. Unless an <b>OrderLineItemID</b> is specified in the <b>IssueRefund</b> request, the <b>ItemID</b> is required along with the corresponding <b>TransactionID</b> to identify the order line item that will be refunded. You can use <b>GetSellerPayments</b> to retrieve the <b>ItemID</b> and/or <b>TransactionID</b> associated with the order line item.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for a Half.com order line item (transaction). An order line item is created once there is a commitment from a buyer to purchase an item. Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used to identify the order line item that will be refunded. Unless an <b>OrderLineItemID</b> is specified in the <b>IssueRefund</b> request, the <b>TransactionID</b> is required along with the corresponding <b>ItemID</b>. You can use <b>GetSellerPayments</b> to retrieve the <b>ItemID</b> and/or <b>TransactionID</b> associated with the order line item.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The RefundReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Explanation of the reason that the refund is being issued.
	 * @var EbayTradingTypeRefundReasonCodeType
	 */
	public $RefundReason;
	/**
	 * The RefundType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Explanation of the costs that the refund amount covers.
	 * @var EbayTradingTypeRefundTypeCodeType
	 */
	public $RefundType;
	/**
	 * The RefundAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The amount the seller wants to refund to the buyer, in US Dollars (USD). Must be greater than 0.00. Half.com allows a maximum of the original item sale price (order line item price plus original shipping reimbursement) plus return shipping costs (the amount the buyer paid to return the item). Typically, the return shipping cost is based on the current cost of shipping the individual item (not the discounted cost calculated during the original checkout for a Combined Payment order). You can also issue a partial refund for the amount you want the buyer to receive. If RefundType=Full or RefundType=FullPlusShipping and you do not pass <b>RefundAmount</b> in the request, Half.com will calculate the refund amount for you. If you pass <b>RefundAmount</b> in the request, the amount you specify will override Half.com's calculated value. Required if RefundType= CustomOrPartial.
	 * @var EbayTradingTypeAmountType
	 */
	public $RefundAmount;
	/**
	 * The RefundMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Note to the buyer. Cannot include HTML.
	 * @var string
	 */
	public $RefundMessage;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier for an eBay order line item. This field is created as soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. The <b>OrderLineItemID</b> value is used to identify the order line item that will be refunded. Unless an <b>ItemID</b>/<b>TransactionID</b> pair is specified in the <b>IssueRefund</b> request, the <b>OrderLineItemID</b> is required. You can use <b>GetSellerPayments</b> to retrieve the <b>OrderLineItemID</b> associated with the order line item. <br>
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string TransactionID
	 * @param EbayTradingTypeRefundReasonCodeType RefundReason
	 * @param EbayTradingTypeRefundTypeCodeType RefundType
	 * @param EbayTradingTypeAmountType RefundAmount
	 * @param string RefundMessage
	 * @param string OrderLineItemID
	 * @return EbayTradingTypeIssueRefundRequestType
	 */
	public function __construct($_ItemID = null,$_TransactionID = null,$_RefundReason = null,$_RefundType = null,$_RefundAmount = null,$_RefundMessage = null,$_OrderLineItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'TransactionID'=>$_TransactionID,'RefundReason'=>$_RefundReason,'RefundType'=>$_RefundType,'RefundAmount'=>$_RefundAmount,'RefundMessage'=>$_RefundMessage,'OrderLineItemID'=>$_OrderLineItemID));
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
	 * Set RefundReason
	 * @param RefundReasonCodeType RefundReason
	 * @return RefundReasonCodeType
	 */
	public function setRefundReason($_RefundReason)
	{
		return ($this->RefundReason = EbayTradingTypeRefundReasonCodeType::valueIsValid($_RefundReason)?$_RefundReason:null);
	}
	/**
	 * Get RefundReason
	 * @return EbayTradingTypeRefundReasonCodeType
	 */
	public function getRefundReason()
	{
		return $this->RefundReason;
	}
	/**
	 * Set RefundType
	 * @param RefundTypeCodeType RefundType
	 * @return RefundTypeCodeType
	 */
	public function setRefundType($_RefundType)
	{
		return ($this->RefundType = EbayTradingTypeRefundTypeCodeType::valueIsValid($_RefundType)?$_RefundType:null);
	}
	/**
	 * Get RefundType
	 * @return EbayTradingTypeRefundTypeCodeType
	 */
	public function getRefundType()
	{
		return $this->RefundType;
	}
	/**
	 * Set RefundAmount
	 * @param AmountType RefundAmount
	 * @return AmountType
	 */
	public function setRefundAmount($_RefundAmount)
	{
		return ($this->RefundAmount = $_RefundAmount);
	}
	/**
	 * Get RefundAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getRefundAmount()
	{
		return $this->RefundAmount;
	}
	/**
	 * Set RefundMessage
	 * @param string RefundMessage
	 * @return string
	 */
	public function setRefundMessage($_RefundMessage)
	{
		return ($this->RefundMessage = $_RefundMessage);
	}
	/**
	 * Get RefundMessage
	 * @return string
	 */
	public function getRefundMessage()
	{
		return $this->RefundMessage;
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