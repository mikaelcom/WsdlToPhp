<?php
/**
 * Class file for AmazonFPSServiceGet
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSServiceGet
 * @date 10/07/2012
 */
class AmazonFPSServiceGet extends AmazonFPSWsdlClass
{
	/**
	 * Method to call GetAccountActivity
	 * Meta informations :
	 * 	- documentation : Returns transactions for a given date range.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeGetAccountActivity::getMaxBatchSize()
	 * @uses AmazonFPSTypeGetAccountActivity::getStartDate()
	 * @uses AmazonFPSTypeGetAccountActivity::getEndDate()
	 * @uses AmazonFPSTypeGetAccountActivity::getSortOrderByDate()
	 * @uses AmazonFPSTypeGetAccountActivity::getFPSOperation()
	 * @uses AmazonFPSTypeGetAccountActivity::getPaymentMethod()
	 * @uses AmazonFPSTypeGetAccountActivity::getRole()
	 * @uses AmazonFPSTypeGetAccountActivity::getTransactionStatus()
	 * @param AmazonFPSTypeGetAccountActivity GetAccountActivity
	 * @return AmazonFPSTypeGetAccountActivityResponse
	 */
	public function GetAccountActivity(AmazonFPSTypeGetAccountActivity $_AmazonFPSTypeGetAccountActivity)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAccountActivity(array('MaxBatchSize'=>$_AmazonFPSTypeGetAccountActivity->getMaxBatchSize(),'StartDate'=>$_AmazonFPSTypeGetAccountActivity->getStartDate(),'EndDate'=>$_AmazonFPSTypeGetAccountActivity->getEndDate(),'SortOrderByDate'=>$_AmazonFPSTypeGetAccountActivity->getSortOrderByDate(),'FPSOperation'=>$_AmazonFPSTypeGetAccountActivity->getFPSOperation(),'PaymentMethod'=>$_AmazonFPSTypeGetAccountActivity->getPaymentMethod(),'Role'=>$_AmazonFPSTypeGetAccountActivity->getRole(),'TransactionStatus'=>$_AmazonFPSTypeGetAccountActivity->getTransactionStatus())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAccountBalance
	 * Meta informations :
	 * 	- documentation : Returns the account balance for an account in real time.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @param AmazonFPSTypeGetAccountBalance GetAccountBalance
	 * @return AmazonFPSTypeGetAccountBalanceResponse
	 */
	public function GetAccountBalance(AmazonFPSTypeGetAccountBalance $_AmazonFPSTypeGetAccountBalance)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAccountBalance(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTransactionsForSubscription
	 * Meta informations :
	 * 	- documentation : Returns the transactions for a given subscriptionID.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeGetTransactionsForSubscription::getSubscriptionId()
	 * @param AmazonFPSTypeGetTransactionsForSubscription GetTransactionsForSubscription
	 * @return AmazonFPSTypeGetTransactionsForSubscriptionResponse
	 */
	public function GetTransactionsForSubscription(AmazonFPSTypeGetTransactionsForSubscription $_AmazonFPSTypeGetTransactionsForSubscription)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTransactionsForSubscription(array('SubscriptionId'=>$_AmazonFPSTypeGetTransactionsForSubscription->getSubscriptionId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSubscriptionDetails
	 * Meta informations :
	 * 	- documentation : Returns the details of Subscription for a given subscriptionID.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeGetSubscriptionDetails::getSubscriptionId()
	 * @param AmazonFPSTypeGetSubscriptionDetails GetSubscriptionDetails
	 * @return AmazonFPSTypeGetSubscriptionDetailsResponse
	 */
	public function GetSubscriptionDetails(AmazonFPSTypeGetSubscriptionDetails $_AmazonFPSTypeGetSubscriptionDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSubscriptionDetails(array('SubscriptionId'=>$_AmazonFPSTypeGetSubscriptionDetails->getSubscriptionId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDebtBalance
	 * Meta informations :
	 * 	- documentation : Returns the balance corresponding to the given credit instrument.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeGetDebtBalance::getCreditInstrumentId()
	 * @param AmazonFPSTypeGetDebtBalance GetDebtBalance
	 * @return AmazonFPSTypeGetDebtBalanceResponse
	 */
	public function GetDebtBalance(AmazonFPSTypeGetDebtBalance $_AmazonFPSTypeGetDebtBalance)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDebtBalance(array('CreditInstrumentId'=>$_AmazonFPSTypeGetDebtBalance->getCreditInstrumentId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOutstandingDebtBalance
	 * Meta informations :
	 * 	- documentation : Returns the total outstanding balance for all the credit instruments for the given creditor account.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @param AmazonFPSTypeGetOutstandingDebtBalance GetOutstandingDebtBalance
	 * @return AmazonFPSTypeGetOutstandingDebtBalanceResponse
	 */
	public function GetOutstandingDebtBalance(AmazonFPSTypeGetOutstandingDebtBalance $_AmazonFPSTypeGetOutstandingDebtBalance)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOutstandingDebtBalance(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPrepaidBalance
	 * Meta informations :
	 * 	- documentation : Returns the balance available on the given prepaid instrument.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeGetPrepaidBalance::getPrepaidInstrumentId()
	 * @param AmazonFPSTypeGetPrepaidBalance GetPrepaidBalance
	 * @return AmazonFPSTypeGetPrepaidBalanceResponse
	 */
	public function GetPrepaidBalance(AmazonFPSTypeGetPrepaidBalance $_AmazonFPSTypeGetPrepaidBalance)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPrepaidBalance(array('PrepaidInstrumentId'=>$_AmazonFPSTypeGetPrepaidBalance->getPrepaidInstrumentId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTokenByCaller
	 * Meta informations :
	 * 	- documentation : Returns the details of a particular token installed by this calling application using the subway co-branded UI.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeGetTokenByCaller::getTokenId()
	 * @uses AmazonFPSTypeGetTokenByCaller::getCallerReference()
	 * @param AmazonFPSTypeGetTokenByCaller GetTokenByCaller
	 * @return AmazonFPSTypeGetTokenByCallerResponse
	 */
	public function GetTokenByCaller(AmazonFPSTypeGetTokenByCaller $_AmazonFPSTypeGetTokenByCaller)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTokenByCaller(array('TokenId'=>$_AmazonFPSTypeGetTokenByCaller->getTokenId(),'CallerReference'=>$_AmazonFPSTypeGetTokenByCaller->getCallerReference())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTokenUsage
	 * Meta informations :
	 * 	- documentation : Returns the usage of a token.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeGetTokenUsage::getTokenId()
	 * @param AmazonFPSTypeGetTokenUsage GetTokenUsage
	 * @return AmazonFPSTypeGetTokenUsageResponse
	 */
	public function GetTokenUsage(AmazonFPSTypeGetTokenUsage $_AmazonFPSTypeGetTokenUsage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTokenUsage(array('TokenId'=>$_AmazonFPSTypeGetTokenUsage->getTokenId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTokens
	 * Meta informations :
	 * 	- documentation : Returns a list of tokens installed on the given account.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeGetTokens::getTokenStatus()
	 * @uses AmazonFPSTypeGetTokens::getTokenType()
	 * @uses AmazonFPSTypeGetTokens::getCallerReference()
	 * @uses AmazonFPSTypeGetTokens::getTokenFriendlyName()
	 * @param AmazonFPSTypeGetTokens GetTokens
	 * @return AmazonFPSTypeGetTokensResponse
	 */
	public function GetTokens(AmazonFPSTypeGetTokens $_AmazonFPSTypeGetTokens)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTokens(array('TokenStatus'=>$_AmazonFPSTypeGetTokens->getTokenStatus(),'TokenType'=>$_AmazonFPSTypeGetTokens->getTokenType(),'CallerReference'=>$_AmazonFPSTypeGetTokens->getCallerReference(),'TokenFriendlyName'=>$_AmazonFPSTypeGetTokens->getTokenFriendlyName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTotalPrepaidLiability
	 * Meta informations :
	 * 	- documentation : Returns the total liability held by the given account corresponding to all the prepaid instruments owned by the account.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @param AmazonFPSTypeGetTotalPrepaidLiability GetTotalPrepaidLiability
	 * @return AmazonFPSTypeGetTotalPrepaidLiabilityResponse
	 */
	public function GetTotalPrepaidLiability(AmazonFPSTypeGetTotalPrepaidLiability $_AmazonFPSTypeGetTotalPrepaidLiability)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTotalPrepaidLiability(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTransaction
	 * Meta informations :
	 * 	- documentation : Returns all details of a transaction.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeGetTransaction::getTransactionId()
	 * @param AmazonFPSTypeGetTransaction GetTransaction
	 * @return AmazonFPSTypeGetTransactionResponse
	 */
	public function GetTransaction(AmazonFPSTypeGetTransaction $_AmazonFPSTypeGetTransaction)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTransaction(array('TransactionId'=>$_AmazonFPSTypeGetTransaction->getTransactionId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTransactionStatus
	 * Meta informations :
	 * 	- documentation : Gets the latest status of a transaction.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeGetTransactionStatus::getTransactionId()
	 * @param AmazonFPSTypeGetTransactionStatus GetTransactionStatus
	 * @return AmazonFPSTypeGetTransactionStatusResponse
	 */
	public function GetTransactionStatus(AmazonFPSTypeGetTransactionStatus $_AmazonFPSTypeGetTransactionStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTransactionStatus(array('TransactionId'=>$_AmazonFPSTypeGetTransactionStatus->getTransactionId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPaymentInstruction
	 * Meta informations :
	 * 	- documentation : Gets the payment instruction of a token.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeGetPaymentInstruction::getTokenId()
	 * @param AmazonFPSTypeGetPaymentInstruction GetPaymentInstruction
	 * @return AmazonFPSTypeGetPaymentInstructionResponse
	 */
	public function GetPaymentInstruction(AmazonFPSTypeGetPaymentInstruction $_AmazonFPSTypeGetPaymentInstruction)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPaymentInstruction(array('TokenId'=>$_AmazonFPSTypeGetPaymentInstruction->getTokenId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRecipientVerificationStatus
	 * Meta informations :
	 * 	- documentation : Returns the recipient status.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeGetRecipientVerificationStatus::getRecipientTokenId()
	 * @param AmazonFPSTypeGetRecipientVerificationStatus GetRecipientVerificationStatus
	 * @return AmazonFPSTypeGetRecipientVerificationStatusResponse
	 */
	public function GetRecipientVerificationStatus(AmazonFPSTypeGetRecipientVerificationStatus $_AmazonFPSTypeGetRecipientVerificationStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRecipientVerificationStatus(array('RecipientTokenId'=>$_AmazonFPSTypeGetRecipientVerificationStatus->getRecipientTokenId())));
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
	 * @return AmazonFPSTypeGetRecipientVerificationStatusResponse
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