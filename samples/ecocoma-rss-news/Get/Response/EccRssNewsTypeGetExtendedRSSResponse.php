<?php
/**
 * Class file for EccRssNewsTypeGetExtendedRSSResponse
 * @date 03/07/2012
 */
/**
 * Class EccRssNewsTypeGetExtendedRSSResponse
 * @date 03/07/2012
 */
class EccRssNewsTypeGetExtendedRSSResponse extends EccRssNewsWsdlClass
{
	/**
	 * The GetExtendedRSSResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccRssNewsTypeRss
	 */
	public $GetExtendedRSSResult;
	/**
	 * Constructor
	 * @param EccRssNewsTypeRss GetExtendedRSSResult
	 * @return EccRssNewsTypeGetExtendedRSSResponse
	 */
	public function __construct($_GetExtendedRSSResult = null)
	{
		parent::__construct(array('GetExtendedRSSResult'=>$_GetExtendedRSSResult));
	}
	/**
	 * Set GetExtendedRSSResult
	 * @param rss GetExtendedRSSResult
	 * @return rss
	 */
	public function setGetExtendedRSSResult($_GetExtendedRSSResult)
	{
		return ($this->GetExtendedRSSResult = $_GetExtendedRSSResult);
	}
	/**
	 * Get GetExtendedRSSResult
	 * @return EccRssNewsTyperss
	 */
	public function getGetExtendedRSSResult()
	{
		return $this->GetExtendedRSSResult;
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