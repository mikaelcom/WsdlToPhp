<?php
/**
 * Class file for EbayTradingTypeShippingLocationDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingLocationDetailsType
 * Documentation : Details about a region or location to which the seller is willing to ship.
 * @date 04/07/2012
 */
class EbayTradingTypeShippingLocationDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ShippingLocation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Short name or abbreviation for a region (e.g., Asia) or location (e.g. Japan).<br><br> Related field:<br> Item.ShippingDetails.InternationalShippingServiceOption.ShipToLocation in AddItem
	 * @var string
	 */
	public $ShippingLocation;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display name of region or location (sometimes more descriptive than the ShippingLocation short name).
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
	 * @param string ShippingLocation
	 * @param string Description
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeShippingLocationDetailsType
	 */
	public function __construct($_ShippingLocation = null,$_Description = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('ShippingLocation'=>$_ShippingLocation,'Description'=>$_Description,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set ShippingLocation
	 * @param string ShippingLocation
	 * @return string
	 */
	public function setShippingLocation($_ShippingLocation)
	{
		return ($this->ShippingLocation = $_ShippingLocation);
	}
	/**
	 * Get ShippingLocation
	 * @return string
	 */
	public function getShippingLocation()
	{
		return $this->ShippingLocation;
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