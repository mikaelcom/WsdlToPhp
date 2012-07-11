<?php
/**
 * Class file for OvhServiceResponder
 * @date 02/07/2012
 */
/**
 * Class OvhServiceResponder
 * @date 02/07/2012
 */
class OvhServiceResponder extends OvhWsdlClass
{
	/**
	 * Method to call responderEmailList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeResponderEmailList::getSession()
	 * @uses OvhTypeResponderEmailList::getDomain()
	 * @param OvhTypeResponderEmailList ResponderEmailList
	 * @return OvhTypeResponderEmailListResponse
	 */
	public function responderEmailList(OvhTypeResponderEmailList $_ovhTypeResponderEmailList)
	{
		try
		{
			$this->setResult(new OvhTypeResponderEmailListResponse(self::getSoapClient()->responderEmailList($_ovhTypeResponderEmailList->getSession(),$_ovhTypeResponderEmailList->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call responderEmailInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeResponderEmailInfo::getSession()
	 * @uses OvhTypeResponderEmailInfo::getDomain()
	 * @uses OvhTypeResponderEmailInfo::getResponder()
	 * @param OvhTypeResponderEmailInfo ResponderEmailInfo
	 * @return OvhTypeResponderEmailInfoResponse
	 */
	public function responderEmailInfo(OvhTypeResponderEmailInfo $_ovhTypeResponderEmailInfo)
	{
		try
		{
			$this->setResult(new OvhTypeResponderEmailInfoResponse(self::getSoapClient()->responderEmailInfo($_ovhTypeResponderEmailInfo->getSession(),$_ovhTypeResponderEmailInfo->getDomain(),$_ovhTypeResponderEmailInfo->getResponder())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call responderEmailDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeResponderEmailDel::getSession()
	 * @uses OvhTypeResponderEmailDel::getDomain()
	 * @uses OvhTypeResponderEmailDel::getResponder()
	 * @param OvhTypeResponderEmailDel ResponderEmailDel
	 * @return OvhTypeResponderEmailDelResponse
	 */
	public function responderEmailDel(OvhTypeResponderEmailDel $_ovhTypeResponderEmailDel)
	{
		try
		{
			$this->setResult(new OvhTypeResponderEmailDelResponse(self::getSoapClient()->responderEmailDel($_ovhTypeResponderEmailDel->getSession(),$_ovhTypeResponderEmailDel->getDomain(),$_ovhTypeResponderEmailDel->getResponder())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call responderEmailModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeResponderEmailModify::getSession()
	 * @uses OvhTypeResponderEmailModify::getDomain()
	 * @uses OvhTypeResponderEmailModify::getResponder()
	 * @uses OvhTypeResponderEmailModify::getContent()
	 * @uses OvhTypeResponderEmailModify::getDelivered_to()
	 * @uses OvhTypeResponderEmailModify::getNic()
	 * @param OvhTypeResponderEmailModify ResponderEmailModify
	 * @return OvhTypeResponderEmailModifyResponse
	 */
	public function responderEmailModify(OvhTypeResponderEmailModify $_ovhTypeResponderEmailModify)
	{
		try
		{
			$this->setResult(new OvhTypeResponderEmailModifyResponse(self::getSoapClient()->responderEmailModify($_ovhTypeResponderEmailModify->getSession(),$_ovhTypeResponderEmailModify->getDomain(),$_ovhTypeResponderEmailModify->getResponder(),$_ovhTypeResponderEmailModify->getContent(),$_ovhTypeResponderEmailModify->getDelivered_to(),$_ovhTypeResponderEmailModify->getNic())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call responderEmailAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeResponderEmailAdd::getSession()
	 * @uses OvhTypeResponderEmailAdd::getDomain()
	 * @uses OvhTypeResponderEmailAdd::getResponder()
	 * @uses OvhTypeResponderEmailAdd::getContent()
	 * @uses OvhTypeResponderEmailAdd::getDelivered_to()
	 * @uses OvhTypeResponderEmailAdd::getNic()
	 * @param OvhTypeResponderEmailAdd ResponderEmailAdd
	 * @return OvhTypeResponderEmailAddResponse
	 */
	public function responderEmailAdd(OvhTypeResponderEmailAdd $_ovhTypeResponderEmailAdd)
	{
		try
		{
			$this->setResult(new OvhTypeResponderEmailAddResponse(self::getSoapClient()->responderEmailAdd($_ovhTypeResponderEmailAdd->getSession(),$_ovhTypeResponderEmailAdd->getDomain(),$_ovhTypeResponderEmailAdd->getResponder(),$_ovhTypeResponderEmailAdd->getContent(),$_ovhTypeResponderEmailAdd->getDelivered_to(),$_ovhTypeResponderEmailAdd->getNic())));
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
	 * @return OvhTypeResponderEmailAddResponse
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