<?php
/**
 * Class file for SOPackTrackTypePurolator_GetTrackingInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOPackTrackTypePurolator_GetTrackingInfoResponse
 * @date 08/07/2012
 */
class SOPackTrackTypePurolator_GetTrackingInfoResponse extends SOPackTrackWsdlClass
{
	/**
	 * The Purolator_GetTrackingInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPackTrackTypeTrackingInfo
	 */
	public $Purolator_GetTrackingInfoResult;
	/**
	 * Constructor
	 * @param SOPackTrackTypeTrackingInfo Purolator_GetTrackingInfoResult
	 * @return SOPackTrackTypePurolator_GetTrackingInfoResponse
	 */
	public function __construct($_Purolator_GetTrackingInfoResult = null)
	{
		parent::__construct(array('Purolator_GetTrackingInfoResult'=>$_Purolator_GetTrackingInfoResult));
	}
	/**
	 * Set Purolator_GetTrackingInfoResult
	 * @param TrackingInfo Purolator_GetTrackingInfoResult
	 * @return TrackingInfo
	 */
	public function setPurolator_GetTrackingInfoResult($_Purolator_GetTrackingInfoResult)
	{
		return ($this->Purolator_GetTrackingInfoResult = $_Purolator_GetTrackingInfoResult);
	}
	/**
	 * Get Purolator_GetTrackingInfoResult
	 * @return SOPackTrackTypeTrackingInfo
	 */
	public function getPurolator_GetTrackingInfoResult()
	{
		return $this->Purolator_GetTrackingInfoResult;
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