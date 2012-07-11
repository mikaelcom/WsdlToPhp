<?php
/**
 * Class file for EbayTradingTypeSellerType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerType
 * Documentation : Information about a user returned in the context of an item's seller.
 * @date 04/07/2012
 */
class EbayTradingTypeSellerType extends EbayTradingWsdlClass
{
	/**
	 * The PaisaPayStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the seller's PaisaPay and PaisapayEscrow registration status. India site only.<br> 0 - Seller not registered<br> 1 - Seller registered<br> 2 - Seller registered but registration suspended<br> 3 - Seller registered but outbound payment suspended<br>
	 * @var int
	 */
	public $PaisaPayStatus;
	/**
	 * The AllowPaymentEdit
	 * Meta informations :
	 * 	- documentation : Indicates whether the user as a seller by default allows buyers to edit the total cost of an item (while in checkout). (Sellers enable this property in their My eBay user preferences on the eBay site.)
	 * @var boolean
	 */
	public $AllowPaymentEdit;
	/**
	 * The BillingCurrency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Currency type in which the user is billed seller fees.
	 * @var EbayTradingTypeCurrencyCodeType
	 */
	public $BillingCurrency;
	/**
	 * The CheckoutEnabled
	 * Meta informations :
	 * 	- documentation : Indicates whether the user as a seller has the option set to default new item listings to go through checkout. (Sellers enable this property in their My eBay user preferences on the eBay site.)
	 * @var boolean
	 */
	public $CheckoutEnabled;
	/**
	 * The CIPBankAccountStored
	 * Meta informations :
	 * 	- documentation : If true, indicates that the user has stored bank account information with eBay in order to use the "CIP in checkout" feature. Applicable to all eBay sites that support CIP as a payment method.
	 * @var boolean
	 */
	public $CIPBankAccountStored;
	/**
	 * The GoodStanding
	 * Meta informations :
	 * 	- documentation : If true, indicates that the user is in good standing with eBay. (One of the requirements for listing a new item with Immediate Payment.)
	 * @var boolean
	 */
	public $GoodStanding;
	/**
	 * The MerchandizingPref
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the seller participates in the Merchandising Manager feature. If so, the seller can set up rules for cross-promoting items from the seller's store. If not, eBay cross-promotes items as the seller's items are being viewed or purchased.
	 * @var EbayTradingTypeMerchandizingPrefCodeType
	 */
	public $MerchandizingPref;
	/**
	 * The QualifiesForB2BVAT
	 * Meta informations :
	 * 	- documentation : Indicates whether the user is subject to VAT. Users who have registered with eBay as VAT-exempt are not subject to VAT.
	 * @var boolean
	 */
	public $QualifiesForB2BVAT;
	/**
	 * The SellerGuaranteeLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Maximum level of Motor's Seller guarantee the seller is authorized to offer.
	 * @var EbayTradingTypeSellerGuaranteeLevelCodeType
	 */
	public $SellerGuaranteeLevel;
	/**
	 * The SellerLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The user's eBay PowerSeller tier. Possible values are enumerated in the SellerLevelCodeType code list. SellerInfo.SellerLevel is no longer returned in the GetUser, GetBidderList, GetSellerList, GetItem, and GetItemTransactions responses for the US, DE/AT/CH, and UK/IE sites, for version 629 and later. If you are using a version older than 629, SellerInfo.SellerLevel will still be returned. Developers should note that SellerInfo.SellerLevel could potentially be removed from other sites as well.
	 * @var EbayTradingTypeSellerLevelCodeType
	 */
	public $SellerLevel;
	/**
	 * The SellerPaymentAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Address used by eBay for purposes of billing the user for seller fees.
	 * @var EbayTradingTypeAddressType
	 */
	public $SellerPaymentAddress;
	/**
	 * The SchedulingInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for scheduling limits for the user. Conveys the minimum and maximum minutes the user may schedule listings in advance, as well as the maximum number of items the user may schedule.
	 * @var EbayTradingTypeSchedulingInfoType
	 */
	public $SchedulingInfo;
	/**
	 * The StoreOwner
	 * Meta informations :
	 * 	- documentation : Boolean value indicates whether or not the seller is an eBay Store owner.
	 * @var boolean
	 */
	public $StoreOwner;
	/**
	 * The StoreURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL for the seller's eBay Store. This field is only returned if the seller is a store owner. To determine if a seller is a Store owner, check for the <b>User.SellerInfo.StoreOwner</b> and a value of true. The eBay Stores domain that is returned in this field is based on the <b>SITEID</b> header that is passed in the request, and not on the user's registration address, as was the case prior to version 757. So, if the seller's registration county is the UK, but a <b>SITEID</b> value of 71 (France) is passed into the call, the eBay Stores domain that is returned would be stores.ebay.fr.
	 * @var anyURI
	 */
	public $StoreURL;
	/**
	 * The SellerBusinessType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Type of seller account. This value is returned if the German (ID 77), UK (ID 3), Ireland (ID 205), or eBay Motors (ID 100) sites are specified.
	 * @var EbayTradingTypeSellerBusinessCodeType
	 */
	public $SellerBusinessType;
	/**
	 * The RegisteredBusinessSeller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the user is registered as a vehicle dealer on the eBay Motors site.
	 * @var boolean
	 */
	public $RegisteredBusinessSeller;
	/**
	 * The StoreSite
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The site associated with the seller's eBay Store.
	 * @var EbayTradingTypeSiteCodeType
	 */
	public $StoreSite;
	/**
	 * The PaymentMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the method the seller selected to pay eBay with for the account. The payment methods vary from one eBay site to the next.
	 * @var EbayTradingTypeSellerPaymentMethodCodeType
	 */
	public $PaymentMethod;
	/**
	 * The ProStoresPreference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details about the checkout preferences related to the ProStores store. Returned only if set by the user. (Currently those preferences are not settable using the public API.)
	 * @var EbayTradingTypeProStoresCheckoutPreferenceType
	 */
	public $ProStoresPreference;
	/**
	 * The CharityRegistered
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the seller is a registered charity seller. If CharityRegistered is false, the user must register with the eBay Giving Works provider to list items with eBay Giving Works.
	 * @var boolean
	 */
	public $CharityRegistered;
	/**
	 * The SafePaymentExempt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the user is currently exempt from the requirement to offer at least one safe payment method (PayPal/PaisaPay or one of the credit cards specified in Item.PaymentMethods) when listing items. This value should only return true for sellers who registered before January 17, 2007. Otherwise, it should return false. This setting overrides both the site and category values for SafePaymentRequired.
	 * @var boolean
	 */
	public $SafePaymentExempt;
	/**
	 * The PaisaPayEscrowEMIStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the seller's PaisaPayEscrowEMI (Equal Monthly Installment) registration status. India site only.<br> 0 - Seller not registered<br> 1 - Seller registered<br> 7 - Seller eligible<br>
	 * @var int
	 */
	public $PaisaPayEscrowEMIStatus;
	/**
	 * The CharityAffiliationDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information about the seller's charity affiliations detail. Returned if the user is affiliated with one or more charities. Seller must be registered with the eBay Giving Works provider to be affiliated with a charity non-profit organization.
	 * @var EbayTradingTypeCharityAffiliationDetailsType
	 */
	public $CharityAffiliationDetails;
	/**
	 * The TransactionPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Percentage of the number of times a member has sold successfully vs. the number of times a member has bought an item in the preceding 365 days.
	 * @var float
	 */
	public $TransactionPercent;
	/**
	 * The IntegratedMerchantCreditCardInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the sites on which a seller has a payment gateway account (and thus the sites on which the seller can use the IntegratedMerchantCreditCard payment method). Sellers use a payment gateway account to accept online credit cards.
	 * @var EbayTradingTypeIntegratedMerchantCreditCardInfoType
	 */
	public $IntegratedMerchantCreditCardInfo;
	/**
	 * The FeatureEligibility
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains eligibility details about seller- or platform-based features. This is returned only if IncludeFeatureEligibility is set to true in the request.
	 * @var EbayTradingTypeFeatureEligibilityType
	 */
	public $FeatureEligibility;
	/**
	 * The TopRatedSeller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether seller is certified as a Top-Rated Seller, and is qualified for benefits such as final value fee discount and increased visibility in fixed-price searches. Returned when seller is a Top-Rated Seller.
	 * @var boolean
	 */
	public $TopRatedSeller;
	/**
	 * The TopRatedSellerDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains top-rated seller program details for the seller.
	 * @var EbayTradingTypeTopRatedSellerDetailsType
	 */
	public $TopRatedSellerDetails;
	/**
	 * The RecoupmentPolicyConsent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The list of the sites where a seller has agreed to the cross-border recoupment terms. <br><br> Sellers who engage in cross-border trade on sites that require a recoupment agreement, must agree to the recoupment terms before adding items to the site. This agreement allows eBay to reimburse a buyer during a dispute and then recoup the cost from the seller.
	 * @var EbayTradingTypeRecoupmentPolicyConsentType
	 */
	public $RecoupmentPolicyConsent;
	/**
	 * The DomesticRateTable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether user has created domestic rate table or not.
	 * @var boolean
	 */
	public $DomesticRateTable;
	/**
	 * The InternationalRateTable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reserved for future use.
	 * @var boolean
	 */
	public $InternationalRateTable;
	/**
	 * The SellereBayPaymentProcessStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This enumeration value indicates the current status of a DE or AT seller's account related to the new eBay payment process. <br><br> 'AcceptedUA' is returned if the DE or AT seller has accepted the supplemental user agreement for the new eBay payment process, but that same seller's account is not yet ramped up in the new eBay payment process. <br><br> 'eBayPaymentProcessEnabled' is returned if the DE or AT seller has accepted the supplemental user agreement for the new eBay payment process, and that same seller's account is ramped up in the new eBay payment process. <br><br> 'MustAcceptUA' is returned if the DE or AT seller has not accepted the supplemental user agreement for the new eBay payment process. If this is the case, the seller can find the URL to the supplemental user agreement in the <b>SellereBayPaymentProcessConsent.UserAgreementInfo.UserAgreementURL</b> field.
	 * @var EbayTradingTypeSellereBayPaymentProcessStatusCodeType
	 */
	public $SellereBayPaymentProcessStatus;
	/**
	 * The SellereBayPaymentProcessConsent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container is returned to all DE and AT sellers and consists of details of the seller's account status regarding the new eBay payment process. This information includes the seller's payout preferences and whether or not the seller has accepted the supplemental user agreement for the new eBay payment process.
	 * @var EbayTradingTypeSellereBayPaymentProcessConsentCodeType
	 */
	public $SellereBayPaymentProcessConsent;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int PaisaPayStatus
	 * @param boolean AllowPaymentEdit
	 * @param EbayTradingTypeCurrencyCodeType BillingCurrency
	 * @param boolean CheckoutEnabled
	 * @param boolean CIPBankAccountStored
	 * @param boolean GoodStanding
	 * @param EbayTradingTypeMerchandizingPrefCodeType MerchandizingPref
	 * @param boolean QualifiesForB2BVAT
	 * @param EbayTradingTypeSellerGuaranteeLevelCodeType SellerGuaranteeLevel
	 * @param EbayTradingTypeSellerLevelCodeType SellerLevel
	 * @param EbayTradingTypeAddressType SellerPaymentAddress
	 * @param EbayTradingTypeSchedulingInfoType SchedulingInfo
	 * @param boolean StoreOwner
	 * @param anyURI StoreURL
	 * @param EbayTradingTypeSellerBusinessCodeType SellerBusinessType
	 * @param boolean RegisteredBusinessSeller
	 * @param EbayTradingTypeSiteCodeType StoreSite
	 * @param EbayTradingTypeSellerPaymentMethodCodeType PaymentMethod
	 * @param EbayTradingTypeProStoresCheckoutPreferenceType ProStoresPreference
	 * @param boolean CharityRegistered
	 * @param boolean SafePaymentExempt
	 * @param int PaisaPayEscrowEMIStatus
	 * @param EbayTradingTypeCharityAffiliationDetailsType CharityAffiliationDetails
	 * @param float TransactionPercent
	 * @param EbayTradingTypeIntegratedMerchantCreditCardInfoType IntegratedMerchantCreditCardInfo
	 * @param EbayTradingTypeFeatureEligibilityType FeatureEligibility
	 * @param boolean TopRatedSeller
	 * @param EbayTradingTypeTopRatedSellerDetailsType TopRatedSellerDetails
	 * @param EbayTradingTypeRecoupmentPolicyConsentType RecoupmentPolicyConsent
	 * @param boolean DomesticRateTable
	 * @param boolean InternationalRateTable
	 * @param EbayTradingTypeSellereBayPaymentProcessStatusCodeType SellereBayPaymentProcessStatus
	 * @param EbayTradingTypeSellereBayPaymentProcessConsentCodeType SellereBayPaymentProcessConsent
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerType
	 */
	public function __construct($_PaisaPayStatus = null,$_AllowPaymentEdit = null,$_BillingCurrency = null,$_CheckoutEnabled = null,$_CIPBankAccountStored = null,$_GoodStanding = null,$_MerchandizingPref = null,$_QualifiesForB2BVAT = null,$_SellerGuaranteeLevel = null,$_SellerLevel = null,$_SellerPaymentAddress = null,$_SchedulingInfo = null,$_StoreOwner = null,$_StoreURL = null,$_SellerBusinessType = null,$_RegisteredBusinessSeller = null,$_StoreSite = null,$_PaymentMethod = null,$_ProStoresPreference = null,$_CharityRegistered = null,$_SafePaymentExempt = null,$_PaisaPayEscrowEMIStatus = null,$_CharityAffiliationDetails = null,$_TransactionPercent = null,$_IntegratedMerchantCreditCardInfo = null,$_FeatureEligibility = null,$_TopRatedSeller = null,$_TopRatedSellerDetails = null,$_RecoupmentPolicyConsent = null,$_DomesticRateTable = null,$_InternationalRateTable = null,$_SellereBayPaymentProcessStatus = null,$_SellereBayPaymentProcessConsent = null,$_any = null)
	{
		parent::__construct(array('PaisaPayStatus'=>$_PaisaPayStatus,'AllowPaymentEdit'=>$_AllowPaymentEdit,'BillingCurrency'=>$_BillingCurrency,'CheckoutEnabled'=>$_CheckoutEnabled,'CIPBankAccountStored'=>$_CIPBankAccountStored,'GoodStanding'=>$_GoodStanding,'MerchandizingPref'=>$_MerchandizingPref,'QualifiesForB2BVAT'=>$_QualifiesForB2BVAT,'SellerGuaranteeLevel'=>$_SellerGuaranteeLevel,'SellerLevel'=>$_SellerLevel,'SellerPaymentAddress'=>$_SellerPaymentAddress,'SchedulingInfo'=>$_SchedulingInfo,'StoreOwner'=>$_StoreOwner,'StoreURL'=>$_StoreURL,'SellerBusinessType'=>$_SellerBusinessType,'RegisteredBusinessSeller'=>$_RegisteredBusinessSeller,'StoreSite'=>$_StoreSite,'PaymentMethod'=>$_PaymentMethod,'ProStoresPreference'=>$_ProStoresPreference,'CharityRegistered'=>$_CharityRegistered,'SafePaymentExempt'=>$_SafePaymentExempt,'PaisaPayEscrowEMIStatus'=>$_PaisaPayEscrowEMIStatus,'CharityAffiliationDetails'=>$_CharityAffiliationDetails,'TransactionPercent'=>$_TransactionPercent,'IntegratedMerchantCreditCardInfo'=>$_IntegratedMerchantCreditCardInfo,'FeatureEligibility'=>$_FeatureEligibility,'TopRatedSeller'=>$_TopRatedSeller,'TopRatedSellerDetails'=>$_TopRatedSellerDetails,'RecoupmentPolicyConsent'=>$_RecoupmentPolicyConsent,'DomesticRateTable'=>$_DomesticRateTable,'InternationalRateTable'=>$_InternationalRateTable,'SellereBayPaymentProcessStatus'=>$_SellereBayPaymentProcessStatus,'SellereBayPaymentProcessConsent'=>$_SellereBayPaymentProcessConsent,'any'=>$_any));
	}
	/**
	 * Set PaisaPayStatus
	 * @param int PaisaPayStatus
	 * @return int
	 */
	public function setPaisaPayStatus($_PaisaPayStatus)
	{
		return ($this->PaisaPayStatus = $_PaisaPayStatus);
	}
	/**
	 * Get PaisaPayStatus
	 * @return int
	 */
	public function getPaisaPayStatus()
	{
		return $this->PaisaPayStatus;
	}
	/**
	 * Set AllowPaymentEdit
	 * @param boolean AllowPaymentEdit
	 * @return boolean
	 */
	public function setAllowPaymentEdit($_AllowPaymentEdit)
	{
		return ($this->AllowPaymentEdit = $_AllowPaymentEdit);
	}
	/**
	 * Get AllowPaymentEdit
	 * @return boolean
	 */
	public function getAllowPaymentEdit()
	{
		return $this->AllowPaymentEdit;
	}
	/**
	 * Set BillingCurrency
	 * @param CurrencyCodeType BillingCurrency
	 * @return CurrencyCodeType
	 */
	public function setBillingCurrency($_BillingCurrency)
	{
		return ($this->BillingCurrency = EbayTradingTypeCurrencyCodeType::valueIsValid($_BillingCurrency)?$_BillingCurrency:null);
	}
	/**
	 * Get BillingCurrency
	 * @return EbayTradingTypeCurrencyCodeType
	 */
	public function getBillingCurrency()
	{
		return $this->BillingCurrency;
	}
	/**
	 * Set CheckoutEnabled
	 * @param boolean CheckoutEnabled
	 * @return boolean
	 */
	public function setCheckoutEnabled($_CheckoutEnabled)
	{
		return ($this->CheckoutEnabled = $_CheckoutEnabled);
	}
	/**
	 * Get CheckoutEnabled
	 * @return boolean
	 */
	public function getCheckoutEnabled()
	{
		return $this->CheckoutEnabled;
	}
	/**
	 * Set CIPBankAccountStored
	 * @param boolean CIPBankAccountStored
	 * @return boolean
	 */
	public function setCIPBankAccountStored($_CIPBankAccountStored)
	{
		return ($this->CIPBankAccountStored = $_CIPBankAccountStored);
	}
	/**
	 * Get CIPBankAccountStored
	 * @return boolean
	 */
	public function getCIPBankAccountStored()
	{
		return $this->CIPBankAccountStored;
	}
	/**
	 * Set GoodStanding
	 * @param boolean GoodStanding
	 * @return boolean
	 */
	public function setGoodStanding($_GoodStanding)
	{
		return ($this->GoodStanding = $_GoodStanding);
	}
	/**
	 * Get GoodStanding
	 * @return boolean
	 */
	public function getGoodStanding()
	{
		return $this->GoodStanding;
	}
	/**
	 * Set MerchandizingPref
	 * @param MerchandizingPrefCodeType MerchandizingPref
	 * @return MerchandizingPrefCodeType
	 */
	public function setMerchandizingPref($_MerchandizingPref)
	{
		return ($this->MerchandizingPref = EbayTradingTypeMerchandizingPrefCodeType::valueIsValid($_MerchandizingPref)?$_MerchandizingPref:null);
	}
	/**
	 * Get MerchandizingPref
	 * @return EbayTradingTypeMerchandizingPrefCodeType
	 */
	public function getMerchandizingPref()
	{
		return $this->MerchandizingPref;
	}
	/**
	 * Set QualifiesForB2BVAT
	 * @param boolean QualifiesForB2BVAT
	 * @return boolean
	 */
	public function setQualifiesForB2BVAT($_QualifiesForB2BVAT)
	{
		return ($this->QualifiesForB2BVAT = $_QualifiesForB2BVAT);
	}
	/**
	 * Get QualifiesForB2BVAT
	 * @return boolean
	 */
	public function getQualifiesForB2BVAT()
	{
		return $this->QualifiesForB2BVAT;
	}
	/**
	 * Set SellerGuaranteeLevel
	 * @param SellerGuaranteeLevelCodeType SellerGuaranteeLevel
	 * @return SellerGuaranteeLevelCodeType
	 */
	public function setSellerGuaranteeLevel($_SellerGuaranteeLevel)
	{
		return ($this->SellerGuaranteeLevel = EbayTradingTypeSellerGuaranteeLevelCodeType::valueIsValid($_SellerGuaranteeLevel)?$_SellerGuaranteeLevel:null);
	}
	/**
	 * Get SellerGuaranteeLevel
	 * @return EbayTradingTypeSellerGuaranteeLevelCodeType
	 */
	public function getSellerGuaranteeLevel()
	{
		return $this->SellerGuaranteeLevel;
	}
	/**
	 * Set SellerLevel
	 * @param SellerLevelCodeType SellerLevel
	 * @return SellerLevelCodeType
	 */
	public function setSellerLevel($_SellerLevel)
	{
		return ($this->SellerLevel = EbayTradingTypeSellerLevelCodeType::valueIsValid($_SellerLevel)?$_SellerLevel:null);
	}
	/**
	 * Get SellerLevel
	 * @return EbayTradingTypeSellerLevelCodeType
	 */
	public function getSellerLevel()
	{
		return $this->SellerLevel;
	}
	/**
	 * Set SellerPaymentAddress
	 * @param AddressType SellerPaymentAddress
	 * @return AddressType
	 */
	public function setSellerPaymentAddress($_SellerPaymentAddress)
	{
		return ($this->SellerPaymentAddress = $_SellerPaymentAddress);
	}
	/**
	 * Get SellerPaymentAddress
	 * @return EbayTradingTypeAddressType
	 */
	public function getSellerPaymentAddress()
	{
		return $this->SellerPaymentAddress;
	}
	/**
	 * Set SchedulingInfo
	 * @param SchedulingInfoType SchedulingInfo
	 * @return SchedulingInfoType
	 */
	public function setSchedulingInfo($_SchedulingInfo)
	{
		return ($this->SchedulingInfo = $_SchedulingInfo);
	}
	/**
	 * Get SchedulingInfo
	 * @return EbayTradingTypeSchedulingInfoType
	 */
	public function getSchedulingInfo()
	{
		return $this->SchedulingInfo;
	}
	/**
	 * Set StoreOwner
	 * @param boolean StoreOwner
	 * @return boolean
	 */
	public function setStoreOwner($_StoreOwner)
	{
		return ($this->StoreOwner = $_StoreOwner);
	}
	/**
	 * Get StoreOwner
	 * @return boolean
	 */
	public function getStoreOwner()
	{
		return $this->StoreOwner;
	}
	/**
	 * Set StoreURL
	 * @param anyURI StoreURL
	 * @return anyURI
	 */
	public function setStoreURL($_StoreURL)
	{
		return ($this->StoreURL = $_StoreURL);
	}
	/**
	 * Get StoreURL
	 * @return anyURI
	 */
	public function getStoreURL()
	{
		return $this->StoreURL;
	}
	/**
	 * Set SellerBusinessType
	 * @param SellerBusinessCodeType SellerBusinessType
	 * @return SellerBusinessCodeType
	 */
	public function setSellerBusinessType($_SellerBusinessType)
	{
		return ($this->SellerBusinessType = EbayTradingTypeSellerBusinessCodeType::valueIsValid($_SellerBusinessType)?$_SellerBusinessType:null);
	}
	/**
	 * Get SellerBusinessType
	 * @return EbayTradingTypeSellerBusinessCodeType
	 */
	public function getSellerBusinessType()
	{
		return $this->SellerBusinessType;
	}
	/**
	 * Set RegisteredBusinessSeller
	 * @param boolean RegisteredBusinessSeller
	 * @return boolean
	 */
	public function setRegisteredBusinessSeller($_RegisteredBusinessSeller)
	{
		return ($this->RegisteredBusinessSeller = $_RegisteredBusinessSeller);
	}
	/**
	 * Get RegisteredBusinessSeller
	 * @return boolean
	 */
	public function getRegisteredBusinessSeller()
	{
		return $this->RegisteredBusinessSeller;
	}
	/**
	 * Set StoreSite
	 * @param SiteCodeType StoreSite
	 * @return SiteCodeType
	 */
	public function setStoreSite($_StoreSite)
	{
		return ($this->StoreSite = EbayTradingTypeSiteCodeType::valueIsValid($_StoreSite)?$_StoreSite:null);
	}
	/**
	 * Get StoreSite
	 * @return EbayTradingTypeSiteCodeType
	 */
	public function getStoreSite()
	{
		return $this->StoreSite;
	}
	/**
	 * Set PaymentMethod
	 * @param SellerPaymentMethodCodeType PaymentMethod
	 * @return SellerPaymentMethodCodeType
	 */
	public function setPaymentMethod($_PaymentMethod)
	{
		return ($this->PaymentMethod = EbayTradingTypeSellerPaymentMethodCodeType::valueIsValid($_PaymentMethod)?$_PaymentMethod:null);
	}
	/**
	 * Get PaymentMethod
	 * @return EbayTradingTypeSellerPaymentMethodCodeType
	 */
	public function getPaymentMethod()
	{
		return $this->PaymentMethod;
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
	 * Set CharityRegistered
	 * @param boolean CharityRegistered
	 * @return boolean
	 */
	public function setCharityRegistered($_CharityRegistered)
	{
		return ($this->CharityRegistered = $_CharityRegistered);
	}
	/**
	 * Get CharityRegistered
	 * @return boolean
	 */
	public function getCharityRegistered()
	{
		return $this->CharityRegistered;
	}
	/**
	 * Set SafePaymentExempt
	 * @param boolean SafePaymentExempt
	 * @return boolean
	 */
	public function setSafePaymentExempt($_SafePaymentExempt)
	{
		return ($this->SafePaymentExempt = $_SafePaymentExempt);
	}
	/**
	 * Get SafePaymentExempt
	 * @return boolean
	 */
	public function getSafePaymentExempt()
	{
		return $this->SafePaymentExempt;
	}
	/**
	 * Set PaisaPayEscrowEMIStatus
	 * @param int PaisaPayEscrowEMIStatus
	 * @return int
	 */
	public function setPaisaPayEscrowEMIStatus($_PaisaPayEscrowEMIStatus)
	{
		return ($this->PaisaPayEscrowEMIStatus = $_PaisaPayEscrowEMIStatus);
	}
	/**
	 * Get PaisaPayEscrowEMIStatus
	 * @return int
	 */
	public function getPaisaPayEscrowEMIStatus()
	{
		return $this->PaisaPayEscrowEMIStatus;
	}
	/**
	 * Set CharityAffiliationDetails
	 * @param CharityAffiliationDetailsType CharityAffiliationDetails
	 * @return CharityAffiliationDetailsType
	 */
	public function setCharityAffiliationDetails($_CharityAffiliationDetails)
	{
		return ($this->CharityAffiliationDetails = $_CharityAffiliationDetails);
	}
	/**
	 * Get CharityAffiliationDetails
	 * @return EbayTradingTypeCharityAffiliationDetailsType
	 */
	public function getCharityAffiliationDetails()
	{
		return $this->CharityAffiliationDetails;
	}
	/**
	 * Set TransactionPercent
	 * @param float TransactionPercent
	 * @return float
	 */
	public function setTransactionPercent($_TransactionPercent)
	{
		return ($this->TransactionPercent = $_TransactionPercent);
	}
	/**
	 * Get TransactionPercent
	 * @return float
	 */
	public function getTransactionPercent()
	{
		return $this->TransactionPercent;
	}
	/**
	 * Set IntegratedMerchantCreditCardInfo
	 * @param IntegratedMerchantCreditCardInfoType IntegratedMerchantCreditCardInfo
	 * @return IntegratedMerchantCreditCardInfoType
	 */
	public function setIntegratedMerchantCreditCardInfo($_IntegratedMerchantCreditCardInfo)
	{
		return ($this->IntegratedMerchantCreditCardInfo = $_IntegratedMerchantCreditCardInfo);
	}
	/**
	 * Get IntegratedMerchantCreditCardInfo
	 * @return EbayTradingTypeIntegratedMerchantCreditCardInfoType
	 */
	public function getIntegratedMerchantCreditCardInfo()
	{
		return $this->IntegratedMerchantCreditCardInfo;
	}
	/**
	 * Set FeatureEligibility
	 * @param FeatureEligibilityType FeatureEligibility
	 * @return FeatureEligibilityType
	 */
	public function setFeatureEligibility($_FeatureEligibility)
	{
		return ($this->FeatureEligibility = $_FeatureEligibility);
	}
	/**
	 * Get FeatureEligibility
	 * @return EbayTradingTypeFeatureEligibilityType
	 */
	public function getFeatureEligibility()
	{
		return $this->FeatureEligibility;
	}
	/**
	 * Set TopRatedSeller
	 * @param boolean TopRatedSeller
	 * @return boolean
	 */
	public function setTopRatedSeller($_TopRatedSeller)
	{
		return ($this->TopRatedSeller = $_TopRatedSeller);
	}
	/**
	 * Get TopRatedSeller
	 * @return boolean
	 */
	public function getTopRatedSeller()
	{
		return $this->TopRatedSeller;
	}
	/**
	 * Set TopRatedSellerDetails
	 * @param TopRatedSellerDetailsType TopRatedSellerDetails
	 * @return TopRatedSellerDetailsType
	 */
	public function setTopRatedSellerDetails($_TopRatedSellerDetails)
	{
		return ($this->TopRatedSellerDetails = $_TopRatedSellerDetails);
	}
	/**
	 * Get TopRatedSellerDetails
	 * @return EbayTradingTypeTopRatedSellerDetailsType
	 */
	public function getTopRatedSellerDetails()
	{
		return $this->TopRatedSellerDetails;
	}
	/**
	 * Set RecoupmentPolicyConsent
	 * @param RecoupmentPolicyConsentType RecoupmentPolicyConsent
	 * @return RecoupmentPolicyConsentType
	 */
	public function setRecoupmentPolicyConsent($_RecoupmentPolicyConsent)
	{
		return ($this->RecoupmentPolicyConsent = $_RecoupmentPolicyConsent);
	}
	/**
	 * Get RecoupmentPolicyConsent
	 * @return EbayTradingTypeRecoupmentPolicyConsentType
	 */
	public function getRecoupmentPolicyConsent()
	{
		return $this->RecoupmentPolicyConsent;
	}
	/**
	 * Set DomesticRateTable
	 * @param boolean DomesticRateTable
	 * @return boolean
	 */
	public function setDomesticRateTable($_DomesticRateTable)
	{
		return ($this->DomesticRateTable = $_DomesticRateTable);
	}
	/**
	 * Get DomesticRateTable
	 * @return boolean
	 */
	public function getDomesticRateTable()
	{
		return $this->DomesticRateTable;
	}
	/**
	 * Set InternationalRateTable
	 * @param boolean InternationalRateTable
	 * @return boolean
	 */
	public function setInternationalRateTable($_InternationalRateTable)
	{
		return ($this->InternationalRateTable = $_InternationalRateTable);
	}
	/**
	 * Get InternationalRateTable
	 * @return boolean
	 */
	public function getInternationalRateTable()
	{
		return $this->InternationalRateTable;
	}
	/**
	 * Set SellereBayPaymentProcessStatus
	 * @param SellereBayPaymentProcessStatusCodeType SellereBayPaymentProcessStatus
	 * @return SellereBayPaymentProcessStatusCodeType
	 */
	public function setSellereBayPaymentProcessStatus($_SellereBayPaymentProcessStatus)
	{
		return ($this->SellereBayPaymentProcessStatus = EbayTradingTypeSellereBayPaymentProcessStatusCodeType::valueIsValid($_SellereBayPaymentProcessStatus)?$_SellereBayPaymentProcessStatus:null);
	}
	/**
	 * Get SellereBayPaymentProcessStatus
	 * @return EbayTradingTypeSellereBayPaymentProcessStatusCodeType
	 */
	public function getSellereBayPaymentProcessStatus()
	{
		return $this->SellereBayPaymentProcessStatus;
	}
	/**
	 * Set SellereBayPaymentProcessConsent
	 * @param SellereBayPaymentProcessConsentCodeType SellereBayPaymentProcessConsent
	 * @return SellereBayPaymentProcessConsentCodeType
	 */
	public function setSellereBayPaymentProcessConsent($_SellereBayPaymentProcessConsent)
	{
		return ($this->SellereBayPaymentProcessConsent = $_SellereBayPaymentProcessConsent);
	}
	/**
	 * Get SellereBayPaymentProcessConsent
	 * @return EbayTradingTypeSellereBayPaymentProcessConsentCodeType
	 */
	public function getSellereBayPaymentProcessConsent()
	{
		return $this->SellereBayPaymentProcessConsent;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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