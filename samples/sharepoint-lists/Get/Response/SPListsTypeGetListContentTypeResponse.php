<?php
/**
 * Class file for SPListsTypeGetListContentTypeResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetListContentTypeResponse
 * @date 07/07/2012
 */
class SPListsTypeGetListContentTypeResponse extends SPListsWsdlClass
{
	/**
	 * The GetListContentTypeResult
	 * @var SPListsTypeGetListContentTypeResult
	 */
	public $GetListContentTypeResult;
	/**
	 * Constructor
	 * @param SPListsTypeGetListContentTypeResult GetListContentTypeResult
	 * @return SPListsTypeGetListContentTypeResponse
	 */
	public function __construct($_GetListContentTypeResult = null)
	{
		parent::__construct(array('GetListContentTypeResult'=>$_GetListContentTypeResult));
	}
	/**
	 * Set GetListContentTypeResult
	 * @param GetListContentTypeResult GetListContentTypeResult
	 * @return GetListContentTypeResult
	 */
	public function setGetListContentTypeResult($_GetListContentTypeResult)
	{
		return ($this->GetListContentTypeResult = $_GetListContentTypeResult);
	}
	/**
	 * Get GetListContentTypeResult
	 * @return SPListsTypeGetListContentTypeResult
	 */
	public function getGetListContentTypeResult()
	{
		return $this->GetListContentTypeResult;
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