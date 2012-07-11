<?php
/**
 * Class file for SPWebPartPagesTypeAssociateWorkflowMarkupResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeAssociateWorkflowMarkupResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeAssociateWorkflowMarkupResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The AssociateWorkflowMarkupResult
	 * @var string
	 */
	public $AssociateWorkflowMarkupResult;
	/**
	 * Constructor
	 * @param string AssociateWorkflowMarkupResult
	 * @return SPWebPartPagesTypeAssociateWorkflowMarkupResponse
	 */
	public function __construct($_AssociateWorkflowMarkupResult = null)
	{
		parent::__construct(array('AssociateWorkflowMarkupResult'=>$_AssociateWorkflowMarkupResult));
	}
	/**
	 * Set AssociateWorkflowMarkupResult
	 * @param string AssociateWorkflowMarkupResult
	 * @return string
	 */
	public function setAssociateWorkflowMarkupResult($_AssociateWorkflowMarkupResult)
	{
		return ($this->AssociateWorkflowMarkupResult = $_AssociateWorkflowMarkupResult);
	}
	/**
	 * Get AssociateWorkflowMarkupResult
	 * @return string
	 */
	public function getAssociateWorkflowMarkupResult()
	{
		return $this->AssociateWorkflowMarkupResult;
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