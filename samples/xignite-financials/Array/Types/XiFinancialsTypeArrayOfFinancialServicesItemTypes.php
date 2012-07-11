<?php
/**
 * Class file for XiFinancialsTypeArrayOfFinancialServicesItemTypes
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeArrayOfFinancialServicesItemTypes
 * @date 08/07/2012
 */
class XiFinancialsTypeArrayOfFinancialServicesItemTypes extends XiFinancialsWsdlClass
{
	/**
	 * The FinancialServicesItemTypes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XiFinancialsTypeFinancialServicesItemTypes
	 */
	public $FinancialServicesItemTypes;
	/**
	 * Constructor
	 * @param XiFinancialsTypeFinancialServicesItemTypes FinancialServicesItemTypes
	 * @return XiFinancialsTypeArrayOfFinancialServicesItemTypes
	 */
	public function __construct($_FinancialServicesItemTypes = null)
	{
		parent::__construct(array('FinancialServicesItemTypes'=>$_FinancialServicesItemTypes));
	}
	/**
	 * Set FinancialServicesItemTypes
	 * @param FinancialServicesItemTypes FinancialServicesItemTypes
	 * @return FinancialServicesItemTypes
	 */
	public function setFinancialServicesItemTypes($_FinancialServicesItemTypes)
	{
		return ($this->FinancialServicesItemTypes = $_FinancialServicesItemTypes);
	}
	/**
	 * Get FinancialServicesItemTypes
	 * @return XiFinancialsTypeFinancialServicesItemTypes
	 */
	public function getFinancialServicesItemTypes()
	{
		return $this->FinancialServicesItemTypes;
	}
	/**
	 * Returns the current element
	 * @see XiFinancialsWsdlClass::current()
	 * @return XiFinancialsTypeFinancialServicesItemTypes
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFinancialsWsdlClass::item()
	 * @param int
	 * @return XiFinancialsTypeFinancialServicesItemTypes
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::first()
	 * @return XiFinancialsTypeFinancialServicesItemTypes
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::last()
	 * @return XiFinancialsTypeFinancialServicesItemTypes
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFinancialsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFinancialsTypeFinancialServicesItemTypes
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Add element to array
	 * @see XiFinancialsWsdlClass::add()
	 * @param XiFinancialsTypeFinancialServicesItemTypes
	 * @return bool true|false
	 */
	public function add($_item)
	{
		return XiFinancialsTypeFinancialServicesItemTypes::valueIsValid($_item)?parent::add($_item):false;
	}
	/**
	 * Returns the attribute name
	 * @return string 'FinancialServicesItemTypes'
	 */
	public function getAttributeName()
	{
		return 'FinancialServicesItemTypes';
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