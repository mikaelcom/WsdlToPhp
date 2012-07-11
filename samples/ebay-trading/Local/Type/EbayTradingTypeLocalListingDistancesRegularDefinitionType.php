<?php
/**
 * Class file for EbayTradingTypeLocalListingDistancesRegularDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeLocalListingDistancesRegularDefinitionType
 * Documentation : Defines the LocalListingDistancesRegular feature. This feature displays all the supported local listing distances for items listed by sellers subscribed to Local Market for Vehicles.
 * @date 04/07/2012
 */
class EbayTradingTypeLocalListingDistancesRegularDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypeLocalListingDistancesRegularDefinitionType
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