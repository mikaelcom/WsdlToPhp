<?php
/**
 * Class file for EbayTradingTypeBrandMPNType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBrandMPNType
 * Documentation : Defines supported fields for BrandMPN.
 * @date 04/07/2012
 */
class EbayTradingTypeBrandMPNType extends EbayTradingWsdlClass
{
	/**
	 * The Brand
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The brand of the product. eBay searches against the names that are publicly available in eBay's catalogs. This means you can specify the well-known brand name that an average user would recognize. Specify this in combination with MPN.<br> <br> <span class="tablenote"><b>Note:</b> If you want examples of brand names that eBay is likely to recognize, you can examine product details returned in GetProductSearchResults and GetProductSellingPages. </span>
	 * @var string
	 */
	public $Brand;
	/**
	 * The MPN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The manufacturer part number of the product. Use the value specified by the manufacturer. (eBay removes special characters and spaces to normalize the values in order to find a match.)
	 * @var string
	 */
	public $MPN;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Brand
	 * @param string MPN
	 * @param DOMDocument any
	 * @return EbayTradingTypeBrandMPNType
	 */
	public function __construct($_Brand = null,$_MPN = null,$_any = null)
	{
		parent::__construct(array('Brand'=>$_Brand,'MPN'=>$_MPN,'any'=>$_any));
	}
	/**
	 * Set Brand
	 * @param string Brand
	 * @return string
	 */
	public function setBrand($_Brand)
	{
		return ($this->Brand = $_Brand);
	}
	/**
	 * Get Brand
	 * @return string
	 */
	public function getBrand()
	{
		return $this->Brand;
	}
	/**
	 * Set MPN
	 * @param string MPN
	 * @return string
	 */
	public function setMPN($_MPN)
	{
		return ($this->MPN = $_MPN);
	}
	/**
	 * Get MPN
	 * @return string
	 */
	public function getMPN()
	{
		return $this->MPN;
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