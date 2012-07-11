<?php
/**
 * Class file for SOPackTrackTypeUnitedVan_GetTrackingInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOPackTrackTypeUnitedVan_GetTrackingInfoResponse
 * @date 08/07/2012
 */
class SOPackTrackTypeUnitedVan_GetTrackingInfoResponse extends SOPackTrackWsdlClass
{
	/**
	 * The UnitedVan_GetTrackingInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPackTrackTypeTrackingInfo
	 */
	public $UnitedVan_GetTrackingInfoResult;
	/**
	 * Constructor
	 * @param SOPackTrackTypeTrackingInfo UnitedVan_GetTrackingInfoResult
	 * @return SOPackTrackTypeUnitedVan_GetTrackingInfoResponse
	 */
	public function __construct($_UnitedVan_GetTrackingInfoResult = null)
	{
		parent::__construct(array('UnitedVan_GetTrackingInfoResult'=>$_UnitedVan_GetTrackingInfoResult));
	}
	/**
	 * Set UnitedVan_GetTrackingInfoResult
	 * @param TrackingInfo UnitedVan_GetTrackingInfoResult
	 * @return TrackingInfo
	 */
	public function setUnitedVan_GetTrackingInfoResult($_UnitedVan_GetTrackingInfoResult)
	{
		return ($this->UnitedVan_GetTrackingInfoResult = $_UnitedVan_GetTrackingInfoResult);
	}
	/**
	 * Get UnitedVan_GetTrackingInfoResult
	 * @return SOPackTrackTypeTrackingInfo
	 */
	public function getUnitedVan_GetTrackingInfoResult()
	{
		return $this->UnitedVan_GetTrackingInfoResult;
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