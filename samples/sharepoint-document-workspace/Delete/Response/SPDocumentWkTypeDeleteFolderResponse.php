<?php
/**
 * Class file for SPDocumentWkTypeDeleteFolderResponse
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeDeleteFolderResponse
 * @date 06/07/2012
 */
class SPDocumentWkTypeDeleteFolderResponse extends SPDocumentWkWsdlClass
{
	/**
	 * The DeleteFolderResult
	 * @var string
	 */
	public $DeleteFolderResult;
	/**
	 * Constructor
	 * @param string DeleteFolderResult
	 * @return SPDocumentWkTypeDeleteFolderResponse
	 */
	public function __construct($_DeleteFolderResult = null)
	{
		parent::__construct(array('DeleteFolderResult'=>$_DeleteFolderResult));
	}
	/**
	 * Set DeleteFolderResult
	 * @param string DeleteFolderResult
	 * @return string
	 */
	public function setDeleteFolderResult($_DeleteFolderResult)
	{
		return ($this->DeleteFolderResult = $_DeleteFolderResult);
	}
	/**
	 * Get DeleteFolderResult
	 * @return string
	 */
	public function getDeleteFolderResult()
	{
		return $this->DeleteFolderResult;
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