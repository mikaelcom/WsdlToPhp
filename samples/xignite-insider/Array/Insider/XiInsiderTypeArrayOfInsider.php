<?php
/**
 * Class file for XiInsiderTypeArrayOfInsider
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfInsider
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfInsider extends XiInsiderWsdlClass
{
	/**
	 * The Insider
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeInsider
	 */
	public $Insider;
	/**
	 * Constructor
	 * @param XiInsiderTypeInsider Insider
	 * @return XiInsiderTypeArrayOfInsider
	 */
	public function __construct($_Insider = null)
	{
		parent::__construct(array('Insider'=>$_Insider));
	}
	/**
	 * Set Insider
	 * @param Insider Insider
	 * @return Insider
	 */
	public function setInsider($_Insider)
	{
		return ($this->Insider = $_Insider);
	}
	/**
	 * Get Insider
	 * @return XiInsiderTypeInsider
	 */
	public function getInsider()
	{
		return $this->Insider;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeInsider
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeInsider
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeInsider
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeInsider
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeInsider
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Insider'
	 */
	public function getAttributeName()
	{
		return 'Insider';
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