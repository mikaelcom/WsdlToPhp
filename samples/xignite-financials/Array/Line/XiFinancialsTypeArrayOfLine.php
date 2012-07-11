<?php
/**
 * Class file for XiFinancialsTypeArrayOfLine
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeArrayOfLine
 * @date 08/07/2012
 */
class XiFinancialsTypeArrayOfLine extends XiFinancialsWsdlClass
{
	/**
	 * The Line
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFinancialsTypeLine
	 */
	public $Line;
	/**
	 * Constructor
	 * @param XiFinancialsTypeLine Line
	 * @return XiFinancialsTypeArrayOfLine
	 */
	public function __construct($_Line = null)
	{
		parent::__construct(array('Line'=>$_Line));
	}
	/**
	 * Set Line
	 * @param Line Line
	 * @return Line
	 */
	public function setLine($_Line)
	{
		return ($this->Line = $_Line);
	}
	/**
	 * Get Line
	 * @return XiFinancialsTypeLine
	 */
	public function getLine()
	{
		return $this->Line;
	}
	/**
	 * Returns the current element
	 * @see XiFinancialsWsdlClass::current()
	 * @return XiFinancialsTypeLine
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFinancialsWsdlClass::item()
	 * @param int
	 * @return XiFinancialsTypeLine
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::first()
	 * @return XiFinancialsTypeLine
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::last()
	 * @return XiFinancialsTypeLine
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFinancialsTypeLine
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Line'
	 */
	public function getAttributeName()
	{
		return 'Line';
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