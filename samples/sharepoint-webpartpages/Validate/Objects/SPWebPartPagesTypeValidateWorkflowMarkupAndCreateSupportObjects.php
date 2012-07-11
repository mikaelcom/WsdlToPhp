<?php
/**
 * Class file for SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects
 * @date 06/07/2012
 */
class SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects extends SPWebPartPagesWsdlClass
{
	/**
	 * The workflowMarkupText
	 * @var string
	 */
	public $workflowMarkupText;
	/**
	 * The rulesText
	 * @var string
	 */
	public $rulesText;
	/**
	 * The configBlob
	 * @var string
	 */
	public $configBlob;
	/**
	 * The flag
	 * @var string
	 */
	public $flag;
	/**
	 * Constructor
	 * @param string workflowMarkupText
	 * @param string rulesText
	 * @param string configBlob
	 * @param string flag
	 * @return SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjects
	 */
	public function __construct($_workflowMarkupText = null,$_rulesText = null,$_configBlob = null,$_flag = null)
	{
		parent::__construct(array('workflowMarkupText'=>$_workflowMarkupText,'rulesText'=>$_rulesText,'configBlob'=>$_configBlob,'flag'=>$_flag));
	}
	/**
	 * Set workflowMarkupText
	 * @param string workflowMarkupText
	 * @return string
	 */
	public function setWorkflowMarkupText($_workflowMarkupText)
	{
		return ($this->workflowMarkupText = $_workflowMarkupText);
	}
	/**
	 * Get workflowMarkupText
	 * @return string
	 */
	public function getWorkflowMarkupText()
	{
		return $this->workflowMarkupText;
	}
	/**
	 * Set rulesText
	 * @param string rulesText
	 * @return string
	 */
	public function setRulesText($_rulesText)
	{
		return ($this->rulesText = $_rulesText);
	}
	/**
	 * Get rulesText
	 * @return string
	 */
	public function getRulesText()
	{
		return $this->rulesText;
	}
	/**
	 * Set configBlob
	 * @param string configBlob
	 * @return string
	 */
	public function setConfigBlob($_configBlob)
	{
		return ($this->configBlob = $_configBlob);
	}
	/**
	 * Get configBlob
	 * @return string
	 */
	public function getConfigBlob()
	{
		return $this->configBlob;
	}
	/**
	 * Set flag
	 * @param string flag
	 * @return string
	 */
	public function setFlag($_flag)
	{
		return ($this->flag = $_flag);
	}
	/**
	 * Get flag
	 * @return string
	 */
	public function getFlag()
	{
		return $this->flag;
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