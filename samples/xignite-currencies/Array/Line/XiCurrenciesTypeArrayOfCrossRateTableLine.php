<?php
/**
 * Class file for XiCurrenciesTypeArrayOfCrossRateTableLine
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfCrossRateTableLine
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfCrossRateTableLine extends XiCurrenciesWsdlClass
{
	/**
	 * The CrossRateTableLine
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeCrossRateTableLine
	 */
	public $CrossRateTableLine;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRateTableLine CrossRateTableLine
	 * @return XiCurrenciesTypeArrayOfCrossRateTableLine
	 */
	public function __construct($_CrossRateTableLine = null)
	{
		parent::__construct(array('CrossRateTableLine'=>$_CrossRateTableLine));
	}
	/**
	 * Set CrossRateTableLine
	 * @param CrossRateTableLine CrossRateTableLine
	 * @return CrossRateTableLine
	 */
	public function setCrossRateTableLine($_CrossRateTableLine)
	{
		return ($this->CrossRateTableLine = $_CrossRateTableLine);
	}
	/**
	 * Get CrossRateTableLine
	 * @return XiCurrenciesTypeCrossRateTableLine
	 */
	public function getCrossRateTableLine()
	{
		return $this->CrossRateTableLine;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeCrossRateTableLine
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeCrossRateTableLine
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeCrossRateTableLine
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeCrossRateTableLine
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeCrossRateTableLine
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CrossRateTableLine'
	 */
	public function getAttributeName()
	{
		return 'CrossRateTableLine';
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