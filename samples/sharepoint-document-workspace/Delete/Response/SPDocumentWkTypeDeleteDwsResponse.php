<?php
/**
 * Class file for SPDocumentWkTypeDeleteDwsResponse
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeDeleteDwsResponse
 * @date 06/07/2012
 */
class SPDocumentWkTypeDeleteDwsResponse extends SPDocumentWkWsdlClass
{
	/**
	 * The DeleteDwsResult
	 * @var string
	 */
	public $DeleteDwsResult;
	/**
	 * Constructor
	 * @param string DeleteDwsResult
	 * @return SPDocumentWkTypeDeleteDwsResponse
	 */
	public function __construct($_DeleteDwsResult = null)
	{
		parent::__construct(array('DeleteDwsResult'=>$_DeleteDwsResult));
	}
	/**
	 * Set DeleteDwsResult
	 * @param string DeleteDwsResult
	 * @return string
	 */
	public function setDeleteDwsResult($_DeleteDwsResult)
	{
		return ($this->DeleteDwsResult = $_DeleteDwsResult);
	}
	/**
	 * Get DeleteDwsResult
	 * @return string
	 */
	public function getDeleteDwsResult()
	{
		return $this->DeleteDwsResult;
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