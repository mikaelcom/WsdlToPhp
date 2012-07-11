<?php
/**
 * Class file for XWebBlogServiceGet
 * @date 09/07/2012
 */
/**
 * Class XWebBlogServiceGet
 * @date 09/07/2012
 */
class XWebBlogServiceGet extends XWebBlogWsdlClass
{
	/**
	 * Method to call GetNewEntryID
	 * Meta informations :
	 * 	- documentation : Returns a new Blog Entry record identifier.
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @param UNKNOWN UNKNOWN
	 * @return XWebBlogTypeGetNewEntryIDResponse
	 */
	public function GetNewEntryID(XWebBlogTypeUNKNOWN $_XWebBlogTypeUNKNOWN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNewEntryID(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNewReplyID
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @param UNKNOWN UNKNOWN
	 * @return XWebBlogTypeGetNewReplyIDResponse
	 */
	public function GetNewReplyID(XWebBlogTypeUNKNOWN $_XWebBlogTypeUNKNOWN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNewReplyID(array()));
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
	 * @return XWebBlogTypeGetNewReplyIDResponse
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