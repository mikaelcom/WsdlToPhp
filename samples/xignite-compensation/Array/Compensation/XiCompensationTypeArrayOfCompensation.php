<?php
/**
 * Class file for XiCompensationTypeArrayOfCompensation
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeArrayOfCompensation
 * @date 08/07/2012
 */
class XiCompensationTypeArrayOfCompensation extends XiCompensationWsdlClass
{
	/**
	 * The Compensation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCompensationTypeCompensation
	 */
	public $Compensation;
	/**
	 * Constructor
	 * @param XiCompensationTypeCompensation Compensation
	 * @return XiCompensationTypeArrayOfCompensation
	 */
	public function __construct($_Compensation = null)
	{
		parent::__construct(array('Compensation'=>$_Compensation));
	}
	/**
	 * Set Compensation
	 * @param Compensation Compensation
	 * @return Compensation
	 */
	public function setCompensation($_Compensation)
	{
		return ($this->Compensation = $_Compensation);
	}
	/**
	 * Get Compensation
	 * @return XiCompensationTypeCompensation
	 */
	public function getCompensation()
	{
		return $this->Compensation;
	}
	/**
	 * Returns the current element
	 * @see XiCompensationWsdlClass::current()
	 * @return XiCompensationTypeCompensation
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCompensationWsdlClass::item()
	 * @param int
	 * @return XiCompensationTypeCompensation
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCompensationWsdlClass::first()
	 * @return XiCompensationTypeCompensation
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCompensationWsdlClass::last()
	 * @return XiCompensationTypeCompensation
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCompensationWsdlClass::offsetGet()
	 * @param int
	 * @return XiCompensationTypeCompensation
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Compensation'
	 */
	public function getAttributeName()
	{
		return 'Compensation';
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