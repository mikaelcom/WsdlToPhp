<?php
/**
 * Class file for PayPalTypeBMUpdateButtonRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMUpdateButtonRequestType
 * @date 14/07/2012
 */
class PayPalTypeBMUpdateButtonRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The HostedButtonID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Hosted Button id of the button to update. Required Character length and limitations: 10 single-byte numeric characters
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * The ButtonType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Type of Button to create. Required Must be one of the following: BUYNOW, CART, GIFTCERTIFICATE. SUBSCRIBE, PAYMENTPLAN, AUTOBILLING, DONATE, VIEWCART or UNSUBSCRIBE
	 * @var PayPalTypeButtonTypeType
	 */
	public $ButtonType;
	/**
	 * The ButtonCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : button code. optional Must be one of the following: hosted, encrypted or cleartext
	 * @var PayPalTypeButtonCodeType
	 */
	public $ButtonCode;
	/**
	 * The ButtonSubType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Button sub type. optional for button types buynow and cart only Must Be either PRODUCTS or SERVICES
	 * @var PayPalTypeButtonSubTypeType
	 */
	public $ButtonSubType;
	/**
	 * The ButtonVar
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1000
	 * 	- documentation : Button Variable information At least one required recurring Character length and limitations: 63 single-byte alphanumeric characters
	 * @var string
	 */
	public $ButtonVar;
	/**
	 * The OptionDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 5
	 * @var PayPalTypeOptionDetailsType
	 */
	public $OptionDetails;
	/**
	 * The TextBox
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 2
	 * 	- documentation : Details of each option for the button. Optional
	 * @var string
	 */
	public $TextBox;
	/**
	 * The ButtonImage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Button image to use. Optional Must be one of: REG, SML, or CC
	 * @var PayPalTypeButtonImageType
	 */
	public $ButtonImage;
	/**
	 * The ButtonImageURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Button URL for custom button image. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $ButtonImageURL;
	/**
	 * The BuyNowText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Text to use on Buy Now Button. Optional Must be either BUYNOW or PAYNOW
	 * @var PayPalTypeBuyNowTextType
	 */
	public $BuyNowText;
	/**
	 * The SubscribeText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Text to use on Subscribe button. Optional Must be either BUYNOW or SUBSCRIBE
	 * @var PayPalTypeSubscribeTextType
	 */
	public $SubscribeText;
	/**
	 * The ButtonCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Button Country. Optional Must be valid ISO country code
	 * @var PayPalTypeCountryCodeType
	 */
	public $ButtonCountry;
	/**
	 * The ButtonLanguage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Button language code. Optional Character length and limitations: 2 single-byte alphanumeric characters
	 * @var string
	 */
	public $ButtonLanguage;
	/**
	 * Constructor
	 * @param string HostedButtonID
	 * @param PayPalTypeButtonTypeType ButtonType
	 * @param PayPalTypeButtonCodeType ButtonCode
	 * @param PayPalTypeButtonSubTypeType ButtonSubType
	 * @param string ButtonVar
	 * @param PayPalTypeOptionDetailsType OptionDetails
	 * @param string TextBox
	 * @param PayPalTypeButtonImageType ButtonImage
	 * @param string ButtonImageURL
	 * @param PayPalTypeBuyNowTextType BuyNowText
	 * @param PayPalTypeSubscribeTextType SubscribeText
	 * @param PayPalTypeCountryCodeType ButtonCountry
	 * @param string ButtonLanguage
	 * @return PayPalTypeBMUpdateButtonRequestType
	 */
	public function __construct($_HostedButtonID,$_ButtonType = null,$_ButtonCode = null,$_ButtonSubType = null,$_ButtonVar = null,$_OptionDetails = null,$_TextBox = null,$_ButtonImage = null,$_ButtonImageURL = null,$_BuyNowText = null,$_SubscribeText = null,$_ButtonCountry = null,$_ButtonLanguage = null)
	{
		PayPalWsdlClass::__construct(array('HostedButtonID'=>$_HostedButtonID,'ButtonType'=>$_ButtonType,'ButtonCode'=>$_ButtonCode,'ButtonSubType'=>$_ButtonSubType,'ButtonVar'=>$_ButtonVar,'OptionDetails'=>$_OptionDetails,'TextBox'=>$_TextBox,'ButtonImage'=>$_ButtonImage,'ButtonImageURL'=>$_ButtonImageURL,'BuyNowText'=>$_BuyNowText,'SubscribeText'=>$_SubscribeText,'ButtonCountry'=>$_ButtonCountry,'ButtonLanguage'=>$_ButtonLanguage));
	}
	/**
	 * Set HostedButtonID
	 * @param string HostedButtonID
	 * @return string
	 */
	public function setHostedButtonID($_HostedButtonID)
	{
		return ($this->HostedButtonID = $_HostedButtonID);
	}
	/**
	 * Get HostedButtonID
	 * @return string
	 */
	public function getHostedButtonID()
	{
		return $this->HostedButtonID;
	}
	/**
	 * Set ButtonType
	 * @param ButtonTypeType ButtonType
	 * @return ButtonTypeType
	 */
	public function setButtonType($_ButtonType)
	{
		return ($this->ButtonType = PayPalTypeButtonTypeType::valueIsValid($_ButtonType)?$_ButtonType:null);
	}
	/**
	 * Get ButtonType
	 * @return PayPalTypeButtonTypeType
	 */
	public function getButtonType()
	{
		return $this->ButtonType;
	}
	/**
	 * Set ButtonCode
	 * @param ButtonCodeType ButtonCode
	 * @return ButtonCodeType
	 */
	public function setButtonCode($_ButtonCode)
	{
		return ($this->ButtonCode = PayPalTypeButtonCodeType::valueIsValid($_ButtonCode)?$_ButtonCode:null);
	}
	/**
	 * Get ButtonCode
	 * @return PayPalTypeButtonCodeType
	 */
	public function getButtonCode()
	{
		return $this->ButtonCode;
	}
	/**
	 * Set ButtonSubType
	 * @param ButtonSubTypeType ButtonSubType
	 * @return ButtonSubTypeType
	 */
	public function setButtonSubType($_ButtonSubType)
	{
		return ($this->ButtonSubType = PayPalTypeButtonSubTypeType::valueIsValid($_ButtonSubType)?$_ButtonSubType:null);
	}
	/**
	 * Get ButtonSubType
	 * @return PayPalTypeButtonSubTypeType
	 */
	public function getButtonSubType()
	{
		return $this->ButtonSubType;
	}
	/**
	 * Set ButtonVar
	 * @param string ButtonVar
	 * @return string
	 */
	public function setButtonVar($_ButtonVar)
	{
		return ($this->ButtonVar = $_ButtonVar);
	}
	/**
	 * Get ButtonVar
	 * @return string
	 */
	public function getButtonVar()
	{
		return $this->ButtonVar;
	}
	/**
	 * Set OptionDetails
	 * @param OptionDetailsType OptionDetails
	 * @return OptionDetailsType
	 */
	public function setOptionDetails($_OptionDetails)
	{
		return ($this->OptionDetails = $_OptionDetails);
	}
	/**
	 * Get OptionDetails
	 * @return PayPalTypeOptionDetailsType
	 */
	public function getOptionDetails()
	{
		return $this->OptionDetails;
	}
	/**
	 * Set TextBox
	 * @param string TextBox
	 * @return string
	 */
	public function setTextBox($_TextBox)
	{
		return ($this->TextBox = $_TextBox);
	}
	/**
	 * Get TextBox
	 * @return string
	 */
	public function getTextBox()
	{
		return $this->TextBox;
	}
	/**
	 * Set ButtonImage
	 * @param ButtonImageType ButtonImage
	 * @return ButtonImageType
	 */
	public function setButtonImage($_ButtonImage)
	{
		return ($this->ButtonImage = PayPalTypeButtonImageType::valueIsValid($_ButtonImage)?$_ButtonImage:null);
	}
	/**
	 * Get ButtonImage
	 * @return PayPalTypeButtonImageType
	 */
	public function getButtonImage()
	{
		return $this->ButtonImage;
	}
	/**
	 * Set ButtonImageURL
	 * @param string ButtonImageURL
	 * @return string
	 */
	public function setButtonImageURL($_ButtonImageURL)
	{
		return ($this->ButtonImageURL = $_ButtonImageURL);
	}
	/**
	 * Get ButtonImageURL
	 * @return string
	 */
	public function getButtonImageURL()
	{
		return $this->ButtonImageURL;
	}
	/**
	 * Set BuyNowText
	 * @param BuyNowTextType BuyNowText
	 * @return BuyNowTextType
	 */
	public function setBuyNowText($_BuyNowText)
	{
		return ($this->BuyNowText = PayPalTypeBuyNowTextType::valueIsValid($_BuyNowText)?$_BuyNowText:null);
	}
	/**
	 * Get BuyNowText
	 * @return PayPalTypeBuyNowTextType
	 */
	public function getBuyNowText()
	{
		return $this->BuyNowText;
	}
	/**
	 * Set SubscribeText
	 * @param SubscribeTextType SubscribeText
	 * @return SubscribeTextType
	 */
	public function setSubscribeText($_SubscribeText)
	{
		return ($this->SubscribeText = PayPalTypeSubscribeTextType::valueIsValid($_SubscribeText)?$_SubscribeText:null);
	}
	/**
	 * Get SubscribeText
	 * @return PayPalTypeSubscribeTextType
	 */
	public function getSubscribeText()
	{
		return $this->SubscribeText;
	}
	/**
	 * Set ButtonCountry
	 * @param CountryCodeType ButtonCountry
	 * @return CountryCodeType
	 */
	public function setButtonCountry($_ButtonCountry)
	{
		return ($this->ButtonCountry = PayPalTypeCountryCodeType::valueIsValid($_ButtonCountry)?$_ButtonCountry:null);
	}
	/**
	 * Get ButtonCountry
	 * @return PayPalTypeCountryCodeType
	 */
	public function getButtonCountry()
	{
		return $this->ButtonCountry;
	}
	/**
	 * Set ButtonLanguage
	 * @param string ButtonLanguage
	 * @return string
	 */
	public function setButtonLanguage($_ButtonLanguage)
	{
		return ($this->ButtonLanguage = $_ButtonLanguage);
	}
	/**
	 * Get ButtonLanguage
	 * @return string
	 */
	public function getButtonLanguage()
	{
		return $this->ButtonLanguage;
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