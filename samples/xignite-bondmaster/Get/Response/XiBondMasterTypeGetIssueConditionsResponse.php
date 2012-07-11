<?php
/**
 * Class file for XiBondMasterTypeGetIssueConditionsResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeGetIssueConditionsResponse
 * @date 08/07/2012
 */
class XiBondMasterTypeGetIssueConditionsResponse extends XiBondMasterWsdlClass
{
	/**
	 * The GetIssueConditionsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeIssueConditionsComposite
	 */
	public $GetIssueConditionsResult;
	/**
	 * Constructor
	 * @param XiBondMasterTypeIssueConditionsComposite GetIssueConditionsResult
	 * @return XiBondMasterTypeGetIssueConditionsResponse
	 */
	public function __construct($_GetIssueConditionsResult = null)
	{
		parent::__construct(array('GetIssueConditionsResult'=>$_GetIssueConditionsResult));
	}
	/**
	 * Set GetIssueConditionsResult
	 * @param IssueConditionsComposite GetIssueConditionsResult
	 * @return IssueConditionsComposite
	 */
	public function setGetIssueConditionsResult($_GetIssueConditionsResult)
	{
		return ($this->GetIssueConditionsResult = $_GetIssueConditionsResult);
	}
	/**
	 * Get GetIssueConditionsResult
	 * @return XiBondMasterTypeIssueConditionsComposite
	 */
	public function getGetIssueConditionsResult()
	{
		return $this->GetIssueConditionsResult;
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