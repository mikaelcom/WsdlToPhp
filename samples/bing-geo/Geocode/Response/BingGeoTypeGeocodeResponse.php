<?php
/**
 * Class file for BingGeoTypeGeocodeResponse
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeGeocodeResponse
 * @date 02/07/2012
 */
class BingGeoTypeGeocodeResponse extends BingGeoTypeResponseBase
{
	/**
	 * The Results
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeArrayOfGeocodeResult
	 */
	public $Results;
	/**
	 * Constructor
	 * @param BingGeoTypeArrayOfGeocodeResult Results
	 * @return BingGeoTypeGeocodeResponse
	 */
	public function __construct($_Results = null)
	{
		BingGeoWsdlClass::__construct(array('Results'=>new BingGeoTypeArrayOfGeocodeResult($_Results)));
	}
	/**
	 * Set Results
	 * @param ArrayOfGeocodeResult Results
	 * @return ArrayOfGeocodeResult
	 */
	public function setResults($_Results)
	{
		return ($this->Results = $_Results);
	}
	/**
	 * Get Results
	 * @return BingGeoTypeArrayOfGeocodeResult
	 */
	public function getResults()
	{
		return $this->Results;
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