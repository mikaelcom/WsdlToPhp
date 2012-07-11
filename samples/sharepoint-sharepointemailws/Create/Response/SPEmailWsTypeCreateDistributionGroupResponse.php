<?php
/**
 * Class file for SPEmailWsTypeCreateDistributionGroupResponse
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeCreateDistributionGroupResponse
 * @date 06/07/2012
 */
class SPEmailWsTypeCreateDistributionGroupResponse extends SPEmailWsWsdlClass
{
	/**
	 * The CreateDistributionGroupResult
	 * @var SPEmailWsTypeRequestResponse
	 */
	public $CreateDistributionGroupResult;
	/**
	 * Constructor
	 * @param SPEmailWsTypeRequestResponse CreateDistributionGroupResult
	 * @return SPEmailWsTypeCreateDistributionGroupResponse
	 */
	public function __construct($_CreateDistributionGroupResult = null)
	{
		parent::__construct(array('CreateDistributionGroupResult'=>$_CreateDistributionGroupResult));
	}
	/**
	 * Set CreateDistributionGroupResult
	 * @param RequestResponse CreateDistributionGroupResult
	 * @return RequestResponse
	 */
	public function setCreateDistributionGroupResult($_CreateDistributionGroupResult)
	{
		return ($this->CreateDistributionGroupResult = $_CreateDistributionGroupResult);
	}
	/**
	 * Get CreateDistributionGroupResult
	 * @return SPEmailWsTypeRequestResponse
	 */
	public function getCreateDistributionGroupResult()
	{
		return $this->CreateDistributionGroupResult;
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