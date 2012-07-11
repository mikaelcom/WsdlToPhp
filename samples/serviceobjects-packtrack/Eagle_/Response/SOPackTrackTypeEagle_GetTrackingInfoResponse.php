<?php
/**
 * Class file for SOPackTrackTypeEagle_GetTrackingInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOPackTrackTypeEagle_GetTrackingInfoResponse
 * @date 08/07/2012
 */
class SOPackTrackTypeEagle_GetTrackingInfoResponse extends SOPackTrackWsdlClass
{
	/**
	 * The Eagle_GetTrackingInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPackTrackTypeTrackingInfo
	 */
	public $Eagle_GetTrackingInfoResult;
	/**
	 * Constructor
	 * @param SOPackTrackTypeTrackingInfo Eagle_GetTrackingInfoResult
	 * @return SOPackTrackTypeEagle_GetTrackingInfoResponse
	 */
	public function __construct($_Eagle_GetTrackingInfoResult = null)
	{
		parent::__construct(array('Eagle_GetTrackingInfoResult'=>$_Eagle_GetTrackingInfoResult));
	}
	/**
	 * Set Eagle_GetTrackingInfoResult
	 * @param TrackingInfo Eagle_GetTrackingInfoResult
	 * @return TrackingInfo
	 */
	public function setEagle_GetTrackingInfoResult($_Eagle_GetTrackingInfoResult)
	{
		return ($this->Eagle_GetTrackingInfoResult = $_Eagle_GetTrackingInfoResult);
	}
	/**
	 * Get Eagle_GetTrackingInfoResult
	 * @return SOPackTrackTypeTrackingInfo
	 */
	public function getEagle_GetTrackingInfoResult()
	{
		return $this->Eagle_GetTrackingInfoResult;
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