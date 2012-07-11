<?php
/**
 * Class file for EbayTradingTypePlaceOfferResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePlaceOfferResponseType
 * Documentation : The <b>PlaceOffer</b> response notifies you about the success and result of the call.
 * @date 04/07/2012
 */
class EbayTradingTypePlaceOfferResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The SellingStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the current bidding/purchase state of the item listing regarding the offer extended using <b>PlaceOffer</b>. See the schema documentation for the <b>SellingStatus</b> object, the properties of which contain such post-offer information as the current high bidder, the current price for the item, and the bid increment.
	 * @var EbayTradingTypeSellingStatusType
	 */
	public $SellingStatus;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay order line item (transaction). The <b>TransactionID</b> field is only returned if the <b>Offer.Action</b> field was set to <b>Purchase</b> in the input and the purchase was successful. A Purchase action in <b>PlaceOffer</b> can be used for a fixed-price listing, or for an auction listing where the Buy It Now option is available.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The BestOffer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the status for a Best Offer. This container is only returned if applicable based on the listing and the value set for <b>Offer.Action</b> field in the request.
	 * @var EbayTradingTypeBestOfferType
	 */
	public $BestOffer;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. The <b>OrderLineItemID</b> field is only returned if the <b>Offer.Action</b> field is set to <b>Purchase</b> in the input and the purchase is successful. A Purchase action in <b>PlaceOffer</b> can be used for a fixed-price listing, or for an auction listing where the Buy It Now option is available. <br>
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingStatusType SellingStatus
	 * @param string TransactionID
	 * @param EbayTradingTypeBestOfferType BestOffer
	 * @param string OrderLineItemID
	 * @return EbayTradingTypePlaceOfferResponseType
	 */
	public function __construct($_SellingStatus = null,$_TransactionID = null,$_BestOffer = null,$_OrderLineItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('SellingStatus'=>$_SellingStatus,'TransactionID'=>$_TransactionID,'BestOffer'=>$_BestOffer,'OrderLineItemID'=>$_OrderLineItemID));
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
	 * Set BestOffer
	 * @param BestOfferType BestOffer
	 * @return BestOfferType
	 */
	public function setBestOffer($_BestOffer)
	{
		return ($this->BestOffer = $_BestOffer);
	}
	/**
	 * Get BestOffer
	 * @return EbayTradingTypeBestOfferType
	 */
	public function getBestOffer()
	{
		return $this->BestOffer;
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