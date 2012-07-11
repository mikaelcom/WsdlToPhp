<?php
/**
 * Class file for EccMktLiveTypeGetKeywordRankdingResponse
 * @date 03/07/2012
 */
/**
 * Class EccMktLiveTypeGetKeywordRankdingResponse
 * @date 03/07/2012
 */
class EccMktLiveTypeGetKeywordRankdingResponse extends EccMktLiveWsdlClass
{
	/**
	 * The GetKeywordRankdingResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccMktLiveTypeLiveKeywordRanking
	 */
	public $GetKeywordRankdingResult;
	/**
	 * Constructor
	 * @param EccMktLiveTypeLiveKeywordRanking GetKeywordRankdingResult
	 * @return EccMktLiveTypeGetKeywordRankdingResponse
	 */
	public function __construct($_GetKeywordRankdingResult = null)
	{
		parent::__construct(array('GetKeywordRankdingResult'=>$_GetKeywordRankdingResult));
	}
	/**
	 * Set GetKeywordRankdingResult
	 * @param LiveKeywordRanking GetKeywordRankdingResult
	 * @return LiveKeywordRanking
	 */
	public function setGetKeywordRankdingResult($_GetKeywordRankdingResult)
	{
		return ($this->GetKeywordRankdingResult = $_GetKeywordRankdingResult);
	}
	/**
	 * Get GetKeywordRankdingResult
	 * @return EccMktLiveTypeLiveKeywordRanking
	 */
	public function getGetKeywordRankdingResult()
	{
		return $this->GetKeywordRankdingResult;
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