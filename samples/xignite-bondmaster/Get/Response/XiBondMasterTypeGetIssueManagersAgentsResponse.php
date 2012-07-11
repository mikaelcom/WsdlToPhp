<?php
/**
 * Class file for XiBondMasterTypeGetIssueManagersAgentsResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeGetIssueManagersAgentsResponse
 * @date 08/07/2012
 */
class XiBondMasterTypeGetIssueManagersAgentsResponse extends XiBondMasterWsdlClass
{
	/**
	 * The GetIssueManagersAgentsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeIssueManagersAgentsComposite
	 */
	public $GetIssueManagersAgentsResult;
	/**
	 * Constructor
	 * @param XiBondMasterTypeIssueManagersAgentsComposite GetIssueManagersAgentsResult
	 * @return XiBondMasterTypeGetIssueManagersAgentsResponse
	 */
	public function __construct($_GetIssueManagersAgentsResult = null)
	{
		parent::__construct(array('GetIssueManagersAgentsResult'=>$_GetIssueManagersAgentsResult));
	}
	/**
	 * Set GetIssueManagersAgentsResult
	 * @param IssueManagersAgentsComposite GetIssueManagersAgentsResult
	 * @return IssueManagersAgentsComposite
	 */
	public function setGetIssueManagersAgentsResult($_GetIssueManagersAgentsResult)
	{
		return ($this->GetIssueManagersAgentsResult = $_GetIssueManagersAgentsResult);
	}
	/**
	 * Get GetIssueManagersAgentsResult
	 * @return XiBondMasterTypeIssueManagersAgentsComposite
	 */
	public function getGetIssueManagersAgentsResult()
	{
		return $this->GetIssueManagersAgentsResult;
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