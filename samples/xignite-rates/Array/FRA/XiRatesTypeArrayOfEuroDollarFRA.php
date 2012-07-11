<?php
/**
 * Class file for XiRatesTypeArrayOfEuroDollarFRA
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeArrayOfEuroDollarFRA
 * @date 08/07/2012
 */
class XiRatesTypeArrayOfEuroDollarFRA extends XiRatesWsdlClass
{
	/**
	 * The EuroDollarFRA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRatesTypeEuroDollarFRA
	 */
	public $EuroDollarFRA;
	/**
	 * Constructor
	 * @param XiRatesTypeEuroDollarFRA EuroDollarFRA
	 * @return XiRatesTypeArrayOfEuroDollarFRA
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
	 * @return XiRatesTypeEuroDollarFRA
	 */
	public function getEuroDollarFRA()
	{
		return $this->EuroDollarFRA;
	}
	/**
	 * Returns the current element
	 * @see XiRatesWsdlClass::current()
	 * @return XiRatesTypeEuroDollarFRA
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRatesWsdlClass::item()
	 * @param int
	 * @return XiRatesTypeEuroDollarFRA
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::first()
	 * @return XiRatesTypeEuroDollarFRA
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::last()
	 * @return XiRatesTypeEuroDollarFRA
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiRatesTypeEuroDollarFRA
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