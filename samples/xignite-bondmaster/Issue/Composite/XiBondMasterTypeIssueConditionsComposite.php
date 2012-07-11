<?php
/**
 * Class file for XiBondMasterTypeIssueConditionsComposite
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeIssueConditionsComposite
 * @date 08/07/2012
 */
class XiBondMasterTypeIssueConditionsComposite extends XiBondMasterTypeCommon
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
	 * The IssueConditions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeIssueConditions
	 */
	public $IssueConditions;
	/**
	 * Constructor
	 * @param XiBondMasterTypeInstrumentIdentifier InstrumentIdentifier
	 * @param XiBondMasterTypeIssueConditions IssueConditions
	 * @return XiBondMasterTypeIssueConditionsComposite
	 */
	public function __construct($_InstrumentIdentifier = null,$_IssueConditions = null)
	{
		XiBondMasterWsdlClass::__construct(array('InstrumentIdentifier'=>$_InstrumentIdentifier,'IssueConditions'=>$_IssueConditions));
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
	 * Set IssueConditions
	 * @param IssueConditions IssueConditions
	 * @return IssueConditions
	 */
	public function setIssueConditions($_IssueConditions)
	{
		return ($this->IssueConditions = $_IssueConditions);
	}
	/**
	 * Get IssueConditions
	 * @return XiBondMasterTypeIssueConditions
	 */
	public function getIssueConditions()
	{
		return $this->IssueConditions;
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