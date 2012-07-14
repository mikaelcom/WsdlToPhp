<?php
/**
 * Class file for PayPalTypeCalculatedShippingRateType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCalculatedShippingRateType
 * @date 14/07/2012
 */
class PayPalTypeCalculatedShippingRateType extends PayPalWsdlClass
{
	/**
	 * The OriginatingPostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Potal/zip code from where package will be shipped.
	 * @var string
	 */
	public $OriginatingPostalCode;
	/**
	 * The ShippingIrregular
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates an item that cannot go through the stamping machine at the shipping service office (a value of True) and requires special or fragile handling. Only returned if ShippingType = 2.
	 * @var boolean
	 */
	public $ShippingIrregular;
	/**
	 * The CarrierDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : contains information about shipping fees per each shipping service chosen by the seller
	 * @var PayPalTypeShippingCarrierDetailsType
	 */
	public $CarrierDetails;
	/**
	 * The ShippingPackage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : May need to be moved into details - wait for George! The size of the package to be shipped. Possible values are: None Letter Large envelope USPS flat rate envelope Package/thick envelope USPS large package/oversize 1 Very large package/oversize 2 UPS Letter
	 * @var PayPalTypeShippingPackageCodeType
	 */
	public $ShippingPackage;
	/**
	 * The WeightMajor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Shipping weight unit of measure (major). If unit of weight is kilogram (i.e., metric system) this would be the exact weight value in kilogram (i.e., complete decimal number, e.g., 2.23 kg). Only returned if ShippingType is 2.
	 * @var PayPalTypeMeasureType
	 */
	public $WeightMajor;
	/**
	 * The WeightMinor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Shipping weight unit of measure (minor). If unit of weight is in pounds and/or ounces, this would be the exact weight value in ounces (i.e., complete decimal number, e.g., 8.2 or 8.0 ounces). Only returned if ShippingType is 2.
	 * @var PayPalTypeMeasureType
	 */
	public $WeightMinor;
	/**
	 * Constructor
	 * @param string OriginatingPostalCode
	 * @param boolean ShippingIrregular
	 * @param PayPalTypeShippingCarrierDetailsType CarrierDetails
	 * @param PayPalTypeShippingPackageCodeType ShippingPackage
	 * @param PayPalTypeMeasureType WeightMajor
	 * @param PayPalTypeMeasureType WeightMinor
	 * @return PayPalTypeCalculatedShippingRateType
	 */
	public function __construct($_OriginatingPostalCode = null,$_ShippingIrregular = null,$_CarrierDetails = null,$_ShippingPackage = null,$_WeightMajor = null,$_WeightMinor = null)
	{
		parent::__construct(array('OriginatingPostalCode'=>$_OriginatingPostalCode,'ShippingIrregular'=>$_ShippingIrregular,'CarrierDetails'=>$_CarrierDetails,'ShippingPackage'=>$_ShippingPackage,'WeightMajor'=>$_WeightMajor,'WeightMinor'=>$_WeightMinor));
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
	 * Set CarrierDetails
	 * @param ShippingCarrierDetailsType CarrierDetails
	 * @return ShippingCarrierDetailsType
	 */
	public function setCarrierDetails($_CarrierDetails)
	{
		return ($this->CarrierDetails = $_CarrierDetails);
	}
	/**
	 * Get CarrierDetails
	 * @return PayPalTypeShippingCarrierDetailsType
	 */
	public function getCarrierDetails()
	{
		return $this->CarrierDetails;
	}
	/**
	 * Set ShippingPackage
	 * @param ShippingPackageCodeType ShippingPackage
	 * @return ShippingPackageCodeType
	 */
	public function setShippingPackage($_ShippingPackage)
	{
		return ($this->ShippingPackage = PayPalTypeShippingPackageCodeType::valueIsValid($_ShippingPackage)?$_ShippingPackage:null);
	}
	/**
	 * Get ShippingPackage
	 * @return PayPalTypeShippingPackageCodeType
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
	 * @return PayPalTypeMeasureType
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
	 * @return PayPalTypeMeasureType
	 */
	public function getWeightMinor()
	{
		return $this->WeightMinor;
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