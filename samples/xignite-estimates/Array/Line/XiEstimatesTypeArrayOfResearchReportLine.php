<?php
/**
 * Class file for XiEstimatesTypeArrayOfResearchReportLine
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeArrayOfResearchReportLine
 * @date 08/07/2012
 */
class XiEstimatesTypeArrayOfResearchReportLine extends XiEstimatesWsdlClass
{
	/**
	 * The ResearchReportLine
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEstimatesTypeResearchReportLine
	 */
	public $ResearchReportLine;
	/**
	 * Constructor
	 * @param XiEstimatesTypeResearchReportLine ResearchReportLine
	 * @return XiEstimatesTypeArrayOfResearchReportLine
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
	 * @return XiEstimatesTypeResearchReportLine
	 */
	public function getResearchReportLine()
	{
		return $this->ResearchReportLine;
	}
	/**
	 * Returns the current element
	 * @see XiEstimatesWsdlClass::current()
	 * @return XiEstimatesTypeResearchReportLine
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEstimatesWsdlClass::item()
	 * @param int
	 * @return XiEstimatesTypeResearchReportLine
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEstimatesWsdlClass::first()
	 * @return XiEstimatesTypeResearchReportLine
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEstimatesWsdlClass::last()
	 * @return XiEstimatesTypeResearchReportLine
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEstimatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiEstimatesTypeResearchReportLine
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