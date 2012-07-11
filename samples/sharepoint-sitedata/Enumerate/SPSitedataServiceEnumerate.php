<?php
/**
 * Class file for SPSitedataServiceEnumerate
 * @date 06/07/2012
 */
/**
 * Class SPSitedataServiceEnumerate
 * @date 06/07/2012
 */
class SPSitedataServiceEnumerate extends SPSitedataWsdlClass
{
	/**
	 * Method to call EnumerateFolder
	 * @uses SPSitedataWsdlClass::getSoapClient()
	 * @uses SPSitedataWsdlClass::setResult()
	 * @uses SPSitedataWsdlClass::getResult()
	 * @uses SPSitedataWsdlClass::saveLastError()
	 * @uses SPSitedataTypeEnumerateFolder::getStrFolderUrl()
	 * @param SPSitedataTypeEnumerateFolder EnumerateFolder
	 * @return SPSitedataTypeEnumerateFolderResponse
	 */
	public function EnumerateFolder(SPSitedataTypeEnumerateFolder $_SPSitedataTypeEnumerateFolder)
	{
		try
		{
			$this->setResult(self::getSoapClient()->EnumerateFolder(array('strFolderUrl'=>$_SPSitedataTypeEnumerateFolder->getStrFolderUrl())));
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
	 * @return SPSitedataTypeEnumerateFolderResponse
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