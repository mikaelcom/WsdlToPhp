<?php
/**
 * Class file for XWebNewsServicePersonalize
 * @date 09/07/2012
 */
/**
 * Class XWebNewsServicePersonalize
 * @date 09/07/2012
 */
class XWebNewsServicePersonalize extends XWebNewsWsdlClass
{
	/**
	 * Method to call Personalize
	 * @uses XWebNewsWsdlClass::getSoapClient()
	 * @uses XWebNewsWsdlClass::setResult()
	 * @uses XWebNewsWsdlClass::getResult()
	 * @uses XWebNewsWsdlClass::saveLastError()
	 * @uses XWebNewsTypePersonalizeRequest::getSource_Identifier()
	 * @uses XWebNewsTypePersonalizeRequest::getArticle_ID()
	 * @param XWebNewsTypePersonalizeRequest PersonalizeRequest
	 * @return XWebNewsTypeUNKNOWN
	 */
	public function Personalize(XWebNewsTypePersonalizeRequest $_XWebNewsTypePersonalizeRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Personalize(array('Source_Identifier'=>$_XWebNewsTypePersonalizeRequest->getSource_Identifier(),'Article_ID'=>$_XWebNewsTypePersonalizeRequest->getArticle_ID())));
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