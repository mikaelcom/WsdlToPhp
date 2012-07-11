<?php
/**
 * Class file for EbayTradingTypeShipPackageDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShipPackageDetailsType
 * Documentation : Details pertinent to one or more items for which calculated shipping (or flat rate shipping using shipping rate tables with weight surcharges) has been offered by the seller, such as package dimension and weight and packaging/handling costs. Also returned with the data for an item's transaction.
 * @date 04/07/2012
 */
class EbayTradingTypeShipPackageDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The MeasurementUnit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the unit type of the weight and dimensions of a shipping package. If MeasurementUnit is used, it overrides the system specified by measurementSystem. If MeasurementUnit and measurementSystem are not specified, the following defaults will be used: <br><br> English: US<br> Metric: CA, CAFR, AU <br><br> CA and CAFR supports both English and Metric, while other sites only support the site's default. <br><br> Use MeasurementUnit with weight and package dimensions. For example, to represent a 5 lbs 2 oz package: <br> &lt;MeasurementUnit&gt;English&lt;/MeasurementUnit&gt; <br> &lt;WeightMajor&gt;5&lt;/WeightMajor&gt; <br> &lt;WeightMinor&gt;2&lt;/WeightMinor&gt;
	 * @var EbayTradingTypeMeasurementSystemCodeType
	 */
	public $MeasurementUnit;
	/**
	 * The PackageDepth
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Depth of the package, in whole number of inches, needed to ship the item. This is validated against the selected shipping service. Upon mismatch, a message is returned, such as, "Package dimensions exceeds maximum allowable limit for service XXXXX," where XXXXX is the name of the shipping service. For calculated shipping only. Only returned if the seller specified the value for the item. (In many cases, the seller only specifies the weight fields.) <br><br> Developer impact: UPS requires dimensions for any Ground packages that are 3 cubic feet or larger and for all air packages, if they are to provide correct shipping cost. If package dimensions are not included for an item listed with calculated shipping, the shipping cost returned will be an estimate based on standard dimensions for the defined package type. eBay enforces a dimensions requirement on listings so that buyers receive accurate calculated shipping costs.
	 * @var EbayTradingTypeMeasureType
	 */
	public $PackageDepth;
	/**
	 * The PackageLength
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Length of the package, in whole number of inches, needed to ship the item. Upon mismatch, a message is returned, such as, "Package dimensions exceeds maximum allowable limit for service XXXXX," where XXXXX is the name of the shipping service. For calculated shipping only. Only returned if the seller specified the value for the item. (In many cases, the seller only specifies the weight fields.)
	 * @var EbayTradingTypeMeasureType
	 */
	public $PackageLength;
	/**
	 * The PackageWidth
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Width of the package, in whole number of inches, needed to ship the item. Upon mismatch, a message is returned, such as, "Package dimensions exceeds maximum allowable limit for service XXXXX," where XXXXX is the name of the shipping service. For calculated shipping only. Only returned if the seller specified the value for the item. (In many cases, the seller only specifies the weight fields.)
	 * @var EbayTradingTypeMeasureType
	 */
	public $PackageWidth;
	/**
	 * The ShippingIrregular
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether a package is irregular and therefore cannot go through the stamping machine at the shipping service office and thus requires special or fragile handling. For calculated shipping only.
	 * @var boolean
	 */
	public $ShippingIrregular;
	/**
	 * The ShippingPackage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The nature of the package used to ship the item(s). Required for calculated shipping only.
	 * @var EbayTradingTypeShippingPackageCodeType
	 */
	public $ShippingPackage;
	/**
	 * The WeightMajor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : WeightMajor and WeightMinor are used to specify the weight of a shipping package. Here is how you would represent a package weight of 5 lbs 2 oz: &lt;WeightMajor unit="lbs"&gt;5&lt;/WeightMajor&gt; &lt;WeightMinor unit="oz"&gt;2&lt;/WeightMinor&gt; See http://www.ups.com for the maximum weight allowed by UPS. Above this maximum, the shipping type becomes Freight, an option that can only be selected via the eBay Web site and not via API. The weight details are validated against the selected shipping service. <br><br> For calculated shipping or for flat rate shipping if shipping rate tables are specified and the shipping rate table uses weight surcharges. Required on input when calculated shipping is used.
	 * @var EbayTradingTypeMeasureType
	 */
	public $WeightMajor;
	/**
	 * The WeightMinor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : See the definition of WeightMajor. For calculated shipping or for flat rate shipping if shipping rate tables are specified and the shipping rate table uses weight surcharges. (When used with the shipping rate tables with weight surcharge, any WeightMinor value greater than zero results in WeightMajor getting rounded up in the shipping cost calculation for example, 1 lb, 2 oz is rounded up to 2 lbs.) <br><br> Required on input when calculated shipping is used.
	 * @var EbayTradingTypeMeasureType
	 */
	public $WeightMinor;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeMeasurementSystemCodeType MeasurementUnit
	 * @param EbayTradingTypeMeasureType PackageDepth
	 * @param EbayTradingTypeMeasureType PackageLength
	 * @param EbayTradingTypeMeasureType PackageWidth
	 * @param boolean ShippingIrregular
	 * @param EbayTradingTypeShippingPackageCodeType ShippingPackage
	 * @param EbayTradingTypeMeasureType WeightMajor
	 * @param EbayTradingTypeMeasureType WeightMinor
	 * @param DOMDocument any
	 * @return EbayTradingTypeShipPackageDetailsType
	 */
	public function __construct($_MeasurementUnit = null,$_PackageDepth = null,$_PackageLength = null,$_PackageWidth = null,$_ShippingIrregular = null,$_ShippingPackage = null,$_WeightMajor = null,$_WeightMinor = null,$_any = null)
	{
		parent::__construct(array('MeasurementUnit'=>$_MeasurementUnit,'PackageDepth'=>$_PackageDepth,'PackageLength'=>$_PackageLength,'PackageWidth'=>$_PackageWidth,'ShippingIrregular'=>$_ShippingIrregular,'ShippingPackage'=>$_ShippingPackage,'WeightMajor'=>$_WeightMajor,'WeightMinor'=>$_WeightMinor,'any'=>$_any));
	}
	/**
	 * Set MeasurementUnit
	 * @param MeasurementSystemCodeType MeasurementUnit
	 * @return MeasurementSystemCodeType
	 */
	public function setMeasurementUnit($_MeasurementUnit)
	{
		return ($this->MeasurementUnit = EbayTradingTypeMeasurementSystemCodeType::valueIsValid($_MeasurementUnit)?$_MeasurementUnit:null);
	}
	/**
	 * Get MeasurementUnit
	 * @return EbayTradingTypeMeasurementSystemCodeType
	 */
	public function getMeasurementUnit()
	{
		return $this->MeasurementUnit;
	}
	/**
	 * Set PackageDepth
	 * @param MeasureType PackageDepth
	 * @return MeasureType
	 */
	public function setPackageDepth($_PackageDepth)
	{
		return ($this->PackageDepth = $_PackageDepth);
	}
	/**
	 * Get PackageDepth
	 * @return EbayTradingTypeMeasureType
	 */
	public function getPackageDepth()
	{
		return $this->PackageDepth;
	}
	/**
	 * Set PackageLength
	 * @param MeasureType PackageLength
	 * @return MeasureType
	 */
	public function setPackageLength($_PackageLength)
	{
		return ($this->PackageLength = $_PackageLength);
	}
	/**
	 * Get PackageLength
	 * @return EbayTradingTypeMeasureType
	 */
	public function getPackageLength()
	{
		return $this->PackageLength;
	}
	/**
	 * Set PackageWidth
	 * @param MeasureType PackageWidth
	 * @return MeasureType
	 */
	public function setPackageWidth($_PackageWidth)
	{
		return ($this->PackageWidth = $_PackageWidth);
	}
	/**
	 * Get PackageWidth
	 * @return EbayTradingTypeMeasureType
	 */
	public function getPackageWidth()
	{
		return $this->PackageWidth;
	}
	/**
	 * Set ShippingIrregular
	 * @param boolean ShippingIrregular
	 * @return boolean
	 */
	public function setShippingIrregular($_ShippingIrregular)
	{
		return ($this->ShippingIrregular = $_ShippingIrregular);
	}
	/**
	 * Get ShippingIrregular
	 * @return boolean
	 */
	public function getShippingIrregular()
	{
		return $this->ShippingIrregular;
	}
	/**
	 * Set ShippingPackage
	 * @param ShippingPackageCodeType ShippingPackage
	 * @return ShippingPackageCodeType
	 */
	public function setShippingPackage($_ShippingPackage)
	{
		return ($this->ShippingPackage = EbayTradingTypeShippingPackageCodeType::valueIsValid($_ShippingPackage)?$_ShippingPackage:null);
	}
	/**
	 * Get ShippingPackage
	 * @return EbayTradingTypeShippingPackageCodeType
	 */
	public function getShippingPackage()
	{
		return $this->ShippingPackage;
	}
	/**
	 * Set WeightMajor
	 * @param MeasureType WeightMajor
	 * @return MeasureType
	 */
	public function setWeightMajor($_WeightMajor)
	{
		return ($this->WeightMajor = $_WeightMajor);
	}
	/**
	 * Get WeightMajor
	 * @return EbayTradingTypeMeasureType
	 */
	public function getWeightMajor()
	{
		return $this->WeightMajor;
	}
	/**
	 * Set WeightMinor
	 * @param MeasureType WeightMinor
	 * @return MeasureType
	 */
	public function setWeightMinor($_WeightMinor)
	{
		return ($this->WeightMinor = $_WeightMinor);
	}
	/**
	 * Get WeightMinor
	 * @return EbayTradingTypeMeasureType
	 */
	public function getWeightMinor()
	{
		return $this->WeightMinor;
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