<?php
/**
 * Class file for SPDocumentWkServiceFind
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkServiceFind
 * @date 06/07/2012
 */
class SPDocumentWkServiceFind extends SPDocumentWkWsdlClass
{
	/**
	 * Method to call FindDwsDoc
	 * @uses SPDocumentWkWsdlClass::getSoapClient()
	 * @uses SPDocumentWkWsdlClass::setResult()
	 * @uses SPDocumentWkWsdlClass::getResult()
	 * @uses SPDocumentWkWsdlClass::saveLastError()
	 * @uses SPDocumentWkTypeFindDwsDoc::getId()
	 * @param SPDocumentWkTypeFindDwsDoc FindDwsDoc
	 * @return SPDocumentWkTypeFindDwsDocResponse
	 */
	public function FindDwsDoc(SPDocumentWkTypeFindDwsDoc $_SPDocumentWkTypeFindDwsDoc)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FindDwsDoc(array('id'=>$_SPDocumentWkTypeFindDwsDoc->getId())));
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
	 * @return SPDocumentWkTypeFindDwsDocResponse
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