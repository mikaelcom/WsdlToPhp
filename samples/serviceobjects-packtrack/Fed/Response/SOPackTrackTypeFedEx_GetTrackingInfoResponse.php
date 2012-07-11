<?php
/**
 * Class file for SOPackTrackTypeFedEx_GetTrackingInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOPackTrackTypeFedEx_GetTrackingInfoResponse
 * @date 08/07/2012
 */
class SOPackTrackTypeFedEx_GetTrackingInfoResponse extends SOPackTrackWsdlClass
{
	/**
	 * The FedEx_GetTrackingInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPackTrackTypeTrackingInfo
	 */
	public $FedEx_GetTrackingInfoResult;
	/**
	 * Constructor
	 * @param SOPackTrackTypeTrackingInfo FedEx_GetTrackingInfoResult
	 * @return SOPackTrackTypeFedEx_GetTrackingInfoResponse
	 */
	public function __construct($_FedEx_GetTrackingInfoResult = null)
	{
		parent::__construct(array('FedEx_GetTrackingInfoResult'=>$_FedEx_GetTrackingInfoResult));
	}
	/**
	 * Set FedEx_GetTrackingInfoResult
	 * @param TrackingInfo FedEx_GetTrackingInfoResult
	 * @return TrackingInfo
	 */
	public function setFedEx_GetTrackingInfoResult($_FedEx_GetTrackingInfoResult)
	{
		return ($this->FedEx_GetTrackingInfoResult = $_FedEx_GetTrackingInfoResult);
	}
	/**
	 * Get FedEx_GetTrackingInfoResult
	 * @return SOPackTrackTypeTrackingInfo
	 */
	public function getFedEx_GetTrackingInfoResult()
	{
		return $this->FedEx_GetTrackingInfoResult;
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