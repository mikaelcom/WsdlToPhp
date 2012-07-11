<?php
/**
 * Class file for XiCompensationTypeArrayOfOfficer
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeArrayOfOfficer
 * @date 08/07/2012
 */
class XiCompensationTypeArrayOfOfficer extends XiCompensationWsdlClass
{
	/**
	 * The Officer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCompensationTypeOfficer
	 */
	public $Officer;
	/**
	 * Constructor
	 * @param XiCompensationTypeOfficer Officer
	 * @return XiCompensationTypeArrayOfOfficer
	 */
	public function __construct($_Officer = null)
	{
		parent::__construct(array('Officer'=>$_Officer));
	}
	/**
	 * Set Officer
	 * @param Officer Officer
	 * @return Officer
	 */
	public function setOfficer($_Officer)
	{
		return ($this->Officer = $_Officer);
	}
	/**
	 * Get Officer
	 * @return XiCompensationTypeOfficer
	 */
	public function getOfficer()
	{
		return $this->Officer;
	}
	/**
	 * Returns the current element
	 * @see XiCompensationWsdlClass::current()
	 * @return XiCompensationTypeOfficer
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCompensationWsdlClass::item()
	 * @param int
	 * @return XiCompensationTypeOfficer
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCompensationWsdlClass::first()
	 * @return XiCompensationTypeOfficer
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCompensationWsdlClass::last()
	 * @return XiCompensationTypeOfficer
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCompensationWsdlClass::offsetGet()
	 * @param int
	 * @return XiCompensationTypeOfficer
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Officer'
	 */
	public function getAttributeName()
	{
		return 'Officer';
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