<?php
/**
 * Class file for BingGeoTypeGeocodeOptions
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeGeocodeOptions
 * @date 02/07/2012
 */
class BingGeoTypeGeocodeOptions extends BingGeoWsdlClass
{
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var int
	 */
	public $Count;
	/**
	 * The Filters
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeArrayOfFilterBase
	 */
	public $Filters;
	/**
	 * Constructor
	 * @param int Count
	 * @param BingGeoTypeArrayOfFilterBase Filters
	 * @return BingGeoTypeGeocodeOptions
	 */
	public function __construct($_Count = null,$_Filters = null)
	{
		parent::__construct(array('Count'=>$_Count,'Filters'=>new BingGeoTypeArrayOfFilterBase($_Filters)));
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Filters
	 * @param ArrayOfFilterBase Filters
	 * @return ArrayOfFilterBase
	 */
	public function setFilters($_Filters)
	{
		return ($this->Filters = $_Filters);
	}
	/**
	 * Get Filters
	 * @return BingGeoTypeArrayOfFilterBase
	 */
	public function getFilters()
	{
		return $this->Filters;
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