<?php
/**
 * Class file for EbayTradingTypeSetUserPreferencesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetUserPreferencesRequestType
 * Documentation : Sets the authenticated user's preferences to those specified in the request.
 * @date 04/07/2012
 */
class EbayTradingTypeSetUserPreferencesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The BidderNoticePreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the seller's preference for receiving contact information for unsuccessful bidders. This preference is only applicable for auction listings.
	 * @var EbayTradingTypeBidderNoticePreferencesType
	 */
	public $BidderNoticePreferences;
	/**
	 * The CombinedPaymentPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the seller's Combined Payment preferences. <br> <span class="tablenote"><strong>Note:</strong> This container's CalculatedShippingPreferences and FlatShippingPreferences child containers should no longer be used. Instead, use the SetShippingDiscountProfiles call to set the shipping rates for combined payment orders. </span> <br> <span class="tablenote"><strong>Note:</strong> A seller's Combined Payment preferences can take up to 7 days to have any logical or functional effect on eBay. </span>
	 * @var EbayTradingTypeCombinedPaymentPreferencesType
	 */
	public $CombinedPaymentPreferences;
	/**
	 * The CrossPromotionPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the seller's cross-promotion preferences. These preferences are only applicable for eBay Store owners. One or more preferences may be set or modified under this field.
	 * @var EbayTradingTypeCrossPromotionPreferencesType
	 */
	public $CrossPromotionPreferences;
	/**
	 * The SellerPaymentPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the seller's payment preferences. One or more preferences may be set or modified under this field.
	 * @var EbayTradingTypeSellerPaymentPreferencesType
	 */
	public $SellerPaymentPreferences;
	/**
	 * The SellerFavoriteItemPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the seller's preferences for displaying items on a buyer's Favorite Sellers' Items page or Favorite Sellers' Items digest. One or more preferences may be set or modified under this field.
	 * @var EbayTradingTypeSellerFavoriteItemPreferencesType
	 */
	public $SellerFavoriteItemPreferences;
	/**
	 * The EndOfAuctionEmailPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the seller's preferences for the end-of-auction email sent to the winning bidder. These preferences allow the seller to customize the Email that is sent to buyer at the end of the auction. One or more preferences may be set or modified under this field. These preferences are only applicable for auction listings.
	 * @var EbayTradingTypeEndOfAuctionEmailPreferencesType
	 */
	public $EndOfAuctionEmailPreferences;
	/**
	 * The EmailShipmentTrackingNumberPreference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Flag that controls whether the shipment's tracking number is sent by Email from the seller to the buyer.
	 * @var boolean
	 */
	public $EmailShipmentTrackingNumberPreference;
	/**
	 * The RequiredShipPhoneNumberPreference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Flag that controls whether the buyer is required to provide a shipping phone number upon checkout. Some shipping carriers require the receiver's phone number.
	 * @var boolean
	 */
	public $RequiredShipPhoneNumberPreference;
	/**
	 * The UnpaidItemAssistancePreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of a seller's Unpaid Item Assistant preferences. The Unpaid Item Assistant automatically opens an Unpaid Item dispute on the behalf of the seller. One or more preferences may be set or modified under this field.
	 * @var EbayTradingTypeUnpaidItemAssistancePreferencesType
	 */
	public $UnpaidItemAssistancePreferences;
	/**
	 * The PurchaseReminderEmailPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of a seller's preference for sending a purchase reminder email to buyers.
	 * @var EbayTradingTypePurchaseReminderEmailPreferencesType
	 */
	public $PurchaseReminderEmailPreferences;
	/**
	 * The SellerThirdPartyCheckoutDisabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A flag used to disable the use of a third-party application to handle the checkout flow for a seller. If set to true, Third-Party Checkout is disabled and any checkout flow initiated on the seller's application is redirected to the eBay checkout flow.
	 * @var boolean
	 */
	public $SellerThirdPartyCheckoutDisabled;
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
	 * @param EbayTradingTypeUnpaidItemAssistancePreferencesType UnpaidItemAssistancePreferences
	 * @param EbayTradingTypePurchaseReminderEmailPreferencesType PurchaseReminderEmailPreferences
	 * @param boolean SellerThirdPartyCheckoutDisabled
	 * @return EbayTradingTypeSetUserPreferencesRequestType
	 */
	public function __construct($_BidderNoticePreferences = null,$_CombinedPaymentPreferences = null,$_CrossPromotionPreferences = null,$_SellerPaymentPreferences = null,$_SellerFavoriteItemPreferences = null,$_EndOfAuctionEmailPreferences = null,$_EmailShipmentTrackingNumberPreference = null,$_RequiredShipPhoneNumberPreference = null,$_UnpaidItemAssistancePreferences = null,$_PurchaseReminderEmailPreferences = null,$_SellerThirdPartyCheckoutDisabled = null)
	{
		EbayTradingWsdlClass::__construct(array('BidderNoticePreferences'=>$_BidderNoticePreferences,'CombinedPaymentPreferences'=>$_CombinedPaymentPreferences,'CrossPromotionPreferences'=>$_CrossPromotionPreferences,'SellerPaymentPreferences'=>$_SellerPaymentPreferences,'SellerFavoriteItemPreferences'=>$_SellerFavoriteItemPreferences,'EndOfAuctionEmailPreferences'=>$_EndOfAuctionEmailPreferences,'EmailShipmentTrackingNumberPreference'=>$_EmailShipmentTrackingNumberPreference,'RequiredShipPhoneNumberPreference'=>$_RequiredShipPhoneNumberPreference,'UnpaidItemAssistancePreferences'=>$_UnpaidItemAssistancePreferences,'PurchaseReminderEmailPreferences'=>$_PurchaseReminderEmailPreferences,'SellerThirdPartyCheckoutDisabled'=>$_SellerThirdPartyCheckoutDisabled));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>