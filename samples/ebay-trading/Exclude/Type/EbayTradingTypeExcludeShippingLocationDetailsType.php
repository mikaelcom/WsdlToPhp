<?php
/**
 * Class file for EbayTradingTypeExcludeShippingLocationDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeExcludeShippingLocationDetailsType
 * Documentation : Container for the list of site-specific locations supported by the Exclude Ship To Locations feature.
 * @date 04/07/2012
 */
class EbayTradingTypeExcludeShippingLocationDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The localized location name.
	 * @var string
	 */
	public $Description;
	/**
	 * The Location
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The location or region code to be used with the AddItem family of calls. These codes are also returned by GetItem. This code reflects the <a href= "http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm" >ISO 3166</a> codes.
	 * @var string
	 */
	public $Location;
	/**
	 * The Region
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The region code to which the location belongs.
	 * @var string
	 */
	public $Region;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the current version number of the ExcludeShippingLocation data. Use the version number to determine if you need to refresh your cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The time in GMT that the feature flags for the details were last updated. Use this timestamp to determine if you need to refresh your cached client data.
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
	 * @param string Description
	 * @param string Location
	 * @param string Region
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeExcludeShippingLocationDetailsType
	 */
	public function __construct($_Description = null,$_Location = null,$_Region = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('Description'=>$_Description,'Location'=>$_Location,'Region'=>$_Region,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
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
	 * Set Location
	 * @param string Location
	 * @return string
	 */
	public function setLocation($_Location)
	{
		return ($this->Location = $_Location);
	}
	/**
	 * Get Location
	 * @return string
	 */
	public function getLocation()
	{
		return $this->Location;
	}
	/**
	 * Set Region
	 * @param string Region
	 * @return string
	 */
	public function setRegion($_Region)
	{
		return ($this->Region = $_Region);
	}
	/**
	 * Get Region
	 * @return string
	 */
	public function getRegion()
	{
		return $this->Region;
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