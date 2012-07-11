<?php
/**
 * Class file for SPDocumentWkServiceGet
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkServiceGet
 * @date 06/07/2012
 */
class SPDocumentWkServiceGet extends SPDocumentWkWsdlClass
{
	/**
	 * Method to call GetDwsMetaData
	 * @uses SPDocumentWkWsdlClass::getSoapClient()
	 * @uses SPDocumentWkWsdlClass::setResult()
	 * @uses SPDocumentWkWsdlClass::getResult()
	 * @uses SPDocumentWkWsdlClass::saveLastError()
	 * @uses SPDocumentWkTypeGetDwsMetaData::getDocument()
	 * @uses SPDocumentWkTypeGetDwsMetaData::getId()
	 * @uses SPDocumentWkTypeGetDwsMetaData::getMinimal()
	 * @param SPDocumentWkTypeGetDwsMetaData GetDwsMetaData
	 * @return SPDocumentWkTypeGetDwsMetaDataResponse
	 */
	public function GetDwsMetaData(SPDocumentWkTypeGetDwsMetaData $_SPDocumentWkTypeGetDwsMetaData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDwsMetaData(array('document'=>$_SPDocumentWkTypeGetDwsMetaData->getDocument(),'id'=>$_SPDocumentWkTypeGetDwsMetaData->getId(),'minimal'=>$_SPDocumentWkTypeGetDwsMetaData->getMinimal())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDwsData
	 * @uses SPDocumentWkWsdlClass::getSoapClient()
	 * @uses SPDocumentWkWsdlClass::setResult()
	 * @uses SPDocumentWkWsdlClass::getResult()
	 * @uses SPDocumentWkWsdlClass::saveLastError()
	 * @uses SPDocumentWkTypeGetDwsData::getDocument()
	 * @uses SPDocumentWkTypeGetDwsData::getLastUpdate()
	 * @param SPDocumentWkTypeGetDwsData GetDwsData
	 * @return SPDocumentWkTypeGetDwsDataResponse
	 */
	public function GetDwsData(SPDocumentWkTypeGetDwsData $_SPDocumentWkTypeGetDwsData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDwsData(array('document'=>$_SPDocumentWkTypeGetDwsData->getDocument(),'lastUpdate'=>$_SPDocumentWkTypeGetDwsData->getLastUpdate())));
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
	 * @return SPDocumentWkTypeGetDwsDataResponse
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