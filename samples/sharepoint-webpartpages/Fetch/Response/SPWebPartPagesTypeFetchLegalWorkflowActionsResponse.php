<?php
/**
 * Class file for SPWebPartPagesTypeFetchLegalWorkflowActionsResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeFetchLegalWorkflowActionsResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeFetchLegalWorkflowActionsResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The FetchLegalWorkflowActionsResult
	 * @var string
	 */
	public $FetchLegalWorkflowActionsResult;
	/**
	 * Constructor
	 * @param string FetchLegalWorkflowActionsResult
	 * @return SPWebPartPagesTypeFetchLegalWorkflowActionsResponse
	 */
	public function __construct($_FetchLegalWorkflowActionsResult = null)
	{
		parent::__construct(array('FetchLegalWorkflowActionsResult'=>$_FetchLegalWorkflowActionsResult));
	}
	/**
	 * Set FetchLegalWorkflowActionsResult
	 * @param string FetchLegalWorkflowActionsResult
	 * @return string
	 */
	public function setFetchLegalWorkflowActionsResult($_FetchLegalWorkflowActionsResult)
	{
		return ($this->FetchLegalWorkflowActionsResult = $_FetchLegalWorkflowActionsResult);
	}
	/**
	 * Get FetchLegalWorkflowActionsResult
	 * @return string
	 */
	public function getFetchLegalWorkflowActionsResult()
	{
		return $this->FetchLegalWorkflowActionsResult;
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