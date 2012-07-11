<?php
/**
 * Class file for SOPackTrackTypeTazmanian_GetTrackingInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOPackTrackTypeTazmanian_GetTrackingInfoResponse
 * @date 08/07/2012
 */
class SOPackTrackTypeTazmanian_GetTrackingInfoResponse extends SOPackTrackWsdlClass
{
	/**
	 * The Tazmanian_GetTrackingInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPackTrackTypeTrackingInfo
	 */
	public $Tazmanian_GetTrackingInfoResult;
	/**
	 * Constructor
	 * @param SOPackTrackTypeTrackingInfo Tazmanian_GetTrackingInfoResult
	 * @return SOPackTrackTypeTazmanian_GetTrackingInfoResponse
	 */
	public function __construct($_Tazmanian_GetTrackingInfoResult = null)
	{
		parent::__construct(array('Tazmanian_GetTrackingInfoResult'=>$_Tazmanian_GetTrackingInfoResult));
	}
	/**
	 * Set Tazmanian_GetTrackingInfoResult
	 * @param TrackingInfo Tazmanian_GetTrackingInfoResult
	 * @return TrackingInfo
	 */
	public function setTazmanian_GetTrackingInfoResult($_Tazmanian_GetTrackingInfoResult)
	{
		return ($this->Tazmanian_GetTrackingInfoResult = $_Tazmanian_GetTrackingInfoResult);
	}
	/**
	 * Get Tazmanian_GetTrackingInfoResult
	 * @return SOPackTrackTypeTrackingInfo
	 */
	public function getTazmanian_GetTrackingInfoResult()
	{
		return $this->Tazmanian_GetTrackingInfoResult;
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