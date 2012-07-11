<?php
/**
 * Class file for AmazonFPSServiceInstall
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSServiceInstall
 * @date 10/07/2012
 */
class AmazonFPSServiceInstall extends AmazonFPSWsdlClass
{
	/**
	 * Method to call InstallPaymentInstruction
	 * Meta informations :
	 * 	- documentation : Installs a payment instruction for caller.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeInstallPaymentInstruction::getPaymentInstruction()
	 * @uses AmazonFPSTypeInstallPaymentInstruction::getTokenFriendlyName()
	 * @uses AmazonFPSTypeInstallPaymentInstruction::getCallerReference()
	 * @uses AmazonFPSTypeInstallPaymentInstruction::getTokenType()
	 * @uses AmazonFPSTypeInstallPaymentInstruction::getPaymentReason()
	 * @param AmazonFPSTypeInstallPaymentInstruction InstallPaymentInstruction
	 * @return AmazonFPSTypeInstallPaymentInstructionResponse
	 */
	public function InstallPaymentInstruction(AmazonFPSTypeInstallPaymentInstruction $_AmazonFPSTypeInstallPaymentInstruction)
	{
		try
		{
			$this->setResult(self::getSoapClient()->InstallPaymentInstruction(array('PaymentInstruction'=>$_AmazonFPSTypeInstallPaymentInstruction->getPaymentInstruction(),'TokenFriendlyName'=>$_AmazonFPSTypeInstallPaymentInstruction->getTokenFriendlyName(),'CallerReference'=>$_AmazonFPSTypeInstallPaymentInstruction->getCallerReference(),'TokenType'=>$_AmazonFPSTypeInstallPaymentInstruction->getTokenType(),'PaymentReason'=>$_AmazonFPSTypeInstallPaymentInstruction->getPaymentReason())));
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
	 * @return AmazonFPSTypeInstallPaymentInstructionResponse
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