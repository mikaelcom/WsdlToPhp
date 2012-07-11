<?php
/**
 * Class file for EbayTradingTypeWantItNowPostArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeWantItNowPostArrayType
 * Documentation : Container for a list of search result items. Can contain zero, one, or multiple WantItNowPostType objects, each of which contains data for a single Want It Now post found by the search.
 * @date 04/07/2012
 */
class EbayTradingTypeWantItNowPostArrayType extends EbayTradingWsdlClass
{
	/**
	 * The WantItNowPost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains data for a Want It Now post found by a search.
	 * @var EbayTradingTypeWantItNowPostType
	 */
	public $WantItNowPost;
	/**
	 * Constructor
	 * @param EbayTradingTypeWantItNowPostType WantItNowPost
	 * @return EbayTradingTypeWantItNowPostArrayType
	 */
	public function __construct($_WantItNowPost = null)
	{
		parent::__construct(array('WantItNowPost'=>$_WantItNowPost));
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