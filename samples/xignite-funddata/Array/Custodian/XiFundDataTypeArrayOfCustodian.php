<?php
/**
 * Class file for XiFundDataTypeArrayOfCustodian
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeArrayOfCustodian
 * @date 08/07/2012
 */
class XiFundDataTypeArrayOfCustodian extends XiFundDataWsdlClass
{
	/**
	 * The Custodian
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundDataTypeCustodian
	 */
	public $Custodian;
	/**
	 * Constructor
	 * @param XiFundDataTypeCustodian Custodian
	 * @return XiFundDataTypeArrayOfCustodian
	 */
	public function __construct($_Custodian = null)
	{
		parent::__construct(array('Custodian'=>$_Custodian));
	}
	/**
	 * Set Custodian
	 * @param Custodian Custodian
	 * @return Custodian
	 */
	public function setCustodian($_Custodian)
	{
		return ($this->Custodian = $_Custodian);
	}
	/**
	 * Get Custodian
	 * @return XiFundDataTypeCustodian
	 */
	public function getCustodian()
	{
		return $this->Custodian;
	}
	/**
	 * Returns the current element
	 * @see XiFundDataWsdlClass::current()
	 * @return XiFundDataTypeCustodian
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundDataWsdlClass::item()
	 * @param int
	 * @return XiFundDataTypeCustodian
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::first()
	 * @return XiFundDataTypeCustodian
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::last()
	 * @return XiFundDataTypeCustodian
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundDataTypeCustodian
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Custodian'
	 */
	public function getAttributeName()
	{
		return 'Custodian';
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