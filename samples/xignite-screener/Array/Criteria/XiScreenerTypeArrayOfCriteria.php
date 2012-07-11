<?php
/**
 * Class file for XiScreenerTypeArrayOfCriteria
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeArrayOfCriteria
 * @date 08/07/2012
 */
class XiScreenerTypeArrayOfCriteria extends XiScreenerWsdlClass
{
	/**
	 * The Criteria
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiScreenerTypeCriteria
	 */
	public $Criteria;
	/**
	 * Constructor
	 * @param XiScreenerTypeCriteria Criteria
	 * @return XiScreenerTypeArrayOfCriteria
	 */
	public function __construct($_Criteria = null)
	{
		parent::__construct(array('Criteria'=>$_Criteria));
	}
	/**
	 * Set Criteria
	 * @param Criteria Criteria
	 * @return Criteria
	 */
	public function setCriteria($_Criteria)
	{
		return ($this->Criteria = $_Criteria);
	}
	/**
	 * Get Criteria
	 * @return XiScreenerTypeCriteria
	 */
	public function getCriteria()
	{
		return $this->Criteria;
	}
	/**
	 * Returns the current element
	 * @see XiScreenerWsdlClass::current()
	 * @return XiScreenerTypeCriteria
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiScreenerWsdlClass::item()
	 * @param int
	 * @return XiScreenerTypeCriteria
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiScreenerWsdlClass::first()
	 * @return XiScreenerTypeCriteria
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiScreenerWsdlClass::last()
	 * @return XiScreenerTypeCriteria
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiScreenerWsdlClass::offsetGet()
	 * @param int
	 * @return XiScreenerTypeCriteria
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Criteria'
	 */
	public function getAttributeName()
	{
		return 'Criteria';
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