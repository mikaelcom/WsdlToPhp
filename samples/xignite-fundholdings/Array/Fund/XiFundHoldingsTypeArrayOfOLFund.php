<?php
/**
 * Class file for XiFundHoldingsTypeArrayOfOLFund
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeArrayOfOLFund
 * @date 08/07/2012
 */
class XiFundHoldingsTypeArrayOfOLFund extends XiFundHoldingsWsdlClass
{
	/**
	 * The OLFund
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundHoldingsTypeOLFund
	 */
	public $OLFund;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeOLFund OLFund
	 * @return XiFundHoldingsTypeArrayOfOLFund
	 */
	public function __construct($_OLFund = null)
	{
		parent::__construct(array('OLFund'=>$_OLFund));
	}
	/**
	 * Set OLFund
	 * @param OLFund OLFund
	 * @return OLFund
	 */
	public function setOLFund($_OLFund)
	{
		return ($this->OLFund = $_OLFund);
	}
	/**
	 * Get OLFund
	 * @return XiFundHoldingsTypeOLFund
	 */
	public function getOLFund()
	{
		return $this->OLFund;
	}
	/**
	 * Returns the current element
	 * @see XiFundHoldingsWsdlClass::current()
	 * @return XiFundHoldingsTypeOLFund
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundHoldingsWsdlClass::item()
	 * @param int
	 * @return XiFundHoldingsTypeOLFund
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundHoldingsWsdlClass::first()
	 * @return XiFundHoldingsTypeOLFund
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundHoldingsWsdlClass::last()
	 * @return XiFundHoldingsTypeOLFund
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundHoldingsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundHoldingsTypeOLFund
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'OLFund'
	 */
	public function getAttributeName()
	{
		return 'OLFund';
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