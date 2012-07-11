<?php
/**
 * Class file for EccGeoZipCityTypeGetCityResponse
 * @date 03/07/2012
 */
/**
 * Class EccGeoZipCityTypeGetCityResponse
 * @date 03/07/2012
 */
class EccGeoZipCityTypeGetCityResponse extends EccGeoZipCityWsdlClass
{
	/**
	 * The GetCityResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccGeoZipCityTypeZipCity
	 */
	public $GetCityResult;
	/**
	 * Constructor
	 * @param EccGeoZipCityTypeZipCity GetCityResult
	 * @return EccGeoZipCityTypeGetCityResponse
	 */
	public function __construct($_GetCityResult = null)
	{
		parent::__construct(array('GetCityResult'=>$_GetCityResult));
	}
	/**
	 * Set GetCityResult
	 * @param ZipCity GetCityResult
	 * @return ZipCity
	 */
	public function setGetCityResult($_GetCityResult)
	{
		return ($this->GetCityResult = $_GetCityResult);
	}
	/**
	 * Get GetCityResult
	 * @return EccGeoZipCityTypeZipCity
	 */
	public function getGetCityResult()
	{
		return $this->GetCityResult;
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