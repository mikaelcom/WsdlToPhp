<?php
/**
 * Class file for XiOFACTypeArrayOfString
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeArrayOfString
 * @date 08/07/2012
 */
class XiOFACTypeArrayOfString extends XiOFACWsdlClass
{
	/**
	 * The string
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var string
	 */
	public $string;
	/**
	 * Constructor
	 * @param string string
	 * @return XiOFACTypeArrayOfString
	 */
	public function __construct($_string = null)
	{
		parent::__construct(array('string'=>$_string));
	}
	/**
	 * Set string
	 * @param string string
	 * @return string
	 */
	public function setString($_string)
	{
		return ($this->string = $_string);
	}
	/**
	 * Get string
	 * @return string
	 */
	public function getString()
	{
		return $this->string;
	}
	/**
	 * Returns the current element
	 * @see XiOFACWsdlClass::current()
	 * @return string
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiOFACWsdlClass::item()
	 * @param int
	 * @return string
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiOFACWsdlClass::first()
	 * @return string
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiOFACWsdlClass::last()
	 * @return string
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiOFACWsdlClass::offsetGet()
	 * @param int
	 * @return string
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'string'
	 */
	public function getAttributeName()
	{
		return 'string';
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