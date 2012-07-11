<?php
/**
 * Class file for BingGeoTypeGeocode
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeGeocode
 * @date 02/07/2012
 */
class BingGeoTypeGeocode extends BingGeoWsdlClass
{
	/**
	 * The request
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeGeocodeRequest
	 */
	public $request;
	/**
	 * Constructor
	 * @param BingGeoTypeGeocodeRequest request
	 * @return BingGeoTypeGeocode
	 */
	public function __construct($_request = null)
	{
		parent::__construct(array('request'=>$_request));
	}
	/**
	 * Set request
	 * @param GeocodeRequest request
	 * @return GeocodeRequest
	 */
	public function setRequest($_request)
	{
		return ($this->request = $_request);
	}
	/**
	 * Get request
	 * @return BingGeoTypeGeocodeRequest
	 */
	public function getRequest()
	{
		return $this->request;
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