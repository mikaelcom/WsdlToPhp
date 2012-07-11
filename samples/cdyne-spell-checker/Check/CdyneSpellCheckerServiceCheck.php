<?php
/**
 * Class file for CdyneSpellCheckerServiceCheck
 * @date 03/07/2012
 */
/**
 * Class CdyneSpellCheckerServiceCheck
 * @date 03/07/2012
 */
class CdyneSpellCheckerServiceCheck extends CdyneSpellCheckerWsdlClass
{
	/**
	 * Method to call CheckTextBodyV2
	 * Meta informations :
	 * 	- documentation : This method checks a body of text for spelling errors.
	 * @uses CdyneSpellCheckerWsdlClass::getSoapClient()
	 * @uses CdyneSpellCheckerWsdlClass::setResult()
	 * @uses CdyneSpellCheckerWsdlClass::getResult()
	 * @uses CdyneSpellCheckerWsdlClass::saveLastError()
	 * @uses CdyneSpellCheckerTypeCheckTextBodyV2::getBodyText()
	 * @param CdyneSpellCheckerTypeCheckTextBodyV2 CheckTextBodyV2
	 * @return CdyneSpellCheckerTypeCheckTextBodyV2Response
	 */
	public function CheckTextBodyV2(CdyneSpellCheckerTypeCheckTextBodyV2 $_CdyneSpellCheckerTypeCheckTextBodyV2)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CheckTextBodyV2(array('BodyText'=>$_CdyneSpellCheckerTypeCheckTextBodyV2->getBodyText())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CheckTextBody
	 * Meta informations :
	 * 	- documentation : Depreciated. Do not use.
	 * @uses CdyneSpellCheckerWsdlClass::getSoapClient()
	 * @uses CdyneSpellCheckerWsdlClass::setResult()
	 * @uses CdyneSpellCheckerWsdlClass::getResult()
	 * @uses CdyneSpellCheckerWsdlClass::saveLastError()
	 * @uses CdyneSpellCheckerTypeCheckTextBody::getBodyText()
	 * @uses CdyneSpellCheckerTypeCheckTextBody::getLicenseKey()
	 * @param CdyneSpellCheckerTypeCheckTextBody CheckTextBody
	 * @return CdyneSpellCheckerTypeCheckTextBodyResponse
	 */
	public function CheckTextBody(CdyneSpellCheckerTypeCheckTextBody $_CdyneSpellCheckerTypeCheckTextBody)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CheckTextBody(array('BodyText'=>$_CdyneSpellCheckerTypeCheckTextBody->getBodyText(),'LicenseKey'=>$_CdyneSpellCheckerTypeCheckTextBody->getLicenseKey())));
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
	 * @return CdyneSpellCheckerTypeCheckTextBodyResponse
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