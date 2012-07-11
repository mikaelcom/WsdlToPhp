<?php
/**
 * Class file for XWebPriceListTypeRequestPriceListType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceListTypeRequestPriceListType
 * @date 09/07/2012
 */
class XWebPriceListTypeRequestPriceListType extends XWebPriceListWsdlClass
{
	/**
	 * The Header
	 * @var XWebPriceListTypeRequestHeaderType
	 */
	public $Header;
	/**
	 * The Detail
	 * @var XWebPriceListTypeRequestDetailType
	 */
	public $Detail;
	/**
	 * Constructor
	 * @param XWebPriceListTypeRequestHeaderType Header
	 * @param XWebPriceListTypeRequestDetailType Detail
	 * @return XWebPriceListTypeRequestPriceListType
	 */
	public function __construct($_Header = null,$_Detail = null)
	{
		parent::__construct(array('Header'=>$_Header,'Detail'=>$_Detail));
	}
	/**
	 * Set Header
	 * @param RequestHeaderType Header
	 * @return RequestHeaderType
	 */
	public function setHeader($_Header)
	{
		return ($this->Header = $_Header);
	}
	/**
	 * Get Header
	 * @return XWebPriceListTypeRequestHeaderType
	 */
	public function getHeader()
	{
		return $this->Header;
	}
	/**
	 * Set Detail
	 * @param RequestDetailType Detail
	 * @return RequestDetailType
	 */
	public function setDetail($_Detail)
	{
		return ($this->Detail = $_Detail);
	}
	/**
	 * Get Detail
	 * @return XWebPriceListTypeRequestDetailType
	 */
	public function getDetail()
	{
		return $this->Detail;
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