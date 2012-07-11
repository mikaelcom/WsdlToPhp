<?php
/**
 * Class file for XWebBlogServiceLoad
 * @date 09/07/2012
 */
/**
 * Class XWebBlogServiceLoad
 * @date 09/07/2012
 */
class XWebBlogServiceLoad extends XWebBlogWsdlClass
{
	/**
	 * Method to call LoadEntry
	 * Meta informations :
	 * 	- documentation : Returns a specific Blog Entry.
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @uses XWebBlogTypeLoadEntryRequest::getEntry_ID()
	 * @param XWebBlogTypeLoadEntryRequest LoadEntryRequest
	 * @return XWebBlogTypeLoadEntryResponse
	 */
	public function LoadEntry(XWebBlogTypeLoadEntryRequest $_XWebBlogTypeLoadEntryRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadEntry(array('Entry_ID'=>$_XWebBlogTypeLoadEntryRequest->getEntry_ID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadBlog
	 * Meta informations :
	 * 	- documentation : Returns all Blog Entries, in the reverse chronological order the records were entered into the system.
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @param UNKNOWN UNKNOWN
	 * @return XWebBlogTypeLoadBlogResponse
	 */
	public function LoadBlog(XWebBlogTypeUNKNOWN $_XWebBlogTypeUNKNOWN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadBlog(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadBlogPaged
	 * Meta informations :
	 * 	- documentation : Returns 'paginated' Blog Entry records, in the reverse chronological order the records were entered into the system.
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @uses XWebBlogTypeLoadBlogPagedRequest::getPage_Number()
	 * @uses XWebBlogTypeLoadBlogPagedRequest::getPage_Size()
	 * @param XWebBlogTypeLoadBlogPagedRequest LoadBlogPagedRequest
	 * @return XWebBlogTypeLoadBlogPagedResponse
	 */
	public function LoadBlogPaged(XWebBlogTypeLoadBlogPagedRequest $_XWebBlogTypeLoadBlogPagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadBlogPaged(array('Page_Number'=>$_XWebBlogTypeLoadBlogPagedRequest->getPage_Number(),'Page_Size'=>$_XWebBlogTypeLoadBlogPagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadBlogByDateRange
	 * Meta informations :
	 * 	- documentation : Returns all Blog Entries created within a specific date range, in the reverse chronological order the records were entered into the system.
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @uses XWebBlogTypeLoadBlogByDateRangeRequest::getDate_Start()
	 * @uses XWebBlogTypeLoadBlogByDateRangeRequest::getDate_End()
	 * @param XWebBlogTypeLoadBlogByDateRangeRequest LoadBlogByDateRangeRequest
	 * @return XWebBlogTypeLoadBlogByDateRangeResponse
	 */
	public function LoadBlogByDateRange(XWebBlogTypeLoadBlogByDateRangeRequest $_XWebBlogTypeLoadBlogByDateRangeRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadBlogByDateRange(array('Date_Start'=>$_XWebBlogTypeLoadBlogByDateRangeRequest->getDate_Start(),'Date_End'=>$_XWebBlogTypeLoadBlogByDateRangeRequest->getDate_End())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadBlogByDateRangePaged
	 * Meta informations :
	 * 	- documentation : Returns 'paginated' Blog Entry records created within a specific date range, in the reverse chronological order the records were entered into the system.
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @uses XWebBlogTypeLoadBlogByDateRangePagedRequest::getDate_Start()
	 * @uses XWebBlogTypeLoadBlogByDateRangePagedRequest::getDate_End()
	 * @uses XWebBlogTypeLoadBlogByDateRangePagedRequest::getPage_Number()
	 * @uses XWebBlogTypeLoadBlogByDateRangePagedRequest::getPage_Size()
	 * @param XWebBlogTypeLoadBlogByDateRangePagedRequest LoadBlogByDateRangePagedRequest
	 * @return XWebBlogTypeLoadBlogByDateRangePagedResponse
	 */
	public function LoadBlogByDateRangePaged(XWebBlogTypeLoadBlogByDateRangePagedRequest $_XWebBlogTypeLoadBlogByDateRangePagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadBlogByDateRangePaged(array('Date_Start'=>$_XWebBlogTypeLoadBlogByDateRangePagedRequest->getDate_Start(),'Date_End'=>$_XWebBlogTypeLoadBlogByDateRangePagedRequest->getDate_End(),'Page_Number'=>$_XWebBlogTypeLoadBlogByDateRangePagedRequest->getPage_Number(),'Page_Size'=>$_XWebBlogTypeLoadBlogByDateRangePagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadReply
	 * @uses XWebBlogWsdlClass::getSoapClient()
	 * @uses XWebBlogWsdlClass::setResult()
	 * @uses XWebBlogWsdlClass::getResult()
	 * @uses XWebBlogWsdlClass::saveLastError()
	 * @uses XWebBlogTypeLoadReplyRequest::getReply_ID()
	 * @param XWebBlogTypeLoadReplyRequest LoadReplyRequest
	 * @return XWebBlogTypeLoadReplyResponse
	 */
	public function LoadReply(XWebBlogTypeLoadReplyRequest $_XWebBlogTypeLoadReplyRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadReply(array('Reply_ID'=>$_XWebBlogTypeLoadReplyRequest->getReply_ID())));
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
	 * @return XWebBlogTypeLoadReplyResponse
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