<?php
/**
 * Class file for AmazonAlexaTypeSitesLinkingInType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeSitesLinkingInType
 * @date 10/07/2012
 */
class AmazonAlexaTypeSitesLinkingInType extends AmazonAlexaWsdlClass
{
	/**
	 * The Site
	 * @var AmazonAlexaTypeSite
	 */
	public $Site;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeSite Site
	 * @return AmazonAlexaTypeSitesLinkingInType
	 */
	public function __construct($_Site = null)
	{
		parent::__construct(array('Site'=>$_Site));
	}
	/**
	 * Set Site
	 * @param Site Site
	 * @return Site
	 */
	public function setSite($_Site)
	{
		return ($this->Site = $_Site);
	}
	/**
	 * Get Site
	 * @return AmazonAlexaTypeSite
	 */
	public function getSite()
	{
		return $this->Site;
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