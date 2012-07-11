<?php
/**
 * Class file for XiAnalystsTypeArrayOfResearchReportLine
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeArrayOfResearchReportLine
 * @date 08/07/2012
 */
class XiAnalystsTypeArrayOfResearchReportLine extends XiAnalystsWsdlClass
{
	/**
	 * The ResearchReportLine
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiAnalystsTypeResearchReportLine
	 */
	public $ResearchReportLine;
	/**
	 * Constructor
	 * @param XiAnalystsTypeResearchReportLine ResearchReportLine
	 * @return XiAnalystsTypeArrayOfResearchReportLine
	 */
	public function __construct($_ResearchReportLine = null)
	{
		parent::__construct(array('ResearchReportLine'=>$_ResearchReportLine));
	}
	/**
	 * Set ResearchReportLine
	 * @param ResearchReportLine ResearchReportLine
	 * @return ResearchReportLine
	 */
	public function setResearchReportLine($_ResearchReportLine)
	{
		return ($this->ResearchReportLine = $_ResearchReportLine);
	}
	/**
	 * Get ResearchReportLine
	 * @return XiAnalystsTypeResearchReportLine
	 */
	public function getResearchReportLine()
	{
		return $this->ResearchReportLine;
	}
	/**
	 * Returns the current element
	 * @see XiAnalystsWsdlClass::current()
	 * @return XiAnalystsTypeResearchReportLine
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiAnalystsWsdlClass::item()
	 * @param int
	 * @return XiAnalystsTypeResearchReportLine
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiAnalystsWsdlClass::first()
	 * @return XiAnalystsTypeResearchReportLine
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiAnalystsWsdlClass::last()
	 * @return XiAnalystsTypeResearchReportLine
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiAnalystsWsdlClass::offsetGet()
	 * @param int
	 * @return XiAnalystsTypeResearchReportLine
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ResearchReportLine'
	 */
	public function getAttributeName()
	{
		return 'ResearchReportLine';
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