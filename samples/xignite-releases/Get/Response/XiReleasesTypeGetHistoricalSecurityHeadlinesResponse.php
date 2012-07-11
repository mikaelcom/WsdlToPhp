<?php
/**
 * Class file for XiReleasesTypeGetHistoricalSecurityHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeGetHistoricalSecurityHeadlinesResponse
 * @date 08/07/2012
 */
class XiReleasesTypeGetHistoricalSecurityHeadlinesResponse extends XiReleasesWsdlClass
{
	/**
	 * The GetHistoricalSecurityHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeSecurityHeadlines
	 */
	public $GetHistoricalSecurityHeadlinesResult;
	/**
	 * Constructor
	 * @param XiReleasesTypeSecurityHeadlines GetHistoricalSecurityHeadlinesResult
	 * @return XiReleasesTypeGetHistoricalSecurityHeadlinesResponse
	 */
	public function __construct($_GetHistoricalSecurityHeadlinesResult = null)
	{
		parent::__construct(array('GetHistoricalSecurityHeadlinesResult'=>$_GetHistoricalSecurityHeadlinesResult));
	}
	/**
	 * Set GetHistoricalSecurityHeadlinesResult
	 * @param SecurityHeadlines GetHistoricalSecurityHeadlinesResult
	 * @return SecurityHeadlines
	 */
	public function setGetHistoricalSecurityHeadlinesResult($_GetHistoricalSecurityHeadlinesResult)
	{
		return ($this->GetHistoricalSecurityHeadlinesResult = $_GetHistoricalSecurityHeadlinesResult);
	}
	/**
	 * Get GetHistoricalSecurityHeadlinesResult
	 * @return XiReleasesTypeSecurityHeadlines
	 */
	public function getGetHistoricalSecurityHeadlinesResult()
	{
		return $this->GetHistoricalSecurityHeadlinesResult;
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