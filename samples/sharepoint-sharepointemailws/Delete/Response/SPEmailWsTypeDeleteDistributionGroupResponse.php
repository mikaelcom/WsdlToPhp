<?php
/**
 * Class file for SPEmailWsTypeDeleteDistributionGroupResponse
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeDeleteDistributionGroupResponse
 * @date 06/07/2012
 */
class SPEmailWsTypeDeleteDistributionGroupResponse extends SPEmailWsWsdlClass
{
	/**
	 * The DeleteDistributionGroupResult
	 * @var SPEmailWsTypeRequestResponse
	 */
	public $DeleteDistributionGroupResult;
	/**
	 * Constructor
	 * @param SPEmailWsTypeRequestResponse DeleteDistributionGroupResult
	 * @return SPEmailWsTypeDeleteDistributionGroupResponse
	 */
	public function __construct($_DeleteDistributionGroupResult = null)
	{
		parent::__construct(array('DeleteDistributionGroupResult'=>$_DeleteDistributionGroupResult));
	}
	/**
	 * Set DeleteDistributionGroupResult
	 * @param RequestResponse DeleteDistributionGroupResult
	 * @return RequestResponse
	 */
	public function setDeleteDistributionGroupResult($_DeleteDistributionGroupResult)
	{
		return ($this->DeleteDistributionGroupResult = $_DeleteDistributionGroupResult);
	}
	/**
	 * Get DeleteDistributionGroupResult
	 * @return SPEmailWsTypeRequestResponse
	 */
	public function getDeleteDistributionGroupResult()
	{
		return $this->DeleteDistributionGroupResult;
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