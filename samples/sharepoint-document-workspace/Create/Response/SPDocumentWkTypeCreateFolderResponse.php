<?php
/**
 * Class file for SPDocumentWkTypeCreateFolderResponse
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeCreateFolderResponse
 * @date 06/07/2012
 */
class SPDocumentWkTypeCreateFolderResponse extends SPDocumentWkWsdlClass
{
	/**
	 * The CreateFolderResult
	 * @var string
	 */
	public $CreateFolderResult;
	/**
	 * Constructor
	 * @param string CreateFolderResult
	 * @return SPDocumentWkTypeCreateFolderResponse
	 */
	public function __construct($_CreateFolderResult = null)
	{
		parent::__construct(array('CreateFolderResult'=>$_CreateFolderResult));
	}
	/**
	 * Set CreateFolderResult
	 * @param string CreateFolderResult
	 * @return string
	 */
	public function setCreateFolderResult($_CreateFolderResult)
	{
		return ($this->CreateFolderResult = $_CreateFolderResult);
	}
	/**
	 * Get CreateFolderResult
	 * @return string
	 */
	public function getCreateFolderResult()
	{
		return $this->CreateFolderResult;
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