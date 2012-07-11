<?php
/**
 * Class file for SPWebPartPagesTypeRemoveWorkflowAssociationResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeRemoveWorkflowAssociationResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeRemoveWorkflowAssociationResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The RemoveWorkflowAssociationResult
	 * @var string
	 */
	public $RemoveWorkflowAssociationResult;
	/**
	 * Constructor
	 * @param string RemoveWorkflowAssociationResult
	 * @return SPWebPartPagesTypeRemoveWorkflowAssociationResponse
	 */
	public function __construct($_RemoveWorkflowAssociationResult = null)
	{
		parent::__construct(array('RemoveWorkflowAssociationResult'=>$_RemoveWorkflowAssociationResult));
	}
	/**
	 * Set RemoveWorkflowAssociationResult
	 * @param string RemoveWorkflowAssociationResult
	 * @return string
	 */
	public function setRemoveWorkflowAssociationResult($_RemoveWorkflowAssociationResult)
	{
		return ($this->RemoveWorkflowAssociationResult = $_RemoveWorkflowAssociationResult);
	}
	/**
	 * Get RemoveWorkflowAssociationResult
	 * @return string
	 */
	public function getRemoveWorkflowAssociationResult()
	{
		return $this->RemoveWorkflowAssociationResult;
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