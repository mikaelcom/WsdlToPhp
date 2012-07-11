<?php
/**
 * Class file for XWebNewsServiceLoad
 * @date 09/07/2012
 */
/**
 * Class XWebNewsServiceLoad
 * @date 09/07/2012
 */
class XWebNewsServiceLoad extends XWebNewsWsdlClass
{
	/**
	 * Method to call LoadArticle
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @uses XWebNewsTypeLoadArticleRequest::getArticle_ID()
	 * @param XWebNewsTypeLoadArticleRequest LoadArticleRequest
	 * @return XWebNewsTypeLoadArticleResponse
	 */
	public function LoadArticle(XWebNewsTypeLoadArticleRequest $_XWebNewsTypeLoadArticleRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadArticle(array('Article_ID'=>$_XWebNewsTypeLoadArticleRequest->getArticle_ID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadArticles
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @param UNKNOWN UNKNOWN
	 * @return XWebNewsTypeLoadArticlesResponse
	 */
	public function LoadArticles(XWebNewsTypeUNKNOWN $_XWebNewsTypeUNKNOWN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadArticles(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadArticlesBySource
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @uses XWebNewsTypeLoadArticlesBySourceRequest::getSource_Identifier()
	 * @param XWebNewsTypeLoadArticlesBySourceRequest LoadArticlesBySourceRequest
	 * @return XWebNewsTypeLoadArticlesBySourceResponse
	 */
	public function LoadArticlesBySource(XWebNewsTypeLoadArticlesBySourceRequest $_XWebNewsTypeLoadArticlesBySourceRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadArticlesBySource(array('Source_Identifier'=>$_XWebNewsTypeLoadArticlesBySourceRequest->getSource_Identifier())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadArticlesByDateRange
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @uses XWebNewsTypeLoadArticlesByDateRangeRequest::getDate_Start()
	 * @uses XWebNewsTypeLoadArticlesByDateRangeRequest::getDate_End()
	 * @param XWebNewsTypeLoadArticlesByDateRangeRequest LoadArticlesByDateRangeRequest
	 * @return XWebNewsTypeLoadArticlesByDateRangeResponse
	 */
	public function LoadArticlesByDateRange(XWebNewsTypeLoadArticlesByDateRangeRequest $_XWebNewsTypeLoadArticlesByDateRangeRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadArticlesByDateRange(array('Date_Start'=>$_XWebNewsTypeLoadArticlesByDateRangeRequest->getDate_Start(),'Date_End'=>$_XWebNewsTypeLoadArticlesByDateRangeRequest->getDate_End())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadArticlesBySourceAndDateRange
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @uses XWebNewsTypeLoadArticlesBySourceAndDateRangeRequest::getSource_Identifier()
	 * @uses XWebNewsTypeLoadArticlesBySourceAndDateRangeRequest::getDate_Start()
	 * @uses XWebNewsTypeLoadArticlesBySourceAndDateRangeRequest::getDate_End()
	 * @param XWebNewsTypeLoadArticlesBySourceAndDateRangeRequest LoadArticlesBySourceAndDateRangeRequest
	 * @return XWebNewsTypeLoadArticlesBySourceAndDateRangeResponse
	 */
	public function LoadArticlesBySourceAndDateRange(XWebNewsTypeLoadArticlesBySourceAndDateRangeRequest $_XWebNewsTypeLoadArticlesBySourceAndDateRangeRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadArticlesBySourceAndDateRange(array('Source_Identifier'=>$_XWebNewsTypeLoadArticlesBySourceAndDateRangeRequest->getSource_Identifier(),'Date_Start'=>$_XWebNewsTypeLoadArticlesBySourceAndDateRangeRequest->getDate_Start(),'Date_End'=>$_XWebNewsTypeLoadArticlesBySourceAndDateRangeRequest->getDate_End())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadArticlesPaged
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @uses XWebNewsTypeLoadArticlesPagedRequest::getPage_Number()
	 * @uses XWebNewsTypeLoadArticlesPagedRequest::getPage_Size()
	 * @param XWebNewsTypeLoadArticlesPagedRequest LoadArticlesPagedRequest
	 * @return XWebNewsTypeLoadArticlesPagedResponse
	 */
	public function LoadArticlesPaged(XWebNewsTypeLoadArticlesPagedRequest $_XWebNewsTypeLoadArticlesPagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadArticlesPaged(array('Page_Number'=>$_XWebNewsTypeLoadArticlesPagedRequest->getPage_Number(),'Page_Size'=>$_XWebNewsTypeLoadArticlesPagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadArticlesBySourcePaged
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @uses XWebNewsTypeLoadArticlesBySourcePagedRequest::getSource_Identifier()
	 * @uses XWebNewsTypeLoadArticlesBySourcePagedRequest::getPage_Number()
	 * @uses XWebNewsTypeLoadArticlesBySourcePagedRequest::getPage_Size()
	 * @param XWebNewsTypeLoadArticlesBySourcePagedRequest LoadArticlesBySourcePagedRequest
	 * @return XWebNewsTypeLoadArticlesBySourcePagedResponse
	 */
	public function LoadArticlesBySourcePaged(XWebNewsTypeLoadArticlesBySourcePagedRequest $_XWebNewsTypeLoadArticlesBySourcePagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadArticlesBySourcePaged(array('Source_Identifier'=>$_XWebNewsTypeLoadArticlesBySourcePagedRequest->getSource_Identifier(),'Page_Number'=>$_XWebNewsTypeLoadArticlesBySourcePagedRequest->getPage_Number(),'Page_Size'=>$_XWebNewsTypeLoadArticlesBySourcePagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadArticlesByDateRangePaged
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @uses XWebNewsTypeLoadArticlesByDateRangePagedRequest::getDate_Start()
	 * @uses XWebNewsTypeLoadArticlesByDateRangePagedRequest::getDate_End()
	 * @uses XWebNewsTypeLoadArticlesByDateRangePagedRequest::getPage_Number()
	 * @uses XWebNewsTypeLoadArticlesByDateRangePagedRequest::getPage_Size()
	 * @param XWebNewsTypeLoadArticlesByDateRangePagedRequest LoadArticlesByDateRangePagedRequest
	 * @return XWebNewsTypeLoadArticlesByDateRangePagedResponse
	 */
	public function LoadArticlesByDateRangePaged(XWebNewsTypeLoadArticlesByDateRangePagedRequest $_XWebNewsTypeLoadArticlesByDateRangePagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadArticlesByDateRangePaged(array('Date_Start'=>$_XWebNewsTypeLoadArticlesByDateRangePagedRequest->getDate_Start(),'Date_End'=>$_XWebNewsTypeLoadArticlesByDateRangePagedRequest->getDate_End(),'Page_Number'=>$_XWebNewsTypeLoadArticlesByDateRangePagedRequest->getPage_Number(),'Page_Size'=>$_XWebNewsTypeLoadArticlesByDateRangePagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadArticlesBySourceAndDateRangePaged
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @uses XWebNewsTypeLoadArticlesBySourceAndDateRangePagedRequest::getSource_Identifier()
	 * @uses XWebNewsTypeLoadArticlesBySourceAndDateRangePagedRequest::getDate_Start()
	 * @uses XWebNewsTypeLoadArticlesBySourceAndDateRangePagedRequest::getDate_End()
	 * @uses XWebNewsTypeLoadArticlesBySourceAndDateRangePagedRequest::getPage_Number()
	 * @uses XWebNewsTypeLoadArticlesBySourceAndDateRangePagedRequest::getPage_Size()
	 * @param XWebNewsTypeLoadArticlesBySourceAndDateRangePagedRequest LoadArticlesBySourceAndDateRangePagedRequest
	 * @return XWebNewsTypeLoadArticlesBySourceAndDateRangePagedResponse
	 */
	public function LoadArticlesBySourceAndDateRangePaged(XWebNewsTypeLoadArticlesBySourceAndDateRangePagedRequest $_XWebNewsTypeLoadArticlesBySourceAndDateRangePagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadArticlesBySourceAndDateRangePaged(array('Source_Identifier'=>$_XWebNewsTypeLoadArticlesBySourceAndDateRangePagedRequest->getSource_Identifier(),'Date_Start'=>$_XWebNewsTypeLoadArticlesBySourceAndDateRangePagedRequest->getDate_Start(),'Date_End'=>$_XWebNewsTypeLoadArticlesBySourceAndDateRangePagedRequest->getDate_End(),'Page_Number'=>$_XWebNewsTypeLoadArticlesBySourceAndDateRangePagedRequest->getPage_Number(),'Page_Size'=>$_XWebNewsTypeLoadArticlesBySourceAndDateRangePagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadPersonalizedArticles
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @uses XWebNewsTypeLoadPersonalizedArticlesRequest::getSource_Identifier()
	 * @param XWebNewsTypeLoadPersonalizedArticlesRequest LoadPersonalizedArticlesRequest
	 * @return XWebNewsTypeLoadPersonalizedArticlesResponse
	 */
	public function LoadPersonalizedArticles(XWebNewsTypeLoadPersonalizedArticlesRequest $_XWebNewsTypeLoadPersonalizedArticlesRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadPersonalizedArticles(array('Source_Identifier'=>$_XWebNewsTypeLoadPersonalizedArticlesRequest->getSource_Identifier())));
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
	 * @return XWebNewsTypeLoadPersonalizedArticlesResponse
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