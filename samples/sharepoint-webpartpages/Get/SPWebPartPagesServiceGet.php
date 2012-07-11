<?php
/**
 * Class file for SPWebPartPagesServiceGet
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesServiceGet
 * @date 06/07/2012
 */
class SPWebPartPagesServiceGet extends SPWebPartPagesWsdlClass
{
	/**
	 * Method to call GetWebPartPageDocument
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeGetWebPartPageDocument::getDocumentName()
	 * @param SPWebPartPagesTypeGetWebPartPageDocument GetWebPartPageDocument
	 * @return SPWebPartPagesTypeGetWebPartPageDocumentResponse
	 */
	public function GetWebPartPageDocument(SPWebPartPagesTypeGetWebPartPageDocument $_SPWebPartPagesTypeGetWebPartPageDocument)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWebPartPageDocument(array('documentName'=>$_SPWebPartPagesTypeGetWebPartPageDocument->getDocumentName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWebPartPage
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeGetWebPartPage::getDocumentName()
	 * @uses SPWebPartPagesTypeGetWebPartPage::getBehavior()
	 * @param SPWebPartPagesTypeGetWebPartPage GetWebPartPage
	 * @return SPWebPartPagesTypeGetWebPartPageResponse
	 */
	public function GetWebPartPage(SPWebPartPagesTypeGetWebPartPage $_SPWebPartPagesTypeGetWebPartPage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWebPartPage(array('documentName'=>$_SPWebPartPagesTypeGetWebPartPage->getDocumentName(),'behavior'=>$_SPWebPartPagesTypeGetWebPartPage->getBehavior())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetXmlDataFromDataSource
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeGetXmlDataFromDataSource::getQueryXml()
	 * @param SPWebPartPagesTypeGetXmlDataFromDataSource GetXmlDataFromDataSource
	 * @return SPWebPartPagesTypeGetXmlDataFromDataSourceResponse
	 */
	public function GetXmlDataFromDataSource(SPWebPartPagesTypeGetXmlDataFromDataSource $_SPWebPartPagesTypeGetXmlDataFromDataSource)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetXmlDataFromDataSource(array('queryXml'=>$_SPWebPartPagesTypeGetXmlDataFromDataSource->getQueryXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFormCapabilityFromDataSourceControl
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeGetFormCapabilityFromDataSourceControl::getDscXml()
	 * @param SPWebPartPagesTypeGetFormCapabilityFromDataSourceControl GetFormCapabilityFromDataSourceControl
	 * @return SPWebPartPagesTypeGetFormCapabilityFromDataSourceControlResponse
	 */
	public function GetFormCapabilityFromDataSourceControl(SPWebPartPagesTypeGetFormCapabilityFromDataSourceControl $_SPWebPartPagesTypeGetFormCapabilityFromDataSourceControl)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFormCapabilityFromDataSourceControl(array('dscXml'=>$_SPWebPartPagesTypeGetFormCapabilityFromDataSourceControl->getDscXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExpandedListViewXml
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeGetExpandedListViewXml::getWebId()
	 * @uses SPWebPartPagesTypeGetExpandedListViewXml::getListViewXml()
	 * @uses SPWebPartPagesTypeGetExpandedListViewXml::getListGuid()
	 * @uses SPWebPartPagesTypeGetExpandedListViewXml::getListUrl()
	 * @uses SPWebPartPagesTypeGetExpandedListViewXml::getListDisplayName()
	 * @uses SPWebPartPagesTypeGetExpandedListViewXml::getHasConnection()
	 * @uses SPWebPartPagesTypeGetExpandedListViewXml::getPartialView()
	 * @param SPWebPartPagesTypeGetExpandedListViewXml GetExpandedListViewXml
	 * @return SPWebPartPagesTypeGetExpandedListViewXmlResponse
	 */
	public function GetExpandedListViewXml(SPWebPartPagesTypeGetExpandedListViewXml $_SPWebPartPagesTypeGetExpandedListViewXml)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExpandedListViewXml(array('webId'=>$_SPWebPartPagesTypeGetExpandedListViewXml->getWebId(),'listViewXml'=>$_SPWebPartPagesTypeGetExpandedListViewXml->getListViewXml(),'listGuid'=>$_SPWebPartPagesTypeGetExpandedListViewXml->getListGuid(),'listUrl'=>$_SPWebPartPagesTypeGetExpandedListViewXml->getListUrl(),'listDisplayName'=>$_SPWebPartPagesTypeGetExpandedListViewXml->getListDisplayName(),'hasConnection'=>$_SPWebPartPagesTypeGetExpandedListViewXml->getHasConnection(),'partialView'=>$_SPWebPartPagesTypeGetExpandedListViewXml->getPartialView())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDataFromDataSourceControl
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeGetDataFromDataSourceControl::getDscXml()
	 * @uses SPWebPartPagesTypeGetDataFromDataSourceControl::getContextUrl()
	 * @param SPWebPartPagesTypeGetDataFromDataSourceControl GetDataFromDataSourceControl
	 * @return SPWebPartPagesTypeGetDataFromDataSourceControlResponse
	 */
	public function GetDataFromDataSourceControl(SPWebPartPagesTypeGetDataFromDataSourceControl $_SPWebPartPagesTypeGetDataFromDataSourceControl)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDataFromDataSourceControl(array('dscXml'=>$_SPWebPartPagesTypeGetDataFromDataSourceControl->getDscXml(),'contextUrl'=>$_SPWebPartPagesTypeGetDataFromDataSourceControl->getContextUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAssemblyMetaData
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeGetAssemblyMetaData::getAssemblyName()
	 * @uses SPWebPartPagesTypeGetAssemblyMetaData::getBaseTypes()
	 * @param SPWebPartPagesTypeGetAssemblyMetaData GetAssemblyMetaData
	 * @return SPWebPartPagesTypeGetAssemblyMetaDataResponse
	 */
	public function GetAssemblyMetaData(SPWebPartPagesTypeGetAssemblyMetaData $_SPWebPartPagesTypeGetAssemblyMetaData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAssemblyMetaData(array('assemblyName'=>$_SPWebPartPagesTypeGetAssemblyMetaData->getAssemblyName(),'baseTypes'=>$_SPWebPartPagesTypeGetAssemblyMetaData->getBaseTypes())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBindingResourceData
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeGetBindingResourceData::getResourceName()
	 * @param SPWebPartPagesTypeGetBindingResourceData GetBindingResourceData
	 * @return SPWebPartPagesTypeGetBindingResourceDataResponse
	 */
	public function GetBindingResourceData(SPWebPartPagesTypeGetBindingResourceData $_SPWebPartPagesTypeGetBindingResourceData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBindingResourceData(array('ResourceName'=>$_SPWebPartPagesTypeGetBindingResourceData->getResourceName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWebPart
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeGetWebPart::getPageurl()
	 * @uses SPWebPartPagesTypeGetWebPart::getStorageKey()
	 * @uses SPWebPartPagesTypeGetWebPart::getStorage()
	 * @param SPWebPartPagesTypeGetWebPart GetWebPart
	 * @return SPWebPartPagesTypeGetWebPartResponse
	 */
	public function GetWebPart(SPWebPartPagesTypeGetWebPart $_SPWebPartPagesTypeGetWebPart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWebPart(array('pageurl'=>$_SPWebPartPagesTypeGetWebPart->getPageurl(),'storageKey'=>$_SPWebPartPagesTypeGetWebPart->getStorageKey(),'storage'=>$_SPWebPartPagesTypeGetWebPart->getStorage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWebPart2
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeGetWebPart2::getPageurl()
	 * @uses SPWebPartPagesTypeGetWebPart2::getStorageKey()
	 * @uses SPWebPartPagesTypeGetWebPart2::getStorage()
	 * @uses SPWebPartPagesTypeGetWebPart2::getBehavior()
	 * @param SPWebPartPagesTypeGetWebPart2 GetWebPart2
	 * @return SPWebPartPagesTypeGetWebPart2Response
	 */
	public function GetWebPart2(SPWebPartPagesTypeGetWebPart2 $_SPWebPartPagesTypeGetWebPart2)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWebPart2(array('pageurl'=>$_SPWebPartPagesTypeGetWebPart2->getPageurl(),'storageKey'=>$_SPWebPartPagesTypeGetWebPart2->getStorageKey(),'storage'=>$_SPWebPartPagesTypeGetWebPart2->getStorage(),'behavior'=>$_SPWebPartPagesTypeGetWebPart2->getBehavior())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCustomControlList
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @param SPWebPartPagesTypeGetCustomControlList GetCustomControlList
	 * @return SPWebPartPagesTypeGetCustomControlListResponse
	 */
	public function GetCustomControlList(SPWebPartPagesTypeGetCustomControlList $_SPWebPartPagesTypeGetCustomControlList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCustomControlList(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSafeAssemblyInfo
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @param SPWebPartPagesTypeGetSafeAssemblyInfo GetSafeAssemblyInfo
	 * @return SPWebPartPagesTypeGetSafeAssemblyInfoResponse
	 */
	public function GetSafeAssemblyInfo(SPWebPartPagesTypeGetSafeAssemblyInfo $_SPWebPartPagesTypeGetSafeAssemblyInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSafeAssemblyInfo(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWebPartProperties
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeGetWebPartProperties::getPageUrl()
	 * @uses SPWebPartPagesTypeGetWebPartProperties::getStorage()
	 * @param SPWebPartPagesTypeGetWebPartProperties GetWebPartProperties
	 * @return SPWebPartPagesTypeGetWebPartPropertiesResponse
	 */
	public function GetWebPartProperties(SPWebPartPagesTypeGetWebPartProperties $_SPWebPartPagesTypeGetWebPartProperties)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWebPartProperties(array('pageUrl'=>$_SPWebPartPagesTypeGetWebPartProperties->getPageUrl(),'storage'=>$_SPWebPartPagesTypeGetWebPartProperties->getStorage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWebPartProperties2
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeGetWebPartProperties2::getPageUrl()
	 * @uses SPWebPartPagesTypeGetWebPartProperties2::getStorage()
	 * @uses SPWebPartPagesTypeGetWebPartProperties2::getBehavior()
	 * @param SPWebPartPagesTypeGetWebPartProperties2 GetWebPartProperties2
	 * @return SPWebPartPagesTypeGetWebPartProperties2Response
	 */
	public function GetWebPartProperties2(SPWebPartPagesTypeGetWebPartProperties2 $_SPWebPartPagesTypeGetWebPartProperties2)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWebPartProperties2(array('pageUrl'=>$_SPWebPartPagesTypeGetWebPartProperties2->getPageUrl(),'storage'=>$_SPWebPartPagesTypeGetWebPartProperties2->getStorage(),'behavior'=>$_SPWebPartPagesTypeGetWebPartProperties2->getBehavior())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWebPartPageConnectionInfo
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeGetWebPartPageConnectionInfo::getSourcePageUrl()
	 * @uses SPWebPartPagesTypeGetWebPartPageConnectionInfo::getSourcePageContents()
	 * @uses SPWebPartPagesTypeGetWebPartPageConnectionInfo::getProviderPartID()
	 * @uses SPWebPartPagesTypeGetWebPartPageConnectionInfo::getLcid()
	 * @param SPWebPartPagesTypeGetWebPartPageConnectionInfo GetWebPartPageConnectionInfo
	 * @return SPWebPartPagesTypeGetWebPartPageConnectionInfoResponse
	 */
	public function GetWebPartPageConnectionInfo(SPWebPartPagesTypeGetWebPartPageConnectionInfo $_SPWebPartPagesTypeGetWebPartPageConnectionInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWebPartPageConnectionInfo(array('sourcePageUrl'=>$_SPWebPartPagesTypeGetWebPartPageConnectionInfo->getSourcePageUrl(),'sourcePageContents'=>$_SPWebPartPagesTypeGetWebPartPageConnectionInfo->getSourcePageContents(),'providerPartID'=>$_SPWebPartPagesTypeGetWebPartPageConnectionInfo->getProviderPartID(),'lcid'=>$_SPWebPartPagesTypeGetWebPartPageConnectionInfo->getLcid())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWebPartCrossPageCompatibility
	 * @uses SPWebPartPagesWsdlClass::getSoapClient()
	 * @uses SPWebPartPagesWsdlClass::setResult()
	 * @uses SPWebPartPagesWsdlClass::getResult()
	 * @uses SPWebPartPagesWsdlClass::saveLastError()
	 * @uses SPWebPartPagesTypeGetWebPartCrossPageCompatibility::getSourcePageUrl()
	 * @uses SPWebPartPagesTypeGetWebPartCrossPageCompatibility::getSourcePageContents()
	 * @uses SPWebPartPagesTypeGetWebPartCrossPageCompatibility::getTargetPageUrl()
	 * @uses SPWebPartPagesTypeGetWebPartCrossPageCompatibility::getTargetPageContents()
	 * @uses SPWebPartPagesTypeGetWebPartCrossPageCompatibility::getProviderPartID()
	 * @uses SPWebPartPagesTypeGetWebPartCrossPageCompatibility::getLcid()
	 * @param SPWebPartPagesTypeGetWebPartCrossPageCompatibility GetWebPartCrossPageCompatibility
	 * @return SPWebPartPagesTypeGetWebPartCrossPageCompatibilityResponse
	 */
	public function GetWebPartCrossPageCompatibility(SPWebPartPagesTypeGetWebPartCrossPageCompatibility $_SPWebPartPagesTypeGetWebPartCrossPageCompatibility)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWebPartCrossPageCompatibility(array('sourcePageUrl'=>$_SPWebPartPagesTypeGetWebPartCrossPageCompatibility->getSourcePageUrl(),'sourcePageContents'=>$_SPWebPartPagesTypeGetWebPartCrossPageCompatibility->getSourcePageContents(),'targetPageUrl'=>$_SPWebPartPagesTypeGetWebPartCrossPageCompatibility->getTargetPageUrl(),'targetPageContents'=>$_SPWebPartPagesTypeGetWebPartCrossPageCompatibility->getTargetPageContents(),'providerPartID'=>$_SPWebPartPagesTypeGetWebPartCrossPageCompatibility->getProviderPartID(),'lcid'=>$_SPWebPartPagesTypeGetWebPartCrossPageCompatibility->getLcid())));
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
	 * @return SPWebPartPagesTypeGetWebPartCrossPageCompatibilityResponse
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