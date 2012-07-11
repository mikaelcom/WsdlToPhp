<?php
/**
 * Class file for SPListsTypeCreateContentTypeResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeCreateContentTypeResponse
 * @date 07/07/2012
 */
class SPListsTypeCreateContentTypeResponse extends SPListsWsdlClass
{
	/**
	 * The CreateContentTypeResult
	 * @var string
	 */
	public $CreateContentTypeResult;
	/**
	 * Constructor
	 * @param string CreateContentTypeResult
	 * @return SPListsTypeCreateContentTypeResponse
	 */
	public function __construct($_CreateContentTypeResult = null)
	{
		parent::__construct(array('CreateContentTypeResult'=>$_CreateContentTypeResult));
	}
	/**
	 * Set CreateContentTypeResult
	 * @param string CreateContentTypeResult
	 * @return string
	 */
	public function setCreateContentTypeResult($_CreateContentTypeResult)
	{
		return ($this->CreateContentTypeResult = $_CreateContentTypeResult);
	}
	/**
	 * Get CreateContentTypeResult
	 * @return string
	 */
	public function getCreateContentTypeResult()
	{
		return $this->CreateContentTypeResult;
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