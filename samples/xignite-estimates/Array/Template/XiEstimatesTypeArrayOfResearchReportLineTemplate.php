<?php
/**
 * Class file for XiEstimatesTypeArrayOfResearchReportLineTemplate
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeArrayOfResearchReportLineTemplate
 * @date 08/07/2012
 */
class XiEstimatesTypeArrayOfResearchReportLineTemplate extends XiEstimatesWsdlClass
{
	/**
	 * The ResearchReportLineTemplate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEstimatesTypeResearchReportLineTemplate
	 */
	public $ResearchReportLineTemplate;
	/**
	 * Constructor
	 * @param XiEstimatesTypeResearchReportLineTemplate ResearchReportLineTemplate
	 * @return XiEstimatesTypeArrayOfResearchReportLineTemplate
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
	 * @return XiEstimatesTypeResearchReportLineTemplate
	 */
	public function getResearchReportLineTemplate()
	{
		return $this->ResearchReportLineTemplate;
	}
	/**
	 * Returns the current element
	 * @see XiEstimatesWsdlClass::current()
	 * @return XiEstimatesTypeResearchReportLineTemplate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEstimatesWsdlClass::item()
	 * @param int
	 * @return XiEstimatesTypeResearchReportLineTemplate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEstimatesWsdlClass::first()
	 * @return XiEstimatesTypeResearchReportLineTemplate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEstimatesWsdlClass::last()
	 * @return XiEstimatesTypeResearchReportLineTemplate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEstimatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiEstimatesTypeResearchReportLineTemplate
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