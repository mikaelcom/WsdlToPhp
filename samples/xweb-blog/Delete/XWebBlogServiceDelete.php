<?php
/**
 * Class file for XWebBlogServiceDelete
 * @date 09/07/2012
 */
/**
 * Class XWebBlogServiceDelete
 * @date 09/07/2012
 */
class XWebBlogServiceDelete extends XWebBlogWsdlClass
{
	/**
	 * Method to call DeleteEntry
	 * Meta informations :
	 * 	- documentation : Deletes a Blog Entry.
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @uses XWebBlogTypeDeleteEntryRequest::getEntry_ID()
	 * @param XWebBlogTypeDeleteEntryRequest DeleteEntryRequest
	 * @return XWebBlogTypeUNKNOWN
	 */
	public function DeleteEntry(XWebBlogTypeDeleteEntryRequest $_XWebBlogTypeDeleteEntryRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteEntry(array('Entry_ID'=>$_XWebBlogTypeDeleteEntryRequest->getEntry_ID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteReply
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @uses XWebBlogTypeDeleteReplyRequest::getReply_ID()
	 * @param XWebBlogTypeDeleteReplyRequest DeleteReplyRequest
	 * @return XWebBlogTypeUNKNOWN
	 */
	public function DeleteReply(XWebBlogTypeDeleteReplyRequest $_XWebBlogTypeDeleteReplyRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteReply(array('Reply_ID'=>$_XWebBlogTypeDeleteReplyRequest->getReply_ID())));
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