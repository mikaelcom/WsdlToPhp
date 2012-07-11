<?php
/**
 * Class file for OvhServiceCrontab
 * @date 02/07/2012
 */
/**
 * Class OvhServiceCrontab
 * @date 02/07/2012
 */
class OvhServiceCrontab extends OvhWsdlClass
{
	/**
	 * Method to call crontabDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeCrontabDel::getSession()
	 * @uses OvhTypeCrontabDel::getDomain()
	 * @uses OvhTypeCrontabDel::getId()
	 * @param OvhTypeCrontabDel CrontabDel
	 * @return OvhTypeCrontabDelResponse
	 */
	public function crontabDel(OvhTypeCrontabDel $_ovhTypeCrontabDel)
	{
		try
		{
			$this->setResult(new OvhTypeCrontabDelResponse(self::getSoapClient()->crontabDel($_ovhTypeCrontabDel->getSession(),$_ovhTypeCrontabDel->getDomain(),$_ovhTypeCrontabDel->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call crontabList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeCrontabList::getSession()
	 * @uses OvhTypeCrontabList::getDomain()
	 * @param OvhTypeCrontabList CrontabList
	 * @return OvhTypeCrontabListResponse
	 */
	public function crontabList(OvhTypeCrontabList $_ovhTypeCrontabList)
	{
		try
		{
			$this->setResult(new OvhTypeCrontabListResponse(self::getSoapClient()->crontabList($_ovhTypeCrontabList->getSession(),$_ovhTypeCrontabList->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call crontabAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeCrontabAdd::getSession()
	 * @uses OvhTypeCrontabAdd::getDomain()
	 * @uses OvhTypeCrontabAdd::getPath()
	 * @uses OvhTypeCrontabAdd::getProgramLanguage()
	 * @uses OvhTypeCrontabAdd::getWeekDay()
	 * @uses OvhTypeCrontabAdd::getDays()
	 * @uses OvhTypeCrontabAdd::getHours()
	 * @uses OvhTypeCrontabAdd::getDesc()
	 * @uses OvhTypeCrontabAdd::getEmail()
	 * @uses OvhTypeCrontabAdd::getOtherEmail()
	 * @param OvhTypeCrontabAdd CrontabAdd
	 * @return OvhTypeCrontabAddResponse
	 */
	public function crontabAdd(OvhTypeCrontabAdd $_ovhTypeCrontabAdd)
	{
		try
		{
			$this->setResult(new OvhTypeCrontabAddResponse(self::getSoapClient()->crontabAdd($_ovhTypeCrontabAdd->getSession(),$_ovhTypeCrontabAdd->getDomain(),$_ovhTypeCrontabAdd->getPath(),$_ovhTypeCrontabAdd->getProgramLanguage(),$_ovhTypeCrontabAdd->getWeekDay(),$_ovhTypeCrontabAdd->getDays(),$_ovhTypeCrontabAdd->getHours(),$_ovhTypeCrontabAdd->getDesc(),$_ovhTypeCrontabAdd->getEmail(),$_ovhTypeCrontabAdd->getOtherEmail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call crontabInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeCrontabInfo::getSession()
	 * @uses OvhTypeCrontabInfo::getDomain()
	 * @uses OvhTypeCrontabInfo::getId()
	 * @param OvhTypeCrontabInfo CrontabInfo
	 * @return OvhTypeCrontabInfoResponse
	 */
	public function crontabInfo(OvhTypeCrontabInfo $_ovhTypeCrontabInfo)
	{
		try
		{
			$this->setResult(new OvhTypeCrontabInfoResponse(self::getSoapClient()->crontabInfo($_ovhTypeCrontabInfo->getSession(),$_ovhTypeCrontabInfo->getDomain(),$_ovhTypeCrontabInfo->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call crontabModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeCrontabModify::getSession()
	 * @uses OvhTypeCrontabModify::getDomain()
	 * @uses OvhTypeCrontabModify::getId()
	 * @uses OvhTypeCrontabModify::getPath()
	 * @uses OvhTypeCrontabModify::getProgramLanguage()
	 * @uses OvhTypeCrontabModify::getWeekDay()
	 * @uses OvhTypeCrontabModify::getDays()
	 * @uses OvhTypeCrontabModify::getHours()
	 * @uses OvhTypeCrontabModify::getDesc()
	 * @uses OvhTypeCrontabModify::getEmail()
	 * @uses OvhTypeCrontabModify::getOtherEmail()
	 * @uses OvhTypeCrontabModify::getEnable()
	 * @param OvhTypeCrontabModify CrontabModify
	 * @return OvhTypeCrontabModifyResponse
	 */
	public function crontabModify(OvhTypeCrontabModify $_ovhTypeCrontabModify)
	{
		try
		{
			$this->setResult(new OvhTypeCrontabModifyResponse(self::getSoapClient()->crontabModify($_ovhTypeCrontabModify->getSession(),$_ovhTypeCrontabModify->getDomain(),$_ovhTypeCrontabModify->getId(),$_ovhTypeCrontabModify->getPath(),$_ovhTypeCrontabModify->getProgramLanguage(),$_ovhTypeCrontabModify->getWeekDay(),$_ovhTypeCrontabModify->getDays(),$_ovhTypeCrontabModify->getHours(),$_ovhTypeCrontabModify->getDesc(),$_ovhTypeCrontabModify->getEmail(),$_ovhTypeCrontabModify->getOtherEmail(),$_ovhTypeCrontabModify->getEnable())));
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
	 * @return OvhTypeCrontabModifyResponse
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