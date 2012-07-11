<?php
/**
 * Class file for XiQuotesTypeArrayOfTopExchange
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeArrayOfTopExchange
 * @date 08/07/2012
 */
class XiQuotesTypeArrayOfTopExchange extends XiQuotesWsdlClass
{
	/**
	 * The TopExchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiQuotesTypeTopExchange
	 */
	public $TopExchange;
	/**
	 * Constructor
	 * @param XiQuotesTypeTopExchange TopExchange
	 * @return XiQuotesTypeArrayOfTopExchange
	 */
	public function __construct($_TopExchange = null)
	{
		parent::__construct(array('TopExchange'=>$_TopExchange));
	}
	/**
	 * Set TopExchange
	 * @param TopExchange TopExchange
	 * @return TopExchange
	 */
	public function setTopExchange($_TopExchange)
	{
		return ($this->TopExchange = $_TopExchange);
	}
	/**
	 * Get TopExchange
	 * @return XiQuotesTypeTopExchange
	 */
	public function getTopExchange()
	{
		return $this->TopExchange;
	}
	/**
	 * Returns the current element
	 * @see XiQuotesWsdlClass::current()
	 * @return XiQuotesTypeTopExchange
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiQuotesWsdlClass::item()
	 * @param int
	 * @return XiQuotesTypeTopExchange
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::first()
	 * @return XiQuotesTypeTopExchange
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::last()
	 * @return XiQuotesTypeTopExchange
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::offsetGet()
	 * @param int
	 * @return XiQuotesTypeTopExchange
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'TopExchange'
	 */
	public function getAttributeName()
	{
		return 'TopExchange';
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