<?php
/**
 * Class file for SPDocumentWkServiceUpdate
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkServiceUpdate
 * @date 06/07/2012
 */
class SPDocumentWkServiceUpdate extends SPDocumentWkWsdlClass
{
	/**
	 * Method to call UpdateDwsData
	 * @uses SPDocumentWkWsdlClass::getSoapClient()
	 * @uses SPDocumentWkWsdlClass::setResult()
	 * @uses SPDocumentWkWsdlClass::getResult()
	 * @uses SPDocumentWkWsdlClass::saveLastError()
	 * @uses SPDocumentWkTypeUpdateDwsData::getUpdates()
	 * @uses SPDocumentWkTypeUpdateDwsData::getMeetingInstance()
	 * @param SPDocumentWkTypeUpdateDwsData UpdateDwsData
	 * @return SPDocumentWkTypeUpdateDwsDataResponse
	 */
	public function UpdateDwsData(SPDocumentWkTypeUpdateDwsData $_SPDocumentWkTypeUpdateDwsData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateDwsData(array('updates'=>$_SPDocumentWkTypeUpdateDwsData->getUpdates(),'meetingInstance'=>$_SPDocumentWkTypeUpdateDwsData->getMeetingInstance())));
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
	 * @return SPDocumentWkTypeUpdateDwsDataResponse
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