<?php
/**
 * Class file for YMailTypeFilters
 * @date 02/07/2012
 */
/**
 * Class YMailTypeFilters
 * @date 02/07/2012
 */
class YMailTypeFilters extends YMailWsdlClass
{
	/**
	 * The filtersMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $filtersMax;
	/**
	 * The numberOfFilters
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $numberOfFilters;
	/**
	 * Constructor
	 * @param unsignedInt filtersMax
	 * @param unsignedInt numberOfFilters
	 * @return YMailTypeFilters
	 */
	public function __construct($_filtersMax = null,$_numberOfFilters = null)
	{
		parent::__construct(array('filtersMax'=>$_filtersMax,'numberOfFilters'=>$_numberOfFilters));
	}
	/**
	 * Set filtersMax
	 * @param unsignedInt filtersMax
	 * @return unsignedInt
	 */
	public function setFiltersMax($_filtersMax)
	{
		return ($this->filtersMax = $_filtersMax);
	}
	/**
	 * Get filtersMax
	 * @return unsignedInt
	 */
	public function getFiltersMax()
	{
		return $this->filtersMax;
	}
	/**
	 * Set numberOfFilters
	 * @param unsignedInt numberOfFilters
	 * @return unsignedInt
	 */
	public function setNumberOfFilters($_numberOfFilters)
	{
		return ($this->numberOfFilters = $_numberOfFilters);
	}
	/**
	 * Get numberOfFilters
	 * @return unsignedInt
	 */
	public function getNumberOfFilters()
	{
		return $this->numberOfFilters;
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