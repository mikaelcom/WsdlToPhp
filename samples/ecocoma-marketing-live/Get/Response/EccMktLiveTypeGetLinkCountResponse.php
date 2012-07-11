<?php
/**
 * Class file for EccMktLiveTypeGetLinkCountResponse
 * @date 03/07/2012
 */
/**
 * Class EccMktLiveTypeGetLinkCountResponse
 * @date 03/07/2012
 */
class EccMktLiveTypeGetLinkCountResponse extends EccMktLiveWsdlClass
{
	/**
	 * The GetLinkCountResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccMktLiveTypeLiveCount
	 */
	public $GetLinkCountResult;
	/**
	 * Constructor
	 * @param EccMktLiveTypeLiveCount GetLinkCountResult
	 * @return EccMktLiveTypeGetLinkCountResponse
	 */
	public function __construct($_GetLinkCountResult = null)
	{
		parent::__construct(array('GetLinkCountResult'=>$_GetLinkCountResult));
	}
	/**
	 * Set GetLinkCountResult
	 * @param LiveCount GetLinkCountResult
	 * @return LiveCount
	 */
	public function setGetLinkCountResult($_GetLinkCountResult)
	{
		return ($this->GetLinkCountResult = $_GetLinkCountResult);
	}
	/**
	 * Get GetLinkCountResult
	 * @return EccMktLiveTypeLiveCount
	 */
	public function getGetLinkCountResult()
	{
		return $this->GetLinkCountResult;
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