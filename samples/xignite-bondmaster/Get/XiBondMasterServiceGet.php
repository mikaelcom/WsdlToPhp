<?php
/**
 * Class file for XiBondMasterServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterServiceGet
 * @date 08/07/2012
 */
class XiBondMasterServiceGet extends XiBondMasterWsdlClass
{
	/**
	 * Method to call GetBondDescription
	 * Meta informations :
	 * 	- documentation : This web method provides basic details of a particular Bond matched by the identifier provided in the input. Supported identifiers include CUSIP, ISIN and Valoren number.
	 * @uses XiBondMasterWsdlClass::getSoapClient()
	 * @uses XiBondMasterWsdlClass::setResult()
	 * @uses XiBondMasterWsdlClass::getResult()
	 * @uses XiBondMasterWsdlClass::saveLastError()
	 * @uses XiBondMasterTypeGetBondDescription::getIdentifier()
	 * @uses XiBondMasterTypeGetBondDescription::getIdentifierType()
	 * @param XiBondMasterTypeGetBondDescription GetBondDescription
	 * @return XiBondMasterTypeGetBondDescriptionResponse
	 */
	public function GetBondDescription(XiBondMasterTypeGetBondDescription $_XiBondMasterTypeGetBondDescription)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBondDescription(array('Identifier'=>$_XiBondMasterTypeGetBondDescription->getIdentifier(),'IdentifierType'=>$_XiBondMasterTypeGetBondDescription->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEarlyRedemptionSchedule
	 * Meta informations :
	 * 	- documentation : This web method provides information about provisions in the bond issue about possible early partial/total repayments of the capital.
	 * @uses XiBondMasterWsdlClass::getSoapClient()
	 * @uses XiBondMasterWsdlClass::setResult()
	 * @uses XiBondMasterWsdlClass::getResult()
	 * @uses XiBondMasterWsdlClass::saveLastError()
	 * @uses XiBondMasterTypeGetEarlyRedemptionSchedule::getIdentifier()
	 * @uses XiBondMasterTypeGetEarlyRedemptionSchedule::getIdentifierType()
	 * @param XiBondMasterTypeGetEarlyRedemptionSchedule GetEarlyRedemptionSchedule
	 * @return XiBondMasterTypeGetEarlyRedemptionScheduleResponse
	 */
	public function GetEarlyRedemptionSchedule(XiBondMasterTypeGetEarlyRedemptionSchedule $_XiBondMasterTypeGetEarlyRedemptionSchedule)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEarlyRedemptionSchedule(array('Identifier'=>$_XiBondMasterTypeGetEarlyRedemptionSchedule->getIdentifier(),'IdentifierType'=>$_XiBondMasterTypeGetEarlyRedemptionSchedule->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCapitalStructure
	 * Meta informations :
	 * 	- documentation : This web method provides information about capital structure of the bond issue.
	 * @uses XiBondMasterWsdlClass::getSoapClient()
	 * @uses XiBondMasterWsdlClass::setResult()
	 * @uses XiBondMasterWsdlClass::getResult()
	 * @uses XiBondMasterWsdlClass::saveLastError()
	 * @uses XiBondMasterTypeGetCapitalStructure::getIdentifier()
	 * @uses XiBondMasterTypeGetCapitalStructure::getIdentifierType()
	 * @param XiBondMasterTypeGetCapitalStructure GetCapitalStructure
	 * @return XiBondMasterTypeGetCapitalStructureResponse
	 */
	public function GetCapitalStructure(XiBondMasterTypeGetCapitalStructure $_XiBondMasterTypeGetCapitalStructure)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCapitalStructure(array('Identifier'=>$_XiBondMasterTypeGetCapitalStructure->getIdentifier(),'IdentifierType'=>$_XiBondMasterTypeGetCapitalStructure->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIssueManagersAgents
	 * Meta informations :
	 * 	- documentation : This service provides bond's issue manager agents.
	 * @uses XiBondMasterWsdlClass::getSoapClient()
	 * @uses XiBondMasterWsdlClass::setResult()
	 * @uses XiBondMasterWsdlClass::getResult()
	 * @uses XiBondMasterWsdlClass::saveLastError()
	 * @uses XiBondMasterTypeGetIssueManagersAgents::getIdentifier()
	 * @uses XiBondMasterTypeGetIssueManagersAgents::getIdentifierType()
	 * @param XiBondMasterTypeGetIssueManagersAgents GetIssueManagersAgents
	 * @return XiBondMasterTypeGetIssueManagersAgentsResponse
	 */
	public function GetIssueManagersAgents(XiBondMasterTypeGetIssueManagersAgents $_XiBondMasterTypeGetIssueManagersAgents)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIssueManagersAgents(array('Identifier'=>$_XiBondMasterTypeGetIssueManagersAgents->getIdentifier(),'IdentifierType'=>$_XiBondMasterTypeGetIssueManagersAgents->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSinkingFundSchedule
	 * Meta informations :
	 * 	- documentation : This service provides schedule of planned sinking fund events.
	 * @uses XiBondMasterWsdlClass::getSoapClient()
	 * @uses XiBondMasterWsdlClass::setResult()
	 * @uses XiBondMasterWsdlClass::getResult()
	 * @uses XiBondMasterWsdlClass::saveLastError()
	 * @uses XiBondMasterTypeGetSinkingFundSchedule::getIdentifier()
	 * @uses XiBondMasterTypeGetSinkingFundSchedule::getIdentifierType()
	 * @param XiBondMasterTypeGetSinkingFundSchedule GetSinkingFundSchedule
	 * @return XiBondMasterTypeGetSinkingFundScheduleResponse
	 */
	public function GetSinkingFundSchedule(XiBondMasterTypeGetSinkingFundSchedule $_XiBondMasterTypeGetSinkingFundSchedule)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSinkingFundSchedule(array('Identifier'=>$_XiBondMasterTypeGetSinkingFundSchedule->getIdentifier(),'IdentifierType'=>$_XiBondMasterTypeGetSinkingFundSchedule->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIssueConditions
	 * Meta informations :
	 * 	- documentation : This service provides terms of the Bond provided by the Issuer at the time of issuance.
	 * @uses XiBondMasterWsdlClass::getSoapClient()
	 * @uses XiBondMasterWsdlClass::setResult()
	 * @uses XiBondMasterWsdlClass::getResult()
	 * @uses XiBondMasterWsdlClass::saveLastError()
	 * @uses XiBondMasterTypeGetIssueConditions::getIdentifier()
	 * @uses XiBondMasterTypeGetIssueConditions::getIdentifierType()
	 * @param XiBondMasterTypeGetIssueConditions GetIssueConditions
	 * @return XiBondMasterTypeGetIssueConditionsResponse
	 */
	public function GetIssueConditions(XiBondMasterTypeGetIssueConditions $_XiBondMasterTypeGetIssueConditions)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIssueConditions(array('Identifier'=>$_XiBondMasterTypeGetIssueConditions->getIdentifier(),'IdentifierType'=>$_XiBondMasterTypeGetIssueConditions->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return XiBondMasterTypeGetIssueConditionsResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>