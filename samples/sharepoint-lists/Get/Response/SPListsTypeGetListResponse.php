<?php
/**
 * Class file for SPListsTypeGetListResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetListResponse
 * @date 07/07/2012
 */
class SPListsTypeGetListResponse extends SPListsWsdlClass
{
	/**
	 * The GetListResult
	 * @var SPListsTypeGetListResult
	 */
	public $GetListResult;
	/**
	 * Constructor
	 * @param SPListsTypeGetListResult GetListResult
	 * @return SPListsTypeGetListResponse
	 */
	public function __construct($_GetListResult = null)
	{
		parent::__construct(array('GetListResult'=>$_GetListResult));
	}
	/**
	 * Set GetListResult
	 * @param GetListResult GetListResult
	 * @return GetListResult
	 */
	public function setGetListResult($_GetListResult)
	{
		return ($this->GetListResult = $_GetListResult);
	}
	/**
	 * Get GetListResult
	 * @return SPListsTypeGetListResult
	 */
	public function getGetListResult()
	{
		return $this->GetListResult;
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