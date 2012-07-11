<?php
/**
 * Class file for XiAnalystsTypeArrayOfAnalystsResearchField
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeArrayOfAnalystsResearchField
 * @date 08/07/2012
 */
class XiAnalystsTypeArrayOfAnalystsResearchField extends XiAnalystsWsdlClass
{
	/**
	 * The AnalystsResearchField
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiAnalystsTypeAnalystsResearchField
	 */
	public $AnalystsResearchField;
	/**
	 * Constructor
	 * @param XiAnalystsTypeAnalystsResearchField AnalystsResearchField
	 * @return XiAnalystsTypeArrayOfAnalystsResearchField
	 */
	public function __construct($_AnalystsResearchField = null)
	{
		parent::__construct(array('AnalystsResearchField'=>$_AnalystsResearchField));
	}
	/**
	 * Set AnalystsResearchField
	 * @param AnalystsResearchField AnalystsResearchField
	 * @return AnalystsResearchField
	 */
	public function setAnalystsResearchField($_AnalystsResearchField)
	{
		return ($this->AnalystsResearchField = $_AnalystsResearchField);
	}
	/**
	 * Get AnalystsResearchField
	 * @return XiAnalystsTypeAnalystsResearchField
	 */
	public function getAnalystsResearchField()
	{
		return $this->AnalystsResearchField;
	}
	/**
	 * Returns the current element
	 * @see XiAnalystsWsdlClass::current()
	 * @return XiAnalystsTypeAnalystsResearchField
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiAnalystsWsdlClass::item()
	 * @param int
	 * @return XiAnalystsTypeAnalystsResearchField
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiAnalystsWsdlClass::first()
	 * @return XiAnalystsTypeAnalystsResearchField
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiAnalystsWsdlClass::last()
	 * @return XiAnalystsTypeAnalystsResearchField
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiAnalystsWsdlClass::offsetGet()
	 * @param int
	 * @return XiAnalystsTypeAnalystsResearchField
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'AnalystsResearchField'
	 */
	public function getAttributeName()
	{
		return 'AnalystsResearchField';
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