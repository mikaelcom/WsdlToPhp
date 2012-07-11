<?php
/**
 * Class file for XiIndexComponentsTypeArrayOfPricedComponent
 * @date 08/07/2012
 */
/**
 * Class XiIndexComponentsTypeArrayOfPricedComponent
 * @date 08/07/2012
 */
class XiIndexComponentsTypeArrayOfPricedComponent extends XiIndexComponentsWsdlClass
{
	/**
	 * The PricedComponent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiIndexComponentsTypePricedComponent
	 */
	public $PricedComponent;
	/**
	 * Constructor
	 * @param XiIndexComponentsTypePricedComponent PricedComponent
	 * @return XiIndexComponentsTypeArrayOfPricedComponent
	 */
	public function __construct($_PricedComponent = null)
	{
		parent::__construct(array('PricedComponent'=>$_PricedComponent));
	}
	/**
	 * Set PricedComponent
	 * @param PricedComponent PricedComponent
	 * @return PricedComponent
	 */
	public function setPricedComponent($_PricedComponent)
	{
		return ($this->PricedComponent = $_PricedComponent);
	}
	/**
	 * Get PricedComponent
	 * @return XiIndexComponentsTypePricedComponent
	 */
	public function getPricedComponent()
	{
		return $this->PricedComponent;
	}
	/**
	 * Returns the current element
	 * @see XiIndexComponentsWsdlClass::current()
	 * @return XiIndexComponentsTypePricedComponent
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiIndexComponentsWsdlClass::item()
	 * @param int
	 * @return XiIndexComponentsTypePricedComponent
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiIndexComponentsWsdlClass::first()
	 * @return XiIndexComponentsTypePricedComponent
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiIndexComponentsWsdlClass::last()
	 * @return XiIndexComponentsTypePricedComponent
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiIndexComponentsWsdlClass::offsetGet()
	 * @param int
	 * @return XiIndexComponentsTypePricedComponent
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'PricedComponent'
	 */
	public function getAttributeName()
	{
		return 'PricedComponent';
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