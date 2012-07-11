<?php
/**
 * Class file for EbayTradingTypeCharityInfoType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCharityInfoType
 * Documentation : This attribute is a unique identifier used by the corresponding social networking site to identify the nonprofit charity organization.
 * @date 04/07/2012
 */
class EbayTradingTypeCharityInfoType extends EbayTradingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of a non-profit charity organization. The <b>Name</b> field is required if non-registered charity organization, since these companies will not have a eBay Giving Works <b>CharityID</b>
	 * @var string
	 */
	public $Name;
	/**
	 * The Mission
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The mission statement of a nonprofit charity organization registered with eBay Giving Works. The mission statement is returned in <b>GetCharities</b> and is displayed in item listings if the nonprofit charity organization is registered with eBay Giving Works.
	 * @var string
	 */
	public $Mission;
	/**
	 * The LogoURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This URL indicates the location of the nonprofit charity organization's logo image. The image file must be JPG or GIF format, and its size cannot exceed 50 KB. This logo is displayed in item listings if the nonprofit charity organization is registered with eBay Giving Works. A standard eBay Giving Works logo is used in place of the charity organization's logo if the <b>LogoURL</b> or <b>LogoURLSelling</b> values are not provided or these value point to bad URLs or to URLs containing no images or images not meeting eBay logo size and format requirements. This value is returned if set.
	 * @var anyURI
	 */
	public $LogoURL;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Enumeration value that indicates whether or not the charity is a valid eBay Giving Works nonprofit organization.
	 * @var EbayTradingTypeCharityStatusCodeType
	 */
	public $Status;
	/**
	 * The SearchableString
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Keyword string to be used for search purposes.
	 * @var string
	 */
	public $SearchableString;
	/**
	 * The CharityRegion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Integer value that indicates the nonprofit charity organization's region. Each nonprofit charity organization may be associated with only one region.
	 * @var int
	 */
	public $CharityRegion;
	/**
	 * The CharityDomain
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 3
	 * 	- documentation : Integer value that indicates the domain (mission area) of the nonprofit charity organization. A nonprofit charity organization does not have to specify a charity domain, so it is possible that this field will not be returned in <b>GetCharities</b>. Each nonprofit charity organization can belong to as many as three charity domains.
	 * @var int
	 */
	public $CharityDomain;
	/**
	 * The CharityID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier created by eBay and assigned to registered nonprofit charity organizations. This identifier can be used as a filter in the <b>GetCharities</b> request, and it will always be returned if the nonprofity charity organization is registered with eBay Giving Works.
	 * @var string
	 */
	public $CharityID;
	/**
	 * The LogoURLSelling
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An alternative to the <b>LogoURL</b> value. This URL indicates the location of the nonprofit charity organization's logo image. The image file must be JPG or GIF format, and its size cannot exceed 50 KB. This URL will be used if the <b>LogoURL</b> value points to a broken link or if that location either contains no image or contains an image that does not meet the eBay requirements - GIF or JPG file; maximum size of 50 KB. A nonprofit charity organization's logo is displayed in item listings if the nonprofit charity organization is registered with eBay Giving Works. A standard eBay Giving Works logo is used in place of the charity organization's logo if the Logo URL is not provided. This value is returned if set.
	 * @var anyURI
	 */
	public $LogoURLSelling;
	/**
	 * The DisplayLogoSelling
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>Deprecated.</b> This field will be removed from the schema in a future release. Recommended to use IsFeaturedInSYI. This boolean value should be set to true if an alternate logo URL should be supplied by sellers using the eBay Sell Your Item flow. If this field has not been set to true, it will return the default value of false.
	 * @var boolean
	 */
	public $DisplayLogoSelling;
	/**
	 * The DisplayNameInCheckout
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>Deprecated.</b> This field will be removed from the schema in a future release. Recommended to use a combination of IsFeaturedInXO/DisplayAtCheckout, based on the scenario. Set this boolean value to true if the name of the nonprofit company should be shown during checkout. If this field has not been set to true, it will return the default value of false. If the user rolls their mouse over the name of the nonprofit company, they will see the nonprofit company's mission statement.
	 * @var boolean
	 */
	public $DisplayNameInCheckout;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field provides a short description about the nonprofit charity organization's primary purpose. "I want to support" will be added to the beginning of the contents of this field. For example, if the description is "the fight against cancer", then on the checkout page "I want to support the fight against cancer" will be displayed. The description may contain a maximum of 115 charecters. This value is returned if set.
	 * @var string
	 */
	public $Description;
	/**
	 * The ShowMultipleDonationAmountInCheckout
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field must be used with the DisplayNameInCheckout field to control the options that are visible to a buyer during checkout. If the DisplayNameInCheckout field is set to True, and the ShowMultipleDonationAmountInCheckout field is set to False, a checkbox with the one dollar option will be displayed during checkout. If the DisplayNameInCheckout field is set to False, and the ShowMultipleDonationAmountInCheckout field is set to False, no options will be displayed during checkout. <br><br> Reserved for future use. If the DisplayNameInCheckout field is set to True, and the ShowMultipleDonationAmountInCheckout field is set to True, a dropdown with multiple donation amounts will be displayed during checkout. If the DisplayNameInCheckout field is set to False, and the ShowMultipleDonationAmountInCheckout field is set to True, no options will be displayed during checkout, but the multiple donation amount field will be set.
	 * @var boolean
	 */
	public $ShowMultipleDonationAmountInCheckout;
	/**
	 * The ExternalID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier created and used by MissionFish to identify a registered nonprofit charity organization. This field is only returned for charities that are registered with MissionFish.
	 * @var string
	 */
	public $ExternalID;
	/**
	 * The PopularityIndex
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An integer value that indicates a nonprofit charity organization's popularity rank in comparison with other registered eBay Giving Works organizations. This value is determined and managed by MissionFish and is based on various factors. This value is always returned for nonprofit organizations registered with eBay Giving Works.
	 * @var int
	 */
	public $PopularityIndex;
	/**
	 * The EIN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value is the Employer Identification Number (EIN) of the nonprofit charity organization. A nonprofit company's EIN is used for tax purposes by the Internal Revenue Service. This value is returned if the nonprofit organization has an EIN and it has been set.
	 * @var string
	 */
	public $EIN;
	/**
	 * The NonProfitSecondName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An alternative name for the nonprofit charity organization. This value is used by PayPal to search for nonprofit organizations. This value is returned if set.
	 * @var string
	 */
	public $NonProfitSecondName;
	/**
	 * The NonProfitAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container consisting of the address (including latitude and longitude) of a nonprofit charity organization. This container is always returned if it is set.
	 * @var EbayTradingTypeNonProfitAddressType
	 */
	public $NonProfitAddress;
	/**
	 * The NonProfitSocialAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container consisting of the nonprofit charity organization's social networking site ID/handle. A <b>NonProfitSocialAddress</b> container will exist for each social networking site that the charity organization is asssociated with. Supported social networking sites include Facebook, Twitter, LinkedIn, Google+, MySpace, and Orkut. One or more of these containers are returned if set.
	 * @var EbayTradingTypeNonProfitSocialAddressType
	 */
	public $NonProfitSocialAddress;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Mission
	 * @param anyURI LogoURL
	 * @param EbayTradingTypeCharityStatusCodeType Status
	 * @param string SearchableString
	 * @param int CharityRegion
	 * @param int CharityDomain
	 * @param string CharityID
	 * @param anyURI LogoURLSelling
	 * @param boolean DisplayLogoSelling
	 * @param boolean DisplayNameInCheckout
	 * @param string Description
	 * @param boolean ShowMultipleDonationAmountInCheckout
	 * @param string ExternalID
	 * @param int PopularityIndex
	 * @param string EIN
	 * @param string NonProfitSecondName
	 * @param EbayTradingTypeNonProfitAddressType NonProfitAddress
	 * @param EbayTradingTypeNonProfitSocialAddressType NonProfitSocialAddress
	 * @param DOMDocument any
	 * @param string id
	 * @return EbayTradingTypeCharityInfoType
	 */
	public function __construct($_Name = null,$_Mission = null,$_LogoURL = null,$_Status = null,$_SearchableString = null,$_CharityRegion = null,$_CharityDomain = null,$_CharityID = null,$_LogoURLSelling = null,$_DisplayLogoSelling = null,$_DisplayNameInCheckout = null,$_Description = null,$_ShowMultipleDonationAmountInCheckout = null,$_ExternalID = null,$_PopularityIndex = null,$_EIN = null,$_NonProfitSecondName = null,$_NonProfitAddress = null,$_NonProfitSocialAddress = null,$_any = null,$_id = null)
	{
		parent::__construct(array('Name'=>$_Name,'Mission'=>$_Mission,'LogoURL'=>$_LogoURL,'Status'=>$_Status,'SearchableString'=>$_SearchableString,'CharityRegion'=>$_CharityRegion,'CharityDomain'=>$_CharityDomain,'CharityID'=>$_CharityID,'LogoURLSelling'=>$_LogoURLSelling,'DisplayLogoSelling'=>$_DisplayLogoSelling,'DisplayNameInCheckout'=>$_DisplayNameInCheckout,'Description'=>$_Description,'ShowMultipleDonationAmountInCheckout'=>$_ShowMultipleDonationAmountInCheckout,'ExternalID'=>$_ExternalID,'PopularityIndex'=>$_PopularityIndex,'EIN'=>$_EIN,'NonProfitSecondName'=>$_NonProfitSecondName,'NonProfitAddress'=>$_NonProfitAddress,'NonProfitSocialAddress'=>$_NonProfitSocialAddress,'any'=>$_any,'id'=>$_id));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Mission
	 * @param string Mission
	 * @return string
	 */
	public function setMission($_Mission)
	{
		return ($this->Mission = $_Mission);
	}
	/**
	 * Get Mission
	 * @return string
	 */
	public function getMission()
	{
		return $this->Mission;
	}
	/**
	 * Set LogoURL
	 * @param anyURI LogoURL
	 * @return anyURI
	 */
	public function setLogoURL($_LogoURL)
	{
		return ($this->LogoURL = $_LogoURL);
	}
	/**
	 * Get LogoURL
	 * @return anyURI
	 */
	public function getLogoURL()
	{
		return $this->LogoURL;
	}
	/**
	 * Set Status
	 * @param CharityStatusCodeType Status
	 * @return CharityStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeCharityStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeCharityStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set SearchableString
	 * @param string SearchableString
	 * @return string
	 */
	public function setSearchableString($_SearchableString)
	{
		return ($this->SearchableString = $_SearchableString);
	}
	/**
	 * Get SearchableString
	 * @return string
	 */
	public function getSearchableString()
	{
		return $this->SearchableString;
	}
	/**
	 * Set CharityRegion
	 * @param int CharityRegion
	 * @return int
	 */
	public function setCharityRegion($_CharityRegion)
	{
		return ($this->CharityRegion = $_CharityRegion);
	}
	/**
	 * Get CharityRegion
	 * @return int
	 */
	public function getCharityRegion()
	{
		return $this->CharityRegion;
	}
	/**
	 * Set CharityDomain
	 * @param int CharityDomain
	 * @return int
	 */
	public function setCharityDomain($_CharityDomain)
	{
		return ($this->CharityDomain = $_CharityDomain);
	}
	/**
	 * Get CharityDomain
	 * @return int
	 */
	public function getCharityDomain()
	{
		return $this->CharityDomain;
	}
	/**
	 * Set CharityID
	 * @param string CharityID
	 * @return string
	 */
	public function setCharityID($_CharityID)
	{
		return ($this->CharityID = $_CharityID);
	}
	/**
	 * Get CharityID
	 * @return string
	 */
	public function getCharityID()
	{
		return $this->CharityID;
	}
	/**
	 * Set LogoURLSelling
	 * @param anyURI LogoURLSelling
	 * @return anyURI
	 */
	public function setLogoURLSelling($_LogoURLSelling)
	{
		return ($this->LogoURLSelling = $_LogoURLSelling);
	}
	/**
	 * Get LogoURLSelling
	 * @return anyURI
	 */
	public function getLogoURLSelling()
	{
		return $this->LogoURLSelling;
	}
	/**
	 * Set DisplayLogoSelling
	 * @param boolean DisplayLogoSelling
	 * @return boolean
	 */
	public function setDisplayLogoSelling($_DisplayLogoSelling)
	{
		return ($this->DisplayLogoSelling = $_DisplayLogoSelling);
	}
	/**
	 * Get DisplayLogoSelling
	 * @return boolean
	 */
	public function getDisplayLogoSelling()
	{
		return $this->DisplayLogoSelling;
	}
	/**
	 * Set DisplayNameInCheckout
	 * @param boolean DisplayNameInCheckout
	 * @return boolean
	 */
	public function setDisplayNameInCheckout($_DisplayNameInCheckout)
	{
		return ($this->DisplayNameInCheckout = $_DisplayNameInCheckout);
	}
	/**
	 * Get DisplayNameInCheckout
	 * @return boolean
	 */
	public function getDisplayNameInCheckout()
	{
		return $this->DisplayNameInCheckout;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set ShowMultipleDonationAmountInCheckout
	 * @param boolean ShowMultipleDonationAmountInCheckout
	 * @return boolean
	 */
	public function setShowMultipleDonationAmountInCheckout($_ShowMultipleDonationAmountInCheckout)
	{
		return ($this->ShowMultipleDonationAmountInCheckout = $_ShowMultipleDonationAmountInCheckout);
	}
	/**
	 * Get ShowMultipleDonationAmountInCheckout
	 * @return boolean
	 */
	public function getShowMultipleDonationAmountInCheckout()
	{
		return $this->ShowMultipleDonationAmountInCheckout;
	}
	/**
	 * Set ExternalID
	 * @param string ExternalID
	 * @return string
	 */
	public function setExternalID($_ExternalID)
	{
		return ($this->ExternalID = $_ExternalID);
	}
	/**
	 * Get ExternalID
	 * @return string
	 */
	public function getExternalID()
	{
		return $this->ExternalID;
	}
	/**
	 * Set PopularityIndex
	 * @param int PopularityIndex
	 * @return int
	 */
	public function setPopularityIndex($_PopularityIndex)
	{
		return ($this->PopularityIndex = $_PopularityIndex);
	}
	/**
	 * Get PopularityIndex
	 * @return int
	 */
	public function getPopularityIndex()
	{
		return $this->PopularityIndex;
	}
	/**
	 * Set EIN
	 * @param string EIN
	 * @return string
	 */
	public function setEIN($_EIN)
	{
		return ($this->EIN = $_EIN);
	}
	/**
	 * Get EIN
	 * @return string
	 */
	public function getEIN()
	{
		return $this->EIN;
	}
	/**
	 * Set NonProfitSecondName
	 * @param string NonProfitSecondName
	 * @return string
	 */
	public function setNonProfitSecondName($_NonProfitSecondName)
	{
		return ($this->NonProfitSecondName = $_NonProfitSecondName);
	}
	/**
	 * Get NonProfitSecondName
	 * @return string
	 */
	public function getNonProfitSecondName()
	{
		return $this->NonProfitSecondName;
	}
	/**
	 * Set NonProfitAddress
	 * @param NonProfitAddressType NonProfitAddress
	 * @return NonProfitAddressType
	 */
	public function setNonProfitAddress($_NonProfitAddress)
	{
		return ($this->NonProfitAddress = $_NonProfitAddress);
	}
	/**
	 * Get NonProfitAddress
	 * @return EbayTradingTypeNonProfitAddressType
	 */
	public function getNonProfitAddress()
	{
		return $this->NonProfitAddress;
	}
	/**
	 * Set NonProfitSocialAddress
	 * @param NonProfitSocialAddressType NonProfitSocialAddress
	 * @return NonProfitSocialAddressType
	 */
	public function setNonProfitSocialAddress($_NonProfitSocialAddress)
	{
		return ($this->NonProfitSocialAddress = $_NonProfitSocialAddress);
	}
	/**
	 * Get NonProfitSocialAddress
	 * @return EbayTradingTypeNonProfitSocialAddressType
	 */
	public function getNonProfitSocialAddress()
	{
		return $this->NonProfitSocialAddress;
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
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
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