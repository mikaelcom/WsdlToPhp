<?php
/**
 * Class file for XWebLeadServiceLoad
 * @date 09/07/2012
 */
/**
 * Class XWebLeadServiceLoad
 * @date 09/07/2012
 */
class XWebLeadServiceLoad extends XWebLeadWsdlClass
{
	/**
	 * Method to call LoadLead
	 * @uses XWebLeadWsdlClass::getSoapClient()
	 * @uses XWebLeadWsdlClass::setResult()
	 * @uses XWebLeadWsdlClass::getResult()
	 * @uses XWebLeadWsdlClass::saveLastError()
	 * @uses XWebLeadTypeLoadLeadRequest::getLead_ID()
	 * @param XWebLeadTypeLoadLeadRequest LoadLeadRequest
	 * @return XWebLeadTypeLoadLeadResponse
	 */
	public function LoadLead(XWebLeadTypeLoadLeadRequest $_XWebLeadTypeLoadLeadRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadLead(array('Lead_ID'=>$_XWebLeadTypeLoadLeadRequest->getLead_ID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadLeads
	 * @uses XWebLeadWsdlClass::getSoapClient()
	 * @uses XWebLeadWsdlClass::setResult()
	 * @uses XWebLeadWsdlClass::getResult()
	 * @uses XWebLeadWsdlClass::saveLastError()
	 * @param UNKNOWN UNKNOWN
	 * @return XWebLeadTypeLoadLeadsResponse
	 */
	public function LoadLeads(XWebLeadTypeUNKNOWN $_XWebLeadTypeUNKNOWN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadLeads(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadLeadsByDateRange
	 * @uses XWebLeadWsdlClass::getSoapClient()
	 * @uses XWebLeadWsdlClass::setResult()
	 * @uses XWebLeadWsdlClass::getResult()
	 * @uses XWebLeadWsdlClass::saveLastError()
	 * @uses XWebLeadTypeLoadLeadsByDateRangeRequest::getDate_Start()
	 * @uses XWebLeadTypeLoadLeadsByDateRangeRequest::getDate_End()
	 * @param XWebLeadTypeLoadLeadsByDateRangeRequest LoadLeadsByDateRangeRequest
	 * @return XWebLeadTypeLoadLeadsByDateRangeResponse
	 */
	public function LoadLeadsByDateRange(XWebLeadTypeLoadLeadsByDateRangeRequest $_XWebLeadTypeLoadLeadsByDateRangeRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadLeadsByDateRange(array('Date_Start'=>$_XWebLeadTypeLoadLeadsByDateRangeRequest->getDate_Start(),'Date_End'=>$_XWebLeadTypeLoadLeadsByDateRangeRequest->getDate_End())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadLeadsPaged
	 * @uses XWebLeadWsdlClass::getSoapClient()
	 * @uses XWebLeadWsdlClass::setResult()
	 * @uses XWebLeadWsdlClass::getResult()
	 * @uses XWebLeadWsdlClass::saveLastError()
	 * @uses XWebLeadTypeLoadLeadsPagedRequest::getPage_Number()
	 * @uses XWebLeadTypeLoadLeadsPagedRequest::getPage_Size()
	 * @param XWebLeadTypeLoadLeadsPagedRequest LoadLeadsPagedRequest
	 * @return XWebLeadTypeLoadLeadsPagedResponse
	 */
	public function LoadLeadsPaged(XWebLeadTypeLoadLeadsPagedRequest $_XWebLeadTypeLoadLeadsPagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadLeadsPaged(array('Page_Number'=>$_XWebLeadTypeLoadLeadsPagedRequest->getPage_Number(),'Page_Size'=>$_XWebLeadTypeLoadLeadsPagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadLeadsByDateRangePaged
	 * @uses XWebLeadWsdlClass::getSoapClient()
	 * @uses XWebLeadWsdlClass::setResult()
	 * @uses XWebLeadWsdlClass::getResult()
	 * @uses XWebLeadWsdlClass::saveLastError()
	 * @uses XWebLeadTypeLoadLeadsByDateRangePagedRequest::getDate_Start()
	 * @uses XWebLeadTypeLoadLeadsByDateRangePagedRequest::getDate_End()
	 * @uses XWebLeadTypeLoadLeadsByDateRangePagedRequest::getPage_Number()
	 * @uses XWebLeadTypeLoadLeadsByDateRangePagedRequest::getPage_Size()
	 * @param XWebLeadTypeLoadLeadsByDateRangePagedRequest LoadLeadsByDateRangePagedRequest
	 * @return XWebLeadTypeLoadLeadsByDateRangePagedResponse
	 */
	public function LoadLeadsByDateRangePaged(XWebLeadTypeLoadLeadsByDateRangePagedRequest $_XWebLeadTypeLoadLeadsByDateRangePagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadLeadsByDateRangePaged(array('Date_Start'=>$_XWebLeadTypeLoadLeadsByDateRangePagedRequest->getDate_Start(),'Date_End'=>$_XWebLeadTypeLoadLeadsByDateRangePagedRequest->getDate_End(),'Page_Number'=>$_XWebLeadTypeLoadLeadsByDateRangePagedRequest->getPage_Number(),'Page_Size'=>$_XWebLeadTypeLoadLeadsByDateRangePagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadLeadsBySource
	 * @uses XWebLeadWsdlClass::getSoapClient()
	 * @uses XWebLeadWsdlClass::setResult()
	 * @uses XWebLeadWsdlClass::getResult()
	 * @uses XWebLeadWsdlClass::saveLastError()
	 * @uses XWebLeadTypeLoadLeadsBySourceRequest::getSource_Identifier()
	 * @param XWebLeadTypeLoadLeadsBySourceRequest LoadLeadsBySourceRequest
	 * @return XWebLeadTypeLoadLeadsBySourceResponse
	 */
	public function LoadLeadsBySource(XWebLeadTypeLoadLeadsBySourceRequest $_XWebLeadTypeLoadLeadsBySourceRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadLeadsBySource(array('Source_Identifier'=>$_XWebLeadTypeLoadLeadsBySourceRequest->getSource_Identifier())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadLeadsBySourceAndDateRange
	 * @uses XWebLeadWsdlClass::getSoapClient()
	 * @uses XWebLeadWsdlClass::setResult()
	 * @uses XWebLeadWsdlClass::getResult()
	 * @uses XWebLeadWsdlClass::saveLastError()
	 * @uses XWebLeadTypeLoadLeadsBySourceAndDateRangeRequest::getSource_Identifier()
	 * @uses XWebLeadTypeLoadLeadsBySourceAndDateRangeRequest::getDate_Start()
	 * @uses XWebLeadTypeLoadLeadsBySourceAndDateRangeRequest::getDate_End()
	 * @param XWebLeadTypeLoadLeadsBySourceAndDateRangeRequest LoadLeadsBySourceAndDateRangeRequest
	 * @return XWebLeadTypeLoadLeadsBySourceAndDateRangeResponse
	 */
	public function LoadLeadsBySourceAndDateRange(XWebLeadTypeLoadLeadsBySourceAndDateRangeRequest $_XWebLeadTypeLoadLeadsBySourceAndDateRangeRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadLeadsBySourceAndDateRange(array('Source_Identifier'=>$_XWebLeadTypeLoadLeadsBySourceAndDateRangeRequest->getSource_Identifier(),'Date_Start'=>$_XWebLeadTypeLoadLeadsBySourceAndDateRangeRequest->getDate_Start(),'Date_End'=>$_XWebLeadTypeLoadLeadsBySourceAndDateRangeRequest->getDate_End())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadLeadsBySourcePaged
	 * @uses XWebLeadWsdlClass::getSoapClient()
	 * @uses XWebLeadWsdlClass::setResult()
	 * @uses XWebLeadWsdlClass::getResult()
	 * @uses XWebLeadWsdlClass::saveLastError()
	 * @uses XWebLeadTypeLoadLeadsBySourcePagedRequest::getSource_Identifier()
	 * @uses XWebLeadTypeLoadLeadsBySourcePagedRequest::getPage_Number()
	 * @uses XWebLeadTypeLoadLeadsBySourcePagedRequest::getPage_Size()
	 * @param XWebLeadTypeLoadLeadsBySourcePagedRequest LoadLeadsBySourcePagedRequest
	 * @return XWebLeadTypeLoadLeadsBySourcePagedResponse
	 */
	public function LoadLeadsBySourcePaged(XWebLeadTypeLoadLeadsBySourcePagedRequest $_XWebLeadTypeLoadLeadsBySourcePagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadLeadsBySourcePaged(array('Source_Identifier'=>$_XWebLeadTypeLoadLeadsBySourcePagedRequest->getSource_Identifier(),'Page_Number'=>$_XWebLeadTypeLoadLeadsBySourcePagedRequest->getPage_Number(),'Page_Size'=>$_XWebLeadTypeLoadLeadsBySourcePagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadLeadsBySourceAndDateRangePaged
	 * @uses XWebLeadWsdlClass::getSoapClient()
	 * @uses XWebLeadWsdlClass::setResult()
	 * @uses XWebLeadWsdlClass::getResult()
	 * @uses XWebLeadWsdlClass::saveLastError()
	 * @uses XWebLeadTypeLoadLeadsBySourceAndDateRangePagedRequest::getSource_Identifier()
	 * @uses XWebLeadTypeLoadLeadsBySourceAndDateRangePagedRequest::getDate_Start()
	 * @uses XWebLeadTypeLoadLeadsBySourceAndDateRangePagedRequest::getDate_End()
	 * @uses XWebLeadTypeLoadLeadsBySourceAndDateRangePagedRequest::getPage_Number()
	 * @uses XWebLeadTypeLoadLeadsBySourceAndDateRangePagedRequest::getPage_Size()
	 * @param XWebLeadTypeLoadLeadsBySourceAndDateRangePagedRequest LoadLeadsBySourceAndDateRangePagedRequest
	 * @return XWebLeadTypeLoadLeadsBySourceAndDateRangePagedResponse
	 */
	public function LoadLeadsBySourceAndDateRangePaged(XWebLeadTypeLoadLeadsBySourceAndDateRangePagedRequest $_XWebLeadTypeLoadLeadsBySourceAndDateRangePagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadLeadsBySourceAndDateRangePaged(array('Source_Identifier'=>$_XWebLeadTypeLoadLeadsBySourceAndDateRangePagedRequest->getSource_Identifier(),'Date_Start'=>$_XWebLeadTypeLoadLeadsBySourceAndDateRangePagedRequest->getDate_Start(),'Date_End'=>$_XWebLeadTypeLoadLeadsBySourceAndDateRangePagedRequest->getDate_End(),'Page_Number'=>$_XWebLeadTypeLoadLeadsBySourceAndDateRangePagedRequest->getPage_Number(),'Page_Size'=>$_XWebLeadTypeLoadLeadsBySourceAndDateRangePagedRequest->getPage_Size())));
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
	 * @return XWebLeadTypeLoadLeadsBySourceAndDateRangePagedResponse
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