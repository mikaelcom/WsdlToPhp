<?php
/**
 * Class file for XWebNewsServiceUpdate
 * @date 09/07/2012
 */
/**
 * Class XWebNewsServiceUpdate
 * @date 09/07/2012
 */
class XWebNewsServiceUpdate extends XWebNewsWsdlClass
{
	/**
	 * Method to call UpdateArticle
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @uses XWebNewsTypeUpdateArticleRequest::getArticle()
	 * @param XWebNewsTypeUpdateArticleRequest UpdateArticleRequest
	 * @return XWebNewsTypeUNKNOWN
	 */
	public function UpdateArticle(XWebNewsTypeUpdateArticleRequest $_XWebNewsTypeUpdateArticleRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateArticle(array('Article'=>$_XWebNewsTypeUpdateArticleRequest->getArticle())));
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