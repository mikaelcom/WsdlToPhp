<?php
/**
 * Class file for XiInsiderServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiInsiderServiceGet
 * @date 08/07/2012
 */
class XiInsiderServiceGet extends XiInsiderWsdlClass
{
	/**
	 * Method to call GetOwnershipForm
	 * Meta informations :
	 * 	- documentation : Retrieve an ownership file (Forms 3, 4 or 5) by Url.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetOwnershipForm::getHtmlFileUrl()
	 * @param XiInsiderTypeGetOwnershipForm GetOwnershipForm
	 * @return XiInsiderTypeGetOwnershipFormResponse
	 */
	public function GetOwnershipForm(XiInsiderTypeGetOwnershipForm $_XiInsiderTypeGetOwnershipForm)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOwnershipForm(array('HtmlFileUrl'=>$_XiInsiderTypeGetOwnershipForm->getHtmlFileUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetInsiders
	 * Meta informations :
	 * 	- documentation : Get insiders by cik, name or address.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetInsiders::getInsiderCIK()
	 * @uses XiInsiderTypeGetInsiders::getInsiderName()
	 * @uses XiInsiderTypeGetInsiders::getInsiderAddress()
	 * @param XiInsiderTypeGetInsiders GetInsiders
	 * @return XiInsiderTypeGetInsidersResponse
	 */
	public function GetInsiders(XiInsiderTypeGetInsiders $_XiInsiderTypeGetInsiders)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetInsiders(array('InsiderCIK'=>$_XiInsiderTypeGetInsiders->getInsiderCIK(),'InsiderName'=>$_XiInsiderTypeGetInsiders->getInsiderName(),'InsiderAddress'=>$_XiInsiderTypeGetInsiders->getInsiderAddress())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRoles
	 * Meta informations :
	 * 	- documentation : Search an insider by name and address.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetRoles::getInsiderCIK()
	 * @uses XiInsiderTypeGetRoles::getInsiderName()
	 * @uses XiInsiderTypeGetRoles::getInsiderAddress()
	 * @param XiInsiderTypeGetRoles GetRoles
	 * @return XiInsiderTypeGetRolesResponse
	 */
	public function GetRoles(XiInsiderTypeGetRoles $_XiInsiderTypeGetRoles)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRoles(array('InsiderCIK'=>$_XiInsiderTypeGetRoles->getInsiderCIK(),'InsiderName'=>$_XiInsiderTypeGetRoles->getInsiderName(),'InsiderAddress'=>$_XiInsiderTypeGetRoles->getInsiderAddress())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRole
	 * Meta informations :
	 * 	- documentation : Search an insider by name and address and by the name or identifier of a firm.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetRole::getInsiderCIK()
	 * @uses XiInsiderTypeGetRole::getInsiderName()
	 * @uses XiInsiderTypeGetRole::getInsiderAddress()
	 * @uses XiInsiderTypeGetRole::getIssuerIdentifier()
	 * @uses XiInsiderTypeGetRole::getIssuerIdentifierType()
	 * @uses XiInsiderTypeGetRole::getIssuerName()
	 * @param XiInsiderTypeGetRole GetRole
	 * @return XiInsiderTypeGetRoleResponse
	 */
	public function GetRole(XiInsiderTypeGetRole $_XiInsiderTypeGetRole)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRole(array('InsiderCIK'=>$_XiInsiderTypeGetRole->getInsiderCIK(),'InsiderName'=>$_XiInsiderTypeGetRole->getInsiderName(),'InsiderAddress'=>$_XiInsiderTypeGetRole->getInsiderAddress(),'IssuerIdentifier'=>$_XiInsiderTypeGetRole->getIssuerIdentifier(),'IssuerIdentifierType'=>$_XiInsiderTypeGetRole->getIssuerIdentifierType(),'IssuerName'=>$_XiInsiderTypeGetRole->getIssuerName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRoster
	 * Meta informations :
	 * 	- documentation : Returns the current roster of insider for a firm.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetRoster::getIssuerIdentifier()
	 * @uses XiInsiderTypeGetRoster::getIssuerIdentifierType()
	 * @param XiInsiderTypeGetRoster GetRoster
	 * @return XiInsiderTypeGetRosterResponse
	 */
	public function GetRoster(XiInsiderTypeGetRoster $_XiInsiderTypeGetRoster)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRoster(array('IssuerIdentifier'=>$_XiInsiderTypeGetRoster->getIssuerIdentifier(),'IssuerIdentifierType'=>$_XiInsiderTypeGetRoster->getIssuerIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDirectors
	 * Meta informations :
	 * 	- documentation : Returns the directors for a firm.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetDirectors::getIssuerIdentifier()
	 * @uses XiInsiderTypeGetDirectors::getIssuerIdentifierType()
	 * @param XiInsiderTypeGetDirectors GetDirectors
	 * @return XiInsiderTypeGetDirectorsResponse
	 */
	public function GetDirectors(XiInsiderTypeGetDirectors $_XiInsiderTypeGetDirectors)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDirectors(array('IssuerIdentifier'=>$_XiInsiderTypeGetDirectors->getIssuerIdentifier(),'IssuerIdentifierType'=>$_XiInsiderTypeGetDirectors->getIssuerIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOfficers
	 * Meta informations :
	 * 	- documentation : Returns the officers for a firm.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetOfficers::getIssuerIdentifier()
	 * @uses XiInsiderTypeGetOfficers::getIssuerIdentifierType()
	 * @param XiInsiderTypeGetOfficers GetOfficers
	 * @return XiInsiderTypeGetOfficersResponse
	 */
	public function GetOfficers(XiInsiderTypeGetOfficers $_XiInsiderTypeGetOfficers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOfficers(array('IssuerIdentifier'=>$_XiInsiderTypeGetOfficers->getIssuerIdentifier(),'IssuerIdentifierType'=>$_XiInsiderTypeGetOfficers->getIssuerIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCEO
	 * Meta informations :
	 * 	- documentation : Returns the CEO for a firm.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetCEO::getIssuerIdentifier()
	 * @uses XiInsiderTypeGetCEO::getIssuerIdentifierType()
	 * @param XiInsiderTypeGetCEO GetCEO
	 * @return XiInsiderTypeGetCEOResponse
	 */
	public function GetCEO(XiInsiderTypeGetCEO $_XiInsiderTypeGetCEO)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCEO(array('IssuerIdentifier'=>$_XiInsiderTypeGetCEO->getIssuerIdentifier(),'IssuerIdentifierType'=>$_XiInsiderTypeGetCEO->getIssuerIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIssuerOwnerships
	 * Meta informations :
	 * 	- documentation : Returns the current ownerships for a firm.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetIssuerOwnerships::getIssuerIdentifier()
	 * @uses XiInsiderTypeGetIssuerOwnerships::getIssuerIdentifierType()
	 * @param XiInsiderTypeGetIssuerOwnerships GetIssuerOwnerships
	 * @return XiInsiderTypeGetIssuerOwnershipsResponse
	 */
	public function GetIssuerOwnerships(XiInsiderTypeGetIssuerOwnerships $_XiInsiderTypeGetIssuerOwnerships)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIssuerOwnerships(array('IssuerIdentifier'=>$_XiInsiderTypeGetIssuerOwnerships->getIssuerIdentifier(),'IssuerIdentifierType'=>$_XiInsiderTypeGetIssuerOwnerships->getIssuerIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetInsiderOwnership
	 * Meta informations :
	 * 	- documentation : Returns current ownership level for an insider and a firm.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetInsiderOwnership::getInsiderCIK()
	 * @uses XiInsiderTypeGetInsiderOwnership::getInsiderName()
	 * @uses XiInsiderTypeGetInsiderOwnership::getInsiderAddress()
	 * @uses XiInsiderTypeGetInsiderOwnership::getIssuerIdentifier()
	 * @uses XiInsiderTypeGetInsiderOwnership::getIssuerIdentifierType()
	 * @param XiInsiderTypeGetInsiderOwnership GetInsiderOwnership
	 * @return XiInsiderTypeGetInsiderOwnershipResponse
	 */
	public function GetInsiderOwnership(XiInsiderTypeGetInsiderOwnership $_XiInsiderTypeGetInsiderOwnership)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetInsiderOwnership(array('InsiderCIK'=>$_XiInsiderTypeGetInsiderOwnership->getInsiderCIK(),'InsiderName'=>$_XiInsiderTypeGetInsiderOwnership->getInsiderName(),'InsiderAddress'=>$_XiInsiderTypeGetInsiderOwnership->getInsiderAddress(),'IssuerIdentifier'=>$_XiInsiderTypeGetInsiderOwnership->getIssuerIdentifier(),'IssuerIdentifierType'=>$_XiInsiderTypeGetInsiderOwnership->getIssuerIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetInsiderOwnerships
	 * Meta informations :
	 * 	- documentation : Returns current ownership level for an insider across all firms.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetInsiderOwnerships::getInsiderCIK()
	 * @uses XiInsiderTypeGetInsiderOwnerships::getInsiderName()
	 * @uses XiInsiderTypeGetInsiderOwnerships::getInsiderAddress()
	 * @param XiInsiderTypeGetInsiderOwnerships GetInsiderOwnerships
	 * @return XiInsiderTypeGetInsiderOwnershipsResponse
	 */
	public function GetInsiderOwnerships(XiInsiderTypeGetInsiderOwnerships $_XiInsiderTypeGetInsiderOwnerships)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetInsiderOwnerships(array('InsiderCIK'=>$_XiInsiderTypeGetInsiderOwnerships->getInsiderCIK(),'InsiderName'=>$_XiInsiderTypeGetInsiderOwnerships->getInsiderName(),'InsiderAddress'=>$_XiInsiderTypeGetInsiderOwnerships->getInsiderAddress())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllInsiderTransactions
	 * Meta informations :
	 * 	- documentation : Get transactions for an insider across all firms.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetAllInsiderTransactions::getInsiderCIK()
	 * @uses XiInsiderTypeGetAllInsiderTransactions::getInsiderName()
	 * @uses XiInsiderTypeGetAllInsiderTransactions::getInsiderAddress()
	 * @uses XiInsiderTypeGetAllInsiderTransactions::getFromDate()
	 * @uses XiInsiderTypeGetAllInsiderTransactions::getToDate()
	 * @uses XiInsiderTypeGetAllInsiderTransactions::getTransactionCode()
	 * @uses XiInsiderTypeGetAllInsiderTransactions::getSecurityType()
	 * @uses XiInsiderTypeGetAllInsiderTransactions::getOwnershipType()
	 * @param XiInsiderTypeGetAllInsiderTransactions GetAllInsiderTransactions
	 * @return XiInsiderTypeGetAllInsiderTransactionsResponse
	 */
	public function GetAllInsiderTransactions(XiInsiderTypeGetAllInsiderTransactions $_XiInsiderTypeGetAllInsiderTransactions)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllInsiderTransactions(array('InsiderCIK'=>$_XiInsiderTypeGetAllInsiderTransactions->getInsiderCIK(),'InsiderName'=>$_XiInsiderTypeGetAllInsiderTransactions->getInsiderName(),'InsiderAddress'=>$_XiInsiderTypeGetAllInsiderTransactions->getInsiderAddress(),'FromDate'=>$_XiInsiderTypeGetAllInsiderTransactions->getFromDate(),'ToDate'=>$_XiInsiderTypeGetAllInsiderTransactions->getToDate(),'TransactionCode'=>$_XiInsiderTypeGetAllInsiderTransactions->getTransactionCode(),'SecurityType'=>$_XiInsiderTypeGetAllInsiderTransactions->getSecurityType(),'OwnershipType'=>$_XiInsiderTypeGetAllInsiderTransactions->getOwnershipType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetInsiderTransactions
	 * Meta informations :
	 * 	- documentation : Get transactions for an insider within one firm.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetInsiderTransactions::getInsiderCIK()
	 * @uses XiInsiderTypeGetInsiderTransactions::getInsiderName()
	 * @uses XiInsiderTypeGetInsiderTransactions::getInsiderAddress()
	 * @uses XiInsiderTypeGetInsiderTransactions::getIssuerIdentifier()
	 * @uses XiInsiderTypeGetInsiderTransactions::getIssuerIdentifierType()
	 * @uses XiInsiderTypeGetInsiderTransactions::getFromDate()
	 * @uses XiInsiderTypeGetInsiderTransactions::getToDate()
	 * @uses XiInsiderTypeGetInsiderTransactions::getTransactionCode()
	 * @uses XiInsiderTypeGetInsiderTransactions::getSecurityType()
	 * @uses XiInsiderTypeGetInsiderTransactions::getOwnershipType()
	 * @param XiInsiderTypeGetInsiderTransactions GetInsiderTransactions
	 * @return XiInsiderTypeGetInsiderTransactionsResponse
	 */
	public function GetInsiderTransactions(XiInsiderTypeGetInsiderTransactions $_XiInsiderTypeGetInsiderTransactions)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetInsiderTransactions(array('InsiderCIK'=>$_XiInsiderTypeGetInsiderTransactions->getInsiderCIK(),'InsiderName'=>$_XiInsiderTypeGetInsiderTransactions->getInsiderName(),'InsiderAddress'=>$_XiInsiderTypeGetInsiderTransactions->getInsiderAddress(),'IssuerIdentifier'=>$_XiInsiderTypeGetInsiderTransactions->getIssuerIdentifier(),'IssuerIdentifierType'=>$_XiInsiderTypeGetInsiderTransactions->getIssuerIdentifierType(),'FromDate'=>$_XiInsiderTypeGetInsiderTransactions->getFromDate(),'ToDate'=>$_XiInsiderTypeGetInsiderTransactions->getToDate(),'TransactionCode'=>$_XiInsiderTypeGetInsiderTransactions->getTransactionCode(),'SecurityType'=>$_XiInsiderTypeGetInsiderTransactions->getSecurityType(),'OwnershipType'=>$_XiInsiderTypeGetInsiderTransactions->getOwnershipType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetInsiderTransactionSummary
	 * Meta informations :
	 * 	- documentation : Get transactions for an insider within one firm.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetInsiderTransactionSummary::getInsiderCIK()
	 * @uses XiInsiderTypeGetInsiderTransactionSummary::getInsiderName()
	 * @uses XiInsiderTypeGetInsiderTransactionSummary::getInsiderAddress()
	 * @uses XiInsiderTypeGetInsiderTransactionSummary::getIssuerIdentifier()
	 * @uses XiInsiderTypeGetInsiderTransactionSummary::getIssuerIdentifierType()
	 * @uses XiInsiderTypeGetInsiderTransactionSummary::getFromDate()
	 * @uses XiInsiderTypeGetInsiderTransactionSummary::getToDate()
	 * @uses XiInsiderTypeGetInsiderTransactionSummary::getTransactionCode()
	 * @uses XiInsiderTypeGetInsiderTransactionSummary::getSecurityType()
	 * @uses XiInsiderTypeGetInsiderTransactionSummary::getOwnershipType()
	 * @param XiInsiderTypeGetInsiderTransactionSummary GetInsiderTransactionSummary
	 * @return XiInsiderTypeGetInsiderTransactionSummaryResponse
	 */
	public function GetInsiderTransactionSummary(XiInsiderTypeGetInsiderTransactionSummary $_XiInsiderTypeGetInsiderTransactionSummary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetInsiderTransactionSummary(array('InsiderCIK'=>$_XiInsiderTypeGetInsiderTransactionSummary->getInsiderCIK(),'InsiderName'=>$_XiInsiderTypeGetInsiderTransactionSummary->getInsiderName(),'InsiderAddress'=>$_XiInsiderTypeGetInsiderTransactionSummary->getInsiderAddress(),'IssuerIdentifier'=>$_XiInsiderTypeGetInsiderTransactionSummary->getIssuerIdentifier(),'IssuerIdentifierType'=>$_XiInsiderTypeGetInsiderTransactionSummary->getIssuerIdentifierType(),'FromDate'=>$_XiInsiderTypeGetInsiderTransactionSummary->getFromDate(),'ToDate'=>$_XiInsiderTypeGetInsiderTransactionSummary->getToDate(),'TransactionCode'=>$_XiInsiderTypeGetInsiderTransactionSummary->getTransactionCode(),'SecurityType'=>$_XiInsiderTypeGetInsiderTransactionSummary->getSecurityType(),'OwnershipType'=>$_XiInsiderTypeGetInsiderTransactionSummary->getOwnershipType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIssuerTransactionSummary
	 * Meta informations :
	 * 	- documentation : Get transactions for an insider within one firm.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetIssuerTransactionSummary::getIssuerIdentifier()
	 * @uses XiInsiderTypeGetIssuerTransactionSummary::getIssuerIdentifierType()
	 * @uses XiInsiderTypeGetIssuerTransactionSummary::getFromDate()
	 * @uses XiInsiderTypeGetIssuerTransactionSummary::getToDate()
	 * @uses XiInsiderTypeGetIssuerTransactionSummary::getTransactionCode()
	 * @uses XiInsiderTypeGetIssuerTransactionSummary::getSecurityType()
	 * @uses XiInsiderTypeGetIssuerTransactionSummary::getOwnershipType()
	 * @param XiInsiderTypeGetIssuerTransactionSummary GetIssuerTransactionSummary
	 * @return XiInsiderTypeGetIssuerTransactionSummaryResponse
	 */
	public function GetIssuerTransactionSummary(XiInsiderTypeGetIssuerTransactionSummary $_XiInsiderTypeGetIssuerTransactionSummary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIssuerTransactionSummary(array('IssuerIdentifier'=>$_XiInsiderTypeGetIssuerTransactionSummary->getIssuerIdentifier(),'IssuerIdentifierType'=>$_XiInsiderTypeGetIssuerTransactionSummary->getIssuerIdentifierType(),'FromDate'=>$_XiInsiderTypeGetIssuerTransactionSummary->getFromDate(),'ToDate'=>$_XiInsiderTypeGetIssuerTransactionSummary->getToDate(),'TransactionCode'=>$_XiInsiderTypeGetIssuerTransactionSummary->getTransactionCode(),'SecurityType'=>$_XiInsiderTypeGetIssuerTransactionSummary->getSecurityType(),'OwnershipType'=>$_XiInsiderTypeGetIssuerTransactionSummary->getOwnershipType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIssuerTransactions
	 * Meta informations :
	 * 	- documentation : Returns all insider transactions for a single firm.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetIssuerTransactions::getIssuerIdentifier()
	 * @uses XiInsiderTypeGetIssuerTransactions::getIssuerIdentifierType()
	 * @uses XiInsiderTypeGetIssuerTransactions::getFromDate()
	 * @uses XiInsiderTypeGetIssuerTransactions::getToDate()
	 * @uses XiInsiderTypeGetIssuerTransactions::getTransactionCode()
	 * @uses XiInsiderTypeGetIssuerTransactions::getSecurityType()
	 * @uses XiInsiderTypeGetIssuerTransactions::getOwnershipType()
	 * @param XiInsiderTypeGetIssuerTransactions GetIssuerTransactions
	 * @return XiInsiderTypeGetIssuerTransactionsResponse
	 */
	public function GetIssuerTransactions(XiInsiderTypeGetIssuerTransactions $_XiInsiderTypeGetIssuerTransactions)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIssuerTransactions(array('IssuerIdentifier'=>$_XiInsiderTypeGetIssuerTransactions->getIssuerIdentifier(),'IssuerIdentifierType'=>$_XiInsiderTypeGetIssuerTransactions->getIssuerIdentifierType(),'FromDate'=>$_XiInsiderTypeGetIssuerTransactions->getFromDate(),'ToDate'=>$_XiInsiderTypeGetIssuerTransactions->getToDate(),'TransactionCode'=>$_XiInsiderTypeGetIssuerTransactions->getTransactionCode(),'SecurityType'=>$_XiInsiderTypeGetIssuerTransactions->getSecurityType(),'OwnershipType'=>$_XiInsiderTypeGetIssuerTransactions->getOwnershipType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllIssuerTransactions
	 * Meta informations :
	 * 	- documentation : Returns all insider transactions for a all firms for a date.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetAllIssuerTransactions::getOnDate()
	 * @uses XiInsiderTypeGetAllIssuerTransactions::getTransactionCode()
	 * @uses XiInsiderTypeGetAllIssuerTransactions::getSecurityType()
	 * @uses XiInsiderTypeGetAllIssuerTransactions::getOwnershipType()
	 * @param XiInsiderTypeGetAllIssuerTransactions GetAllIssuerTransactions
	 * @return XiInsiderTypeGetAllIssuerTransactionsResponse
	 */
	public function GetAllIssuerTransactions(XiInsiderTypeGetAllIssuerTransactions $_XiInsiderTypeGetAllIssuerTransactions)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllIssuerTransactions(array('OnDate'=>$_XiInsiderTypeGetAllIssuerTransactions->getOnDate(),'TransactionCode'=>$_XiInsiderTypeGetAllIssuerTransactions->getTransactionCode(),'SecurityType'=>$_XiInsiderTypeGetAllIssuerTransactions->getSecurityType(),'OwnershipType'=>$_XiInsiderTypeGetAllIssuerTransactions->getOwnershipType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllIssuerTransactionsRange
	 * Meta informations :
	 * 	- documentation : Returns a list of firms that had insider transactions during a date range.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetAllIssuerTransactionsRange::getFromDate()
	 * @uses XiInsiderTypeGetAllIssuerTransactionsRange::getToDate()
	 * @param XiInsiderTypeGetAllIssuerTransactionsRange GetAllIssuerTransactionsRange
	 * @return XiInsiderTypeGetAllIssuerTransactionsRangeResponse
	 */
	public function GetAllIssuerTransactionsRange(XiInsiderTypeGetAllIssuerTransactionsRange $_XiInsiderTypeGetAllIssuerTransactionsRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllIssuerTransactionsRange(array('FromDate'=>$_XiInsiderTypeGetAllIssuerTransactionsRange->getFromDate(),'ToDate'=>$_XiInsiderTypeGetAllIssuerTransactionsRange->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFilingAsText
	 * Meta informations :
	 * 	- documentation : Retrieve a text Filing by Url.
	 * @uses XiInsiderWsdlClass::getSoapClient()
	 * @uses XiInsiderWsdlClass::setResult()
	 * @uses XiInsiderWsdlClass::getResult()
	 * @uses XiInsiderWsdlClass::saveLastError()
	 * @uses XiInsiderTypeGetFilingAsText::getTextFileUrl()
	 * @uses XiInsiderTypeGetFilingAsText::getHTMLize()
	 * @param XiInsiderTypeGetFilingAsText GetFilingAsText
	 * @return XiInsiderTypeGetFilingAsTextResponse
	 */
	public function GetFilingAsText(XiInsiderTypeGetFilingAsText $_XiInsiderTypeGetFilingAsText)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFilingAsText(array('TextFileUrl'=>$_XiInsiderTypeGetFilingAsText->getTextFileUrl(),'HTMLize'=>$_XiInsiderTypeGetFilingAsText->getHTMLize())));
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
	 * @return XiInsiderTypeGetFilingAsTextResponse
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