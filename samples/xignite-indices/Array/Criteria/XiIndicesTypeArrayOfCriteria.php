<?php
/**
 * Class file for XiIndicesTypeArrayOfCriteria
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeArrayOfCriteria
 * @date 08/07/2012
 */
class XiIndicesTypeArrayOfCriteria extends XiIndicesWsdlClass
{
	/**
	 * The Criteria
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiIndicesTypeCriteria
	 */
	public $Criteria;
	/**
	 * Constructor
	 * @param XiIndicesTypeCriteria Criteria
	 * @return XiIndicesTypeArrayOfCriteria
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
	 * @return XiIndicesTypeCriteria
	 */
	public function getCriteria()
	{
		return $this->Criteria;
	}
	/**
	 * Returns the current element
	 * @see XiIndicesWsdlClass::current()
	 * @return XiIndicesTypeCriteria
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiIndicesWsdlClass::item()
	 * @param int
	 * @return XiIndicesTypeCriteria
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::first()
	 * @return XiIndicesTypeCriteria
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::last()
	 * @return XiIndicesTypeCriteria
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::offsetGet()
	 * @param int
	 * @return XiIndicesTypeCriteria
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