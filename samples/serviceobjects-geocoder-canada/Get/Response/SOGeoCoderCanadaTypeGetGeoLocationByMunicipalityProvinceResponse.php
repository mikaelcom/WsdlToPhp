<?php
/**
 * Class file for SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvinceResponse
 * @date 06/07/2012
 */
/**
 * Class SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvinceResponse
 * @date 06/07/2012
 */
class SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvinceResponse extends SOGeoCoderCanadaWsdlClass
{
	/**
	 * The GetGeoLocationByMunicipalityProvinceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderCanadaTypeLocation
	 */
	public $GetGeoLocationByMunicipalityProvinceResult;
	/**
	 * Constructor
	 * @param SOGeoCoderCanadaTypeLocation GetGeoLocationByMunicipalityProvinceResult
	 * @return SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvinceResponse
	 */
	public function __construct($_GetGeoLocationByMunicipalityProvinceResult = null)
	{
		parent::__construct(array('GetGeoLocationByMunicipalityProvinceResult'=>$_GetGeoLocationByMunicipalityProvinceResult));
	}
	/**
	 * Set GetGeoLocationByMunicipalityProvinceResult
	 * @param Location GetGeoLocationByMunicipalityProvinceResult
	 * @return Location
	 */
	public function setGetGeoLocationByMunicipalityProvinceResult($_GetGeoLocationByMunicipalityProvinceResult)
	{
		return ($this->GetGeoLocationByMunicipalityProvinceResult = $_GetGeoLocationByMunicipalityProvinceResult);
	}
	/**
	 * Get GetGeoLocationByMunicipalityProvinceResult
	 * @return SOGeoCoderCanadaTypeLocation
	 */
	public function getGetGeoLocationByMunicipalityProvinceResult()
	{
		return $this->GetGeoLocationByMunicipalityProvinceResult;
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