<?php
/**
 * Class file for BingGeoTypeGeocodeLocation
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeGeocodeLocation
 * @date 02/07/2012
 */
class BingGeoTypeGeocodeLocation extends BingGeoTypeLocation
{
	/**
	 * The CalculationMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $CalculationMethod;
	/**
	 * Constructor
	 * @param string CalculationMethod
	 * @return BingGeoTypeGeocodeLocation
	 */
	public function __construct($_CalculationMethod = null)
	{
		BingGeoWsdlClass::__construct(array('CalculationMethod'=>$_CalculationMethod));
	}
	/**
	 * Set CalculationMethod
	 * @param string CalculationMethod
	 * @return string
	 */
	public function setCalculationMethod($_CalculationMethod)
	{
		return ($this->CalculationMethod = $_CalculationMethod);
	}
	/**
	 * Get CalculationMethod
	 * @return string
	 */
	public function getCalculationMethod()
	{
		return $this->CalculationMethod;
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