<?php
/**
 * Class file for XiEdgarServiceRead
 * @date 08/07/2012
 */
/**
 * Class XiEdgarServiceRead
 * @date 08/07/2012
 */
class XiEdgarServiceRead extends XiEdgarWsdlClass
{
	/**
	 * Method to call ReadDocument
	 * Meta informations :
	 * 	- documentation : Retrieve and enrich the content of an HTML Filing by Url.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeReadDocument::getHtmlFileUrl()
	 * @param XiEdgarTypeReadDocument ReadDocument
	 * @return XiEdgarTypeReadDocumentResponse
	 */
	public function ReadDocument(XiEdgarTypeReadDocument $_XiEdgarTypeReadDocument)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReadDocument(array('HtmlFileUrl'=>$_XiEdgarTypeReadDocument->getHtmlFileUrl())));
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
	 * @return XiEdgarTypeReadDocumentResponse
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