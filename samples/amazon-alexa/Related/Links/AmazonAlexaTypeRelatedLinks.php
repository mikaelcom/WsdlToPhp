<?php
/**
 * Class file for AmazonAlexaTypeRelatedLinks
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeRelatedLinks
 * @date 10/07/2012
 */
class AmazonAlexaTypeRelatedLinks extends AmazonAlexaWsdlClass
{
	/**
	 * The RelatedLink
	 * @var AmazonAlexaTypeRelatedLinkType
	 */
	public $RelatedLink;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeRelatedLinkType RelatedLink
	 * @return AmazonAlexaTypeRelatedLinks
	 */
	public function __construct($_RelatedLink = null)
	{
		parent::__construct(array('RelatedLink'=>$_RelatedLink));
	}
	/**
	 * Set RelatedLink
	 * @param RelatedLinkType RelatedLink
	 * @return RelatedLinkType
	 */
	public function setRelatedLink($_RelatedLink)
	{
		return ($this->RelatedLink = $_RelatedLink);
	}
	/**
	 * Get RelatedLink
	 * @return AmazonAlexaTypeRelatedLinkType
	 */
	public function getRelatedLink()
	{
		return $this->RelatedLink;
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