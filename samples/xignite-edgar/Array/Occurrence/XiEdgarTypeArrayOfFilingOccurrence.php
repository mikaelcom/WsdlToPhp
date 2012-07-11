<?php
/**
 * Class file for XiEdgarTypeArrayOfFilingOccurrence
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeArrayOfFilingOccurrence
 * @date 08/07/2012
 */
class XiEdgarTypeArrayOfFilingOccurrence extends XiEdgarWsdlClass
{
	/**
	 * The FilingOccurrence
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEdgarTypeFilingOccurrence
	 */
	public $FilingOccurrence;
	/**
	 * Constructor
	 * @param XiEdgarTypeFilingOccurrence FilingOccurrence
	 * @return XiEdgarTypeArrayOfFilingOccurrence
	 */
	public function __construct($_FilingOccurrence = null)
	{
		parent::__construct(array('FilingOccurrence'=>$_FilingOccurrence));
	}
	/**
	 * Set FilingOccurrence
	 * @param FilingOccurrence FilingOccurrence
	 * @return FilingOccurrence
	 */
	public function setFilingOccurrence($_FilingOccurrence)
	{
		return ($this->FilingOccurrence = $_FilingOccurrence);
	}
	/**
	 * Get FilingOccurrence
	 * @return XiEdgarTypeFilingOccurrence
	 */
	public function getFilingOccurrence()
	{
		return $this->FilingOccurrence;
	}
	/**
	 * Returns the current element
	 * @see XiEdgarWsdlClass::current()
	 * @return XiEdgarTypeFilingOccurrence
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEdgarWsdlClass::item()
	 * @param int
	 * @return XiEdgarTypeFilingOccurrence
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::first()
	 * @return XiEdgarTypeFilingOccurrence
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::last()
	 * @return XiEdgarTypeFilingOccurrence
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::offsetGet()
	 * @param int
	 * @return XiEdgarTypeFilingOccurrence
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FilingOccurrence'
	 */
	public function getAttributeName()
	{
		return 'FilingOccurrence';
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