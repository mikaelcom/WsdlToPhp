<?php
/**
 * Class file for XiFundDataTypeArrayOfBrokerCommission
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeArrayOfBrokerCommission
 * @date 08/07/2012
 */
class XiFundDataTypeArrayOfBrokerCommission extends XiFundDataWsdlClass
{
	/**
	 * The BrokerCommission
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundDataTypeBrokerCommission
	 */
	public $BrokerCommission;
	/**
	 * Constructor
	 * @param XiFundDataTypeBrokerCommission BrokerCommission
	 * @return XiFundDataTypeArrayOfBrokerCommission
	 */
	public function __construct($_BrokerCommission = null)
	{
		parent::__construct(array('BrokerCommission'=>$_BrokerCommission));
	}
	/**
	 * Set BrokerCommission
	 * @param BrokerCommission BrokerCommission
	 * @return BrokerCommission
	 */
	public function setBrokerCommission($_BrokerCommission)
	{
		return ($this->BrokerCommission = $_BrokerCommission);
	}
	/**
	 * Get BrokerCommission
	 * @return XiFundDataTypeBrokerCommission
	 */
	public function getBrokerCommission()
	{
		return $this->BrokerCommission;
	}
	/**
	 * Returns the current element
	 * @see XiFundDataWsdlClass::current()
	 * @return XiFundDataTypeBrokerCommission
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundDataWsdlClass::item()
	 * @param int
	 * @return XiFundDataTypeBrokerCommission
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::first()
	 * @return XiFundDataTypeBrokerCommission
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::last()
	 * @return XiFundDataTypeBrokerCommission
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundDataTypeBrokerCommission
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'BrokerCommission'
	 */
	public function getAttributeName()
	{
		return 'BrokerCommission';
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