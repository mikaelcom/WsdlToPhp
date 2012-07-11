<?php
/**
 * Class file for CdyneDemographicsQTypeGetPlaceIDbyAddressResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetPlaceIDbyAddressResponse
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetPlaceIDbyAddressResponse extends CdyneDemographicsQWsdlClass
{
	/**
	 * The GetPlaceIDbyAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypePlaceInfo
	 */
	public $GetPlaceIDbyAddressResult;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypePlaceInfo GetPlaceIDbyAddressResult
	 * @return CdyneDemographicsQTypeGetPlaceIDbyAddressResponse
	 */
	public function __construct($_GetPlaceIDbyAddressResult = null)
	{
		parent::__construct(array('GetPlaceIDbyAddressResult'=>$_GetPlaceIDbyAddressResult));
	}
	/**
	 * Set GetPlaceIDbyAddressResult
	 * @param PlaceInfo GetPlaceIDbyAddressResult
	 * @return PlaceInfo
	 */
	public function setGetPlaceIDbyAddressResult($_GetPlaceIDbyAddressResult)
	{
		return ($this->GetPlaceIDbyAddressResult = $_GetPlaceIDbyAddressResult);
	}
	/**
	 * Get GetPlaceIDbyAddressResult
	 * @return CdyneDemographicsQTypePlaceInfo
	 */
	public function getGetPlaceIDbyAddressResult()
	{
		return $this->GetPlaceIDbyAddressResult;
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