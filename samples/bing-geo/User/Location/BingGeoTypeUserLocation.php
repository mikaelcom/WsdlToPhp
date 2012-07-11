<?php
/**
 * Class file for BingGeoTypeUserLocation
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeUserLocation
 * @date 02/07/2012
 */
class BingGeoTypeUserLocation extends BingGeoTypeLocation
{
	/**
	 * The Confidence
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var BingGeoTypeConfidence
	 */
	public $Confidence;
	/**
	 * Constructor
	 * @param BingGeoTypeConfidence Confidence
	 * @return BingGeoTypeUserLocation
	 */
	public function __construct($_Confidence = null)
	{
		BingGeoWsdlClass::__construct(array('Confidence'=>$_Confidence));
	}
	/**
	 * Set Confidence
	 * @param Confidence Confidence
	 * @return Confidence
	 */
	public function setConfidence($_Confidence)
	{
		return ($this->Confidence = BingGeoTypeConfidence::valueIsValid($_Confidence)?$_Confidence:null);
	}
	/**
	 * Get Confidence
	 * @return BingGeoTypeConfidence
	 */
	public function getConfidence()
	{
		return $this->Confidence;
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