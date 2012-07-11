<?php
/**
 * Class file for SPEmailWsTypeRenameDistributionGroupResponse
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeRenameDistributionGroupResponse
 * @date 06/07/2012
 */
class SPEmailWsTypeRenameDistributionGroupResponse extends SPEmailWsWsdlClass
{
	/**
	 * The RenameDistributionGroupResult
	 * @var SPEmailWsTypeRequestResponse
	 */
	public $RenameDistributionGroupResult;
	/**
	 * Constructor
	 * @param SPEmailWsTypeRequestResponse RenameDistributionGroupResult
	 * @return SPEmailWsTypeRenameDistributionGroupResponse
	 */
	public function __construct($_RenameDistributionGroupResult = null)
	{
		parent::__construct(array('RenameDistributionGroupResult'=>$_RenameDistributionGroupResult));
	}
	/**
	 * Set RenameDistributionGroupResult
	 * @param RequestResponse RenameDistributionGroupResult
	 * @return RequestResponse
	 */
	public function setRenameDistributionGroupResult($_RenameDistributionGroupResult)
	{
		return ($this->RenameDistributionGroupResult = $_RenameDistributionGroupResult);
	}
	/**
	 * Get RenameDistributionGroupResult
	 * @return SPEmailWsTypeRequestResponse
	 */
	public function getRenameDistributionGroupResult()
	{
		return $this->RenameDistributionGroupResult;
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