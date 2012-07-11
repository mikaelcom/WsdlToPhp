<?php
/**
 * Class file for EccRssCustomTypeGetExtendedRSSResponse
 * @date 03/07/2012
 */
/**
 * Class EccRssCustomTypeGetExtendedRSSResponse
 * @date 03/07/2012
 */
class EccRssCustomTypeGetExtendedRSSResponse extends EccRssCustomWsdlClass
{
	/**
	 * The GetExtendedRSSResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccRssCustomTypeRss
	 */
	public $GetExtendedRSSResult;
	/**
	 * Constructor
	 * @param EccRssCustomTypeRss GetExtendedRSSResult
	 * @return EccRssCustomTypeGetExtendedRSSResponse
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
	 * @return EccRssCustomTyperss
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