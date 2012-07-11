<?php
/**
 * Class file for EccMktLiveTypeGetRelatedCountResponse
 * @date 03/07/2012
 */
/**
 * Class EccMktLiveTypeGetRelatedCountResponse
 * @date 03/07/2012
 */
class EccMktLiveTypeGetRelatedCountResponse extends EccMktLiveWsdlClass
{
	/**
	 * The GetRelatedCountResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccMktLiveTypeLiveCount
	 */
	public $GetRelatedCountResult;
	/**
	 * Constructor
	 * @param EccMktLiveTypeLiveCount GetRelatedCountResult
	 * @return EccMktLiveTypeGetRelatedCountResponse
	 */
	public function __construct($_GetRelatedCountResult = null)
	{
		parent::__construct(array('GetRelatedCountResult'=>$_GetRelatedCountResult));
	}
	/**
	 * Set GetRelatedCountResult
	 * @param LiveCount GetRelatedCountResult
	 * @return LiveCount
	 */
	public function setGetRelatedCountResult($_GetRelatedCountResult)
	{
		return ($this->GetRelatedCountResult = $_GetRelatedCountResult);
	}
	/**
	 * Get GetRelatedCountResult
	 * @return EccMktLiveTypeLiveCount
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