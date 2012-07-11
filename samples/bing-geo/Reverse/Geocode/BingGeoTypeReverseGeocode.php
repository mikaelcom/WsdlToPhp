<?php
/**
 * Class file for BingGeoTypeReverseGeocode
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeReverseGeocode
 * @date 02/07/2012
 */
class BingGeoTypeReverseGeocode extends BingGeoWsdlClass
{
	/**
	 * The request
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeReverseGeocodeRequest
	 */
	public $request;
	/**
	 * Constructor
	 * @param BingGeoTypeReverseGeocodeRequest request
	 * @return BingGeoTypeReverseGeocode
	 */
	public function __construct($_request = null)
	{
		parent::__construct(array('request'=>$_request));
	}
	/**
	 * Set request
	 * @param ReverseGeocodeRequest request
	 * @return ReverseGeocodeRequest
	 */
	public function setRequest($_request)
	{
		return ($this->request = $_request);
	}
	/**
	 * Get request
	 * @return BingGeoTypeReverseGeocodeRequest
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