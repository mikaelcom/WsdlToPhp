<?php
/**
 * Class file for EccMktGoogleTypeGetSiteCountResponse
 * @date 03/07/2012
 */
/**
 * Class EccMktGoogleTypeGetSiteCountResponse
 * @date 03/07/2012
 */
class EccMktGoogleTypeGetSiteCountResponse extends EccMktGoogleWsdlClass
{
	/**
	 * The GetSiteCountResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccMktGoogleTypeGoogleCount
	 */
	public $GetSiteCountResult;
	/**
	 * Constructor
	 * @param EccMktGoogleTypeGoogleCount GetSiteCountResult
	 * @return EccMktGoogleTypeGetSiteCountResponse
	 */
	public function __construct($_GetSiteCountResult = null)
	{
		parent::__construct(array('GetSiteCountResult'=>$_GetSiteCountResult));
	}
	/**
	 * Set GetSiteCountResult
	 * @param GoogleCount GetSiteCountResult
	 * @return GoogleCount
	 */
	public function setGetSiteCountResult($_GetSiteCountResult)
	{
		return ($this->GetSiteCountResult = $_GetSiteCountResult);
	}
	/**
	 * Get GetSiteCountResult
	 * @return EccMktGoogleTypeGoogleCount
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