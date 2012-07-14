<?php
/**
 * Class file for PayPalTypeBMGetButtonDetailsResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMGetButtonDetailsResponseType
 * @date 14/07/2012
 */
class PayPalTypeBMGetButtonDetailsResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The Website
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Website;
	/**
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Email;
	/**
	 * The Mobile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Mobile;
	/**
	 * The HostedButtonID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * The ButtonType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Type of button. One of the following: BUYNOW, CART, GIFTCERTIFICATE. SUBSCRIBE, PAYMENTPLAN, AUTOBILLING, DONATE, VIEWCART or UNSUBSCRIBE
	 * @var PayPalTypeButtonTypeType
	 */
	public $ButtonType;
	/**
	 * The ButtonCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Type of button code. One of the following: hosted, encrypted or cleartext
	 * @var PayPalTypeButtonCodeType
	 */
	public $ButtonCode;
	/**
	 * The ButtonSubType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Button sub type. optional for button types buynow and cart only Either PRODUCTS or SERVICES
	 * @var PayPalTypeButtonSubTypeType
	 */
	public $ButtonSubType;
	/**
	 * The ButtonVar
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1000
	 * 	- documentation : Button Variable information Character length and limitations: 63 single-byte alphanumeric characters
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
	 * 	- documentation : Text field
	 * @var string
	 */
	public $TextBox;
	/**
	 * The ButtonImage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Button image to use. One of: REG, SML, or CC
	 * @var PayPalTypeButtonImageType
	 */
	public $ButtonImage;
	/**
	 * The ButtonImageURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Button URL for custom button image.
	 * @var string
	 */
	public $ButtonImageURL;
	/**
	 * The BuyNowText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Text to use on Buy Now Button. Either BUYNOW or PAYNOW
	 * @var PayPalTypeBuyNowTextType
	 */
	public $BuyNowText;
	/**
	 * The SubscribeText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Text to use on Subscribe button. Must be either BUYNOW or SUBSCRIBE
	 * @var PayPalTypeSubscribeTextType
	 */
	public $SubscribeText;
	/**
	 * The ButtonCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Button Country. Valid ISO country code or 'International'
	 * @var PayPalTypeCountryCodeType
	 */
	public $ButtonCountry;
	/**
	 * The ButtonLanguage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Button language code. Character length and limitations: 3 single-byte alphanumeric characters
	 * @var string
	 */
	public $ButtonLanguage;
	/**
	 * Constructor
	 * @param string Website
	 * @param string Email
	 * @param string Mobile
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
	 * @return PayPalTypeBMGetButtonDetailsResponseType
	 */
	public function __construct($_Website = null,$_Email = null,$_Mobile = null,$_HostedButtonID = null,$_ButtonType = null,$_ButtonCode = null,$_ButtonSubType = null,$_ButtonVar = null,$_OptionDetails = null,$_TextBox = null,$_ButtonImage = null,$_ButtonImageURL = null,$_BuyNowText = null,$_SubscribeText = null,$_ButtonCountry = null,$_ButtonLanguage = null)
	{
		PayPalWsdlClass::__construct(array('Website'=>$_Website,'Email'=>$_Email,'Mobile'=>$_Mobile,'HostedButtonID'=>$_HostedButtonID,'ButtonType'=>$_ButtonType,'ButtonCode'=>$_ButtonCode,'ButtonSubType'=>$_ButtonSubType,'ButtonVar'=>$_ButtonVar,'OptionDetails'=>$_OptionDetails,'TextBox'=>$_TextBox,'ButtonImage'=>$_ButtonImage,'ButtonImageURL'=>$_ButtonImageURL,'BuyNowText'=>$_BuyNowText,'SubscribeText'=>$_SubscribeText,'ButtonCountry'=>$_ButtonCountry,'ButtonLanguage'=>$_ButtonLanguage));
	}
	/**
	 * Set Website
	 * @param string Website
	 * @return string
	 */
	public function setWebsite($_Website)
	{
		return ($this->Website = $_Website);
	}
	/**
	 * Get Website
	 * @return string
	 */
	public function getWebsite()
	{
		return $this->Website;
	}
	/**
	 * Set Email
	 * @param string Email
	 * @return string
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = $_Email);
	}
	/**
	 * Get Email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set Mobile
	 * @param string Mobile
	 * @return string
	 */
	public function setMobile($_Mobile)
	{
		return ($this->Mobile = $_Mobile);
	}
	/**
	 * Get Mobile
	 * @return string
	 */
	public function getMobile()
	{
		return $this->Mobile;
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