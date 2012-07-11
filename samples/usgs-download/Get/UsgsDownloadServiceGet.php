<?php
/**
 * Class file for UsgsDownloadServiceGet
 * @date 08/07/2012
 */
/**
 * Class UsgsDownloadServiceGet
 * @date 08/07/2012
 */
class UsgsDownloadServiceGet extends UsgsDownloadWsdlClass
{
	/**
	 * Method to call getData
	 * @uses UsgsDownloadWsdlClass::getSoapClient()
	 * @uses UsgsDownloadWsdlClass::setResult()
	 * @uses UsgsDownloadWsdlClass::getResult()
	 * @uses UsgsDownloadWsdlClass::saveLastError()
	 * @uses UsgsDownloadTypeGetData::getDownloadID()
	 * @uses UsgsDownloadTypeGetData::getDB()
	 * @param UsgsDownloadTypeGetData GetData
	 * @return UsgsDownloadTypeGetDataResponse
	 */
	public function getData(UsgsDownloadTypeGetData $_UsgsDownloadTypeGetData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getData(array('downloadID'=>$_UsgsDownloadTypeGetData->getDownloadID(),'DB'=>$_UsgsDownloadTypeGetData->getDB())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call getDownloadStatus
	 * @uses UsgsDownloadWsdlClass::getSoapClient()
	 * @uses UsgsDownloadWsdlClass::setResult()
	 * @uses UsgsDownloadWsdlClass::getResult()
	 * @uses UsgsDownloadWsdlClass::saveLastError()
	 * @uses UsgsDownloadTypeGetDownloadStatus::getDownloadID()
	 * @uses UsgsDownloadTypeGetDownloadStatus::getDB()
	 * @param UsgsDownloadTypeGetDownloadStatus GetDownloadStatus
	 * @return UsgsDownloadTypeGetDownloadStatusResponse
	 */
	public function getDownloadStatus(UsgsDownloadTypeGetDownloadStatus $_UsgsDownloadTypeGetDownloadStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getDownloadStatus(array('downloadID'=>$_UsgsDownloadTypeGetDownloadStatus->getDownloadID(),'DB'=>$_UsgsDownloadTypeGetDownloadStatus->getDB())));
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
	 * @return UsgsDownloadTypeGetDownloadStatusResponse
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