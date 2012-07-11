<?php
/**
 * Class file for XWebNewsServiceGet
 * @date 09/07/2012
 */
/**
 * Class XWebNewsServiceGet
 * @date 09/07/2012
 */
class XWebNewsServiceGet extends XWebNewsWsdlClass
{
	/**
	 * Method to call GetNewArticleID
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @param UNKNOWN UNKNOWN
	 * @return XWebNewsTypeGetNewArticleIDResponse
	 */
	public function GetNewArticleID(XWebNewsTypeUNKNOWN $_XWebNewsTypeUNKNOWN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNewArticleID(array()));
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
	 * @return XWebNewsTypeGetNewArticleIDResponse
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