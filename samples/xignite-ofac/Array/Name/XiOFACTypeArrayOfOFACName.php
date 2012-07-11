<?php
/**
 * Class file for XiOFACTypeArrayOfOFACName
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeArrayOfOFACName
 * @date 08/07/2012
 */
class XiOFACTypeArrayOfOFACName extends XiOFACWsdlClass
{
	/**
	 * The OFACName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiOFACTypeOFACName
	 */
	public $OFACName;
	/**
	 * Constructor
	 * @param XiOFACTypeOFACName OFACName
	 * @return XiOFACTypeArrayOfOFACName
	 */
	public function __construct($_OFACName = null)
	{
		parent::__construct(array('OFACName'=>$_OFACName));
	}
	/**
	 * Set OFACName
	 * @param OFACName OFACName
	 * @return OFACName
	 */
	public function setOFACName($_OFACName)
	{
		return ($this->OFACName = $_OFACName);
	}
	/**
	 * Get OFACName
	 * @return XiOFACTypeOFACName
	 */
	public function getOFACName()
	{
		return $this->OFACName;
	}
	/**
	 * Returns the current element
	 * @see XiOFACWsdlClass::current()
	 * @return XiOFACTypeOFACName
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiOFACWsdlClass::item()
	 * @param int
	 * @return XiOFACTypeOFACName
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiOFACWsdlClass::first()
	 * @return XiOFACTypeOFACName
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiOFACWsdlClass::last()
	 * @return XiOFACTypeOFACName
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiOFACWsdlClass::offsetGet()
	 * @param int
	 * @return XiOFACTypeOFACName
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'OFACName'
	 */
	public function getAttributeName()
	{
		return 'OFACName';
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