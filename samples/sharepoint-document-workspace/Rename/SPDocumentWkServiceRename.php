<?php
/**
 * Class file for SPDocumentWkServiceRename
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkServiceRename
 * @date 06/07/2012
 */
class SPDocumentWkServiceRename extends SPDocumentWkWsdlClass
{
	/**
	 * Method to call RenameDws
	 * @uses SPDocumentWkWsdlClass::getSoapClient()
	 * @uses SPDocumentWkWsdlClass::setResult()
	 * @uses SPDocumentWkWsdlClass::getResult()
	 * @uses SPDocumentWkWsdlClass::saveLastError()
	 * @uses SPDocumentWkTypeRenameDws::getTitle()
	 * @param SPDocumentWkTypeRenameDws RenameDws
	 * @return SPDocumentWkTypeRenameDwsResponse
	 */
	public function RenameDws(SPDocumentWkTypeRenameDws $_SPDocumentWkTypeRenameDws)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RenameDws(array('title'=>$_SPDocumentWkTypeRenameDws->getTitle())));
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
	 * @return SPDocumentWkTypeRenameDwsResponse
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