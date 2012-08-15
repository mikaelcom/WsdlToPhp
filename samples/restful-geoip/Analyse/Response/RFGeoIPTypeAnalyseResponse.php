<?php
/**
 * Class file for RFGeoIPTypeAnalyseResponse
 * @date 15/08/2012
 */
/**
 * Class RFGeoIPTypeAnalyseResponse
 * @date 15/08/2012
 */
class RFGeoIPTypeAnalyseResponse extends RFGeoIPWsdlClass
{
	/**
	 * The AnalyseResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFGeoIPTypeGeoLocation
	 */
	public $AnalyseResult;
	/**
	 * Constructor
	 * @param RFGeoIPTypeGeoLocation AnalyseResult
	 * @return RFGeoIPTypeAnalyseResponse
	 */
	public function __construct($_AnalyseResult = null)
	{
		parent::__construct(array('AnalyseResult'=>$_AnalyseResult));
	}
	/**
	 * Set AnalyseResult
	 * @param GeoLocation AnalyseResult
	 * @return GeoLocation
	 */
	public function setAnalyseResult($_AnalyseResult)
	{
		return ($this->AnalyseResult = $_AnalyseResult);
	}
	/**
	 * Get AnalyseResult
	 * @return RFGeoIPTypeGeoLocation
	 */
	public function getAnalyseResult()
	{
		return $this->AnalyseResult;
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