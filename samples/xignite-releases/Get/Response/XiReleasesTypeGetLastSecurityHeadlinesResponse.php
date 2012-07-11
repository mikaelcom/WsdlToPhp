<?php
/**
 * Class file for XiReleasesTypeGetLastSecurityHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeGetLastSecurityHeadlinesResponse
 * @date 08/07/2012
 */
class XiReleasesTypeGetLastSecurityHeadlinesResponse extends XiReleasesWsdlClass
{
	/**
	 * The GetLastSecurityHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeSecurityHeadlines
	 */
	public $GetLastSecurityHeadlinesResult;
	/**
	 * Constructor
	 * @param XiReleasesTypeSecurityHeadlines GetLastSecurityHeadlinesResult
	 * @return XiReleasesTypeGetLastSecurityHeadlinesResponse
	 */
	public function __construct($_GetLastSecurityHeadlinesResult = null)
	{
		parent::__construct(array('GetLastSecurityHeadlinesResult'=>$_GetLastSecurityHeadlinesResult));
	}
	/**
	 * Set GetLastSecurityHeadlinesResult
	 * @param SecurityHeadlines GetLastSecurityHeadlinesResult
	 * @return SecurityHeadlines
	 */
	public function setGetLastSecurityHeadlinesResult($_GetLastSecurityHeadlinesResult)
	{
		return ($this->GetLastSecurityHeadlinesResult = $_GetLastSecurityHeadlinesResult);
	}
	/**
	 * Get GetLastSecurityHeadlinesResult
	 * @return XiReleasesTypeSecurityHeadlines
	 */
	public function getGetLastSecurityHeadlinesResult()
	{
		return $this->GetLastSecurityHeadlinesResult;
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