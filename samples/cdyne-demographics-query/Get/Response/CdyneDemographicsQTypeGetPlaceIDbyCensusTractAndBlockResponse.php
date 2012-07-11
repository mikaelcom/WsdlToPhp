<?php
/**
 * Class file for CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlockResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlockResponse
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlockResponse extends CdyneDemographicsQWsdlClass
{
	/**
	 * The GetPlaceIDbyCensusTractAndBlockResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypePlaceInfo
	 */
	public $GetPlaceIDbyCensusTractAndBlockResult;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypePlaceInfo GetPlaceIDbyCensusTractAndBlockResult
	 * @return CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlockResponse
	 */
	public function __construct($_GetPlaceIDbyCensusTractAndBlockResult = null)
	{
		parent::__construct(array('GetPlaceIDbyCensusTractAndBlockResult'=>$_GetPlaceIDbyCensusTractAndBlockResult));
	}
	/**
	 * Set GetPlaceIDbyCensusTractAndBlockResult
	 * @param PlaceInfo GetPlaceIDbyCensusTractAndBlockResult
	 * @return PlaceInfo
	 */
	public function setGetPlaceIDbyCensusTractAndBlockResult($_GetPlaceIDbyCensusTractAndBlockResult)
	{
		return ($this->GetPlaceIDbyCensusTractAndBlockResult = $_GetPlaceIDbyCensusTractAndBlockResult);
	}
	/**
	 * Get GetPlaceIDbyCensusTractAndBlockResult
	 * @return CdyneDemographicsQTypePlaceInfo
	 */
	public function getGetPlaceIDbyCensusTractAndBlockResult()
	{
		return $this->GetPlaceIDbyCensusTractAndBlockResult;
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