<?php
/**
 * Class file for XiEstimatesServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesServiceGet
 * @date 08/07/2012
 */
class XiEstimatesServiceGet extends XiEstimatesWsdlClass
{
	/**
	 * Method to call GetResearchField
	 * Meta informations :
	 * 	- documentation : Return a EstimatesResearchField object for a single identifier
	 * @uses XiEstimatesWsdlClass::getSoapClient()
	 * @uses XiEstimatesWsdlClass::setResult()
	 * @uses XiEstimatesWsdlClass::getResult()
	 * @uses XiEstimatesWsdlClass::saveLastError()
	 * @uses XiEstimatesTypeGetResearchField::getIdentifier()
	 * @uses XiEstimatesTypeGetResearchField::getIdentifierType()
	 * @uses XiEstimatesTypeGetResearchField::getEstimateFieldType()
	 * @param XiEstimatesTypeGetResearchField GetResearchField
	 * @return XiEstimatesTypeGetResearchFieldResponse
	 */
	public function GetResearchField(XiEstimatesTypeGetResearchField $_XiEstimatesTypeGetResearchField)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchField(array('Identifier'=>$_XiEstimatesTypeGetResearchField->getIdentifier(),'IdentifierType'=>$_XiEstimatesTypeGetResearchField->getIdentifierType(),'EstimateFieldType'=>$_XiEstimatesTypeGetResearchField->getEstimateFieldType())));
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
	 * 	- documentation : Return an array of EstimatesResearchField objects for multiple identifiers
	 * @uses XiEstimatesWsdlClass::getSoapClient()
	 * @uses XiEstimatesWsdlClass::setResult()
	 * @uses XiEstimatesWsdlClass::getResult()
	 * @uses XiEstimatesWsdlClass::saveLastError()
	 * @uses XiEstimatesTypeGetResearchFields::getIdentifiers()
	 * @uses XiEstimatesTypeGetResearchFields::getIdentifierType()
	 * @uses XiEstimatesTypeGetResearchFields::getEstimateFieldType()
	 * @param XiEstimatesTypeGetResearchFields GetResearchFields
	 * @return XiEstimatesTypeGetResearchFieldsResponse
	 */
	public function GetResearchFields(XiEstimatesTypeGetResearchFields $_XiEstimatesTypeGetResearchFields)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchFields(array('Identifiers'=>$_XiEstimatesTypeGetResearchFields->getIdentifiers(),'IdentifierType'=>$_XiEstimatesTypeGetResearchFields->getIdentifierType(),'EstimateFieldType'=>$_XiEstimatesTypeGetResearchFields->getEstimateFieldType())));
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
	 * 	- documentation : Return an array of EstimatesResearchFieldList objects for multiple identifiers and an array of EstimateFieldTypes.
	 * @uses XiEstimatesWsdlClass::getSoapClient()
	 * @uses XiEstimatesWsdlClass::setResult()
	 * @uses XiEstimatesWsdlClass::getResult()
	 * @uses XiEstimatesWsdlClass::saveLastError()
	 * @uses XiEstimatesTypeGetResearchFieldListsByCollection::getIdentifiers()
	 * @uses XiEstimatesTypeGetResearchFieldListsByCollection::getIdentifierType()
	 * @uses XiEstimatesTypeGetResearchFieldListsByCollection::getEstimateFieldTypes()
	 * @param XiEstimatesTypeGetResearchFieldListsByCollection GetResearchFieldListsByCollection
	 * @return XiEstimatesTypeGetResearchFieldListsByCollectionResponse
	 */
	public function GetResearchFieldListsByCollection(XiEstimatesTypeGetResearchFieldListsByCollection $_XiEstimatesTypeGetResearchFieldListsByCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchFieldListsByCollection(array('Identifiers'=>$_XiEstimatesTypeGetResearchFieldListsByCollection->getIdentifiers(),'IdentifierType'=>$_XiEstimatesTypeGetResearchFieldListsByCollection->getIdentifierType(),'EstimateFieldTypes'=>$_XiEstimatesTypeGetResearchFieldListsByCollection->getEstimateFieldTypes())));
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
	 * 	- documentation : Return a EstimatesResearchFieldList object for a single identifier and an array of EstimateFieldTypes.
	 * @uses XiEstimatesWsdlClass::getSoapClient()
	 * @uses XiEstimatesWsdlClass::setResult()
	 * @uses XiEstimatesWsdlClass::getResult()
	 * @uses XiEstimatesWsdlClass::saveLastError()
	 * @uses XiEstimatesTypeGetResearchFieldListByCollection::getIdentifier()
	 * @uses XiEstimatesTypeGetResearchFieldListByCollection::getIdentifierType()
	 * @uses XiEstimatesTypeGetResearchFieldListByCollection::getEstimateFieldTypes()
	 * @param XiEstimatesTypeGetResearchFieldListByCollection GetResearchFieldListByCollection
	 * @return XiEstimatesTypeGetResearchFieldListByCollectionResponse
	 */
	public function GetResearchFieldListByCollection(XiEstimatesTypeGetResearchFieldListByCollection $_XiEstimatesTypeGetResearchFieldListByCollection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchFieldListByCollection(array('Identifier'=>$_XiEstimatesTypeGetResearchFieldListByCollection->getIdentifier(),'IdentifierType'=>$_XiEstimatesTypeGetResearchFieldListByCollection->getIdentifierType(),'EstimateFieldTypes'=>$_XiEstimatesTypeGetResearchFieldListByCollection->getEstimateFieldTypes())));
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
	 * 	- documentation : Return a EstimatesResearchFieldList object for a single identifier
	 * @uses XiEstimatesWsdlClass::getSoapClient()
	 * @uses XiEstimatesWsdlClass::setResult()
	 * @uses XiEstimatesWsdlClass::getResult()
	 * @uses XiEstimatesWsdlClass::saveLastError()
	 * @uses XiEstimatesTypeGetResearchFieldList::getIdentifier()
	 * @uses XiEstimatesTypeGetResearchFieldList::getIdentifierType()
	 * @uses XiEstimatesTypeGetResearchFieldList::getEstimateGroup()
	 * @param XiEstimatesTypeGetResearchFieldList GetResearchFieldList
	 * @return XiEstimatesTypeGetResearchFieldListResponse
	 */
	public function GetResearchFieldList(XiEstimatesTypeGetResearchFieldList $_XiEstimatesTypeGetResearchFieldList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchFieldList(array('Identifier'=>$_XiEstimatesTypeGetResearchFieldList->getIdentifier(),'IdentifierType'=>$_XiEstimatesTypeGetResearchFieldList->getIdentifierType(),'EstimateGroup'=>$_XiEstimatesTypeGetResearchFieldList->getEstimateGroup())));
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
	 * 	- documentation : Return an array of EstimatesResearchFieldList objects for multiple identifiers
	 * @uses XiEstimatesWsdlClass::getSoapClient()
	 * @uses XiEstimatesWsdlClass::setResult()
	 * @uses XiEstimatesWsdlClass::getResult()
	 * @uses XiEstimatesWsdlClass::saveLastError()
	 * @uses XiEstimatesTypeGetResearchFieldLists::getIdentifiers()
	 * @uses XiEstimatesTypeGetResearchFieldLists::getIdentifierType()
	 * @uses XiEstimatesTypeGetResearchFieldLists::getEstimateGroup()
	 * @param XiEstimatesTypeGetResearchFieldLists GetResearchFieldLists
	 * @return XiEstimatesTypeGetResearchFieldListsResponse
	 */
	public function GetResearchFieldLists(XiEstimatesTypeGetResearchFieldLists $_XiEstimatesTypeGetResearchFieldLists)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchFieldLists(array('Identifiers'=>$_XiEstimatesTypeGetResearchFieldLists->getIdentifiers(),'IdentifierType'=>$_XiEstimatesTypeGetResearchFieldLists->getIdentifierType(),'EstimateGroup'=>$_XiEstimatesTypeGetResearchFieldLists->getEstimateGroup())));
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
	 * @uses XiEstimatesWsdlClass::getSoapClient()
	 * @uses XiEstimatesWsdlClass::setResult()
	 * @uses XiEstimatesWsdlClass::getResult()
	 * @uses XiEstimatesWsdlClass::saveLastError()
	 * @uses XiEstimatesTypeGetResearchReport::getIdentifier()
	 * @uses XiEstimatesTypeGetResearchReport::getIdentifierType()
	 * @uses XiEstimatesTypeGetResearchReport::getEstimatesResearchReportType()
	 * @param XiEstimatesTypeGetResearchReport GetResearchReport
	 * @return XiEstimatesTypeGetResearchReportResponse
	 */
	public function GetResearchReport(XiEstimatesTypeGetResearchReport $_XiEstimatesTypeGetResearchReport)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchReport(array('Identifier'=>$_XiEstimatesTypeGetResearchReport->getIdentifier(),'IdentifierType'=>$_XiEstimatesTypeGetResearchReport->getIdentifierType(),'EstimatesResearchReportType'=>$_XiEstimatesTypeGetResearchReport->getEstimatesResearchReportType())));
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
	 * @uses XiEstimatesWsdlClass::getSoapClient()
	 * @uses XiEstimatesWsdlClass::setResult()
	 * @uses XiEstimatesWsdlClass::getResult()
	 * @uses XiEstimatesWsdlClass::saveLastError()
	 * @uses XiEstimatesTypeGetResearchReportCustom::getIdentifier()
	 * @uses XiEstimatesTypeGetResearchReportCustom::getIdentifierType()
	 * @uses XiEstimatesTypeGetResearchReportCustom::getReportTemplate()
	 * @uses XiEstimatesTypeGetResearchReportCustom::getDefaultValue()
	 * @param XiEstimatesTypeGetResearchReportCustom GetResearchReportCustom
	 * @return XiEstimatesTypeGetResearchReportCustomResponse
	 */
	public function GetResearchReportCustom(XiEstimatesTypeGetResearchReportCustom $_XiEstimatesTypeGetResearchReportCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchReportCustom(array('Identifier'=>$_XiEstimatesTypeGetResearchReportCustom->getIdentifier(),'IdentifierType'=>$_XiEstimatesTypeGetResearchReportCustom->getIdentifierType(),'ReportTemplate'=>$_XiEstimatesTypeGetResearchReportCustom->getReportTemplate(),'DefaultValue'=>$_XiEstimatesTypeGetResearchReportCustom->getDefaultValue())));
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
	 * @uses XiEstimatesWsdlClass::getSoapClient()
	 * @uses XiEstimatesWsdlClass::setResult()
	 * @uses XiEstimatesWsdlClass::getResult()
	 * @uses XiEstimatesWsdlClass::saveLastError()
	 * @uses XiEstimatesTypeGetResearchReportTemplate::getEstimatesResearchReportType()
	 * @param XiEstimatesTypeGetResearchReportTemplate GetResearchReportTemplate
	 * @return XiEstimatesTypeGetResearchReportTemplateResponse
	 */
	public function GetResearchReportTemplate(XiEstimatesTypeGetResearchReportTemplate $_XiEstimatesTypeGetResearchReportTemplate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetResearchReportTemplate(array('EstimatesResearchReportType'=>$_XiEstimatesTypeGetResearchReportTemplate->getEstimatesResearchReportType())));
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
	 * @uses XiEstimatesWsdlClass::getSoapClient()
	 * @uses XiEstimatesWsdlClass::setResult()
	 * @uses XiEstimatesWsdlClass::getResult()
	 * @uses XiEstimatesWsdlClass::saveLastError()
	 * @uses XiEstimatesTypeGetMultiResearchField::getIdentifier()
	 * @uses XiEstimatesTypeGetMultiResearchField::getIdentifierType()
	 * @uses XiEstimatesTypeGetMultiResearchField::getEstimateFieldTypes()
	 * @param XiEstimatesTypeGetMultiResearchField GetMultiResearchField
	 * @return XiEstimatesTypeGetMultiResearchFieldResponse
	 */
	public function GetMultiResearchField(XiEstimatesTypeGetMultiResearchField $_XiEstimatesTypeGetMultiResearchField)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMultiResearchField(array('Identifier'=>$_XiEstimatesTypeGetMultiResearchField->getIdentifier(),'IdentifierType'=>$_XiEstimatesTypeGetMultiResearchField->getIdentifierType(),'EstimateFieldTypes'=>$_XiEstimatesTypeGetMultiResearchField->getEstimateFieldTypes())));
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
	 * @return XiEstimatesTypeGetMultiResearchFieldResponse
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