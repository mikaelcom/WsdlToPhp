<?php
/**
 * Class file for XiReleasesTypeSearchSecurityHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeSearchSecurityHeadlinesResponse
 * @date 08/07/2012
 */
class XiReleasesTypeSearchSecurityHeadlinesResponse extends XiReleasesWsdlClass
{
	/**
	 * The SearchSecurityHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeSecurityHeadlines
	 */
	public $SearchSecurityHeadlinesResult;
	/**
	 * Constructor
	 * @param XiReleasesTypeSecurityHeadlines SearchSecurityHeadlinesResult
	 * @return XiReleasesTypeSearchSecurityHeadlinesResponse
	 */
	public function __construct($_SearchSecurityHeadlinesResult = null)
	{
		parent::__construct(array('SearchSecurityHeadlinesResult'=>$_SearchSecurityHeadlinesResult));
	}
	/**
	 * Set SearchSecurityHeadlinesResult
	 * @param SecurityHeadlines SearchSecurityHeadlinesResult
	 * @return SecurityHeadlines
	 */
	public function setSearchSecurityHeadlinesResult($_SearchSecurityHeadlinesResult)
	{
		return ($this->SearchSecurityHeadlinesResult = $_SearchSecurityHeadlinesResult);
	}
	/**
	 * Get SearchSecurityHeadlinesResult
	 * @return XiReleasesTypeSecurityHeadlines
	 */
	public function getSearchSecurityHeadlinesResult()
	{
		return $this->SearchSecurityHeadlinesResult;
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