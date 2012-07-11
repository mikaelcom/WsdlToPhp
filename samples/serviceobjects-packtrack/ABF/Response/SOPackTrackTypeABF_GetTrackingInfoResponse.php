<?php
/**
 * Class file for SOPackTrackTypeABF_GetTrackingInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOPackTrackTypeABF_GetTrackingInfoResponse
 * @date 08/07/2012
 */
class SOPackTrackTypeABF_GetTrackingInfoResponse extends SOPackTrackWsdlClass
{
	/**
	 * The ABF_GetTrackingInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPackTrackTypeTrackingInfo
	 */
	public $ABF_GetTrackingInfoResult;
	/**
	 * Constructor
	 * @param SOPackTrackTypeTrackingInfo ABF_GetTrackingInfoResult
	 * @return SOPackTrackTypeABF_GetTrackingInfoResponse
	 */
	public function __construct($_ABF_GetTrackingInfoResult = null)
	{
		parent::__construct(array('ABF_GetTrackingInfoResult'=>$_ABF_GetTrackingInfoResult));
	}
	/**
	 * Set ABF_GetTrackingInfoResult
	 * @param TrackingInfo ABF_GetTrackingInfoResult
	 * @return TrackingInfo
	 */
	public function setABF_GetTrackingInfoResult($_ABF_GetTrackingInfoResult)
	{
		return ($this->ABF_GetTrackingInfoResult = $_ABF_GetTrackingInfoResult);
	}
	/**
	 * Get ABF_GetTrackingInfoResult
	 * @return SOPackTrackTypeTrackingInfo
	 */
	public function getABF_GetTrackingInfoResult()
	{
		return $this->ABF_GetTrackingInfoResult;
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