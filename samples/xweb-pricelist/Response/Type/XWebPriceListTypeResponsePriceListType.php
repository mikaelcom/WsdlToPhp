<?php
/**
 * Class file for XWebPriceListTypeResponsePriceListType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceListTypeResponsePriceListType
 * @date 09/07/2012
 */
class XWebPriceListTypeResponsePriceListType extends XWebPriceListWsdlClass
{
	/**
	 * The Header
	 * @var XWebPriceListTypeResponseHeaderType
	 */
	public $Header;
	/**
	 * The Detail
	 * @var XWebPriceListTypeResponseDetailType
	 */
	public $Detail;
	/**
	 * Constructor
	 * @param XWebPriceListTypeResponseHeaderType Header
	 * @param XWebPriceListTypeResponseDetailType Detail
	 * @return XWebPriceListTypeResponsePriceListType
	 */
	public function __construct($_Header = null,$_Detail = null)
	{
		parent::__construct(array('Header'=>$_Header,'Detail'=>$_Detail));
	}
	/**
	 * Set Header
	 * @param ResponseHeaderType Header
	 * @return ResponseHeaderType
	 */
	public function setHeader($_Header)
	{
		return ($this->Header = $_Header);
	}
	/**
	 * Get Header
	 * @return XWebPriceListTypeResponseHeaderType
	 */
	public function getHeader()
	{
		return $this->Header;
	}
	/**
	 * Set Detail
	 * @param ResponseDetailType Detail
	 * @return ResponseDetailType
	 */
	public function setDetail($_Detail)
	{
		return ($this->Detail = $_Detail);
	}
	/**
	 * Get Detail
	 * @return XWebPriceListTypeResponseDetailType
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