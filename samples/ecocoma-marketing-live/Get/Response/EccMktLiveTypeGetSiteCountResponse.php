<?php
/**
 * Class file for EccMktLiveTypeGetSiteCountResponse
 * @date 03/07/2012
 */
/**
 * Class EccMktLiveTypeGetSiteCountResponse
 * @date 03/07/2012
 */
class EccMktLiveTypeGetSiteCountResponse extends EccMktLiveWsdlClass
{
	/**
	 * The GetSiteCountResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccMktLiveTypeLiveCount
	 */
	public $GetSiteCountResult;
	/**
	 * Constructor
	 * @param EccMktLiveTypeLiveCount GetSiteCountResult
	 * @return EccMktLiveTypeGetSiteCountResponse
	 */
	public function __construct($_GetSiteCountResult = null)
	{
		parent::__construct(array('GetSiteCountResult'=>$_GetSiteCountResult));
	}
	/**
	 * Set GetSiteCountResult
	 * @param LiveCount GetSiteCountResult
	 * @return LiveCount
	 */
	public function setGetSiteCountResult($_GetSiteCountResult)
	{
		return ($this->GetSiteCountResult = $_GetSiteCountResult);
	}
	/**
	 * Get GetSiteCountResult
	 * @return EccMktLiveTypeLiveCount
	 */
	public function getGetSiteCountResult()
	{
		return $this->GetSiteCountResult;
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