<?php
/**
 * Class file for XiFinancialsTypeArrayOfStandardItemTypes
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeArrayOfStandardItemTypes
 * @date 08/07/2012
 */
class XiFinancialsTypeArrayOfStandardItemTypes extends XiFinancialsWsdlClass
{
	/**
	 * The StandardItemTypes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XiFinancialsTypeStandardItemTypes
	 */
	public $StandardItemTypes;
	/**
	 * Constructor
	 * @param XiFinancialsTypeStandardItemTypes StandardItemTypes
	 * @return XiFinancialsTypeArrayOfStandardItemTypes
	 */
	public function __construct($_StandardItemTypes = null)
	{
		parent::__construct(array('StandardItemTypes'=>$_StandardItemTypes));
	}
	/**
	 * Set StandardItemTypes
	 * @param StandardItemTypes StandardItemTypes
	 * @return StandardItemTypes
	 */
	public function setStandardItemTypes($_StandardItemTypes)
	{
		return ($this->StandardItemTypes = $_StandardItemTypes);
	}
	/**
	 * Get StandardItemTypes
	 * @return XiFinancialsTypeStandardItemTypes
	 */
	public function getStandardItemTypes()
	{
		return $this->StandardItemTypes;
	}
	/**
	 * Returns the current element
	 * @see XiFinancialsWsdlClass::current()
	 * @return XiFinancialsTypeStandardItemTypes
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFinancialsWsdlClass::item()
	 * @param int
	 * @return XiFinancialsTypeStandardItemTypes
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::first()
	 * @return XiFinancialsTypeStandardItemTypes
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::last()
	 * @return XiFinancialsTypeStandardItemTypes
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFinancialsTypeStandardItemTypes
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Add element to array
	 * @see XiFinancialsWsdlClass::add()
	 * @param XiFinancialsTypeStandardItemTypes
	 * @return bool true|false
	 */
	public function add($_item)
	{
		return XiFinancialsTypeStandardItemTypes::valueIsValid($_item)?parent::add($_item):false;
	}
	/**
	 * Returns the attribute name
	 * @return string 'StandardItemTypes'
	 */
	public function getAttributeName()
	{
		return 'StandardItemTypes';
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