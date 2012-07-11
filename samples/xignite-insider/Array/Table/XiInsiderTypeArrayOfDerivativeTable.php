<?php
/**
 * Class file for XiInsiderTypeArrayOfDerivativeTable
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfDerivativeTable
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfDerivativeTable extends XiInsiderWsdlClass
{
	/**
	 * The derivativeTable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeDerivativeTable
	 */
	public $derivativeTable;
	/**
	 * Constructor
	 * @param XiInsiderTypeDerivativeTable derivativeTable
	 * @return XiInsiderTypeArrayOfDerivativeTable
	 */
	public function __construct($_derivativeTable = null)
	{
		parent::__construct(array('derivativeTable'=>$_derivativeTable));
	}
	/**
	 * Set derivativeTable
	 * @param derivativeTable derivativeTable
	 * @return derivativeTable
	 */
	public function setDerivativeTable($_derivativeTable)
	{
		return ($this->derivativeTable = $_derivativeTable);
	}
	/**
	 * Get derivativeTable
	 * @return XiInsiderTypederivativeTable
	 */
	public function getDerivativeTable()
	{
		return $this->derivativeTable;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeDerivativeTable
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeDerivativeTable
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeDerivativeTable
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeDerivativeTable
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeDerivativeTable
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'derivativeTable'
	 */
	public function getAttributeName()
	{
		return 'derivativeTable';
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