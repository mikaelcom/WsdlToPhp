<?php
/**
 * Class file for BingGeoTypeReverseGeocodeResponse
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeReverseGeocodeResponse
 * @date 02/07/2012
 */
class BingGeoTypeReverseGeocodeResponse extends BingGeoWsdlClass
{
	/**
	 * The ReverseGeocodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeGeocodeResponse
	 */
	public $ReverseGeocodeResult;
	/**
	 * Constructor
	 * @param BingGeoTypeGeocodeResponse ReverseGeocodeResult
	 * @return BingGeoTypeReverseGeocodeResponse
	 */
	public function __construct($_ReverseGeocodeResult = null)
	{
		parent::__construct(array('ReverseGeocodeResult'=>$_ReverseGeocodeResult));
	}
	/**
	 * Set ReverseGeocodeResult
	 * @param GeocodeResponse ReverseGeocodeResult
	 * @return GeocodeResponse
	 */
	public function setReverseGeocodeResult($_ReverseGeocodeResult)
	{
		return ($this->ReverseGeocodeResult = $_ReverseGeocodeResult);
	}
	/**
	 * Get ReverseGeocodeResult
	 * @return BingGeoTypeGeocodeResponse
	 */
	public function getReverseGeocodeResult()
	{
		return $this->ReverseGeocodeResult;
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