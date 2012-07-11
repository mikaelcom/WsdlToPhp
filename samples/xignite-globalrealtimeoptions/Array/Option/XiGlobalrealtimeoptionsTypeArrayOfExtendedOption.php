<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeArrayOfExtendedOption
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeArrayOfExtendedOption
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeArrayOfExtendedOption extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The ExtendedOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalrealtimeoptionsTypeExtendedOption
	 */
	public $ExtendedOption;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeExtendedOption ExtendedOption
	 * @return XiGlobalrealtimeoptionsTypeArrayOfExtendedOption
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
	 * @return XiGlobalrealtimeoptionsTypeExtendedOption
	 */
	public function getExtendedOption()
	{
		return $this->ExtendedOption;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalrealtimeoptionsWsdlClass::current()
	 * @return XiGlobalrealtimeoptionsTypeExtendedOption
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalrealtimeoptionsWsdlClass::item()
	 * @param int
	 * @return XiGlobalrealtimeoptionsTypeExtendedOption
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeoptionsWsdlClass::first()
	 * @return XiGlobalrealtimeoptionsTypeExtendedOption
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeoptionsWsdlClass::last()
	 * @return XiGlobalrealtimeoptionsTypeExtendedOption
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeoptionsWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalrealtimeoptionsTypeExtendedOption
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