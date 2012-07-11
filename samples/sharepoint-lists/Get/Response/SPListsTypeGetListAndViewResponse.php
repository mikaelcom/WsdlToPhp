<?php
/**
 * Class file for SPListsTypeGetListAndViewResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetListAndViewResponse
 * @date 07/07/2012
 */
class SPListsTypeGetListAndViewResponse extends SPListsWsdlClass
{
	/**
	 * The GetListAndViewResult
	 * @var SPListsTypeGetListAndViewResult
	 */
	public $GetListAndViewResult;
	/**
	 * Constructor
	 * @param SPListsTypeGetListAndViewResult GetListAndViewResult
	 * @return SPListsTypeGetListAndViewResponse
	 */
	public function __construct($_GetListAndViewResult = null)
	{
		parent::__construct(array('GetListAndViewResult'=>$_GetListAndViewResult));
	}
	/**
	 * Set GetListAndViewResult
	 * @param GetListAndViewResult GetListAndViewResult
	 * @return GetListAndViewResult
	 */
	public function setGetListAndViewResult($_GetListAndViewResult)
	{
		return ($this->GetListAndViewResult = $_GetListAndViewResult);
	}
	/**
	 * Get GetListAndViewResult
	 * @return SPListsTypeGetListAndViewResult
	 */
	public function getGetListAndViewResult()
	{
		return $this->GetListAndViewResult;
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