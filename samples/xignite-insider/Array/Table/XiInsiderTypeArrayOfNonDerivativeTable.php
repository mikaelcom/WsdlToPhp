<?php
/**
 * Class file for XiInsiderTypeArrayOfNonDerivativeTable
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfNonDerivativeTable
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfNonDerivativeTable extends XiInsiderWsdlClass
{
	/**
	 * The nonDerivativeTable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeNonDerivativeTable
	 */
	public $nonDerivativeTable;
	/**
	 * Constructor
	 * @param XiInsiderTypeNonDerivativeTable nonDerivativeTable
	 * @return XiInsiderTypeArrayOfNonDerivativeTable
	 */
	public function __construct($_nonDerivativeTable = null)
	{
		parent::__construct(array('nonDerivativeTable'=>$_nonDerivativeTable));
	}
	/**
	 * Set nonDerivativeTable
	 * @param nonDerivativeTable nonDerivativeTable
	 * @return nonDerivativeTable
	 */
	public function setNonDerivativeTable($_nonDerivativeTable)
	{
		return ($this->nonDerivativeTable = $_nonDerivativeTable);
	}
	/**
	 * Get nonDerivativeTable
	 * @return XiInsiderTypenonDerivativeTable
	 */
	public function getNonDerivativeTable()
	{
		return $this->nonDerivativeTable;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeNonDerivativeTable
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeNonDerivativeTable
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeNonDerivativeTable
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeNonDerivativeTable
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeNonDerivativeTable
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'nonDerivativeTable'
	 */
	public function getAttributeName()
	{
		return 'nonDerivativeTable';
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