<?php
/**
 * Class file for XiCurrenciesTypeArrayOfCrossRate
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfCrossRate
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfCrossRate extends XiCurrenciesWsdlClass
{
	/**
	 * The CrossRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeCrossRate
	 */
	public $CrossRate;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCrossRate CrossRate
	 * @return XiCurrenciesTypeArrayOfCrossRate
	 */
	public function __construct($_CrossRate = null)
	{
		parent::__construct(array('CrossRate'=>$_CrossRate));
	}
	/**
	 * Set CrossRate
	 * @param CrossRate CrossRate
	 * @return CrossRate
	 */
	public function setCrossRate($_CrossRate)
	{
		return ($this->CrossRate = $_CrossRate);
	}
	/**
	 * Get CrossRate
	 * @return XiCurrenciesTypeCrossRate
	 */
	public function getCrossRate()
	{
		return $this->CrossRate;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeCrossRate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeCrossRate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeCrossRate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeCrossRate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeCrossRate
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CrossRate'
	 */
	public function getAttributeName()
	{
		return 'CrossRate';
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