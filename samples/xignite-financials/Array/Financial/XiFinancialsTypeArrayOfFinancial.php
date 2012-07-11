<?php
/**
 * Class file for XiFinancialsTypeArrayOfFinancial
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeArrayOfFinancial
 * @date 08/07/2012
 */
class XiFinancialsTypeArrayOfFinancial extends XiFinancialsWsdlClass
{
	/**
	 * The Financial
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFinancialsTypeFinancial
	 */
	public $Financial;
	/**
	 * Constructor
	 * @param XiFinancialsTypeFinancial Financial
	 * @return XiFinancialsTypeArrayOfFinancial
	 */
	public function __construct($_Financial = null)
	{
		parent::__construct(array('Financial'=>$_Financial));
	}
	/**
	 * Set Financial
	 * @param Financial Financial
	 * @return Financial
	 */
	public function setFinancial($_Financial)
	{
		return ($this->Financial = $_Financial);
	}
	/**
	 * Get Financial
	 * @return XiFinancialsTypeFinancial
	 */
	public function getFinancial()
	{
		return $this->Financial;
	}
	/**
	 * Returns the current element
	 * @see XiFinancialsWsdlClass::current()
	 * @return XiFinancialsTypeFinancial
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFinancialsWsdlClass::item()
	 * @param int
	 * @return XiFinancialsTypeFinancial
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::first()
	 * @return XiFinancialsTypeFinancial
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::last()
	 * @return XiFinancialsTypeFinancial
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFinancialsTypeFinancial
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Financial'
	 */
	public function getAttributeName()
	{
		return 'Financial';
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