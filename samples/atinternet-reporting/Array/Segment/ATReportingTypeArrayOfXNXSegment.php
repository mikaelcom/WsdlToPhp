<?php
/**
 * Class file for ATReportingTypeArrayOfXNXSegment
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeArrayOfXNXSegment
 * @date 03/07/2012
 */
class ATReportingTypeArrayOfXNXSegment extends ATReportingWsdlClass
{
	/**
	 * The XNXSegment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var ATReportingTypeXNXSegment
	 */
	public $XNXSegment;
	/**
	 * Constructor
	 * @param ATReportingTypeXNXSegment XNXSegment
	 * @return ATReportingTypeArrayOfXNXSegment
	 */
	public function __construct($_XNXSegment = null)
	{
		parent::__construct(array('XNXSegment'=>$_XNXSegment));
	}
	/**
	 * Set XNXSegment
	 * @param XNXSegment XNXSegment
	 * @return XNXSegment
	 */
	public function setXNXSegment($_XNXSegment)
	{
		return ($this->XNXSegment = $_XNXSegment);
	}
	/**
	 * Get XNXSegment
	 * @return ATReportingTypeXNXSegment
	 */
	public function getXNXSegment()
	{
		return $this->XNXSegment;
	}
	/**
	 * Returns the current element
	 * @see ATReportingWsdlClass::current()
	 * @return ATReportingTypeXNXSegment
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see ATReportingWsdlClass::item()
	 * @param int
	 * @return ATReportingTypeXNXSegment
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see ATReportingWsdlClass::first()
	 * @return ATReportingTypeXNXSegment
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see ATReportingWsdlClass::last()
	 * @return ATReportingTypeXNXSegment
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see ATReportingWsdlClass::offsetGet()
	 * @param int
	 * @return ATReportingTypeXNXSegment
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'XNXSegment'
	 */
	public function getAttributeName()
	{
		return 'XNXSegment';
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