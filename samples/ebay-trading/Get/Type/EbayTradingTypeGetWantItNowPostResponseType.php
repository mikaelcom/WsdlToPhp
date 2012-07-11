<?php
/**
 * Class file for EbayTradingTypeGetWantItNowPostResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetWantItNowPostResponseType
 * Documentation : Contains the Want It Now post data returned by the call. The data for the specified post listing is returned in a WantItNowPostType object.
 * @date 04/07/2012
 */
class EbayTradingTypeGetWantItNowPostResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The WantItNowPost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the data defining a single Want It Now post.
	 * @var EbayTradingTypeWantItNowPostType
	 */
	public $WantItNowPost;
	/**
	 * Constructor
	 * @param EbayTradingTypeWantItNowPostType WantItNowPost
	 * @return EbayTradingTypeGetWantItNowPostResponseType
	 */
	public function __construct($_WantItNowPost = null)
	{
		EbayTradingWsdlClass::__construct(array('WantItNowPost'=>$_WantItNowPost));
	}
	/**
	 * Set WantItNowPost
	 * @param WantItNowPostType WantItNowPost
	 * @return WantItNowPostType
	 */
	public function setWantItNowPost($_WantItNowPost)
	{
		return ($this->WantItNowPost = $_WantItNowPost);
	}
	/**
	 * Get WantItNowPost
	 * @return EbayTradingTypeWantItNowPostType
	 */
	public function getWantItNowPost()
	{
		return $this->WantItNowPost;
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