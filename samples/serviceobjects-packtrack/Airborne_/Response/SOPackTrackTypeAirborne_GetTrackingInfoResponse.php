<?php
/**
 * Class file for SOPackTrackTypeAirborne_GetTrackingInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOPackTrackTypeAirborne_GetTrackingInfoResponse
 * @date 08/07/2012
 */
class SOPackTrackTypeAirborne_GetTrackingInfoResponse extends SOPackTrackWsdlClass
{
	/**
	 * The Airborne_GetTrackingInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPackTrackTypeTrackingInfo
	 */
	public $Airborne_GetTrackingInfoResult;
	/**
	 * Constructor
	 * @param SOPackTrackTypeTrackingInfo Airborne_GetTrackingInfoResult
	 * @return SOPackTrackTypeAirborne_GetTrackingInfoResponse
	 */
	public function __construct($_Airborne_GetTrackingInfoResult = null)
	{
		parent::__construct(array('Airborne_GetTrackingInfoResult'=>$_Airborne_GetTrackingInfoResult));
	}
	/**
	 * Set Airborne_GetTrackingInfoResult
	 * @param TrackingInfo Airborne_GetTrackingInfoResult
	 * @return TrackingInfo
	 */
	public function setAirborne_GetTrackingInfoResult($_Airborne_GetTrackingInfoResult)
	{
		return ($this->Airborne_GetTrackingInfoResult = $_Airborne_GetTrackingInfoResult);
	}
	/**
	 * Get Airborne_GetTrackingInfoResult
	 * @return SOPackTrackTypeTrackingInfo
	 */
	public function getAirborne_GetTrackingInfoResult()
	{
		return $this->Airborne_GetTrackingInfoResult;
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