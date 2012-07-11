<?php
/**
 * Class file for EbayTradingTypeSellingManagerVendorDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerVendorDetailsType
 * Documentation : Describes vendor infomration.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerVendorDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The VendorName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Primary vendor name. Vendor information s returned only if it has been set.
	 * @var string
	 */
	public $VendorName;
	/**
	 * The VendorContactInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contact information of vendor. Vendor information s returned only if it has been set.
	 * @var string
	 */
	public $VendorContactInfo;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string VendorName
	 * @param string VendorContactInfo
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerVendorDetailsType
	 */
	public function __construct($_VendorName = null,$_VendorContactInfo = null,$_any = null)
	{
		parent::__construct(array('VendorName'=>$_VendorName,'VendorContactInfo'=>$_VendorContactInfo,'any'=>$_any));
	}
	/**
	 * Set VendorName
	 * @param string VendorName
	 * @return string
	 */
	public function setVendorName($_VendorName)
	{
		return ($this->VendorName = $_VendorName);
	}
	/**
	 * Get VendorName
	 * @return string
	 */
	public function getVendorName()
	{
		return $this->VendorName;
	}
	/**
	 * Set VendorContactInfo
	 * @param string VendorContactInfo
	 * @return string
	 */
	public function setVendorContactInfo($_VendorContactInfo)
	{
		return ($this->VendorContactInfo = $_VendorContactInfo);
	}
	/**
	 * Get VendorContactInfo
	 * @return string
	 */
	public function getVendorContactInfo()
	{
		return $this->VendorContactInfo;
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