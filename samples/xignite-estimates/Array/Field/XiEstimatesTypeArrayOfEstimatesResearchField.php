<?php
/**
 * Class file for XiEstimatesTypeArrayOfEstimatesResearchField
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeArrayOfEstimatesResearchField
 * @date 08/07/2012
 */
class XiEstimatesTypeArrayOfEstimatesResearchField extends XiEstimatesWsdlClass
{
	/**
	 * The EstimatesResearchField
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEstimatesTypeEstimatesResearchField
	 */
	public $EstimatesResearchField;
	/**
	 * Constructor
	 * @param XiEstimatesTypeEstimatesResearchField EstimatesResearchField
	 * @return XiEstimatesTypeArrayOfEstimatesResearchField
	 */
	public function __construct($_EstimatesResearchField = null)
	{
		parent::__construct(array('EstimatesResearchField'=>$_EstimatesResearchField));
	}
	/**
	 * Set EstimatesResearchField
	 * @param EstimatesResearchField EstimatesResearchField
	 * @return EstimatesResearchField
	 */
	public function setEstimatesResearchField($_EstimatesResearchField)
	{
		return ($this->EstimatesResearchField = $_EstimatesResearchField);
	}
	/**
	 * Get EstimatesResearchField
	 * @return XiEstimatesTypeEstimatesResearchField
	 */
	public function getEstimatesResearchField()
	{
		return $this->EstimatesResearchField;
	}
	/**
	 * Returns the current element
	 * @see XiEstimatesWsdlClass::current()
	 * @return XiEstimatesTypeEstimatesResearchField
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEstimatesWsdlClass::item()
	 * @param int
	 * @return XiEstimatesTypeEstimatesResearchField
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEstimatesWsdlClass::first()
	 * @return XiEstimatesTypeEstimatesResearchField
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEstimatesWsdlClass::last()
	 * @return XiEstimatesTypeEstimatesResearchField
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEstimatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiEstimatesTypeEstimatesResearchField
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'EstimatesResearchField'
	 */
	public function getAttributeName()
	{
		return 'EstimatesResearchField';
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