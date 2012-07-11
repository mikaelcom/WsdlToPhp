<?php
/**
 * Class file for XWebFAQsServiceUpdate
 * @date 09/07/2012
 */
/**
 * Class XWebFAQsServiceUpdate
 * @date 09/07/2012
 */
class XWebFAQsServiceUpdate extends XWebFAQsWsdlClass
{
	/**
	 * Method to call UpdateFAQ
	 * Meta informations :
	 * 	- documentation : Updates a Frequently Asked Question.
	 * @uses XWebFAQsWsdlClass::getSoapClient()
	 * @uses XWebFAQsWsdlClass::setResult()
	 * @uses XWebFAQsWsdlClass::getResult()
	 * @uses XWebFAQsWsdlClass::saveLastError()
	 * @uses XWebFAQsTypeUpdateFAQRequest::getFAQ()
	 * @param XWebFAQsTypeUpdateFAQRequest UpdateFAQRequest
	 * @return XWebFAQsTypeUNKNOWN
	 */
	public function UpdateFAQ(XWebFAQsTypeUpdateFAQRequest $_XWebFAQsTypeUpdateFAQRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateFAQ(array('FAQ'=>$_XWebFAQsTypeUpdateFAQRequest->getFAQ())));
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
	 * @return XWebFAQsTypeUNKNOWN
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