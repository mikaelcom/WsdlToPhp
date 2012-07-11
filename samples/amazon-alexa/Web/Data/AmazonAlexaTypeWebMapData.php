<?php
/**
 * Class file for AmazonAlexaTypeWebMapData
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeWebMapData
 * @date 10/07/2012
 */
class AmazonAlexaTypeWebMapData extends AmazonAlexaWsdlClass
{
	/**
	 * The LinksPointingIn
	 * @var AmazonAlexaTypeWebMapSubType
	 */
	public $LinksPointingIn;
	/**
	 * The LinksPointingOut
	 * @var AmazonAlexaTypeWebMapSubType
	 */
	public $LinksPointingOut;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeWebMapSubType LinksPointingIn
	 * @param AmazonAlexaTypeWebMapSubType LinksPointingOut
	 * @return AmazonAlexaTypeWebMapData
	 */
	public function __construct($_LinksPointingIn = null,$_LinksPointingOut = null)
	{
		parent::__construct(array('LinksPointingIn'=>$_LinksPointingIn,'LinksPointingOut'=>$_LinksPointingOut));
	}
	/**
	 * Set LinksPointingIn
	 * @param WebMapSubType LinksPointingIn
	 * @return WebMapSubType
	 */
	public function setLinksPointingIn($_LinksPointingIn)
	{
		return ($this->LinksPointingIn = $_LinksPointingIn);
	}
	/**
	 * Get LinksPointingIn
	 * @return AmazonAlexaTypeWebMapSubType
	 */
	public function getLinksPointingIn()
	{
		return $this->LinksPointingIn;
	}
	/**
	 * Set LinksPointingOut
	 * @param WebMapSubType LinksPointingOut
	 * @return WebMapSubType
	 */
	public function setLinksPointingOut($_LinksPointingOut)
	{
		return ($this->LinksPointingOut = $_LinksPointingOut);
	}
	/**
	 * Get LinksPointingOut
	 * @return AmazonAlexaTypeWebMapSubType
	 */
	public function getLinksPointingOut()
	{
		return $this->LinksPointingOut;
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