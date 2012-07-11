<?php
/**
 * Class file for XiGlobaloptionsTypeArrayOfExtendedOption
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeArrayOfExtendedOption
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeArrayOfExtendedOption extends XiGlobaloptionsWsdlClass
{
	/**
	 * The ExtendedOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobaloptionsTypeExtendedOption
	 */
	public $ExtendedOption;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeExtendedOption ExtendedOption
	 * @return XiGlobaloptionsTypeArrayOfExtendedOption
	 */
	public function __construct($_ExtendedOption = null)
	{
		parent::__construct(array('ExtendedOption'=>$_ExtendedOption));
	}
	/**
	 * Set ExtendedOption
	 * @param ExtendedOption ExtendedOption
	 * @return ExtendedOption
	 */
	public function setExtendedOption($_ExtendedOption)
	{
		return ($this->ExtendedOption = $_ExtendedOption);
	}
	/**
	 * Get ExtendedOption
	 * @return XiGlobaloptionsTypeExtendedOption
	 */
	public function getExtendedOption()
	{
		return $this->ExtendedOption;
	}
	/**
	 * Returns the current element
	 * @see XiGlobaloptionsWsdlClass::current()
	 * @return XiGlobaloptionsTypeExtendedOption
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobaloptionsWsdlClass::item()
	 * @param int
	 * @return XiGlobaloptionsTypeExtendedOption
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobaloptionsWsdlClass::first()
	 * @return XiGlobaloptionsTypeExtendedOption
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobaloptionsWsdlClass::last()
	 * @return XiGlobaloptionsTypeExtendedOption
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobaloptionsWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobaloptionsTypeExtendedOption
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ExtendedOption'
	 */
	public function getAttributeName()
	{
		return 'ExtendedOption';
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