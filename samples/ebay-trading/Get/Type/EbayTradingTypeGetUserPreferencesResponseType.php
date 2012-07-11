<?php
/**
 * Class file for EbayTradingTypeGetUserPreferencesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetUserPreferencesResponseType
 * Documentation : Contains some or all of the authenticated user's preferences. The preferences are grouped in sets and are returned according to the flag settings in the request.
 * @date 04/07/2012
 */
class EbayTradingTypeGetUserPreferencesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The BidderNoticePreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the seller's preference for receiving contact information for unsuccessful bidders. This container is returned when ShowBidderNoticePreferences is included and set to true in the request. This preference is only applicable for auction listings.
	 * @var EbayTradingTypeBidderNoticePreferencesType
	 */
	public $BidderNoticePreferences;
	/**
	 * The CombinedPaymentPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the seller's Combined Payment preferences. This container is returned when ShowCombinedPaymentPreferences is included and set to true in the request. <br> <span class="tablenote"><strong>Note:</strong> The CombinedPaymentPreferences.CombinedPaymentOption field is the only preference that should be managed with the GetUserPreferences and SetUserPreferences calls. All other Combined Payment preferences should be managed with the SetDiscountProfiles and GetDiscountProfiles calls. </span>
	 * @var EbayTradingTypeCombinedPaymentPreferencesType
	 */
	public $CombinedPaymentPreferences;
	/**
	 * The CrossPromotionPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the seller's cross-promotion preferences. This container is returned when ShowCrossPromotionPreferences is included and set to true in the request. These preferences are only applicable for eBay Store owners.
	 * @var EbayTradingTypeCrossPromotionPreferencesType
	 */
	public $CrossPromotionPreferences;
	/**
	 * The SellerPaymentPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the seller's payment preferences. This container is returned when ShowSellerPaymentPreferences is included and set to true in the request.
	 * @var EbayTradingTypeSellerPaymentPreferencesType
	 */
	public $SellerPaymentPreferences;
	/**
	 * The SellerFavoriteItemPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the seller's preferences for displaying items on a buyer's Favorite Sellers' Items page or Favorite Sellers' Items digest. This container is returned when ShowSellerFavoriteItemPreferences is included and set to true in the request.
	 * @var EbayTradingTypeSellerFavoriteItemPreferencesType
	 */
	public $SellerFavoriteItemPreferences;
	/**
	 * The EndOfAuctionEmailPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the seller's preferences for the end-of-auction email sent to the winning bidder. This container is returned when ShowEndOfAuctionEmailPreferences is included and set to true in the request. These preferences are only applicable for auction listings.
	 * @var EbayTradingTypeEndOfAuctionEmailPreferencesType
	 */
	public $EndOfAuctionEmailPreferences;
	/**
	 * The EmailShipmentTrackingNumberPreference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the seller's preference for sending an email to the buyer with the shipping tracking number. This container is returned when ShowEmailShipmentTrackingNumberPreference is included and set to true in the request.
	 * @var boolean
	 */
	public $EmailShipmentTrackingNumberPreference;
	/**
	 * The RequiredShipPhoneNumberPreference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the seller's preference for requiring that the buyer supply a shipping phone number upon checkout. Some shipping carriers require the receiver's phone number. This container is returned when ShowRequiredShipPhoneNumberPreference is included and set to true in the request.
	 * @var boolean
	 */
	public $RequiredShipPhoneNumberPreference;
	/**
	 * The ProStoresPreference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the seller's ProStores preferences. This container is returned when ShowProStoresPreference is included and set to true in the request.
	 * @var EbayTradingTypeProStoresCheckoutPreferenceType
	 */
	public $ProStoresPreference;
	/**
	 * The UnpaidItemAssistancePreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of a seller's Unpaid Item Assistant preferences. The Unpaid Item Assistant automatically opens an Unpaid Item dispute on the behalf of the seller. This container is returned if ShowUnpaidItemAssistancePreference is included and set to true in the request. <br> <span class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item Assistant mechanism, the ShowUnpaidItemAssistanceExclusionList field must also be included and set to true in the request. Excluded buyers can be viewed in the UnpaidItemAssistancePreferences.ExcludedUser field. </span>
	 * @var EbayTradingTypeUnpaidItemAssistancePreferencesType
	 */
	public $UnpaidItemAssistancePreferences;
	/**
	 * The SellerExcludeShipToLocationPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of a list of the seller's excluded shipping locations. The returned list mirrors the seller's current Exclude shipping locations list in My eBay's Shipping Preferences. An excluded shipping location in My eBay can be an entire geographical region (such as Middle East) or only an individual country (such as Iraq). Sellers can override these default settings for an individual listing by using the Item.ShippingDetails.ExcludeShipToLocation field in the AddItem family of calls. This container is returned if the ShowSellerExcludeShipToLocationPreference field is included and set to true in the request.
	 * @var EbayTradingTypeSellerExcludeShipToLocationPreferencesType
	 */
	public $SellerExcludeShipToLocationPreferences;
	/**
	 * The PurchaseReminderEmailPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of a seller's preference for sending a purchase reminder email to buyers. This container is returned if the ShowPurchaseReminderEmailPreferences field is included and set to true in the request.
	 * @var EbayTradingTypePurchaseReminderEmailPreferencesType
	 */
	public $PurchaseReminderEmailPreferences;
	/**
	 * The SellerThirdPartyCheckoutDisabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This flag is set with the <b>SellerThirdPartyCheckoutDisabled</b> field of the <b>SetUserPreferences</b> call, and is used to disable the use of a third-party application to handle the checkout flow for a seller. If true, Third-Party Checkout is disabled and any checkout flow initiated on the seller's application is redirected to the eBay checkout flow. This field is only returned if the <b>SellerThirdPartyCheckoutDisabled</b> field has been set with the <b>SetUserPreferences</b> call.
	 * @var boolean
	 */
	public $SellerThirdPartyCheckoutDisabled;
	/**
	 * The SellerProfilePreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Parent response container for all policy-related information for a seller. Returned if ShowSellerProfilePreferences is included and set to true in the GetUserPreferences request. <br><br> <span class="tablenote"><strong>Note:</strong> Beginning with Version 763, the new Business Policies Management API and related Trading API containers/fields become available for testing in the Sandbox environment. In May 2012, Business Policies becomes fully functional and sellers can apply Business Policies profiles to live eBay listings. </span>
	 * @var EbayTradingTypeSellerProfilePreferencesType
	 */
	public $SellerProfilePreferences;
	/**
	 * Constructor
	 * @param EbayTradingTypeBidderNoticePreferencesType BidderNoticePreferences
	 * @param EbayTradingTypeCombinedPaymentPreferencesType CombinedPaymentPreferences
	 * @param EbayTradingTypeCrossPromotionPreferencesType CrossPromotionPreferences
	 * @param EbayTradingTypeSellerPaymentPreferencesType SellerPaymentPreferences
	 * @param EbayTradingTypeSellerFavoriteItemPreferencesType SellerFavoriteItemPreferences
	 * @param EbayTradingTypeEndOfAuctionEmailPreferencesType EndOfAuctionEmailPreferences
	 * @param boolean EmailShipmentTrackingNumberPreference
	 * @param boolean RequiredShipPhoneNumberPreference
	 * @param EbayTradingTypeProStoresCheckoutPreferenceType ProStoresPreference
	 * @param EbayTradingTypeUnpaidItemAssistancePreferencesType UnpaidItemAssistancePreferences
	 * @param EbayTradingTypeSellerExcludeShipToLocationPreferencesType SellerExcludeShipToLocationPreferences
	 * @param EbayTradingTypePurchaseReminderEmailPreferencesType PurchaseReminderEmailPreferences
	 * @param boolean SellerThirdPartyCheckoutDisabled
	 * @param EbayTradingTypeSellerProfilePreferencesType SellerProfilePreferences
	 * @return EbayTradingTypeGetUserPreferencesResponseType
	 */
	public function __construct($_BidderNoticePreferences = null,$_CombinedPaymentPreferences = null,$_CrossPromotionPreferences = null,$_SellerPaymentPreferences = null,$_SellerFavoriteItemPreferences = null,$_EndOfAuctionEmailPreferences = null,$_EmailShipmentTrackingNumberPreference = null,$_RequiredShipPhoneNumberPreference = null,$_ProStoresPreference = null,$_UnpaidItemAssistancePreferences = null,$_SellerExcludeShipToLocationPreferences = null,$_PurchaseReminderEmailPreferences = null,$_SellerThirdPartyCheckoutDisabled = null,$_SellerProfilePreferences = null)
	{
		EbayTradingWsdlClass::__construct(array('BidderNoticePreferences'=>$_BidderNoticePreferences,'CombinedPaymentPreferences'=>$_CombinedPaymentPreferences,'CrossPromotionPreferences'=>$_CrossPromotionPreferences,'SellerPaymentPreferences'=>$_SellerPaymentPreferences,'SellerFavoriteItemPreferences'=>$_SellerFavoriteItemPreferences,'EndOfAuctionEmailPreferences'=>$_EndOfAuctionEmailPreferences,'EmailShipmentTrackingNumberPreference'=>$_EmailShipmentTrackingNumberPreference,'RequiredShipPhoneNumberPreference'=>$_RequiredShipPhoneNumberPreference,'ProStoresPreference'=>$_ProStoresPreference,'UnpaidItemAssistancePreferences'=>$_UnpaidItemAssistancePreferences,'SellerExcludeShipToLocationPreferences'=>$_SellerExcludeShipToLocationPreferences,'PurchaseReminderEmailPreferences'=>$_PurchaseReminderEmailPreferences,'SellerThirdPartyCheckoutDisabled'=>$_SellerThirdPartyCheckoutDisabled,'SellerProfilePreferences'=>$_SellerProfilePreferences));
	}
	/**
	 * Set BidderNoticePreferences
	 * @param BidderNoticePreferencesType BidderNoticePreferences
	 * @return BidderNoticePreferencesType
	 */
	public function setBidderNoticePreferences($_BidderNoticePreferences)
	{
		return ($this->BidderNoticePreferences = $_BidderNoticePreferences);
	}
	/**
	 * Get BidderNoticePreferences
	 * @return EbayTradingTypeBidderNoticePreferencesType
	 */
	public function getBidderNoticePreferences()
	{
		return $this->BidderNoticePreferences;
	}
	/**
	 * Set CombinedPaymentPreferences
	 * @param CombinedPaymentPreferencesType CombinedPaymentPreferences
	 * @return CombinedPaymentPreferencesType
	 */
	public function setCombinedPaymentPreferences($_CombinedPaymentPreferences)
	{
		return ($this->CombinedPaymentPreferences = $_CombinedPaymentPreferences);
	}
	/**
	 * Get CombinedPaymentPreferences
	 * @return EbayTradingTypeCombinedPaymentPreferencesType
	 */
	public function getCombinedPaymentPreferences()
	{
		return $this->CombinedPaymentPreferences;
	}
	/**
	 * Set CrossPromotionPreferences
	 * @param CrossPromotionPreferencesType CrossPromotionPreferences
	 * @return CrossPromotionPreferencesType
	 */
	public function setCrossPromotionPreferences($_CrossPromotionPreferences)
	{
		return ($this->CrossPromotionPreferences = $_CrossPromotionPreferences);
	}
	/**
	 * Get CrossPromotionPreferences
	 * @return EbayTradingTypeCrossPromotionPreferencesType
	 */
	public function getCrossPromotionPreferences()
	{
		return $this->CrossPromotionPreferences;
	}
	/**
	 * Set SellerPaymentPreferences
	 * @param SellerPaymentPreferencesType SellerPaymentPreferences
	 * @return SellerPaymentPreferencesType
	 */
	public function setSellerPaymentPreferences($_SellerPaymentPreferences)
	{
		return ($this->SellerPaymentPreferences = $_SellerPaymentPreferences);
	}
	/**
	 * Get SellerPaymentPreferences
	 * @return EbayTradingTypeSellerPaymentPreferencesType
	 */
	public function getSellerPaymentPreferences()
	{
		return $this->SellerPaymentPreferences;
	}
	/**
	 * Set SellerFavoriteItemPreferences
	 * @param SellerFavoriteItemPreferencesType SellerFavoriteItemPreferences
	 * @return SellerFavoriteItemPreferencesType
	 */
	public function setSellerFavoriteItemPreferences($_SellerFavoriteItemPreferences)
	{
		return ($this->SellerFavoriteItemPreferences = $_SellerFavoriteItemPreferences);
	}
	/**
	 * Get SellerFavoriteItemPreferences
	 * @return EbayTradingTypeSellerFavoriteItemPreferencesType
	 */
	public function getSellerFavoriteItemPreferences()
	{
		return $this->SellerFavoriteItemPreferences;
	}
	/**
	 * Set EndOfAuctionEmailPreferences
	 * @param EndOfAuctionEmailPreferencesType EndOfAuctionEmailPreferences
	 * @return EndOfAuctionEmailPreferencesType
	 */
	public function setEndOfAuctionEmailPreferences($_EndOfAuctionEmailPreferences)
	{
		return ($this->EndOfAuctionEmailPreferences = $_EndOfAuctionEmailPreferences);
	}
	/**
	 * Get EndOfAuctionEmailPreferences
	 * @return EbayTradingTypeEndOfAuctionEmailPreferencesType
	 */
	public function getEndOfAuctionEmailPreferences()
	{
		return $this->EndOfAuctionEmailPreferences;
	}
	/**
	 * Set EmailShipmentTrackingNumberPreference
	 * @param boolean EmailShipmentTrackingNumberPreference
	 * @return boolean
	 */
	public function setEmailShipmentTrackingNumberPreference($_EmailShipmentTrackingNumberPreference)
	{
		return ($this->EmailShipmentTrackingNumberPreference = $_EmailShipmentTrackingNumberPreference);
	}
	/**
	 * Get EmailShipmentTrackingNumberPreference
	 * @return boolean
	 */
	public function getEmailShipmentTrackingNumberPreference()
	{
		return $this->EmailShipmentTrackingNumberPreference;
	}
	/**
	 * Set RequiredShipPhoneNumberPreference
	 * @param boolean RequiredShipPhoneNumberPreference
	 * @return boolean
	 */
	public function setRequiredShipPhoneNumberPreference($_RequiredShipPhoneNumberPreference)
	{
		return ($this->RequiredShipPhoneNumberPreference = $_RequiredShipPhoneNumberPreference);
	}
	/**
	 * Get RequiredShipPhoneNumberPreference
	 * @return boolean
	 */
	public function getRequiredShipPhoneNumberPreference()
	{
		return $this->RequiredShipPhoneNumberPreference;
	}
	/**
	 * Set ProStoresPreference
	 * @param ProStoresCheckoutPreferenceType ProStoresPreference
	 * @return ProStoresCheckoutPreferenceType
	 */
	public function setProStoresPreference($_ProStoresPreference)
	{
		return ($this->ProStoresPreference = $_ProStoresPreference);
	}
	/**
	 * Get ProStoresPreference
	 * @return EbayTradingTypeProStoresCheckoutPreferenceType
	 */
	public function getProStoresPreference()
	{
		return $this->ProStoresPreference;
	}
	/**
	 * Set UnpaidItemAssistancePreferences
	 * @param UnpaidItemAssistancePreferencesType UnpaidItemAssistancePreferences
	 * @return UnpaidItemAssistancePreferencesType
	 */
	public function setUnpaidItemAssistancePreferences($_UnpaidItemAssistancePreferences)
	{
		return ($this->UnpaidItemAssistancePreferences = $_UnpaidItemAssistancePreferences);
	}
	/**
	 * Get UnpaidItemAssistancePreferences
	 * @return EbayTradingTypeUnpaidItemAssistancePreferencesType
	 */
	public function getUnpaidItemAssistancePreferences()
	{
		return $this->UnpaidItemAssistancePreferences;
	}
	/**
	 * Set SellerExcludeShipToLocationPreferences
	 * @param SellerExcludeShipToLocationPreferencesType SellerExcludeShipToLocationPreferences
	 * @return SellerExcludeShipToLocationPreferencesType
	 */
	public function setSellerExcludeShipToLocationPreferences($_SellerExcludeShipToLocationPreferences)
	{
		return ($this->SellerExcludeShipToLocationPreferences = $_SellerExcludeShipToLocationPreferences);
	}
	/**
	 * Get SellerExcludeShipToLocationPreferences
	 * @return EbayTradingTypeSellerExcludeShipToLocationPreferencesType
	 */
	public function getSellerExcludeShipToLocationPreferences()
	{
		return $this->SellerExcludeShipToLocationPreferences;
	}
	/**
	 * Set PurchaseReminderEmailPreferences
	 * @param PurchaseReminderEmailPreferencesType PurchaseReminderEmailPreferences
	 * @return PurchaseReminderEmailPreferencesType
	 */
	public function setPurchaseReminderEmailPreferences($_PurchaseReminderEmailPreferences)
	{
		return ($this->PurchaseReminderEmailPreferences = $_PurchaseReminderEmailPreferences);
	}
	/**
	 * Get PurchaseReminderEmailPreferences
	 * @return EbayTradingTypePurchaseReminderEmailPreferencesType
	 */
	public function getPurchaseReminderEmailPreferences()
	{
		return $this->PurchaseReminderEmailPreferences;
	}
	/**
	 * Set SellerThirdPartyCheckoutDisabled
	 * @param boolean SellerThirdPartyCheckoutDisabled
	 * @return boolean
	 */
	public function setSellerThirdPartyCheckoutDisabled($_SellerThirdPartyCheckoutDisabled)
	{
		return ($this->SellerThirdPartyCheckoutDisabled = $_SellerThirdPartyCheckoutDisabled);
	}
	/**
	 * Get SellerThirdPartyCheckoutDisabled
	 * @return boolean
	 */
	public function getSellerThirdPartyCheckoutDisabled()
	{
		return $this->SellerThirdPartyCheckoutDisabled;
	}
	/**
	 * Set SellerProfilePreferences
	 * @param SellerProfilePreferencesType SellerProfilePreferences
	 * @return SellerProfilePreferencesType
	 */
	public function setSellerProfilePreferences($_SellerProfilePreferences)
	{
		return ($this->SellerProfilePreferences = $_SellerProfilePreferences);
	}
	/**
	 * Get SellerProfilePreferences
	 * @return EbayTradingTypeSellerProfilePreferencesType
	 */
	public function getSellerProfilePreferences()
	{
		return $this->SellerProfilePreferences;
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