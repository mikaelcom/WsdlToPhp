<?php
/**
 * Class file for XWebNewsServiceAdd
 * @date 09/07/2012
 */
/**
 * Class XWebNewsServiceAdd
 * @date 09/07/2012
 */
class XWebNewsServiceAdd extends XWebNewsWsdlClass
{
	/**
	 * Method to call AddArticle
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @uses XWebNewsTypeAddArticleRequest::getArticle()
	 * @param XWebNewsTypeAddArticleRequest AddArticleRequest
	 * @return XWebNewsTypeUNKNOWN
	 */
	public function AddArticle(XWebNewsTypeAddArticleRequest $_XWebNewsTypeAddArticleRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddArticle(array('Article'=>$_XWebNewsTypeAddArticleRequest->getArticle())));
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