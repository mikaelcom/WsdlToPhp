<?php
/**
 * Class file for XiCompensationTypeArrayOfOptionExercised
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeArrayOfOptionExercised
 * @date 08/07/2012
 */
class XiCompensationTypeArrayOfOptionExercised extends XiCompensationWsdlClass
{
	/**
	 * The OptionExercised
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCompensationTypeOptionExercised
	 */
	public $OptionExercised;
	/**
	 * Constructor
	 * @param XiCompensationTypeOptionExercised OptionExercised
	 * @return XiCompensationTypeArrayOfOptionExercised
	 */
	public function __construct($_OptionExercised = null)
	{
		parent::__construct(array('OptionExercised'=>$_OptionExercised));
	}
	/**
	 * Set OptionExercised
	 * @param OptionExercised OptionExercised
	 * @return OptionExercised
	 */
	public function setOptionExercised($_OptionExercised)
	{
		return ($this->OptionExercised = $_OptionExercised);
	}
	/**
	 * Get OptionExercised
	 * @return XiCompensationTypeOptionExercised
	 */
	public function getOptionExercised()
	{
		return $this->OptionExercised;
	}
	/**
	 * Returns the current element
	 * @see XiCompensationWsdlClass::current()
	 * @return XiCompensationTypeOptionExercised
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCompensationWsdlClass::item()
	 * @param int
	 * @return XiCompensationTypeOptionExercised
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCompensationWsdlClass::first()
	 * @return XiCompensationTypeOptionExercised
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCompensationWsdlClass::last()
	 * @return XiCompensationTypeOptionExercised
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCompensationWsdlClass::offsetGet()
	 * @param int
	 * @return XiCompensationTypeOptionExercised
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'OptionExercised'
	 */
	public function getAttributeName()
	{
		return 'OptionExercised';
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