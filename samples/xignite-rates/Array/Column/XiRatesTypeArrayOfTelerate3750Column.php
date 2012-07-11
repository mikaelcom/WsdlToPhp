<?php
/**
 * Class file for XiRatesTypeArrayOfTelerate3750Column
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeArrayOfTelerate3750Column
 * @date 08/07/2012
 */
class XiRatesTypeArrayOfTelerate3750Column extends XiRatesWsdlClass
{
	/**
	 * The Telerate3750Column
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRatesTypeTelerate3750Column
	 */
	public $Telerate3750Column;
	/**
	 * Constructor
	 * @param XiRatesTypeTelerate3750Column Telerate3750Column
	 * @return XiRatesTypeArrayOfTelerate3750Column
	 */
	public function __construct($_Telerate3750Column = null)
	{
		parent::__construct(array('Telerate3750Column'=>$_Telerate3750Column));
	}
	/**
	 * Set Telerate3750Column
	 * @param Telerate3750Column Telerate3750Column
	 * @return Telerate3750Column
	 */
	public function setTelerate3750Column($_Telerate3750Column)
	{
		return ($this->Telerate3750Column = $_Telerate3750Column);
	}
	/**
	 * Get Telerate3750Column
	 * @return XiRatesTypeTelerate3750Column
	 */
	public function getTelerate3750Column()
	{
		return $this->Telerate3750Column;
	}
	/**
	 * Returns the current element
	 * @see XiRatesWsdlClass::current()
	 * @return XiRatesTypeTelerate3750Column
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRatesWsdlClass::item()
	 * @param int
	 * @return XiRatesTypeTelerate3750Column
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::first()
	 * @return XiRatesTypeTelerate3750Column
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::last()
	 * @return XiRatesTypeTelerate3750Column
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiRatesTypeTelerate3750Column
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Telerate3750Column'
	 */
	public function getAttributeName()
	{
		return 'Telerate3750Column';
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