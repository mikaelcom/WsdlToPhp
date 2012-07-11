<?php
/**
 * Class file for XiFinancialsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsServiceGet
 * @date 08/07/2012
 */
class XiFinancialsServiceGet extends XiFinancialsWsdlClass
{
	/**
	 * Method to call GetReportDate
	 * Meta informations :
	 * 	- documentation : Get the latest report date for a company.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetReportDate::getIdentifier()
	 * @uses XiFinancialsTypeGetReportDate::getIdentifierType()
	 * @uses XiFinancialsTypeGetReportDate::getReportType()
	 * @uses XiFinancialsTypeGetReportDate::getAsOfDate()
	 * @param XiFinancialsTypeGetReportDate GetReportDate
	 * @return XiFinancialsTypeGetReportDateResponse
	 */
	public function GetReportDate(XiFinancialsTypeGetReportDate $_XiFinancialsTypeGetReportDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetReportDate(array('Identifier'=>$_XiFinancialsTypeGetReportDate->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetReportDate->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetReportDate->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetReportDate->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllFinancials
	 * Meta informations :
	 * 	- documentation : Get all financials for an item.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetAllFinancials::getIdentifier()
	 * @uses XiFinancialsTypeGetAllFinancials::getIdentifierType()
	 * @uses XiFinancialsTypeGetAllFinancials::getReportType()
	 * @uses XiFinancialsTypeGetAllFinancials::getAsOfDate()
	 * @param XiFinancialsTypeGetAllFinancials GetAllFinancials
	 * @return XiFinancialsTypeGetAllFinancialsResponse
	 */
	public function GetAllFinancials(XiFinancialsTypeGetAllFinancials $_XiFinancialsTypeGetAllFinancials)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllFinancials(array('Identifier'=>$_XiFinancialsTypeGetAllFinancials->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetAllFinancials->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetAllFinancials->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetAllFinancials->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStandardItem
	 * Meta informations :
	 * 	- documentation : Get a financial item for a security as of a certain date using the standard template.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetStandardItem::getType()
	 * @uses XiFinancialsTypeGetStandardItem::getIdentifier()
	 * @uses XiFinancialsTypeGetStandardItem::getIdentifierType()
	 * @uses XiFinancialsTypeGetStandardItem::getReportType()
	 * @uses XiFinancialsTypeGetStandardItem::getAsOfDate()
	 * @param XiFinancialsTypeGetStandardItem GetStandardItem
	 * @return XiFinancialsTypeGetStandardItemResponse
	 */
	public function GetStandardItem(XiFinancialsTypeGetStandardItem $_XiFinancialsTypeGetStandardItem)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStandardItem(array('Type'=>$_XiFinancialsTypeGetStandardItem->getType(),'Identifier'=>$_XiFinancialsTypeGetStandardItem->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetStandardItem->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetStandardItem->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetStandardItem->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFinancialServicesItem
	 * Meta informations :
	 * 	- documentation : Get a financial item for a security as of a certain date using the financial services template.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetFinancialServicesItem::getType()
	 * @uses XiFinancialsTypeGetFinancialServicesItem::getIdentifier()
	 * @uses XiFinancialsTypeGetFinancialServicesItem::getIdentifierType()
	 * @uses XiFinancialsTypeGetFinancialServicesItem::getReportType()
	 * @uses XiFinancialsTypeGetFinancialServicesItem::getAsOfDate()
	 * @param XiFinancialsTypeGetFinancialServicesItem GetFinancialServicesItem
	 * @return XiFinancialsTypeGetFinancialServicesItemResponse
	 */
	public function GetFinancialServicesItem(XiFinancialsTypeGetFinancialServicesItem $_XiFinancialsTypeGetFinancialServicesItem)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFinancialServicesItem(array('Type'=>$_XiFinancialsTypeGetFinancialServicesItem->getType(),'Identifier'=>$_XiFinancialsTypeGetFinancialServicesItem->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetFinancialServicesItem->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetFinancialServicesItem->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetFinancialServicesItem->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStandardItemRange
	 * Meta informations :
	 * 	- documentation : Get a financial item for a security as of a certain date using the standard template.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetStandardItemRange::getType()
	 * @uses XiFinancialsTypeGetStandardItemRange::getIdentifier()
	 * @uses XiFinancialsTypeGetStandardItemRange::getIdentifierType()
	 * @uses XiFinancialsTypeGetStandardItemRange::getReportType()
	 * @uses XiFinancialsTypeGetStandardItemRange::getStartDate()
	 * @uses XiFinancialsTypeGetStandardItemRange::getEndDate()
	 * @param XiFinancialsTypeGetStandardItemRange GetStandardItemRange
	 * @return XiFinancialsTypeGetStandardItemRangeResponse
	 */
	public function GetStandardItemRange(XiFinancialsTypeGetStandardItemRange $_XiFinancialsTypeGetStandardItemRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStandardItemRange(array('Type'=>$_XiFinancialsTypeGetStandardItemRange->getType(),'Identifier'=>$_XiFinancialsTypeGetStandardItemRange->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetStandardItemRange->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetStandardItemRange->getReportType(),'StartDate'=>$_XiFinancialsTypeGetStandardItemRange->getStartDate(),'EndDate'=>$_XiFinancialsTypeGetStandardItemRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFinancialServicesItemRange
	 * Meta informations :
	 * 	- documentation : Get a financial item for a security as of a certain date using the financial services template.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetFinancialServicesItemRange::getType()
	 * @uses XiFinancialsTypeGetFinancialServicesItemRange::getIdentifier()
	 * @uses XiFinancialsTypeGetFinancialServicesItemRange::getIdentifierType()
	 * @uses XiFinancialsTypeGetFinancialServicesItemRange::getReportType()
	 * @uses XiFinancialsTypeGetFinancialServicesItemRange::getStartDate()
	 * @uses XiFinancialsTypeGetFinancialServicesItemRange::getEndDate()
	 * @param XiFinancialsTypeGetFinancialServicesItemRange GetFinancialServicesItemRange
	 * @return XiFinancialsTypeGetFinancialServicesItemRangeResponse
	 */
	public function GetFinancialServicesItemRange(XiFinancialsTypeGetFinancialServicesItemRange $_XiFinancialsTypeGetFinancialServicesItemRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFinancialServicesItemRange(array('Type'=>$_XiFinancialsTypeGetFinancialServicesItemRange->getType(),'Identifier'=>$_XiFinancialsTypeGetFinancialServicesItemRange->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetFinancialServicesItemRange->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetFinancialServicesItemRange->getReportType(),'StartDate'=>$_XiFinancialsTypeGetFinancialServicesItemRange->getStartDate(),'EndDate'=>$_XiFinancialsTypeGetFinancialServicesItemRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStandardItemList
	 * Meta informations :
	 * 	- documentation : Get multiple financial items for a security using the standard template.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetStandardItemList::getTypes()
	 * @uses XiFinancialsTypeGetStandardItemList::getIdentifier()
	 * @uses XiFinancialsTypeGetStandardItemList::getIdentifierType()
	 * @uses XiFinancialsTypeGetStandardItemList::getReportType()
	 * @uses XiFinancialsTypeGetStandardItemList::getAsOfDate()
	 * @param XiFinancialsTypeGetStandardItemList GetStandardItemList
	 * @return XiFinancialsTypeGetStandardItemListResponse
	 */
	public function GetStandardItemList(XiFinancialsTypeGetStandardItemList $_XiFinancialsTypeGetStandardItemList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStandardItemList(array('Types'=>$_XiFinancialsTypeGetStandardItemList->getTypes(),'Identifier'=>$_XiFinancialsTypeGetStandardItemList->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetStandardItemList->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetStandardItemList->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetStandardItemList->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFinancialServicesItemList
	 * Meta informations :
	 * 	- documentation : Get multiple financial items for a security using the financial services template.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetFinancialServicesItemList::getTypes()
	 * @uses XiFinancialsTypeGetFinancialServicesItemList::getIdentifier()
	 * @uses XiFinancialsTypeGetFinancialServicesItemList::getIdentifierType()
	 * @uses XiFinancialsTypeGetFinancialServicesItemList::getReportType()
	 * @uses XiFinancialsTypeGetFinancialServicesItemList::getAsOfDate()
	 * @param XiFinancialsTypeGetFinancialServicesItemList GetFinancialServicesItemList
	 * @return XiFinancialsTypeGetFinancialServicesItemListResponse
	 */
	public function GetFinancialServicesItemList(XiFinancialsTypeGetFinancialServicesItemList $_XiFinancialsTypeGetFinancialServicesItemList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFinancialServicesItemList(array('Types'=>$_XiFinancialsTypeGetFinancialServicesItemList->getTypes(),'Identifier'=>$_XiFinancialsTypeGetFinancialServicesItemList->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetFinancialServicesItemList->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetFinancialServicesItemList->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetFinancialServicesItemList->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStandardItems
	 * Meta informations :
	 * 	- documentation : Get the same financial item across multiple securities using the standard template.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetStandardItems::getType()
	 * @uses XiFinancialsTypeGetStandardItems::getIdentifiers()
	 * @uses XiFinancialsTypeGetStandardItems::getIdentifierType()
	 * @uses XiFinancialsTypeGetStandardItems::getReportType()
	 * @uses XiFinancialsTypeGetStandardItems::getAsOfDate()
	 * @param XiFinancialsTypeGetStandardItems GetStandardItems
	 * @return XiFinancialsTypeGetStandardItemsResponse
	 */
	public function GetStandardItems(XiFinancialsTypeGetStandardItems $_XiFinancialsTypeGetStandardItems)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStandardItems(array('Type'=>$_XiFinancialsTypeGetStandardItems->getType(),'Identifiers'=>$_XiFinancialsTypeGetStandardItems->getIdentifiers(),'IdentifierType'=>$_XiFinancialsTypeGetStandardItems->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetStandardItems->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetStandardItems->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFinancialServicesItems
	 * Meta informations :
	 * 	- documentation : Get the same financial item across multiple securities using the financial services template.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetFinancialServicesItems::getType()
	 * @uses XiFinancialsTypeGetFinancialServicesItems::getIdentifiers()
	 * @uses XiFinancialsTypeGetFinancialServicesItems::getIdentifierType()
	 * @uses XiFinancialsTypeGetFinancialServicesItems::getReportType()
	 * @uses XiFinancialsTypeGetFinancialServicesItems::getAsOfDate()
	 * @param XiFinancialsTypeGetFinancialServicesItems GetFinancialServicesItems
	 * @return XiFinancialsTypeGetFinancialServicesItemsResponse
	 */
	public function GetFinancialServicesItems(XiFinancialsTypeGetFinancialServicesItems $_XiFinancialsTypeGetFinancialServicesItems)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFinancialServicesItems(array('Type'=>$_XiFinancialsTypeGetFinancialServicesItems->getType(),'Identifiers'=>$_XiFinancialsTypeGetFinancialServicesItems->getIdentifiers(),'IdentifierType'=>$_XiFinancialsTypeGetFinancialServicesItems->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetFinancialServicesItems->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetFinancialServicesItems->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBalanceSheet
	 * Meta informations :
	 * 	- documentation : Get a standard balance sheet for a security as of a date.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetBalanceSheet::getIdentifier()
	 * @uses XiFinancialsTypeGetBalanceSheet::getIdentifierType()
	 * @uses XiFinancialsTypeGetBalanceSheet::getReportType()
	 * @uses XiFinancialsTypeGetBalanceSheet::getAsOfDate()
	 * @param XiFinancialsTypeGetBalanceSheet GetBalanceSheet
	 * @return XiFinancialsTypeGetBalanceSheetResponse
	 */
	public function GetBalanceSheet(XiFinancialsTypeGetBalanceSheet $_XiFinancialsTypeGetBalanceSheet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBalanceSheet(array('Identifier'=>$_XiFinancialsTypeGetBalanceSheet->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetBalanceSheet->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetBalanceSheet->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetBalanceSheet->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastBalanceSheetInDateRange
	 * Meta informations :
	 * 	- documentation : Get a standard balance sheet for a security as of a date.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetLastBalanceSheetInDateRange::getIdentifier()
	 * @uses XiFinancialsTypeGetLastBalanceSheetInDateRange::getIdentifierType()
	 * @uses XiFinancialsTypeGetLastBalanceSheetInDateRange::getReportType()
	 * @uses XiFinancialsTypeGetLastBalanceSheetInDateRange::getStartDate()
	 * @uses XiFinancialsTypeGetLastBalanceSheetInDateRange::getEndDate()
	 * @param XiFinancialsTypeGetLastBalanceSheetInDateRange GetLastBalanceSheetInDateRange
	 * @return XiFinancialsTypeGetLastBalanceSheetInDateRangeResponse
	 */
	public function GetLastBalanceSheetInDateRange(XiFinancialsTypeGetLastBalanceSheetInDateRange $_XiFinancialsTypeGetLastBalanceSheetInDateRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastBalanceSheetInDateRange(array('Identifier'=>$_XiFinancialsTypeGetLastBalanceSheetInDateRange->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetLastBalanceSheetInDateRange->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetLastBalanceSheetInDateRange->getReportType(),'StartDate'=>$_XiFinancialsTypeGetLastBalanceSheetInDateRange->getStartDate(),'EndDate'=>$_XiFinancialsTypeGetLastBalanceSheetInDateRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFinancialServicesBalanceSheet
	 * Meta informations :
	 * 	- documentation : Get a standard balance sheet for a security as of a date using the financial services template.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetFinancialServicesBalanceSheet::getIdentifier()
	 * @uses XiFinancialsTypeGetFinancialServicesBalanceSheet::getIdentifierType()
	 * @uses XiFinancialsTypeGetFinancialServicesBalanceSheet::getReportType()
	 * @uses XiFinancialsTypeGetFinancialServicesBalanceSheet::getAsOfDate()
	 * @param XiFinancialsTypeGetFinancialServicesBalanceSheet GetFinancialServicesBalanceSheet
	 * @return XiFinancialsTypeGetFinancialServicesBalanceSheetResponse
	 */
	public function GetFinancialServicesBalanceSheet(XiFinancialsTypeGetFinancialServicesBalanceSheet $_XiFinancialsTypeGetFinancialServicesBalanceSheet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFinancialServicesBalanceSheet(array('Identifier'=>$_XiFinancialsTypeGetFinancialServicesBalanceSheet->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetFinancialServicesBalanceSheet->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetFinancialServicesBalanceSheet->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetFinancialServicesBalanceSheet->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBalanceSheets
	 * Meta informations :
	 * 	- documentation : Get a standard balance sheet for a list of securities as of a date.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetBalanceSheets::getIdentifiers()
	 * @uses XiFinancialsTypeGetBalanceSheets::getIdentifierType()
	 * @uses XiFinancialsTypeGetBalanceSheets::getReportType()
	 * @uses XiFinancialsTypeGetBalanceSheets::getAsOfDate()
	 * @param XiFinancialsTypeGetBalanceSheets GetBalanceSheets
	 * @return XiFinancialsTypeGetBalanceSheetsResponse
	 */
	public function GetBalanceSheets(XiFinancialsTypeGetBalanceSheets $_XiFinancialsTypeGetBalanceSheets)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBalanceSheets(array('Identifiers'=>$_XiFinancialsTypeGetBalanceSheets->getIdentifiers(),'IdentifierType'=>$_XiFinancialsTypeGetBalanceSheets->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetBalanceSheets->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetBalanceSheets->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIncomeStatement
	 * Meta informations :
	 * 	- documentation : Get an income statement for a security as of a date.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetIncomeStatement::getIdentifier()
	 * @uses XiFinancialsTypeGetIncomeStatement::getIdentifierType()
	 * @uses XiFinancialsTypeGetIncomeStatement::getReportType()
	 * @uses XiFinancialsTypeGetIncomeStatement::getAsOfDate()
	 * @param XiFinancialsTypeGetIncomeStatement GetIncomeStatement
	 * @return XiFinancialsTypeGetIncomeStatementResponse
	 */
	public function GetIncomeStatement(XiFinancialsTypeGetIncomeStatement $_XiFinancialsTypeGetIncomeStatement)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIncomeStatement(array('Identifier'=>$_XiFinancialsTypeGetIncomeStatement->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetIncomeStatement->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetIncomeStatement->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetIncomeStatement->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIncomeStatementRange
	 * Meta informations :
	 * 	- documentation : Get an income statement for a security as of a date.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetIncomeStatementRange::getIdentifier()
	 * @uses XiFinancialsTypeGetIncomeStatementRange::getIdentifierType()
	 * @uses XiFinancialsTypeGetIncomeStatementRange::getReportType()
	 * @uses XiFinancialsTypeGetIncomeStatementRange::getStartDate()
	 * @uses XiFinancialsTypeGetIncomeStatementRange::getEndDate()
	 * @param XiFinancialsTypeGetIncomeStatementRange GetIncomeStatementRange
	 * @return XiFinancialsTypeGetIncomeStatementRangeResponse
	 */
	public function GetIncomeStatementRange(XiFinancialsTypeGetIncomeStatementRange $_XiFinancialsTypeGetIncomeStatementRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIncomeStatementRange(array('Identifier'=>$_XiFinancialsTypeGetIncomeStatementRange->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetIncomeStatementRange->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetIncomeStatementRange->getReportType(),'StartDate'=>$_XiFinancialsTypeGetIncomeStatementRange->getStartDate(),'EndDate'=>$_XiFinancialsTypeGetIncomeStatementRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFinancialServicesIncomeStatement
	 * Meta informations :
	 * 	- documentation : Get an income statement for a security as of a date using the financial services template.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetFinancialServicesIncomeStatement::getIdentifier()
	 * @uses XiFinancialsTypeGetFinancialServicesIncomeStatement::getIdentifierType()
	 * @uses XiFinancialsTypeGetFinancialServicesIncomeStatement::getReportType()
	 * @uses XiFinancialsTypeGetFinancialServicesIncomeStatement::getAsOfDate()
	 * @param XiFinancialsTypeGetFinancialServicesIncomeStatement GetFinancialServicesIncomeStatement
	 * @return XiFinancialsTypeGetFinancialServicesIncomeStatementResponse
	 */
	public function GetFinancialServicesIncomeStatement(XiFinancialsTypeGetFinancialServicesIncomeStatement $_XiFinancialsTypeGetFinancialServicesIncomeStatement)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFinancialServicesIncomeStatement(array('Identifier'=>$_XiFinancialsTypeGetFinancialServicesIncomeStatement->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetFinancialServicesIncomeStatement->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetFinancialServicesIncomeStatement->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetFinancialServicesIncomeStatement->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIncomeStatements
	 * Meta informations :
	 * 	- documentation : Get an income statement for a list of securities as of a date.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetIncomeStatements::getIdentifiers()
	 * @uses XiFinancialsTypeGetIncomeStatements::getIdentifierType()
	 * @uses XiFinancialsTypeGetIncomeStatements::getReportType()
	 * @uses XiFinancialsTypeGetIncomeStatements::getAsOfDate()
	 * @param XiFinancialsTypeGetIncomeStatements GetIncomeStatements
	 * @return XiFinancialsTypeGetIncomeStatementsResponse
	 */
	public function GetIncomeStatements(XiFinancialsTypeGetIncomeStatements $_XiFinancialsTypeGetIncomeStatements)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIncomeStatements(array('Identifiers'=>$_XiFinancialsTypeGetIncomeStatements->getIdentifiers(),'IdentifierType'=>$_XiFinancialsTypeGetIncomeStatements->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetIncomeStatements->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetIncomeStatements->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCashFlowStatement
	 * Meta informations :
	 * 	- documentation : Get a cash flow statement for a security as of a date.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetCashFlowStatement::getIdentifier()
	 * @uses XiFinancialsTypeGetCashFlowStatement::getIdentifierType()
	 * @uses XiFinancialsTypeGetCashFlowStatement::getReportType()
	 * @uses XiFinancialsTypeGetCashFlowStatement::getAsOfDate()
	 * @param XiFinancialsTypeGetCashFlowStatement GetCashFlowStatement
	 * @return XiFinancialsTypeGetCashFlowStatementResponse
	 */
	public function GetCashFlowStatement(XiFinancialsTypeGetCashFlowStatement $_XiFinancialsTypeGetCashFlowStatement)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCashFlowStatement(array('Identifier'=>$_XiFinancialsTypeGetCashFlowStatement->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetCashFlowStatement->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetCashFlowStatement->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetCashFlowStatement->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCashFlowStatements
	 * Meta informations :
	 * 	- documentation : Get an income statement for a list of securities as of a date.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetCashFlowStatements::getIdentifiers()
	 * @uses XiFinancialsTypeGetCashFlowStatements::getIdentifierType()
	 * @uses XiFinancialsTypeGetCashFlowStatements::getReportType()
	 * @uses XiFinancialsTypeGetCashFlowStatements::getAsOfDate()
	 * @param XiFinancialsTypeGetCashFlowStatements GetCashFlowStatements
	 * @return XiFinancialsTypeGetCashFlowStatementsResponse
	 */
	public function GetCashFlowStatements(XiFinancialsTypeGetCashFlowStatements $_XiFinancialsTypeGetCashFlowStatements)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCashFlowStatements(array('Identifiers'=>$_XiFinancialsTypeGetCashFlowStatements->getIdentifiers(),'IdentifierType'=>$_XiFinancialsTypeGetCashFlowStatements->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetCashFlowStatements->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetCashFlowStatements->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNormalizedRatios
	 * Meta informations :
	 * 	- documentation : Get common ratios for a security as of a date.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetNormalizedRatios::getIdentifier()
	 * @uses XiFinancialsTypeGetNormalizedRatios::getIdentifierType()
	 * @uses XiFinancialsTypeGetNormalizedRatios::getReportType()
	 * @uses XiFinancialsTypeGetNormalizedRatios::getAsOfDate()
	 * @param XiFinancialsTypeGetNormalizedRatios GetNormalizedRatios
	 * @return XiFinancialsTypeGetNormalizedRatiosResponse
	 */
	public function GetNormalizedRatios(XiFinancialsTypeGetNormalizedRatios $_XiFinancialsTypeGetNormalizedRatios)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNormalizedRatios(array('Identifier'=>$_XiFinancialsTypeGetNormalizedRatios->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetNormalizedRatios->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetNormalizedRatios->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetNormalizedRatios->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCommonRatios
	 * Meta informations :
	 * 	- documentation : Get common ratios for a security as of a date.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetCommonRatios::getIdentifier()
	 * @uses XiFinancialsTypeGetCommonRatios::getIdentifierType()
	 * @uses XiFinancialsTypeGetCommonRatios::getReportType()
	 * @uses XiFinancialsTypeGetCommonRatios::getAsOfDate()
	 * @param XiFinancialsTypeGetCommonRatios GetCommonRatios
	 * @return XiFinancialsTypeGetCommonRatiosResponse
	 */
	public function GetCommonRatios(XiFinancialsTypeGetCommonRatios $_XiFinancialsTypeGetCommonRatios)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCommonRatios(array('Identifier'=>$_XiFinancialsTypeGetCommonRatios->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetCommonRatios->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetCommonRatios->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetCommonRatios->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOtherRatios
	 * Meta informations :
	 * 	- documentation : Get other ratios for a security as of a date.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetOtherRatios::getIdentifier()
	 * @uses XiFinancialsTypeGetOtherRatios::getIdentifierType()
	 * @uses XiFinancialsTypeGetOtherRatios::getReportType()
	 * @uses XiFinancialsTypeGetOtherRatios::getAsOfDate()
	 * @param XiFinancialsTypeGetOtherRatios GetOtherRatios
	 * @return XiFinancialsTypeGetOtherRatiosResponse
	 */
	public function GetOtherRatios(XiFinancialsTypeGetOtherRatios $_XiFinancialsTypeGetOtherRatios)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOtherRatios(array('Identifier'=>$_XiFinancialsTypeGetOtherRatios->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetOtherRatios->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetOtherRatios->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetOtherRatios->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIndustryRatios
	 * Meta informations :
	 * 	- documentation : Get common ratios for a security as of a date.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetIndustryRatios::getIdentifier()
	 * @uses XiFinancialsTypeGetIndustryRatios::getIdentifierType()
	 * @uses XiFinancialsTypeGetIndustryRatios::getReportType()
	 * @uses XiFinancialsTypeGetIndustryRatios::getAsOfDate()
	 * @param XiFinancialsTypeGetIndustryRatios GetIndustryRatios
	 * @return XiFinancialsTypeGetIndustryRatiosResponse
	 */
	public function GetIndustryRatios(XiFinancialsTypeGetIndustryRatios $_XiFinancialsTypeGetIndustryRatios)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIndustryRatios(array('Identifier'=>$_XiFinancialsTypeGetIndustryRatios->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetIndustryRatios->getIdentifierType(),'ReportType'=>$_XiFinancialsTypeGetIndustryRatios->getReportType(),'AsOfDate'=>$_XiFinancialsTypeGetIndustryRatios->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetReport
	 * Meta informations :
	 * 	- documentation : Get a report for a security as of a date.
	 * @uses XiFinancialsWsdlClass::getSoapClient()
	 * @uses XiFinancialsWsdlClass::setResult()
	 * @uses XiFinancialsWsdlClass::getResult()
	 * @uses XiFinancialsWsdlClass::saveLastError()
	 * @uses XiFinancialsTypeGetReport::getIdentifier()
	 * @uses XiFinancialsTypeGetReport::getIdentifierType()
	 * @uses XiFinancialsTypeGetReport::getStatementType()
	 * @uses XiFinancialsTypeGetReport::getReportStyle()
	 * @uses XiFinancialsTypeGetReport::getRoundingType()
	 * @uses XiFinancialsTypeGetReport::getAsOfDate()
	 * @param XiFinancialsTypeGetReport GetReport
	 * @return XiFinancialsTypeGetReportResponse
	 */
	public function GetReport(XiFinancialsTypeGetReport $_XiFinancialsTypeGetReport)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetReport(array('Identifier'=>$_XiFinancialsTypeGetReport->getIdentifier(),'IdentifierType'=>$_XiFinancialsTypeGetReport->getIdentifierType(),'StatementType'=>$_XiFinancialsTypeGetReport->getStatementType(),'ReportStyle'=>$_XiFinancialsTypeGetReport->getReportStyle(),'RoundingType'=>$_XiFinancialsTypeGetReport->getRoundingType(),'AsOfDate'=>$_XiFinancialsTypeGetReport->getAsOfDate())));
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
	 * @return XiFinancialsTypeGetReportResponse
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