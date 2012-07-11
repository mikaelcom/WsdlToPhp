<?php
/**
 * Class file for GGAdwordsTypePaging
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypePaging
 * Documentation : Specifies the page of results to return in the response. A page is specified by the result position to start at and the maximum number of results to return.
 * @date 03/07/2012
 */
class GGAdwordsTypePaging extends GGAdwordsWsdlClass
{
	/**
	 * The startIndex
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Index of the first result to return in this page. <span class="constraint InRange">This field must be greater than or equal to 0.</span>
	 * @var int
	 */
	public $startIndex;
	/**
	 * The numberResults
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Maximum number of results to return in this page. Set this to a reasonable value to limit the number of results returned per page. <span class="constraint InRange">This field must be greater than or equal to 0.</span>
	 * @var int
	 */
	public $numberResults;
	/**
	 * Constructor
	 * @param int startIndex
	 * @param int numberResults
	 * @return GGAdwordsTypePaging
	 */
	public function __construct($_startIndex = null,$_numberResults = null)
	{
		parent::__construct(array('startIndex'=>$_startIndex,'numberResults'=>$_numberResults));
	}
	/**
	 * Set startIndex
	 * @param int startIndex
	 * @return int
	 */
	public function setStartIndex($_startIndex)
	{
		return ($this->startIndex = $_startIndex);
	}
	/**
	 * Get startIndex
	 * @return int
	 */
	public function getStartIndex()
	{
		return $this->startIndex;
	}
	/**
	 * Set numberResults
	 * @param int numberResults
	 * @return int
	 */
	public function setNumberResults($_numberResults)
	{
		return ($this->numberResults = $_numberResults);
	}
	/**
	 * Get numberResults
	 * @return int
	 */
	public function getNumberResults()
	{
		return $this->numberResults;
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