<?php
/**
 * Class file for AmazonAlexaTypeLinks
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeLinks
 * @date 10/07/2012
 */
class AmazonAlexaTypeLinks extends AmazonAlexaWsdlClass
{
	/**
	 * The Link
	 * @var AmazonAlexaTypeLink
	 */
	public $Link;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeLink Link
	 * @return AmazonAlexaTypeLinks
	 */
	public function __construct($_Link = null)
	{
		parent::__construct(array('Link'=>$_Link));
	}
	/**
	 * Set Link
	 * @param Link Link
	 * @return Link
	 */
	public function setLink($_Link)
	{
		return ($this->Link = $_Link);
	}
	/**
	 * Get Link
	 * @return AmazonAlexaTypeLink
	 */
	public function getLink()
	{
		return $this->Link;
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