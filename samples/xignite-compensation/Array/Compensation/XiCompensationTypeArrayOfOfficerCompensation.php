<?php
/**
 * Class file for XiCompensationTypeArrayOfOfficerCompensation
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeArrayOfOfficerCompensation
 * @date 08/07/2012
 */
class XiCompensationTypeArrayOfOfficerCompensation extends XiCompensationWsdlClass
{
	/**
	 * The OfficerCompensation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCompensationTypeOfficerCompensation
	 */
	public $OfficerCompensation;
	/**
	 * Constructor
	 * @param XiCompensationTypeOfficerCompensation OfficerCompensation
	 * @return XiCompensationTypeArrayOfOfficerCompensation
	 */
	public function __construct($_OfficerCompensation = null)
	{
		parent::__construct(array('OfficerCompensation'=>$_OfficerCompensation));
	}
	/**
	 * Set OfficerCompensation
	 * @param OfficerCompensation OfficerCompensation
	 * @return OfficerCompensation
	 */
	public function setOfficerCompensation($_OfficerCompensation)
	{
		return ($this->OfficerCompensation = $_OfficerCompensation);
	}
	/**
	 * Get OfficerCompensation
	 * @return XiCompensationTypeOfficerCompensation
	 */
	public function getOfficerCompensation()
	{
		return $this->OfficerCompensation;
	}
	/**
	 * Returns the current element
	 * @see XiCompensationWsdlClass::current()
	 * @return XiCompensationTypeOfficerCompensation
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCompensationWsdlClass::item()
	 * @param int
	 * @return XiCompensationTypeOfficerCompensation
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCompensationWsdlClass::first()
	 * @return XiCompensationTypeOfficerCompensation
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCompensationWsdlClass::last()
	 * @return XiCompensationTypeOfficerCompensation
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCompensationWsdlClass::offsetGet()
	 * @param int
	 * @return XiCompensationTypeOfficerCompensation
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'OfficerCompensation'
	 */
	public function getAttributeName()
	{
		return 'OfficerCompensation';
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