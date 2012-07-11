<?php
/**
 * Class file for EbayTradingTypeDisableUnpaidItemAssistanceRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisableUnpaidItemAssistanceRequestType
 * Documentation : Enables a seller to disable the Unpaid Item Assistant mechanism for a specific order line item. This call can be made regardless of whether an Unpaid Item dispute exists for the order line item. If a dispute has already been created by the Unpaid Item Assistant, the dispute is converted to a "manual" dispute for the seller to manage like any other manually-created dispute.
 * @date 04/07/2012
 */
class EbayTradingTypeDisableUnpaidItemAssistanceRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay item listing. A listing can have multiple order line items (transactions), but only one <b>ItemID</b>. To identify a specific order line item for which to disable the Unpaid Item Assistant mechanism, either an <b>ItemID</b>/<b>TransactionID</b> pair, an <b>OrderLineItemID</b>, or a <b>DisputeID</b> (if a dispute record already exists) is required in the request.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of an order line item (transaction). An order line item is created once there is a commitment from a buyer to purchase an item. To identify a specific order line item for which to disable the Unpaid Item Assistant mechanism, either an <b>ItemID</b>/<b>TransactionID</b> pair, an <b>OrderLineItemID</b>, or a <b>DisputeID</b> (if a dispute record already exists) is required in the request.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The DisputeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier for an eBay dispute, and in this case, an Unpaid Item dispute. Any order line item can only have one dispute record, so <b>DisputeID</b> can be used in the request to identify a specific order line item. If an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> is used to identify an order line item, <b>DisputeID</b> will be ignored if it is included in the request.
	 * @var EbayTradingTypeDisputeIDType
	 */
	public $DisputeID;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. To identify a specific order line item for which to disable the Unpaid Item Assistant mechanism, either an <b>ItemID</b>/<b>TransactionID</b> pair, an <b>OrderLineItemID</b>, or a <b>DisputeID</b> is required in the request.
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string TransactionID
	 * @param EbayTradingTypeDisputeIDType DisputeID
	 * @param string OrderLineItemID
	 * @return EbayTradingTypeDisableUnpaidItemAssistanceRequestType
	 */
	public function __construct($_ItemID = null,$_TransactionID = null,$_DisputeID = null,$_OrderLineItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'TransactionID'=>$_TransactionID,'DisputeID'=>$_DisputeID,'OrderLineItemID'=>$_OrderLineItemID));
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
	 * Set DisputeID
	 * @param DisputeIDType DisputeID
	 * @return DisputeIDType
	 */
	public function setDisputeID($_DisputeID)
	{
		return ($this->DisputeID = EbayTradingTypeDisputeIDType::valueIsValid($_DisputeID)?$_DisputeID:null);
	}
	/**
	 * Get DisputeID
	 * @return EbayTradingTypeDisputeIDType
	 */
	public function getDisputeID()
	{
		return $this->DisputeID;
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