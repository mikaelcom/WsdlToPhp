<?php
/**
 * Class file for AmazonECommerceServiceTypeHTTPHeaders
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeHTTPHeaders
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeHTTPHeaders extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Header
	 * @var AmazonECommerceServiceTypeHeader
	 */
	public $Header;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeHeader Header
	 * @return AmazonECommerceServiceTypeHTTPHeaders
	 */
	public function __construct($_Header = null)
	{
		parent::__construct(array('Header'=>$_Header));
	}
	/**
	 * Set Header
	 * @param Header Header
	 * @return Header
	 */
	public function setHeader($_Header)
	{
		return ($this->Header = $_Header);
	}
	/**
	 * Get Header
	 * @return AmazonECommerceServiceTypeHeader
	 */
	public function getHeader()
	{
		return $this->Header;
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