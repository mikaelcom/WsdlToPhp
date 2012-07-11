<?php
/**
 * Class file for SOPackTrackTypeYellow_GetTrackingInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOPackTrackTypeYellow_GetTrackingInfoResponse
 * @date 08/07/2012
 */
class SOPackTrackTypeYellow_GetTrackingInfoResponse extends SOPackTrackWsdlClass
{
	/**
	 * The Yellow_GetTrackingInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPackTrackTypeTrackingInfo
	 */
	public $Yellow_GetTrackingInfoResult;
	/**
	 * Constructor
	 * @param SOPackTrackTypeTrackingInfo Yellow_GetTrackingInfoResult
	 * @return SOPackTrackTypeYellow_GetTrackingInfoResponse
	 */
	public function __construct($_Yellow_GetTrackingInfoResult = null)
	{
		parent::__construct(array('Yellow_GetTrackingInfoResult'=>$_Yellow_GetTrackingInfoResult));
	}
	/**
	 * Set Yellow_GetTrackingInfoResult
	 * @param TrackingInfo Yellow_GetTrackingInfoResult
	 * @return TrackingInfo
	 */
	public function setYellow_GetTrackingInfoResult($_Yellow_GetTrackingInfoResult)
	{
		return ($this->Yellow_GetTrackingInfoResult = $_Yellow_GetTrackingInfoResult);
	}
	/**
	 * Get Yellow_GetTrackingInfoResult
	 * @return SOPackTrackTypeTrackingInfo
	 */
	public function getYellow_GetTrackingInfoResult()
	{
		return $this->Yellow_GetTrackingInfoResult;
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