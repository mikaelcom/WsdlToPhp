<?php
/**
 * Class file for EbayTradingTypeAddSecondChanceItemRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddSecondChanceItemRequestType
 * Documentation : Creates a new Second Chance Offer (that is, an offer for an unsold item) for one of that item's non-winning bidders.
 * @date 04/07/2012
 */
class EbayTradingTypeAddSecondChanceItemRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The RecipientBidderUserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the bidder from the original, ended listing to whom the seller is extending the second chance offer. Specify only one RecipientBidderUserID per call. If multiple users are specified (each in a RecipientBidderUserID node), only the last one specified receives the offer.
	 * @var EbayTradingTypeUserIDType
	 */
	public $RecipientBidderUserID;
	/**
	 * The BuyItNowPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The amount the offer recipient must pay to purchase the item from the second chance offer listing. Use only when the original item was listed in an eBay Motors vehicle category (or in some categories on U.S. and international sites for high-priced items, such as items in many U.S. and Canada Business and Industrial categories) and it ended unsold because the reserve price was not met. Otherwise, eBay establishes the price and no price should be submitted.
	 * @var EbayTradingTypeAmountType
	 */
	public $BuyItNowPrice;
	/**
	 * The Duration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the length of time the second chance offer listing will be active. The recipient bidder has that much time to purchase the item or the listing expires.
	 * @var EbayTradingTypeSecondChanceOfferDurationCodeType
	 */
	public $Duration;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the item ID for the original, ended listing from which the second chance offer item comes. A new ItemID is returned for the second chance offer item.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The SellerMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Message content. Cannot contain HTML, asterisks, or quotes. This content is included in the second chance offer email sent to the recipient, which can be retrieved with GetMyMessages.
	 * @var string
	 */
	public $SellerMessage;
	/**
	 * Constructor
	 * @param EbayTradingTypeUserIDType RecipientBidderUserID
	 * @param EbayTradingTypeAmountType BuyItNowPrice
	 * @param EbayTradingTypeSecondChanceOfferDurationCodeType Duration
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string SellerMessage
	 * @return EbayTradingTypeAddSecondChanceItemRequestType
	 */
	public function __construct($_RecipientBidderUserID = null,$_BuyItNowPrice = null,$_Duration = null,$_ItemID = null,$_SellerMessage = null)
	{
		EbayTradingWsdlClass::__construct(array('RecipientBidderUserID'=>$_RecipientBidderUserID,'BuyItNowPrice'=>$_BuyItNowPrice,'Duration'=>$_Duration,'ItemID'=>$_ItemID,'SellerMessage'=>$_SellerMessage));
	}
	/**
	 * Set RecipientBidderUserID
	 * @param UserIDType RecipientBidderUserID
	 * @return UserIDType
	 */
	public function setRecipientBidderUserID($_RecipientBidderUserID)
	{
		return ($this->RecipientBidderUserID = EbayTradingTypeUserIDType::valueIsValid($_RecipientBidderUserID)?$_RecipientBidderUserID:null);
	}
	/**
	 * Get RecipientBidderUserID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getRecipientBidderUserID()
	{
		return $this->RecipientBidderUserID;
	}
	/**
	 * Set BuyItNowPrice
	 * @param AmountType BuyItNowPrice
	 * @return AmountType
	 */
	public function setBuyItNowPrice($_BuyItNowPrice)
	{
		return ($this->BuyItNowPrice = $_BuyItNowPrice);
	}
	/**
	 * Get BuyItNowPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getBuyItNowPrice()
	{
		return $this->BuyItNowPrice;
	}
	/**
	 * Set Duration
	 * @param SecondChanceOfferDurationCodeType Duration
	 * @return SecondChanceOfferDurationCodeType
	 */
	public function setDuration($_Duration)
	{
		return ($this->Duration = EbayTradingTypeSecondChanceOfferDurationCodeType::valueIsValid($_Duration)?$_Duration:null);
	}
	/**
	 * Get Duration
	 * @return EbayTradingTypeSecondChanceOfferDurationCodeType
	 */
	public function getDuration()
	{
		return $this->Duration;
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
	 * Set SellerMessage
	 * @param string SellerMessage
	 * @return string
	 */
	public function setSellerMessage($_SellerMessage)
	{
		return ($this->SellerMessage = $_SellerMessage);
	}
	/**
	 * Get SellerMessage
	 * @return string
	 */
	public function getSellerMessage()
	{
		return $this->SellerMessage;
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