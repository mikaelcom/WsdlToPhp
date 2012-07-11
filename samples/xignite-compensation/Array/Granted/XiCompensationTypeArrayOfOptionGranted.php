<?php
/**
 * Class file for XiCompensationTypeArrayOfOptionGranted
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeArrayOfOptionGranted
 * @date 08/07/2012
 */
class XiCompensationTypeArrayOfOptionGranted extends XiCompensationWsdlClass
{
	/**
	 * The OptionGranted
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCompensationTypeOptionGranted
	 */
	public $OptionGranted;
	/**
	 * Constructor
	 * @param XiCompensationTypeOptionGranted OptionGranted
	 * @return XiCompensationTypeArrayOfOptionGranted
	 */
	public function __construct($_OptionGranted = null)
	{
		parent::__construct(array('OptionGranted'=>$_OptionGranted));
	}
	/**
	 * Set OptionGranted
	 * @param OptionGranted OptionGranted
	 * @return OptionGranted
	 */
	public function setOptionGranted($_OptionGranted)
	{
		return ($this->OptionGranted = $_OptionGranted);
	}
	/**
	 * Get OptionGranted
	 * @return XiCompensationTypeOptionGranted
	 */
	public function getOptionGranted()
	{
		return $this->OptionGranted;
	}
	/**
	 * Returns the current element
	 * @see XiCompensationWsdlClass::current()
	 * @return XiCompensationTypeOptionGranted
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCompensationWsdlClass::item()
	 * @param int
	 * @return XiCompensationTypeOptionGranted
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCompensationWsdlClass::first()
	 * @return XiCompensationTypeOptionGranted
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCompensationWsdlClass::last()
	 * @return XiCompensationTypeOptionGranted
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCompensationWsdlClass::offsetGet()
	 * @param int
	 * @return XiCompensationTypeOptionGranted
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'OptionGranted'
	 */
	public function getAttributeName()
	{
		return 'OptionGranted';
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