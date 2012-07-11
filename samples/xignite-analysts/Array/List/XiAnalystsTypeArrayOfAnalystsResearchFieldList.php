<?php
/**
 * Class file for XiAnalystsTypeArrayOfAnalystsResearchFieldList
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeArrayOfAnalystsResearchFieldList
 * @date 08/07/2012
 */
class XiAnalystsTypeArrayOfAnalystsResearchFieldList extends XiAnalystsWsdlClass
{
	/**
	 * The AnalystsResearchFieldList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiAnalystsTypeAnalystsResearchFieldList
	 */
	public $AnalystsResearchFieldList;
	/**
	 * Constructor
	 * @param XiAnalystsTypeAnalystsResearchFieldList AnalystsResearchFieldList
	 * @return XiAnalystsTypeArrayOfAnalystsResearchFieldList
	 */
	public function __construct($_AnalystsResearchFieldList = null)
	{
		parent::__construct(array('AnalystsResearchFieldList'=>$_AnalystsResearchFieldList));
	}
	/**
	 * Set AnalystsResearchFieldList
	 * @param AnalystsResearchFieldList AnalystsResearchFieldList
	 * @return AnalystsResearchFieldList
	 */
	public function setAnalystsResearchFieldList($_AnalystsResearchFieldList)
	{
		return ($this->AnalystsResearchFieldList = $_AnalystsResearchFieldList);
	}
	/**
	 * Get AnalystsResearchFieldList
	 * @return XiAnalystsTypeAnalystsResearchFieldList
	 */
	public function getAnalystsResearchFieldList()
	{
		return $this->AnalystsResearchFieldList;
	}
	/**
	 * Returns the current element
	 * @see XiAnalystsWsdlClass::current()
	 * @return XiAnalystsTypeAnalystsResearchFieldList
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiAnalystsWsdlClass::item()
	 * @param int
	 * @return XiAnalystsTypeAnalystsResearchFieldList
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiAnalystsWsdlClass::first()
	 * @return XiAnalystsTypeAnalystsResearchFieldList
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiAnalystsWsdlClass::last()
	 * @return XiAnalystsTypeAnalystsResearchFieldList
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiAnalystsWsdlClass::offsetGet()
	 * @param int
	 * @return XiAnalystsTypeAnalystsResearchFieldList
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'AnalystsResearchFieldList'
	 */
	public function getAttributeName()
	{
		return 'AnalystsResearchFieldList';
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