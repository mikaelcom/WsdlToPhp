<?php
/**
 * Class file for EbayTradingTypeShippingServicePackageDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingServicePackageDetailsType
 * Documentation : Packages supported by the enclosing shipping service.
 * @date 04/07/2012
 */
class EbayTradingTypeShippingServicePackageDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the package type.
	 * @var EbayTradingTypeShippingPackageCodeType
	 */
	public $Name;
	/**
	 * The DimensionsRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This is a characteristic of a package type in the context of a particular shipping service. If true, dimensions are required when this particular package type is assigned to the listing and the seller offers this particular shipping service. If not returned, DimensionsSupported is false.
	 * @var boolean
	 */
	public $DimensionsRequired;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeShippingPackageCodeType Name
	 * @param boolean DimensionsRequired
	 * @param DOMDocument any
	 * @return EbayTradingTypeShippingServicePackageDetailsType
	 */
	public function __construct($_Name = null,$_DimensionsRequired = null,$_any = null)
	{
		parent::__construct(array('Name'=>$_Name,'DimensionsRequired'=>$_DimensionsRequired,'any'=>$_any));
	}
	/**
	 * Set Name
	 * @param ShippingPackageCodeType Name
	 * @return ShippingPackageCodeType
	 */
	public function setName($_Name)
	{
		return ($this->Name = EbayTradingTypeShippingPackageCodeType::valueIsValid($_Name)?$_Name:null);
	}
	/**
	 * Get Name
	 * @return EbayTradingTypeShippingPackageCodeType
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set DimensionsRequired
	 * @param boolean DimensionsRequired
	 * @return boolean
	 */
	public function setDimensionsRequired($_DimensionsRequired)
	{
		return ($this->DimensionsRequired = $_DimensionsRequired);
	}
	/**
	 * Get DimensionsRequired
	 * @return boolean
	 */
	public function getDimensionsRequired()
	{
		return $this->DimensionsRequired;
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