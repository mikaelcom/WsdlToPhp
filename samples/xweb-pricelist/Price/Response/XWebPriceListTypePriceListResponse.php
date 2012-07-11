<?php
/**
 * Class file for XWebPriceListTypePriceListResponse
 * @date 09/07/2012
 */
/**
 * Class XWebPriceListTypePriceListResponse
 * @date 09/07/2012
 */
class XWebPriceListTypePriceListResponse extends XWebPriceListWsdlClass
{
	/**
	 * The ResponsePriceList
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebPriceListTypeResponsePriceListType
	 */
	public $ResponsePriceList;
	/**
	 * Constructor
	 * @param XWebPriceListTypeResponsePriceListType ResponsePriceList
	 * @return XWebPriceListTypePriceListResponse
	 */
	public function __construct($_ResponsePriceList)
	{
		parent::__construct(array('ResponsePriceList'=>$_ResponsePriceList));
	}
	/**
	 * Set ResponsePriceList
	 * @param ResponsePriceListType ResponsePriceList
	 * @return ResponsePriceListType
	 */
	public function setResponsePriceList($_ResponsePriceList)
	{
		return ($this->ResponsePriceList = $_ResponsePriceList);
	}
	/**
	 * Get ResponsePriceList
	 * @return XWebPriceListTypeResponsePriceListType
	 */
	public function getResponsePriceList()
	{
		return $this->ResponsePriceList;
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