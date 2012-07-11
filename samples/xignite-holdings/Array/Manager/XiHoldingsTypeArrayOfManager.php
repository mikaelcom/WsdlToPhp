<?php
/**
 * Class file for XiHoldingsTypeArrayOfManager
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeArrayOfManager
 * @date 08/07/2012
 */
class XiHoldingsTypeArrayOfManager extends XiHoldingsWsdlClass
{
	/**
	 * The Manager
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHoldingsTypeManager
	 */
	public $Manager;
	/**
	 * Constructor
	 * @param XiHoldingsTypeManager Manager
	 * @return XiHoldingsTypeArrayOfManager
	 */
	public function __construct($_Manager = null)
	{
		parent::__construct(array('Manager'=>$_Manager));
	}
	/**
	 * Set Manager
	 * @param Manager Manager
	 * @return Manager
	 */
	public function setManager($_Manager)
	{
		return ($this->Manager = $_Manager);
	}
	/**
	 * Get Manager
	 * @return XiHoldingsTypeManager
	 */
	public function getManager()
	{
		return $this->Manager;
	}
	/**
	 * Returns the current element
	 * @see XiHoldingsWsdlClass::current()
	 * @return XiHoldingsTypeManager
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHoldingsWsdlClass::item()
	 * @param int
	 * @return XiHoldingsTypeManager
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::first()
	 * @return XiHoldingsTypeManager
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::last()
	 * @return XiHoldingsTypeManager
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::offsetGet()
	 * @param int
	 * @return XiHoldingsTypeManager
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Manager'
	 */
	public function getAttributeName()
	{
		return 'Manager';
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