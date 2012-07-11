<?php
/**
 * Class file for XiEstimatesTypeArrayOfEstimatesResearchFieldList
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeArrayOfEstimatesResearchFieldList
 * @date 08/07/2012
 */
class XiEstimatesTypeArrayOfEstimatesResearchFieldList extends XiEstimatesWsdlClass
{
	/**
	 * The EstimatesResearchFieldList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEstimatesTypeEstimatesResearchFieldList
	 */
	public $EstimatesResearchFieldList;
	/**
	 * Constructor
	 * @param XiEstimatesTypeEstimatesResearchFieldList EstimatesResearchFieldList
	 * @return XiEstimatesTypeArrayOfEstimatesResearchFieldList
	 */
	public function __construct($_EstimatesResearchFieldList = null)
	{
		parent::__construct(array('EstimatesResearchFieldList'=>$_EstimatesResearchFieldList));
	}
	/**
	 * Set EstimatesResearchFieldList
	 * @param EstimatesResearchFieldList EstimatesResearchFieldList
	 * @return EstimatesResearchFieldList
	 */
	public function setEstimatesResearchFieldList($_EstimatesResearchFieldList)
	{
		return ($this->EstimatesResearchFieldList = $_EstimatesResearchFieldList);
	}
	/**
	 * Get EstimatesResearchFieldList
	 * @return XiEstimatesTypeEstimatesResearchFieldList
	 */
	public function getEstimatesResearchFieldList()
	{
		return $this->EstimatesResearchFieldList;
	}
	/**
	 * Returns the current element
	 * @see XiEstimatesWsdlClass::current()
	 * @return XiEstimatesTypeEstimatesResearchFieldList
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEstimatesWsdlClass::item()
	 * @param int
	 * @return XiEstimatesTypeEstimatesResearchFieldList
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEstimatesWsdlClass::first()
	 * @return XiEstimatesTypeEstimatesResearchFieldList
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEstimatesWsdlClass::last()
	 * @return XiEstimatesTypeEstimatesResearchFieldList
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEstimatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiEstimatesTypeEstimatesResearchFieldList
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'EstimatesResearchFieldList'
	 */
	public function getAttributeName()
	{
		return 'EstimatesResearchFieldList';
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