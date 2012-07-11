<?php
/**
 * Class file for BingGeoTypeGeocodeRequest
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeGeocodeRequest
 * @date 02/07/2012
 */
class BingGeoTypeGeocodeRequest extends BingGeoTypeRequestBase
{
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeAddress
	 */
	public $Address;
	/**
	 * The Options
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeGeocodeOptions
	 */
	public $Options;
	/**
	 * The Query
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Query;
	/**
	 * Constructor
	 * @param BingGeoTypeAddress Address
	 * @param BingGeoTypeGeocodeOptions Options
	 * @param string Query
	 * @return BingGeoTypeGeocodeRequest
	 */
	public function __construct($_Address = null,$_Options = null,$_Query = null)
	{
		BingGeoWsdlClass::__construct(array('Address'=>$_Address,'Options'=>$_Options,'Query'=>$_Query));
	}
	/**
	 * Set Address
	 * @param Address Address
	 * @return Address
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return BingGeoTypeAddress
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set Options
	 * @param GeocodeOptions Options
	 * @return GeocodeOptions
	 */
	public function setOptions($_Options)
	{
		return ($this->Options = $_Options);
	}
	/**
	 * Get Options
	 * @return BingGeoTypeGeocodeOptions
	 */
	public function getOptions()
	{
		return $this->Options;
	}
	/**
	 * Set Query
	 * @param string Query
	 * @return string
	 */
	public function setQuery($_Query)
	{
		return ($this->Query = $_Query);
	}
	/**
	 * Get Query
	 * @return string
	 */
	public function getQuery()
	{
		return $this->Query;
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