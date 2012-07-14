<?php
/**
 * Class file for PayPalTypeDoExpressCheckoutPaymentRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoExpressCheckoutPaymentRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeDoExpressCheckoutPaymentRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The PaymentAction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : How you want to obtain payment. Required Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture. Order indicates that this payment is is an order authorization subject to settlement with PayPal Authorization and Capture. Sale indicates that this is a final sale for which you are requesting payment. IMPORTANT: You cannot set PaymentAction to Sale on SetExpressCheckoutRequest and then change PaymentAction to Authorization on the final Express Checkout API, DoExpressCheckoutPaymentRequest. Character length and limit: Up to 13 single-byte alphabetic characters
	 * @var PayPalTypePaymentActionCodeType
	 */
	public $PaymentAction;
	/**
	 * The Token
	 * Meta informations :
	 * 	- documentation : The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. Required Character length and limitations: 20 single-byte characters
	 * @var PayPalTypeExpressCheckoutTokenType
	 */
	public $Token;
	/**
	 * The PayerID
	 * Meta informations :
	 * 	- documentation : Encrypted PayPal customer account identification number as returned by GetExpressCheckoutDetailsResponse. Required Character length and limitations: 127 single-byte characters.
	 * @var PayPalTypeUserIDType
	 */
	public $PayerID;
	/**
	 * The OrderURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : URL on Merchant site pertaining to this invoice. Optional
	 * @var string
	 */
	public $OrderURL;
	/**
	 * The PaymentDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 10
	 * 	- documentation : Information about the payment Required
	 * @var PayPalTypePaymentDetailsType
	 */
	public $PaymentDetails;
	/**
	 * The PromoOverrideFlag
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Flag to indicate if previously set promoCode shall be overriden. Value 1 indicates overriding.
	 * @var string
	 */
	public $PromoOverrideFlag;
	/**
	 * The PromoCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Promotional financing code for item. Overrides any previous PromoCode setting.
	 * @var string
	 */
	public $PromoCode;
	/**
	 * The EnhancedData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Contains data for enhanced data like Airline Itinerary Data.
	 * @var PayPalTypeEnhancedDataType
	 */
	public $EnhancedData;
	/**
	 * The SoftDescriptor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Soft Descriptor supported for Sale and Auth in DEC only. For Order this will be ignored.
	 * @var string
	 */
	public $SoftDescriptor;
	/**
	 * The UserSelectedOptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the user selected options.
	 * @var PayPalTypeUserSelectedOptionType
	 */
	public $UserSelectedOptions;
	/**
	 * The GiftMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Gift message.
	 * @var string
	 */
	public $GiftMessage;
	/**
	 * The GiftReceiptEnable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Gift receipt enable.
	 * @var string
	 */
	public $GiftReceiptEnable;
	/**
	 * The GiftWrapName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Gift Wrap name.
	 * @var string
	 */
	public $GiftWrapName;
	/**
	 * The GiftWrapAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Gift Wrap amount.
	 * @var PayPalTypeBasicAmountType
	 */
	public $GiftWrapAmount;
	/**
	 * The BuyerMarketingEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Buyer marketing email.
	 * @var string
	 */
	public $BuyerMarketingEmail;
	/**
	 * The SurveyQuestion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the survey question.
	 * @var string
	 */
	public $SurveyQuestion;
	/**
	 * The SurveyChoiceSelected
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Information about the survey choice selected by the user.
	 * @var string
	 */
	public $SurveyChoiceSelected;
	/**
	 * The ButtonSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An identification code for use by third-party applications to identify transactions. Optional Character length and limitations: 32 single-byte alphanumeric characters
	 * @var string
	 */
	public $ButtonSource;
	/**
	 * The SkipBACreation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Merchant specified flag which indicates whether to create billing agreement as part of DoEC or not. Optional
	 * @var boolean
	 */
	public $SkipBACreation;
	/**
	 * Constructor
	 * @param PayPalTypePaymentActionCodeType PaymentAction
	 * @param PayPalTypeExpressCheckoutTokenType Token
	 * @param PayPalTypeUserIDType PayerID
	 * @param string OrderURL
	 * @param PayPalTypePaymentDetailsType PaymentDetails
	 * @param string PromoOverrideFlag
	 * @param string PromoCode
	 * @param PayPalTypeEnhancedDataType EnhancedData
	 * @param string SoftDescriptor
	 * @param PayPalTypeUserSelectedOptionType UserSelectedOptions
	 * @param string GiftMessage
	 * @param string GiftReceiptEnable
	 * @param string GiftWrapName
	 * @param PayPalTypeBasicAmountType GiftWrapAmount
	 * @param string BuyerMarketingEmail
	 * @param string SurveyQuestion
	 * @param string SurveyChoiceSelected
	 * @param string ButtonSource
	 * @param boolean SkipBACreation
	 * @return PayPalTypeDoExpressCheckoutPaymentRequestDetailsType
	 */
	public function __construct($_PaymentAction = null,$_Token = null,$_PayerID = null,$_OrderURL = null,$_PaymentDetails = null,$_PromoOverrideFlag = null,$_PromoCode = null,$_EnhancedData = null,$_SoftDescriptor = null,$_UserSelectedOptions = null,$_GiftMessage = null,$_GiftReceiptEnable = null,$_GiftWrapName = null,$_GiftWrapAmount = null,$_BuyerMarketingEmail = null,$_SurveyQuestion = null,$_SurveyChoiceSelected = null,$_ButtonSource = null,$_SkipBACreation = null)
	{
		parent::__construct(array('PaymentAction'=>$_PaymentAction,'Token'=>$_Token,'PayerID'=>$_PayerID,'OrderURL'=>$_OrderURL,'PaymentDetails'=>$_PaymentDetails,'PromoOverrideFlag'=>$_PromoOverrideFlag,'PromoCode'=>$_PromoCode,'EnhancedData'=>$_EnhancedData,'SoftDescriptor'=>$_SoftDescriptor,'UserSelectedOptions'=>$_UserSelectedOptions,'GiftMessage'=>$_GiftMessage,'GiftReceiptEnable'=>$_GiftReceiptEnable,'GiftWrapName'=>$_GiftWrapName,'GiftWrapAmount'=>$_GiftWrapAmount,'BuyerMarketingEmail'=>$_BuyerMarketingEmail,'SurveyQuestion'=>$_SurveyQuestion,'SurveyChoiceSelected'=>$_SurveyChoiceSelected,'ButtonSource'=>$_ButtonSource,'SkipBACreation'=>$_SkipBACreation));
	}
	/**
	 * Set PaymentAction
	 * @param PaymentActionCodeType PaymentAction
	 * @return PaymentActionCodeType
	 */
	public function setPaymentAction($_PaymentAction)
	{
		return ($this->PaymentAction = PayPalTypePaymentActionCodeType::valueIsValid($_PaymentAction)?$_PaymentAction:null);
	}
	/**
	 * Get PaymentAction
	 * @return PayPalTypePaymentActionCodeType
	 */
	public function getPaymentAction()
	{
		return $this->PaymentAction;
	}
	/**
	 * Set Token
	 * @param ExpressCheckoutTokenType Token
	 * @return ExpressCheckoutTokenType
	 */
	public function setToken($_Token)
	{
		return ($this->Token = PayPalTypeExpressCheckoutTokenType::valueIsValid($_Token)?$_Token:null);
	}
	/**
	 * Get Token
	 * @return PayPalTypeExpressCheckoutTokenType
	 */
	public function getToken()
	{
		return $this->Token;
	}
	/**
	 * Set PayerID
	 * @param UserIDType PayerID
	 * @return UserIDType
	 */
	public function setPayerID($_PayerID)
	{
		return ($this->PayerID = PayPalTypeUserIDType::valueIsValid($_PayerID)?$_PayerID:null);
	}
	/**
	 * Get PayerID
	 * @return PayPalTypeUserIDType
	 */
	public function getPayerID()
	{
		return $this->PayerID;
	}
	/**
	 * Set OrderURL
	 * @param string OrderURL
	 * @return string
	 */
	public function setOrderURL($_OrderURL)
	{
		return ($this->OrderURL = $_OrderURL);
	}
	/**
	 * Get OrderURL
	 * @return string
	 */
	public function getOrderURL()
	{
		return $this->OrderURL;
	}
	/**
	 * Set PaymentDetails
	 * @param PaymentDetailsType PaymentDetails
	 * @return PaymentDetailsType
	 */
	public function setPaymentDetails($_PaymentDetails)
	{
		return ($this->PaymentDetails = $_PaymentDetails);
	}
	/**
	 * Get PaymentDetails
	 * @return PayPalTypePaymentDetailsType
	 */
	public function getPaymentDetails()
	{
		return $this->PaymentDetails;
	}
	/**
	 * Set PromoOverrideFlag
	 * @param string PromoOverrideFlag
	 * @return string
	 */
	public function setPromoOverrideFlag($_PromoOverrideFlag)
	{
		return ($this->PromoOverrideFlag = $_PromoOverrideFlag);
	}
	/**
	 * Get PromoOverrideFlag
	 * @return string
	 */
	public function getPromoOverrideFlag()
	{
		return $this->PromoOverrideFlag;
	}
	/**
	 * Set PromoCode
	 * @param string PromoCode
	 * @return string
	 */
	public function setPromoCode($_PromoCode)
	{
		return ($this->PromoCode = $_PromoCode);
	}
	/**
	 * Get PromoCode
	 * @return string
	 */
	public function getPromoCode()
	{
		return $this->PromoCode;
	}
	/**
	 * Set EnhancedData
	 * @param EnhancedDataType EnhancedData
	 * @return EnhancedDataType
	 */
	public function setEnhancedData($_EnhancedData)
	{
		return ($this->EnhancedData = $_EnhancedData);
	}
	/**
	 * Get EnhancedData
	 * @return PayPalTypeEnhancedDataType
	 */
	public function getEnhancedData()
	{
		return $this->EnhancedData;
	}
	/**
	 * Set SoftDescriptor
	 * @param string SoftDescriptor
	 * @return string
	 */
	public function setSoftDescriptor($_SoftDescriptor)
	{
		return ($this->SoftDescriptor = $_SoftDescriptor);
	}
	/**
	 * Get SoftDescriptor
	 * @return string
	 */
	public function getSoftDescriptor()
	{
		return $this->SoftDescriptor;
	}
	/**
	 * Set UserSelectedOptions
	 * @param UserSelectedOptionType UserSelectedOptions
	 * @return UserSelectedOptionType
	 */
	public function setUserSelectedOptions($_UserSelectedOptions)
	{
		return ($this->UserSelectedOptions = $_UserSelectedOptions);
	}
	/**
	 * Get UserSelectedOptions
	 * @return PayPalTypeUserSelectedOptionType
	 */
	public function getUserSelectedOptions()
	{
		return $this->UserSelectedOptions;
	}
	/**
	 * Set GiftMessage
	 * @param string GiftMessage
	 * @return string
	 */
	public function setGiftMessage($_GiftMessage)
	{
		return ($this->GiftMessage = $_GiftMessage);
	}
	/**
	 * Get GiftMessage
	 * @return string
	 */
	public function getGiftMessage()
	{
		return $this->GiftMessage;
	}
	/**
	 * Set GiftReceiptEnable
	 * @param string GiftReceiptEnable
	 * @return string
	 */
	public function setGiftReceiptEnable($_GiftReceiptEnable)
	{
		return ($this->GiftReceiptEnable = $_GiftReceiptEnable);
	}
	/**
	 * Get GiftReceiptEnable
	 * @return string
	 */
	public function getGiftReceiptEnable()
	{
		return $this->GiftReceiptEnable;
	}
	/**
	 * Set GiftWrapName
	 * @param string GiftWrapName
	 * @return string
	 */
	public function setGiftWrapName($_GiftWrapName)
	{
		return ($this->GiftWrapName = $_GiftWrapName);
	}
	/**
	 * Get GiftWrapName
	 * @return string
	 */
	public function getGiftWrapName()
	{
		return $this->GiftWrapName;
	}
	/**
	 * Set GiftWrapAmount
	 * @param BasicAmountType GiftWrapAmount
	 * @return BasicAmountType
	 */
	public function setGiftWrapAmount($_GiftWrapAmount)
	{
		return ($this->GiftWrapAmount = $_GiftWrapAmount);
	}
	/**
	 * Get GiftWrapAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getGiftWrapAmount()
	{
		return $this->GiftWrapAmount;
	}
	/**
	 * Set BuyerMarketingEmail
	 * @param string BuyerMarketingEmail
	 * @return string
	 */
	public function setBuyerMarketingEmail($_BuyerMarketingEmail)
	{
		return ($this->BuyerMarketingEmail = $_BuyerMarketingEmail);
	}
	/**
	 * Get BuyerMarketingEmail
	 * @return string
	 */
	public function getBuyerMarketingEmail()
	{
		return $this->BuyerMarketingEmail;
	}
	/**
	 * Set SurveyQuestion
	 * @param string SurveyQuestion
	 * @return string
	 */
	public function setSurveyQuestion($_SurveyQuestion)
	{
		return ($this->SurveyQuestion = $_SurveyQuestion);
	}
	/**
	 * Get SurveyQuestion
	 * @return string
	 */
	public function getSurveyQuestion()
	{
		return $this->SurveyQuestion;
	}
	/**
	 * Set SurveyChoiceSelected
	 * @param string SurveyChoiceSelected
	 * @return string
	 */
	public function setSurveyChoiceSelected($_SurveyChoiceSelected)
	{
		return ($this->SurveyChoiceSelected = $_SurveyChoiceSelected);
	}
	/**
	 * Get SurveyChoiceSelected
	 * @return string
	 */
	public function getSurveyChoiceSelected()
	{
		return $this->SurveyChoiceSelected;
	}
	/**
	 * Set ButtonSource
	 * @param string ButtonSource
	 * @return string
	 */
	public function setButtonSource($_ButtonSource)
	{
		return ($this->ButtonSource = $_ButtonSource);
	}
	/**
	 * Get ButtonSource
	 * @return string
	 */
	public function getButtonSource()
	{
		return $this->ButtonSource;
	}
	/**
	 * Set SkipBACreation
	 * @param boolean SkipBACreation
	 * @return boolean
	 */
	public function setSkipBACreation($_SkipBACreation)
	{
		return ($this->SkipBACreation = $_SkipBACreation);
	}
	/**
	 * Get SkipBACreation
	 * @return boolean
	 */
	public function getSkipBACreation()
	{
		return $this->SkipBACreation;
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