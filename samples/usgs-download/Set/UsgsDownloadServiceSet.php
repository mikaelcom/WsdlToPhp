<?php
/**
 * Class file for UsgsDownloadServiceSet
 * @date 08/07/2012
 */
/**
 * Class UsgsDownloadServiceSet
 * @date 08/07/2012
 */
class UsgsDownloadServiceSet extends UsgsDownloadWsdlClass
{
	/**
	 * Method to call setDownloadComplete
	 * @uses UsgsDownloadWsdlClass::getSoapClient()
	 * @uses UsgsDownloadWsdlClass::setResult()
	 * @uses UsgsDownloadWsdlClass::getResult()
	 * @uses UsgsDownloadWsdlClass::saveLastError()
	 * @uses UsgsDownloadTypeSetDownloadComplete::getDownloadID()
	 * @uses UsgsDownloadTypeSetDownloadComplete::getDB()
	 * @param UsgsDownloadTypeSetDownloadComplete SetDownloadComplete
	 * @return UsgsDownloadTypeSetDownloadCompleteResponse
	 */
	public function setDownloadComplete(UsgsDownloadTypeSetDownloadComplete $_UsgsDownloadTypeSetDownloadComplete)
	{
		try
		{
			$this->setResult(self::getSoapClient()->setDownloadComplete(array('downloadID'=>$_UsgsDownloadTypeSetDownloadComplete->getDownloadID(),'DB'=>$_UsgsDownloadTypeSetDownloadComplete->getDB())));
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
	 * @return UsgsDownloadTypeSetDownloadCompleteResponse
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