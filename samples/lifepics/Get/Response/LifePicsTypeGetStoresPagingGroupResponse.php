<?php
/**
 * Class file for LifePicsTypeGetStoresPagingGroupResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetStoresPagingGroupResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetStoresPagingGroupResponse extends LifePicsWsdlClass
{
	/**
	 * The GetStoresPagingGroupResult
	 * @var LifePicsTypeGetStoresPagingGroupResult
	 */
	public $GetStoresPagingGroupResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetStoresPagingGroupResult GetStoresPagingGroupResult
	 * @return LifePicsTypeGetStoresPagingGroupResponse
	 */
	public function __construct($_GetStoresPagingGroupResult = null)
	{
		parent::__construct(array('GetStoresPagingGroupResult'=>$_GetStoresPagingGroupResult));
	}
	/**
	 * Set GetStoresPagingGroupResult
	 * @param GetStoresPagingGroupResult GetStoresPagingGroupResult
	 * @return GetStoresPagingGroupResult
	 */
	public function setGetStoresPagingGroupResult($_GetStoresPagingGroupResult)
	{
		return ($this->GetStoresPagingGroupResult = $_GetStoresPagingGroupResult);
	}
	/**
	 * Get GetStoresPagingGroupResult
	 * @return LifePicsTypeGetStoresPagingGroupResult
	 */
	public function getGetStoresPagingGroupResult()
	{
		return $this->GetStoresPagingGroupResult;
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