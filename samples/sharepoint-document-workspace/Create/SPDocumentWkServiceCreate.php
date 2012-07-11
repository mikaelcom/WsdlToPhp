<?php
/**
 * Class file for SPDocumentWkServiceCreate
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkServiceCreate
 * @date 06/07/2012
 */
class SPDocumentWkServiceCreate extends SPDocumentWkWsdlClass
{
	/**
	 * Method to call CreateDws
	 * @uses SPDocumentWkWsdlClass::getSoapClient()
	 * @uses SPDocumentWkWsdlClass::setResult()
	 * @uses SPDocumentWkWsdlClass::getResult()
	 * @uses SPDocumentWkWsdlClass::saveLastError()
	 * @uses SPDocumentWkTypeCreateDws::getName()
	 * @uses SPDocumentWkTypeCreateDws::getUsers()
	 * @uses SPDocumentWkTypeCreateDws::getTitle()
	 * @uses SPDocumentWkTypeCreateDws::getDocuments()
	 * @param SPDocumentWkTypeCreateDws CreateDws
	 * @return SPDocumentWkTypeCreateDwsResponse
	 */
	public function CreateDws(SPDocumentWkTypeCreateDws $_SPDocumentWkTypeCreateDws)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateDws(array('name'=>$_SPDocumentWkTypeCreateDws->getName(),'users'=>$_SPDocumentWkTypeCreateDws->getUsers(),'title'=>$_SPDocumentWkTypeCreateDws->getTitle(),'documents'=>$_SPDocumentWkTypeCreateDws->getDocuments())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateFolder
	 * @uses SPDocumentWkWsdlClass::getSoapClient()
	 * @uses SPDocumentWkWsdlClass::setResult()
	 * @uses SPDocumentWkWsdlClass::getResult()
	 * @uses SPDocumentWkWsdlClass::saveLastError()
	 * @uses SPDocumentWkTypeCreateFolder::getUrl()
	 * @param SPDocumentWkTypeCreateFolder CreateFolder
	 * @return SPDocumentWkTypeCreateFolderResponse
	 */
	public function CreateFolder(SPDocumentWkTypeCreateFolder $_SPDocumentWkTypeCreateFolder)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateFolder(array('url'=>$_SPDocumentWkTypeCreateFolder->getUrl())));
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
	 * @return SPDocumentWkTypeCreateFolderResponse
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