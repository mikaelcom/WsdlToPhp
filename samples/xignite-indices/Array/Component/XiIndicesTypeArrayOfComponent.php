<?php
/**
 * Class file for XiIndicesTypeArrayOfComponent
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeArrayOfComponent
 * @date 08/07/2012
 */
class XiIndicesTypeArrayOfComponent extends XiIndicesWsdlClass
{
	/**
	 * The Component
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiIndicesTypeComponent
	 */
	public $Component;
	/**
	 * Constructor
	 * @param XiIndicesTypeComponent Component
	 * @return XiIndicesTypeArrayOfComponent
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
	 * @return XiIndicesTypeComponent
	 */
	public function getComponent()
	{
		return $this->Component;
	}
	/**
	 * Returns the current element
	 * @see XiIndicesWsdlClass::current()
	 * @return XiIndicesTypeComponent
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiIndicesWsdlClass::item()
	 * @param int
	 * @return XiIndicesTypeComponent
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::first()
	 * @return XiIndicesTypeComponent
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::last()
	 * @return XiIndicesTypeComponent
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::offsetGet()
	 * @param int
	 * @return XiIndicesTypeComponent
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