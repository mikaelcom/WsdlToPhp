<?php
/**
 * Class file for EbayTradingTypeMaxGranularFitmentCountDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMaxGranularFitmentCountDefinitionType
 * Documentation : Defines the total number of fine grained item compatibilities that can be applied to a listing. <br><br> When you list with parts compatibility, using only the high-level compatibility search names, such as Year, Make, and Model, the fitment applies to the various unspecified lower-level compatiblity search names and values, such as Trim and Engine, as well. This means that specifying a single coarsely defined item compatibility may result in multiple fitments applying to the listing at the lowest level of granularity. Up to 300 (or whatever maximum is indicated by MaxItemCompatibility) coarse parts compatiblities can be specified for a given listing. <br><br> Alternatively, you can explicitly specify up to 1000 (or whatever maximum is indicated by MaxGranularFitmentCount) parts compatibilities at the lowest level of granularity. That is, if you specify your parts compatibilities using all of the supported compatiblity search names (e.g., Year, Make, Model, Trim, and Engine), you can specify up to 1000 compatibilities.
 * @date 04/07/2012
 */
class EbayTradingTypeMaxGranularFitmentCountDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypeMaxGranularFitmentCountDefinitionType
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