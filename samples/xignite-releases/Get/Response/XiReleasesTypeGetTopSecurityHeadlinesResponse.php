<?php
/**
 * Class file for XiReleasesTypeGetTopSecurityHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeGetTopSecurityHeadlinesResponse
 * @date 08/07/2012
 */
class XiReleasesTypeGetTopSecurityHeadlinesResponse extends XiReleasesWsdlClass
{
	/**
	 * The GetTopSecurityHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeSecurityHeadlines
	 */
	public $GetTopSecurityHeadlinesResult;
	/**
	 * Constructor
	 * @param XiReleasesTypeSecurityHeadlines GetTopSecurityHeadlinesResult
	 * @return XiReleasesTypeGetTopSecurityHeadlinesResponse
	 */
	public function __construct($_GetTopSecurityHeadlinesResult = null)
	{
		parent::__construct(array('GetTopSecurityHeadlinesResult'=>$_GetTopSecurityHeadlinesResult));
	}
	/**
	 * Set GetTopSecurityHeadlinesResult
	 * @param SecurityHeadlines GetTopSecurityHeadlinesResult
	 * @return SecurityHeadlines
	 */
	public function setGetTopSecurityHeadlinesResult($_GetTopSecurityHeadlinesResult)
	{
		return ($this->GetTopSecurityHeadlinesResult = $_GetTopSecurityHeadlinesResult);
	}
	/**
	 * Get GetTopSecurityHeadlinesResult
	 * @return XiReleasesTypeSecurityHeadlines
	 */
	public function getGetTopSecurityHeadlinesResult()
	{
		return $this->GetTopSecurityHeadlinesResult;
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