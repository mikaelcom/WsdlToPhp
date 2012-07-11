<?php
/**
 * Class file for EbayTradingTypeEANIdentifierEnabledDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeEANIdentifierEnabledDefinitionType
 * Documentation : This type defines the European Article Number (EAN) feature, and whether this feature is enabled at the site level. An empty EANIdentifierEnabled field is returned under the FeatureDefinitions container in GetCategoryFeatures if the feature is applicable to the site and if EANIdentifierEnabled is passed in as a FeatureID (or if no FeatureID is passed in, hence all features are returned).
 * @date 04/07/2012
 */
class EbayTradingTypeEANIdentifierEnabledDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypeEANIdentifierEnabledDefinitionType
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