<?php
/**
 * Class file for PayPalTypeDoExpressCheckoutPaymentResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoExpressCheckoutPaymentResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeDoExpressCheckoutPaymentResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The Token
	 * Meta informations :
	 * 	- documentation : The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. Character length and limitations:20 single-byte characters
	 * @var PayPalTypeExpressCheckoutTokenType
	 */
	public $Token;
	/**
	 * The PaymentInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 10
	 * 	- documentation : Information about the transaction
	 * @var PayPalTypePaymentInfoType
	 */
	public $PaymentInfo;
	/**
	 * The BillingAgreementID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $BillingAgreementID;
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
	 * The Note
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Memo entered by sender in PayPal Review Page note field. Optional Character length and limitations: 255 single-byte alphanumeric characters
	 * @var string
	 */
	public $Note;
	/**
	 * The SuccessPageRedirectRequested
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Redirect back to PayPal, PayPal can host the success page.
	 * @var string
	 */
	public $SuccessPageRedirectRequested;
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
	 * Constructor
	 * @param PayPalTypeExpressCheckoutTokenType Token
	 * @param PayPalTypePaymentInfoType PaymentInfo
	 * @param string BillingAgreementID
	 * @param string RedirectRequired
	 * @param string Note
	 * @param string SuccessPageRedirectRequested
	 * @param PayPalTypeUserSelectedOptionType UserSelectedOptions
	 * @return PayPalTypeDoExpressCheckoutPaymentResponseDetailsType
	 */
	public function __construct($_Token = null,$_PaymentInfo = null,$_BillingAgreementID = null,$_RedirectRequired = null,$_Note = null,$_SuccessPageRedirectRequested = null,$_UserSelectedOptions = null)
	{
		parent::__construct(array('Token'=>$_Token,'PaymentInfo'=>$_PaymentInfo,'BillingAgreementID'=>$_BillingAgreementID,'RedirectRequired'=>$_RedirectRequired,'Note'=>$_Note,'SuccessPageRedirectRequested'=>$_SuccessPageRedirectRequested,'UserSelectedOptions'=>$_UserSelectedOptions));
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
	 * Set PaymentInfo
	 * @param PaymentInfoType PaymentInfo
	 * @return PaymentInfoType
	 */
	public function setPaymentInfo($_PaymentInfo)
	{
		return ($this->PaymentInfo = $_PaymentInfo);
	}
	/**
	 * Get PaymentInfo
	 * @return PayPalTypePaymentInfoType
	 */
	public function getPaymentInfo()
	{
		return $this->PaymentInfo;
	}
	/**
	 * Set BillingAgreementID
	 * @param string BillingAgreementID
	 * @return string
	 */
	public function setBillingAgreementID($_BillingAgreementID)
	{
		return ($this->BillingAgreementID = $_BillingAgreementID);
	}
	/**
	 * Get BillingAgreementID
	 * @return string
	 */
	public function getBillingAgreementID()
	{
		return $this->BillingAgreementID;
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
	 * Set SuccessPageRedirectRequested
	 * @param string SuccessPageRedirectRequested
	 * @return string
	 */
	public function setSuccessPageRedirectRequested($_SuccessPageRedirectRequested)
	{
		return ($this->SuccessPageRedirectRequested = $_SuccessPageRedirectRequested);
	}
	/**
	 * Get SuccessPageRedirectRequested
	 * @return string
	 */
	public function getSuccessPageRedirectRequested()
	{
		return $this->SuccessPageRedirectRequested;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>