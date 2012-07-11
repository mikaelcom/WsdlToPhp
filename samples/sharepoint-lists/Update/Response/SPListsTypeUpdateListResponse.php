<?php
/**
 * Class file for SPListsTypeUpdateListResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeUpdateListResponse
 * @date 07/07/2012
 */
class SPListsTypeUpdateListResponse extends SPListsWsdlClass
{
	/**
	 * The UpdateListResult
	 * @var SPListsTypeUpdateListResult
	 */
	public $UpdateListResult;
	/**
	 * Constructor
	 * @param SPListsTypeUpdateListResult UpdateListResult
	 * @return SPListsTypeUpdateListResponse
	 */
	public function __construct($_UpdateListResult = null)
	{
		parent::__construct(array('UpdateListResult'=>$_UpdateListResult));
	}
	/**
	 * Set UpdateListResult
	 * @param UpdateListResult UpdateListResult
	 * @return UpdateListResult
	 */
	public function setUpdateListResult($_UpdateListResult)
	{
		return ($this->UpdateListResult = $_UpdateListResult);
	}
	/**
	 * Get UpdateListResult
	 * @return SPListsTypeUpdateListResult
	 */
	public function getUpdateListResult()
	{
		return $this->UpdateListResult;
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