<?php
/**
 * Class file for XiFundamentalsTypeArrayOfDescription
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeArrayOfDescription
 * @date 08/07/2012
 */
class XiFundamentalsTypeArrayOfDescription extends XiFundamentalsWsdlClass
{
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundamentalsTypeDescription
	 */
	public $Description;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeDescription Description
	 * @return XiFundamentalsTypeArrayOfDescription
	 */
	public function __construct($_Description = null)
	{
		parent::__construct(array('Description'=>$_Description));
	}
	/**
	 * Set Description
	 * @param Description Description
	 * @return Description
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return XiFundamentalsTypeDescription
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Returns the current element
	 * @see XiFundamentalsWsdlClass::current()
	 * @return XiFundamentalsTypeDescription
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundamentalsWsdlClass::item()
	 * @param int
	 * @return XiFundamentalsTypeDescription
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::first()
	 * @return XiFundamentalsTypeDescription
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::last()
	 * @return XiFundamentalsTypeDescription
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundamentalsTypeDescription
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Description'
	 */
	public function getAttributeName()
	{
		return 'Description';
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