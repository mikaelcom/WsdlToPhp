<?php
/**
 * Class file for EbayTradingTypeAddDisputeRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddDisputeRequestType
 * Documentation : Enables a seller to create a new Unpaid Item dispute or to cancel a single line item order. Item Not Received and Significantly Not as Described buyer disputes can only be created through the Resolution Center, or through PayPal or other eBay site where a Resolution Center is not available.
 * @date 04/07/2012
 */
class EbayTradingTypeAddDisputeRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The DisputeExplanation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the action (or lack of action) taken by the buyer which caused the seller to create an Unpaid Item dispute, or to cancel the order line item (tranaction). The allowed values for <b>DisputeExplanation</b> depends on the value of <b>DisputeReason</b> (see the link below).
	 * @var EbayTradingTypeDisputeExplanationCodeType
	 */
	public $DisputeExplanation;
	/**
	 * The DisputeReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of dispute being created. <b>BuyerHasNotPaid</b> and <b>TransactionMutuallyCanceled</b> are the only values that may be used with the <b>AddDispute</b> call.
	 * @var EbayTradingTypeDisputeReasonCodeType
	 */
	public $DisputeReason;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay item listing. A listing can have multiple orders, but only one <b>ItemID</b>. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is required. <br>
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of an order line item. An order line item is created once there is a commitment from a buyer to purchase an item. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is required. <br>
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>ItemID</b>/<b>TransactionID</b> pair is used, this field is required. <br>
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeDisputeExplanationCodeType DisputeExplanation
	 * @param EbayTradingTypeDisputeReasonCodeType DisputeReason
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string TransactionID
	 * @param string OrderLineItemID
	 * @return EbayTradingTypeAddDisputeRequestType
	 */
	public function __construct($_DisputeExplanation = null,$_DisputeReason = null,$_ItemID = null,$_TransactionID = null,$_OrderLineItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('DisputeExplanation'=>$_DisputeExplanation,'DisputeReason'=>$_DisputeReason,'ItemID'=>$_ItemID,'TransactionID'=>$_TransactionID,'OrderLineItemID'=>$_OrderLineItemID));
	}
	/**
	 * Set DisputeExplanation
	 * @param DisputeExplanationCodeType DisputeExplanation
	 * @return DisputeExplanationCodeType
	 */
	public function setDisputeExplanation($_DisputeExplanation)
	{
		return ($this->DisputeExplanation = EbayTradingTypeDisputeExplanationCodeType::valueIsValid($_DisputeExplanation)?$_DisputeExplanation:null);
	}
	/**
	 * Get DisputeExplanation
	 * @return EbayTradingTypeDisputeExplanationCodeType
	 */
	public function getDisputeExplanation()
	{
		return $this->DisputeExplanation;
	}
	/**
	 * Set DisputeReason
	 * @param DisputeReasonCodeType DisputeReason
	 * @return DisputeReasonCodeType
	 */
	public function setDisputeReason($_DisputeReason)
	{
		return ($this->DisputeReason = EbayTradingTypeDisputeReasonCodeType::valueIsValid($_DisputeReason)?$_DisputeReason:null);
	}
	/**
	 * Get DisputeReason
	 * @return EbayTradingTypeDisputeReasonCodeType
	 */
	public function getDisputeReason()
	{
		return $this->DisputeReason;
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