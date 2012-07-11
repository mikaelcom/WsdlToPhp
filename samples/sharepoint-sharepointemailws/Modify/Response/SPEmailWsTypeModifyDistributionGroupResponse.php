<?php
/**
 * Class file for SPEmailWsTypeModifyDistributionGroupResponse
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeModifyDistributionGroupResponse
 * @date 06/07/2012
 */
class SPEmailWsTypeModifyDistributionGroupResponse extends SPEmailWsWsdlClass
{
	/**
	 * The ModifyDistributionGroupResult
	 * @var SPEmailWsTypeRequestResponse
	 */
	public $ModifyDistributionGroupResult;
	/**
	 * Constructor
	 * @param SPEmailWsTypeRequestResponse ModifyDistributionGroupResult
	 * @return SPEmailWsTypeModifyDistributionGroupResponse
	 */
	public function __construct($_ModifyDistributionGroupResult = null)
	{
		parent::__construct(array('ModifyDistributionGroupResult'=>$_ModifyDistributionGroupResult));
	}
	/**
	 * Set ModifyDistributionGroupResult
	 * @param RequestResponse ModifyDistributionGroupResult
	 * @return RequestResponse
	 */
	public function setModifyDistributionGroupResult($_ModifyDistributionGroupResult)
	{
		return ($this->ModifyDistributionGroupResult = $_ModifyDistributionGroupResult);
	}
	/**
	 * Get ModifyDistributionGroupResult
	 * @return SPEmailWsTypeRequestResponse
	 */
	public function getModifyDistributionGroupResult()
	{
		return $this->ModifyDistributionGroupResult;
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