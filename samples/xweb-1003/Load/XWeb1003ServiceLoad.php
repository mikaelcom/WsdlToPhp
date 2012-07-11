<?php
/**
 * Class file for XWeb1003ServiceLoad
 * @date 09/07/2012
 */
/**
 * Class XWeb1003ServiceLoad
 * @date 09/07/2012
 */
class XWeb1003ServiceLoad extends XWeb1003WsdlClass
{
	/**
	 * Method to call LoadApplication
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeLoadApplicationRequest::getApplication_ID()
	 * @param XWeb1003TypeLoadApplicationRequest LoadApplicationRequest
	 * @return XWeb1003TypeLoadApplicationResponse
	 */
	public function LoadApplication(XWeb1003TypeLoadApplicationRequest $_XWeb1003TypeLoadApplicationRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadApplication(array('Application_ID'=>$_XWeb1003TypeLoadApplicationRequest->getApplication_ID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadApplications
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @param UNKNOWN UNKNOWN
	 * @return XWeb1003TypeLoadApplicationsResponse
	 */
	public function LoadApplications(XWeb1003TypeUNKNOWN $_XWeb1003TypeUNKNOWN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadApplications(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadApplicationsPaged
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeLoadApplicationsPagedRequest::getPage_Number()
	 * @uses XWeb1003TypeLoadApplicationsPagedRequest::getPage_Size()
	 * @param XWeb1003TypeLoadApplicationsPagedRequest LoadApplicationsPagedRequest
	 * @return XWeb1003TypeLoadApplicationsPagedResponse
	 */
	public function LoadApplicationsPaged(XWeb1003TypeLoadApplicationsPagedRequest $_XWeb1003TypeLoadApplicationsPagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadApplicationsPaged(array('Page_Number'=>$_XWeb1003TypeLoadApplicationsPagedRequest->getPage_Number(),'Page_Size'=>$_XWeb1003TypeLoadApplicationsPagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadApplicationsByDateRange
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeLoadApplicationsByDateRangeRequest::getDate_Start()
	 * @uses XWeb1003TypeLoadApplicationsByDateRangeRequest::getDate_End()
	 * @param XWeb1003TypeLoadApplicationsByDateRangeRequest LoadApplicationsByDateRangeRequest
	 * @return XWeb1003TypeLoadApplicationsByDateRangeResponse
	 */
	public function LoadApplicationsByDateRange(XWeb1003TypeLoadApplicationsByDateRangeRequest $_XWeb1003TypeLoadApplicationsByDateRangeRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadApplicationsByDateRange(array('Date_Start'=>$_XWeb1003TypeLoadApplicationsByDateRangeRequest->getDate_Start(),'Date_End'=>$_XWeb1003TypeLoadApplicationsByDateRangeRequest->getDate_End())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadApplicationsByDateRangePaged
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeLoadApplicationsByDateRangePagedRequest::getDate_Start()
	 * @uses XWeb1003TypeLoadApplicationsByDateRangePagedRequest::getDate_End()
	 * @uses XWeb1003TypeLoadApplicationsByDateRangePagedRequest::getPage_Number()
	 * @uses XWeb1003TypeLoadApplicationsByDateRangePagedRequest::getPage_Size()
	 * @param XWeb1003TypeLoadApplicationsByDateRangePagedRequest LoadApplicationsByDateRangePagedRequest
	 * @return XWeb1003TypeLoadApplicationsByDateRangePagedResponse
	 */
	public function LoadApplicationsByDateRangePaged(XWeb1003TypeLoadApplicationsByDateRangePagedRequest $_XWeb1003TypeLoadApplicationsByDateRangePagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadApplicationsByDateRangePaged(array('Date_Start'=>$_XWeb1003TypeLoadApplicationsByDateRangePagedRequest->getDate_Start(),'Date_End'=>$_XWeb1003TypeLoadApplicationsByDateRangePagedRequest->getDate_End(),'Page_Number'=>$_XWeb1003TypeLoadApplicationsByDateRangePagedRequest->getPage_Number(),'Page_Size'=>$_XWeb1003TypeLoadApplicationsByDateRangePagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadApplicationsByRep
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeLoadApplicationsByRepRequest::getRep_Identifier()
	 * @param XWeb1003TypeLoadApplicationsByRepRequest LoadApplicationsByRepRequest
	 * @return XWeb1003TypeLoadApplicationsByRepResponse
	 */
	public function LoadApplicationsByRep(XWeb1003TypeLoadApplicationsByRepRequest $_XWeb1003TypeLoadApplicationsByRepRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadApplicationsByRep(array('Rep_Identifier'=>$_XWeb1003TypeLoadApplicationsByRepRequest->getRep_Identifier())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadApplicationsByRepPaged
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeLoadApplicationsByRepPagedRequest::getRep_Identifier()
	 * @uses XWeb1003TypeLoadApplicationsByRepPagedRequest::getPage_Number()
	 * @uses XWeb1003TypeLoadApplicationsByRepPagedRequest::getPage_Size()
	 * @param XWeb1003TypeLoadApplicationsByRepPagedRequest LoadApplicationsByRepPagedRequest
	 * @return XWeb1003TypeLoadApplicationsByRepPagedResponse
	 */
	public function LoadApplicationsByRepPaged(XWeb1003TypeLoadApplicationsByRepPagedRequest $_XWeb1003TypeLoadApplicationsByRepPagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadApplicationsByRepPaged(array('Rep_Identifier'=>$_XWeb1003TypeLoadApplicationsByRepPagedRequest->getRep_Identifier(),'Page_Number'=>$_XWeb1003TypeLoadApplicationsByRepPagedRequest->getPage_Number(),'Page_Size'=>$_XWeb1003TypeLoadApplicationsByRepPagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadApplicationsByRepAndDateRange
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeLoadApplicationsByRepAndDateRangeRequest::getRep_Identifier()
	 * @uses XWeb1003TypeLoadApplicationsByRepAndDateRangeRequest::getDate_Start()
	 * @uses XWeb1003TypeLoadApplicationsByRepAndDateRangeRequest::getDate_End()
	 * @param XWeb1003TypeLoadApplicationsByRepAndDateRangeRequest LoadApplicationsByRepAndDateRangeRequest
	 * @return XWeb1003TypeLoadApplicationsByRepAndDateRangeResponse
	 */
	public function LoadApplicationsByRepAndDateRange(XWeb1003TypeLoadApplicationsByRepAndDateRangeRequest $_XWeb1003TypeLoadApplicationsByRepAndDateRangeRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadApplicationsByRepAndDateRange(array('Rep_Identifier'=>$_XWeb1003TypeLoadApplicationsByRepAndDateRangeRequest->getRep_Identifier(),'Date_Start'=>$_XWeb1003TypeLoadApplicationsByRepAndDateRangeRequest->getDate_Start(),'Date_End'=>$_XWeb1003TypeLoadApplicationsByRepAndDateRangeRequest->getDate_End())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadApplicationsByRepAndDateRangePaged
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeLoadApplicationsByRepAndDateRangePagedRequest::getRep_Identifier()
	 * @uses XWeb1003TypeLoadApplicationsByRepAndDateRangePagedRequest::getDate_Start()
	 * @uses XWeb1003TypeLoadApplicationsByRepAndDateRangePagedRequest::getDate_End()
	 * @uses XWeb1003TypeLoadApplicationsByRepAndDateRangePagedRequest::getPage_Number()
	 * @uses XWeb1003TypeLoadApplicationsByRepAndDateRangePagedRequest::getPage_Size()
	 * @param XWeb1003TypeLoadApplicationsByRepAndDateRangePagedRequest LoadApplicationsByRepAndDateRangePagedRequest
	 * @return XWeb1003TypeLoadApplicationsByRepAndDateRangePagedResponse
	 */
	public function LoadApplicationsByRepAndDateRangePaged(XWeb1003TypeLoadApplicationsByRepAndDateRangePagedRequest $_XWeb1003TypeLoadApplicationsByRepAndDateRangePagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadApplicationsByRepAndDateRangePaged(array('Rep_Identifier'=>$_XWeb1003TypeLoadApplicationsByRepAndDateRangePagedRequest->getRep_Identifier(),'Date_Start'=>$_XWeb1003TypeLoadApplicationsByRepAndDateRangePagedRequest->getDate_Start(),'Date_End'=>$_XWeb1003TypeLoadApplicationsByRepAndDateRangePagedRequest->getDate_End(),'Page_Number'=>$_XWeb1003TypeLoadApplicationsByRepAndDateRangePagedRequest->getPage_Number(),'Page_Size'=>$_XWeb1003TypeLoadApplicationsByRepAndDateRangePagedRequest->getPage_Size())));
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
	 * @return XWeb1003TypeLoadApplicationsByRepAndDateRangePagedResponse
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