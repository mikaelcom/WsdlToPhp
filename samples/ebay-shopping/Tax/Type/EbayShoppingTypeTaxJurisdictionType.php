<?php
/**
 * Class file for EbayShoppingTypeTaxJurisdictionType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeTaxJurisdictionType
 * Documentation : Tax-related details for a region or jurisdiction.
 * @date 05/07/2012
 */
class EbayShoppingTypeTaxJurisdictionType extends EbayShoppingWsdlClass
{
	/**
	 * The JurisdictionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Representative identifier for the jurisdiction. Typically an abbreviation (e.g. CA for California).
	 * @var string
	 */
	public $JurisdictionID;
	/**
	 * The SalesTaxPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The tax percent to apply for a listing shipped to this jurisdiction. The value passed in is stored with a precision of 3 digits after the decimal point (##.###). GetTaxTable: this tag has no value if the user's tax table has not been set.
	 * @var float
	 */
	public $SalesTaxPercent;
	/**
	 * The ShippingIncludedInTax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether shipping costs are to be part of the base amount that is taxed. GetTaxTable: This tag is empty if the user did not previously provide information.
	 * @var boolean
	 */
	public $ShippingIncludedInTax;
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
	 * @param DOMDocument any
	 * @return EbayShoppingTypeTaxJurisdictionType
	 */
	public function __construct($_JurisdictionID = null,$_SalesTaxPercent = null,$_ShippingIncludedInTax = null,$_any = null)
	{
		parent::__construct(array('JurisdictionID'=>$_JurisdictionID,'SalesTaxPercent'=>$_SalesTaxPercent,'ShippingIncludedInTax'=>$_ShippingIncludedInTax,'any'=>$_any));
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