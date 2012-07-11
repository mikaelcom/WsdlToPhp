<?php
/**
 * Class file for XiEdgarServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiEdgarServiceGet
 * @date 08/07/2012
 */
class XiEdgarServiceGet extends XiEdgarWsdlClass
{
	/**
	 * Method to call GetCIK
	 * Meta informations :
	 * 	- documentation : Get a firm's CIK code based on a symbol.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeGetCIK::getSymbol()
	 * @param XiEdgarTypeGetCIK GetCIK
	 * @return XiEdgarTypeGetCIKResponse
	 */
	public function GetCIK(XiEdgarTypeGetCIK $_XiEdgarTypeGetCIK)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCIK(array('Symbol'=>$_XiEdgarTypeGetCIK->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRecentFilings
	 * Meta informations :
	 * 	- documentation : Returns recent filings for most popular forms.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeGetRecentFilings::getDay()
	 * @uses XiEdgarTypeGetRecentFilings::getForm()
	 * @param XiEdgarTypeGetRecentFilings GetRecentFilings
	 * @return XiEdgarTypeGetRecentFilingsResponse
	 */
	public function GetRecentFilings(XiEdgarTypeGetRecentFilings $_XiEdgarTypeGetRecentFilings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRecentFilings(array('Day'=>$_XiEdgarTypeGetRecentFilings->getDay(),'Form'=>$_XiEdgarTypeGetRecentFilings->getForm())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFilingOccurrences
	 * Meta informations :
	 * 	- documentation : List number of filings occuring during a period for a firm.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeGetFilingOccurrences::getIdentifier()
	 * @uses XiEdgarTypeGetFilingOccurrences::getIdentifierType()
	 * @uses XiEdgarTypeGetFilingOccurrences::getFromDate()
	 * @uses XiEdgarTypeGetFilingOccurrences::getToDate()
	 * @param XiEdgarTypeGetFilingOccurrences GetFilingOccurrences
	 * @return XiEdgarTypeGetFilingOccurrencesResponse
	 */
	public function GetFilingOccurrences(XiEdgarTypeGetFilingOccurrences $_XiEdgarTypeGetFilingOccurrences)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFilingOccurrences(array('Identifier'=>$_XiEdgarTypeGetFilingOccurrences->getIdentifier(),'IdentifierType'=>$_XiEdgarTypeGetFilingOccurrences->getIdentifierType(),'FromDate'=>$_XiEdgarTypeGetFilingOccurrences->getFromDate(),'ToDate'=>$_XiEdgarTypeGetFilingOccurrences->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastFiling
	 * Meta informations :
	 * 	- documentation : Get the most recent filing of a specific type for a company.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeGetLastFiling::getIdentifier()
	 * @uses XiEdgarTypeGetLastFiling::getIdentifierType()
	 * @uses XiEdgarTypeGetLastFiling::getForm()
	 * @param XiEdgarTypeGetLastFiling GetLastFiling
	 * @return XiEdgarTypeGetLastFilingResponse
	 */
	public function GetLastFiling(XiEdgarTypeGetLastFiling $_XiEdgarTypeGetLastFiling)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastFiling(array('Identifier'=>$_XiEdgarTypeGetLastFiling->getIdentifier(),'IdentifierType'=>$_XiEdgarTypeGetLastFiling->getIdentifierType(),'Form'=>$_XiEdgarTypeGetLastFiling->getForm())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFilingAsText
	 * Meta informations :
	 * 	- documentation : Retrieve a text Filing by Url.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeGetFilingAsText::getTextFileUrl()
	 * @uses XiEdgarTypeGetFilingAsText::getHTMLize()
	 * @param XiEdgarTypeGetFilingAsText GetFilingAsText
	 * @return XiEdgarTypeGetFilingAsTextResponse
	 */
	public function GetFilingAsText(XiEdgarTypeGetFilingAsText $_XiEdgarTypeGetFilingAsText)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFilingAsText(array('TextFileUrl'=>$_XiEdgarTypeGetFilingAsText->getTextFileUrl(),'HTMLize'=>$_XiEdgarTypeGetFilingAsText->getHTMLize())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFilingDetails
	 * Meta informations :
	 * 	- documentation : Retrieve an HTML Filing by Url.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeGetFilingDetails::getHtmlFileUrl()
	 * @param XiEdgarTypeGetFilingDetails GetFilingDetails
	 * @return XiEdgarTypeGetFilingDetailsResponse
	 */
	public function GetFilingDetails(XiEdgarTypeGetFilingDetails $_XiEdgarTypeGetFilingDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFilingDetails(array('HtmlFileUrl'=>$_XiEdgarTypeGetFilingDetails->getHtmlFileUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPDFDocument
	 * Meta informations :
	 * 	- documentation : Retrieve and enrich the content of an HTML Filing by Url.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeGetPDFDocument::getHtmlFileUrl()
	 * @param XiEdgarTypeGetPDFDocument GetPDFDocument
	 * @return XiEdgarTypeGetPDFDocumentResponse
	 */
	public function GetPDFDocument(XiEdgarTypeGetPDFDocument $_XiEdgarTypeGetPDFDocument)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPDFDocument(array('HtmlFileUrl'=>$_XiEdgarTypeGetPDFDocument->getHtmlFileUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetManagementOwnership
	 * Meta informations :
	 * 	- documentation : Returns management ownership information from proxy statements.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeGetManagementOwnership::getIdentifier()
	 * @uses XiEdgarTypeGetManagementOwnership::getIdentifierType()
	 * @param XiEdgarTypeGetManagementOwnership GetManagementOwnership
	 * @return XiEdgarTypeGetManagementOwnershipResponse
	 */
	public function GetManagementOwnership(XiEdgarTypeGetManagementOwnership $_XiEdgarTypeGetManagementOwnership)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetManagementOwnership(array('Identifier'=>$_XiEdgarTypeGetManagementOwnership->getIdentifier(),'IdentifierType'=>$_XiEdgarTypeGetManagementOwnership->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSharesOutstanding
	 * Meta informations :
	 * 	- documentation : Returns share outstanding information for a security.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeGetSharesOutstanding::getIdentifier()
	 * @uses XiEdgarTypeGetSharesOutstanding::getIdentifierType()
	 * @param XiEdgarTypeGetSharesOutstanding GetSharesOutstanding
	 * @return XiEdgarTypeGetSharesOutstandingResponse
	 */
	public function GetSharesOutstanding(XiEdgarTypeGetSharesOutstanding $_XiEdgarTypeGetSharesOutstanding)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSharesOutstanding(array('Identifier'=>$_XiEdgarTypeGetSharesOutstanding->getIdentifier(),'IdentifierType'=>$_XiEdgarTypeGetSharesOutstanding->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTotalAssets
	 * Meta informations :
	 * 	- documentation : Returns an ownership file (Forms 3, 4 or 5) by Url.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeGetTotalAssets::getIdentifier()
	 * @uses XiEdgarTypeGetTotalAssets::getIdentifierType()
	 * @param XiEdgarTypeGetTotalAssets GetTotalAssets
	 * @return XiEdgarTypeGetTotalAssetsResponse
	 */
	public function GetTotalAssets(XiEdgarTypeGetTotalAssets $_XiEdgarTypeGetTotalAssets)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTotalAssets(array('Identifier'=>$_XiEdgarTypeGetTotalAssets->getIdentifier(),'IdentifierType'=>$_XiEdgarTypeGetTotalAssets->getIdentifierType())));
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
	 * @return XiEdgarTypeGetTotalAssetsResponse
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