<?php
/**
 * Class file for AmazonFPSServiceFund
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSServiceFund
 * @date 10/07/2012
 */
class AmazonFPSServiceFund extends AmazonFPSWsdlClass
{
	/**
	 * Method to call FundPrepaid
	 * Meta informations :
	 * 	- documentation : Funds the prepaid balance on the given prepaid instrument.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeFundPrepaid::getSenderTokenId()
	 * @uses AmazonFPSTypeFundPrepaid::getPrepaidInstrumentId()
	 * @uses AmazonFPSTypeFundPrepaid::getFundingAmount()
	 * @uses AmazonFPSTypeFundPrepaid::getCallerReference()
	 * @uses AmazonFPSTypeFundPrepaid::getSenderDescription()
	 * @uses AmazonFPSTypeFundPrepaid::getCallerDescription()
	 * @uses AmazonFPSTypeFundPrepaid::getDescriptorPolicy()
	 * @uses AmazonFPSTypeFundPrepaid::getTransactionTimeoutInMins()
	 * @uses AmazonFPSTypeFundPrepaid::getOverrideIPNURL()
	 * @param AmazonFPSTypeFundPrepaid FundPrepaid
	 * @return AmazonFPSTypeFundPrepaidResponse
	 */
	public function FundPrepaid(AmazonFPSTypeFundPrepaid $_AmazonFPSTypeFundPrepaid)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FundPrepaid(array('SenderTokenId'=>$_AmazonFPSTypeFundPrepaid->getSenderTokenId(),'PrepaidInstrumentId'=>$_AmazonFPSTypeFundPrepaid->getPrepaidInstrumentId(),'FundingAmount'=>$_AmazonFPSTypeFundPrepaid->getFundingAmount(),'CallerReference'=>$_AmazonFPSTypeFundPrepaid->getCallerReference(),'SenderDescription'=>$_AmazonFPSTypeFundPrepaid->getSenderDescription(),'CallerDescription'=>$_AmazonFPSTypeFundPrepaid->getCallerDescription(),'DescriptorPolicy'=>$_AmazonFPSTypeFundPrepaid->getDescriptorPolicy(),'TransactionTimeoutInMins'=>$_AmazonFPSTypeFundPrepaid->getTransactionTimeoutInMins(),'OverrideIPNURL'=>$_AmazonFPSTypeFundPrepaid->getOverrideIPNURL())));
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
	 * @return AmazonFPSTypeFundPrepaidResponse
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