<?php
/**
 * Class file for OvhServiceLanguage
 * @date 02/07/2012
 */
/**
 * Class OvhServiceLanguage
 * @date 02/07/2012
 */
class OvhServiceLanguage extends OvhWsdlClass
{
	/**
	 * Method to call language
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeLanguage::getSession()
	 * @uses OvhTypeLanguage::getLanguage()
	 * @param OvhTypeLanguage Language
	 * @return OvhTypeLanguageResponse
	 */
	public function language(OvhTypeLanguage $_ovhTypeLanguage)
	{
		try
		{
			$this->setResult(new OvhTypeLanguageResponse(self::getSoapClient()->language($_ovhTypeLanguage->getSession(),$_ovhTypeLanguage->getLanguage())));
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
	 * @return OvhTypeLanguageResponse
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