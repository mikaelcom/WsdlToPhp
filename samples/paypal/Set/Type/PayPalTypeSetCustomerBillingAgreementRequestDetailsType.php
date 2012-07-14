<?php
/**
 * Class file for PayPalTypeSetCustomerBillingAgreementRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetCustomerBillingAgreementRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeSetCustomerBillingAgreementRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The BillingAgreementDetails
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBillingAgreementDetailsType
	 */
	public $BillingAgreementDetails;
	/**
	 * The ReturnURL
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $ReturnURL;
	/**
	 * The CancelURL
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $CancelURL;
	/**
	 * The LocaleCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $LocaleCode;
	/**
	 * The PageStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $PageStyle;
	/**
	 * The cpp-header-image
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $cpp_header_image;
	/**
	 * The cpp-header-border-color
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $cpp_header_border_color;
	/**
	 * The cpp-header-back-color
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $cpp_header_back_color;
	/**
	 * The cpp-payflow-color
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $cpp_payflow_color;
	/**
	 * The BuyerEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeEmailAddressType
	 */
	public $BuyerEmail;
	/**
	 * The ReqBillingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The value 1 indicates that you require that the customer's billing address on file. Setting this element overrides the setting you have specified in Admin. Optional Character length and limitations: One single-byte numeric character.
	 * @var string
	 */
	public $ReqBillingAddress;
	/**
	 * Constructor
	 * @param PayPalTypeBillingAgreementDetailsType BillingAgreementDetails
	 * @param string ReturnURL
	 * @param string CancelURL
	 * @param string LocaleCode
	 * @param string PageStyle
	 * @param string cpp-header-image
	 * @param string cpp-header-border-color
	 * @param string cpp-header-back-color
	 * @param string cpp-payflow-color
	 * @param PayPalTypeEmailAddressType BuyerEmail
	 * @param string ReqBillingAddress
	 * @return PayPalTypeSetCustomerBillingAgreementRequestDetailsType
	 */
	public function __construct($_BillingAgreementDetails,$_ReturnURL,$_CancelURL,$_LocaleCode = null,$_PageStyle = null,$_cpp_header_image = null,$_cpp_header_border_color = null,$_cpp_header_back_color = null,$_cpp_payflow_color = null,$_BuyerEmail = null,$_ReqBillingAddress = null)
	{
		parent::__construct(array('BillingAgreementDetails'=>$_BillingAgreementDetails,'ReturnURL'=>$_ReturnURL,'CancelURL'=>$_CancelURL,'LocaleCode'=>$_LocaleCode,'PageStyle'=>$_PageStyle,'cpp_header_image'=>$_cpp_header_image,'cpp_header_border_color'=>$_cpp_header_border_color,'cpp_header_back_color'=>$_cpp_header_back_color,'cpp_payflow_color'=>$_cpp_payflow_color,'BuyerEmail'=>$_BuyerEmail,'ReqBillingAddress'=>$_ReqBillingAddress));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>