<?php
/**
 * Class file for SPListsTypeGetListContentTypesResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetListContentTypesResponse
 * @date 07/07/2012
 */
class SPListsTypeGetListContentTypesResponse extends SPListsWsdlClass
{
	/**
	 * The GetListContentTypesResult
	 * @var SPListsTypeGetListContentTypesResult
	 */
	public $GetListContentTypesResult;
	/**
	 * Constructor
	 * @param SPListsTypeGetListContentTypesResult GetListContentTypesResult
	 * @return SPListsTypeGetListContentTypesResponse
	 */
	public function __construct($_GetListContentTypesResult = null)
	{
		parent::__construct(array('GetListContentTypesResult'=>$_GetListContentTypesResult));
	}
	/**
	 * Set GetListContentTypesResult
	 * @param GetListContentTypesResult GetListContentTypesResult
	 * @return GetListContentTypesResult
	 */
	public function setGetListContentTypesResult($_GetListContentTypesResult)
	{
		return ($this->GetListContentTypesResult = $_GetListContentTypesResult);
	}
	/**
	 * Get GetListContentTypesResult
	 * @return SPListsTypeGetListContentTypesResult
	 */
	public function getGetListContentTypesResult()
	{
		return $this->GetListContentTypesResult;
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