<?php
/**
 * Class file for EbayTradingTypeSellerPaymentPreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerPaymentPreferencesType
 * Documentation : Defines the values that make up the seller's preferences.
 * @date 04/07/2012
 */
class EbayTradingTypeSellerPaymentPreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The AlwaysUseThisPaymentAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the seller wants all transactions with eBay to use the address specified in SellerPaymentPreferences.SellerPaymentAddress.
	 * @var boolean
	 */
	public $AlwaysUseThisPaymentAddress;
	/**
	 * The DisplayPayNowButton
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Determines whether the Pay Now button should always be displayed for the user's listings.
	 * @var EbayTradingTypeDisplayPayNowButtonCodeType
	 */
	public $DisplayPayNowButton;
	/**
	 * The PayPalPreferred
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether a seller wants to let buyers know that PayPal payments are preferred.
	 * @var boolean
	 */
	public $PayPalPreferred;
	/**
	 * The DefaultPayPalEmailAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the default email address the seller uses for receiving PayPal payments.
	 * @var string
	 */
	public $DefaultPayPalEmailAddress;
	/**
	 * The PayPalAlwaysOn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether PayPal is always accepted for the seller's listings.
	 * @var boolean
	 */
	public $PayPalAlwaysOn;
	/**
	 * The SellerPaymentAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the address the seller uses to receive payments from buyers.
	 * @var EbayTradingTypeAddressType
	 */
	public $SellerPaymentAddress;
	/**
	 * The UPSRateOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the type of United Parcel Service rates to use.
	 * @var EbayTradingTypeUPSRateOptionCodeType
	 */
	public $UPSRateOption;
	/**
	 * The FedExRateOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the type of FedEx rates to use.
	 * @var EbayTradingTypeFedExRateOptionCodeType
	 */
	public $FedExRateOption;
	/**
	 * The USPSRateOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the type of USPS rates to use.
	 * @var EbayTradingTypeUSPSRateOptionCodeType
	 */
	public $USPSRateOption;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean AlwaysUseThisPaymentAddress
	 * @param EbayTradingTypeDisplayPayNowButtonCodeType DisplayPayNowButton
	 * @param boolean PayPalPreferred
	 * @param string DefaultPayPalEmailAddress
	 * @param boolean PayPalAlwaysOn
	 * @param EbayTradingTypeAddressType SellerPaymentAddress
	 * @param EbayTradingTypeUPSRateOptionCodeType UPSRateOption
	 * @param EbayTradingTypeFedExRateOptionCodeType FedExRateOption
	 * @param EbayTradingTypeUSPSRateOptionCodeType USPSRateOption
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerPaymentPreferencesType
	 */
	public function __construct($_AlwaysUseThisPaymentAddress = null,$_DisplayPayNowButton = null,$_PayPalPreferred = null,$_DefaultPayPalEmailAddress = null,$_PayPalAlwaysOn = null,$_SellerPaymentAddress = null,$_UPSRateOption = null,$_FedExRateOption = null,$_USPSRateOption = null,$_any = null)
	{
		parent::__construct(array('AlwaysUseThisPaymentAddress'=>$_AlwaysUseThisPaymentAddress,'DisplayPayNowButton'=>$_DisplayPayNowButton,'PayPalPreferred'=>$_PayPalPreferred,'DefaultPayPalEmailAddress'=>$_DefaultPayPalEmailAddress,'PayPalAlwaysOn'=>$_PayPalAlwaysOn,'SellerPaymentAddress'=>$_SellerPaymentAddress,'UPSRateOption'=>$_UPSRateOption,'FedExRateOption'=>$_FedExRateOption,'USPSRateOption'=>$_USPSRateOption,'any'=>$_any));
	}
	/**
	 * Set AlwaysUseThisPaymentAddress
	 * @param boolean AlwaysUseThisPaymentAddress
	 * @return boolean
	 */
	public function setAlwaysUseThisPaymentAddress($_AlwaysUseThisPaymentAddress)
	{
		return ($this->AlwaysUseThisPaymentAddress = $_AlwaysUseThisPaymentAddress);
	}
	/**
	 * Get AlwaysUseThisPaymentAddress
	 * @return boolean
	 */
	public function getAlwaysUseThisPaymentAddress()
	{
		return $this->AlwaysUseThisPaymentAddress;
	}
	/**
	 * Set DisplayPayNowButton
	 * @param DisplayPayNowButtonCodeType DisplayPayNowButton
	 * @return DisplayPayNowButtonCodeType
	 */
	public function setDisplayPayNowButton($_DisplayPayNowButton)
	{
		return ($this->DisplayPayNowButton = EbayTradingTypeDisplayPayNowButtonCodeType::valueIsValid($_DisplayPayNowButton)?$_DisplayPayNowButton:null);
	}
	/**
	 * Get DisplayPayNowButton
	 * @return EbayTradingTypeDisplayPayNowButtonCodeType
	 */
	public function getDisplayPayNowButton()
	{
		return $this->DisplayPayNowButton;
	}
	/**
	 * Set PayPalPreferred
	 * @param boolean PayPalPreferred
	 * @return boolean
	 */
	public function setPayPalPreferred($_PayPalPreferred)
	{
		return ($this->PayPalPreferred = $_PayPalPreferred);
	}
	/**
	 * Get PayPalPreferred
	 * @return boolean
	 */
	public function getPayPalPreferred()
	{
		return $this->PayPalPreferred;
	}
	/**
	 * Set DefaultPayPalEmailAddress
	 * @param string DefaultPayPalEmailAddress
	 * @return string
	 */
	public function setDefaultPayPalEmailAddress($_DefaultPayPalEmailAddress)
	{
		return ($this->DefaultPayPalEmailAddress = $_DefaultPayPalEmailAddress);
	}
	/**
	 * Get DefaultPayPalEmailAddress
	 * @return string
	 */
	public function getDefaultPayPalEmailAddress()
	{
		return $this->DefaultPayPalEmailAddress;
	}
	/**
	 * Set PayPalAlwaysOn
	 * @param boolean PayPalAlwaysOn
	 * @return boolean
	 */
	public function setPayPalAlwaysOn($_PayPalAlwaysOn)
	{
		return ($this->PayPalAlwaysOn = $_PayPalAlwaysOn);
	}
	/**
	 * Get PayPalAlwaysOn
	 * @return boolean
	 */
	public function getPayPalAlwaysOn()
	{
		return $this->PayPalAlwaysOn;
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
	 * Set UPSRateOption
	 * @param UPSRateOptionCodeType UPSRateOption
	 * @return UPSRateOptionCodeType
	 */
	public function setUPSRateOption($_UPSRateOption)
	{
		return ($this->UPSRateOption = EbayTradingTypeUPSRateOptionCodeType::valueIsValid($_UPSRateOption)?$_UPSRateOption:null);
	}
	/**
	 * Get UPSRateOption
	 * @return EbayTradingTypeUPSRateOptionCodeType
	 */
	public function getUPSRateOption()
	{
		return $this->UPSRateOption;
	}
	/**
	 * Set FedExRateOption
	 * @param FedExRateOptionCodeType FedExRateOption
	 * @return FedExRateOptionCodeType
	 */
	public function setFedExRateOption($_FedExRateOption)
	{
		return ($this->FedExRateOption = EbayTradingTypeFedExRateOptionCodeType::valueIsValid($_FedExRateOption)?$_FedExRateOption:null);
	}
	/**
	 * Get FedExRateOption
	 * @return EbayTradingTypeFedExRateOptionCodeType
	 */
	public function getFedExRateOption()
	{
		return $this->FedExRateOption;
	}
	/**
	 * Set USPSRateOption
	 * @param USPSRateOptionCodeType USPSRateOption
	 * @return USPSRateOptionCodeType
	 */
	public function setUSPSRateOption($_USPSRateOption)
	{
		return ($this->USPSRateOption = EbayTradingTypeUSPSRateOptionCodeType::valueIsValid($_USPSRateOption)?$_USPSRateOption:null);
	}
	/**
	 * Get USPSRateOption
	 * @return EbayTradingTypeUSPSRateOptionCodeType
	 */
	public function getUSPSRateOption()
	{
		return $this->USPSRateOption;
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