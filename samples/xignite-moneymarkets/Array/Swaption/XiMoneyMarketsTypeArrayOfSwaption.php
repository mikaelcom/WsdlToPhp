<?php
/**
 * Class file for XiMoneyMarketsTypeArrayOfSwaption
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeArrayOfSwaption
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeArrayOfSwaption extends XiMoneyMarketsWsdlClass
{
	/**
	 * The Swaption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiMoneyMarketsTypeSwaption
	 */
	public $Swaption;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeSwaption Swaption
	 * @return XiMoneyMarketsTypeArrayOfSwaption
	 */
	public function __construct($_Swaption = null)
	{
		parent::__construct(array('Swaption'=>$_Swaption));
	}
	/**
	 * Set Swaption
	 * @param Swaption Swaption
	 * @return Swaption
	 */
	public function setSwaption($_Swaption)
	{
		return ($this->Swaption = $_Swaption);
	}
	/**
	 * Get Swaption
	 * @return XiMoneyMarketsTypeSwaption
	 */
	public function getSwaption()
	{
		return $this->Swaption;
	}
	/**
	 * Returns the current element
	 * @see XiMoneyMarketsWsdlClass::current()
	 * @return XiMoneyMarketsTypeSwaption
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiMoneyMarketsWsdlClass::item()
	 * @param int
	 * @return XiMoneyMarketsTypeSwaption
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiMoneyMarketsWsdlClass::first()
	 * @return XiMoneyMarketsTypeSwaption
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiMoneyMarketsWsdlClass::last()
	 * @return XiMoneyMarketsTypeSwaption
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiMoneyMarketsWsdlClass::offsetGet()
	 * @param int
	 * @return XiMoneyMarketsTypeSwaption
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Swaption'
	 */
	public function getAttributeName()
	{
		return 'Swaption';
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