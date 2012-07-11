<?php
/**
 * Class file for XiBondMasterTypeArrayOfEarlyRedemptionSchedule
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeArrayOfEarlyRedemptionSchedule
 * @date 08/07/2012
 */
class XiBondMasterTypeArrayOfEarlyRedemptionSchedule extends XiBondMasterWsdlClass
{
	/**
	 * The EarlyRedemptionSchedule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondMasterTypeEarlyRedemptionSchedule
	 */
	public $EarlyRedemptionSchedule;
	/**
	 * Constructor
	 * @param XiBondMasterTypeEarlyRedemptionSchedule EarlyRedemptionSchedule
	 * @return XiBondMasterTypeArrayOfEarlyRedemptionSchedule
	 */
	public function __construct($_EarlyRedemptionSchedule = null)
	{
		parent::__construct(array('EarlyRedemptionSchedule'=>$_EarlyRedemptionSchedule));
	}
	/**
	 * Set EarlyRedemptionSchedule
	 * @param EarlyRedemptionSchedule EarlyRedemptionSchedule
	 * @return EarlyRedemptionSchedule
	 */
	public function setEarlyRedemptionSchedule($_EarlyRedemptionSchedule)
	{
		return ($this->EarlyRedemptionSchedule = $_EarlyRedemptionSchedule);
	}
	/**
	 * Get EarlyRedemptionSchedule
	 * @return XiBondMasterTypeEarlyRedemptionSchedule
	 */
	public function getEarlyRedemptionSchedule()
	{
		return $this->EarlyRedemptionSchedule;
	}
	/**
	 * Returns the current element
	 * @see XiBondMasterWsdlClass::current()
	 * @return XiBondMasterTypeEarlyRedemptionSchedule
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondMasterWsdlClass::item()
	 * @param int
	 * @return XiBondMasterTypeEarlyRedemptionSchedule
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::first()
	 * @return XiBondMasterTypeEarlyRedemptionSchedule
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::last()
	 * @return XiBondMasterTypeEarlyRedemptionSchedule
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondMasterTypeEarlyRedemptionSchedule
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'EarlyRedemptionSchedule'
	 */
	public function getAttributeName()
	{
		return 'EarlyRedemptionSchedule';
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