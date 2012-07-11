<?php
/**
 * Class file for SPVersionsTypeDeleteAllVersionsResponse
 * @date 06/07/2012
 */
/**
 * Class SPVersionsTypeDeleteAllVersionsResponse
 * @date 06/07/2012
 */
class SPVersionsTypeDeleteAllVersionsResponse extends SPVersionsWsdlClass
{
	/**
	 * The DeleteAllVersionsResult
	 * @var SPVersionsTypeDeleteAllVersionsResult
	 */
	public $DeleteAllVersionsResult;
	/**
	 * Constructor
	 * @param SPVersionsTypeDeleteAllVersionsResult DeleteAllVersionsResult
	 * @return SPVersionsTypeDeleteAllVersionsResponse
	 */
	public function __construct($_DeleteAllVersionsResult = null)
	{
		parent::__construct(array('DeleteAllVersionsResult'=>$_DeleteAllVersionsResult));
	}
	/**
	 * Set DeleteAllVersionsResult
	 * @param DeleteAllVersionsResult DeleteAllVersionsResult
	 * @return DeleteAllVersionsResult
	 */
	public function setDeleteAllVersionsResult($_DeleteAllVersionsResult)
	{
		return ($this->DeleteAllVersionsResult = $_DeleteAllVersionsResult);
	}
	/**
	 * Get DeleteAllVersionsResult
	 * @return SPVersionsTypeDeleteAllVersionsResult
	 */
	public function getDeleteAllVersionsResult()
	{
		return $this->DeleteAllVersionsResult;
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