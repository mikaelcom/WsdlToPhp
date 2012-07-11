<?php
/**
 * Class file for EbayShoppingTypeCharityType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeCharityType
 * Documentation : Identifies a Giving Works listing and benefiting nonprofit charity organization. Currently supported through the US and eBay Motors sites only. The Ad Format and Mature Audiences categories are not supported. Not applicable for US eBay Motors, international, Real Estate, and Tickets.
 * @date 05/07/2012
 */
class EbayShoppingTypeCharityType extends EbayShoppingWsdlClass
{
	/**
	 * The CharityID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identification number assigned by eBay to registered nonprofit charity organizations.
	 * @var string
	 */
	public $CharityID;
	/**
	 * The CharityName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the benefiting nonprofit charity organization selected by the charity seller.
	 * @var string
	 */
	public $CharityName;
	/**
	 * The CharityNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identification number assigned to a nonprofit charity organization by the dedicated provider of eBay Giving Works. Being superseded by CharityID. Max 10 digits.
	 * @var int
	 */
	public $CharityNumber;
	/**
	 * The DonationPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The percentage of the purchase price that the seller chooses to donate to the selected nonprofit organization. This percentage is displayed in the Giving Works item listing. Possible values: 10.0 to 100.0. Percentages must increment by 5.0. Minimum donation percentages may be required for Giving Works listings, see http://pages.ebay.com/help/sell/selling-nonprofit.html for details. DonationPercent is required input when listing Giving Works items.
	 * @var float
	 */
	public $DonationPercent;
	/**
	 * The Mission
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The stated mission of the nonprofit charity organization. This mission is displayed in the Giving Works item listing.
	 * @var string
	 */
	public $Mission;
	/**
	 * The LogoURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL of the nonprofit charity organization. This URL is displayed in the Giving Works item listing.
	 * @var string
	 */
	public $LogoURL;
	/**
	 * The CharityListing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the seller has chosen to use eBay Giving Works to donate a percentage of the item's purchase price to a selected nonprofit organization.
	 * @var boolean
	 */
	public $CharityListing;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The status of the nonprofit charity organization.
	 * @var EbayShoppingTypeCharityStatusCodeType
	 */
	public $Status;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string CharityID
	 * @param string CharityName
	 * @param int CharityNumber
	 * @param float DonationPercent
	 * @param string Mission
	 * @param string LogoURL
	 * @param boolean CharityListing
	 * @param EbayShoppingTypeCharityStatusCodeType Status
	 * @param DOMDocument any
	 * @return EbayShoppingTypeCharityType
	 */
	public function __construct($_CharityID = null,$_CharityName = null,$_CharityNumber = null,$_DonationPercent = null,$_Mission = null,$_LogoURL = null,$_CharityListing = null,$_Status = null,$_any = null)
	{
		parent::__construct(array('CharityID'=>$_CharityID,'CharityName'=>$_CharityName,'CharityNumber'=>$_CharityNumber,'DonationPercent'=>$_DonationPercent,'Mission'=>$_Mission,'LogoURL'=>$_LogoURL,'CharityListing'=>$_CharityListing,'Status'=>$_Status,'any'=>$_any));
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
	 * Set CharityName
	 * @param string CharityName
	 * @return string
	 */
	public function setCharityName($_CharityName)
	{
		return ($this->CharityName = $_CharityName);
	}
	/**
	 * Get CharityName
	 * @return string
	 */
	public function getCharityName()
	{
		return $this->CharityName;
	}
	/**
	 * Set CharityNumber
	 * @param int CharityNumber
	 * @return int
	 */
	public function setCharityNumber($_CharityNumber)
	{
		return ($this->CharityNumber = $_CharityNumber);
	}
	/**
	 * Get CharityNumber
	 * @return int
	 */
	public function getCharityNumber()
	{
		return $this->CharityNumber;
	}
	/**
	 * Set DonationPercent
	 * @param float DonationPercent
	 * @return float
	 */
	public function setDonationPercent($_DonationPercent)
	{
		return ($this->DonationPercent = $_DonationPercent);
	}
	/**
	 * Get DonationPercent
	 * @return float
	 */
	public function getDonationPercent()
	{
		return $this->DonationPercent;
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
	 * @param string LogoURL
	 * @return string
	 */
	public function setLogoURL($_LogoURL)
	{
		return ($this->LogoURL = $_LogoURL);
	}
	/**
	 * Get LogoURL
	 * @return string
	 */
	public function getLogoURL()
	{
		return $this->LogoURL;
	}
	/**
	 * Set CharityListing
	 * @param boolean CharityListing
	 * @return boolean
	 */
	public function setCharityListing($_CharityListing)
	{
		return ($this->CharityListing = $_CharityListing);
	}
	/**
	 * Get CharityListing
	 * @return boolean
	 */
	public function getCharityListing()
	{
		return $this->CharityListing;
	}
	/**
	 * Set Status
	 * @param CharityStatusCodeType Status
	 * @return CharityStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayShoppingTypeCharityStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayShoppingTypeCharityStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
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