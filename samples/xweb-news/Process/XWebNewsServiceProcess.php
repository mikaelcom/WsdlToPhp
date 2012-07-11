<?php
/**
 * Class file for XWebNewsServiceProcess
 * @date 09/07/2012
 */
/**
 * Class XWebNewsServiceProcess
 * @date 09/07/2012
 */
class XWebNewsServiceProcess extends XWebNewsWsdlClass
{
	/**
	 * Method to call ProcessArticle
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @uses XWebNewsTypeProcessArticleRequest::getArticle()
	 * @param XWebNewsTypeProcessArticleRequest ProcessArticleRequest
	 * @return XWebNewsTypeUNKNOWN
	 */
	public function ProcessArticle(XWebNewsTypeProcessArticleRequest $_XWebNewsTypeProcessArticleRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ProcessArticle(array('Article'=>$_XWebNewsTypeProcessArticleRequest->getArticle())));
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
	 * @return XWebNewsTypeUNKNOWN
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