<?php
/**
 * Class file for PayPalTypeSellerType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSellerType
 * Documentation : Information about user used by selling applications there are number of required elements - they will always show up for seller node there is not such a call to do revise seller info. only added minoccur=0 to elements that will not show up in every type of request/responce
 * @date 14/07/2012
 */
class PayPalTypeSellerType extends PayPalWsdlClass
{
	/**
	 * The AllowPaymentEdit
	 * @var boolean
	 */
	public $AllowPaymentEdit;
	/**
	 * The BillingCurrency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeCurrencyCodeType
	 */
	public $BillingCurrency;
	/**
	 * The CheckoutEnabled
	 * @var boolean
	 */
	public $CheckoutEnabled;
	/**
	 * The CIPBankAccountStored
	 * @var boolean
	 */
	public $CIPBankAccountStored;
	/**
	 * The GoodStanding
	 * @var boolean
	 */
	public $GoodStanding;
	/**
	 * The LiveAuctionAuthorized
	 * @var boolean
	 */
	public $LiveAuctionAuthorized;
	/**
	 * The MerchandizingPref
	 * Meta informations :
	 * 	- documentation : Indicates whether the user has elected to participate as a seller in the Merchandising Manager feature.
	 * @var PayPalTypeMerchandizingPrefCodeType
	 */
	public $MerchandizingPref;
	/**
	 * The QualifiesForB2BVAT
	 * @var boolean
	 */
	public $QualifiesForB2BVAT;
	/**
	 * The SellerLevel
	 * @var PayPalTypeSellerLevelCodeType
	 */
	public $SellerLevel;
	/**
	 * The SellerPaymentAddress
	 * @var PayPalTypeAddressType
	 */
	public $SellerPaymentAddress;
	/**
	 * The SchedulingInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeSchedulingInfoType
	 */
	public $SchedulingInfo;
	/**
	 * The StoreOwner
	 * @var boolean
	 */
	public $StoreOwner;
	/**
	 * The StoreURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var anyURI
	 */
	public $StoreURL;
	/**
	 * Constructor
	 * @param boolean AllowPaymentEdit
	 * @param PayPalTypeCurrencyCodeType BillingCurrency
	 * @param boolean CheckoutEnabled
	 * @param boolean CIPBankAccountStored
	 * @param boolean GoodStanding
	 * @param boolean LiveAuctionAuthorized
	 * @param PayPalTypeMerchandizingPrefCodeType MerchandizingPref
	 * @param boolean QualifiesForB2BVAT
	 * @param PayPalTypeSellerLevelCodeType SellerLevel
	 * @param PayPalTypeAddressType SellerPaymentAddress
	 * @param PayPalTypeSchedulingInfoType SchedulingInfo
	 * @param boolean StoreOwner
	 * @param anyURI StoreURL
	 * @return PayPalTypeSellerType
	 */
	public function __construct($_AllowPaymentEdit = null,$_BillingCurrency = null,$_CheckoutEnabled = null,$_CIPBankAccountStored = null,$_GoodStanding = null,$_LiveAuctionAuthorized = null,$_MerchandizingPref = null,$_QualifiesForB2BVAT = null,$_SellerLevel = null,$_SellerPaymentAddress = null,$_SchedulingInfo = null,$_StoreOwner = null,$_StoreURL = null)
	{
		parent::__construct(array('AllowPaymentEdit'=>$_AllowPaymentEdit,'BillingCurrency'=>$_BillingCurrency,'CheckoutEnabled'=>$_CheckoutEnabled,'CIPBankAccountStored'=>$_CIPBankAccountStored,'GoodStanding'=>$_GoodStanding,'LiveAuctionAuthorized'=>$_LiveAuctionAuthorized,'MerchandizingPref'=>$_MerchandizingPref,'QualifiesForB2BVAT'=>$_QualifiesForB2BVAT,'SellerLevel'=>$_SellerLevel,'SellerPaymentAddress'=>$_SellerPaymentAddress,'SchedulingInfo'=>$_SchedulingInfo,'StoreOwner'=>$_StoreOwner,'StoreURL'=>$_StoreURL));
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
		return ($this->BillingCurrency = PayPalTypeCurrencyCodeType::valueIsValid($_BillingCurrency)?$_BillingCurrency:null);
	}
	/**
	 * Get BillingCurrency
	 * @return PayPalTypeCurrencyCodeType
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
	 * Set LiveAuctionAuthorized
	 * @param boolean LiveAuctionAuthorized
	 * @return boolean
	 */
	public function setLiveAuctionAuthorized($_LiveAuctionAuthorized)
	{
		return ($this->LiveAuctionAuthorized = $_LiveAuctionAuthorized);
	}
	/**
	 * Get LiveAuctionAuthorized
	 * @return boolean
	 */
	public function getLiveAuctionAuthorized()
	{
		return $this->LiveAuctionAuthorized;
	}
	/**
	 * Set MerchandizingPref
	 * @param MerchandizingPrefCodeType MerchandizingPref
	 * @return MerchandizingPrefCodeType
	 */
	public function setMerchandizingPref($_MerchandizingPref)
	{
		return ($this->MerchandizingPref = PayPalTypeMerchandizingPrefCodeType::valueIsValid($_MerchandizingPref)?$_MerchandizingPref:null);
	}
	/**
	 * Get MerchandizingPref
	 * @return PayPalTypeMerchandizingPrefCodeType
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
	 * Set SellerLevel
	 * @param SellerLevelCodeType SellerLevel
	 * @return SellerLevelCodeType
	 */
	public function setSellerLevel($_SellerLevel)
	{
		return ($this->SellerLevel = PayPalTypeSellerLevelCodeType::valueIsValid($_SellerLevel)?$_SellerLevel:null);
	}
	/**
	 * Get SellerLevel
	 * @return PayPalTypeSellerLevelCodeType
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
	 * @return PayPalTypeAddressType
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
	 * @return PayPalTypeSchedulingInfoType
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>