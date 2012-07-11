<?php
/**
 * Class file for XiMetalsTypeArrayOfMetalQuote
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeArrayOfMetalQuote
 * @date 08/07/2012
 */
class XiMetalsTypeArrayOfMetalQuote extends XiMetalsWsdlClass
{
	/**
	 * The MetalQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiMetalsTypeMetalQuote
	 */
	public $MetalQuote;
	/**
	 * Constructor
	 * @param XiMetalsTypeMetalQuote MetalQuote
	 * @return XiMetalsTypeArrayOfMetalQuote
	 */
	public function __construct($_MetalQuote = null)
	{
		parent::__construct(array('MetalQuote'=>$_MetalQuote));
	}
	/**
	 * Set MetalQuote
	 * @param MetalQuote MetalQuote
	 * @return MetalQuote
	 */
	public function setMetalQuote($_MetalQuote)
	{
		return ($this->MetalQuote = $_MetalQuote);
	}
	/**
	 * Get MetalQuote
	 * @return XiMetalsTypeMetalQuote
	 */
	public function getMetalQuote()
	{
		return $this->MetalQuote;
	}
	/**
	 * Returns the current element
	 * @see XiMetalsWsdlClass::current()
	 * @return XiMetalsTypeMetalQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiMetalsWsdlClass::item()
	 * @param int
	 * @return XiMetalsTypeMetalQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::first()
	 * @return XiMetalsTypeMetalQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::last()
	 * @return XiMetalsTypeMetalQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiMetalsTypeMetalQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'MetalQuote'
	 */
	public function getAttributeName()
	{
		return 'MetalQuote';
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