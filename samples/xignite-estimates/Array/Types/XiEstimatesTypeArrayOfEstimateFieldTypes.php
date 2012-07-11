<?php
/**
 * Class file for XiEstimatesTypeArrayOfEstimateFieldTypes
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeArrayOfEstimateFieldTypes
 * @date 08/07/2012
 */
class XiEstimatesTypeArrayOfEstimateFieldTypes extends XiEstimatesWsdlClass
{
	/**
	 * The EstimateFieldTypes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XiEstimatesTypeEstimateFieldTypes
	 */
	public $EstimateFieldTypes;
	/**
	 * Constructor
	 * @param XiEstimatesTypeEstimateFieldTypes EstimateFieldTypes
	 * @return XiEstimatesTypeArrayOfEstimateFieldTypes
	 */
	public function __construct($_EstimateFieldTypes = null)
	{
		parent::__construct(array('EstimateFieldTypes'=>$_EstimateFieldTypes));
	}
	/**
	 * Set EstimateFieldTypes
	 * @param EstimateFieldTypes EstimateFieldTypes
	 * @return EstimateFieldTypes
	 */
	public function setEstimateFieldTypes($_EstimateFieldTypes)
	{
		return ($this->EstimateFieldTypes = $_EstimateFieldTypes);
	}
	/**
	 * Get EstimateFieldTypes
	 * @return XiEstimatesTypeEstimateFieldTypes
	 */
	public function getEstimateFieldTypes()
	{
		return $this->EstimateFieldTypes;
	}
	/**
	 * Returns the current element
	 * @see XiEstimatesWsdlClass::current()
	 * @return XiEstimatesTypeEstimateFieldTypes
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEstimatesWsdlClass::item()
	 * @param int
	 * @return XiEstimatesTypeEstimateFieldTypes
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEstimatesWsdlClass::first()
	 * @return XiEstimatesTypeEstimateFieldTypes
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEstimatesWsdlClass::last()
	 * @return XiEstimatesTypeEstimateFieldTypes
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEstimatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiEstimatesTypeEstimateFieldTypes
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Add element to array
	 * @see XiEstimatesWsdlClass::add()
	 * @param XiEstimatesTypeEstimateFieldTypes
	 * @return bool true|false
	 */
	public function add($_item)
	{
		return XiEstimatesTypeEstimateFieldTypes::valueIsValid($_item)?parent::add($_item):false;
	}
	/**
	 * Returns the attribute name
	 * @return string 'EstimateFieldTypes'
	 */
	public function getAttributeName()
	{
		return 'EstimateFieldTypes';
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