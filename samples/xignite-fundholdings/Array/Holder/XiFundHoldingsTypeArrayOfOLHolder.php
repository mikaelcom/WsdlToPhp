<?php
/**
 * Class file for XiFundHoldingsTypeArrayOfOLHolder
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeArrayOfOLHolder
 * @date 08/07/2012
 */
class XiFundHoldingsTypeArrayOfOLHolder extends XiFundHoldingsWsdlClass
{
	/**
	 * The OLHolder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundHoldingsTypeOLHolder
	 */
	public $OLHolder;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeOLHolder OLHolder
	 * @return XiFundHoldingsTypeArrayOfOLHolder
	 */
	public function __construct($_OLHolder = null)
	{
		parent::__construct(array('OLHolder'=>$_OLHolder));
	}
	/**
	 * Set OLHolder
	 * @param OLHolder OLHolder
	 * @return OLHolder
	 */
	public function setOLHolder($_OLHolder)
	{
		return ($this->OLHolder = $_OLHolder);
	}
	/**
	 * Get OLHolder
	 * @return XiFundHoldingsTypeOLHolder
	 */
	public function getOLHolder()
	{
		return $this->OLHolder;
	}
	/**
	 * Returns the current element
	 * @see XiFundHoldingsWsdlClass::current()
	 * @return XiFundHoldingsTypeOLHolder
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundHoldingsWsdlClass::item()
	 * @param int
	 * @return XiFundHoldingsTypeOLHolder
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundHoldingsWsdlClass::first()
	 * @return XiFundHoldingsTypeOLHolder
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundHoldingsWsdlClass::last()
	 * @return XiFundHoldingsTypeOLHolder
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundHoldingsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundHoldingsTypeOLHolder
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'OLHolder'
	 */
	public function getAttributeName()
	{
		return 'OLHolder';
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