<?php
/**
 * Class file for XiIndexComponentsTypeArrayOfComponent
 * @date 08/07/2012
 */
/**
 * Class XiIndexComponentsTypeArrayOfComponent
 * @date 08/07/2012
 */
class XiIndexComponentsTypeArrayOfComponent extends XiIndexComponentsWsdlClass
{
	/**
	 * The Component
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiIndexComponentsTypeComponent
	 */
	public $Component;
	/**
	 * Constructor
	 * @param XiIndexComponentsTypeComponent Component
	 * @return XiIndexComponentsTypeArrayOfComponent
	 */
	public function __construct($_Component = null)
	{
		parent::__construct(array('Component'=>$_Component));
	}
	/**
	 * Set Component
	 * @param Component Component
	 * @return Component
	 */
	public function setComponent($_Component)
	{
		return ($this->Component = $_Component);
	}
	/**
	 * Get Component
	 * @return XiIndexComponentsTypeComponent
	 */
	public function getComponent()
	{
		return $this->Component;
	}
	/**
	 * Returns the current element
	 * @see XiIndexComponentsWsdlClass::current()
	 * @return XiIndexComponentsTypeComponent
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiIndexComponentsWsdlClass::item()
	 * @param int
	 * @return XiIndexComponentsTypeComponent
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiIndexComponentsWsdlClass::first()
	 * @return XiIndexComponentsTypeComponent
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiIndexComponentsWsdlClass::last()
	 * @return XiIndexComponentsTypeComponent
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiIndexComponentsWsdlClass::offsetGet()
	 * @param int
	 * @return XiIndexComponentsTypeComponent
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Component'
	 */
	public function getAttributeName()
	{
		return 'Component';
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