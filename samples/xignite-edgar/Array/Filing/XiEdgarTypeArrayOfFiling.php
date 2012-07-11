<?php
/**
 * Class file for XiEdgarTypeArrayOfFiling
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeArrayOfFiling
 * @date 08/07/2012
 */
class XiEdgarTypeArrayOfFiling extends XiEdgarWsdlClass
{
	/**
	 * The Filing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEdgarTypeFiling
	 */
	public $Filing;
	/**
	 * Constructor
	 * @param XiEdgarTypeFiling Filing
	 * @return XiEdgarTypeArrayOfFiling
	 */
	public function __construct($_Filing = null)
	{
		parent::__construct(array('Filing'=>$_Filing));
	}
	/**
	 * Set Filing
	 * @param Filing Filing
	 * @return Filing
	 */
	public function setFiling($_Filing)
	{
		return ($this->Filing = $_Filing);
	}
	/**
	 * Get Filing
	 * @return XiEdgarTypeFiling
	 */
	public function getFiling()
	{
		return $this->Filing;
	}
	/**
	 * Returns the current element
	 * @see XiEdgarWsdlClass::current()
	 * @return XiEdgarTypeFiling
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEdgarWsdlClass::item()
	 * @param int
	 * @return XiEdgarTypeFiling
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::first()
	 * @return XiEdgarTypeFiling
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::last()
	 * @return XiEdgarTypeFiling
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::offsetGet()
	 * @param int
	 * @return XiEdgarTypeFiling
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Filing'
	 */
	public function getAttributeName()
	{
		return 'Filing';
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