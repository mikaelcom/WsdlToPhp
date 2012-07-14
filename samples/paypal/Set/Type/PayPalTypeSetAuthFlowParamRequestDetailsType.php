<?php
/**
 * Class file for PayPalTypeSetAuthFlowParamRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetAuthFlowParamRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeSetAuthFlowParamRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The ReturnURL
	 * Meta informations :
	 * 	- documentation : URL to which the customer's browser is returned after choosing to login with PayPal. Required Character length and limitations: no limit.
	 * @var string
	 */
	public $ReturnURL;
	/**
	 * The CancelURL
	 * Meta informations :
	 * 	- documentation : URL to which the customer is returned if he does not approve the use of PayPal login. Required Character length and limitations: no limit
	 * @var string
	 */
	public $CancelURL;
	/**
	 * The LogoutURL
	 * Meta informations :
	 * 	- documentation : URL to which the customer's browser is returned after user logs out from PayPal. Required Character length and limitations: no limit.
	 * @var string
	 */
	public $LogoutURL;
	/**
	 * The InitFlowType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of the flow. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $InitFlowType;
	/**
	 * The SkipLoginPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The used to decide SkipLogin allowed or not. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $SkipLoginPage;
	/**
	 * The ServiceName1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the field Merchant requires from PayPal after user's login. Optional Character length and limitations: 256 single-byte alphanumeric characters
	 * @var string
	 */
	public $ServiceName1;
	/**
	 * The ServiceDefReq1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the field is required, opt-in or opt-out. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $ServiceDefReq1;
	/**
	 * The ServiceName2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the field Merchant requires from PayPal after user's login. Optional Character length and limitations: 256 single-byte alphanumeric characters
	 * @var string
	 */
	public $ServiceName2;
	/**
	 * The ServiceDefReq2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the field is required, opt-in or opt-out. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $ServiceDefReq2;
	/**
	 * The LocaleCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Locale of pages displayed by PayPal during Authentication Login. Optional Character length and limitations: Five single-byte alphabetic characters, upper- or lowercase. Allowable values: AU or en_AUDE or de_DEFR or fr_FRGB or en_GBIT or it_ITJP or ja_JPUS or en_US
	 * @var string
	 */
	public $LocaleCode;
	/**
	 * The PageStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sets the Custom Payment Page Style for flow pages associated with this button/link. PageStyle corresponds to the HTML variable page_style for customizing flow pages. The value is the same as the Page Style Name you chose when adding or editing the page style from the Profile subtab of the My Account tab of your PayPal account. Optional Character length and limitations: 30 single-byte alphabetic characters.
	 * @var string
	 */
	public $PageStyle;
	/**
	 * The cpp-header-image
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A URL for the image you want to appear at the top left of the flow page. The image has a maximum size of 750 pixels wide by 90 pixels high. PayPal recommends that you provide an image that is stored on a secure (https) server. Optional Character length and limitations: 127
	 * @var string
	 */
	public $cpp_header_image;
	/**
	 * The cpp-header-border-color
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sets the border color around the header of the flow page. The border is a 2-pixel perimeter around the header space, which is 750 pixels wide by 90 pixels high. Optional Character length and limitations: Six character HTML hexadecimal color code in ASCII
	 * @var string
	 */
	public $cpp_header_border_color;
	/**
	 * The cpp-header-back-color
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sets the background color for the header of the flow page. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
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
	 * The FirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : First Name of the user, this information is used if user chooses to signup with PayPal. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 * @var string
	 */
	public $FirstName;
	/**
	 * The LastName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Last Name of the user, this information is used if user chooses to signup with PayPal. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
	 * @var string
	 */
	public $LastName;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : User address, this information is used when user chooses to signup for PayPal. Optional If you include a shipping address and set the AddressOverride element on the request, PayPal returns this same address in GetExpressCheckoutDetailsResponse.
	 * @var PayPalTypeAddressType
	 */
	public $Address;
	/**
	 * Constructor
	 * @param string ReturnURL
	 * @param string CancelURL
	 * @param string LogoutURL
	 * @param string InitFlowType
	 * @param string SkipLoginPage
	 * @param string ServiceName1
	 * @param string ServiceDefReq1
	 * @param string ServiceName2
	 * @param string ServiceDefReq2
	 * @param string LocaleCode
	 * @param string PageStyle
	 * @param string cpp-header-image
	 * @param string cpp-header-border-color
	 * @param string cpp-header-back-color
	 * @param string cpp-payflow-color
	 * @param string FirstName
	 * @param string LastName
	 * @param PayPalTypeAddressType Address
	 * @return PayPalTypeSetAuthFlowParamRequestDetailsType
	 */
	public function __construct($_ReturnURL = null,$_CancelURL = null,$_LogoutURL = null,$_InitFlowType = null,$_SkipLoginPage = null,$_ServiceName1 = null,$_ServiceDefReq1 = null,$_ServiceName2 = null,$_ServiceDefReq2 = null,$_LocaleCode = null,$_PageStyle = null,$_cpp_header_image = null,$_cpp_header_border_color = null,$_cpp_header_back_color = null,$_cpp_payflow_color = null,$_FirstName = null,$_LastName = null,$_Address = null)
	{
		parent::__construct(array('ReturnURL'=>$_ReturnURL,'CancelURL'=>$_CancelURL,'LogoutURL'=>$_LogoutURL,'InitFlowType'=>$_InitFlowType,'SkipLoginPage'=>$_SkipLoginPage,'ServiceName1'=>$_ServiceName1,'ServiceDefReq1'=>$_ServiceDefReq1,'ServiceName2'=>$_ServiceName2,'ServiceDefReq2'=>$_ServiceDefReq2,'LocaleCode'=>$_LocaleCode,'PageStyle'=>$_PageStyle,'cpp_header_image'=>$_cpp_header_image,'cpp_header_border_color'=>$_cpp_header_border_color,'cpp_header_back_color'=>$_cpp_header_back_color,'cpp_payflow_color'=>$_cpp_payflow_color,'FirstName'=>$_FirstName,'LastName'=>$_LastName,'Address'=>$_Address));
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
	 * Set LogoutURL
	 * @param string LogoutURL
	 * @return string
	 */
	public function setLogoutURL($_LogoutURL)
	{
		return ($this->LogoutURL = $_LogoutURL);
	}
	/**
	 * Get LogoutURL
	 * @return string
	 */
	public function getLogoutURL()
	{
		return $this->LogoutURL;
	}
	/**
	 * Set InitFlowType
	 * @param string InitFlowType
	 * @return string
	 */
	public function setInitFlowType($_InitFlowType)
	{
		return ($this->InitFlowType = $_InitFlowType);
	}
	/**
	 * Get InitFlowType
	 * @return string
	 */
	public function getInitFlowType()
	{
		return $this->InitFlowType;
	}
	/**
	 * Set SkipLoginPage
	 * @param string SkipLoginPage
	 * @return string
	 */
	public function setSkipLoginPage($_SkipLoginPage)
	{
		return ($this->SkipLoginPage = $_SkipLoginPage);
	}
	/**
	 * Get SkipLoginPage
	 * @return string
	 */
	public function getSkipLoginPage()
	{
		return $this->SkipLoginPage;
	}
	/**
	 * Set ServiceName1
	 * @param string ServiceName1
	 * @return string
	 */
	public function setServiceName1($_ServiceName1)
	{
		return ($this->ServiceName1 = $_ServiceName1);
	}
	/**
	 * Get ServiceName1
	 * @return string
	 */
	public function getServiceName1()
	{
		return $this->ServiceName1;
	}
	/**
	 * Set ServiceDefReq1
	 * @param string ServiceDefReq1
	 * @return string
	 */
	public function setServiceDefReq1($_ServiceDefReq1)
	{
		return ($this->ServiceDefReq1 = $_ServiceDefReq1);
	}
	/**
	 * Get ServiceDefReq1
	 * @return string
	 */
	public function getServiceDefReq1()
	{
		return $this->ServiceDefReq1;
	}
	/**
	 * Set ServiceName2
	 * @param string ServiceName2
	 * @return string
	 */
	public function setServiceName2($_ServiceName2)
	{
		return ($this->ServiceName2 = $_ServiceName2);
	}
	/**
	 * Get ServiceName2
	 * @return string
	 */
	public function getServiceName2()
	{
		return $this->ServiceName2;
	}
	/**
	 * Set ServiceDefReq2
	 * @param string ServiceDefReq2
	 * @return string
	 */
	public function setServiceDefReq2($_ServiceDefReq2)
	{
		return ($this->ServiceDefReq2 = $_ServiceDefReq2);
	}
	/**
	 * Get ServiceDefReq2
	 * @return string
	 */
	public function getServiceDefReq2()
	{
		return $this->ServiceDefReq2;
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
	 * Set FirstName
	 * @param string FirstName
	 * @return string
	 */
	public function setFirstName($_FirstName)
	{
		return ($this->FirstName = $_FirstName);
	}
	/**
	 * Get FirstName
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->FirstName;
	}
	/**
	 * Set LastName
	 * @param string LastName
	 * @return string
	 */
	public function setLastName($_LastName)
	{
		return ($this->LastName = $_LastName);
	}
	/**
	 * Get LastName
	 * @return string
	 */
	public function getLastName()
	{
		return $this->LastName;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>