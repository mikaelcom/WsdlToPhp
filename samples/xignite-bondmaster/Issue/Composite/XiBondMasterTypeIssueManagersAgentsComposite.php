<?php
/**
 * Class file for XiBondMasterTypeIssueManagersAgentsComposite
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeIssueManagersAgentsComposite
 * @date 08/07/2012
 */
class XiBondMasterTypeIssueManagersAgentsComposite extends XiBondMasterTypeCommon
{
	/**
	 * The InstrumentIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeInstrumentIdentifier
	 */
	public $InstrumentIdentifier;
	/**
	 * The IssueManagerAgents
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeArrayOfIssueManagerAgent
	 */
	public $IssueManagerAgents;
	/**
	 * Constructor
	 * @param XiBondMasterTypeInstrumentIdentifier InstrumentIdentifier
	 * @param XiBondMasterTypeArrayOfIssueManagerAgent IssueManagerAgents
	 * @return XiBondMasterTypeIssueManagersAgentsComposite
	 */
	public function __construct($_InstrumentIdentifier = null,$_IssueManagerAgents = null)
	{
		XiBondMasterWsdlClass::__construct(array('InstrumentIdentifier'=>$_InstrumentIdentifier,'IssueManagerAgents'=>new XiBondMasterTypeArrayOfIssueManagerAgent($_IssueManagerAgents)));
	}
	/**
	 * Set InstrumentIdentifier
	 * @param InstrumentIdentifier InstrumentIdentifier
	 * @return InstrumentIdentifier
	 */
	public function setInstrumentIdentifier($_InstrumentIdentifier)
	{
		return ($this->InstrumentIdentifier = $_InstrumentIdentifier);
	}
	/**
	 * Get InstrumentIdentifier
	 * @return XiBondMasterTypeInstrumentIdentifier
	 */
	public function getInstrumentIdentifier()
	{
		return $this->InstrumentIdentifier;
	}
	/**
	 * Set IssueManagerAgents
	 * @param ArrayOfIssueManagerAgent IssueManagerAgents
	 * @return ArrayOfIssueManagerAgent
	 */
	public function setIssueManagerAgents($_IssueManagerAgents)
	{
		return ($this->IssueManagerAgents = $_IssueManagerAgents);
	}
	/**
	 * Get IssueManagerAgents
	 * @return XiBondMasterTypeArrayOfIssueManagerAgent
	 */
	public function getIssueManagerAgents()
	{
		return $this->IssueManagerAgents;
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