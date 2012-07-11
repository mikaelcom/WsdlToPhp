<?php
/**
 * Class file for SPListsTypeGetListItemsResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetListItemsResponse
 * @date 07/07/2012
 */
class SPListsTypeGetListItemsResponse extends SPListsWsdlClass
{
	/**
	 * The GetListItemsResult
	 * @var SPListsTypeGetListItemsResult
	 */
	public $GetListItemsResult;
	/**
	 * Constructor
	 * @param SPListsTypeGetListItemsResult GetListItemsResult
	 * @return SPListsTypeGetListItemsResponse
	 */
	public function __construct($_GetListItemsResult = null)
	{
		parent::__construct(array('GetListItemsResult'=>$_GetListItemsResult));
	}
	/**
	 * Set GetListItemsResult
	 * @param GetListItemsResult GetListItemsResult
	 * @return GetListItemsResult
	 */
	public function setGetListItemsResult($_GetListItemsResult)
	{
		return ($this->GetListItemsResult = $_GetListItemsResult);
	}
	/**
	 * Get GetListItemsResult
	 * @return SPListsTypeGetListItemsResult
	 */
	public function getGetListItemsResult()
	{
		return $this->GetListItemsResult;
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