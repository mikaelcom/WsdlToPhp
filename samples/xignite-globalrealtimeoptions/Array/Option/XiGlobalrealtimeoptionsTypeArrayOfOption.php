<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeArrayOfOption
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeArrayOfOption
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeArrayOfOption extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The Option
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalrealtimeoptionsTypeOption
	 */
	public $Option;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeOption Option
	 * @return XiGlobalrealtimeoptionsTypeArrayOfOption
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
	 * @return XiGlobalrealtimeoptionsTypeOption
	 */
	public function getOption()
	{
		return $this->Option;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalrealtimeoptionsWsdlClass::current()
	 * @return XiGlobalrealtimeoptionsTypeOption
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalrealtimeoptionsWsdlClass::item()
	 * @param int
	 * @return XiGlobalrealtimeoptionsTypeOption
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeoptionsWsdlClass::first()
	 * @return XiGlobalrealtimeoptionsTypeOption
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeoptionsWsdlClass::last()
	 * @return XiGlobalrealtimeoptionsTypeOption
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeoptionsWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalrealtimeoptionsTypeOption
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