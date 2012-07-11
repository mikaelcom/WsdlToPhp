<?php
/**
 * Class file for EbayTradingTypeGetUserPreferencesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetUserPreferencesRequestType
 * Documentation : Retrieves the specified user preferences for the authenticated caller.
 * @date 04/07/2012
 */
class EbayTradingTypeGetUserPreferencesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ShowBidderNoticePreferences
	 * Meta informations :
	 * 	- documentation : If included and set to true, the seller's preference for receiving contact information for unsuccessful bidders is returned in the response.
	 * @var boolean
	 */
	public $ShowBidderNoticePreferences;
	/**
	 * The ShowCombinedPaymentPreferences
	 * Meta informations :
	 * 	- documentation : If included and set to true, the seller's combined payment preferences are returned in the response. <br><br> <span class="tablenote"><strong>Note:</strong> The CombinedPaymentPreferences.CombinedPaymentOption field is the only preference that should be managed with the GetUserPreferences and SetUserPreferences calls. All other Combined Payment preferences should be managed with the SetDiscountProfiles and GetDiscountProfiles calls. </span>
	 * @var boolean
	 */
	public $ShowCombinedPaymentPreferences;
	/**
	 * The ShowCrossPromotionPreferences
	 * Meta informations :
	 * 	- documentation : If included and set to true, the seller's cross-promotion preferences are returned in the response. These preferences are only applicable for eBay Store owners.
	 * @var boolean
	 */
	public $ShowCrossPromotionPreferences;
	/**
	 * The ShowSellerPaymentPreferences
	 * Meta informations :
	 * 	- documentation : If included and set to true, the seller's payment preferences are returned in the response.
	 * @var boolean
	 */
	public $ShowSellerPaymentPreferences;
	/**
	 * The ShowEndOfAuctionEmailPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If included and set to true, the seller's preferences for the end-of-auction email sent to the winning bidder is returned in the response. These preferences are only applicable for auction listings.
	 * @var boolean
	 */
	public $ShowEndOfAuctionEmailPreferences;
	/**
	 * The ShowSellerFavoriteItemPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If included and set to true, the seller's favorite item preferences are returned in the response.
	 * @var boolean
	 */
	public $ShowSellerFavoriteItemPreferences;
	/**
	 * The ShowProStoresPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If included and set to true, the seller's ProStores preferences are returned in the response.
	 * @var boolean
	 */
	public $ShowProStoresPreferences;
	/**
	 * The ShowEmailShipmentTrackingNumberPreference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If included and set to true, the seller's preference for sending an email to the buyer with the shipping tracking number is returned in the response.
	 * @var boolean
	 */
	public $ShowEmailShipmentTrackingNumberPreference;
	/**
	 * The ShowRequiredShipPhoneNumberPreference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If included and set to true, the seller's preference for requiring that the buyer supply a shipping phone number upon checkout is returned in the response. Some shipping carriers require the receiver's phone number.
	 * @var boolean
	 */
	public $ShowRequiredShipPhoneNumberPreference;
	/**
	 * The ShowSellerExcludeShipToLocationPreference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If included and set to true, all of the seller's excluded shipping locations are returned in the response. The returned list mirrors the seller's current Exclude shipping locations list in My eBay's Shipping Preferences. An excluded shipping location in My eBay can be an entire geographical region (such as Middle East) or only an individual country (such as Iraq). Sellers can override these default settings for an individual listing by using the Item.ShippingDetails.ExcludeShipToLocation field in the AddItem family of calls.
	 * @var boolean
	 */
	public $ShowSellerExcludeShipToLocationPreference;
	/**
	 * The ShowUnpaidItemAssistancePreference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If included and set to true, the seller's Unpaid Item Assistant preferences are returned in the response. The Unpaid Item Assistant automatically opens an Unpaid Item dispute on the behalf of the seller. <br><br> <span class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item Assistant mechanism, the ShowUnpaidItemAssistanceExclusionList field must also be included and set to true in the request. Excluded buyers can be viewed in the UnpaidItemAssistancePreferences.ExcludedUser field. </span>
	 * @var boolean
	 */
	public $ShowUnpaidItemAssistancePreference;
	/**
	 * The ShowPurchaseReminderEmailPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If included and set to true, the seller's preference for sending a purchase reminder email to buyers is returned in the response.
	 * @var boolean
	 */
	public $ShowPurchaseReminderEmailPreferences;
	/**
	 * The ShowUnpaidItemAssistanceExclusionList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If included and set to true, the list of eBay user IDs on the Unpaid Item Assistant Excluded User list is returned through the UnpaidItemAssistancePreferences.ExcludedUser field in the response. For excluded users, an Unpaid Item dispute is not automatically filed through the UPI Assistance mechanism. The Excluded User list is managed through the SetUserPreferences call. <br><br> <span class="tablenote"><strong>Note:</strong> To return the list of buyers excluded from the Unpaid Item Assistant mechanism, the ShowUnpaidItemAssistancePreference field must also be included and set to true in the request. </span>
	 * @var boolean
	 */
	public $ShowUnpaidItemAssistanceExclusionList;
	/**
	 * The ShowSellerProfilePreferences
	 * Meta informations :
	 * 	- documentation : If this flag is included and set to true, the seller's Business Policies profile information is returned in the response. This information includes a flag that indicates whether or not the seller has opted into Business Policies, as well as Business Policies profiles (payment, shipping, and return policy) active on the seller's account. <br><br> <span class="tablenote"><strong>Note:</strong> Business Policies are not yet available for use on the eBay platform. </span>
	 * @var boolean
	 */
	public $ShowSellerProfilePreferences;
	/**
	 * Constructor
	 * @param boolean ShowBidderNoticePreferences
	 * @param boolean ShowCombinedPaymentPreferences
	 * @param boolean ShowCrossPromotionPreferences
	 * @param boolean ShowSellerPaymentPreferences
	 * @param boolean ShowEndOfAuctionEmailPreferences
	 * @param boolean ShowSellerFavoriteItemPreferences
	 * @param boolean ShowProStoresPreferences
	 * @param boolean ShowEmailShipmentTrackingNumberPreference
	 * @param boolean ShowRequiredShipPhoneNumberPreference
	 * @param boolean ShowSellerExcludeShipToLocationPreference
	 * @param boolean ShowUnpaidItemAssistancePreference
	 * @param boolean ShowPurchaseReminderEmailPreferences
	 * @param boolean ShowUnpaidItemAssistanceExclusionList
	 * @param boolean ShowSellerProfilePreferences
	 * @return EbayTradingTypeGetUserPreferencesRequestType
	 */
	public function __construct($_ShowBidderNoticePreferences = null,$_ShowCombinedPaymentPreferences = null,$_ShowCrossPromotionPreferences = null,$_ShowSellerPaymentPreferences = null,$_ShowEndOfAuctionEmailPreferences = null,$_ShowSellerFavoriteItemPreferences = null,$_ShowProStoresPreferences = null,$_ShowEmailShipmentTrackingNumberPreference = null,$_ShowRequiredShipPhoneNumberPreference = null,$_ShowSellerExcludeShipToLocationPreference = null,$_ShowUnpaidItemAssistancePreference = null,$_ShowPurchaseReminderEmailPreferences = null,$_ShowUnpaidItemAssistanceExclusionList = null,$_ShowSellerProfilePreferences = null)
	{
		EbayTradingWsdlClass::__construct(array('ShowBidderNoticePreferences'=>$_ShowBidderNoticePreferences,'ShowCombinedPaymentPreferences'=>$_ShowCombinedPaymentPreferences,'ShowCrossPromotionPreferences'=>$_ShowCrossPromotionPreferences,'ShowSellerPaymentPreferences'=>$_ShowSellerPaymentPreferences,'ShowEndOfAuctionEmailPreferences'=>$_ShowEndOfAuctionEmailPreferences,'ShowSellerFavoriteItemPreferences'=>$_ShowSellerFavoriteItemPreferences,'ShowProStoresPreferences'=>$_ShowProStoresPreferences,'ShowEmailShipmentTrackingNumberPreference'=>$_ShowEmailShipmentTrackingNumberPreference,'ShowRequiredShipPhoneNumberPreference'=>$_ShowRequiredShipPhoneNumberPreference,'ShowSellerExcludeShipToLocationPreference'=>$_ShowSellerExcludeShipToLocationPreference,'ShowUnpaidItemAssistancePreference'=>$_ShowUnpaidItemAssistancePreference,'ShowPurchaseReminderEmailPreferences'=>$_ShowPurchaseReminderEmailPreferences,'ShowUnpaidItemAssistanceExclusionList'=>$_ShowUnpaidItemAssistanceExclusionList,'ShowSellerProfilePreferences'=>$_ShowSellerProfilePreferences));
	}
	/**
	 * Set ShowBidderNoticePreferences
	 * @param boolean ShowBidderNoticePreferences
	 * @return boolean
	 */
	public function setShowBidderNoticePreferences($_ShowBidderNoticePreferences)
	{
		return ($this->ShowBidderNoticePreferences = $_ShowBidderNoticePreferences);
	}
	/**
	 * Get ShowBidderNoticePreferences
	 * @return boolean
	 */
	public function getShowBidderNoticePreferences()
	{
		return $this->ShowBidderNoticePreferences;
	}
	/**
	 * Set ShowCombinedPaymentPreferences
	 * @param boolean ShowCombinedPaymentPreferences
	 * @return boolean
	 */
	public function setShowCombinedPaymentPreferences($_ShowCombinedPaymentPreferences)
	{
		return ($this->ShowCombinedPaymentPreferences = $_ShowCombinedPaymentPreferences);
	}
	/**
	 * Get ShowCombinedPaymentPreferences
	 * @return boolean
	 */
	public function getShowCombinedPaymentPreferences()
	{
		return $this->ShowCombinedPaymentPreferences;
	}
	/**
	 * Set ShowCrossPromotionPreferences
	 * @param boolean ShowCrossPromotionPreferences
	 * @return boolean
	 */
	public function setShowCrossPromotionPreferences($_ShowCrossPromotionPreferences)
	{
		return ($this->ShowCrossPromotionPreferences = $_ShowCrossPromotionPreferences);
	}
	/**
	 * Get ShowCrossPromotionPreferences
	 * @return boolean
	 */
	public function getShowCrossPromotionPreferences()
	{
		return $this->ShowCrossPromotionPreferences;
	}
	/**
	 * Set ShowSellerPaymentPreferences
	 * @param boolean ShowSellerPaymentPreferences
	 * @return boolean
	 */
	public function setShowSellerPaymentPreferences($_ShowSellerPaymentPreferences)
	{
		return ($this->ShowSellerPaymentPreferences = $_ShowSellerPaymentPreferences);
	}
	/**
	 * Get ShowSellerPaymentPreferences
	 * @return boolean
	 */
	public function getShowSellerPaymentPreferences()
	{
		return $this->ShowSellerPaymentPreferences;
	}
	/**
	 * Set ShowEndOfAuctionEmailPreferences
	 * @param boolean ShowEndOfAuctionEmailPreferences
	 * @return boolean
	 */
	public function setShowEndOfAuctionEmailPreferences($_ShowEndOfAuctionEmailPreferences)
	{
		return ($this->ShowEndOfAuctionEmailPreferences = $_ShowEndOfAuctionEmailPreferences);
	}
	/**
	 * Get ShowEndOfAuctionEmailPreferences
	 * @return boolean
	 */
	public function getShowEndOfAuctionEmailPreferences()
	{
		return $this->ShowEndOfAuctionEmailPreferences;
	}
	/**
	 * Set ShowSellerFavoriteItemPreferences
	 * @param boolean ShowSellerFavoriteItemPreferences
	 * @return boolean
	 */
	public function setShowSellerFavoriteItemPreferences($_ShowSellerFavoriteItemPreferences)
	{
		return ($this->ShowSellerFavoriteItemPreferences = $_ShowSellerFavoriteItemPreferences);
	}
	/**
	 * Get ShowSellerFavoriteItemPreferences
	 * @return boolean
	 */
	public function getShowSellerFavoriteItemPreferences()
	{
		return $this->ShowSellerFavoriteItemPreferences;
	}
	/**
	 * Set ShowProStoresPreferences
	 * @param boolean ShowProStoresPreferences
	 * @return boolean
	 */
	public function setShowProStoresPreferences($_ShowProStoresPreferences)
	{
		return ($this->ShowProStoresPreferences = $_ShowProStoresPreferences);
	}
	/**
	 * Get ShowProStoresPreferences
	 * @return boolean
	 */
	public function getShowProStoresPreferences()
	{
		return $this->ShowProStoresPreferences;
	}
	/**
	 * Set ShowEmailShipmentTrackingNumberPreference
	 * @param boolean ShowEmailShipmentTrackingNumberPreference
	 * @return boolean
	 */
	public function setShowEmailShipmentTrackingNumberPreference($_ShowEmailShipmentTrackingNumberPreference)
	{
		return ($this->ShowEmailShipmentTrackingNumberPreference = $_ShowEmailShipmentTrackingNumberPreference);
	}
	/**
	 * Get ShowEmailShipmentTrackingNumberPreference
	 * @return boolean
	 */
	public function getShowEmailShipmentTrackingNumberPreference()
	{
		return $this->ShowEmailShipmentTrackingNumberPreference;
	}
	/**
	 * Set ShowRequiredShipPhoneNumberPreference
	 * @param boolean ShowRequiredShipPhoneNumberPreference
	 * @return boolean
	 */
	public function setShowRequiredShipPhoneNumberPreference($_ShowRequiredShipPhoneNumberPreference)
	{
		return ($this->ShowRequiredShipPhoneNumberPreference = $_ShowRequiredShipPhoneNumberPreference);
	}
	/**
	 * Get ShowRequiredShipPhoneNumberPreference
	 * @return boolean
	 */
	public function getShowRequiredShipPhoneNumberPreference()
	{
		return $this->ShowRequiredShipPhoneNumberPreference;
	}
	/**
	 * Set ShowSellerExcludeShipToLocationPreference
	 * @param boolean ShowSellerExcludeShipToLocationPreference
	 * @return boolean
	 */
	public function setShowSellerExcludeShipToLocationPreference($_ShowSellerExcludeShipToLocationPreference)
	{
		return ($this->ShowSellerExcludeShipToLocationPreference = $_ShowSellerExcludeShipToLocationPreference);
	}
	/**
	 * Get ShowSellerExcludeShipToLocationPreference
	 * @return boolean
	 */
	public function getShowSellerExcludeShipToLocationPreference()
	{
		return $this->ShowSellerExcludeShipToLocationPreference;
	}
	/**
	 * Set ShowUnpaidItemAssistancePreference
	 * @param boolean ShowUnpaidItemAssistancePreference
	 * @return boolean
	 */
	public function setShowUnpaidItemAssistancePreference($_ShowUnpaidItemAssistancePreference)
	{
		return ($this->ShowUnpaidItemAssistancePreference = $_ShowUnpaidItemAssistancePreference);
	}
	/**
	 * Get ShowUnpaidItemAssistancePreference
	 * @return boolean
	 */
	public function getShowUnpaidItemAssistancePreference()
	{
		return $this->ShowUnpaidItemAssistancePreference;
	}
	/**
	 * Set ShowPurchaseReminderEmailPreferences
	 * @param boolean ShowPurchaseReminderEmailPreferences
	 * @return boolean
	 */
	public function setShowPurchaseReminderEmailPreferences($_ShowPurchaseReminderEmailPreferences)
	{
		return ($this->ShowPurchaseReminderEmailPreferences = $_ShowPurchaseReminderEmailPreferences);
	}
	/**
	 * Get ShowPurchaseReminderEmailPreferences
	 * @return boolean
	 */
	public function getShowPurchaseReminderEmailPreferences()
	{
		return $this->ShowPurchaseReminderEmailPreferences;
	}
	/**
	 * Set ShowUnpaidItemAssistanceExclusionList
	 * @param boolean ShowUnpaidItemAssistanceExclusionList
	 * @return boolean
	 */
	public function setShowUnpaidItemAssistanceExclusionList($_ShowUnpaidItemAssistanceExclusionList)
	{
		return ($this->ShowUnpaidItemAssistanceExclusionList = $_ShowUnpaidItemAssistanceExclusionList);
	}
	/**
	 * Get ShowUnpaidItemAssistanceExclusionList
	 * @return boolean
	 */
	public function getShowUnpaidItemAssistanceExclusionList()
	{
		return $this->ShowUnpaidItemAssistanceExclusionList;
	}
	/**
	 * Set ShowSellerProfilePreferences
	 * @param boolean ShowSellerProfilePreferences
	 * @return boolean
	 */
	public function setShowSellerProfilePreferences($_ShowSellerProfilePreferences)
	{
		return ($this->ShowSellerProfilePreferences = $_ShowSellerProfilePreferences);
	}
	/**
	 * Get ShowSellerProfilePreferences
	 * @return boolean
	 */
	public function getShowSellerProfilePreferences()
	{
		return $this->ShowSellerProfilePreferences;
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