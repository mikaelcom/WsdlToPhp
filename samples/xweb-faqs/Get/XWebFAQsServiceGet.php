<?php
/**
 * Class file for XWebFAQsServiceGet
 * @date 09/07/2012
 */
/**
 * Class XWebFAQsServiceGet
 * @date 09/07/2012
 */
class XWebFAQsServiceGet extends XWebFAQsWsdlClass
{
	/**
	 * Method to call GetNewFAQID
	 * Meta informations :
	 * 	- documentation : Returns a new Frequently Asked Question record identifier.
	 * @uses XWebFAQsWsdlClass::getSoapClient()
	 * @uses XWebFAQsWsdlClass::setResult()
	 * @uses XWebFAQsWsdlClass::getResult()
	 * @uses XWebFAQsWsdlClass::saveLastError()
	 * @param UNKNOWN UNKNOWN
	 * @return XWebFAQsTypeGetNewFAQIDResponse
	 */
	public function GetNewFAQID(XWebFAQsTypeUNKNOWN $_XWebFAQsTypeUNKNOWN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNewFAQID(array()));
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
	 * @return XWebFAQsTypeGetNewFAQIDResponse
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