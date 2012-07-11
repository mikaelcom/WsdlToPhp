<?php
/**
 * Class file for XiEstimatesTypeResearchReportLine
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeResearchReportLine
 * @date 08/07/2012
 */
class XiEstimatesTypeResearchReportLine extends XiEstimatesTypeAbstractZacksObject
{
	/**
	 * The ResearchReportLineType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeResearchReportLineTypes
	 */
	public $ResearchReportLineType;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The Values
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeArrayOfString
	 */
	public $Values;
	/**
	 * Constructor
	 * @param XiEstimatesTypeResearchReportLineTypes ResearchReportLineType
	 * @param string Name
	 * @param string Description
	 * @param XiEstimatesTypeArrayOfString Values
	 * @return XiEstimatesTypeResearchReportLine
	 */
	public function __construct($_ResearchReportLineType,$_Name = null,$_Description = null,$_Values = null)
	{
		XiEstimatesWsdlClass::__construct(array('ResearchReportLineType'=>$_ResearchReportLineType,'Name'=>$_Name,'Description'=>$_Description,'Values'=>new XiEstimatesTypeArrayOfString($_Values)));
	}
	/**
	 * Set ResearchReportLineType
	 * @param ResearchReportLineTypes ResearchReportLineType
	 * @return ResearchReportLineTypes
	 */
	public function setResearchReportLineType($_ResearchReportLineType)
	{
		return ($this->ResearchReportLineType = XiEstimatesTypeResearchReportLineTypes::valueIsValid($_ResearchReportLineType)?$_ResearchReportLineType:null);
	}
	/**
	 * Get ResearchReportLineType
	 * @return XiEstimatesTypeResearchReportLineTypes
	 */
	public function getResearchReportLineType()
	{
		return $this->ResearchReportLineType;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Values
	 * @param ArrayOfString Values
	 * @return ArrayOfString
	 */
	public function setValues($_Values)
	{
		return ($this->Values = $_Values);
	}
	/**
	 * Get Values
	 * @return XiEstimatesTypeArrayOfString
	 */
	public function getValues()
	{
		return $this->Values;
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