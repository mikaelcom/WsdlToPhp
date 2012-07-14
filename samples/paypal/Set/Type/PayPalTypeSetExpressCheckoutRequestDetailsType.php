<?php
/**
 * Class file for PayPalTypeSetExpressCheckoutRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetExpressCheckoutRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeSetExpressCheckoutRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The OrderTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total cost of the order to the customer. If shipping cost and tax charges are known, include them in OrderTotal; if not, OrderTotal should be the current sub-total of the order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * @var PayPalTypeBasicAmountType
	 */
	public $OrderTotal;
	/**
	 * The ReturnURL
	 * Meta informations :
	 * 	- documentation : URL to which the customer's browser is returned after choosing to pay with PayPal. PayPal recommends that the value of ReturnURL be the final review page on which the customer confirms the order and payment. Required Character length and limitations: no limit.
	 * @var string
	 */
	public $ReturnURL;
	/**
	 * The CancelURL
	 * Meta informations :
	 * 	- documentation : URL to which the customer is returned if he does not approve the use of PayPal to pay you. PayPal recommends that the value of CancelURL be the original page on which the customer chose to pay with PayPal. Required Character length and limitations: no limit
	 * @var string
	 */
	public $CancelURL;
	/**
	 * The TrackingImageURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Tracking URL for ebay. Required Character length and limitations: no limit
	 * @var string
	 */
	public $TrackingImageURL;
	/**
	 * The giropaySuccessURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL to which the customer's browser is returned after paying with giropay online. Optional Character length and limitations: no limit.
	 * @var string
	 */
	public $giropaySuccessURL;
	/**
	 * The giropayCancelURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL to which the customer's browser is returned after fail to pay with giropay online. Optional Character length and limitations: no limit.
	 * @var string
	 */
	public $giropayCancelURL;
	/**
	 * The BanktxnPendingURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL to which the customer's browser can be returned in the mEFT done page. Optional Character length and limitations: no limit.
	 * @var string
	 */
	public $BanktxnPendingURL;
	/**
	 * The Token
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : On your first invocation of SetExpressCheckoutRequest, the value of this token is returned by SetExpressCheckoutResponse. Optional Include this element and its value only if you want to modify an existing checkout session with another invocation of SetExpressCheckoutRequest; for example, if you want the customer to edit his shipping address on PayPal. Character length and limitations: 20 single-byte characters
	 * @var PayPalTypeExpressCheckoutTokenType
	 */
	public $Token;
	/**
	 * The MaxAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The expected maximum total amount of the complete order, including shipping cost and tax charges. Optional You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * @var PayPalTypeBasicAmountType
	 */
	public $MaxAmount;
	/**
	 * The OrderDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Description of items the customer is purchasing. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $OrderDescription;
	/**
	 * The Custom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A free-form field for your own use, such as a tracking number or other value you want PayPal to return on GetExpressCheckoutDetailsResponse and DoExpressCheckoutPaymentResponse. Optional Character length and limitations: 256 single-byte alphanumeric characters
	 * @var string
	 */
	public $Custom;
	/**
	 * The InvoiceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Your own unique invoice or tracking number. PayPal returns this value to you on DoExpressCheckoutPaymentResponse. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The ReqConfirmShipping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The value 1 indicates that you require that the customer's shipping address on file with PayPal be a confirmed address. Any value other than 1 indicates that the customer's shipping address on file with PayPal need NOT be a confirmed address. Setting this element overrides the setting you have specified in the recipient's Merchant Account Profile. Optional Character length and limitations: One single-byte numeric character.
	 * @var string
	 */
	public $ReqConfirmShipping;
	/**
	 * The ReqBillingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The value 1 indicates that you require that the customer's billing address on file. Setting this element overrides the setting you have specified in Admin. Optional Character length and limitations: One single-byte numeric character.
	 * @var string
	 */
	public $ReqBillingAddress;
	/**
	 * The BillingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The billing address for the buyer. Optional If you include the BillingAddress element, the AddressType elements are required: Name Street1 CityName CountryCode Do not set set the CountryName element.
	 * @var PayPalTypeAddressType
	 */
	public $BillingAddress;
	/**
	 * The NoShipping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The value 1 indicates that on the PayPal pages, no shipping address fields should be displayed whatsoever. Optional Character length and limitations: Four single-byte numeric characters.
	 * @var string
	 */
	public $NoShipping;
	/**
	 * The AddressOverride
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The value 1 indicates that the PayPal pages should display the shipping address set by you in the Address element on this SetExpressCheckoutRequest, not the shipping address on file with PayPal for this customer. Displaying the PayPal street address on file does not allow the customer to edit that address. Optional Character length and limitations: Four single-byte numeric characters.
	 * @var string
	 */
	public $AddressOverride;
	/**
	 * The LocaleCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Locale of pages displayed by PayPal during Express Checkout. Optional Character length and limitations: Five single-byte alphabetic characters, upper- or lowercase. Allowable values: AU or en_AUDE or de_DEFR or fr_FRGB or en_GBIT or it_ITJP or ja_JPUS or en_US
	 * @var string
	 */
	public $LocaleCode;
	/**
	 * The PageStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sets the Custom Payment Page Style for payment pages associated with this button/link. PageStyle corresponds to the HTML variable page_style for customizing payment pages. The value is the same as the Page Style Name you chose when adding or editing the page style from the Profile subtab of the My Account tab of your PayPal account. Optional Character length and limitations: 30 single-byte alphabetic characters.
	 * @var string
	 */
	public $PageStyle;
	/**
	 * The cpp-header-image
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A URL for the image you want to appear at the top left of the payment page. The image has a maximum size of 750 pixels wide by 90 pixels high. PayPal recommends that you provide an image that is stored on a secure (https) server. Optional Character length and limitations: 127
	 * @var string
	 */
	public $cpp_header_image;
	/**
	 * The cpp-header-border-color
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sets the border color around the header of the payment page. The border is a 2-pixel perimeter around the header space, which is 750 pixels wide by 90 pixels high. Optional Character length and limitations: Six character HTML hexadecimal color code in ASCII
	 * @var string
	 */
	public $cpp_header_border_color;
	/**
	 * The cpp-header-back-color
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sets the background color for the header of the payment page. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 * @var string
	 */
	public $cpp_header_back_color;
	/**
	 * The cpp-payflow-color
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sets the background color for the payment page. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 * @var string
	 */
	public $cpp_payflow_color;
	/**
	 * The cpp-cart-border-color
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sets the cart gradient color for the Mini Cart on 1X flow. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 * @var string
	 */
	public $cpp_cart_border_color;
	/**
	 * The cpp-logo-image
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A URL for the image you want to appear above the mini-cart. The image has a maximum size of 190 pixels wide by 60 pixels high. PayPal recommends that you provide an image that is stored on a secure (https) server. Optional Character length and limitations: 127
	 * @var string
	 */
	public $cpp_logo_image;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Customer's shipping address. Optional If you include a shipping address and set the AddressOverride element on the request, PayPal returns this same address in GetExpressCheckoutDetailsResponse.
	 * @var PayPalTypeAddressType
	 */
	public $Address;
	/**
	 * The PaymentAction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : How you want to obtain payment. Required Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture. Order indicates that this payment is is an order authorization subject to settlement with PayPal Authorization and Capture. Sale indicates that this is a final sale for which you are requesting payment. IMPORTANT: You cannot set PaymentAction to Sale or Order on SetExpressCheckoutRequest and then change PaymentAction to Authorization on the final Express Checkout API, DoExpressCheckoutPaymentRequest. Character length and limit: Up to 13 single-byte alphabetic characters
	 * @var PayPalTypePaymentActionCodeType
	 */
	public $PaymentAction;
	/**
	 * The SolutionType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This will indicate which flow you are choosing (expresschecheckout or expresscheckout optional) Optional None Sole indicates that you are in the ExpressO flow Mark indicates that you are in the old express flow.
	 * @var PayPalTypeSolutionTypeType
	 */
	public $SolutionType;
	/**
	 * The LandingPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This indicates Which page to display for ExpressO (Billing or Login) Optional None Billing indicates that you are not a paypal account holder Login indicates that you are a paypal account holder
	 * @var PayPalTypeLandingPageType
	 */
	public $LandingPage;
	/**
	 * The BuyerEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Email address of the buyer as entered during checkout. PayPal uses this value to pre-fill the PayPal membership sign-up portion of the PayPal login page. Optional Character length and limit: 127 single-byte alphanumeric characters
	 * @var PayPalTypeEmailAddressType
	 */
	public $BuyerEmail;
	/**
	 * The ChannelType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeChannelType
	 */
	public $ChannelType;
	/**
	 * The BillingAgreementDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var PayPalTypeBillingAgreementDetailsType
	 */
	public $BillingAgreementDetails;
	/**
	 * The PromoCodes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Promo Code Optional List of promo codes supplied by merchant. These promo codes enable the Merchant Services Promotion Financing feature.
	 * @var string
	 */
	public $PromoCodes;
	/**
	 * The PayPalCheckOutBtnType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Default Funding option for PayLater Checkout button.
	 * @var string
	 */
	public $PayPalCheckOutBtnType;
	/**
	 * The ProductCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeProductCategoryType
	 */
	public $ProductCategory;
	/**
	 * The ShippingMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeShippingServiceCodeType
	 */
	public $ShippingMethod;
	/**
	 * The ProfileAddressChangeDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Date and time (in GMT in the format yyyy-MM-ddTHH:mm:ssZ) at which address was changed by the user.
	 * @var dateTime
	 */
	public $ProfileAddressChangeDate;
	/**
	 * The AllowNote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The value 1 indicates that the customer may enter a note to the merchant on the PayPal page during checkout. The note is returned in the GetExpressCheckoutDetails response and the DoExpressCheckoutPayment response. Optional Character length and limitations: One single-byte numeric character. Allowable values: 0,1
	 * @var string
	 */
	public $AllowNote;
	/**
	 * The FundingSourceDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Funding source preferences.
	 * @var PayPalTypeFundingSourceDetailsType
	 */
	public $FundingSourceDetails;
	/**
	 * The BrandName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The label that needs to be displayed on the cancel links in the PayPal hosted checkout pages. Optional Character length and limit: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $BrandName;
	/**
	 * The CallbackURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : URL for PayPal to use to retrieve shipping, handling, insurance, and tax details from your website. Optional Character length and limitations: 2048 characters.
	 * @var string
	 */
	public $CallbackURL;
	/**
	 * The EnhancedCheckoutData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Enhanced data for different industry segments. Optional
	 * @var PayPalTypeEnhancedCheckoutDataType
	 */
	public $EnhancedCheckoutData;
	/**
	 * The OtherPaymentMethods
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : List of other payment methods the user can pay with. Optional Refer to the OtherPaymentMethodDetailsType for more details.
	 * @var PayPalTypeOtherPaymentMethodDetailsType
	 */
	public $OtherPaymentMethods;
	/**
	 * The BuyerDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Details about the buyer's account. Optional Refer to the BuyerDetailsType for more details.
	 * @var PayPalTypeBuyerDetailsType
	 */
	public $BuyerDetails;
	/**
	 * The PaymentDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 10
	 * 	- documentation : Information about the payment.
	 * @var PayPalTypePaymentDetailsType
	 */
	public $PaymentDetails;
	/**
	 * The FlatRateShippingOptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : List of Fall Back Shipping options provided by merchant.
	 * @var PayPalTypeShippingOptionType
	 */
	public $FlatRateShippingOptions;
	/**
	 * The CallbackTimeout
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the call back timeout override.
	 * @var string
	 */
	public $CallbackTimeout;
	/**
	 * The CallbackVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the call back version.
	 * @var string
	 */
	public $CallbackVersion;
	/**
	 * The CustomerServiceNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Customer service number.
	 * @var string
	 */
	public $CustomerServiceNumber;
	/**
	 * The GiftMessageEnable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Gift message enable.
	 * @var string
	 */
	public $GiftMessageEnable;
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
	 * The GiftWrapEnable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Gift Wrap enable.
	 * @var string
	 */
	public $GiftWrapEnable;
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
	 * The BuyerEmailOptInEnable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Buyer email option enable .
	 * @var string
	 */
	public $BuyerEmailOptInEnable;
	/**
	 * The SurveyEnable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the survey enable.
	 * @var string
	 */
	public $SurveyEnable;
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
	 * The SurveyChoice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Information about the survey choices for survey question.
	 * @var string
	 */
	public $SurveyChoice;
	/**
	 * The TotalType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeTotalType
	 */
	public $TotalType;
	/**
	 * The NoteToBuyer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Any message the seller would like to be displayed in the Mini Cart for UX.
	 * @var string
	 */
	public $NoteToBuyer;
	/**
	 * The Incentives
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Incentive Code Optional List of incentive codes supplied by ebay/merchant.
	 * @var PayPalTypeIncentiveInfoType
	 */
	public $Incentives;
	/**
	 * The ReqInstrumentDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Merchant specified flag which indicates whether to return Funding Instrument Details in DoEC or not. Optional
	 * @var string
	 */
	public $ReqInstrumentDetails;
	/**
	 * The ExternalRememberMeOptInDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : This element contains information that allows the merchant to request to opt into external remember me on behalf of the buyer or to request login bypass using external remember me. Note the opt-in details are silently ignored if the ExternalRememberMeID is present.
	 * @var PayPalTypeExternalRememberMeOptInDetailsType
	 */
	public $ExternalRememberMeOptInDetails;
	/**
	 * The FlowControlDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : An optional set of values related to flow-specific details.
	 * @var PayPalTypeFlowControlDetailsType
	 */
	public $FlowControlDetails;
	/**
	 * The DisplayControlDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : An optional set of values related to display-specific details.
	 * @var PayPalTypeDisplayControlDetailsType
	 */
	public $DisplayControlDetails;
	/**
	 * The ExternalPartnerTrackingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : An optional set of values related to tracking for external partner.
	 * @var PayPalTypeExternalPartnerTrackingDetailsType
	 */
	public $ExternalPartnerTrackingDetails;
	/**
	 * Constructor
	 * @param PayPalTypeBasicAmountType OrderTotal
	 * @param string ReturnURL
	 * @param string CancelURL
	 * @param string TrackingImageURL
	 * @param string giropaySuccessURL
	 * @param string giropayCancelURL
	 * @param string BanktxnPendingURL
	 * @param PayPalTypeExpressCheckoutTokenType Token
	 * @param PayPalTypeBasicAmountType MaxAmount
	 * @param string OrderDescription
	 * @param string Custom
	 * @param string InvoiceID
	 * @param string ReqConfirmShipping
	 * @param string ReqBillingAddress
	 * @param PayPalTypeAddressType BillingAddress
	 * @param string NoShipping
	 * @param string AddressOverride
	 * @param string LocaleCode
	 * @param string PageStyle
	 * @param string cpp-header-image
	 * @param string cpp-header-border-color
	 * @param string cpp-header-back-color
	 * @param string cpp-payflow-color
	 * @param string cpp-cart-border-color
	 * @param string cpp-logo-image
	 * @param PayPalTypeAddressType Address
	 * @param PayPalTypePaymentActionCodeType PaymentAction
	 * @param PayPalTypeSolutionTypeType SolutionType
	 * @param PayPalTypeLandingPageType LandingPage
	 * @param PayPalTypeEmailAddressType BuyerEmail
	 * @param PayPalTypeChannelType ChannelType
	 * @param PayPalTypeBillingAgreementDetailsType BillingAgreementDetails
	 * @param string PromoCodes
	 * @param string PayPalCheckOutBtnType
	 * @param PayPalTypeProductCategoryType ProductCategory
	 * @param PayPalTypeShippingServiceCodeType ShippingMethod
	 * @param dateTime ProfileAddressChangeDate
	 * @param string AllowNote
	 * @param PayPalTypeFundingSourceDetailsType FundingSourceDetails
	 * @param string BrandName
	 * @param string CallbackURL
	 * @param PayPalTypeEnhancedCheckoutDataType EnhancedCheckoutData
	 * @param PayPalTypeOtherPaymentMethodDetailsType OtherPaymentMethods
	 * @param PayPalTypeBuyerDetailsType BuyerDetails
	 * @param PayPalTypePaymentDetailsType PaymentDetails
	 * @param PayPalTypeShippingOptionType FlatRateShippingOptions
	 * @param string CallbackTimeout
	 * @param string CallbackVersion
	 * @param string CustomerServiceNumber
	 * @param string GiftMessageEnable
	 * @param string GiftReceiptEnable
	 * @param string GiftWrapEnable
	 * @param string GiftWrapName
	 * @param PayPalTypeBasicAmountType GiftWrapAmount
	 * @param string BuyerEmailOptInEnable
	 * @param string SurveyEnable
	 * @param string SurveyQuestion
	 * @param string SurveyChoice
	 * @param PayPalTypeTotalType TotalType
	 * @param string NoteToBuyer
	 * @param PayPalTypeIncentiveInfoType Incentives
	 * @param string ReqInstrumentDetails
	 * @param PayPalTypeExternalRememberMeOptInDetailsType ExternalRememberMeOptInDetails
	 * @param PayPalTypeFlowControlDetailsType FlowControlDetails
	 * @param PayPalTypeDisplayControlDetailsType DisplayControlDetails
	 * @param PayPalTypeExternalPartnerTrackingDetailsType ExternalPartnerTrackingDetails
	 * @return PayPalTypeSetExpressCheckoutRequestDetailsType
	 */
	public function __construct($_OrderTotal = null,$_ReturnURL = null,$_CancelURL = null,$_TrackingImageURL = null,$_giropaySuccessURL = null,$_giropayCancelURL = null,$_BanktxnPendingURL = null,$_Token = null,$_MaxAmount = null,$_OrderDescription = null,$_Custom = null,$_InvoiceID = null,$_ReqConfirmShipping = null,$_ReqBillingAddress = null,$_BillingAddress = null,$_NoShipping = null,$_AddressOverride = null,$_LocaleCode = null,$_PageStyle = null,$_cpp_header_image = null,$_cpp_header_border_color = null,$_cpp_header_back_color = null,$_cpp_payflow_color = null,$_cpp_cart_border_color = null,$_cpp_logo_image = null,$_Address = null,$_PaymentAction = null,$_SolutionType = null,$_LandingPage = null,$_BuyerEmail = null,$_ChannelType = null,$_BillingAgreementDetails = null,$_PromoCodes = null,$_PayPalCheckOutBtnType = null,$_ProductCategory = null,$_ShippingMethod = null,$_ProfileAddressChangeDate = null,$_AllowNote = null,$_FundingSourceDetails = null,$_BrandName = null,$_CallbackURL = null,$_EnhancedCheckoutData = null,$_OtherPaymentMethods = null,$_BuyerDetails = null,$_PaymentDetails = null,$_FlatRateShippingOptions = null,$_CallbackTimeout = null,$_CallbackVersion = null,$_CustomerServiceNumber = null,$_GiftMessageEnable = null,$_GiftReceiptEnable = null,$_GiftWrapEnable = null,$_GiftWrapName = null,$_GiftWrapAmount = null,$_BuyerEmailOptInEnable = null,$_SurveyEnable = null,$_SurveyQuestion = null,$_SurveyChoice = null,$_TotalType = null,$_NoteToBuyer = null,$_Incentives = null,$_ReqInstrumentDetails = null,$_ExternalRememberMeOptInDetails = null,$_FlowControlDetails = null,$_DisplayControlDetails = null,$_ExternalPartnerTrackingDetails = null)
	{
		parent::__construct(array('OrderTotal'=>$_OrderTotal,'ReturnURL'=>$_ReturnURL,'CancelURL'=>$_CancelURL,'TrackingImageURL'=>$_TrackingImageURL,'giropaySuccessURL'=>$_giropaySuccessURL,'giropayCancelURL'=>$_giropayCancelURL,'BanktxnPendingURL'=>$_BanktxnPendingURL,'Token'=>$_Token,'MaxAmount'=>$_MaxAmount,'OrderDescription'=>$_OrderDescription,'Custom'=>$_Custom,'InvoiceID'=>$_InvoiceID,'ReqConfirmShipping'=>$_ReqConfirmShipping,'ReqBillingAddress'=>$_ReqBillingAddress,'BillingAddress'=>$_BillingAddress,'NoShipping'=>$_NoShipping,'AddressOverride'=>$_AddressOverride,'LocaleCode'=>$_LocaleCode,'PageStyle'=>$_PageStyle,'cpp_header_image'=>$_cpp_header_image,'cpp_header_border_color'=>$_cpp_header_border_color,'cpp_header_back_color'=>$_cpp_header_back_color,'cpp_payflow_color'=>$_cpp_payflow_color,'cpp_cart_border_color'=>$_cpp_cart_border_color,'cpp_logo_image'=>$_cpp_logo_image,'Address'=>$_Address,'PaymentAction'=>$_PaymentAction,'SolutionType'=>$_SolutionType,'LandingPage'=>$_LandingPage,'BuyerEmail'=>$_BuyerEmail,'ChannelType'=>$_ChannelType,'BillingAgreementDetails'=>$_BillingAgreementDetails,'PromoCodes'=>$_PromoCodes,'PayPalCheckOutBtnType'=>$_PayPalCheckOutBtnType,'ProductCategory'=>$_ProductCategory,'ShippingMethod'=>$_ShippingMethod,'ProfileAddressChangeDate'=>$_ProfileAddressChangeDate,'AllowNote'=>$_AllowNote,'FundingSourceDetails'=>$_FundingSourceDetails,'BrandName'=>$_BrandName,'CallbackURL'=>$_CallbackURL,'EnhancedCheckoutData'=>$_EnhancedCheckoutData,'OtherPaymentMethods'=>$_OtherPaymentMethods,'BuyerDetails'=>$_BuyerDetails,'PaymentDetails'=>$_PaymentDetails,'FlatRateShippingOptions'=>$_FlatRateShippingOptions,'CallbackTimeout'=>$_CallbackTimeout,'CallbackVersion'=>$_CallbackVersion,'CustomerServiceNumber'=>$_CustomerServiceNumber,'GiftMessageEnable'=>$_GiftMessageEnable,'GiftReceiptEnable'=>$_GiftReceiptEnable,'GiftWrapEnable'=>$_GiftWrapEnable,'GiftWrapName'=>$_GiftWrapName,'GiftWrapAmount'=>$_GiftWrapAmount,'BuyerEmailOptInEnable'=>$_BuyerEmailOptInEnable,'SurveyEnable'=>$_SurveyEnable,'SurveyQuestion'=>$_SurveyQuestion,'SurveyChoice'=>$_SurveyChoice,'TotalType'=>$_TotalType,'NoteToBuyer'=>$_NoteToBuyer,'Incentives'=>$_Incentives,'ReqInstrumentDetails'=>$_ReqInstrumentDetails,'ExternalRememberMeOptInDetails'=>$_ExternalRememberMeOptInDetails,'FlowControlDetails'=>$_FlowControlDetails,'DisplayControlDetails'=>$_DisplayControlDetails,'ExternalPartnerTrackingDetails'=>$_ExternalPartnerTrackingDetails));
	}
	/**
	 * Set OrderTotal
	 * @param BasicAmountType OrderTotal
	 * @return BasicAmountType
	 */
	public function setOrderTotal($_OrderTotal)
	{
		return ($this->OrderTotal = $_OrderTotal);
	}
	/**
	 * Get OrderTotal
	 * @return PayPalTypeBasicAmountType
	 */
	public function getOrderTotal()
	{
		return $this->OrderTotal;
	}
	/**
	 * Set ReturnURL
	 * @param string ReturnURL
	 * @return string
	 */
	public function setReturnURL($_ReturnURL)
	{
		return ($this->ReturnURL = $_ReturnURL);
	}
	/**
	 * Get ReturnURL
	 * @return string
	 */
	public function getReturnURL()
	{
		return $this->ReturnURL;
	}
	/**
	 * Set CancelURL
	 * @param string CancelURL
	 * @return string
	 */
	public function setCancelURL($_CancelURL)
	{
		return ($this->CancelURL = $_CancelURL);
	}
	/**
	 * Get CancelURL
	 * @return string
	 */
	public function getCancelURL()
	{
		return $this->CancelURL;
	}
	/**
	 * Set TrackingImageURL
	 * @param string TrackingImageURL
	 * @return string
	 */
	public function setTrackingImageURL($_TrackingImageURL)
	{
		return ($this->TrackingImageURL = $_TrackingImageURL);
	}
	/**
	 * Get TrackingImageURL
	 * @return string
	 */
	public function getTrackingImageURL()
	{
		return $this->TrackingImageURL;
	}
	/**
	 * Set giropaySuccessURL
	 * @param string giropaySuccessURL
	 * @return string
	 */
	public function setGiropaySuccessURL($_giropaySuccessURL)
	{
		return ($this->giropaySuccessURL = $_giropaySuccessURL);
	}
	/**
	 * Get giropaySuccessURL
	 * @return string
	 */
	public function getGiropaySuccessURL()
	{
		return $this->giropaySuccessURL;
	}
	/**
	 * Set giropayCancelURL
	 * @param string giropayCancelURL
	 * @return string
	 */
	public function setGiropayCancelURL($_giropayCancelURL)
	{
		return ($this->giropayCancelURL = $_giropayCancelURL);
	}
	/**
	 * Get giropayCancelURL
	 * @return string
	 */
	public function getGiropayCancelURL()
	{
		return $this->giropayCancelURL;
	}
	/**
	 * Set BanktxnPendingURL
	 * @param string BanktxnPendingURL
	 * @return string
	 */
	public function setBanktxnPendingURL($_BanktxnPendingURL)
	{
		return ($this->BanktxnPendingURL = $_BanktxnPendingURL);
	}
	/**
	 * Get BanktxnPendingURL
	 * @return string
	 */
	public function getBanktxnPendingURL()
	{
		return $this->BanktxnPendingURL;
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
	 * Set MaxAmount
	 * @param BasicAmountType MaxAmount
	 * @return BasicAmountType
	 */
	public function setMaxAmount($_MaxAmount)
	{
		return ($this->MaxAmount = $_MaxAmount);
	}
	/**
	 * Get MaxAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getMaxAmount()
	{
		return $this->MaxAmount;
	}
	/**
	 * Set OrderDescription
	 * @param string OrderDescription
	 * @return string
	 */
	public function setOrderDescription($_OrderDescription)
	{
		return ($this->OrderDescription = $_OrderDescription);
	}
	/**
	 * Get OrderDescription
	 * @return string
	 */
	public function getOrderDescription()
	{
		return $this->OrderDescription;
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
	 * Set ReqConfirmShipping
	 * @param string ReqConfirmShipping
	 * @return string
	 */
	public function setReqConfirmShipping($_ReqConfirmShipping)
	{
		return ($this->ReqConfirmShipping = $_ReqConfirmShipping);
	}
	/**
	 * Get ReqConfirmShipping
	 * @return string
	 */
	public function getReqConfirmShipping()
	{
		return $this->ReqConfirmShipping;
	}
	/**
	 * Set ReqBillingAddress
	 * @param string ReqBillingAddress
	 * @return string
	 */
	public function setReqBillingAddress($_ReqBillingAddress)
	{
		return ($this->ReqBillingAddress = $_ReqBillingAddress);
	}
	/**
	 * Get ReqBillingAddress
	 * @return string
	 */
	public function getReqBillingAddress()
	{
		return $this->ReqBillingAddress;
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
	 * Set NoShipping
	 * @param string NoShipping
	 * @return string
	 */
	public function setNoShipping($_NoShipping)
	{
		return ($this->NoShipping = $_NoShipping);
	}
	/**
	 * Get NoShipping
	 * @return string
	 */
	public function getNoShipping()
	{
		return $this->NoShipping;
	}
	/**
	 * Set AddressOverride
	 * @param string AddressOverride
	 * @return string
	 */
	public function setAddressOverride($_AddressOverride)
	{
		return ($this->AddressOverride = $_AddressOverride);
	}
	/**
	 * Get AddressOverride
	 * @return string
	 */
	public function getAddressOverride()
	{
		return $this->AddressOverride;
	}
	/**
	 * Set LocaleCode
	 * @param string LocaleCode
	 * @return string
	 */
	public function setLocaleCode($_LocaleCode)
	{
		return ($this->LocaleCode = $_LocaleCode);
	}
	/**
	 * Get LocaleCode
	 * @return string
	 */
	public function getLocaleCode()
	{
		return $this->LocaleCode;
	}
	/**
	 * Set PageStyle
	 * @param string PageStyle
	 * @return string
	 */
	public function setPageStyle($_PageStyle)
	{
		return ($this->PageStyle = $_PageStyle);
	}
	/**
	 * Get PageStyle
	 * @return string
	 */
	public function getPageStyle()
	{
		return $this->PageStyle;
	}
	/**
	 * Set cpp_header_image
	 * @param string cpp_header_image
	 * @return string
	 */
	public function setCpp_header_image($_cpp_header_image)
	{
		return ($this->cpp_header_image = $_cpp_header_image);
	}
	/**
	 * Get cpp_header_image
	 * @return string
	 */
	public function getCpp_header_image()
	{
		return $this->cpp_header_image;
	}
	/**
	 * Set cpp_header_border_color
	 * @param string cpp_header_border_color
	 * @return string
	 */
	public function setCpp_header_border_color($_cpp_header_border_color)
	{
		return ($this->cpp_header_border_color = $_cpp_header_border_color);
	}
	/**
	 * Get cpp_header_border_color
	 * @return string
	 */
	public function getCpp_header_border_color()
	{
		return $this->cpp_header_border_color;
	}
	/**
	 * Set cpp_header_back_color
	 * @param string cpp_header_back_color
	 * @return string
	 */
	public function setCpp_header_back_color($_cpp_header_back_color)
	{
		return ($this->cpp_header_back_color = $_cpp_header_back_color);
	}
	/**
	 * Get cpp_header_back_color
	 * @return string
	 */
	public function getCpp_header_back_color()
	{
		return $this->cpp_header_back_color;
	}
	/**
	 * Set cpp_payflow_color
	 * @param string cpp_payflow_color
	 * @return string
	 */
	public function setCpp_payflow_color($_cpp_payflow_color)
	{
		return ($this->cpp_payflow_color = $_cpp_payflow_color);
	}
	/**
	 * Get cpp_payflow_color
	 * @return string
	 */
	public function getCpp_payflow_color()
	{
		return $this->cpp_payflow_color;
	}
	/**
	 * Set cpp_cart_border_color
	 * @param string cpp_cart_border_color
	 * @return string
	 */
	public function setCpp_cart_border_color($_cpp_cart_border_color)
	{
		return ($this->cpp_cart_border_color = $_cpp_cart_border_color);
	}
	/**
	 * Get cpp_cart_border_color
	 * @return string
	 */
	public function getCpp_cart_border_color()
	{
		return $this->cpp_cart_border_color;
	}
	/**
	 * Set cpp_logo_image
	 * @param string cpp_logo_image
	 * @return string
	 */
	public function setCpp_logo_image($_cpp_logo_image)
	{
		return ($this->cpp_logo_image = $_cpp_logo_image);
	}
	/**
	 * Get cpp_logo_image
	 * @return string
	 */
	public function getCpp_logo_image()
	{
		return $this->cpp_logo_image;
	}
	/**
	 * Set Address
	 * @param AddressType Address
	 * @return AddressType
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return PayPalTypeAddressType
	 */
	public function getAddress()
	{
		return $this->Address;
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
	 * Set SolutionType
	 * @param SolutionTypeType SolutionType
	 * @return SolutionTypeType
	 */
	public function setSolutionType($_SolutionType)
	{
		return ($this->SolutionType = PayPalTypeSolutionTypeType::valueIsValid($_SolutionType)?$_SolutionType:null);
	}
	/**
	 * Get SolutionType
	 * @return PayPalTypeSolutionTypeType
	 */
	public function getSolutionType()
	{
		return $this->SolutionType;
	}
	/**
	 * Set LandingPage
	 * @param LandingPageType LandingPage
	 * @return LandingPageType
	 */
	public function setLandingPage($_LandingPage)
	{
		return ($this->LandingPage = PayPalTypeLandingPageType::valueIsValid($_LandingPage)?$_LandingPage:null);
	}
	/**
	 * Get LandingPage
	 * @return PayPalTypeLandingPageType
	 */
	public function getLandingPage()
	{
		return $this->LandingPage;
	}
	/**
	 * Set BuyerEmail
	 * @param EmailAddressType BuyerEmail
	 * @return EmailAddressType
	 */
	public function setBuyerEmail($_BuyerEmail)
	{
		return ($this->BuyerEmail = PayPalTypeEmailAddressType::valueIsValid($_BuyerEmail)?$_BuyerEmail:null);
	}
	/**
	 * Get BuyerEmail
	 * @return PayPalTypeEmailAddressType
	 */
	public function getBuyerEmail()
	{
		return $this->BuyerEmail;
	}
	/**
	 * Set ChannelType
	 * @param ChannelType ChannelType
	 * @return ChannelType
	 */
	public function setChannelType($_ChannelType)
	{
		return ($this->ChannelType = PayPalTypeChannelType::valueIsValid($_ChannelType)?$_ChannelType:null);
	}
	/**
	 * Get ChannelType
	 * @return PayPalTypeChannelType
	 */
	public function getChannelType()
	{
		return $this->ChannelType;
	}
	/**
	 * Set BillingAgreementDetails
	 * @param BillingAgreementDetailsType BillingAgreementDetails
	 * @return BillingAgreementDetailsType
	 */
	public function setBillingAgreementDetails($_BillingAgreementDetails)
	{
		return ($this->BillingAgreementDetails = $_BillingAgreementDetails);
	}
	/**
	 * Get BillingAgreementDetails
	 * @return PayPalTypeBillingAgreementDetailsType
	 */
	public function getBillingAgreementDetails()
	{
		return $this->BillingAgreementDetails;
	}
	/**
	 * Set PromoCodes
	 * @param string PromoCodes
	 * @return string
	 */
	public function setPromoCodes($_PromoCodes)
	{
		return ($this->PromoCodes = $_PromoCodes);
	}
	/**
	 * Get PromoCodes
	 * @return string
	 */
	public function getPromoCodes()
	{
		return $this->PromoCodes;
	}
	/**
	 * Set PayPalCheckOutBtnType
	 * @param string PayPalCheckOutBtnType
	 * @return string
	 */
	public function setPayPalCheckOutBtnType($_PayPalCheckOutBtnType)
	{
		return ($this->PayPalCheckOutBtnType = $_PayPalCheckOutBtnType);
	}
	/**
	 * Get PayPalCheckOutBtnType
	 * @return string
	 */
	public function getPayPalCheckOutBtnType()
	{
		return $this->PayPalCheckOutBtnType;
	}
	/**
	 * Set ProductCategory
	 * @param ProductCategoryType ProductCategory
	 * @return ProductCategoryType
	 */
	public function setProductCategory($_ProductCategory)
	{
		return ($this->ProductCategory = PayPalTypeProductCategoryType::valueIsValid($_ProductCategory)?$_ProductCategory:null);
	}
	/**
	 * Get ProductCategory
	 * @return PayPalTypeProductCategoryType
	 */
	public function getProductCategory()
	{
		return $this->ProductCategory;
	}
	/**
	 * Set ShippingMethod
	 * @param ShippingServiceCodeType ShippingMethod
	 * @return ShippingServiceCodeType
	 */
	public function setShippingMethod($_ShippingMethod)
	{
		return ($this->ShippingMethod = PayPalTypeShippingServiceCodeType::valueIsValid($_ShippingMethod)?$_ShippingMethod:null);
	}
	/**
	 * Get ShippingMethod
	 * @return PayPalTypeShippingServiceCodeType
	 */
	public function getShippingMethod()
	{
		return $this->ShippingMethod;
	}
	/**
	 * Set ProfileAddressChangeDate
	 * @param dateTime ProfileAddressChangeDate
	 * @return dateTime
	 */
	public function setProfileAddressChangeDate($_ProfileAddressChangeDate)
	{
		return ($this->ProfileAddressChangeDate = $_ProfileAddressChangeDate);
	}
	/**
	 * Get ProfileAddressChangeDate
	 * @return dateTime
	 */
	public function getProfileAddressChangeDate()
	{
		return $this->ProfileAddressChangeDate;
	}
	/**
	 * Set AllowNote
	 * @param string AllowNote
	 * @return string
	 */
	public function setAllowNote($_AllowNote)
	{
		return ($this->AllowNote = $_AllowNote);
	}
	/**
	 * Get AllowNote
	 * @return string
	 */
	public function getAllowNote()
	{
		return $this->AllowNote;
	}
	/**
	 * Set FundingSourceDetails
	 * @param FundingSourceDetailsType FundingSourceDetails
	 * @return FundingSourceDetailsType
	 */
	public function setFundingSourceDetails($_FundingSourceDetails)
	{
		return ($this->FundingSourceDetails = $_FundingSourceDetails);
	}
	/**
	 * Get FundingSourceDetails
	 * @return PayPalTypeFundingSourceDetailsType
	 */
	public function getFundingSourceDetails()
	{
		return $this->FundingSourceDetails;
	}
	/**
	 * Set BrandName
	 * @param string BrandName
	 * @return string
	 */
	public function setBrandName($_BrandName)
	{
		return ($this->BrandName = $_BrandName);
	}
	/**
	 * Get BrandName
	 * @return string
	 */
	public function getBrandName()
	{
		return $this->BrandName;
	}
	/**
	 * Set CallbackURL
	 * @param string CallbackURL
	 * @return string
	 */
	public function setCallbackURL($_CallbackURL)
	{
		return ($this->CallbackURL = $_CallbackURL);
	}
	/**
	 * Get CallbackURL
	 * @return string
	 */
	public function getCallbackURL()
	{
		return $this->CallbackURL;
	}
	/**
	 * Set EnhancedCheckoutData
	 * @param EnhancedCheckoutDataType EnhancedCheckoutData
	 * @return EnhancedCheckoutDataType
	 */
	public function setEnhancedCheckoutData($_EnhancedCheckoutData)
	{
		return ($this->EnhancedCheckoutData = $_EnhancedCheckoutData);
	}
	/**
	 * Get EnhancedCheckoutData
	 * @return PayPalTypeEnhancedCheckoutDataType
	 */
	public function getEnhancedCheckoutData()
	{
		return $this->EnhancedCheckoutData;
	}
	/**
	 * Set OtherPaymentMethods
	 * @param OtherPaymentMethodDetailsType OtherPaymentMethods
	 * @return OtherPaymentMethodDetailsType
	 */
	public function setOtherPaymentMethods($_OtherPaymentMethods)
	{
		return ($this->OtherPaymentMethods = $_OtherPaymentMethods);
	}
	/**
	 * Get OtherPaymentMethods
	 * @return PayPalTypeOtherPaymentMethodDetailsType
	 */
	public function getOtherPaymentMethods()
	{
		return $this->OtherPaymentMethods;
	}
	/**
	 * Set BuyerDetails
	 * @param BuyerDetailsType BuyerDetails
	 * @return BuyerDetailsType
	 */
	public function setBuyerDetails($_BuyerDetails)
	{
		return ($this->BuyerDetails = $_BuyerDetails);
	}
	/**
	 * Get BuyerDetails
	 * @return PayPalTypeBuyerDetailsType
	 */
	public function getBuyerDetails()
	{
		return $this->BuyerDetails;
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
	 * Set FlatRateShippingOptions
	 * @param ShippingOptionType FlatRateShippingOptions
	 * @return ShippingOptionType
	 */
	public function setFlatRateShippingOptions($_FlatRateShippingOptions)
	{
		return ($this->FlatRateShippingOptions = $_FlatRateShippingOptions);
	}
	/**
	 * Get FlatRateShippingOptions
	 * @return PayPalTypeShippingOptionType
	 */
	public function getFlatRateShippingOptions()
	{
		return $this->FlatRateShippingOptions;
	}
	/**
	 * Set CallbackTimeout
	 * @param string CallbackTimeout
	 * @return string
	 */
	public function setCallbackTimeout($_CallbackTimeout)
	{
		return ($this->CallbackTimeout = $_CallbackTimeout);
	}
	/**
	 * Get CallbackTimeout
	 * @return string
	 */
	public function getCallbackTimeout()
	{
		return $this->CallbackTimeout;
	}
	/**
	 * Set CallbackVersion
	 * @param string CallbackVersion
	 * @return string
	 */
	public function setCallbackVersion($_CallbackVersion)
	{
		return ($this->CallbackVersion = $_CallbackVersion);
	}
	/**
	 * Get CallbackVersion
	 * @return string
	 */
	public function getCallbackVersion()
	{
		return $this->CallbackVersion;
	}
	/**
	 * Set CustomerServiceNumber
	 * @param string CustomerServiceNumber
	 * @return string
	 */
	public function setCustomerServiceNumber($_CustomerServiceNumber)
	{
		return ($this->CustomerServiceNumber = $_CustomerServiceNumber);
	}
	/**
	 * Get CustomerServiceNumber
	 * @return string
	 */
	public function getCustomerServiceNumber()
	{
		return $this->CustomerServiceNumber;
	}
	/**
	 * Set GiftMessageEnable
	 * @param string GiftMessageEnable
	 * @return string
	 */
	public function setGiftMessageEnable($_GiftMessageEnable)
	{
		return ($this->GiftMessageEnable = $_GiftMessageEnable);
	}
	/**
	 * Get GiftMessageEnable
	 * @return string
	 */
	public function getGiftMessageEnable()
	{
		return $this->GiftMessageEnable;
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
	 * Set GiftWrapEnable
	 * @param string GiftWrapEnable
	 * @return string
	 */
	public function setGiftWrapEnable($_GiftWrapEnable)
	{
		return ($this->GiftWrapEnable = $_GiftWrapEnable);
	}
	/**
	 * Get GiftWrapEnable
	 * @return string
	 */
	public function getGiftWrapEnable()
	{
		return $this->GiftWrapEnable;
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
	 * Set BuyerEmailOptInEnable
	 * @param string BuyerEmailOptInEnable
	 * @return string
	 */
	public function setBuyerEmailOptInEnable($_BuyerEmailOptInEnable)
	{
		return ($this->BuyerEmailOptInEnable = $_BuyerEmailOptInEnable);
	}
	/**
	 * Get BuyerEmailOptInEnable
	 * @return string
	 */
	public function getBuyerEmailOptInEnable()
	{
		return $this->BuyerEmailOptInEnable;
	}
	/**
	 * Set SurveyEnable
	 * @param string SurveyEnable
	 * @return string
	 */
	public function setSurveyEnable($_SurveyEnable)
	{
		return ($this->SurveyEnable = $_SurveyEnable);
	}
	/**
	 * Get SurveyEnable
	 * @return string
	 */
	public function getSurveyEnable()
	{
		return $this->SurveyEnable;
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
	 * Set SurveyChoice
	 * @param string SurveyChoice
	 * @return string
	 */
	public function setSurveyChoice($_SurveyChoice)
	{
		return ($this->SurveyChoice = $_SurveyChoice);
	}
	/**
	 * Get SurveyChoice
	 * @return string
	 */
	public function getSurveyChoice()
	{
		return $this->SurveyChoice;
	}
	/**
	 * Set TotalType
	 * @param TotalType TotalType
	 * @return TotalType
	 */
	public function setTotalType($_TotalType)
	{
		return ($this->TotalType = PayPalTypeTotalType::valueIsValid($_TotalType)?$_TotalType:null);
	}
	/**
	 * Get TotalType
	 * @return PayPalTypeTotalType
	 */
	public function getTotalType()
	{
		return $this->TotalType;
	}
	/**
	 * Set NoteToBuyer
	 * @param string NoteToBuyer
	 * @return string
	 */
	public function setNoteToBuyer($_NoteToBuyer)
	{
		return ($this->NoteToBuyer = $_NoteToBuyer);
	}
	/**
	 * Get NoteToBuyer
	 * @return string
	 */
	public function getNoteToBuyer()
	{
		return $this->NoteToBuyer;
	}
	/**
	 * Set Incentives
	 * @param IncentiveInfoType Incentives
	 * @return IncentiveInfoType
	 */
	public function setIncentives($_Incentives)
	{
		return ($this->Incentives = $_Incentives);
	}
	/**
	 * Get Incentives
	 * @return PayPalTypeIncentiveInfoType
	 */
	public function getIncentives()
	{
		return $this->Incentives;
	}
	/**
	 * Set ReqInstrumentDetails
	 * @param string ReqInstrumentDetails
	 * @return string
	 */
	public function setReqInstrumentDetails($_ReqInstrumentDetails)
	{
		return ($this->ReqInstrumentDetails = $_ReqInstrumentDetails);
	}
	/**
	 * Get ReqInstrumentDetails
	 * @return string
	 */
	public function getReqInstrumentDetails()
	{
		return $this->ReqInstrumentDetails;
	}
	/**
	 * Set ExternalRememberMeOptInDetails
	 * @param ExternalRememberMeOptInDetailsType ExternalRememberMeOptInDetails
	 * @return ExternalRememberMeOptInDetailsType
	 */
	public function setExternalRememberMeOptInDetails($_ExternalRememberMeOptInDetails)
	{
		return ($this->ExternalRememberMeOptInDetails = $_ExternalRememberMeOptInDetails);
	}
	/**
	 * Get ExternalRememberMeOptInDetails
	 * @return PayPalTypeExternalRememberMeOptInDetailsType
	 */
	public function getExternalRememberMeOptInDetails()
	{
		return $this->ExternalRememberMeOptInDetails;
	}
	/**
	 * Set FlowControlDetails
	 * @param FlowControlDetailsType FlowControlDetails
	 * @return FlowControlDetailsType
	 */
	public function setFlowControlDetails($_FlowControlDetails)
	{
		return ($this->FlowControlDetails = $_FlowControlDetails);
	}
	/**
	 * Get FlowControlDetails
	 * @return PayPalTypeFlowControlDetailsType
	 */
	public function getFlowControlDetails()
	{
		return $this->FlowControlDetails;
	}
	/**
	 * Set DisplayControlDetails
	 * @param DisplayControlDetailsType DisplayControlDetails
	 * @return DisplayControlDetailsType
	 */
	public function setDisplayControlDetails($_DisplayControlDetails)
	{
		return ($this->DisplayControlDetails = $_DisplayControlDetails);
	}
	/**
	 * Get DisplayControlDetails
	 * @return PayPalTypeDisplayControlDetailsType
	 */
	public function getDisplayControlDetails()
	{
		return $this->DisplayControlDetails;
	}
	/**
	 * Set ExternalPartnerTrackingDetails
	 * @param ExternalPartnerTrackingDetailsType ExternalPartnerTrackingDetails
	 * @return ExternalPartnerTrackingDetailsType
	 */
	public function setExternalPartnerTrackingDetails($_ExternalPartnerTrackingDetails)
	{
		return ($this->ExternalPartnerTrackingDetails = $_ExternalPartnerTrackingDetails);
	}
	/**
	 * Get ExternalPartnerTrackingDetails
	 * @return PayPalTypeExternalPartnerTrackingDetailsType
	 */
	public function getExternalPartnerTrackingDetails()
	{
		return $this->ExternalPartnerTrackingDetails;
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