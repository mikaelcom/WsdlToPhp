<?php
/**
 * Class file for XiCurrenciesTypeArrayOfForward
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfForward
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfForward extends XiCurrenciesWsdlClass
{
	/**
	 * The Forward
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeForward
	 */
	public $Forward;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeForward Forward
	 * @return XiCurrenciesTypeArrayOfForward
	 */
	public function __construct($_Forward = null)
	{
		parent::__construct(array('Forward'=>$_Forward));
	}
	/**
	 * Set Forward
	 * @param Forward Forward
	 * @return Forward
	 */
	public function setForward($_Forward)
	{
		return ($this->Forward = $_Forward);
	}
	/**
	 * Get Forward
	 * @return XiCurrenciesTypeForward
	 */
	public function getForward()
	{
		return $this->Forward;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeForward
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeForward
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeForward
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeForward
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeForward
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Forward'
	 */
	public function getAttributeName()
	{
		return 'Forward';
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