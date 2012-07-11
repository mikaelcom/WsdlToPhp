<?php
/**
 * Class file for EccRssCustomTypeGetRSSResponse
 * @date 03/07/2012
 */
/**
 * Class EccRssCustomTypeGetRSSResponse
 * @date 03/07/2012
 */
class EccRssCustomTypeGetRSSResponse extends EccRssCustomWsdlClass
{
	/**
	 * The GetRSSResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccRssCustomTypeRss
	 */
	public $GetRSSResult;
	/**
	 * Constructor
	 * @param EccRssCustomTypeRss GetRSSResult
	 * @return EccRssCustomTypeGetRSSResponse
	 */
	public function __construct($_GetRSSResult = null)
	{
		parent::__construct(array('GetRSSResult'=>$_GetRSSResult));
	}
	/**
	 * Set GetRSSResult
	 * @param rss GetRSSResult
	 * @return rss
	 */
	public function setGetRSSResult($_GetRSSResult)
	{
		return ($this->GetRSSResult = $_GetRSSResult);
	}
	/**
	 * Get GetRSSResult
	 * @return EccRssCustomTyperss
	 */
	public function getGetRSSResult()
	{
		return $this->GetRSSResult;
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