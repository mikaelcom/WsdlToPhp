<?php
/**
 * Class file for EbayTradingTypeCountryDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCountryDetailsType
 * Documentation : Details about a specific country.
 * @date 04/07/2012
 */
class EbayTradingTypeCountryDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Two-letter country abbreviation.<br><br> Related fields:<br> Item.Country in AddItem
	 * @var EbayTradingTypeCountryCodeType
	 */
	public $Country;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Full country name for display purposes. May be similar to (but not necessarily identical to) CountryName in addresses (e.g., User.RegistrationAddress.CountryName in GetUser).
	 * @var string
	 */
	public $Description;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeCountryCodeType Country
	 * @param string Description
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeCountryDetailsType
	 */
	public function __construct($_Country = null,$_Description = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('Country'=>$_Country,'Description'=>$_Description,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set Country
	 * @param CountryCodeType Country
	 * @return CountryCodeType
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = EbayTradingTypeCountryCodeType::valueIsValid($_Country)?$_Country:null);
	}
	/**
	 * Get Country
	 * @return EbayTradingTypeCountryCodeType
	 */
	public function getCountry()
	{
		return $this->Country;
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
	 * Set DetailVersion
	 * @param string DetailVersion
	 * @return string
	 */
	public function setDetailVersion($_DetailVersion)
	{
		return ($this->DetailVersion = $_DetailVersion);
	}
	/**
	 * Get DetailVersion
	 * @return string
	 */
	public function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * Set UpdateTime
	 * @param dateTime UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_UpdateTime)
	{
		return ($this->UpdateTime = $_UpdateTime);
	}
	/**
	 * Get UpdateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
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