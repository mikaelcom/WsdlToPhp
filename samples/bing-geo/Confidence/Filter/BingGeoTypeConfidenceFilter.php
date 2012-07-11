<?php
/**
 * Class file for BingGeoTypeConfidenceFilter
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeConfidenceFilter
 * @date 02/07/2012
 */
class BingGeoTypeConfidenceFilter extends BingGeoTypeFilterBase
{
	/**
	 * The MinimumConfidence
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var BingGeoTypeConfidence
	 */
	public $MinimumConfidence;
	/**
	 * Constructor
	 * @param BingGeoTypeConfidence MinimumConfidence
	 * @return BingGeoTypeConfidenceFilter
	 */
	public function __construct($_MinimumConfidence = null)
	{
		BingGeoWsdlClass::__construct(array('MinimumConfidence'=>$_MinimumConfidence));
	}
	/**
	 * Set MinimumConfidence
	 * @param Confidence MinimumConfidence
	 * @return Confidence
	 */
	public function setMinimumConfidence($_MinimumConfidence)
	{
		return ($this->MinimumConfidence = BingGeoTypeConfidence::valueIsValid($_MinimumConfidence)?$_MinimumConfidence:null);
	}
	/**
	 * Get MinimumConfidence
	 * @return BingGeoTypeConfidence
	 */
	public function getMinimumConfidence()
	{
		return $this->MinimumConfidence;
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