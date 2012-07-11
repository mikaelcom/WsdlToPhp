<?php
/**
 * Class file for XWebFAQsServiceAdd
 * @date 09/07/2012
 */
/**
 * Class XWebFAQsServiceAdd
 * @date 09/07/2012
 */
class XWebFAQsServiceAdd extends XWebFAQsWsdlClass
{
	/**
	 * Method to call AddFAQ
	 * Meta informations :
	 * 	- documentation : Adds a new Frequently Asked Question.
	 * @uses XWebFAQsWsdlClass::getSoapClient()
	 * @uses XWebFAQsWsdlClass::setResult()
	 * @uses XWebFAQsWsdlClass::getResult()
	 * @uses XWebFAQsWsdlClass::saveLastError()
	 * @uses XWebFAQsTypeAddFAQRequest::getFAQ()
	 * @param XWebFAQsTypeAddFAQRequest AddFAQRequest
	 * @return XWebFAQsTypeUNKNOWN
	 */
	public function AddFAQ(XWebFAQsTypeAddFAQRequest $_XWebFAQsTypeAddFAQRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddFAQ(array('FAQ'=>$_XWebFAQsTypeAddFAQRequest->getFAQ())));
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