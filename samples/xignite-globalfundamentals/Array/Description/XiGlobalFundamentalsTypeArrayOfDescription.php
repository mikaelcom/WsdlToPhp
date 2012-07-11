<?php
/**
 * Class file for XiGlobalFundamentalsTypeArrayOfDescription
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeArrayOfDescription
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeArrayOfDescription extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalFundamentalsTypeDescription
	 */
	public $Description;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeDescription Description
	 * @return XiGlobalFundamentalsTypeArrayOfDescription
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
	 * @return XiGlobalFundamentalsTypeDescription
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalFundamentalsWsdlClass::current()
	 * @return XiGlobalFundamentalsTypeDescription
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalFundamentalsWsdlClass::item()
	 * @param int
	 * @return XiGlobalFundamentalsTypeDescription
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalFundamentalsWsdlClass::first()
	 * @return XiGlobalFundamentalsTypeDescription
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalFundamentalsWsdlClass::last()
	 * @return XiGlobalFundamentalsTypeDescription
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalFundamentalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalFundamentalsTypeDescription
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