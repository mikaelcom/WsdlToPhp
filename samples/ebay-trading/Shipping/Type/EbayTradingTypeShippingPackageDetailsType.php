<?php
/**
 * Class file for EbayTradingTypeShippingPackageDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingPackageDetailsType
 * Documentation : Details about type of package used to ship an item.
 * @date 04/07/2012
 */
class EbayTradingTypeShippingPackageDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The PackageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Numeric identifier. Some applications use this ID to look up shipping packages more efficiently.
	 * @var int
	 */
	public $PackageID;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Full name of the shipping package for display purposes.
	 * @var string
	 */
	public $Description;
	/**
	 * The ShippingPackage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Value used for the shipping package. For a list of valid values that you can cache for future use, call GeteBayDetails with DetailName set to ShippingPackageDetails.
	 * @var EbayTradingTypeShippingPackageCodeType
	 */
	public $ShippingPackage;
	/**
	 * The DefaultValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if the package type is the default for the specified site.
	 * @var boolean
	 */
	public $DefaultValue;
	/**
	 * The DimensionsSupported
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This is a characteristic of a type of package. There is no connection between it and individual shipping services. (Compare with ShippingServicePackageDetails.DimensionsRequired.) DimensionsSupported is true if dimensions are required for this package type for at least one shipping service on the specified eBay site. If not returned, DimensionsSupported is false.
	 * @var boolean
	 */
	public $DimensionsSupported;
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
	 * @param int PackageID
	 * @param string Description
	 * @param EbayTradingTypeShippingPackageCodeType ShippingPackage
	 * @param boolean DefaultValue
	 * @param boolean DimensionsSupported
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeShippingPackageDetailsType
	 */
	public function __construct($_PackageID = null,$_Description = null,$_ShippingPackage = null,$_DefaultValue = null,$_DimensionsSupported = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('PackageID'=>$_PackageID,'Description'=>$_Description,'ShippingPackage'=>$_ShippingPackage,'DefaultValue'=>$_DefaultValue,'DimensionsSupported'=>$_DimensionsSupported,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set PackageID
	 * @param int PackageID
	 * @return int
	 */
	public function setPackageID($_PackageID)
	{
		return ($this->PackageID = $_PackageID);
	}
	/**
	 * Get PackageID
	 * @return int
	 */
	public function getPackageID()
	{
		return $this->PackageID;
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
	 * Set ShippingPackage
	 * @param ShippingPackageCodeType ShippingPackage
	 * @return ShippingPackageCodeType
	 */
	public function setShippingPackage($_ShippingPackage)
	{
		return ($this->ShippingPackage = EbayTradingTypeShippingPackageCodeType::valueIsValid($_ShippingPackage)?$_ShippingPackage:null);
	}
	/**
	 * Get ShippingPackage
	 * @return EbayTradingTypeShippingPackageCodeType
	 */
	public function getShippingPackage()
	{
		return $this->ShippingPackage;
	}
	/**
	 * Set DefaultValue
	 * @param boolean DefaultValue
	 * @return boolean
	 */
	public function setDefaultValue($_DefaultValue)
	{
		return ($this->DefaultValue = $_DefaultValue);
	}
	/**
	 * Get DefaultValue
	 * @return boolean
	 */
	public function getDefaultValue()
	{
		return $this->DefaultValue;
	}
	/**
	 * Set DimensionsSupported
	 * @param boolean DimensionsSupported
	 * @return boolean
	 */
	public function setDimensionsSupported($_DimensionsSupported)
	{
		return ($this->DimensionsSupported = $_DimensionsSupported);
	}
	/**
	 * Get DimensionsSupported
	 * @return boolean
	 */
	public function getDimensionsSupported()
	{
		return $this->DimensionsSupported;
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