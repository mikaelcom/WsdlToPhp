<?php
/**
 * Class file for XiFinancialsTypeArrayOfStandardItem
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeArrayOfStandardItem
 * @date 08/07/2012
 */
class XiFinancialsTypeArrayOfStandardItem extends XiFinancialsWsdlClass
{
	/**
	 * The StandardItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFinancialsTypeStandardItem
	 */
	public $StandardItem;
	/**
	 * Constructor
	 * @param XiFinancialsTypeStandardItem StandardItem
	 * @return XiFinancialsTypeArrayOfStandardItem
	 */
	public function __construct($_StandardItem = null)
	{
		parent::__construct(array('StandardItem'=>$_StandardItem));
	}
	/**
	 * Set StandardItem
	 * @param StandardItem StandardItem
	 * @return StandardItem
	 */
	public function setStandardItem($_StandardItem)
	{
		return ($this->StandardItem = $_StandardItem);
	}
	/**
	 * Get StandardItem
	 * @return XiFinancialsTypeStandardItem
	 */
	public function getStandardItem()
	{
		return $this->StandardItem;
	}
	/**
	 * Returns the current element
	 * @see XiFinancialsWsdlClass::current()
	 * @return XiFinancialsTypeStandardItem
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFinancialsWsdlClass::item()
	 * @param int
	 * @return XiFinancialsTypeStandardItem
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::first()
	 * @return XiFinancialsTypeStandardItem
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::last()
	 * @return XiFinancialsTypeStandardItem
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFinancialsTypeStandardItem
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'StandardItem'
	 */
	public function getAttributeName()
	{
		return 'StandardItem';
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