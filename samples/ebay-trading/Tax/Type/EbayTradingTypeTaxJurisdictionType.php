<?php
/**
 * Class file for EbayTradingTypeTaxJurisdictionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTaxJurisdictionType
 * Documentation : Tax-related details for a region or jurisdiction.
 * @date 04/07/2012
 */
class EbayTradingTypeTaxJurisdictionType extends EbayTradingWsdlClass
{
	/**
	 * The JurisdictionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Representative identifier for the jurisdiction. Typically an abbreviation (for example, CA for California).
	 * @var string
	 */
	public $JurisdictionID;
	/**
	 * The SalesTaxPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The tax percent to apply for a listing shipped to this jurisdiction. The value passed in is stored with a precision of 3 digits after the decimal point (##.###). <br> For GetTaxTable: this tag has no value if the user's tax table has not been set.
	 * @var float
	 */
	public $SalesTaxPercent;
	/**
	 * The ShippingIncludedInTax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether shipping costs are to be part of the base amount that is taxed. <br> For GetTaxTable: This tag is empty if the user did not previously provide information.
	 * @var boolean
	 */
	public $ShippingIncludedInTax;
	/**
	 * The JurisdictionName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Full name for the jurisdiction or region for display purposes.
	 * @var string
	 */
	public $JurisdictionName;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the latest version number for this feature. Use the version to determine if and when to refresh your cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The time in GMT when the details for this feature were last updated. Use this timestamp to determine if and when to refresh your cached client data.
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
	 * @param string JurisdictionID
	 * @param float SalesTaxPercent
	 * @param boolean ShippingIncludedInTax
	 * @param string JurisdictionName
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeTaxJurisdictionType
	 */
	public function __construct($_JurisdictionID = null,$_SalesTaxPercent = null,$_ShippingIncludedInTax = null,$_JurisdictionName = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('JurisdictionID'=>$_JurisdictionID,'SalesTaxPercent'=>$_SalesTaxPercent,'ShippingIncludedInTax'=>$_ShippingIncludedInTax,'JurisdictionName'=>$_JurisdictionName,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set JurisdictionID
	 * @param string JurisdictionID
	 * @return string
	 */
	public function setJurisdictionID($_JurisdictionID)
	{
		return ($this->JurisdictionID = $_JurisdictionID);
	}
	/**
	 * Get JurisdictionID
	 * @return string
	 */
	public function getJurisdictionID()
	{
		return $this->JurisdictionID;
	}
	/**
	 * Set SalesTaxPercent
	 * @param float SalesTaxPercent
	 * @return float
	 */
	public function setSalesTaxPercent($_SalesTaxPercent)
	{
		return ($this->SalesTaxPercent = $_SalesTaxPercent);
	}
	/**
	 * Get SalesTaxPercent
	 * @return float
	 */
	public function getSalesTaxPercent()
	{
		return $this->SalesTaxPercent;
	}
	/**
	 * Set ShippingIncludedInTax
	 * @param boolean ShippingIncludedInTax
	 * @return boolean
	 */
	public function setShippingIncludedInTax($_ShippingIncludedInTax)
	{
		return ($this->ShippingIncludedInTax = $_ShippingIncludedInTax);
	}
	/**
	 * Get ShippingIncludedInTax
	 * @return boolean
	 */
	public function getShippingIncludedInTax()
	{
		return $this->ShippingIncludedInTax;
	}
	/**
	 * Set JurisdictionName
	 * @param string JurisdictionName
	 * @return string
	 */
	public function setJurisdictionName($_JurisdictionName)
	{
		return ($this->JurisdictionName = $_JurisdictionName);
	}
	/**
	 * Get JurisdictionName
	 * @return string
	 */
	public function getJurisdictionName()
	{
		return $this->JurisdictionName;
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