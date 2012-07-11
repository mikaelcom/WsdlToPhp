<?php
/**
 * Class file for XiFundHoldingsTypeArrayOfOLHolding
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeArrayOfOLHolding
 * @date 08/07/2012
 */
class XiFundHoldingsTypeArrayOfOLHolding extends XiFundHoldingsWsdlClass
{
	/**
	 * The OLHolding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundHoldingsTypeOLHolding
	 */
	public $OLHolding;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeOLHolding OLHolding
	 * @return XiFundHoldingsTypeArrayOfOLHolding
	 */
	public function __construct($_OLHolding = null)
	{
		parent::__construct(array('OLHolding'=>$_OLHolding));
	}
	/**
	 * Set OLHolding
	 * @param OLHolding OLHolding
	 * @return OLHolding
	 */
	public function setOLHolding($_OLHolding)
	{
		return ($this->OLHolding = $_OLHolding);
	}
	/**
	 * Get OLHolding
	 * @return XiFundHoldingsTypeOLHolding
	 */
	public function getOLHolding()
	{
		return $this->OLHolding;
	}
	/**
	 * Returns the current element
	 * @see XiFundHoldingsWsdlClass::current()
	 * @return XiFundHoldingsTypeOLHolding
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundHoldingsWsdlClass::item()
	 * @param int
	 * @return XiFundHoldingsTypeOLHolding
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundHoldingsWsdlClass::first()
	 * @return XiFundHoldingsTypeOLHolding
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundHoldingsWsdlClass::last()
	 * @return XiFundHoldingsTypeOLHolding
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundHoldingsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundHoldingsTypeOLHolding
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'OLHolding'
	 */
	public function getAttributeName()
	{
		return 'OLHolding';
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