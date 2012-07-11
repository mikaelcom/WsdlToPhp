<?php
/**
 * Class file for OvhServiceRedirected
 * @date 02/07/2012
 */
/**
 * Class OvhServiceRedirected
 * @date 02/07/2012
 */
class OvhServiceRedirected extends OvhWsdlClass
{
	/**
	 * Method to call redirectedEmailAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeRedirectedEmailAdd::getSession()
	 * @uses OvhTypeRedirectedEmailAdd::getDomain()
	 * @uses OvhTypeRedirectedEmailAdd::getRedirected()
	 * @uses OvhTypeRedirectedEmailAdd::getTarget()
	 * @uses OvhTypeRedirectedEmailAdd::getSubdomain()
	 * @uses OvhTypeRedirectedEmailAdd::getLocalCopy()
	 * @param OvhTypeRedirectedEmailAdd RedirectedEmailAdd
	 * @return OvhTypeRedirectedEmailAddResponse
	 */
	public function redirectedEmailAdd(OvhTypeRedirectedEmailAdd $_ovhTypeRedirectedEmailAdd)
	{
		try
		{
			$this->setResult(new OvhTypeRedirectedEmailAddResponse(self::getSoapClient()->redirectedEmailAdd($_ovhTypeRedirectedEmailAdd->getSession(),$_ovhTypeRedirectedEmailAdd->getDomain(),$_ovhTypeRedirectedEmailAdd->getRedirected(),$_ovhTypeRedirectedEmailAdd->getTarget(),$_ovhTypeRedirectedEmailAdd->getSubdomain(),$_ovhTypeRedirectedEmailAdd->getLocalCopy())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call redirectedEmailModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeRedirectedEmailModify::getSession()
	 * @uses OvhTypeRedirectedEmailModify::getDomain()
	 * @uses OvhTypeRedirectedEmailModify::getRedirected()
	 * @uses OvhTypeRedirectedEmailModify::getOld_target()
	 * @uses OvhTypeRedirectedEmailModify::getTarget()
	 * @uses OvhTypeRedirectedEmailModify::getSubdomain()
	 * @param OvhTypeRedirectedEmailModify RedirectedEmailModify
	 * @return OvhTypeRedirectedEmailModifyResponse
	 */
	public function redirectedEmailModify(OvhTypeRedirectedEmailModify $_ovhTypeRedirectedEmailModify)
	{
		try
		{
			$this->setResult(new OvhTypeRedirectedEmailModifyResponse(self::getSoapClient()->redirectedEmailModify($_ovhTypeRedirectedEmailModify->getSession(),$_ovhTypeRedirectedEmailModify->getDomain(),$_ovhTypeRedirectedEmailModify->getRedirected(),$_ovhTypeRedirectedEmailModify->getOld_target(),$_ovhTypeRedirectedEmailModify->getTarget(),$_ovhTypeRedirectedEmailModify->getSubdomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call redirectedEmailDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeRedirectedEmailDel::getSession()
	 * @uses OvhTypeRedirectedEmailDel::getDomain()
	 * @uses OvhTypeRedirectedEmailDel::getRedirected()
	 * @uses OvhTypeRedirectedEmailDel::getTarget()
	 * @uses OvhTypeRedirectedEmailDel::getSubdomain()
	 * @param OvhTypeRedirectedEmailDel RedirectedEmailDel
	 * @return OvhTypeRedirectedEmailDelResponse
	 */
	public function redirectedEmailDel(OvhTypeRedirectedEmailDel $_ovhTypeRedirectedEmailDel)
	{
		try
		{
			$this->setResult(new OvhTypeRedirectedEmailDelResponse(self::getSoapClient()->redirectedEmailDel($_ovhTypeRedirectedEmailDel->getSession(),$_ovhTypeRedirectedEmailDel->getDomain(),$_ovhTypeRedirectedEmailDel->getRedirected(),$_ovhTypeRedirectedEmailDel->getTarget(),$_ovhTypeRedirectedEmailDel->getSubdomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call redirectedEmailList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeRedirectedEmailList::getSession()
	 * @uses OvhTypeRedirectedEmailList::getDomain()
	 * @param OvhTypeRedirectedEmailList RedirectedEmailList
	 * @return OvhTypeRedirectedEmailListResponse
	 */
	public function redirectedEmailList(OvhTypeRedirectedEmailList $_ovhTypeRedirectedEmailList)
	{
		try
		{
			$this->setResult(new OvhTypeRedirectedEmailListResponse(self::getSoapClient()->redirectedEmailList($_ovhTypeRedirectedEmailList->getSession(),$_ovhTypeRedirectedEmailList->getDomain())));
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
	 * @return OvhTypeRedirectedEmailListResponse
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