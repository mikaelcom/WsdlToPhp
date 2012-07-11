<?php
/**
 * Class file for SOPackTrackTypeMenlo_GetTrackingInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOPackTrackTypeMenlo_GetTrackingInfoResponse
 * @date 08/07/2012
 */
class SOPackTrackTypeMenlo_GetTrackingInfoResponse extends SOPackTrackWsdlClass
{
	/**
	 * The Menlo_GetTrackingInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPackTrackTypeTrackingInfo
	 */
	public $Menlo_GetTrackingInfoResult;
	/**
	 * Constructor
	 * @param SOPackTrackTypeTrackingInfo Menlo_GetTrackingInfoResult
	 * @return SOPackTrackTypeMenlo_GetTrackingInfoResponse
	 */
	public function __construct($_Menlo_GetTrackingInfoResult = null)
	{
		parent::__construct(array('Menlo_GetTrackingInfoResult'=>$_Menlo_GetTrackingInfoResult));
	}
	/**
	 * Set Menlo_GetTrackingInfoResult
	 * @param TrackingInfo Menlo_GetTrackingInfoResult
	 * @return TrackingInfo
	 */
	public function setMenlo_GetTrackingInfoResult($_Menlo_GetTrackingInfoResult)
	{
		return ($this->Menlo_GetTrackingInfoResult = $_Menlo_GetTrackingInfoResult);
	}
	/**
	 * Get Menlo_GetTrackingInfoResult
	 * @return SOPackTrackTypeTrackingInfo
	 */
	public function getMenlo_GetTrackingInfoResult()
	{
		return $this->Menlo_GetTrackingInfoResult;
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