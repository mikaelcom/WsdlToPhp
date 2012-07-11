<?php
/**
 * Class file for EbayTradingTypeRegionOfOriginDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRegionOfOriginDetailsType
 * Documentation : Details about a region.
 * @date 04/07/2012
 */
class EbayTradingTypeRegionOfOriginDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The RegionOfOrigin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Numeric identifier for a region within a country. Permissible values are as in ShippingRegionCodeList.xsd and CountryCodeList.xsd
	 * @var string
	 */
	public $RegionOfOrigin;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Full name of the region.
	 * @var string
	 */
	public $Description;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates status of Region of Origin
	 * @var EbayTradingTypeStatusCodeType
	 */
	public $Status;
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
	 * @param string RegionOfOrigin
	 * @param string Description
	 * @param EbayTradingTypeStatusCodeType Status
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeRegionOfOriginDetailsType
	 */
	public function __construct($_RegionOfOrigin = null,$_Description = null,$_Status = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('RegionOfOrigin'=>$_RegionOfOrigin,'Description'=>$_Description,'Status'=>$_Status,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set RegionOfOrigin
	 * @param string RegionOfOrigin
	 * @return string
	 */
	public function setRegionOfOrigin($_RegionOfOrigin)
	{
		return ($this->RegionOfOrigin = $_RegionOfOrigin);
	}
	/**
	 * Get RegionOfOrigin
	 * @return string
	 */
	public function getRegionOfOrigin()
	{
		return $this->RegionOfOrigin;
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
	 * Set Status
	 * @param StatusCodeType Status
	 * @return StatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
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