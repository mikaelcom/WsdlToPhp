<?php
/**
 * Class file for AmazonFPSServiceWrite
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSServiceWrite
 * @date 10/07/2012
 */
class AmazonFPSServiceWrite extends AmazonFPSWsdlClass
{
	/**
	 * Method to call WriteOffDebt
	 * Meta informations :
	 * 	- documentation : Allows a creditor to write off the debt balance accumulated partially or fully at any time.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeWriteOffDebt::getCreditInstrumentId()
	 * @uses AmazonFPSTypeWriteOffDebt::getAdjustmentAmount()
	 * @uses AmazonFPSTypeWriteOffDebt::getCallerReference()
	 * @uses AmazonFPSTypeWriteOffDebt::getCallerDescription()
	 * @param AmazonFPSTypeWriteOffDebt WriteOffDebt
	 * @return AmazonFPSTypeWriteOffDebtResponse
	 */
	public function WriteOffDebt(AmazonFPSTypeWriteOffDebt $_AmazonFPSTypeWriteOffDebt)
	{
		try
		{
			$this->setResult(self::getSoapClient()->WriteOffDebt(array('CreditInstrumentId'=>$_AmazonFPSTypeWriteOffDebt->getCreditInstrumentId(),'AdjustmentAmount'=>$_AmazonFPSTypeWriteOffDebt->getAdjustmentAmount(),'CallerReference'=>$_AmazonFPSTypeWriteOffDebt->getCallerReference(),'CallerDescription'=>$_AmazonFPSTypeWriteOffDebt->getCallerDescription())));
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
	 * @return AmazonFPSTypeWriteOffDebtResponse
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