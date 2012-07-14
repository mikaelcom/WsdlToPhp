<?php
/**
 * Class file for PayPalTypeGetExpressCheckoutDetailsResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetExpressCheckoutDetailsResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeGetExpressCheckoutDetailsResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The Token
	 * Meta informations :
	 * 	- documentation : The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. Character length and limitations: 20 single-byte characters
	 * @var PayPalTypeExpressCheckoutTokenType
	 */
	public $Token;
	/**
	 * The PayerInfo
	 * Meta informations :
	 * 	- documentation : Information about the payer
	 * @var PayPalTypePayerInfoType
	 */
	public $PayerInfo;
	/**
	 * The Custom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A free-form field for your own use, as set by you in the Custom element of SetExpressCheckoutRequest. Character length and limitations: 256 single-byte alphanumeric characters
	 * @var string
	 */
	public $Custom;
	/**
	 * The InvoiceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Your own invoice or tracking number, as set by you in the InvoiceID element of SetExpressCheckoutRequest. Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The ContactPhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Payer's contact telephone number. PayPal returns a contact telephone number only if your Merchant account profile settings require that the buyer enter one.
	 * @var string
	 */
	public $ContactPhone;
	/**
	 * The BillingAgreementAcceptedStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var boolean
	 */
	public $BillingAgreementAcceptedStatus;
	/**
	 * The RedirectRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $RedirectRequired;
	/**
	 * The BillingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Customer's billing address. Optional If you have credit card mapped in your account then billing address of the credit card is returned otherwise your primary address is returned , PayPal returns this address in GetExpressCheckoutDetailsResponse.
	 * @var PayPalTypeAddressType
	 */
	public $BillingAddress;
	/**
	 * The Note
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Text note entered by the buyer in PayPal flow.
	 * @var string
	 */
	public $Note;
	/**
	 * The CheckoutStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Returns the status of the EC checkout session. Values include 'PaymentActionNotInitiated', 'PaymentActionFailed', 'PaymentActionInProgress', 'PaymentCompleted'.
	 * @var string
	 */
	public $CheckoutStatus;
	/**
	 * The PayPalAdjustment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : PayPal may offer a discount or gift certificate to the buyer, which will be represented by a negativeamount. If the buyer has a negative balance, PayPal will add that amount to the current charges, which will be represented as a positive amount.
	 * @var PayPalTypeBasicAmountType
	 */
	public $PayPalAdjustment;
	/**
	 * The PaymentDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 10
	 * 	- documentation : Information about the individual purchased items.
	 * @var PayPalTypePaymentDetailsType
	 */
	public $PaymentDetails;
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
	 * The IncentiveDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Information about the incentives that were applied from Ebay RYP page and PayPal RYP page.
	 * @var PayPalTypeIncentiveDetailsType
	 */
	public $IncentiveDetails;
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
	 * The PaymentRequestInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 10
	 * 	- documentation : Contains payment request information about each bucket in the cart.
	 * @var PayPalTypePaymentRequestInfoType
	 */
	public $PaymentRequestInfo;
	/**
	 * The ExternalRememberMeStatusDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Response information resulting from opt-in operation or current login bypass status.
	 * @var PayPalTypeExternalRememberMeStatusDetailsType
	 */
	public $ExternalRememberMeStatusDetails;
	/**
	 * Constructor
	 * @param PayPalTypeExpressCheckoutTokenType Token
	 * @param PayPalTypePayerInfoType PayerInfo
	 * @param string Custom
	 * @param string InvoiceID
	 * @param string ContactPhone
	 * @param boolean BillingAgreementAcceptedStatus
	 * @param string RedirectRequired
	 * @param PayPalTypeAddressType BillingAddress
	 * @param string Note
	 * @param string CheckoutStatus
	 * @param PayPalTypeBasicAmountType PayPalAdjustment
	 * @param PayPalTypePaymentDetailsType PaymentDetails
	 * @param PayPalTypeUserSelectedOptionType UserSelectedOptions
	 * @param PayPalTypeIncentiveDetailsType IncentiveDetails
	 * @param string GiftMessage
	 * @param string GiftReceiptEnable
	 * @param string GiftWrapName
	 * @param PayPalTypeBasicAmountType GiftWrapAmount
	 * @param string BuyerMarketingEmail
	 * @param string SurveyQuestion
	 * @param string SurveyChoiceSelected
	 * @param PayPalTypePaymentRequestInfoType PaymentRequestInfo
	 * @param PayPalTypeExternalRememberMeStatusDetailsType ExternalRememberMeStatusDetails
	 * @return PayPalTypeGetExpressCheckoutDetailsResponseDetailsType
	 */
	public function __construct($_Token = null,$_PayerInfo = null,$_Custom = null,$_InvoiceID = null,$_ContactPhone = null,$_BillingAgreementAcceptedStatus = null,$_RedirectRequired = null,$_BillingAddress = null,$_Note = null,$_CheckoutStatus = null,$_PayPalAdjustment = null,$_PaymentDetails = null,$_UserSelectedOptions = null,$_IncentiveDetails = null,$_GiftMessage = null,$_GiftReceiptEnable = null,$_GiftWrapName = null,$_GiftWrapAmount = null,$_BuyerMarketingEmail = null,$_SurveyQuestion = null,$_SurveyChoiceSelected = null,$_PaymentRequestInfo = null,$_ExternalRememberMeStatusDetails = null)
	{
		parent::__construct(array('Token'=>$_Token,'PayerInfo'=>$_PayerInfo,'Custom'=>$_Custom,'InvoiceID'=>$_InvoiceID,'ContactPhone'=>$_ContactPhone,'BillingAgreementAcceptedStatus'=>$_BillingAgreementAcceptedStatus,'RedirectRequired'=>$_RedirectRequired,'BillingAddress'=>$_BillingAddress,'Note'=>$_Note,'CheckoutStatus'=>$_CheckoutStatus,'PayPalAdjustment'=>$_PayPalAdjustment,'PaymentDetails'=>$_PaymentDetails,'UserSelectedOptions'=>$_UserSelectedOptions,'IncentiveDetails'=>$_IncentiveDetails,'GiftMessage'=>$_GiftMessage,'GiftReceiptEnable'=>$_GiftReceiptEnable,'GiftWrapName'=>$_GiftWrapName,'GiftWrapAmount'=>$_GiftWrapAmount,'BuyerMarketingEmail'=>$_BuyerMarketingEmail,'SurveyQuestion'=>$_SurveyQuestion,'SurveyChoiceSelected'=>$_SurveyChoiceSelected,'PaymentRequestInfo'=>$_PaymentRequestInfo,'ExternalRememberMeStatusDetails'=>$_ExternalRememberMeStatusDetails));
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
	 * Set PayerInfo
	 * @param PayerInfoType PayerInfo
	 * @return PayerInfoType
	 */
	public function setPayerInfo($_PayerInfo)
	{
		return ($this->PayerInfo = $_PayerInfo);
	}
	/**
	 * Get PayerInfo
	 * @return PayPalTypePayerInfoType
	 */
	public function getPayerInfo()
	{
		return $this->PayerInfo;
	}
	/**
	 * Set Custom
	 * @param string Custom
	 * @return string
	 */
	public function setCustom($_Custom)
	{
		return ($this->Custom = $_Custom);
	}
	/**
	 * Get Custom
	 * @return string
	 */
	public function getCustom()
	{
		return $this->Custom;
	}
	/**
	 * Set InvoiceID
	 * @param string InvoiceID
	 * @return string
	 */
	public function setInvoiceID($_InvoiceID)
	{
		return ($this->InvoiceID = $_InvoiceID);
	}
	/**
	 * Get InvoiceID
	 * @return string
	 */
	public function getInvoiceID()
	{
		return $this->InvoiceID;
	}
	/**
	 * Set ContactPhone
	 * @param string ContactPhone
	 * @return string
	 */
	public function setContactPhone($_ContactPhone)
	{
		return ($this->ContactPhone = $_ContactPhone);
	}
	/**
	 * Get ContactPhone
	 * @return string
	 */
	public function getContactPhone()
	{
		return $this->ContactPhone;
	}
	/**
	 * Set BillingAgreementAcceptedStatus
	 * @param boolean BillingAgreementAcceptedStatus
	 * @return boolean
	 */
	public function setBillingAgreementAcceptedStatus($_BillingAgreementAcceptedStatus)
	{
		return ($this->BillingAgreementAcceptedStatus = $_BillingAgreementAcceptedStatus);
	}
	/**
	 * Get BillingAgreementAcceptedStatus
	 * @return boolean
	 */
	public function getBillingAgreementAcceptedStatus()
	{
		return $this->BillingAgreementAcceptedStatus;
	}
	/**
	 * Set RedirectRequired
	 * @param string RedirectRequired
	 * @return string
	 */
	public function setRedirectRequired($_RedirectRequired)
	{
		return ($this->RedirectRequired = $_RedirectRequired);
	}
	/**
	 * Get RedirectRequired
	 * @return string
	 */
	public function getRedirectRequired()
	{
		return $this->RedirectRequired;
	}
	/**
	 * Set BillingAddress
	 * @param AddressType BillingAddress
	 * @return AddressType
	 */
	public function setBillingAddress($_BillingAddress)
	{
		return ($this->BillingAddress = $_BillingAddress);
	}
	/**
	 * Get BillingAddress
	 * @return PayPalTypeAddressType
	 */
	public function getBillingAddress()
	{
		return $this->BillingAddress;
	}
	/**
	 * Set Note
	 * @param string Note
	 * @return string
	 */
	public function setNote($_Note)
	{
		return ($this->Note = $_Note);
	}
	/**
	 * Get Note
	 * @return string
	 */
	public function getNote()
	{
		return $this->Note;
	}
	/**
	 * Set CheckoutStatus
	 * @param string CheckoutStatus
	 * @return string
	 */
	public function setCheckoutStatus($_CheckoutStatus)
	{
		return ($this->CheckoutStatus = $_CheckoutStatus);
	}
	/**
	 * Get CheckoutStatus
	 * @return string
	 */
	public function getCheckoutStatus()
	{
		return $this->CheckoutStatus;
	}
	/**
	 * Set PayPalAdjustment
	 * @param BasicAmountType PayPalAdjustment
	 * @return BasicAmountType
	 */
	public function setPayPalAdjustment($_PayPalAdjustment)
	{
		return ($this->PayPalAdjustment = $_PayPalAdjustment);
	}
	/**
	 * Get PayPalAdjustment
	 * @return PayPalTypeBasicAmountType
	 */
	public function getPayPalAdjustment()
	{
		return $this->PayPalAdjustment;
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
	 * Set IncentiveDetails
	 * @param IncentiveDetailsType IncentiveDetails
	 * @return IncentiveDetailsType
	 */
	public function setIncentiveDetails($_IncentiveDetails)
	{
		return ($this->IncentiveDetails = $_IncentiveDetails);
	}
	/**
	 * Get IncentiveDetails
	 * @return PayPalTypeIncentiveDetailsType
	 */
	public function getIncentiveDetails()
	{
		return $this->IncentiveDetails;
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
	 * Set PaymentRequestInfo
	 * @param PaymentRequestInfoType PaymentRequestInfo
	 * @return PaymentRequestInfoType
	 */
	public function setPaymentRequestInfo($_PaymentRequestInfo)
	{
		return ($this->PaymentRequestInfo = $_PaymentRequestInfo);
	}
	/**
	 * Get PaymentRequestInfo
	 * @return PayPalTypePaymentRequestInfoType
	 */
	public function getPaymentRequestInfo()
	{
		return $this->PaymentRequestInfo;
	}
	/**
	 * Set ExternalRememberMeStatusDetails
	 * @param ExternalRememberMeStatusDetailsType ExternalRememberMeStatusDetails
	 * @return ExternalRememberMeStatusDetailsType
	 */
	public function setExternalRememberMeStatusDetails($_ExternalRememberMeStatusDetails)
	{
		return ($this->ExternalRememberMeStatusDetails = $_ExternalRememberMeStatusDetails);
	}
	/**
	 * Get ExternalRememberMeStatusDetails
	 * @return PayPalTypeExternalRememberMeStatusDetailsType
	 */
	public function getExternalRememberMeStatusDetails()
	{
		return $this->ExternalRememberMeStatusDetails;
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