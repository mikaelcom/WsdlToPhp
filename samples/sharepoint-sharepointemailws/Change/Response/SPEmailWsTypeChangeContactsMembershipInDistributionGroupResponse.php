<?php
/**
 * Class file for SPEmailWsTypeChangeContactsMembershipInDistributionGroupResponse
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeChangeContactsMembershipInDistributionGroupResponse
 * @date 06/07/2012
 */
class SPEmailWsTypeChangeContactsMembershipInDistributionGroupResponse extends SPEmailWsWsdlClass
{
	/**
	 * The ChangeContactsMembershipInDistributionGroupResult
	 * @var RequestStatus
	 */
	public $ChangeContactsMembershipInDistributionGroupResult;
	/**
	 * Constructor
	 * @param RequestStatus ChangeContactsMembershipInDistributionGroupResult
	 * @return SPEmailWsTypeChangeContactsMembershipInDistributionGroupResponse
	 */
	public function __construct($_ChangeContactsMembershipInDistributionGroupResult = null)
	{
		parent::__construct(array('ChangeContactsMembershipInDistributionGroupResult'=>$_ChangeContactsMembershipInDistributionGroupResult));
	}
	/**
	 * Set ChangeContactsMembershipInDistributionGroupResult
	 * @param RequestStatus ChangeContactsMembershipInDistributionGroupResult
	 * @return RequestStatus
	 */
	public function setChangeContactsMembershipInDistributionGroupResult($_ChangeContactsMembershipInDistributionGroupResult)
	{
		return ($this->ChangeContactsMembershipInDistributionGroupResult = $_ChangeContactsMembershipInDistributionGroupResult);
	}
	/**
	 * Get ChangeContactsMembershipInDistributionGroupResult
	 * @return RequestStatus
	 */
	public function getChangeContactsMembershipInDistributionGroupResult()
	{
		return $this->ChangeContactsMembershipInDistributionGroupResult;
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