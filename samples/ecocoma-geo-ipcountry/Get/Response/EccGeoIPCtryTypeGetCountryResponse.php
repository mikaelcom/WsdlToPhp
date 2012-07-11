<?php
/**
 * Class file for EccGeoIPCtryTypeGetCountryResponse
 * @date 03/07/2012
 */
/**
 * Class EccGeoIPCtryTypeGetCountryResponse
 * @date 03/07/2012
 */
class EccGeoIPCtryTypeGetCountryResponse extends EccGeoIPCtryWsdlClass
{
	/**
	 * The GetCountryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccGeoIPCtryTypeIPCountry
	 */
	public $GetCountryResult;
	/**
	 * Constructor
	 * @param EccGeoIPCtryTypeIPCountry GetCountryResult
	 * @return EccGeoIPCtryTypeGetCountryResponse
	 */
	public function __construct($_GetCountryResult = null)
	{
		parent::__construct(array('GetCountryResult'=>$_GetCountryResult));
	}
	/**
	 * Set GetCountryResult
	 * @param IPCountry GetCountryResult
	 * @return IPCountry
	 */
	public function setGetCountryResult($_GetCountryResult)
	{
		return ($this->GetCountryResult = $_GetCountryResult);
	}
	/**
	 * Get GetCountryResult
	 * @return EccGeoIPCtryTypeIPCountry
	 */
	public function getGetCountryResult()
	{
		return $this->GetCountryResult;
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