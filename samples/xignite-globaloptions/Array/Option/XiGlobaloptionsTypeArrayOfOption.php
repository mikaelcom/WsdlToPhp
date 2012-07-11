<?php
/**
 * Class file for XiGlobaloptionsTypeArrayOfOption
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeArrayOfOption
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeArrayOfOption extends XiGlobaloptionsWsdlClass
{
	/**
	 * The Option
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobaloptionsTypeOption
	 */
	public $Option;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeOption Option
	 * @return XiGlobaloptionsTypeArrayOfOption
	 */
	public function __construct($_Option = null)
	{
		parent::__construct(array('Option'=>$_Option));
	}
	/**
	 * Set Option
	 * @param Option Option
	 * @return Option
	 */
	public function setOption($_Option)
	{
		return ($this->Option = $_Option);
	}
	/**
	 * Get Option
	 * @return XiGlobaloptionsTypeOption
	 */
	public function getOption()
	{
		return $this->Option;
	}
	/**
	 * Returns the current element
	 * @see XiGlobaloptionsWsdlClass::current()
	 * @return XiGlobaloptionsTypeOption
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobaloptionsWsdlClass::item()
	 * @param int
	 * @return XiGlobaloptionsTypeOption
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobaloptionsWsdlClass::first()
	 * @return XiGlobaloptionsTypeOption
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobaloptionsWsdlClass::last()
	 * @return XiGlobaloptionsTypeOption
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobaloptionsWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobaloptionsTypeOption
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Option'
	 */
	public function getAttributeName()
	{
		return 'Option';
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