<?php
/**
 * Class file for EccMktGoogleTypeGetLinkCountResponse
 * @date 03/07/2012
 */
/**
 * Class EccMktGoogleTypeGetLinkCountResponse
 * @date 03/07/2012
 */
class EccMktGoogleTypeGetLinkCountResponse extends EccMktGoogleWsdlClass
{
	/**
	 * The GetLinkCountResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccMktGoogleTypeGoogleCount
	 */
	public $GetLinkCountResult;
	/**
	 * Constructor
	 * @param EccMktGoogleTypeGoogleCount GetLinkCountResult
	 * @return EccMktGoogleTypeGetLinkCountResponse
	 */
	public function __construct($_GetLinkCountResult = null)
	{
		parent::__construct(array('GetLinkCountResult'=>$_GetLinkCountResult));
	}
	/**
	 * Set GetLinkCountResult
	 * @param GoogleCount GetLinkCountResult
	 * @return GoogleCount
	 */
	public function setGetLinkCountResult($_GetLinkCountResult)
	{
		return ($this->GetLinkCountResult = $_GetLinkCountResult);
	}
	/**
	 * Get GetLinkCountResult
	 * @return EccMktGoogleTypeGoogleCount
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