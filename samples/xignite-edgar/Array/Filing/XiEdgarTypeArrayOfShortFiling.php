<?php
/**
 * Class file for XiEdgarTypeArrayOfShortFiling
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeArrayOfShortFiling
 * @date 08/07/2012
 */
class XiEdgarTypeArrayOfShortFiling extends XiEdgarWsdlClass
{
	/**
	 * The ShortFiling
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEdgarTypeShortFiling
	 */
	public $ShortFiling;
	/**
	 * Constructor
	 * @param XiEdgarTypeShortFiling ShortFiling
	 * @return XiEdgarTypeArrayOfShortFiling
	 */
	public function __construct($_ShortFiling = null)
	{
		parent::__construct(array('ShortFiling'=>$_ShortFiling));
	}
	/**
	 * Set ShortFiling
	 * @param ShortFiling ShortFiling
	 * @return ShortFiling
	 */
	public function setShortFiling($_ShortFiling)
	{
		return ($this->ShortFiling = $_ShortFiling);
	}
	/**
	 * Get ShortFiling
	 * @return XiEdgarTypeShortFiling
	 */
	public function getShortFiling()
	{
		return $this->ShortFiling;
	}
	/**
	 * Returns the current element
	 * @see XiEdgarWsdlClass::current()
	 * @return XiEdgarTypeShortFiling
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEdgarWsdlClass::item()
	 * @param int
	 * @return XiEdgarTypeShortFiling
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::first()
	 * @return XiEdgarTypeShortFiling
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::last()
	 * @return XiEdgarTypeShortFiling
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::offsetGet()
	 * @param int
	 * @return XiEdgarTypeShortFiling
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ShortFiling'
	 */
	public function getAttributeName()
	{
		return 'ShortFiling';
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