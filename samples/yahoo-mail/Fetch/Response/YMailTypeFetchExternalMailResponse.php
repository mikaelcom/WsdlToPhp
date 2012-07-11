<?php
/**
 * Class file for YMailTypeFetchExternalMailResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeFetchExternalMailResponse
 * @date 02/07/2012
 */
class YMailTypeFetchExternalMailResponse extends YMailWsdlClass
{
	/**
	 * The fetchResults
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeFetchResult
	 */
	public $fetchResults;
	/**
	 * Constructor
	 * @param YMailTypeFetchResult fetchResults
	 * @return YMailTypeFetchExternalMailResponse
	 */
	public function __construct($_fetchResults)
	{
		parent::__construct(array('fetchResults'=>$_fetchResults));
	}
	/**
	 * Set fetchResults
	 * @param FetchResult fetchResults
	 * @return FetchResult
	 */
	public function setFetchResults($_fetchResults)
	{
		return ($this->fetchResults = $_fetchResults);
	}
	/**
	 * Get fetchResults
	 * @return YMailTypeFetchResult
	 */
	public function getFetchResults()
	{
		return $this->fetchResults;
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