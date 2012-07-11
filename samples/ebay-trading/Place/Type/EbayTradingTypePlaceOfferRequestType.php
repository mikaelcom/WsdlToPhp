<?php
/**
 * Class file for EbayTradingTypePlaceOfferRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePlaceOfferRequestType
 * Documentation : Enables the authenticated user to to make a bid, a best offer, or a purchase on the item specified by the ItemID input field.
 * @date 04/07/2012
 */
class EbayTradingTypePlaceOfferRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Offer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the type of offer being made. If the item is a competitive-bidding listing, the offer is a bid. If the item is a fixed-price listing, then the offer purchases the item. If the item is a competitive-bidding listing and the offer is of type with an active, unexercised Buy It Now option, then the offer can either purchase the item or be a bid. See the schema documentation for OfferType for details on its properties and their meanings.
	 * @var EbayTradingTypeOfferType
	 */
	public $Offer;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique item ID that identifies the item listing for which the action is being submitted. <br><br> If the item was listed with Variations, you must also specify VariationSpecifics in the request to uniquely identify the variant being purchased.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The BlockOnWarning
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If a warning message exists and BlockOnWarning is true, the warning message is returned and the bid is blocked. If no warning message exists and BlockOnWarning is true, the bid is placed. If BlockOnWarning is false, the bid is placed, regardless of warning.
	 * @var boolean
	 */
	public $BlockOnWarning;
	/**
	 * The AffiliateTrackingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for affiliate-related tags, which enable the tracking of user activity. If you include AffiliateTrackingDetails in your PlaceOffer call, then it is possible to receive affiliate commissions based on calls made by your application. (See the <a href= "http://www.ebaypartnernetwork.com/" target="_blank">eBay Partner Network</a> for information about commissions.) Please note that affiliate tracking is not available in the Sandbox environment, and that affiliate tracking is not available when you make a best offer.
	 * @var EbayTradingTypeAffiliateTrackingDetailsType
	 */
	public $AffiliateTrackingDetails;
	/**
	 * The VariationSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name-value pairs that identify a single variation within the listing identified by ItemID. Required when the seller listed the item with Item Variations.<br> <br> If you want to buy items from multiple variations in the same listing, use a separate PlaceOffer request for each variation. For example, if you want to buy 3 red shirts and 2 black shirts from the same listing, use one PlaceOffer request for the 3 red shirts, and another PlaceOffer request for the 2 black shirts.
	 * @var EbayTradingTypeNameValueListArrayType
	 */
	public $VariationSpecifics;
	/**
	 * Constructor
	 * @param EbayTradingTypeOfferType Offer
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param boolean BlockOnWarning
	 * @param EbayTradingTypeAffiliateTrackingDetailsType AffiliateTrackingDetails
	 * @param EbayTradingTypeNameValueListArrayType VariationSpecifics
	 * @return EbayTradingTypePlaceOfferRequestType
	 */
	public function __construct($_Offer = null,$_ItemID = null,$_BlockOnWarning = null,$_AffiliateTrackingDetails = null,$_VariationSpecifics = null)
	{
		EbayTradingWsdlClass::__construct(array('Offer'=>$_Offer,'ItemID'=>$_ItemID,'BlockOnWarning'=>$_BlockOnWarning,'AffiliateTrackingDetails'=>$_AffiliateTrackingDetails,'VariationSpecifics'=>$_VariationSpecifics));
	}
	/**
	 * Set Offer
	 * @param OfferType Offer
	 * @return OfferType
	 */
	public function setOffer($_Offer)
	{
		return ($this->Offer = $_Offer);
	}
	/**
	 * Get Offer
	 * @return EbayTradingTypeOfferType
	 */
	public function getOffer()
	{
		return $this->Offer;
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
	 * Set BlockOnWarning
	 * @param boolean BlockOnWarning
	 * @return boolean
	 */
	public function setBlockOnWarning($_BlockOnWarning)
	{
		return ($this->BlockOnWarning = $_BlockOnWarning);
	}
	/**
	 * Get BlockOnWarning
	 * @return boolean
	 */
	public function getBlockOnWarning()
	{
		return $this->BlockOnWarning;
	}
	/**
	 * Set AffiliateTrackingDetails
	 * @param AffiliateTrackingDetailsType AffiliateTrackingDetails
	 * @return AffiliateTrackingDetailsType
	 */
	public function setAffiliateTrackingDetails($_AffiliateTrackingDetails)
	{
		return ($this->AffiliateTrackingDetails = $_AffiliateTrackingDetails);
	}
	/**
	 * Get AffiliateTrackingDetails
	 * @return EbayTradingTypeAffiliateTrackingDetailsType
	 */
	public function getAffiliateTrackingDetails()
	{
		return $this->AffiliateTrackingDetails;
	}
	/**
	 * Set VariationSpecifics
	 * @param NameValueListArrayType VariationSpecifics
	 * @return NameValueListArrayType
	 */
	public function setVariationSpecifics($_VariationSpecifics)
	{
		return ($this->VariationSpecifics = $_VariationSpecifics);
	}
	/**
	 * Get VariationSpecifics
	 * @return EbayTradingTypeNameValueListArrayType
	 */
	public function getVariationSpecifics()
	{
		return $this->VariationSpecifics;
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