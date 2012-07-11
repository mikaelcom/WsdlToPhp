<?php
/**
 * Class file for EbayShoppingTypeDomainHistogramType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeDomainHistogramType
 * Documentation : A generic type used for histograms.
 * @date 05/07/2012
 */
class EbayShoppingTypeDomainHistogramType extends EbayShoppingWsdlClass
{
	/**
	 * The Domain
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Each histogram entry shows how many matching products were found in each matching domain. A domain is like a high-level category, or a group of categories whose items share the same basic product characteristics.
	 * @var EbayShoppingTypeHistogramEntryType
	 */
	public $Domain;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayShoppingTypeHistogramEntryType Domain
	 * @param DOMDocument any
	 * @return EbayShoppingTypeDomainHistogramType
	 */
	public function __construct($_Domain = null,$_any = null)
	{
		parent::__construct(array('Domain'=>$_Domain,'any'=>$_any));
	}
	/**
	 * Set Domain
	 * @param HistogramEntryType Domain
	 * @return HistogramEntryType
	 */
	public function setDomain($_Domain)
	{
		return ($this->Domain = $_Domain);
	}
	/**
	 * Get Domain
	 * @return EbayShoppingTypeHistogramEntryType
	 */
	public function getDomain()
	{
		return $this->Domain;
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