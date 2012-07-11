<?php
/**
 * Class file for EbayTradingTypeCalculatedShippingRateType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCalculatedShippingRateType
 * Documentation : Details pertinent to one or more items for which calculated shipping (or flat rate shipping using shipping rate tables with weight surcharges) has been offered by the seller, such as package dimension and weight and packaging/handling costs. Also returned with the data for an item's transaction.
 * @date 04/07/2012
 */
class EbayTradingTypeCalculatedShippingRateType extends EbayTradingWsdlClass
{
	/**
	 * The OriginatingPostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Postal code for the location from which the package will be shipped. Required for calculated shipping. Use Item.PostalCode to specify the location of the item used for searches by location.
	 * @var string
	 */
	public $OriginatingPostalCode;
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
	 * The PackagingHandlingCosts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Fees a seller might assess for the shipping of the item (in addition to whatever the shipping service might charge). Any packaging/handling cost specified on input is added to each shipping service on output. If domestic and international calculated shipping is offered for an item and if packaging/handling cost is specified only for domestic shipping, that cost will be applied by eBay as the international packaging/handling cost. (To specify a international packaging/handling cost, you must always specify a domestic packaging/handling cost, even if it is 0.) When UPS is one of the shipping services offered by the seller, package dimensions are required on list/relist/revise. For calculated shipping only.
	 * @var EbayTradingTypeAmountType
	 */
	public $PackagingHandlingCosts;
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
	 * The InternationalPackagingHandlingCosts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Fees a seller might assess for the shipping of the item (in addition to whatever the shipping service might charge). Any packaging/handling cost specified on input is added to each shipping service on output. If domestic and international calculated shipping is offered for an item and if packaging/handling cost is specified only for domestic shipping, that cost will be applied by eBay as the international packaging/handling cost. (To specify a international packaging/handling cost, you must always specify a domestic packaging/handling cost, even if it is 0.) For international calculated shipping only.
	 * @var EbayTradingTypeAmountType
	 */
	public $InternationalPackagingHandlingCosts;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string OriginatingPostalCode
	 * @param EbayTradingTypeMeasurementSystemCodeType MeasurementUnit
	 * @param EbayTradingTypeMeasureType PackageDepth
	 * @param EbayTradingTypeMeasureType PackageLength
	 * @param EbayTradingTypeMeasureType PackageWidth
	 * @param EbayTradingTypeAmountType PackagingHandlingCosts
	 * @param boolean ShippingIrregular
	 * @param EbayTradingTypeShippingPackageCodeType ShippingPackage
	 * @param EbayTradingTypeMeasureType WeightMajor
	 * @param EbayTradingTypeMeasureType WeightMinor
	 * @param EbayTradingTypeAmountType InternationalPackagingHandlingCosts
	 * @param DOMDocument any
	 * @return EbayTradingTypeCalculatedShippingRateType
	 */
	public function __construct($_OriginatingPostalCode = null,$_MeasurementUnit = null,$_PackageDepth = null,$_PackageLength = null,$_PackageWidth = null,$_PackagingHandlingCosts = null,$_ShippingIrregular = null,$_ShippingPackage = null,$_WeightMajor = null,$_WeightMinor = null,$_InternationalPackagingHandlingCosts = null,$_any = null)
	{
		parent::__construct(array('OriginatingPostalCode'=>$_OriginatingPostalCode,'MeasurementUnit'=>$_MeasurementUnit,'PackageDepth'=>$_PackageDepth,'PackageLength'=>$_PackageLength,'PackageWidth'=>$_PackageWidth,'PackagingHandlingCosts'=>$_PackagingHandlingCosts,'ShippingIrregular'=>$_ShippingIrregular,'ShippingPackage'=>$_ShippingPackage,'WeightMajor'=>$_WeightMajor,'WeightMinor'=>$_WeightMinor,'InternationalPackagingHandlingCosts'=>$_InternationalPackagingHandlingCosts,'any'=>$_any));
	}
	/**
	 * Set OriginatingPostalCode
	 * @param string OriginatingPostalCode
	 * @return string
	 */
	public function setOriginatingPostalCode($_OriginatingPostalCode)
	{
		return ($this->OriginatingPostalCode = $_OriginatingPostalCode);
	}
	/**
	 * Get OriginatingPostalCode
	 * @return string
	 */
	public function getOriginatingPostalCode()
	{
		return $this->OriginatingPostalCode;
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
	 * Set PackagingHandlingCosts
	 * @param AmountType PackagingHandlingCosts
	 * @return AmountType
	 */
	public function setPackagingHandlingCosts($_PackagingHandlingCosts)
	{
		return ($this->PackagingHandlingCosts = $_PackagingHandlingCosts);
	}
	/**
	 * Get PackagingHandlingCosts
	 * @return EbayTradingTypeAmountType
	 */
	public function getPackagingHandlingCosts()
	{
		return $this->PackagingHandlingCosts;
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
	 * Set InternationalPackagingHandlingCosts
	 * @param AmountType InternationalPackagingHandlingCosts
	 * @return AmountType
	 */
	public function setInternationalPackagingHandlingCosts($_InternationalPackagingHandlingCosts)
	{
		return ($this->InternationalPackagingHandlingCosts = $_InternationalPackagingHandlingCosts);
	}
	/**
	 * Get InternationalPackagingHandlingCosts
	 * @return EbayTradingTypeAmountType
	 */
	public function getInternationalPackagingHandlingCosts()
	{
		return $this->InternationalPackagingHandlingCosts;
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