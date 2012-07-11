<?php
/**
 * Class file for YMailServiceReset
 * @date 02/07/2012
 */
/**
 * Class YMailServiceReset
 * @date 02/07/2012
 */
class YMailServiceReset extends YMailWsdlClass
{
	/**
	 * Method to call ResetSpamFilter
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @param YMailTypeResetSpamFilter ResetSpamFilter
	 * @return YMailTypeResetSpamFilterResponse
	 */
	public function ResetSpamFilter(YMailTypeResetSpamFilter $_YMailTypeResetSpamFilter)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ResetSpamFilter(array()));
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
	 * @return YMailTypeResetSpamFilterResponse
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