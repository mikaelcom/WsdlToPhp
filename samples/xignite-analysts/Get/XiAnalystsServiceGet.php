<?php
/**
 * Class file for XiAnalystsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsServiceGet
 * @date 08/07/2012
 */
class XiAnalystsServiceGet extends XiAnalystsWsdlClass
{
	/**
	 * Method to call GetResearchField
	 * Meta informations :
	 * 	- documentation : Return a AnalystsResearchField object for a single identifier
	 * @uses XiAnalystsWsdlClass::getSoapClient()
	 * @uses XiAnalystsWsdlClass::setResult()
	 * @uses XiAnalystsWsdlClass::getResult()
	 * @uses XiAnalystsWsdlClass::saveLastError()
	 * @uses XiAnalystsTypeGetResearchField::getIdentifier()
	 * @uses XiAnalystsTypeGetResearchField::getIdentifierType()
	 * @uses XiAnalystsTypeGetResearchField::getAnalystFieldType()
	 * @param XiAnalystsTypeGetResearchField GetResearchField
	 * @return XiAnalystsTypeGetResearchFieldResponse
	 */
	public function GetResearchField(XiAnalystsTypeGetResearchField $_XiAnalystsTypeGetResearchField)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchField(array('Identifier'=>$_XiAnalystsTypeGetResearchField->getIdentifier(),'IdentifierType'=>$_XiAnalystsTypeGetResearchField->getIdentifierType(),'AnalystFieldType'=>$_XiAnalystsTypeGetResearchField->getAnalystFieldType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetResearchFields
	 * Meta informations :
	 * 	- documentation : Return an array of AnalystsResearchField objects for multiple identifiers
	 * @uses XiAnalystsWsdlClass::getSoapClient()
	 * @uses XiAnalystsWsdlClass::setResult()
	 * @uses XiAnalystsWsdlClass::getResult()
	 * @uses XiAnalystsWsdlClass::saveLastError()
	 * @uses XiAnalystsTypeGetResearchFields::getIdentifiers()
	 * @uses XiAnalystsTypeGetResearchFields::getIdentifierType()
	 * @uses XiAnalystsTypeGetResearchFields::getAnalystFieldType()
	 * @param XiAnalystsTypeGetResearchFields GetResearchFields
	 * @return XiAnalystsTypeGetResearchFieldsResponse
	 */
	public function GetResearchFields(XiAnalystsTypeGetResearchFields $_XiAnalystsTypeGetResearchFields)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchFields(array('Identifiers'=>$_XiAnalystsTypeGetResearchFields->getIdentifiers(),'IdentifierType'=>$_XiAnalystsTypeGetResearchFields->getIdentifierType(),'AnalystFieldType'=>$_XiAnalystsTypeGetResearchFields->getAnalystFieldType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetResearchFieldListsByCollection
	 * Meta informations :
	 * 	- documentation : Return an array of AnalystsResearchFieldList objects for multiple identifiers and an array of AnalystFieldTypes.
	 * @uses XiAnalystsWsdlClass::getSoapClient()
	 * @uses XiAnalystsWsdlClass::setResult()
	 * @uses XiAnalystsWsdlClass::getResult()
	 * @uses XiAnalystsWsdlClass::saveLastError()
	 * @uses XiAnalystsTypeGetResearchFieldListsByCollection::getIdentifiers()
	 * @uses XiAnalystsTypeGetResearchFieldListsByCollection::getIdentifierType()
	 * @uses XiAnalystsTypeGetResearchFieldListsByCollection::getAnalystFieldTypes()
	 * @param XiAnalystsTypeGetResearchFieldListsByCollection GetResearchFieldListsByCollection
	 * @return XiAnalystsTypeGetResearchFieldListsByCollectionResponse
	 */
	public function GetResearchFieldListsByCollection(XiAnalystsTypeGetResearchFieldListsByCollection $_XiAnalystsTypeGetResearchFieldListsByCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchFieldListsByCollection(array('Identifiers'=>$_XiAnalystsTypeGetResearchFieldListsByCollection->getIdentifiers(),'IdentifierType'=>$_XiAnalystsTypeGetResearchFieldListsByCollection->getIdentifierType(),'AnalystFieldTypes'=>$_XiAnalystsTypeGetResearchFieldListsByCollection->getAnalystFieldTypes())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetResearchFieldListByCollection
	 * Meta informations :
	 * 	- documentation : Return a AnalystsResearchFieldList object for a single identifier and an array of AnalystFieldTypes.
	 * @uses XiAnalystsWsdlClass::getSoapClient()
	 * @uses XiAnalystsWsdlClass::setResult()
	 * @uses XiAnalystsWsdlClass::getResult()
	 * @uses XiAnalystsWsdlClass::saveLastError()
	 * @uses XiAnalystsTypeGetResearchFieldListByCollection::getIdentifier()
	 * @uses XiAnalystsTypeGetResearchFieldListByCollection::getIdentifierType()
	 * @uses XiAnalystsTypeGetResearchFieldListByCollection::getAnalystFieldTypes()
	 * @param XiAnalystsTypeGetResearchFieldListByCollection GetResearchFieldListByCollection
	 * @return XiAnalystsTypeGetResearchFieldListByCollectionResponse
	 */
	public function GetResearchFieldListByCollection(XiAnalystsTypeGetResearchFieldListByCollection $_XiAnalystsTypeGetResearchFieldListByCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchFieldListByCollection(array('Identifier'=>$_XiAnalystsTypeGetResearchFieldListByCollection->getIdentifier(),'IdentifierType'=>$_XiAnalystsTypeGetResearchFieldListByCollection->getIdentifierType(),'AnalystFieldTypes'=>$_XiAnalystsTypeGetResearchFieldListByCollection->getAnalystFieldTypes())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetResearchFieldList
	 * Meta informations :
	 * 	- documentation : Return a AnalystsResearchFieldList object for a single identifier
	 * @uses XiAnalystsWsdlClass::getSoapClient()
	 * @uses XiAnalystsWsdlClass::setResult()
	 * @uses XiAnalystsWsdlClass::getResult()
	 * @uses XiAnalystsWsdlClass::saveLastError()
	 * @uses XiAnalystsTypeGetResearchFieldList::getIdentifier()
	 * @uses XiAnalystsTypeGetResearchFieldList::getIdentifierType()
	 * @uses XiAnalystsTypeGetResearchFieldList::getAnalysisGroup()
	 * @param XiAnalystsTypeGetResearchFieldList GetResearchFieldList
	 * @return XiAnalystsTypeGetResearchFieldListResponse
	 */
	public function GetResearchFieldList(XiAnalystsTypeGetResearchFieldList $_XiAnalystsTypeGetResearchFieldList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchFieldList(array('Identifier'=>$_XiAnalystsTypeGetResearchFieldList->getIdentifier(),'IdentifierType'=>$_XiAnalystsTypeGetResearchFieldList->getIdentifierType(),'AnalysisGroup'=>$_XiAnalystsTypeGetResearchFieldList->getAnalysisGroup())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetResearchFieldLists
	 * Meta informations :
	 * 	- documentation : Return an array of AnalystsResearchFieldList objects for multiple identifiers
	 * @uses XiAnalystsWsdlClass::getSoapClient()
	 * @uses XiAnalystsWsdlClass::setResult()
	 * @uses XiAnalystsWsdlClass::getResult()
	 * @uses XiAnalystsWsdlClass::saveLastError()
	 * @uses XiAnalystsTypeGetResearchFieldLists::getIdentifiers()
	 * @uses XiAnalystsTypeGetResearchFieldLists::getIdentifierType()
	 * @uses XiAnalystsTypeGetResearchFieldLists::getAnalysisGroup()
	 * @param XiAnalystsTypeGetResearchFieldLists GetResearchFieldLists
	 * @return XiAnalystsTypeGetResearchFieldListsResponse
	 */
	public function GetResearchFieldLists(XiAnalystsTypeGetResearchFieldLists $_XiAnalystsTypeGetResearchFieldLists)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchFieldLists(array('Identifiers'=>$_XiAnalystsTypeGetResearchFieldLists->getIdentifiers(),'IdentifierType'=>$_XiAnalystsTypeGetResearchFieldLists->getIdentifierType(),'AnalysisGroup'=>$_XiAnalystsTypeGetResearchFieldLists->getAnalysisGroup())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetResearchReport
	 * Meta informations :
	 * 	- documentation : Return the requested ResearchReport for the identifier.
	 * @uses XiAnalystsWsdlClass::getSoapClient()
	 * @uses XiAnalystsWsdlClass::setResult()
	 * @uses XiAnalystsWsdlClass::getResult()
	 * @uses XiAnalystsWsdlClass::saveLastError()
	 * @uses XiAnalystsTypeGetResearchReport::getIdentifier()
	 * @uses XiAnalystsTypeGetResearchReport::getIdentifierType()
	 * @uses XiAnalystsTypeGetResearchReport::getAnalystsResearchReportType()
	 * @param XiAnalystsTypeGetResearchReport GetResearchReport
	 * @return XiAnalystsTypeGetResearchReportResponse
	 */
	public function GetResearchReport(XiAnalystsTypeGetResearchReport $_XiAnalystsTypeGetResearchReport)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchReport(array('Identifier'=>$_XiAnalystsTypeGetResearchReport->getIdentifier(),'IdentifierType'=>$_XiAnalystsTypeGetResearchReport->getIdentifierType(),'AnalystsResearchReportType'=>$_XiAnalystsTypeGetResearchReport->getAnalystsResearchReportType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetResearchReportCustom
	 * Meta informations :
	 * 	- documentation : Return the requested custom ResearchReport for the identifier.
	 * @uses XiAnalystsWsdlClass::getSoapClient()
	 * @uses XiAnalystsWsdlClass::setResult()
	 * @uses XiAnalystsWsdlClass::getResult()
	 * @uses XiAnalystsWsdlClass::saveLastError()
	 * @uses XiAnalystsTypeGetResearchReportCustom::getIdentifier()
	 * @uses XiAnalystsTypeGetResearchReportCustom::getIdentifierType()
	 * @uses XiAnalystsTypeGetResearchReportCustom::getReportTemplate()
	 * @uses XiAnalystsTypeGetResearchReportCustom::getDefaultValue()
	 * @param XiAnalystsTypeGetResearchReportCustom GetResearchReportCustom
	 * @return XiAnalystsTypeGetResearchReportCustomResponse
	 */
	public function GetResearchReportCustom(XiAnalystsTypeGetResearchReportCustom $_XiAnalystsTypeGetResearchReportCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchReportCustom(array('Identifier'=>$_XiAnalystsTypeGetResearchReportCustom->getIdentifier(),'IdentifierType'=>$_XiAnalystsTypeGetResearchReportCustom->getIdentifierType(),'ReportTemplate'=>$_XiAnalystsTypeGetResearchReportCustom->getReportTemplate(),'DefaultValue'=>$_XiAnalystsTypeGetResearchReportCustom->getDefaultValue())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetResearchReportTemplate
	 * Meta informations :
	 * 	- documentation : Return the a ResearchReportTemplate populated for the specified kind of report.
	 * @uses XiAnalystsWsdlClass::getSoapClient()
	 * @uses XiAnalystsWsdlClass::setResult()
	 * @uses XiAnalystsWsdlClass::getResult()
	 * @uses XiAnalystsWsdlClass::saveLastError()
	 * @uses XiAnalystsTypeGetResearchReportTemplate::getAnalystsResearchReportType()
	 * @param XiAnalystsTypeGetResearchReportTemplate GetResearchReportTemplate
	 * @return XiAnalystsTypeGetResearchReportTemplateResponse
	 */
	public function GetResearchReportTemplate(XiAnalystsTypeGetResearchReportTemplate $_XiAnalystsTypeGetResearchReportTemplate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchReportTemplate(array('AnalystsResearchReportType'=>$_XiAnalystsTypeGetResearchReportTemplate->getAnalystsResearchReportType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMultiResearchField
	 * Meta informations :
	 * 	- documentation : Return a a multiple research fields for a single identifier
	 * @uses XiAnalystsWsdlClass::getSoapClient()
	 * @uses XiAnalystsWsdlClass::setResult()
	 * @uses XiAnalystsWsdlClass::getResult()
	 * @uses XiAnalystsWsdlClass::saveLastError()
	 * @uses XiAnalystsTypeGetMultiResearchField::getIdentifier()
	 * @uses XiAnalystsTypeGetMultiResearchField::getIdentifierType()
	 * @uses XiAnalystsTypeGetMultiResearchField::getAnalystFieldTypes()
	 * @param XiAnalystsTypeGetMultiResearchField GetMultiResearchField
	 * @return XiAnalystsTypeGetMultiResearchFieldResponse
	 */
	public function GetMultiResearchField(XiAnalystsTypeGetMultiResearchField $_XiAnalystsTypeGetMultiResearchField)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMultiResearchField(array('Identifier'=>$_XiAnalystsTypeGetMultiResearchField->getIdentifier(),'IdentifierType'=>$_XiAnalystsTypeGetMultiResearchField->getIdentifierType(),'AnalystFieldTypes'=>$_XiAnalystsTypeGetMultiResearchField->getAnalystFieldTypes())));
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
	 * @return XiAnalystsTypeGetMultiResearchFieldResponse
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