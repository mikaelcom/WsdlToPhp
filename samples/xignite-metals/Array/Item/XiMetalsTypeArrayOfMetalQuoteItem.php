<?php
/**
 * Class file for XiMetalsTypeArrayOfMetalQuoteItem
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeArrayOfMetalQuoteItem
 * @date 08/07/2012
 */
class XiMetalsTypeArrayOfMetalQuoteItem extends XiMetalsWsdlClass
{
	/**
	 * The MetalQuoteItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiMetalsTypeMetalQuoteItem
	 */
	public $MetalQuoteItem;
	/**
	 * Constructor
	 * @param XiMetalsTypeMetalQuoteItem MetalQuoteItem
	 * @return XiMetalsTypeArrayOfMetalQuoteItem
	 */
	public function __construct($_MetalQuoteItem = null)
	{
		parent::__construct(array('MetalQuoteItem'=>$_MetalQuoteItem));
	}
	/**
	 * Set MetalQuoteItem
	 * @param MetalQuoteItem MetalQuoteItem
	 * @return MetalQuoteItem
	 */
	public function setMetalQuoteItem($_MetalQuoteItem)
	{
		return ($this->MetalQuoteItem = $_MetalQuoteItem);
	}
	/**
	 * Get MetalQuoteItem
	 * @return XiMetalsTypeMetalQuoteItem
	 */
	public function getMetalQuoteItem()
	{
		return $this->MetalQuoteItem;
	}
	/**
	 * Returns the current element
	 * @see XiMetalsWsdlClass::current()
	 * @return XiMetalsTypeMetalQuoteItem
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiMetalsWsdlClass::item()
	 * @param int
	 * @return XiMetalsTypeMetalQuoteItem
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::first()
	 * @return XiMetalsTypeMetalQuoteItem
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::last()
	 * @return XiMetalsTypeMetalQuoteItem
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiMetalsTypeMetalQuoteItem
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'MetalQuoteItem'
	 */
	public function getAttributeName()
	{
		return 'MetalQuoteItem';
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