<?php
/**
 * Class file for EbayTradingTypeRateTableDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRateTableDetailsType
 * Documentation : Details pertinent APIs to allow sellers who have already set-up a shipping rate table to have the option to use their Domestic Rate Table with their Flat service listings, and/or use their International Rate Table as their International service type. Note that if you are modifying or relisting an item (using ReviseItem or RelistItem), you can delete the existing rate table settings applied to the item by using the empty tags: &lt;RateTableDetails / &gt;.
 * @date 04/07/2012
 */
class EbayTradingTypeRateTableDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The DomesticRateTable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This tag indicates that the domestic rate shipping table is applied to the item. Currently, the only valid value is 'Default' which means that the default domestic shipping rate table set up by the seller is used. This tag is returned only if the seller has shipping rates set up in eBay Site Preferences and only if the seller is invoking the call.
	 * @var string
	 */
	public $DomesticRateTable;
	/**
	 * The InternationalRateTable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reserved for future use.
	 * @var string
	 */
	public $InternationalRateTable;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string DomesticRateTable
	 * @param string InternationalRateTable
	 * @param DOMDocument any
	 * @return EbayTradingTypeRateTableDetailsType
	 */
	public function __construct($_DomesticRateTable = null,$_InternationalRateTable = null,$_any = null)
	{
		parent::__construct(array('DomesticRateTable'=>$_DomesticRateTable,'InternationalRateTable'=>$_InternationalRateTable,'any'=>$_any));
	}
	/**
	 * Set DomesticRateTable
	 * @param string DomesticRateTable
	 * @return string
	 */
	public function setDomesticRateTable($_DomesticRateTable)
	{
		return ($this->DomesticRateTable = $_DomesticRateTable);
	}
	/**
	 * Get DomesticRateTable
	 * @return string
	 */
	public function getDomesticRateTable()
	{
		return $this->DomesticRateTable;
	}
	/**
	 * Set InternationalRateTable
	 * @param string InternationalRateTable
	 * @return string
	 */
	public function setInternationalRateTable($_InternationalRateTable)
	{
		return ($this->InternationalRateTable = $_InternationalRateTable);
	}
	/**
	 * Get InternationalRateTable
	 * @return string
	 */
	public function getInternationalRateTable()
	{
		return $this->InternationalRateTable;
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