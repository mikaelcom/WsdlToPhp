<?php
/**
 * Class file for XWebBlogServiceProcess
 * @date 09/07/2012
 */
/**
 * Class XWebBlogServiceProcess
 * @date 09/07/2012
 */
class XWebBlogServiceProcess extends XWebBlogWsdlClass
{
	/**
	 * Method to call ProcessEntry
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @uses XWebBlogTypeProcessEntryRequest::getEntry()
	 * @param XWebBlogTypeProcessEntryRequest ProcessEntryRequest
	 * @return XWebBlogTypeUNKNOWN
	 */
	public function ProcessEntry(XWebBlogTypeProcessEntryRequest $_XWebBlogTypeProcessEntryRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ProcessEntry(array('Entry'=>$_XWebBlogTypeProcessEntryRequest->getEntry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ProcessReply
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @uses XWebBlogTypeProcessReplyRequest::getReply()
	 * @param XWebBlogTypeProcessReplyRequest ProcessReplyRequest
	 * @return XWebBlogTypeUNKNOWN
	 */
	public function ProcessReply(XWebBlogTypeProcessReplyRequest $_XWebBlogTypeProcessReplyRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ProcessReply(array('Reply'=>$_XWebBlogTypeProcessReplyRequest->getReply())));
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