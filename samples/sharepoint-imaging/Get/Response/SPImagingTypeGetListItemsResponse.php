<?php
/**
 * Class file for SPImagingTypeGetListItemsResponse
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeGetListItemsResponse
 * @date 06/07/2012
 */
class SPImagingTypeGetListItemsResponse extends SPImagingWsdlClass
{
	/**
	 * The GetListItemsResult
	 * @var SPImagingTypeGetListItemsResult
	 */
	public $GetListItemsResult;
	/**
	 * Constructor
	 * @param SPImagingTypeGetListItemsResult GetListItemsResult
	 * @return SPImagingTypeGetListItemsResponse
	 */
	public function __construct($_GetListItemsResult = null)
	{
		parent::__construct(array('GetListItemsResult'=>$_GetListItemsResult));
	}
	/**
	 * Set GetListItemsResult
	 * @param GetListItemsResult GetListItemsResult
	 * @return GetListItemsResult
	 */
	public function setGetListItemsResult($_GetListItemsResult)
	{
		return ($this->GetListItemsResult = $_GetListItemsResult);
	}
	/**
	 * Get GetListItemsResult
	 * @return SPImagingTypeGetListItemsResult
	 */
	public function getGetListItemsResult()
	{
		return $this->GetListItemsResult;
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