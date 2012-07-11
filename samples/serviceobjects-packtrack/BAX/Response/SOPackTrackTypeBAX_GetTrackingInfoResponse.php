<?php
/**
 * Class file for SOPackTrackTypeBAX_GetTrackingInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOPackTrackTypeBAX_GetTrackingInfoResponse
 * @date 08/07/2012
 */
class SOPackTrackTypeBAX_GetTrackingInfoResponse extends SOPackTrackWsdlClass
{
	/**
	 * The BAX_GetTrackingInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPackTrackTypeTrackingInfo
	 */
	public $BAX_GetTrackingInfoResult;
	/**
	 * Constructor
	 * @param SOPackTrackTypeTrackingInfo BAX_GetTrackingInfoResult
	 * @return SOPackTrackTypeBAX_GetTrackingInfoResponse
	 */
	public function __construct($_BAX_GetTrackingInfoResult = null)
	{
		parent::__construct(array('BAX_GetTrackingInfoResult'=>$_BAX_GetTrackingInfoResult));
	}
	/**
	 * Set BAX_GetTrackingInfoResult
	 * @param TrackingInfo BAX_GetTrackingInfoResult
	 * @return TrackingInfo
	 */
	public function setBAX_GetTrackingInfoResult($_BAX_GetTrackingInfoResult)
	{
		return ($this->BAX_GetTrackingInfoResult = $_BAX_GetTrackingInfoResult);
	}
	/**
	 * Get BAX_GetTrackingInfoResult
	 * @return SOPackTrackTypeTrackingInfo
	 */
	public function getBAX_GetTrackingInfoResult()
	{
		return $this->BAX_GetTrackingInfoResult;
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