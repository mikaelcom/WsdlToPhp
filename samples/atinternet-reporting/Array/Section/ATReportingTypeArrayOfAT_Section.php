<?php
/**
 * Class file for ATReportingTypeArrayOfAT_Section
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeArrayOfAT_Section
 * @date 03/07/2012
 */
class ATReportingTypeArrayOfAT_Section extends ATReportingWsdlClass
{
	/**
	 * The AT_Section
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var ATReportingTypeAT_Section
	 */
	public $AT_Section;
	/**
	 * Constructor
	 * @param ATReportingTypeAT_Section AT_Section
	 * @return ATReportingTypeArrayOfAT_Section
	 */
	public function __construct($_AT_Section = null)
	{
		parent::__construct(array('AT_Section'=>$_AT_Section));
	}
	/**
	 * Set AT_Section
	 * @param AT_Section AT_Section
	 * @return AT_Section
	 */
	public function setAT_Section($_AT_Section)
	{
		return ($this->AT_Section = $_AT_Section);
	}
	/**
	 * Get AT_Section
	 * @return ATReportingTypeAT_Section
	 */
	public function getAT_Section()
	{
		return $this->AT_Section;
	}
	/**
	 * Returns the current element
	 * @see ATReportingWsdlClass::current()
	 * @return ATReportingTypeAT_Section
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see ATReportingWsdlClass::item()
	 * @param int
	 * @return ATReportingTypeAT_Section
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see ATReportingWsdlClass::first()
	 * @return ATReportingTypeAT_Section
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see ATReportingWsdlClass::last()
	 * @return ATReportingTypeAT_Section
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see ATReportingWsdlClass::offsetGet()
	 * @param int
	 * @return ATReportingTypeAT_Section
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'AT_Section'
	 */
	public function getAttributeName()
	{
		return 'AT_Section';
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