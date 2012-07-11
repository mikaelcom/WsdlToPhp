<?php
/**
 * Class file for SPListsTypeUpdateContentTypeResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeUpdateContentTypeResponse
 * @date 07/07/2012
 */
class SPListsTypeUpdateContentTypeResponse extends SPListsWsdlClass
{
	/**
	 * The UpdateContentTypeResult
	 * @var SPListsTypeUpdateContentTypeResult
	 */
	public $UpdateContentTypeResult;
	/**
	 * Constructor
	 * @param SPListsTypeUpdateContentTypeResult UpdateContentTypeResult
	 * @return SPListsTypeUpdateContentTypeResponse
	 */
	public function __construct($_UpdateContentTypeResult = null)
	{
		parent::__construct(array('UpdateContentTypeResult'=>$_UpdateContentTypeResult));
	}
	/**
	 * Set UpdateContentTypeResult
	 * @param UpdateContentTypeResult UpdateContentTypeResult
	 * @return UpdateContentTypeResult
	 */
	public function setUpdateContentTypeResult($_UpdateContentTypeResult)
	{
		return ($this->UpdateContentTypeResult = $_UpdateContentTypeResult);
	}
	/**
	 * Get UpdateContentTypeResult
	 * @return SPListsTypeUpdateContentTypeResult
	 */
	public function getUpdateContentTypeResult()
	{
		return $this->UpdateContentTypeResult;
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