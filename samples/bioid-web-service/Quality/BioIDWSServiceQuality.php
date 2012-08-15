<?php
/**
 * Class file for BioIDWSServiceQuality
 * @date 15/08/2012
 */
/**
 * Class BioIDWSServiceQuality
 * @date 15/08/2012
 */
class BioIDWSServiceQuality extends BioIDWSWsdlClass
{
	/**
	 * Method to call QualityCheck
	 * @uses BioIDWSWsdlClass::getSoapClient()
	 * @uses BioIDWSWsdlClass::setResult()
	 * @uses BioIDWSWsdlClass::getResult()
	 * @uses BioIDWSWsdlClass::saveLastError()
	 * @uses BioIDWSTypeQualityCheck::getSamples()
	 * @uses BioIDWSTypeQualityCheck::getFlags()
	 * @uses BioIDWSTypeQualityCheck::getIssuer()
	 * @param BioIDWSTypeQualityCheck QualityCheck
	 * @return BioIDWSTypeQualityCheckResponse
	 */
	public function QualityCheck(BioIDWSTypeQualityCheck $_BioIDWSTypeQualityCheck)
	{
		try
		{
			$this->setResult(self::getSoapClient()->QualityCheck(array('samples'=>$_BioIDWSTypeQualityCheck->getSamples(),'flags'=>$_BioIDWSTypeQualityCheck->getFlags(),'issuer'=>$_BioIDWSTypeQualityCheck->getIssuer())));
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
	 * @return BioIDWSTypeQualityCheckResponse
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