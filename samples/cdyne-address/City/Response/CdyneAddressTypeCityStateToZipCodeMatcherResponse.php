<?php
/**
 * Class file for CdyneAddressTypeCityStateToZipCodeMatcherResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeCityStateToZipCodeMatcherResponse
 * @date 02/07/2012
 */
class CdyneAddressTypeCityStateToZipCodeMatcherResponse extends CdyneAddressWsdlClass
{
	/**
	 * The CityStateToZipCodeMatcherResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneAddressTypeArrayOfAnyType
	 */
	public $CityStateToZipCodeMatcherResult;
	/**
	 * Constructor
	 * @param CdyneAddressTypeArrayOfAnyType CityStateToZipCodeMatcherResult
	 * @return CdyneAddressTypeCityStateToZipCodeMatcherResponse
	 */
	public function __construct($_CityStateToZipCodeMatcherResult = null)
	{
		parent::__construct(array('CityStateToZipCodeMatcherResult'=>new CdyneAddressTypeArrayOfAnyType($_CityStateToZipCodeMatcherResult)));
	}
	/**
	 * Set CityStateToZipCodeMatcherResult
	 * @param ArrayOfAnyType CityStateToZipCodeMatcherResult
	 * @return ArrayOfAnyType
	 */
	public function setCityStateToZipCodeMatcherResult($_CityStateToZipCodeMatcherResult)
	{
		return ($this->CityStateToZipCodeMatcherResult = $_CityStateToZipCodeMatcherResult);
	}
	/**
	 * Get CityStateToZipCodeMatcherResult
	 * @return CdyneAddressTypeArrayOfAnyType
	 */
	public function getCityStateToZipCodeMatcherResult()
	{
		return $this->CityStateToZipCodeMatcherResult;
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