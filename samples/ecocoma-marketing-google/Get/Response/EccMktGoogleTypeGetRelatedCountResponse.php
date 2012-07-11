<?php
/**
 * Class file for EccMktGoogleTypeGetRelatedCountResponse
 * @date 03/07/2012
 */
/**
 * Class EccMktGoogleTypeGetRelatedCountResponse
 * @date 03/07/2012
 */
class EccMktGoogleTypeGetRelatedCountResponse extends EccMktGoogleWsdlClass
{
	/**
	 * The GetRelatedCountResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccMktGoogleTypeGoogleCount
	 */
	public $GetRelatedCountResult;
	/**
	 * Constructor
	 * @param EccMktGoogleTypeGoogleCount GetRelatedCountResult
	 * @return EccMktGoogleTypeGetRelatedCountResponse
	 */
	public function __construct($_GetRelatedCountResult = null)
	{
		parent::__construct(array('GetRelatedCountResult'=>$_GetRelatedCountResult));
	}
	/**
	 * Set GetRelatedCountResult
	 * @param GoogleCount GetRelatedCountResult
	 * @return GoogleCount
	 */
	public function setGetRelatedCountResult($_GetRelatedCountResult)
	{
		return ($this->GetRelatedCountResult = $_GetRelatedCountResult);
	}
	/**
	 * Get GetRelatedCountResult
	 * @return EccMktGoogleTypeGoogleCount
	 */
	public function getGetRelatedCountResult()
	{
		return $this->GetRelatedCountResult;
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