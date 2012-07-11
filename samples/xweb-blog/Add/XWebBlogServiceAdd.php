<?php
/**
 * Class file for XWebBlogServiceAdd
 * @date 09/07/2012
 */
/**
 * Class XWebBlogServiceAdd
 * @date 09/07/2012
 */
class XWebBlogServiceAdd extends XWebBlogWsdlClass
{
	/**
	 * Method to call AddEntry
	 * Meta informations :
	 * 	- documentation : Adds a new Blog Entry.
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @uses XWebBlogTypeAddEntryRequest::getEntry()
	 * @param XWebBlogTypeAddEntryRequest AddEntryRequest
	 * @return XWebBlogTypeUNKNOWN
	 */
	public function AddEntry(XWebBlogTypeAddEntryRequest $_XWebBlogTypeAddEntryRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddEntry(array('Entry'=>$_XWebBlogTypeAddEntryRequest->getEntry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddReply
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @uses XWebBlogTypeAddReplyRequest::getReply()
	 * @param XWebBlogTypeAddReplyRequest AddReplyRequest
	 * @return XWebBlogTypeUNKNOWN
	 */
	public function AddReply(XWebBlogTypeAddReplyRequest $_XWebBlogTypeAddReplyRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddReply(array('Reply'=>$_XWebBlogTypeAddReplyRequest->getReply())));
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