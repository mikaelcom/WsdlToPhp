<?php
/**
 * Class file for XWebForumServicePersonalize
 * @date 09/07/2012
 */
/**
 * Class XWebForumServicePersonalize
 * @date 09/07/2012
 */
class XWebForumServicePersonalize extends XWebForumWsdlClass
{
	/**
	 * Method to call Personalize
	 * @uses XWebForumWsdlClass::getSoapClient()
	 * @uses XWebForumWsdlClass::setResult()
	 * @uses XWebForumWsdlClass::getResult()
	 * @uses XWebForumWsdlClass::saveLastError()
	 * @uses XWebForumTypePersonalizeRequest::getSource_Identifier()
	 * @uses XWebForumTypePersonalizeRequest::getMessage_ID()
	 * @param XWebForumTypePersonalizeRequest PersonalizeRequest
	 * @return XWebForumTypeUNKNOWN
	 */
	public function Personalize(XWebForumTypePersonalizeRequest $_XWebForumTypePersonalizeRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Personalize(array('Source_Identifier'=>$_XWebForumTypePersonalizeRequest->getSource_Identifier(),'Message_ID'=>$_XWebForumTypePersonalizeRequest->getMessage_ID())));
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
	 * @return XWebForumTypeUNKNOWN
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