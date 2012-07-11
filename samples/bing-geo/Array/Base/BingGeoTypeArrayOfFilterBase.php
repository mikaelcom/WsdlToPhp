<?php
/**
 * Class file for BingGeoTypeArrayOfFilterBase
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeArrayOfFilterBase
 * @date 02/07/2012
 */
class BingGeoTypeArrayOfFilterBase extends BingGeoWsdlClass
{
	/**
	 * The FilterBase
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var BingGeoTypeFilterBase
	 */
	public $FilterBase;
	/**
	 * Constructor
	 * @param BingGeoTypeFilterBase FilterBase
	 * @return BingGeoTypeArrayOfFilterBase
	 */
	public function __construct($_FilterBase = null)
	{
		parent::__construct(array('FilterBase'=>$_FilterBase));
	}
	/**
	 * Set FilterBase
	 * @param FilterBase FilterBase
	 * @return FilterBase
	 */
	public function setFilterBase($_FilterBase)
	{
		return ($this->FilterBase = $_FilterBase);
	}
	/**
	 * Get FilterBase
	 * @return BingGeoTypeFilterBase
	 */
	public function getFilterBase()
	{
		return $this->FilterBase;
	}
	/**
	 * Returns the current element
	 * @see BingGeoWsdlClass::current()
	 * @return BingGeoTypeFilterBase
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingGeoWsdlClass::item()
	 * @param int
	 * @return BingGeoTypeFilterBase
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingGeoWsdlClass::first()
	 * @return BingGeoTypeFilterBase
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingGeoWsdlClass::last()
	 * @return BingGeoTypeFilterBase
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingGeoWsdlClass::offsetGet()
	 * @param int
	 * @return BingGeoTypeFilterBase
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FilterBase'
	 */
	public function getAttributeName()
	{
		return 'FilterBase';
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