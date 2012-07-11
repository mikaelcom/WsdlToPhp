<?php
/**
 * Class file for XWebPriceListTypePriceListRequest
 * @date 09/07/2012
 */
/**
 * Class XWebPriceListTypePriceListRequest
 * @date 09/07/2012
 */
class XWebPriceListTypePriceListRequest extends XWebPriceListWsdlClass
{
	/**
	 * The RequestPriceList
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebPriceListTypeRequestPriceListType
	 */
	public $RequestPriceList;
	/**
	 * Constructor
	 * @param XWebPriceListTypeRequestPriceListType RequestPriceList
	 * @return XWebPriceListTypePriceListRequest
	 */
	public function __construct($_RequestPriceList)
	{
		parent::__construct(array('RequestPriceList'=>$_RequestPriceList));
	}
	/**
	 * Set RequestPriceList
	 * @param RequestPriceListType RequestPriceList
	 * @return RequestPriceListType
	 */
	public function setRequestPriceList($_RequestPriceList)
	{
		return ($this->RequestPriceList = $_RequestPriceList);
	}
	/**
	 * Get RequestPriceList
	 * @return XWebPriceListTypeRequestPriceListType
	 */
	public function getRequestPriceList()
	{
		return $this->RequestPriceList;
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