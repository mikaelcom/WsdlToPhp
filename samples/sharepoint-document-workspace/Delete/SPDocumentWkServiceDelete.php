<?php
/**
 * Class file for SPDocumentWkServiceDelete
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkServiceDelete
 * @date 06/07/2012
 */
class SPDocumentWkServiceDelete extends SPDocumentWkWsdlClass
{
	/**
	 * Method to call DeleteDws
	 * @uses SPDocumentWkWsdlClass::getSoapClient()
	 * @uses SPDocumentWkWsdlClass::setResult()
	 * @uses SPDocumentWkWsdlClass::getResult()
	 * @uses SPDocumentWkWsdlClass::saveLastError()
	 * @param SPDocumentWkTypeDeleteDws DeleteDws
	 * @return SPDocumentWkTypeDeleteDwsResponse
	 */
	public function DeleteDws(SPDocumentWkTypeDeleteDws $_SPDocumentWkTypeDeleteDws)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteDws(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteFolder
	 * @uses SPDocumentWkWsdlClass::getSoapClient()
	 * @uses SPDocumentWkWsdlClass::setResult()
	 * @uses SPDocumentWkWsdlClass::getResult()
	 * @uses SPDocumentWkWsdlClass::saveLastError()
	 * @uses SPDocumentWkTypeDeleteFolder::getUrl()
	 * @param SPDocumentWkTypeDeleteFolder DeleteFolder
	 * @return SPDocumentWkTypeDeleteFolderResponse
	 */
	public function DeleteFolder(SPDocumentWkTypeDeleteFolder $_SPDocumentWkTypeDeleteFolder)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteFolder(array('url'=>$_SPDocumentWkTypeDeleteFolder->getUrl())));
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
	 * @return SPDocumentWkTypeDeleteFolderResponse
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