<?php
/**
 * Class file for OvhServiceMailing
 * @date 02/07/2012
 */
/**
 * Class OvhServiceMailing
 * @date 02/07/2012
 */
class OvhServiceMailing extends OvhWsdlClass
{
	/**
	 * Method to call mailingListModeratorDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMailingListModeratorDel::getSession()
	 * @uses OvhTypeMailingListModeratorDel::getDomain()
	 * @uses OvhTypeMailingListModeratorDel::getMl()
	 * @uses OvhTypeMailingListModeratorDel::getEmail()
	 * @param OvhTypeMailingListModeratorDel MailingListModeratorDel
	 * @return OvhTypeMailingListModeratorDelResponse
	 */
	public function mailingListModeratorDel(OvhTypeMailingListModeratorDel $_ovhTypeMailingListModeratorDel)
	{
		try
		{
			$this->setResult(new OvhTypeMailingListModeratorDelResponse(self::getSoapClient()->mailingListModeratorDel($_ovhTypeMailingListModeratorDel->getSession(),$_ovhTypeMailingListModeratorDel->getDomain(),$_ovhTypeMailingListModeratorDel->getMl(),$_ovhTypeMailingListModeratorDel->getEmail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call mailingListModeratorList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMailingListModeratorList::getSession()
	 * @uses OvhTypeMailingListModeratorList::getDomain()
	 * @uses OvhTypeMailingListModeratorList::getMl()
	 * @param OvhTypeMailingListModeratorList MailingListModeratorList
	 * @return OvhTypeMailingListModeratorListResponse
	 */
	public function mailingListModeratorList(OvhTypeMailingListModeratorList $_ovhTypeMailingListModeratorList)
	{
		try
		{
			$this->setResult(new OvhTypeMailingListModeratorListResponse(self::getSoapClient()->mailingListModeratorList($_ovhTypeMailingListModeratorList->getSession(),$_ovhTypeMailingListModeratorList->getDomain(),$_ovhTypeMailingListModeratorList->getMl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call mailingListFullInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMailingListFullInfo::getSession()
	 * @uses OvhTypeMailingListFullInfo::getDomain()
	 * @uses OvhTypeMailingListFullInfo::getMl()
	 * @param OvhTypeMailingListFullInfo MailingListFullInfo
	 * @return OvhTypeMailingListFullInfoResponse
	 */
	public function mailingListFullInfo(OvhTypeMailingListFullInfo $_ovhTypeMailingListFullInfo)
	{
		try
		{
			$this->setResult(new OvhTypeMailingListFullInfoResponse(self::getSoapClient()->mailingListFullInfo($_ovhTypeMailingListFullInfo->getSession(),$_ovhTypeMailingListFullInfo->getDomain(),$_ovhTypeMailingListFullInfo->getMl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call mailingListDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMailingListDel::getSession()
	 * @uses OvhTypeMailingListDel::getDomain()
	 * @uses OvhTypeMailingListDel::getMl()
	 * @param OvhTypeMailingListDel MailingListDel
	 * @return OvhTypeMailingListDelResponse
	 */
	public function mailingListDel(OvhTypeMailingListDel $_ovhTypeMailingListDel)
	{
		try
		{
			$this->setResult(new OvhTypeMailingListDelResponse(self::getSoapClient()->mailingListDel($_ovhTypeMailingListDel->getSession(),$_ovhTypeMailingListDel->getDomain(),$_ovhTypeMailingListDel->getMl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call mailingListSubscriberAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMailingListSubscriberAdd::getSession()
	 * @uses OvhTypeMailingListSubscriberAdd::getDomain()
	 * @uses OvhTypeMailingListSubscriberAdd::getMl()
	 * @uses OvhTypeMailingListSubscriberAdd::getEmail()
	 * @param OvhTypeMailingListSubscriberAdd MailingListSubscriberAdd
	 * @return OvhTypeMailingListSubscriberAddResponse
	 */
	public function mailingListSubscriberAdd(OvhTypeMailingListSubscriberAdd $_ovhTypeMailingListSubscriberAdd)
	{
		try
		{
			$this->setResult(new OvhTypeMailingListSubscriberAddResponse(self::getSoapClient()->mailingListSubscriberAdd($_ovhTypeMailingListSubscriberAdd->getSession(),$_ovhTypeMailingListSubscriberAdd->getDomain(),$_ovhTypeMailingListSubscriberAdd->getMl(),$_ovhTypeMailingListSubscriberAdd->getEmail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call mailingListModeratorAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMailingListModeratorAdd::getSession()
	 * @uses OvhTypeMailingListModeratorAdd::getDomain()
	 * @uses OvhTypeMailingListModeratorAdd::getMl()
	 * @uses OvhTypeMailingListModeratorAdd::getEmail()
	 * @param OvhTypeMailingListModeratorAdd MailingListModeratorAdd
	 * @return OvhTypeMailingListModeratorAddResponse
	 */
	public function mailingListModeratorAdd(OvhTypeMailingListModeratorAdd $_ovhTypeMailingListModeratorAdd)
	{
		try
		{
			$this->setResult(new OvhTypeMailingListModeratorAddResponse(self::getSoapClient()->mailingListModeratorAdd($_ovhTypeMailingListModeratorAdd->getSession(),$_ovhTypeMailingListModeratorAdd->getDomain(),$_ovhTypeMailingListModeratorAdd->getMl(),$_ovhTypeMailingListModeratorAdd->getEmail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call mailingListSubscriberList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMailingListSubscriberList::getSession()
	 * @uses OvhTypeMailingListSubscriberList::getDomain()
	 * @uses OvhTypeMailingListSubscriberList::getMl()
	 * @param OvhTypeMailingListSubscriberList MailingListSubscriberList
	 * @return OvhTypeMailingListSubscriberListResponse
	 */
	public function mailingListSubscriberList(OvhTypeMailingListSubscriberList $_ovhTypeMailingListSubscriberList)
	{
		try
		{
			$this->setResult(new OvhTypeMailingListSubscriberListResponse(self::getSoapClient()->mailingListSubscriberList($_ovhTypeMailingListSubscriberList->getSession(),$_ovhTypeMailingListSubscriberList->getDomain(),$_ovhTypeMailingListSubscriberList->getMl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call mailingListSubscriberDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMailingListSubscriberDel::getSession()
	 * @uses OvhTypeMailingListSubscriberDel::getDomain()
	 * @uses OvhTypeMailingListSubscriberDel::getMl()
	 * @uses OvhTypeMailingListSubscriberDel::getEmail()
	 * @param OvhTypeMailingListSubscriberDel MailingListSubscriberDel
	 * @return OvhTypeMailingListSubscriberDelResponse
	 */
	public function mailingListSubscriberDel(OvhTypeMailingListSubscriberDel $_ovhTypeMailingListSubscriberDel)
	{
		try
		{
			$this->setResult(new OvhTypeMailingListSubscriberDelResponse(self::getSoapClient()->mailingListSubscriberDel($_ovhTypeMailingListSubscriberDel->getSession(),$_ovhTypeMailingListSubscriberDel->getDomain(),$_ovhTypeMailingListSubscriberDel->getMl(),$_ovhTypeMailingListSubscriberDel->getEmail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call mailingListInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMailingListInfo::getSession()
	 * @uses OvhTypeMailingListInfo::getDomain()
	 * @uses OvhTypeMailingListInfo::getMl()
	 * @param OvhTypeMailingListInfo MailingListInfo
	 * @return OvhTypeMailingListInfoResponse
	 */
	public function mailingListInfo(OvhTypeMailingListInfo $_ovhTypeMailingListInfo)
	{
		try
		{
			$this->setResult(new OvhTypeMailingListInfoResponse(self::getSoapClient()->mailingListInfo($_ovhTypeMailingListInfo->getSession(),$_ovhTypeMailingListInfo->getDomain(),$_ovhTypeMailingListInfo->getMl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call mailingListModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMailingListModify::getSession()
	 * @uses OvhTypeMailingListModify::getDomain()
	 * @uses OvhTypeMailingListModify::getMl()
	 * @uses OvhTypeMailingListModify::getOwner()
	 * @uses OvhTypeMailingListModify::getLang()
	 * @uses OvhTypeMailingListModify::getReplyto()
	 * @uses OvhTypeMailingListModify::getMessage_moderation()
	 * @uses OvhTypeMailingListModify::getUsers_post_only()
	 * @uses OvhTypeMailingListModify::getSubscription_moderation()
	 * @param OvhTypeMailingListModify MailingListModify
	 * @return OvhTypeMailingListModifyResponse
	 */
	public function mailingListModify(OvhTypeMailingListModify $_ovhTypeMailingListModify)
	{
		try
		{
			$this->setResult(new OvhTypeMailingListModifyResponse(self::getSoapClient()->mailingListModify($_ovhTypeMailingListModify->getSession(),$_ovhTypeMailingListModify->getDomain(),$_ovhTypeMailingListModify->getMl(),$_ovhTypeMailingListModify->getOwner(),$_ovhTypeMailingListModify->getLang(),$_ovhTypeMailingListModify->getReplyto(),$_ovhTypeMailingListModify->getMessage_moderation(),$_ovhTypeMailingListModify->getUsers_post_only(),$_ovhTypeMailingListModify->getSubscription_moderation())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call mailingListAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMailingListAdd::getSession()
	 * @uses OvhTypeMailingListAdd::getDomain()
	 * @uses OvhTypeMailingListAdd::getMl()
	 * @uses OvhTypeMailingListAdd::getOwner()
	 * @uses OvhTypeMailingListAdd::getLang()
	 * @uses OvhTypeMailingListAdd::getReplyto()
	 * @uses OvhTypeMailingListAdd::getMessage_moderation()
	 * @uses OvhTypeMailingListAdd::getUsers_post_only()
	 * @uses OvhTypeMailingListAdd::getSubscription_moderation()
	 * @param OvhTypeMailingListAdd MailingListAdd
	 * @return OvhTypeMailingListAddResponse
	 */
	public function mailingListAdd(OvhTypeMailingListAdd $_ovhTypeMailingListAdd)
	{
		try
		{
			$this->setResult(new OvhTypeMailingListAddResponse(self::getSoapClient()->mailingListAdd($_ovhTypeMailingListAdd->getSession(),$_ovhTypeMailingListAdd->getDomain(),$_ovhTypeMailingListAdd->getMl(),$_ovhTypeMailingListAdd->getOwner(),$_ovhTypeMailingListAdd->getLang(),$_ovhTypeMailingListAdd->getReplyto(),$_ovhTypeMailingListAdd->getMessage_moderation(),$_ovhTypeMailingListAdd->getUsers_post_only(),$_ovhTypeMailingListAdd->getSubscription_moderation())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call mailingListList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMailingListList::getSession()
	 * @uses OvhTypeMailingListList::getDomain()
	 * @param OvhTypeMailingListList MailingListList
	 * @return OvhTypeMailingListListResponse
	 */
	public function mailingListList(OvhTypeMailingListList $_ovhTypeMailingListList)
	{
		try
		{
			$this->setResult(new OvhTypeMailingListListResponse(self::getSoapClient()->mailingListList($_ovhTypeMailingListList->getSession(),$_ovhTypeMailingListList->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call mailingListSubscriberListByEmail
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeMailingListSubscriberListByEmail::getSession()
	 * @uses OvhTypeMailingListSubscriberListByEmail::getDomain()
	 * @uses OvhTypeMailingListSubscriberListByEmail::getMl()
	 * @uses OvhTypeMailingListSubscriberListByEmail::getEmail()
	 * @param OvhTypeMailingListSubscriberListByEmail MailingListSubscriberListByEmail
	 * @return OvhTypeMailingListSubscriberListByEmailResponse
	 */
	public function mailingListSubscriberListByEmail(OvhTypeMailingListSubscriberListByEmail $_ovhTypeMailingListSubscriberListByEmail)
	{
		try
		{
			$this->setResult(new OvhTypeMailingListSubscriberListByEmailResponse(self::getSoapClient()->mailingListSubscriberListByEmail($_ovhTypeMailingListSubscriberListByEmail->getSession(),$_ovhTypeMailingListSubscriberListByEmail->getDomain(),$_ovhTypeMailingListSubscriberListByEmail->getMl(),$_ovhTypeMailingListSubscriberListByEmail->getEmail())));
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
	 * @return OvhTypeMailingListSubscriberListByEmailResponse
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