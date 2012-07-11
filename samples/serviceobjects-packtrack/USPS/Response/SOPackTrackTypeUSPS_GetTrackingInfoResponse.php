<?php
/**
 * Class file for SOPackTrackTypeUSPS_GetTrackingInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOPackTrackTypeUSPS_GetTrackingInfoResponse
 * @date 08/07/2012
 */
class SOPackTrackTypeUSPS_GetTrackingInfoResponse extends SOPackTrackWsdlClass
{
	/**
	 * The USPS_GetTrackingInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPackTrackTypeTrackingInfo
	 */
	public $USPS_GetTrackingInfoResult;
	/**
	 * Constructor
	 * @param SOPackTrackTypeTrackingInfo USPS_GetTrackingInfoResult
	 * @return SOPackTrackTypeUSPS_GetTrackingInfoResponse
	 */
	public function __construct($_USPS_GetTrackingInfoResult = null)
	{
		parent::__construct(array('USPS_GetTrackingInfoResult'=>$_USPS_GetTrackingInfoResult));
	}
	/**
	 * Set USPS_GetTrackingInfoResult
	 * @param TrackingInfo USPS_GetTrackingInfoResult
	 * @return TrackingInfo
	 */
	public function setUSPS_GetTrackingInfoResult($_USPS_GetTrackingInfoResult)
	{
		return ($this->USPS_GetTrackingInfoResult = $_USPS_GetTrackingInfoResult);
	}
	/**
	 * Get USPS_GetTrackingInfoResult
	 * @return SOPackTrackTypeTrackingInfo
	 */
	public function getUSPS_GetTrackingInfoResult()
	{
		return $this->USPS_GetTrackingInfoResult;
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