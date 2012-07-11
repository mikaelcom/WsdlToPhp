<?php
/**
 * Class file for EccMktGoogleTypeGetKeywordRankdingResponse
 * @date 03/07/2012
 */
/**
 * Class EccMktGoogleTypeGetKeywordRankdingResponse
 * @date 03/07/2012
 */
class EccMktGoogleTypeGetKeywordRankdingResponse extends EccMktGoogleWsdlClass
{
	/**
	 * The GetKeywordRankdingResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccMktGoogleTypeGoogleKeywordRanking
	 */
	public $GetKeywordRankdingResult;
	/**
	 * Constructor
	 * @param EccMktGoogleTypeGoogleKeywordRanking GetKeywordRankdingResult
	 * @return EccMktGoogleTypeGetKeywordRankdingResponse
	 */
	public function __construct($_GetKeywordRankdingResult = null)
	{
		parent::__construct(array('GetKeywordRankdingResult'=>$_GetKeywordRankdingResult));
	}
	/**
	 * Set GetKeywordRankdingResult
	 * @param GoogleKeywordRanking GetKeywordRankdingResult
	 * @return GoogleKeywordRanking
	 */
	public function setGetKeywordRankdingResult($_GetKeywordRankdingResult)
	{
		return ($this->GetKeywordRankdingResult = $_GetKeywordRankdingResult);
	}
	/**
	 * Get GetKeywordRankdingResult
	 * @return EccMktGoogleTypeGoogleKeywordRanking
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