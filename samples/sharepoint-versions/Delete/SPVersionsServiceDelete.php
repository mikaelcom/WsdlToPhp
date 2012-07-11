<?php
/**
 * Class file for SPVersionsServiceDelete
 * @date 06/07/2012
 */
/**
 * Class SPVersionsServiceDelete
 * @date 06/07/2012
 */
class SPVersionsServiceDelete extends SPVersionsWsdlClass
{
	/**
	 * Method to call DeleteVersion
	 * @uses SPVersionsWsdlClass::getSoapClient()
	 * @uses SPVersionsWsdlClass::setResult()
	 * @uses SPVersionsWsdlClass::getResult()
	 * @uses SPVersionsWsdlClass::saveLastError()
	 * @uses SPVersionsTypeDeleteVersion::getFileName()
	 * @uses SPVersionsTypeDeleteVersion::getFileVersion()
	 * @param SPVersionsTypeDeleteVersion DeleteVersion
	 * @return SPVersionsTypeDeleteVersionResponse
	 */
	public function DeleteVersion(SPVersionsTypeDeleteVersion $_SPVersionsTypeDeleteVersion)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteVersion(array('fileName'=>$_SPVersionsTypeDeleteVersion->getFileName(),'fileVersion'=>$_SPVersionsTypeDeleteVersion->getFileVersion())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteAllVersions
	 * @uses SPVersionsWsdlClass::getSoapClient()
	 * @uses SPVersionsWsdlClass::setResult()
	 * @uses SPVersionsWsdlClass::getResult()
	 * @uses SPVersionsWsdlClass::saveLastError()
	 * @uses SPVersionsTypeDeleteAllVersions::getFileName()
	 * @param SPVersionsTypeDeleteAllVersions DeleteAllVersions
	 * @return SPVersionsTypeDeleteAllVersionsResponse
	 */
	public function DeleteAllVersions(SPVersionsTypeDeleteAllVersions $_SPVersionsTypeDeleteAllVersions)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteAllVersions(array('fileName'=>$_SPVersionsTypeDeleteAllVersions->getFileName())));
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
	 * @return SPVersionsTypeDeleteAllVersionsResponse
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