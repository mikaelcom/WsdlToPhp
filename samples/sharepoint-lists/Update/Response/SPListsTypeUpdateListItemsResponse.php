<?php
/**
 * Class file for SPListsTypeUpdateListItemsResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeUpdateListItemsResponse
 * @date 07/07/2012
 */
class SPListsTypeUpdateListItemsResponse extends SPListsWsdlClass
{
	/**
	 * The UpdateListItemsResult
	 * @var SPListsTypeUpdateListItemsResult
	 */
	public $UpdateListItemsResult;
	/**
	 * Constructor
	 * @param SPListsTypeUpdateListItemsResult UpdateListItemsResult
	 * @return SPListsTypeUpdateListItemsResponse
	 */
	public function __construct($_UpdateListItemsResult = null)
	{
		parent::__construct(array('UpdateListItemsResult'=>$_UpdateListItemsResult));
	}
	/**
	 * Set UpdateListItemsResult
	 * @param UpdateListItemsResult UpdateListItemsResult
	 * @return UpdateListItemsResult
	 */
	public function setUpdateListItemsResult($_UpdateListItemsResult)
	{
		return ($this->UpdateListItemsResult = $_UpdateListItemsResult);
	}
	/**
	 * Get UpdateListItemsResult
	 * @return SPListsTypeUpdateListItemsResult
	 */
	public function getUpdateListItemsResult()
	{
		return $this->UpdateListItemsResult;
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