<?php
/**
 * Class file for XiAnalystsTypeArrayOfAnalystFieldTypes
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeArrayOfAnalystFieldTypes
 * @date 08/07/2012
 */
class XiAnalystsTypeArrayOfAnalystFieldTypes extends XiAnalystsWsdlClass
{
	/**
	 * The AnalystFieldTypes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XiAnalystsTypeAnalystFieldTypes
	 */
	public $AnalystFieldTypes;
	/**
	 * Constructor
	 * @param XiAnalystsTypeAnalystFieldTypes AnalystFieldTypes
	 * @return XiAnalystsTypeArrayOfAnalystFieldTypes
	 */
	public function __construct($_AnalystFieldTypes = null)
	{
		parent::__construct(array('AnalystFieldTypes'=>$_AnalystFieldTypes));
	}
	/**
	 * Set AnalystFieldTypes
	 * @param AnalystFieldTypes AnalystFieldTypes
	 * @return AnalystFieldTypes
	 */
	public function setAnalystFieldTypes($_AnalystFieldTypes)
	{
		return ($this->AnalystFieldTypes = $_AnalystFieldTypes);
	}
	/**
	 * Get AnalystFieldTypes
	 * @return XiAnalystsTypeAnalystFieldTypes
	 */
	public function getAnalystFieldTypes()
	{
		return $this->AnalystFieldTypes;
	}
	/**
	 * Returns the current element
	 * @see XiAnalystsWsdlClass::current()
	 * @return XiAnalystsTypeAnalystFieldTypes
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiAnalystsWsdlClass::item()
	 * @param int
	 * @return XiAnalystsTypeAnalystFieldTypes
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiAnalystsWsdlClass::first()
	 * @return XiAnalystsTypeAnalystFieldTypes
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiAnalystsWsdlClass::last()
	 * @return XiAnalystsTypeAnalystFieldTypes
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiAnalystsWsdlClass::offsetGet()
	 * @param int
	 * @return XiAnalystsTypeAnalystFieldTypes
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Add element to array
	 * @see XiAnalystsWsdlClass::add()
	 * @param XiAnalystsTypeAnalystFieldTypes
	 * @return bool true|false
	 */
	public function add($_item)
	{
		return XiAnalystsTypeAnalystFieldTypes::valueIsValid($_item)?parent::add($_item):false;
	}
	/**
	 * Returns the attribute name
	 * @return string 'AnalystFieldTypes'
	 */
	public function getAttributeName()
	{
		return 'AnalystFieldTypes';
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