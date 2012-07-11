<?php
/**
 * Class file for SPWebsServiceRevert
 * @date 06/07/2012
 */
/**
 * Class SPWebsServiceRevert
 * @date 06/07/2012
 */
class SPWebsServiceRevert extends SPWebsWsdlClass
{
	/**
	 * Method to call RevertFileContentStream
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @uses SPWebsTypeRevertFileContentStream::getFileUrl()
	 * @param SPWebsTypeRevertFileContentStream RevertFileContentStream
	 * @return SPWebsTypeRevertFileContentStreamResponse
	 */
	public function RevertFileContentStream(SPWebsTypeRevertFileContentStream $_SPWebsTypeRevertFileContentStream)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RevertFileContentStream(array('fileUrl'=>$_SPWebsTypeRevertFileContentStream->getFileUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RevertAllFileContentStreams
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @param SPWebsTypeRevertAllFileContentStreams RevertAllFileContentStreams
	 * @return SPWebsTypeRevertAllFileContentStreamsResponse
	 */
	public function RevertAllFileContentStreams(SPWebsTypeRevertAllFileContentStreams $_SPWebsTypeRevertAllFileContentStreams)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RevertAllFileContentStreams(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RevertCss
	 * @uses SPWebsWsdlClass::getSoapClient()
	 * @uses SPWebsWsdlClass::setResult()
	 * @uses SPWebsWsdlClass::getResult()
	 * @uses SPWebsWsdlClass::saveLastError()
	 * @uses SPWebsTypeRevertCss::getCssFile()
	 * @param SPWebsTypeRevertCss RevertCss
	 * @return SPWebsTypeRevertCssResponse
	 */
	public function RevertCss(SPWebsTypeRevertCss $_SPWebsTypeRevertCss)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RevertCss(array('cssFile'=>$_SPWebsTypeRevertCss->getCssFile())));
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
	 * @return SPWebsTypeRevertCssResponse
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