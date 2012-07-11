<?php
/**
 * Class file for EbayTradingTypeRespondToBestOfferRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRespondToBestOfferRequestType
 * Documentation : Enables the seller of a Best Offer item to accept, decline, or counter offers made by bidders. Best offers can be declined in bulk, using the same message from the seller to the bidders of all rejected offers.
 * @date 04/07/2012
 */
class EbayTradingTypeRespondToBestOfferRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the item for which the BestOffer data is to be returned.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The BestOfferID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The ID of a Best Offer for the item.
	 * @var EbayTradingTypeBestOfferIDType
	 */
	public $BestOfferID;
	/**
	 * The Action
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The action taken on the best offer by the seller (e.g., Accept, Decline, or Counter). Bulk Accept and Bulk Counter are not supported. That is, you cannot accept or counter multiple offers in a single call. You can, however, decline multiple offers in a single call.
	 * @var EbayTradingTypeBestOfferActionCodeType
	 */
	public $Action;
	/**
	 * The SellerResponse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A comment from the seller to the buyer.
	 * @var string
	 */
	public $SellerResponse;
	/**
	 * The CounterOfferPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The counter offer price. When Action is set to Counter, you must specify the amount for the counter offer with CounterOfferPrice. The value of CounterOfferPrice cannot exceed the Buy It Now price for a single quantity item. The value of CounterOfferPrice may exceed the Buy It Now price if the value for CounterOfferQuantity is greater than 1.
	 * @var EbayTradingTypeAmountType
	 */
	public $CounterOfferPrice;
	/**
	 * The CounterOfferQuantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The quantity of items in the counter offer. When Action is set to Counter you must specify the quantity of items for the counter offer with CounterOfferQuantity.
	 * @var int
	 */
	public $CounterOfferQuantity;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeBestOfferIDType BestOfferID
	 * @param EbayTradingTypeBestOfferActionCodeType Action
	 * @param string SellerResponse
	 * @param EbayTradingTypeAmountType CounterOfferPrice
	 * @param int CounterOfferQuantity
	 * @return EbayTradingTypeRespondToBestOfferRequestType
	 */
	public function __construct($_ItemID = null,$_BestOfferID = null,$_Action = null,$_SellerResponse = null,$_CounterOfferPrice = null,$_CounterOfferQuantity = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'BestOfferID'=>$_BestOfferID,'Action'=>$_Action,'SellerResponse'=>$_SellerResponse,'CounterOfferPrice'=>$_CounterOfferPrice,'CounterOfferQuantity'=>$_CounterOfferQuantity));
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
	 * Set BestOfferID
	 * @param BestOfferIDType BestOfferID
	 * @return BestOfferIDType
	 */
	public function setBestOfferID($_BestOfferID)
	{
		return ($this->BestOfferID = EbayTradingTypeBestOfferIDType::valueIsValid($_BestOfferID)?$_BestOfferID:null);
	}
	/**
	 * Get BestOfferID
	 * @return EbayTradingTypeBestOfferIDType
	 */
	public function getBestOfferID()
	{
		return $this->BestOfferID;
	}
	/**
	 * Set Action
	 * @param BestOfferActionCodeType Action
	 * @return BestOfferActionCodeType
	 */
	public function setAction($_Action)
	{
		return ($this->Action = EbayTradingTypeBestOfferActionCodeType::valueIsValid($_Action)?$_Action:null);
	}
	/**
	 * Get Action
	 * @return EbayTradingTypeBestOfferActionCodeType
	 */
	public function getAction()
	{
		return $this->Action;
	}
	/**
	 * Set SellerResponse
	 * @param string SellerResponse
	 * @return string
	 */
	public function setSellerResponse($_SellerResponse)
	{
		return ($this->SellerResponse = $_SellerResponse);
	}
	/**
	 * Get SellerResponse
	 * @return string
	 */
	public function getSellerResponse()
	{
		return $this->SellerResponse;
	}
	/**
	 * Set CounterOfferPrice
	 * @param AmountType CounterOfferPrice
	 * @return AmountType
	 */
	public function setCounterOfferPrice($_CounterOfferPrice)
	{
		return ($this->CounterOfferPrice = $_CounterOfferPrice);
	}
	/**
	 * Get CounterOfferPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getCounterOfferPrice()
	{
		return $this->CounterOfferPrice;
	}
	/**
	 * Set CounterOfferQuantity
	 * @param int CounterOfferQuantity
	 * @return int
	 */
	public function setCounterOfferQuantity($_CounterOfferQuantity)
	{
		return ($this->CounterOfferQuantity = $_CounterOfferQuantity);
	}
	/**
	 * Get CounterOfferQuantity
	 * @return int
	 */
	public function getCounterOfferQuantity()
	{
		return $this->CounterOfferQuantity;
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