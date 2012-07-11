<?php
/**
 * Class file for EccMktYahooTypeGetRelatedCountResponse
 * @date 03/07/2012
 */
/**
 * Class EccMktYahooTypeGetRelatedCountResponse
 * @date 03/07/2012
 */
class EccMktYahooTypeGetRelatedCountResponse extends EccMktYahooWsdlClass
{
	/**
	 * The GetRelatedCountResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccMktYahooTypeYahooCount
	 */
	public $GetRelatedCountResult;
	/**
	 * Constructor
	 * @param EccMktYahooTypeYahooCount GetRelatedCountResult
	 * @return EccMktYahooTypeGetRelatedCountResponse
	 */
	public function __construct($_GetRelatedCountResult = null)
	{
		parent::__construct(array('GetRelatedCountResult'=>$_GetRelatedCountResult));
	}
	/**
	 * Set GetRelatedCountResult
	 * @param YahooCount GetRelatedCountResult
	 * @return YahooCount
	 */
	public function setGetRelatedCountResult($_GetRelatedCountResult)
	{
		return ($this->GetRelatedCountResult = $_GetRelatedCountResult);
	}
	/**
	 * Get GetRelatedCountResult
	 * @return EccMktYahooTypeYahooCount
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