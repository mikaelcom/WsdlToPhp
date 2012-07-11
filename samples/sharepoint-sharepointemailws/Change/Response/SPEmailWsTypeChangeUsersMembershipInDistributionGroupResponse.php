<?php
/**
 * Class file for SPEmailWsTypeChangeUsersMembershipInDistributionGroupResponse
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeChangeUsersMembershipInDistributionGroupResponse
 * @date 06/07/2012
 */
class SPEmailWsTypeChangeUsersMembershipInDistributionGroupResponse extends SPEmailWsWsdlClass
{
	/**
	 * The ChangeUsersMembershipInDistributionGroupResult
	 * @var RequestStatus
	 */
	public $ChangeUsersMembershipInDistributionGroupResult;
	/**
	 * Constructor
	 * @param RequestStatus ChangeUsersMembershipInDistributionGroupResult
	 * @return SPEmailWsTypeChangeUsersMembershipInDistributionGroupResponse
	 */
	public function __construct($_ChangeUsersMembershipInDistributionGroupResult = null)
	{
		parent::__construct(array('ChangeUsersMembershipInDistributionGroupResult'=>$_ChangeUsersMembershipInDistributionGroupResult));
	}
	/**
	 * Set ChangeUsersMembershipInDistributionGroupResult
	 * @param RequestStatus ChangeUsersMembershipInDistributionGroupResult
	 * @return RequestStatus
	 */
	public function setChangeUsersMembershipInDistributionGroupResult($_ChangeUsersMembershipInDistributionGroupResult)
	{
		return ($this->ChangeUsersMembershipInDistributionGroupResult = $_ChangeUsersMembershipInDistributionGroupResult);
	}
	/**
	 * Get ChangeUsersMembershipInDistributionGroupResult
	 * @return RequestStatus
	 */
	public function getChangeUsersMembershipInDistributionGroupResult()
	{
		return $this->ChangeUsersMembershipInDistributionGroupResult;
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