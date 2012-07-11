<?php
/**
 * Class file for AmazonFPSServiceSettle
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSServiceSettle
 * @date 10/07/2012
 */
class AmazonFPSServiceSettle extends AmazonFPSWsdlClass
{
	/**
	 * Method to call Settle
	 * Meta informations :
	 * 	- documentation : The Settle API is used in conjunction with the Reserve API and is used to settle previously reserved transaction.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeSettle::getReserveTransactionId()
	 * @uses AmazonFPSTypeSettle::getTransactionAmount()
	 * @uses AmazonFPSTypeSettle::getOverrideIPNURL()
	 * @param AmazonFPSTypeSettle Settle
	 * @return AmazonFPSTypeSettleResponse
	 */
	public function Settle(AmazonFPSTypeSettle $_AmazonFPSTypeSettle)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Settle(array('ReserveTransactionId'=>$_AmazonFPSTypeSettle->getReserveTransactionId(),'TransactionAmount'=>$_AmazonFPSTypeSettle->getTransactionAmount(),'OverrideIPNURL'=>$_AmazonFPSTypeSettle->getOverrideIPNURL())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SettleDebt
	 * Meta informations :
	 * 	- documentation : Allows a caller to initiate a transaction that atomically transfers money from a sender’s payment instrument to the recipient, while decreasing corresponding debt balance.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeSettleDebt::getSenderTokenId()
	 * @uses AmazonFPSTypeSettleDebt::getCreditInstrumentId()
	 * @uses AmazonFPSTypeSettleDebt::getSettlementAmount()
	 * @uses AmazonFPSTypeSettleDebt::getCallerReference()
	 * @uses AmazonFPSTypeSettleDebt::getSenderDescription()
	 * @uses AmazonFPSTypeSettleDebt::getCallerDescription()
	 * @uses AmazonFPSTypeSettleDebt::getDescriptorPolicy()
	 * @uses AmazonFPSTypeSettleDebt::getTransactionTimeoutInMins()
	 * @uses AmazonFPSTypeSettleDebt::getOverrideIPNURL()
	 * @param AmazonFPSTypeSettleDebt SettleDebt
	 * @return AmazonFPSTypeSettleDebtResponse
	 */
	public function SettleDebt(AmazonFPSTypeSettleDebt $_AmazonFPSTypeSettleDebt)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SettleDebt(array('SenderTokenId'=>$_AmazonFPSTypeSettleDebt->getSenderTokenId(),'CreditInstrumentId'=>$_AmazonFPSTypeSettleDebt->getCreditInstrumentId(),'SettlementAmount'=>$_AmazonFPSTypeSettleDebt->getSettlementAmount(),'CallerReference'=>$_AmazonFPSTypeSettleDebt->getCallerReference(),'SenderDescription'=>$_AmazonFPSTypeSettleDebt->getSenderDescription(),'CallerDescription'=>$_AmazonFPSTypeSettleDebt->getCallerDescription(),'DescriptorPolicy'=>$_AmazonFPSTypeSettleDebt->getDescriptorPolicy(),'TransactionTimeoutInMins'=>$_AmazonFPSTypeSettleDebt->getTransactionTimeoutInMins(),'OverrideIPNURL'=>$_AmazonFPSTypeSettleDebt->getOverrideIPNURL())));
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
	 * @return AmazonFPSTypeSettleDebtResponse
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