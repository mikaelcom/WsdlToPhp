<?php
/**
 * Class file for EbayTradingTypeCharacteristicsSetProductHistogramType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCharacteristicsSetProductHistogramType
 * Documentation : A generic type used for histograms.
 * @date 04/07/2012
 */
class EbayTradingTypeCharacteristicsSetProductHistogramType extends EbayTradingWsdlClass
{
	/**
	 * The HistogramEntry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : In GetProducts, each histogram entry shows how many matching products were found in each matching domain. A domain is like a high-level category. (A domain is also called an attribute set or a characteristic set.)
	 * @var EbayTradingTypeHistogramEntryType
	 */
	public $HistogramEntry;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeHistogramEntryType HistogramEntry
	 * @param DOMDocument any
	 * @return EbayTradingTypeCharacteristicsSetProductHistogramType
	 */
	public function __construct($_HistogramEntry = null,$_any = null)
	{
		parent::__construct(array('HistogramEntry'=>$_HistogramEntry,'any'=>$_any));
	}
	/**
	 * Set HistogramEntry
	 * @param HistogramEntryType HistogramEntry
	 * @return HistogramEntryType
	 */
	public function setHistogramEntry($_HistogramEntry)
	{
		return ($this->HistogramEntry = $_HistogramEntry);
	}
	/**
	 * Get HistogramEntry
	 * @return EbayTradingTypeHistogramEntryType
	 */
	public function getHistogramEntry()
	{
		return $this->HistogramEntry;
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