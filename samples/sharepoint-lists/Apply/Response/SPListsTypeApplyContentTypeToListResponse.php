<?php
/**
 * Class file for SPListsTypeApplyContentTypeToListResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeApplyContentTypeToListResponse
 * @date 07/07/2012
 */
class SPListsTypeApplyContentTypeToListResponse extends SPListsWsdlClass
{
	/**
	 * The ApplyContentTypeToListResult
	 * @var SPListsTypeApplyContentTypeToListResult
	 */
	public $ApplyContentTypeToListResult;
	/**
	 * Constructor
	 * @param SPListsTypeApplyContentTypeToListResult ApplyContentTypeToListResult
	 * @return SPListsTypeApplyContentTypeToListResponse
	 */
	public function __construct($_ApplyContentTypeToListResult = null)
	{
		parent::__construct(array('ApplyContentTypeToListResult'=>$_ApplyContentTypeToListResult));
	}
	/**
	 * Set ApplyContentTypeToListResult
	 * @param ApplyContentTypeToListResult ApplyContentTypeToListResult
	 * @return ApplyContentTypeToListResult
	 */
	public function setApplyContentTypeToListResult($_ApplyContentTypeToListResult)
	{
		return ($this->ApplyContentTypeToListResult = $_ApplyContentTypeToListResult);
	}
	/**
	 * Get ApplyContentTypeToListResult
	 * @return SPListsTypeApplyContentTypeToListResult
	 */
	public function getApplyContentTypeToListResult()
	{
		return $this->ApplyContentTypeToListResult;
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