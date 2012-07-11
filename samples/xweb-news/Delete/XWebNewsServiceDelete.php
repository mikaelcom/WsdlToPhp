<?php
/**
 * Class file for XWebNewsServiceDelete
 * @date 09/07/2012
 */
/**
 * Class XWebNewsServiceDelete
 * @date 09/07/2012
 */
class XWebNewsServiceDelete extends XWebNewsWsdlClass
{
	/**
	 * Method to call DeleteArticle
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @uses XWebNewsTypeDeleteArticleRequest::getArticle_ID()
	 * @param XWebNewsTypeDeleteArticleRequest DeleteArticleRequest
	 * @return XWebNewsTypeUNKNOWN
	 */
	public function DeleteArticle(XWebNewsTypeDeleteArticleRequest $_XWebNewsTypeDeleteArticleRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteArticle(array('Article_ID'=>$_XWebNewsTypeDeleteArticleRequest->getArticle_ID())));
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