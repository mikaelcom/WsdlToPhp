<?php
/**
 * Class file for SPListsTypeGetListItemChangesResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetListItemChangesResponse
 * @date 07/07/2012
 */
class SPListsTypeGetListItemChangesResponse extends SPListsWsdlClass
{
	/**
	 * The GetListItemChangesResult
	 * @var SPListsTypeGetListItemChangesResult
	 */
	public $GetListItemChangesResult;
	/**
	 * Constructor
	 * @param SPListsTypeGetListItemChangesResult GetListItemChangesResult
	 * @return SPListsTypeGetListItemChangesResponse
	 */
	public function __construct($_GetListItemChangesResult = null)
	{
		parent::__construct(array('GetListItemChangesResult'=>$_GetListItemChangesResult));
	}
	/**
	 * Set GetListItemChangesResult
	 * @param GetListItemChangesResult GetListItemChangesResult
	 * @return GetListItemChangesResult
	 */
	public function setGetListItemChangesResult($_GetListItemChangesResult)
	{
		return ($this->GetListItemChangesResult = $_GetListItemChangesResult);
	}
	/**
	 * Get GetListItemChangesResult
	 * @return SPListsTypeGetListItemChangesResult
	 */
	public function getGetListItemChangesResult()
	{
		return $this->GetListItemChangesResult;
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