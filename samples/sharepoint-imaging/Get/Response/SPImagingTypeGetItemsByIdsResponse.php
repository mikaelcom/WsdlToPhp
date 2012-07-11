<?php
/**
 * Class file for SPImagingTypeGetItemsByIdsResponse
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeGetItemsByIdsResponse
 * @date 06/07/2012
 */
class SPImagingTypeGetItemsByIdsResponse extends SPImagingWsdlClass
{
	/**
	 * The GetItemsByIdsResult
	 * @var SPImagingTypeGetItemsByIdsResult
	 */
	public $GetItemsByIdsResult;
	/**
	 * Constructor
	 * @param SPImagingTypeGetItemsByIdsResult GetItemsByIdsResult
	 * @return SPImagingTypeGetItemsByIdsResponse
	 */
	public function __construct($_GetItemsByIdsResult = null)
	{
		parent::__construct(array('GetItemsByIdsResult'=>$_GetItemsByIdsResult));
	}
	/**
	 * Set GetItemsByIdsResult
	 * @param GetItemsByIdsResult GetItemsByIdsResult
	 * @return GetItemsByIdsResult
	 */
	public function setGetItemsByIdsResult($_GetItemsByIdsResult)
	{
		return ($this->GetItemsByIdsResult = $_GetItemsByIdsResult);
	}
	/**
	 * Get GetItemsByIdsResult
	 * @return SPImagingTypeGetItemsByIdsResult
	 */
	public function getGetItemsByIdsResult()
	{
		return $this->GetItemsByIdsResult;
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