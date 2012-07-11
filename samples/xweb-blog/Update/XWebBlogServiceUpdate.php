<?php
/**
 * Class file for XWebBlogServiceUpdate
 * @date 09/07/2012
 */
/**
 * Class XWebBlogServiceUpdate
 * @date 09/07/2012
 */
class XWebBlogServiceUpdate extends XWebBlogWsdlClass
{
	/**
	 * Method to call UpdateEntry
	 * Meta informations :
	 * 	- documentation : Updates a Blog Entry.
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @uses XWebBlogTypeUpdateEntryRequest::getEntry()
	 * @param XWebBlogTypeUpdateEntryRequest UpdateEntryRequest
	 * @return XWebBlogTypeUNKNOWN
	 */
	public function UpdateEntry(XWebBlogTypeUpdateEntryRequest $_XWebBlogTypeUpdateEntryRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateEntry(array('Entry'=>$_XWebBlogTypeUpdateEntryRequest->getEntry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateReply
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @uses XWebBlogTypeUpdateReplyRequest::getReply()
	 * @param XWebBlogTypeUpdateReplyRequest UpdateReplyRequest
	 * @return XWebBlogTypeUNKNOWN
	 */
	public function UpdateReply(XWebBlogTypeUpdateReplyRequest $_XWebBlogTypeUpdateReplyRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateReply(array('Reply'=>$_XWebBlogTypeUpdateReplyRequest->getReply())));
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
	 * @return XWebBlogTypeUNKNOWN
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