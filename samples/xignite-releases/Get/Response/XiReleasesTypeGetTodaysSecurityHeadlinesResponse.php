<?php
/**
 * Class file for XiReleasesTypeGetTodaysSecurityHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeGetTodaysSecurityHeadlinesResponse
 * @date 08/07/2012
 */
class XiReleasesTypeGetTodaysSecurityHeadlinesResponse extends XiReleasesWsdlClass
{
	/**
	 * The GetTodaysSecurityHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeSecurityHeadlines
	 */
	public $GetTodaysSecurityHeadlinesResult;
	/**
	 * Constructor
	 * @param XiReleasesTypeSecurityHeadlines GetTodaysSecurityHeadlinesResult
	 * @return XiReleasesTypeGetTodaysSecurityHeadlinesResponse
	 */
	public function __construct($_GetTodaysSecurityHeadlinesResult = null)
	{
		parent::__construct(array('GetTodaysSecurityHeadlinesResult'=>$_GetTodaysSecurityHeadlinesResult));
	}
	/**
	 * Set GetTodaysSecurityHeadlinesResult
	 * @param SecurityHeadlines GetTodaysSecurityHeadlinesResult
	 * @return SecurityHeadlines
	 */
	public function setGetTodaysSecurityHeadlinesResult($_GetTodaysSecurityHeadlinesResult)
	{
		return ($this->GetTodaysSecurityHeadlinesResult = $_GetTodaysSecurityHeadlinesResult);
	}
	/**
	 * Get GetTodaysSecurityHeadlinesResult
	 * @return XiReleasesTypeSecurityHeadlines
	 */
	public function getGetTodaysSecurityHeadlinesResult()
	{
		return $this->GetTodaysSecurityHeadlinesResult;
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