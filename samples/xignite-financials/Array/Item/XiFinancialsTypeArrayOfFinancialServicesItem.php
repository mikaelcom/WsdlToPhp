<?php
/**
 * Class file for XiFinancialsTypeArrayOfFinancialServicesItem
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeArrayOfFinancialServicesItem
 * @date 08/07/2012
 */
class XiFinancialsTypeArrayOfFinancialServicesItem extends XiFinancialsWsdlClass
{
	/**
	 * The FinancialServicesItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFinancialsTypeFinancialServicesItem
	 */
	public $FinancialServicesItem;
	/**
	 * Constructor
	 * @param XiFinancialsTypeFinancialServicesItem FinancialServicesItem
	 * @return XiFinancialsTypeArrayOfFinancialServicesItem
	 */
	public function __construct($_FinancialServicesItem = null)
	{
		parent::__construct(array('FinancialServicesItem'=>$_FinancialServicesItem));
	}
	/**
	 * Set FinancialServicesItem
	 * @param FinancialServicesItem FinancialServicesItem
	 * @return FinancialServicesItem
	 */
	public function setFinancialServicesItem($_FinancialServicesItem)
	{
		return ($this->FinancialServicesItem = $_FinancialServicesItem);
	}
	/**
	 * Get FinancialServicesItem
	 * @return XiFinancialsTypeFinancialServicesItem
	 */
	public function getFinancialServicesItem()
	{
		return $this->FinancialServicesItem;
	}
	/**
	 * Returns the current element
	 * @see XiFinancialsWsdlClass::current()
	 * @return XiFinancialsTypeFinancialServicesItem
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFinancialsWsdlClass::item()
	 * @param int
	 * @return XiFinancialsTypeFinancialServicesItem
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::first()
	 * @return XiFinancialsTypeFinancialServicesItem
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::last()
	 * @return XiFinancialsTypeFinancialServicesItem
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFinancialsTypeFinancialServicesItem
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FinancialServicesItem'
	 */
	public function getAttributeName()
	{
		return 'FinancialServicesItem';
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