<?php
/**
 * Class file for XiCurrenciesTypeArrayOfChange
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfChange
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfChange extends XiCurrenciesWsdlClass
{
	/**
	 * The Change
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeChange
	 */
	public $Change;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeChange Change
	 * @return XiCurrenciesTypeArrayOfChange
	 */
	public function __construct($_Change = null)
	{
		parent::__construct(array('Change'=>$_Change));
	}
	/**
	 * Set Change
	 * @param Change Change
	 * @return Change
	 */
	public function setChange($_Change)
	{
		return ($this->Change = $_Change);
	}
	/**
	 * Get Change
	 * @return XiCurrenciesTypeChange
	 */
	public function getChange()
	{
		return $this->Change;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeChange
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeChange
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeChange
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeChange
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeChange
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Change'
	 */
	public function getAttributeName()
	{
		return 'Change';
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