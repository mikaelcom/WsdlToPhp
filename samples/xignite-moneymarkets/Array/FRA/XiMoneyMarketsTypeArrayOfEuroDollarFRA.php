<?php
/**
 * Class file for XiMoneyMarketsTypeArrayOfEuroDollarFRA
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeArrayOfEuroDollarFRA
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeArrayOfEuroDollarFRA extends XiMoneyMarketsWsdlClass
{
	/**
	 * The EuroDollarFRA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiMoneyMarketsTypeEuroDollarFRA
	 */
	public $EuroDollarFRA;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeEuroDollarFRA EuroDollarFRA
	 * @return XiMoneyMarketsTypeArrayOfEuroDollarFRA
	 */
	public function __construct($_EuroDollarFRA = null)
	{
		parent::__construct(array('EuroDollarFRA'=>$_EuroDollarFRA));
	}
	/**
	 * Set EuroDollarFRA
	 * @param EuroDollarFRA EuroDollarFRA
	 * @return EuroDollarFRA
	 */
	public function setEuroDollarFRA($_EuroDollarFRA)
	{
		return ($this->EuroDollarFRA = $_EuroDollarFRA);
	}
	/**
	 * Get EuroDollarFRA
	 * @return XiMoneyMarketsTypeEuroDollarFRA
	 */
	public function getEuroDollarFRA()
	{
		return $this->EuroDollarFRA;
	}
	/**
	 * Returns the current element
	 * @see XiMoneyMarketsWsdlClass::current()
	 * @return XiMoneyMarketsTypeEuroDollarFRA
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiMoneyMarketsWsdlClass::item()
	 * @param int
	 * @return XiMoneyMarketsTypeEuroDollarFRA
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiMoneyMarketsWsdlClass::first()
	 * @return XiMoneyMarketsTypeEuroDollarFRA
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiMoneyMarketsWsdlClass::last()
	 * @return XiMoneyMarketsTypeEuroDollarFRA
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiMoneyMarketsWsdlClass::offsetGet()
	 * @param int
	 * @return XiMoneyMarketsTypeEuroDollarFRA
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'EuroDollarFRA'
	 */
	public function getAttributeName()
	{
		return 'EuroDollarFRA';
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