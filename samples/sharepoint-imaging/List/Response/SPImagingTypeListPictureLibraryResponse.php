<?php
/**
 * Class file for SPImagingTypeListPictureLibraryResponse
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeListPictureLibraryResponse
 * @date 06/07/2012
 */
class SPImagingTypeListPictureLibraryResponse extends SPImagingWsdlClass
{
	/**
	 * The ListPictureLibraryResult
	 * @var SPImagingTypeListPictureLibraryResult
	 */
	public $ListPictureLibraryResult;
	/**
	 * Constructor
	 * @param SPImagingTypeListPictureLibraryResult ListPictureLibraryResult
	 * @return SPImagingTypeListPictureLibraryResponse
	 */
	public function __construct($_ListPictureLibraryResult = null)
	{
		parent::__construct(array('ListPictureLibraryResult'=>$_ListPictureLibraryResult));
	}
	/**
	 * Set ListPictureLibraryResult
	 * @param ListPictureLibraryResult ListPictureLibraryResult
	 * @return ListPictureLibraryResult
	 */
	public function setListPictureLibraryResult($_ListPictureLibraryResult)
	{
		return ($this->ListPictureLibraryResult = $_ListPictureLibraryResult);
	}
	/**
	 * Get ListPictureLibraryResult
	 * @return SPImagingTypeListPictureLibraryResult
	 */
	public function getListPictureLibraryResult()
	{
		return $this->ListPictureLibraryResult;
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