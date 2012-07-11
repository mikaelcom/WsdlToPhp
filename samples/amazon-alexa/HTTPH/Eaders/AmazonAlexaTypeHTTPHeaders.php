<?php
/**
 * Class file for AmazonAlexaTypeHTTPHeaders
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeHTTPHeaders
 * @date 10/07/2012
 */
class AmazonAlexaTypeHTTPHeaders extends AmazonAlexaWsdlClass
{
	/**
	 * The Header
	 * @var AmazonAlexaTypeHeader
	 */
	public $Header;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeHeader Header
	 * @return AmazonAlexaTypeHTTPHeaders
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
	 * @return AmazonAlexaTypeHeader
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