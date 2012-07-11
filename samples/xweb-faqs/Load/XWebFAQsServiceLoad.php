<?php
/**
 * Class file for XWebFAQsServiceLoad
 * @date 09/07/2012
 */
/**
 * Class XWebFAQsServiceLoad
 * @date 09/07/2012
 */
class XWebFAQsServiceLoad extends XWebFAQsWsdlClass
{
	/**
	 * Method to call LoadFAQ
	 * Meta informations :
	 * 	- documentation : Returns a specific Frequently Asked Question.
	 * @uses XWebFAQsWsdlClass::getSoapClient()
	 * @uses XWebFAQsWsdlClass::setResult()
	 * @uses XWebFAQsWsdlClass::getResult()
	 * @uses XWebFAQsWsdlClass::saveLastError()
	 * @uses XWebFAQsTypeLoadFAQRequest::getFAQ_ID()
	 * @param XWebFAQsTypeLoadFAQRequest LoadFAQRequest
	 * @return XWebFAQsTypeLoadFAQResponse
	 */
	public function LoadFAQ(XWebFAQsTypeLoadFAQRequest $_XWebFAQsTypeLoadFAQRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadFAQ(array('FAQ_ID'=>$_XWebFAQsTypeLoadFAQRequest->getFAQ_ID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadFAQs
	 * Meta informations :
	 * 	- documentation : Returns all Frequently Asked Questions, in the reverse chronological order the records were entered into the system.
	 * @uses XWebFAQsWsdlClass::getSoapClient()
	 * @uses XWebFAQsWsdlClass::setResult()
	 * @uses XWebFAQsWsdlClass::getResult()
	 * @uses XWebFAQsWsdlClass::saveLastError()
	 * @param UNKNOWN UNKNOWN
	 * @return XWebFAQsTypeLoadFAQsResponse
	 */
	public function LoadFAQs(XWebFAQsTypeUNKNOWN $_XWebFAQsTypeUNKNOWN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadFAQs(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadFAQsPaged
	 * Meta informations :
	 * 	- documentation : Returns 'paginated' Frequently Asked Question records, in the reverse chronological order the records were entered into the system.
	 * @uses XWebFAQsWsdlClass::getSoapClient()
	 * @uses XWebFAQsWsdlClass::setResult()
	 * @uses XWebFAQsWsdlClass::getResult()
	 * @uses XWebFAQsWsdlClass::saveLastError()
	 * @uses XWebFAQsTypeLoadFAQsPagedRequest::getPage_Number()
	 * @uses XWebFAQsTypeLoadFAQsPagedRequest::getPage_Size()
	 * @param XWebFAQsTypeLoadFAQsPagedRequest LoadFAQsPagedRequest
	 * @return XWebFAQsTypeLoadFAQsPagedResponse
	 */
	public function LoadFAQsPaged(XWebFAQsTypeLoadFAQsPagedRequest $_XWebFAQsTypeLoadFAQsPagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadFAQsPaged(array('Page_Number'=>$_XWebFAQsTypeLoadFAQsPagedRequest->getPage_Number(),'Page_Size'=>$_XWebFAQsTypeLoadFAQsPagedRequest->getPage_Size())));
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
	 * @return XWebFAQsTypeLoadFAQsPagedResponse
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