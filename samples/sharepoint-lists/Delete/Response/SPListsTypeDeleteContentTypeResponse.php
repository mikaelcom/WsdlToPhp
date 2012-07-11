<?php
/**
 * Class file for SPListsTypeDeleteContentTypeResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeDeleteContentTypeResponse
 * @date 07/07/2012
 */
class SPListsTypeDeleteContentTypeResponse extends SPListsWsdlClass
{
	/**
	 * The DeleteContentTypeResult
	 * @var SPListsTypeDeleteContentTypeResult
	 */
	public $DeleteContentTypeResult;
	/**
	 * Constructor
	 * @param SPListsTypeDeleteContentTypeResult DeleteContentTypeResult
	 * @return SPListsTypeDeleteContentTypeResponse
	 */
	public function __construct($_DeleteContentTypeResult = null)
	{
		parent::__construct(array('DeleteContentTypeResult'=>$_DeleteContentTypeResult));
	}
	/**
	 * Set DeleteContentTypeResult
	 * @param DeleteContentTypeResult DeleteContentTypeResult
	 * @return DeleteContentTypeResult
	 */
	public function setDeleteContentTypeResult($_DeleteContentTypeResult)
	{
		return ($this->DeleteContentTypeResult = $_DeleteContentTypeResult);
	}
	/**
	 * Get DeleteContentTypeResult
	 * @return SPListsTypeDeleteContentTypeResult
	 */
	public function getDeleteContentTypeResult()
	{
		return $this->DeleteContentTypeResult;
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