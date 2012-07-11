<?php
/**
 * Class file for SOPackTrackTypeEmery_GetTrackingInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOPackTrackTypeEmery_GetTrackingInfoResponse
 * @date 08/07/2012
 */
class SOPackTrackTypeEmery_GetTrackingInfoResponse extends SOPackTrackWsdlClass
{
	/**
	 * The Emery_GetTrackingInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPackTrackTypeTrackingInfo
	 */
	public $Emery_GetTrackingInfoResult;
	/**
	 * Constructor
	 * @param SOPackTrackTypeTrackingInfo Emery_GetTrackingInfoResult
	 * @return SOPackTrackTypeEmery_GetTrackingInfoResponse
	 */
	public function __construct($_Emery_GetTrackingInfoResult = null)
	{
		parent::__construct(array('Emery_GetTrackingInfoResult'=>$_Emery_GetTrackingInfoResult));
	}
	/**
	 * Set Emery_GetTrackingInfoResult
	 * @param TrackingInfo Emery_GetTrackingInfoResult
	 * @return TrackingInfo
	 */
	public function setEmery_GetTrackingInfoResult($_Emery_GetTrackingInfoResult)
	{
		return ($this->Emery_GetTrackingInfoResult = $_Emery_GetTrackingInfoResult);
	}
	/**
	 * Get Emery_GetTrackingInfoResult
	 * @return SOPackTrackTypeTrackingInfo
	 */
	public function getEmery_GetTrackingInfoResult()
	{
		return $this->Emery_GetTrackingInfoResult;
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