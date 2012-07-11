<?php
/**
 * Class file for SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjectsResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjectsResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjectsResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The ValidateWorkflowMarkupAndCreateSupportObjectsResult
	 * @var string
	 */
	public $ValidateWorkflowMarkupAndCreateSupportObjectsResult;
	/**
	 * Constructor
	 * @param string ValidateWorkflowMarkupAndCreateSupportObjectsResult
	 * @return SPWebPartPagesTypeValidateWorkflowMarkupAndCreateSupportObjectsResponse
	 */
	public function __construct($_ValidateWorkflowMarkupAndCreateSupportObjectsResult = null)
	{
		parent::__construct(array('ValidateWorkflowMarkupAndCreateSupportObjectsResult'=>$_ValidateWorkflowMarkupAndCreateSupportObjectsResult));
	}
	/**
	 * Set ValidateWorkflowMarkupAndCreateSupportObjectsResult
	 * @param string ValidateWorkflowMarkupAndCreateSupportObjectsResult
	 * @return string
	 */
	public function setValidateWorkflowMarkupAndCreateSupportObjectsResult($_ValidateWorkflowMarkupAndCreateSupportObjectsResult)
	{
		return ($this->ValidateWorkflowMarkupAndCreateSupportObjectsResult = $_ValidateWorkflowMarkupAndCreateSupportObjectsResult);
	}
	/**
	 * Get ValidateWorkflowMarkupAndCreateSupportObjectsResult
	 * @return string
	 */
	public function getValidateWorkflowMarkupAndCreateSupportObjectsResult()
	{
		return $this->ValidateWorkflowMarkupAndCreateSupportObjectsResult;
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