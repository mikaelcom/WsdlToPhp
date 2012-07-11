<?php
/**
 * Class file for EccRssNewsTypeGetRSSResponse
 * @date 03/07/2012
 */
/**
 * Class EccRssNewsTypeGetRSSResponse
 * @date 03/07/2012
 */
class EccRssNewsTypeGetRSSResponse extends EccRssNewsWsdlClass
{
	/**
	 * The GetRSSResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccRssNewsTypeRss
	 */
	public $GetRSSResult;
	/**
	 * Constructor
	 * @param EccRssNewsTypeRss GetRSSResult
	 * @return EccRssNewsTypeGetRSSResponse
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
	 * @return EccRssNewsTyperss
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