<?php
/**
 * Class file for SOFastWeatherTypeGetWMOIDByCityResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeGetWMOIDByCityResponse
 * @date 08/07/2012
 */
class SOFastWeatherTypeGetWMOIDByCityResponse extends SOFastWeatherWsdlClass
{
	/**
	 * The GetWMOIDByCityResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastWeatherTypeWMOIDInfo
	 */
	public $GetWMOIDByCityResult;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeWMOIDInfo GetWMOIDByCityResult
	 * @return SOFastWeatherTypeGetWMOIDByCityResponse
	 */
	public function __construct($_GetWMOIDByCityResult = null)
	{
		parent::__construct(array('GetWMOIDByCityResult'=>$_GetWMOIDByCityResult));
	}
	/**
	 * Set GetWMOIDByCityResult
	 * @param WMOIDInfo GetWMOIDByCityResult
	 * @return WMOIDInfo
	 */
	public function setGetWMOIDByCityResult($_GetWMOIDByCityResult)
	{
		return ($this->GetWMOIDByCityResult = $_GetWMOIDByCityResult);
	}
	/**
	 * Get GetWMOIDByCityResult
	 * @return SOFastWeatherTypeWMOIDInfo
	 */
	public function getGetWMOIDByCityResult()
	{
		return $this->GetWMOIDByCityResult;
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