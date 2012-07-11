<?php
/**
 * Class file for XWebFAQsServiceDelete
 * @date 09/07/2012
 */
/**
 * Class XWebFAQsServiceDelete
 * @date 09/07/2012
 */
class XWebFAQsServiceDelete extends XWebFAQsWsdlClass
{
	/**
	 * Method to call DeleteFAQ
	 * Meta informations :
	 * 	- documentation : Deletes a Frequently Asked Question.
	 * @uses XWebFAQsWsdlClass::getSoapClient()
	 * @uses XWebFAQsWsdlClass::setResult()
	 * @uses XWebFAQsWsdlClass::getResult()
	 * @uses XWebFAQsWsdlClass::saveLastError()
	 * @uses XWebFAQsTypeDeleteFAQRequest::getFAQ_ID()
	 * @param XWebFAQsTypeDeleteFAQRequest DeleteFAQRequest
	 * @return XWebFAQsTypeUNKNOWN
	 */
	public function DeleteFAQ(XWebFAQsTypeDeleteFAQRequest $_XWebFAQsTypeDeleteFAQRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteFAQ(array('FAQ_ID'=>$_XWebFAQsTypeDeleteFAQRequest->getFAQ_ID())));
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