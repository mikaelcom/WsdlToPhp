<?php
/**
 * Class file for XiAnalystsTypeArrayOfResearchReportLineTemplate
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeArrayOfResearchReportLineTemplate
 * @date 08/07/2012
 */
class XiAnalystsTypeArrayOfResearchReportLineTemplate extends XiAnalystsWsdlClass
{
	/**
	 * The ResearchReportLineTemplate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiAnalystsTypeResearchReportLineTemplate
	 */
	public $ResearchReportLineTemplate;
	/**
	 * Constructor
	 * @param XiAnalystsTypeResearchReportLineTemplate ResearchReportLineTemplate
	 * @return XiAnalystsTypeArrayOfResearchReportLineTemplate
	 */
	public function __construct($_ResearchReportLineTemplate = null)
	{
		parent::__construct(array('ResearchReportLineTemplate'=>$_ResearchReportLineTemplate));
	}
	/**
	 * Set ResearchReportLineTemplate
	 * @param ResearchReportLineTemplate ResearchReportLineTemplate
	 * @return ResearchReportLineTemplate
	 */
	public function setResearchReportLineTemplate($_ResearchReportLineTemplate)
	{
		return ($this->ResearchReportLineTemplate = $_ResearchReportLineTemplate);
	}
	/**
	 * Get ResearchReportLineTemplate
	 * @return XiAnalystsTypeResearchReportLineTemplate
	 */
	public function getResearchReportLineTemplate()
	{
		return $this->ResearchReportLineTemplate;
	}
	/**
	 * Returns the current element
	 * @see XiAnalystsWsdlClass::current()
	 * @return XiAnalystsTypeResearchReportLineTemplate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiAnalystsWsdlClass::item()
	 * @param int
	 * @return XiAnalystsTypeResearchReportLineTemplate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiAnalystsWsdlClass::first()
	 * @return XiAnalystsTypeResearchReportLineTemplate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiAnalystsWsdlClass::last()
	 * @return XiAnalystsTypeResearchReportLineTemplate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiAnalystsWsdlClass::offsetGet()
	 * @param int
	 * @return XiAnalystsTypeResearchReportLineTemplate
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ResearchReportLineTemplate'
	 */
	public function getAttributeName()
	{
		return 'ResearchReportLineTemplate';
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