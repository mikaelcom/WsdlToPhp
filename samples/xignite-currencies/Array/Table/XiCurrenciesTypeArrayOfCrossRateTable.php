<?php
/**
 * Class file for XiCurrenciesTypeArrayOfCrossRateTable
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfCrossRateTable
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfCrossRateTable extends XiCurrenciesWsdlClass
{
	/**
	 * The CrossRateTable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeCrossRateTable
	 */
	public $CrossRateTable;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRateTable CrossRateTable
	 * @return XiCurrenciesTypeArrayOfCrossRateTable
	 */
	public function __construct($_CrossRateTable = null)
	{
		parent::__construct(array('CrossRateTable'=>$_CrossRateTable));
	}
	/**
	 * Set CrossRateTable
	 * @param CrossRateTable CrossRateTable
	 * @return CrossRateTable
	 */
	public function setCrossRateTable($_CrossRateTable)
	{
		return ($this->CrossRateTable = $_CrossRateTable);
	}
	/**
	 * Get CrossRateTable
	 * @return XiCurrenciesTypeCrossRateTable
	 */
	public function getCrossRateTable()
	{
		return $this->CrossRateTable;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeCrossRateTable
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeCrossRateTable
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeCrossRateTable
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeCrossRateTable
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeCrossRateTable
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CrossRateTable'
	 */
	public function getAttributeName()
	{
		return 'CrossRateTable';
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