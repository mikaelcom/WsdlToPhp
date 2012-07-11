<?php
/**
 * Class file for SPImagingTypeGetItemsXMLDataResponse
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeGetItemsXMLDataResponse
 * @date 06/07/2012
 */
class SPImagingTypeGetItemsXMLDataResponse extends SPImagingWsdlClass
{
	/**
	 * The GetItemsXMLDataResult
	 * @var SPImagingTypeGetItemsXMLDataResult
	 */
	public $GetItemsXMLDataResult;
	/**
	 * Constructor
	 * @param SPImagingTypeGetItemsXMLDataResult GetItemsXMLDataResult
	 * @return SPImagingTypeGetItemsXMLDataResponse
	 */
	public function __construct($_GetItemsXMLDataResult = null)
	{
		parent::__construct(array('GetItemsXMLDataResult'=>$_GetItemsXMLDataResult));
	}
	/**
	 * Set GetItemsXMLDataResult
	 * @param GetItemsXMLDataResult GetItemsXMLDataResult
	 * @return GetItemsXMLDataResult
	 */
	public function setGetItemsXMLDataResult($_GetItemsXMLDataResult)
	{
		return ($this->GetItemsXMLDataResult = $_GetItemsXMLDataResult);
	}
	/**
	 * Get GetItemsXMLDataResult
	 * @return SPImagingTypeGetItemsXMLDataResult
	 */
	public function getGetItemsXMLDataResult()
	{
		if(!($this->GetItemsXMLDataResult instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->GetItemsXMLDataResult);
			$this->setGetItemsXMLDataResult($dom);
		}
		return $this->GetItemsXMLDataResult;
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