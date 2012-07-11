<?php
/**
 * Class file for EbayTradingTypeAddTransactionConfirmationItemRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddTransactionConfirmationItemRequestType
 * Documentation : Ends the eBay Motors listing specified by ItemID and creates a new Transaction Confirmation Request (TCR) for the item, thus enabling the TCR recipient to purchase the item. You can also use this call to see if a new TCR can be created for the specified item.
 * @date 04/07/2012
 */
class EbayTradingTypeAddTransactionConfirmationItemRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The RecipientUserID
	 * Meta informations :
	 * 	- documentation : Specifies the user to whom the seller is offering the Transaction Confirmation Request.
	 * @var EbayTradingTypeUserIDType
	 */
	public $RecipientUserID;
	/**
	 * The VerifyEligibilityOnly
	 * Meta informations :
	 * 	- documentation : If true, specifies that the seller is verifying whether a new Transaction Confirmation Request (TCR) can be created. Thus, if this value is passed as true, then no Transaction Confirmation Request is actually made. If VerifyEligibilityOnly is not passed, or is false, a Transaction Confirmation Request is actually made.
	 * @var string
	 */
	public $VerifyEligibilityOnly;
	/**
	 * The RecipientPostalCode
	 * Meta informations :
	 * 	- documentation : Specifies the postal code of the user to whom the seller is offering the Transaction Confirmation Request. Required only if the user does not meet the other options listed in RecipientRelationCodeType. An error is returned if RecipientUserID and RecipientPostalCode do not match for more than 3 times for a seller per day.
	 * @var string
	 */
	public $RecipientPostalCode;
	/**
	 * The RecipientRelationType
	 * Meta informations :
	 * 	- documentation : Specifies the current relationship between the seller and the potential buyer. A seller can make a Transaction Confirmation Request (TCR) for an item to a potential buyer if the buyer meets one of several criteria. A TCR is sent by a seller to one of the following: a bidder, a best offer buyer, a member with an ASQ question, or any member with a postal code. See the values and annotations in RecipientRelationCodeType.
	 * @var EbayTradingTypeRecipientRelationCodeType
	 */
	public $RecipientRelationType;
	/**
	 * The NegotiatedPrice
	 * Meta informations :
	 * 	- documentation : The amount the offer recipient must pay to buy the item specified in the Transaction Confirmation Request (TCR). A negotiated amount between the buyer and the seller.
	 * @var EbayTradingTypeAmountType
	 */
	public $NegotiatedPrice;
	/**
	 * The ListingDuration
	 * Meta informations :
	 * 	- documentation : Specifies the length of time the item in the Transaction Confirmation Request (TCR) will be available for purchase.
	 * @var EbayTradingTypeSecondChanceOfferDurationCodeType
	 */
	public $ListingDuration;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- documentation : The ItemID of the item that the seller wants to end in order to create a Transaction Confirmation Request (TCR).
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The Comments
	 * Meta informations :
	 * 	- documentation : Comments the seller wants to send to the recipient (bidder, best offer buyer, member with an ASQ question, or member with a postal code).
	 * @var string
	 */
	public $Comments;
	/**
	 * Constructor
	 * @param EbayTradingTypeUserIDType RecipientUserID
	 * @param string VerifyEligibilityOnly
	 * @param string RecipientPostalCode
	 * @param EbayTradingTypeRecipientRelationCodeType RecipientRelationType
	 * @param EbayTradingTypeAmountType NegotiatedPrice
	 * @param EbayTradingTypeSecondChanceOfferDurationCodeType ListingDuration
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string Comments
	 * @return EbayTradingTypeAddTransactionConfirmationItemRequestType
	 */
	public function __construct($_RecipientUserID = null,$_VerifyEligibilityOnly = null,$_RecipientPostalCode = null,$_RecipientRelationType = null,$_NegotiatedPrice = null,$_ListingDuration = null,$_ItemID = null,$_Comments = null)
	{
		EbayTradingWsdlClass::__construct(array('RecipientUserID'=>$_RecipientUserID,'VerifyEligibilityOnly'=>$_VerifyEligibilityOnly,'RecipientPostalCode'=>$_RecipientPostalCode,'RecipientRelationType'=>$_RecipientRelationType,'NegotiatedPrice'=>$_NegotiatedPrice,'ListingDuration'=>$_ListingDuration,'ItemID'=>$_ItemID,'Comments'=>$_Comments));
	}
	/**
	 * Set RecipientUserID
	 * @param UserIDType RecipientUserID
	 * @return UserIDType
	 */
	public function setRecipientUserID($_RecipientUserID)
	{
		return ($this->RecipientUserID = EbayTradingTypeUserIDType::valueIsValid($_RecipientUserID)?$_RecipientUserID:null);
	}
	/**
	 * Get RecipientUserID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getRecipientUserID()
	{
		return $this->RecipientUserID;
	}
	/**
	 * Set VerifyEligibilityOnly
	 * @param string VerifyEligibilityOnly
	 * @return string
	 */
	public function setVerifyEligibilityOnly($_VerifyEligibilityOnly)
	{
		return ($this->VerifyEligibilityOnly = $_VerifyEligibilityOnly);
	}
	/**
	 * Get VerifyEligibilityOnly
	 * @return string
	 */
	public function getVerifyEligibilityOnly()
	{
		return $this->VerifyEligibilityOnly;
	}
	/**
	 * Set RecipientPostalCode
	 * @param string RecipientPostalCode
	 * @return string
	 */
	public function setRecipientPostalCode($_RecipientPostalCode)
	{
		return ($this->RecipientPostalCode = $_RecipientPostalCode);
	}
	/**
	 * Get RecipientPostalCode
	 * @return string
	 */
	public function getRecipientPostalCode()
	{
		return $this->RecipientPostalCode;
	}
	/**
	 * Set RecipientRelationType
	 * @param RecipientRelationCodeType RecipientRelationType
	 * @return RecipientRelationCodeType
	 */
	public function setRecipientRelationType($_RecipientRelationType)
	{
		return ($this->RecipientRelationType = EbayTradingTypeRecipientRelationCodeType::valueIsValid($_RecipientRelationType)?$_RecipientRelationType:null);
	}
	/**
	 * Get RecipientRelationType
	 * @return EbayTradingTypeRecipientRelationCodeType
	 */
	public function getRecipientRelationType()
	{
		return $this->RecipientRelationType;
	}
	/**
	 * Set NegotiatedPrice
	 * @param AmountType NegotiatedPrice
	 * @return AmountType
	 */
	public function setNegotiatedPrice($_NegotiatedPrice)
	{
		return ($this->NegotiatedPrice = $_NegotiatedPrice);
	}
	/**
	 * Get NegotiatedPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getNegotiatedPrice()
	{
		return $this->NegotiatedPrice;
	}
	/**
	 * Set ListingDuration
	 * @param SecondChanceOfferDurationCodeType ListingDuration
	 * @return SecondChanceOfferDurationCodeType
	 */
	public function setListingDuration($_ListingDuration)
	{
		return ($this->ListingDuration = EbayTradingTypeSecondChanceOfferDurationCodeType::valueIsValid($_ListingDuration)?$_ListingDuration:null);
	}
	/**
	 * Get ListingDuration
	 * @return EbayTradingTypeSecondChanceOfferDurationCodeType
	 */
	public function getListingDuration()
	{
		return $this->ListingDuration;
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
	 * Set Comments
	 * @param string Comments
	 * @return string
	 */
	public function setComments($_Comments)
	{
		return ($this->Comments = $_Comments);
	}
	/**
	 * Get Comments
	 * @return string
	 */
	public function getComments()
	{
		return $this->Comments;
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