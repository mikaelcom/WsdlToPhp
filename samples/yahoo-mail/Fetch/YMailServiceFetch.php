<?php
/**
 * Class file for YMailServiceFetch
 * @date 02/07/2012
 */
/**
 * Class YMailServiceFetch
 * @date 02/07/2012
 */
class YMailServiceFetch extends YMailWsdlClass
{
	/**
	 * Method to call FetchExternalMail
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeFetchExternalMail::getExternalAccounts()
	 * @param YMailTypeFetchExternalMail FetchExternalMail
	 * @return YMailTypeFetchExternalMailResponse
	 */
	public function FetchExternalMail(YMailTypeFetchExternalMail $_YMailTypeFetchExternalMail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FetchExternalMail(array('externalAccounts'=>$_YMailTypeFetchExternalMail->getExternalAccounts())));
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
	 * @return YMailTypeFetchExternalMailResponse
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