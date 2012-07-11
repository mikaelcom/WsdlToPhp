<?php
/**
 * Class file for SPImagingTypeCreateNewFolderResponse
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeCreateNewFolderResponse
 * @date 06/07/2012
 */
class SPImagingTypeCreateNewFolderResponse extends SPImagingWsdlClass
{
	/**
	 * The CreateNewFolderResult
	 * @var SPImagingTypeCreateNewFolderResult
	 */
	public $CreateNewFolderResult;
	/**
	 * Constructor
	 * @param SPImagingTypeCreateNewFolderResult CreateNewFolderResult
	 * @return SPImagingTypeCreateNewFolderResponse
	 */
	public function __construct($_CreateNewFolderResult = null)
	{
		parent::__construct(array('CreateNewFolderResult'=>$_CreateNewFolderResult));
	}
	/**
	 * Set CreateNewFolderResult
	 * @param CreateNewFolderResult CreateNewFolderResult
	 * @return CreateNewFolderResult
	 */
	public function setCreateNewFolderResult($_CreateNewFolderResult)
	{
		return ($this->CreateNewFolderResult = $_CreateNewFolderResult);
	}
	/**
	 * Get CreateNewFolderResult
	 * @return SPImagingTypeCreateNewFolderResult
	 */
	public function getCreateNewFolderResult()
	{
		return $this->CreateNewFolderResult;
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