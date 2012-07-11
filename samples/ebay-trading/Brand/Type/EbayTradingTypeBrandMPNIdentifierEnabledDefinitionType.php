<?php
/**
 * Class file for EbayTradingTypeBrandMPNIdentifierEnabledDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBrandMPNIdentifierEnabledDefinitionType
 * Documentation : This type defines the Brand/Manufacturer Part Number feature, and whether this feature is enabled at the site level. An empty BrandMPNIdentifierEnabled field is returned under the FeatureDefinitions container in GetCategoryFeatures if the feature is applicable to the site and if BrandMPNIdentifierEnabled is passed in as a FeatureID (or if no FeatureID is passed in, hence all features are returned).
 * @date 04/07/2012
 */
class EbayTradingTypeBrandMPNIdentifierEnabledDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypeBrandMPNIdentifierEnabledDefinitionType
	 */
	public function __construct($_any = null)
	{
		parent::__construct(array('any'=>$_any));
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