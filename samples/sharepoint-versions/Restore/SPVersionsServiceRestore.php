<?php
/**
 * Class file for SPVersionsServiceRestore
 * @date 06/07/2012
 */
/**
 * Class SPVersionsServiceRestore
 * @date 06/07/2012
 */
class SPVersionsServiceRestore extends SPVersionsWsdlClass
{
	/**
	 * Method to call RestoreVersion
	 * @uses SPVersionsWsdlClass::getSoapClient()
	 * @uses SPVersionsWsdlClass::setResult()
	 * @uses SPVersionsWsdlClass::getResult()
	 * @uses SPVersionsWsdlClass::saveLastError()
	 * @uses SPVersionsTypeRestoreVersion::getFileName()
	 * @uses SPVersionsTypeRestoreVersion::getFileVersion()
	 * @param SPVersionsTypeRestoreVersion RestoreVersion
	 * @return SPVersionsTypeRestoreVersionResponse
	 */
	public function RestoreVersion(SPVersionsTypeRestoreVersion $_SPVersionsTypeRestoreVersion)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RestoreVersion(array('fileName'=>$_SPVersionsTypeRestoreVersion->getFileName(),'fileVersion'=>$_SPVersionsTypeRestoreVersion->getFileVersion())));
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
	 * @return SPVersionsTypeRestoreVersionResponse
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