<?php
/**
 * Class file for OvhServiceTelephony
 * @date 02/07/2012
 */
/**
 * Class OvhServiceTelephony
 * @date 02/07/2012
 */
class OvhServiceTelephony extends OvhWsdlClass
{
	/**
	 * Method to call telephonyConferenceDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyConferenceDel::getSession()
	 * @uses OvhTypeTelephonyConferenceDel::getNumber()
	 * @uses OvhTypeTelephonyConferenceDel::getCountry()
	 * @uses OvhTypeTelephonyConferenceDel::getRoom()
	 * @param OvhTypeTelephonyConferenceDel TelephonyConferenceDel
	 * @return OvhTypeTelephonyConferenceDelResponse
	 */
	public function telephonyConferenceDel(OvhTypeTelephonyConferenceDel $_ovhTypeTelephonyConferenceDel)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyConferenceDelResponse(self::getSoapClient()->telephonyConferenceDel($_ovhTypeTelephonyConferenceDel->getSession(),$_ovhTypeTelephonyConferenceDel->getNumber(),$_ovhTypeTelephonyConferenceDel->getCountry(),$_ovhTypeTelephonyConferenceDel->getRoom())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyNumberInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyNumberInfo::getSession()
	 * @uses OvhTypeTelephonyNumberInfo::getNumber()
	 * @uses OvhTypeTelephonyNumberInfo::getCountry()
	 * @param OvhTypeTelephonyNumberInfo TelephonyNumberInfo
	 * @return OvhTypeTelephonyNumberInfoResponse
	 */
	public function telephonyNumberInfo(OvhTypeTelephonyNumberInfo $_ovhTypeTelephonyNumberInfo)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyNumberInfoResponse(self::getSoapClient()->telephonyNumberInfo($_ovhTypeTelephonyNumberInfo->getSession(),$_ovhTypeTelephonyNumberInfo->getNumber(),$_ovhTypeTelephonyNumberInfo->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyVoicemailOptionsList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyVoicemailOptionsList::getSession()
	 * @uses OvhTypeTelephonyVoicemailOptionsList::getNumber()
	 * @uses OvhTypeTelephonyVoicemailOptionsList::getCountry()
	 * @param OvhTypeTelephonyVoicemailOptionsList TelephonyVoicemailOptionsList
	 * @return OvhTypeTelephonyVoicemailOptionsListResponse
	 */
	public function telephonyVoicemailOptionsList(OvhTypeTelephonyVoicemailOptionsList $_ovhTypeTelephonyVoicemailOptionsList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyVoicemailOptionsListResponse(self::getSoapClient()->telephonyVoicemailOptionsList($_ovhTypeTelephonyVoicemailOptionsList->getSession(),$_ovhTypeTelephonyVoicemailOptionsList->getNumber(),$_ovhTypeTelephonyVoicemailOptionsList->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookSharePeerList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookSharePeerList::getSession()
	 * @uses OvhTypeTelephonyPhonebookSharePeerList::getNumber()
	 * @uses OvhTypeTelephonyPhonebookSharePeerList::getCountry()
	 * @uses OvhTypeTelephonyPhonebookSharePeerList::getId()
	 * @param OvhTypeTelephonyPhonebookSharePeerList TelephonyPhonebookSharePeerList
	 * @return OvhTypeTelephonyPhonebookSharePeerListResponse
	 */
	public function telephonyPhonebookSharePeerList(OvhTypeTelephonyPhonebookSharePeerList $_ovhTypeTelephonyPhonebookSharePeerList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookSharePeerListResponse(self::getSoapClient()->telephonyPhonebookSharePeerList($_ovhTypeTelephonyPhonebookSharePeerList->getSession(),$_ovhTypeTelephonyPhonebookSharePeerList->getNumber(),$_ovhTypeTelephonyPhonebookSharePeerList->getCountry(),$_ovhTypeTelephonyPhonebookSharePeerList->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyRedirectModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyRedirectModify::getSession()
	 * @uses OvhTypeTelephonyRedirectModify::getNumber()
	 * @uses OvhTypeTelephonyRedirectModify::getCountry()
	 * @uses OvhTypeTelephonyRedirectModify::getDestination()
	 * @param OvhTypeTelephonyRedirectModify TelephonyRedirectModify
	 * @return OvhTypeTelephonyRedirectModifyResponse
	 */
	public function telephonyRedirectModify(OvhTypeTelephonyRedirectModify $_ovhTypeTelephonyRedirectModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyRedirectModifyResponse(self::getSoapClient()->telephonyRedirectModify($_ovhTypeTelephonyRedirectModify->getSession(),$_ovhTypeTelephonyRedirectModify->getNumber(),$_ovhTypeTelephonyRedirectModify->getCountry(),$_ovhTypeTelephonyRedirectModify->getDestination())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyNumberModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyNumberModify::getSession()
	 * @uses OvhTypeTelephonyNumberModify::getNumber()
	 * @uses OvhTypeTelephonyNumberModify::getCountry()
	 * @uses OvhTypeTelephonyNumberModify::getBillingAccount()
	 * @uses OvhTypeTelephonyNumberModify::getNewType()
	 * @param OvhTypeTelephonyNumberModify TelephonyNumberModify
	 * @return OvhTypeTelephonyNumberModifyResponse
	 */
	public function telephonyNumberModify(OvhTypeTelephonyNumberModify $_ovhTypeTelephonyNumberModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyNumberModifyResponse(self::getSoapClient()->telephonyNumberModify($_ovhTypeTelephonyNumberModify->getSession(),$_ovhTypeTelephonyNumberModify->getNumber(),$_ovhTypeTelephonyNumberModify->getCountry(),$_ovhTypeTelephonyNumberModify->getBillingAccount(),$_ovhTypeTelephonyNumberModify->getNewType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsUserGetCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsUserGetCsvAttachment::getSmsAccount()
	 * @uses OvhTypeTelephonySmsUserGetCsvAttachment::getLogin()
	 * @uses OvhTypeTelephonySmsUserGetCsvAttachment::getPassword()
	 * @uses OvhTypeTelephonySmsUserGetCsvAttachment::getId()
	 * @param OvhTypeTelephonySmsUserGetCsvAttachment TelephonySmsUserGetCsvAttachment
	 * @return OvhTypeTelephonySmsUserGetCsvAttachmentResponse
	 */
	public function telephonySmsUserGetCsvAttachment(OvhTypeTelephonySmsUserGetCsvAttachment $_ovhTypeTelephonySmsUserGetCsvAttachment)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsUserGetCsvAttachmentResponse(self::getSoapClient()->telephonySmsUserGetCsvAttachment($_ovhTypeTelephonySmsUserGetCsvAttachment->getSmsAccount(),$_ovhTypeTelephonySmsUserGetCsvAttachment->getLogin(),$_ovhTypeTelephonySmsUserGetCsvAttachment->getPassword(),$_ovhTypeTelephonySmsUserGetCsvAttachment->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyNicSetSipDomain
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyNicSetSipDomain::getSession()
	 * @uses OvhTypeTelephonyNicSetSipDomain::getFr()
	 * @uses OvhTypeTelephonyNicSetSipDomain::getDe()
	 * @uses OvhTypeTelephonyNicSetSipDomain::getEs()
	 * @uses OvhTypeTelephonyNicSetSipDomain::getUk()
	 * @uses OvhTypeTelephonyNicSetSipDomain::getBe()
	 * @param OvhTypeTelephonyNicSetSipDomain TelephonyNicSetSipDomain
	 * @return OvhTypeTelephonyNicSetSipDomainResponse
	 */
	public function telephonyNicSetSipDomain(OvhTypeTelephonyNicSetSipDomain $_ovhTypeTelephonyNicSetSipDomain)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyNicSetSipDomainResponse(self::getSoapClient()->telephonyNicSetSipDomain($_ovhTypeTelephonyNicSetSipDomain->getSession(),$_ovhTypeTelephonyNicSetSipDomain->getFr(),$_ovhTypeTelephonyNicSetSipDomain->getDe(),$_ovhTypeTelephonyNicSetSipDomain->getEs(),$_ovhTypeTelephonyNicSetSipDomain->getUk(),$_ovhTypeTelephonyNicSetSipDomain->getBe())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsMultiSend
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsMultiSend::getSession()
	 * @uses OvhTypeTelephonySmsMultiSend::getSmsAccount()
	 * @uses OvhTypeTelephonySmsMultiSend::getNumberFrom()
	 * @uses OvhTypeTelephonySmsMultiSend::getNumberTo()
	 * @uses OvhTypeTelephonySmsMultiSend::getMessage()
	 * @uses OvhTypeTelephonySmsMultiSend::getSmsValidity()
	 * @uses OvhTypeTelephonySmsMultiSend::getSmsClass()
	 * @uses OvhTypeTelephonySmsMultiSend::getSmsDeferred()
	 * @uses OvhTypeTelephonySmsMultiSend::getSmsPriority()
	 * @uses OvhTypeTelephonySmsMultiSend::getSmsCoding()
	 * @uses OvhTypeTelephonySmsMultiSend::getTag()
	 * @uses OvhTypeTelephonySmsMultiSend::getNumberToCsv()
	 * @param OvhTypeTelephonySmsMultiSend TelephonySmsMultiSend
	 * @return OvhTypeTelephonySmsMultiSendResponse
	 */
	public function telephonySmsMultiSend(OvhTypeTelephonySmsMultiSend $_ovhTypeTelephonySmsMultiSend)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsMultiSendResponse(self::getSoapClient()->telephonySmsMultiSend($_ovhTypeTelephonySmsMultiSend->getSession(),$_ovhTypeTelephonySmsMultiSend->getSmsAccount(),$_ovhTypeTelephonySmsMultiSend->getNumberFrom(),$_ovhTypeTelephonySmsMultiSend->getNumberTo(),$_ovhTypeTelephonySmsMultiSend->getMessage(),$_ovhTypeTelephonySmsMultiSend->getSmsValidity(),$_ovhTypeTelephonySmsMultiSend->getSmsClass(),$_ovhTypeTelephonySmsMultiSend->getSmsDeferred(),$_ovhTypeTelephonySmsMultiSend->getSmsPriority(),$_ovhTypeTelephonySmsMultiSend->getSmsCoding(),$_ovhTypeTelephonySmsMultiSend->getTag(),$_ovhTypeTelephonySmsMultiSend->getNumberToCsv())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsUserAddCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsUserAddCsvAttachment::getSmsAccount()
	 * @uses OvhTypeTelephonySmsUserAddCsvAttachment::getLogin()
	 * @uses OvhTypeTelephonySmsUserAddCsvAttachment::getPassword()
	 * @uses OvhTypeTelephonySmsUserAddCsvAttachment::getCsvUrl()
	 * @uses OvhTypeTelephonySmsUserAddCsvAttachment::getId()
	 * @uses OvhTypeTelephonySmsUserAddCsvAttachment::getName()
	 * @param OvhTypeTelephonySmsUserAddCsvAttachment TelephonySmsUserAddCsvAttachment
	 * @return OvhTypeTelephonySmsUserAddCsvAttachmentResponse
	 */
	public function telephonySmsUserAddCsvAttachment(OvhTypeTelephonySmsUserAddCsvAttachment $_ovhTypeTelephonySmsUserAddCsvAttachment)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsUserAddCsvAttachmentResponse(self::getSoapClient()->telephonySmsUserAddCsvAttachment($_ovhTypeTelephonySmsUserAddCsvAttachment->getSmsAccount(),$_ovhTypeTelephonySmsUserAddCsvAttachment->getLogin(),$_ovhTypeTelephonySmsUserAddCsvAttachment->getPassword(),$_ovhTypeTelephonySmsUserAddCsvAttachment->getCsvUrl(),$_ovhTypeTelephonySmsUserAddCsvAttachment->getId(),$_ovhTypeTelephonySmsUserAddCsvAttachment->getName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFaxHistory
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFaxHistory::getSession()
	 * @uses OvhTypeTelephonyFaxHistory::getNumber()
	 * @uses OvhTypeTelephonyFaxHistory::getCountry()
	 * @uses OvhTypeTelephonyFaxHistory::getState()
	 * @param OvhTypeTelephonyFaxHistory TelephonyFaxHistory
	 * @return OvhTypeTelephonyFaxHistoryResponse
	 */
	public function telephonyFaxHistory(OvhTypeTelephonyFaxHistory $_ovhTypeTelephonyFaxHistory)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFaxHistoryResponse(self::getSoapClient()->telephonyFaxHistory($_ovhTypeTelephonyFaxHistory->getSession(),$_ovhTypeTelephonyFaxHistory->getNumber(),$_ovhTypeTelephonyFaxHistory->getCountry(),$_ovhTypeTelephonyFaxHistory->getState())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFreefaxToVoicefax
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFreefaxToVoicefax::getSession()
	 * @uses OvhTypeTelephonyFreefaxToVoicefax::getBillingAccount()
	 * @uses OvhTypeTelephonyFreefaxToVoicefax::getNumber()
	 * @uses OvhTypeTelephonyFreefaxToVoicefax::getCountry()
	 * @param OvhTypeTelephonyFreefaxToVoicefax TelephonyFreefaxToVoicefax
	 * @return OvhTypeTelephonyFreefaxToVoicefaxResponse
	 */
	public function telephonyFreefaxToVoicefax(OvhTypeTelephonyFreefaxToVoicefax $_ovhTypeTelephonyFreefaxToVoicefax)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFreefaxToVoicefaxResponse(self::getSoapClient()->telephonyFreefaxToVoicefax($_ovhTypeTelephonyFreefaxToVoicefax->getSession(),$_ovhTypeTelephonyFreefaxToVoicefax->getBillingAccount(),$_ovhTypeTelephonyFreefaxToVoicefax->getNumber(),$_ovhTypeTelephonyFreefaxToVoicefax->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFaxSend
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFaxSend::getSession()
	 * @uses OvhTypeTelephonyFaxSend::getNumber()
	 * @uses OvhTypeTelephonyFaxSend::getCountry()
	 * @uses OvhTypeTelephonyFaxSend::getPdfUrl()
	 * @uses OvhTypeTelephonyFaxSend::getRecipients()
	 * @uses OvhTypeTelephonyFaxSend::getQuality()
	 * @uses OvhTypeTelephonyFaxSend::getEmail()
	 * @uses OvhTypeTelephonyFaxSend::getReferer()
	 * @param OvhTypeTelephonyFaxSend TelephonyFaxSend
	 * @return OvhTypeTelephonyFaxSendResponse
	 */
	public function telephonyFaxSend(OvhTypeTelephonyFaxSend $_ovhTypeTelephonyFaxSend)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFaxSendResponse(self::getSoapClient()->telephonyFaxSend($_ovhTypeTelephonyFaxSend->getSession(),$_ovhTypeTelephonyFaxSend->getNumber(),$_ovhTypeTelephonyFaxSend->getCountry(),$_ovhTypeTelephonyFaxSend->getPdfUrl(),$_ovhTypeTelephonyFaxSend->getRecipients(),$_ovhTypeTelephonyFaxSend->getQuality(),$_ovhTypeTelephonyFaxSend->getEmail(),$_ovhTypeTelephonyFaxSend->getReferer())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyRestrictionList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyRestrictionList::getSession()
	 * @uses OvhTypeTelephonyRestrictionList::getNumber()
	 * @uses OvhTypeTelephonyRestrictionList::getCountry()
	 * @param OvhTypeTelephonyRestrictionList TelephonyRestrictionList
	 * @return OvhTypeTelephonyRestrictionListResponse
	 */
	public function telephonyRestrictionList(OvhTypeTelephonyRestrictionList $_ovhTypeTelephonyRestrictionList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyRestrictionListResponse(self::getSoapClient()->telephonyRestrictionList($_ovhTypeTelephonyRestrictionList->getSession(),$_ovhTypeTelephonyRestrictionList->getNumber(),$_ovhTypeTelephonyRestrictionList->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyBillList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyBillList::getSession()
	 * @uses OvhTypeTelephonyBillList::getBillingAccount()
	 * @uses OvhTypeTelephonyBillList::getDate()
	 * @param OvhTypeTelephonyBillList TelephonyBillList
	 * @return OvhTypeTelephonyBillListResponse
	 */
	public function telephonyBillList(OvhTypeTelephonyBillList $_ovhTypeTelephonyBillList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyBillListResponse(self::getSoapClient()->telephonyBillList($_ovhTypeTelephonyBillList->getSession(),$_ovhTypeTelephonyBillList->getBillingAccount(),$_ovhTypeTelephonyBillList->getDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyNumberCustomList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyNumberCustomList::getSession()
	 * @uses OvhTypeTelephonyNumberCustomList::getCountry()
	 * @uses OvhTypeTelephonyNumberCustomList::getPrefix()
	 * @param OvhTypeTelephonyNumberCustomList TelephonyNumberCustomList
	 * @return OvhTypeTelephonyNumberCustomListResponse
	 */
	public function telephonyNumberCustomList(OvhTypeTelephonyNumberCustomList $_ovhTypeTelephonyNumberCustomList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyNumberCustomListResponse(self::getSoapClient()->telephonyNumberCustomList($_ovhTypeTelephonyNumberCustomList->getSession(),$_ovhTypeTelephonyNumberCustomList->getCountry(),$_ovhTypeTelephonyNumberCustomList->getPrefix())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPlugAndPhoneSkinModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPlugAndPhoneSkinModify::getSession()
	 * @uses OvhTypeTelephonyPlugAndPhoneSkinModify::getNumber()
	 * @uses OvhTypeTelephonyPlugAndPhoneSkinModify::getCountry()
	 * @uses OvhTypeTelephonyPlugAndPhoneSkinModify::getSkin()
	 * @param OvhTypeTelephonyPlugAndPhoneSkinModify TelephonyPlugAndPhoneSkinModify
	 * @return OvhTypeTelephonyPlugAndPhoneSkinModifyResponse
	 */
	public function telephonyPlugAndPhoneSkinModify(OvhTypeTelephonyPlugAndPhoneSkinModify $_ovhTypeTelephonyPlugAndPhoneSkinModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPlugAndPhoneSkinModifyResponse(self::getSoapClient()->telephonyPlugAndPhoneSkinModify($_ovhTypeTelephonyPlugAndPhoneSkinModify->getSession(),$_ovhTypeTelephonyPlugAndPhoneSkinModify->getNumber(),$_ovhTypeTelephonyPlugAndPhoneSkinModify->getCountry(),$_ovhTypeTelephonyPlugAndPhoneSkinModify->getSkin())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFaxOptionsModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFaxOptionsModify::getSession()
	 * @uses OvhTypeTelephonyFaxOptionsModify::getNumber()
	 * @uses OvhTypeTelephonyFaxOptionsModify::getCountry()
	 * @uses OvhTypeTelephonyFaxOptionsModify::getFromName()
	 * @uses OvhTypeTelephonyFaxOptionsModify::getFromEmail()
	 * @uses OvhTypeTelephonyFaxOptionsModify::getFaxQuality()
	 * @uses OvhTypeTelephonyFaxOptionsModify::getFaxTagLine()
	 * @uses OvhTypeTelephonyFaxOptionsModify::getFaxMaxCall()
	 * @uses OvhTypeTelephonyFaxOptionsModify::getReceivId()
	 * @uses OvhTypeTelephonyFaxOptionsModify::getSenderId()
	 * @uses OvhTypeTelephonyFaxOptionsModify::getRedirection1Email()
	 * @uses OvhTypeTelephonyFaxOptionsModify::getRedirection2Email()
	 * @uses OvhTypeTelephonyFaxOptionsModify::getRedirection3Email()
	 * @uses OvhTypeTelephonyFaxOptionsModify::getRedirection4Email()
	 * @uses OvhTypeTelephonyFaxOptionsModify::getRedirection5Email()
	 * @param OvhTypeTelephonyFaxOptionsModify TelephonyFaxOptionsModify
	 * @return OvhTypeTelephonyFaxOptionsModifyResponse
	 */
	public function telephonyFaxOptionsModify(OvhTypeTelephonyFaxOptionsModify $_ovhTypeTelephonyFaxOptionsModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFaxOptionsModifyResponse(self::getSoapClient()->telephonyFaxOptionsModify($_ovhTypeTelephonyFaxOptionsModify->getSession(),$_ovhTypeTelephonyFaxOptionsModify->getNumber(),$_ovhTypeTelephonyFaxOptionsModify->getCountry(),$_ovhTypeTelephonyFaxOptionsModify->getFromName(),$_ovhTypeTelephonyFaxOptionsModify->getFromEmail(),$_ovhTypeTelephonyFaxOptionsModify->getFaxQuality(),$_ovhTypeTelephonyFaxOptionsModify->getFaxTagLine(),$_ovhTypeTelephonyFaxOptionsModify->getFaxMaxCall(),$_ovhTypeTelephonyFaxOptionsModify->getReceivId(),$_ovhTypeTelephonyFaxOptionsModify->getSenderId(),$_ovhTypeTelephonyFaxOptionsModify->getRedirection1Email(),$_ovhTypeTelephonyFaxOptionsModify->getRedirection2Email(),$_ovhTypeTelephonyFaxOptionsModify->getRedirection3Email(),$_ovhTypeTelephonyFaxOptionsModify->getRedirection4Email(),$_ovhTypeTelephonyFaxOptionsModify->getRedirection5Email())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyBillingAccountSummary
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyBillingAccountSummary::getSession()
	 * @uses OvhTypeTelephonyBillingAccountSummary::getBillingAccount()
	 * @param OvhTypeTelephonyBillingAccountSummary TelephonyBillingAccountSummary
	 * @return OvhTypeTelephonyBillingAccountSummaryResponse
	 */
	public function telephonyBillingAccountSummary(OvhTypeTelephonyBillingAccountSummary $_ovhTypeTelephonyBillingAccountSummary)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyBillingAccountSummaryResponse(self::getSoapClient()->telephonyBillingAccountSummary($_ovhTypeTelephonyBillingAccountSummary->getSession(),$_ovhTypeTelephonyBillingAccountSummary->getBillingAccount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyClick2CallUserDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyClick2CallUserDel::getSession()
	 * @uses OvhTypeTelephonyClick2CallUserDel::getNumber()
	 * @uses OvhTypeTelephonyClick2CallUserDel::getCountry()
	 * @uses OvhTypeTelephonyClick2CallUserDel::getLogin()
	 * @param OvhTypeTelephonyClick2CallUserDel TelephonyClick2CallUserDel
	 * @return OvhTypeTelephonyClick2CallUserDelResponse
	 */
	public function telephonyClick2CallUserDel(OvhTypeTelephonyClick2CallUserDel $_ovhTypeTelephonyClick2CallUserDel)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyClick2CallUserDelResponse(self::getSoapClient()->telephonyClick2CallUserDel($_ovhTypeTelephonyClick2CallUserDel->getSession(),$_ovhTypeTelephonyClick2CallUserDel->getNumber(),$_ovhTypeTelephonyClick2CallUserDel->getCountry(),$_ovhTypeTelephonyClick2CallUserDel->getLogin())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsAccountList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsAccountList::getSession()
	 * @param OvhTypeTelephonySmsAccountList TelephonySmsAccountList
	 * @return OvhTypeTelephonySmsAccountListResponse
	 */
	public function telephonySmsAccountList(OvhTypeTelephonySmsAccountList $_ovhTypeTelephonySmsAccountList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsAccountListResponse(self::getSoapClient()->telephonySmsAccountList($_ovhTypeTelephonySmsAccountList->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyBillingAccountConsumptionCSVByMail
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyBillingAccountConsumptionCSVByMail::getBillingAccount()
	 * @uses OvhTypeTelephonyBillingAccountConsumptionCSVByMail::getDate()
	 * @param OvhTypeTelephonyBillingAccountConsumptionCSVByMail TelephonyBillingAccountConsumptionCSVByMail
	 * @return OvhTypeTelephonyBillingAccountConsumptionCSVByMailResponse
	 */
	public function telephonyBillingAccountConsumptionCSVByMail(OvhTypeTelephonyBillingAccountConsumptionCSVByMail $_ovhTypeTelephonyBillingAccountConsumptionCSVByMail)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyBillingAccountConsumptionCSVByMailResponse(self::getSoapClient()->telephonyBillingAccountConsumptionCSVByMail($_ovhTypeTelephonyBillingAccountConsumptionCSVByMail->getBillingAccount(),$_ovhTypeTelephonyBillingAccountConsumptionCSVByMail->getDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFMHuntingModificationVoicemail
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFMHuntingModificationVoicemail::getSession()
	 * @uses OvhTypeTelephonyFMHuntingModificationVoicemail::getNumber()
	 * @uses OvhTypeTelephonyFMHuntingModificationVoicemail::getCountry()
	 * @uses OvhTypeTelephonyFMHuntingModificationVoicemail::getBillingAccount()
	 * @uses OvhTypeTelephonyFMHuntingModificationVoicemail::getNoReplyTimer()
	 * @uses OvhTypeTelephonyFMHuntingModificationVoicemail::getMainVoicemail()
	 * @param OvhTypeTelephonyFMHuntingModificationVoicemail TelephonyFMHuntingModificationVoicemail
	 * @return OvhTypeTelephonyFMHuntingModificationVoicemailResponse
	 */
	public function telephonyFMHuntingModificationVoicemail(OvhTypeTelephonyFMHuntingModificationVoicemail $_ovhTypeTelephonyFMHuntingModificationVoicemail)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFMHuntingModificationVoicemailResponse(self::getSoapClient()->telephonyFMHuntingModificationVoicemail($_ovhTypeTelephonyFMHuntingModificationVoicemail->getSession(),$_ovhTypeTelephonyFMHuntingModificationVoicemail->getNumber(),$_ovhTypeTelephonyFMHuntingModificationVoicemail->getCountry(),$_ovhTypeTelephonyFMHuntingModificationVoicemail->getBillingAccount(),$_ovhTypeTelephonyFMHuntingModificationVoicemail->getNoReplyTimer(),$_ovhTypeTelephonyFMHuntingModificationVoicemail->getMainVoicemail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyOrdersFollowingUp
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyOrdersFollowingUp::getSession()
	 * @param OvhTypeTelephonyOrdersFollowingUp TelephonyOrdersFollowingUp
	 * @return OvhTypeTelephonyOrdersFollowingUpResponse
	 */
	public function telephonyOrdersFollowingUp(OvhTypeTelephonyOrdersFollowingUp $_ovhTypeTelephonyOrdersFollowingUp)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyOrdersFollowingUpResponse(self::getSoapClient()->telephonyOrdersFollowingUp($_ovhTypeTelephonyOrdersFollowingUp->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookOnGroupContactAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactAdd::getSession()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactAdd::getGroup()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactAdd::getId()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactAdd::getName()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactAdd::getSurname()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactAdd::getWorkPhone()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactAdd::getWorkMobile()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactAdd::getHomePhone()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactAdd::getHomeMobile()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactAdd::getGroupName()
	 * @param OvhTypeTelephonyPhonebookOnGroupContactAdd TelephonyPhonebookOnGroupContactAdd
	 * @return OvhTypeTelephonyPhonebookOnGroupContactAddResponse
	 */
	public function telephonyPhonebookOnGroupContactAdd(OvhTypeTelephonyPhonebookOnGroupContactAdd $_ovhTypeTelephonyPhonebookOnGroupContactAdd)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookOnGroupContactAddResponse(self::getSoapClient()->telephonyPhonebookOnGroupContactAdd($_ovhTypeTelephonyPhonebookOnGroupContactAdd->getSession(),$_ovhTypeTelephonyPhonebookOnGroupContactAdd->getGroup(),$_ovhTypeTelephonyPhonebookOnGroupContactAdd->getId(),$_ovhTypeTelephonyPhonebookOnGroupContactAdd->getName(),$_ovhTypeTelephonyPhonebookOnGroupContactAdd->getSurname(),$_ovhTypeTelephonyPhonebookOnGroupContactAdd->getWorkPhone(),$_ovhTypeTelephonyPhonebookOnGroupContactAdd->getWorkMobile(),$_ovhTypeTelephonyPhonebookOnGroupContactAdd->getHomePhone(),$_ovhTypeTelephonyPhonebookOnGroupContactAdd->getHomeMobile(),$_ovhTypeTelephonyPhonebookOnGroupContactAdd->getGroupName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyBillDetailsCSV
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyBillDetailsCSV::getSession()
	 * @uses OvhTypeTelephonyBillDetailsCSV::getBillingAccount()
	 * @uses OvhTypeTelephonyBillDetailsCSV::getDate()
	 * @param OvhTypeTelephonyBillDetailsCSV TelephonyBillDetailsCSV
	 * @return OvhTypeTelephonyBillDetailsCSVResponse
	 */
	public function telephonyBillDetailsCSV(OvhTypeTelephonyBillDetailsCSV $_ovhTypeTelephonyBillDetailsCSV)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyBillDetailsCSVResponse(self::getSoapClient()->telephonyBillDetailsCSV($_ovhTypeTelephonyBillDetailsCSV->getSession(),$_ovhTypeTelephonyBillDetailsCSV->getBillingAccount(),$_ovhTypeTelephonyBillDetailsCSV->getDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsCreditLeft
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsCreditLeft::getSession()
	 * @uses OvhTypeTelephonySmsCreditLeft::getSmsAccount()
	 * @param OvhTypeTelephonySmsCreditLeft TelephonySmsCreditLeft
	 * @return OvhTypeTelephonySmsCreditLeftResponse
	 */
	public function telephonySmsCreditLeft(OvhTypeTelephonySmsCreditLeft $_ovhTypeTelephonySmsCreditLeft)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsCreditLeftResponse(self::getSoapClient()->telephonySmsCreditLeft($_ovhTypeTelephonySmsCreditLeft->getSession(),$_ovhTypeTelephonySmsCreditLeft->getSmsAccount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyDirectoryPJCode
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyDirectoryPJCode::getSession()
	 * @uses OvhTypeTelephonyDirectoryPJCode::getApe()
	 * @uses OvhTypeTelephonyDirectoryPJCode::getPJCode()
	 * @param OvhTypeTelephonyDirectoryPJCode TelephonyDirectoryPJCode
	 * @return OvhTypeTelephonyDirectoryPJCodeResponse
	 */
	public function telephonyDirectoryPJCode(OvhTypeTelephonyDirectoryPJCode $_ovhTypeTelephonyDirectoryPJCode)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyDirectoryPJCodeResponse(self::getSoapClient()->telephonyDirectoryPJCode($_ovhTypeTelephonyDirectoryPJCode->getSession(),$_ovhTypeTelephonyDirectoryPJCode->getApe(),$_ovhTypeTelephonyDirectoryPJCode->getPJCode())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyListSummationCallsFromBillingAccount
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyListSummationCallsFromBillingAccount::getSession()
	 * @uses OvhTypeTelephonyListSummationCallsFromBillingAccount::getBillingAccount()
	 * @uses OvhTypeTelephonyListSummationCallsFromBillingAccount::getReversableDelay()
	 * @param OvhTypeTelephonyListSummationCallsFromBillingAccount TelephonyListSummationCallsFromBillingAccount
	 * @return OvhTypeTelephonyListSummationCallsFromBillingAccountResponse
	 */
	public function telephonyListSummationCallsFromBillingAccount(OvhTypeTelephonyListSummationCallsFromBillingAccount $_ovhTypeTelephonyListSummationCallsFromBillingAccount)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyListSummationCallsFromBillingAccountResponse(self::getSoapClient()->telephonyListSummationCallsFromBillingAccount($_ovhTypeTelephonyListSummationCallsFromBillingAccount->getSession(),$_ovhTypeTelephonyListSummationCallsFromBillingAccount->getBillingAccount(),$_ovhTypeTelephonyListSummationCallsFromBillingAccount->getReversableDelay())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyBillingAccountDescriptionModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyBillingAccountDescriptionModify::getSession()
	 * @uses OvhTypeTelephonyBillingAccountDescriptionModify::getBillingAccount()
	 * @uses OvhTypeTelephonyBillingAccountDescriptionModify::getDescription()
	 * @param OvhTypeTelephonyBillingAccountDescriptionModify TelephonyBillingAccountDescriptionModify
	 * @return OvhTypeTelephonyBillingAccountDescriptionModifyResponse
	 */
	public function telephonyBillingAccountDescriptionModify(OvhTypeTelephonyBillingAccountDescriptionModify $_ovhTypeTelephonyBillingAccountDescriptionModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyBillingAccountDescriptionModifyResponse(self::getSoapClient()->telephonyBillingAccountDescriptionModify($_ovhTypeTelephonyBillingAccountDescriptionModify->getSession(),$_ovhTypeTelephonyBillingAccountDescriptionModify->getBillingAccount(),$_ovhTypeTelephonyBillingAccountDescriptionModify->getDescription())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyConferenceMailReportModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyConferenceMailReportModify::getSession()
	 * @uses OvhTypeTelephonyConferenceMailReportModify::getNumber()
	 * @uses OvhTypeTelephonyConferenceMailReportModify::getCountry()
	 * @uses OvhTypeTelephonyConferenceMailReportModify::getRoom()
	 * @uses OvhTypeTelephonyConferenceMailReportModify::getEnable()
	 * @uses OvhTypeTelephonyConferenceMailReportModify::getEmail()
	 * @param OvhTypeTelephonyConferenceMailReportModify TelephonyConferenceMailReportModify
	 * @return OvhTypeTelephonyConferenceMailReportModifyResponse
	 */
	public function telephonyConferenceMailReportModify(OvhTypeTelephonyConferenceMailReportModify $_ovhTypeTelephonyConferenceMailReportModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyConferenceMailReportModifyResponse(self::getSoapClient()->telephonyConferenceMailReportModify($_ovhTypeTelephonyConferenceMailReportModify->getSession(),$_ovhTypeTelephonyConferenceMailReportModify->getNumber(),$_ovhTypeTelephonyConferenceMailReportModify->getCountry(),$_ovhTypeTelephonyConferenceMailReportModify->getRoom(),$_ovhTypeTelephonyConferenceMailReportModify->getEnable(),$_ovhTypeTelephonyConferenceMailReportModify->getEmail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyAbbreviatedNumberDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyAbbreviatedNumberDel::getSession()
	 * @uses OvhTypeTelephonyAbbreviatedNumberDel::getNumber()
	 * @uses OvhTypeTelephonyAbbreviatedNumberDel::getCountry()
	 * @uses OvhTypeTelephonyAbbreviatedNumberDel::getAbbreviatedNumber()
	 * @param OvhTypeTelephonyAbbreviatedNumberDel TelephonyAbbreviatedNumberDel
	 * @return OvhTypeTelephonyAbbreviatedNumberDelResponse
	 */
	public function telephonyAbbreviatedNumberDel(OvhTypeTelephonyAbbreviatedNumberDel $_ovhTypeTelephonyAbbreviatedNumberDel)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyAbbreviatedNumberDelResponse(self::getSoapClient()->telephonyAbbreviatedNumberDel($_ovhTypeTelephonyAbbreviatedNumberDel->getSession(),$_ovhTypeTelephonyAbbreviatedNumberDel->getNumber(),$_ovhTypeTelephonyAbbreviatedNumberDel->getCountry(),$_ovhTypeTelephonyAbbreviatedNumberDel->getAbbreviatedNumber())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFaxOptionsList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFaxOptionsList::getSession()
	 * @uses OvhTypeTelephonyFaxOptionsList::getNumber()
	 * @uses OvhTypeTelephonyFaxOptionsList::getCountry()
	 * @param OvhTypeTelephonyFaxOptionsList TelephonyFaxOptionsList
	 * @return OvhTypeTelephonyFaxOptionsListResponse
	 */
	public function telephonyFaxOptionsList(OvhTypeTelephonyFaxOptionsList $_ovhTypeTelephonyFaxOptionsList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFaxOptionsListResponse(self::getSoapClient()->telephonyFaxOptionsList($_ovhTypeTelephonyFaxOptionsList->getSession(),$_ovhTypeTelephonyFaxOptionsList->getNumber(),$_ovhTypeTelephonyFaxOptionsList->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyVxmlDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyVxmlDel::getSession()
	 * @uses OvhTypeTelephonyVxmlDel::getNumber()
	 * @uses OvhTypeTelephonyVxmlDel::getCountry()
	 * @param OvhTypeTelephonyVxmlDel TelephonyVxmlDel
	 * @return OvhTypeTelephonyVxmlDelResponse
	 */
	public function telephonyVxmlDel(OvhTypeTelephonyVxmlDel $_ovhTypeTelephonyVxmlDel)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyVxmlDelResponse(self::getSoapClient()->telephonyVxmlDel($_ovhTypeTelephonyVxmlDel->getSession(),$_ovhTypeTelephonyVxmlDel->getNumber(),$_ovhTypeTelephonyVxmlDel->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyBillingAccountSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyBillingAccountSet::getSession()
	 * @uses OvhTypeTelephonyBillingAccountSet::getBillingAccount()
	 * @uses OvhTypeTelephonyBillingAccountSet::getNumbers()
	 * @param OvhTypeTelephonyBillingAccountSet TelephonyBillingAccountSet
	 * @return OvhTypeTelephonyBillingAccountSetResponse
	 */
	public function telephonyBillingAccountSet(OvhTypeTelephonyBillingAccountSet $_ovhTypeTelephonyBillingAccountSet)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyBillingAccountSetResponse(self::getSoapClient()->telephonyBillingAccountSet($_ovhTypeTelephonyBillingAccountSet->getSession(),$_ovhTypeTelephonyBillingAccountSet->getBillingAccount(),$_ovhTypeTelephonyBillingAccountSet->getNumbers())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyDepositMovementModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyDepositMovementModify::getSession()
	 * @uses OvhTypeTelephonyDepositMovementModify::getBillingAccountSource()
	 * @uses OvhTypeTelephonyDepositMovementModify::getBillingAccountDestination()
	 * @uses OvhTypeTelephonyDepositMovementModify::getAmount()
	 * @param OvhTypeTelephonyDepositMovementModify TelephonyDepositMovementModify
	 * @return OvhTypeTelephonyDepositMovementModifyResponse
	 */
	public function telephonyDepositMovementModify(OvhTypeTelephonyDepositMovementModify $_ovhTypeTelephonyDepositMovementModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyDepositMovementModifyResponse(self::getSoapClient()->telephonyDepositMovementModify($_ovhTypeTelephonyDepositMovementModify->getSession(),$_ovhTypeTelephonyDepositMovementModify->getBillingAccountSource(),$_ovhTypeTelephonyDepositMovementModify->getBillingAccountDestination(),$_ovhTypeTelephonyDepositMovementModify->getAmount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyClick2CallDo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyClick2CallDo::getLogin()
	 * @uses OvhTypeTelephonyClick2CallDo::getPassword()
	 * @uses OvhTypeTelephonyClick2CallDo::getCalling()
	 * @uses OvhTypeTelephonyClick2CallDo::getCalled()
	 * @uses OvhTypeTelephonyClick2CallDo::getBillingNumber()
	 * @param OvhTypeTelephonyClick2CallDo TelephonyClick2CallDo
	 * @return OvhTypeTelephonyClick2CallDoResponse
	 */
	public function telephonyClick2CallDo(OvhTypeTelephonyClick2CallDo $_ovhTypeTelephonyClick2CallDo)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyClick2CallDoResponse(self::getSoapClient()->telephonyClick2CallDo($_ovhTypeTelephonyClick2CallDo->getLogin(),$_ovhTypeTelephonyClick2CallDo->getPassword(),$_ovhTypeTelephonyClick2CallDo->getCalling(),$_ovhTypeTelephonyClick2CallDo->getCalled(),$_ovhTypeTelephonyClick2CallDo->getBillingNumber())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyVxmlInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyVxmlInfo::getSession()
	 * @uses OvhTypeTelephonyVxmlInfo::getNumber()
	 * @uses OvhTypeTelephonyVxmlInfo::getCountry()
	 * @param OvhTypeTelephonyVxmlInfo TelephonyVxmlInfo
	 * @return OvhTypeTelephonyVxmlInfoResponse
	 */
	public function telephonyVxmlInfo(OvhTypeTelephonyVxmlInfo $_ovhTypeTelephonyVxmlInfo)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyVxmlInfoResponse(self::getSoapClient()->telephonyVxmlInfo($_ovhTypeTelephonyVxmlInfo->getSession(),$_ovhTypeTelephonyVxmlInfo->getNumber(),$_ovhTypeTelephonyVxmlInfo->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySpecialNumberOrder
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySpecialNumberOrder::getSession()
	 * @uses OvhTypeTelephonySpecialNumberOrder::getBillingAccount()
	 * @uses OvhTypeTelephonySpecialNumberOrder::getCountry()
	 * @uses OvhTypeTelephonySpecialNumberOrder::getAliasNumber()
	 * @uses OvhTypeTelephonySpecialNumberOrder::getPrefix()
	 * @uses OvhTypeTelephonySpecialNumberOrder::getCategory()
	 * @uses OvhTypeTelephonySpecialNumberOrder::getNumberToReserve()
	 * @param OvhTypeTelephonySpecialNumberOrder TelephonySpecialNumberOrder
	 * @return OvhTypeTelephonySpecialNumberOrderResponse
	 */
	public function telephonySpecialNumberOrder(OvhTypeTelephonySpecialNumberOrder $_ovhTypeTelephonySpecialNumberOrder)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySpecialNumberOrderResponse(self::getSoapClient()->telephonySpecialNumberOrder($_ovhTypeTelephonySpecialNumberOrder->getSession(),$_ovhTypeTelephonySpecialNumberOrder->getBillingAccount(),$_ovhTypeTelephonySpecialNumberOrder->getCountry(),$_ovhTypeTelephonySpecialNumberOrder->getAliasNumber(),$_ovhTypeTelephonySpecialNumberOrder->getPrefix(),$_ovhTypeTelephonySpecialNumberOrder->getCategory(),$_ovhTypeTelephonySpecialNumberOrder->getNumberToReserve())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyVoicemailOptionsModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getSession()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getNumber()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getCountry()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getRedirection1()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getRedirection1Email()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getRedirection2()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getRedirection2Email()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getRedirection3()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getRedirection3Email()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getRedirection4()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getRedirection4Email()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getRedirection5()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getRedirection5Email()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getAnnouceMessage()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getKeepMessage()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getAudioformat()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getFromEmail()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getFromName()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getDoNotRecord()
	 * @uses OvhTypeTelephonyVoicemailOptionsModify::getForcePassword()
	 * @param OvhTypeTelephonyVoicemailOptionsModify TelephonyVoicemailOptionsModify
	 * @return OvhTypeTelephonyVoicemailOptionsModifyResponse
	 */
	public function telephonyVoicemailOptionsModify(OvhTypeTelephonyVoicemailOptionsModify $_ovhTypeTelephonyVoicemailOptionsModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyVoicemailOptionsModifyResponse(self::getSoapClient()->telephonyVoicemailOptionsModify($_ovhTypeTelephonyVoicemailOptionsModify->getSession(),$_ovhTypeTelephonyVoicemailOptionsModify->getNumber(),$_ovhTypeTelephonyVoicemailOptionsModify->getCountry(),$_ovhTypeTelephonyVoicemailOptionsModify->getRedirection1(),$_ovhTypeTelephonyVoicemailOptionsModify->getRedirection1Email(),$_ovhTypeTelephonyVoicemailOptionsModify->getRedirection2(),$_ovhTypeTelephonyVoicemailOptionsModify->getRedirection2Email(),$_ovhTypeTelephonyVoicemailOptionsModify->getRedirection3(),$_ovhTypeTelephonyVoicemailOptionsModify->getRedirection3Email(),$_ovhTypeTelephonyVoicemailOptionsModify->getRedirection4(),$_ovhTypeTelephonyVoicemailOptionsModify->getRedirection4Email(),$_ovhTypeTelephonyVoicemailOptionsModify->getRedirection5(),$_ovhTypeTelephonyVoicemailOptionsModify->getRedirection5Email(),$_ovhTypeTelephonyVoicemailOptionsModify->getAnnouceMessage(),$_ovhTypeTelephonyVoicemailOptionsModify->getKeepMessage(),$_ovhTypeTelephonyVoicemailOptionsModify->getAudioformat(),$_ovhTypeTelephonyVoicemailOptionsModify->getFromEmail(),$_ovhTypeTelephonyVoicemailOptionsModify->getFromName(),$_ovhTypeTelephonyVoicemailOptionsModify->getDoNotRecord(),$_ovhTypeTelephonyVoicemailOptionsModify->getForcePassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineSwitchOldOffer
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineSwitchOldOffer::getSession()
	 * @uses OvhTypeTelephonyLineSwitchOldOffer::getNumbers()
	 * @uses OvhTypeTelephonyLineSwitchOldOffer::getOffers()
	 * @uses OvhTypeTelephonyLineSwitchOldOffer::getBillingAccount()
	 * @param OvhTypeTelephonyLineSwitchOldOffer TelephonyLineSwitchOldOffer
	 * @return OvhTypeTelephonyLineSwitchOldOfferResponse
	 */
	public function telephonyLineSwitchOldOffer(OvhTypeTelephonyLineSwitchOldOffer $_ovhTypeTelephonyLineSwitchOldOffer)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineSwitchOldOfferResponse(self::getSoapClient()->telephonyLineSwitchOldOffer($_ovhTypeTelephonyLineSwitchOldOffer->getSession(),$_ovhTypeTelephonyLineSwitchOldOffer->getNumbers(),$_ovhTypeTelephonyLineSwitchOldOffer->getOffers(),$_ovhTypeTelephonyLineSwitchOldOffer->getBillingAccount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookOnGroupContactDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactDel::getSession()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactDel::getGroup()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactDel::getId()
	 * @param OvhTypeTelephonyPhonebookOnGroupContactDel TelephonyPhonebookOnGroupContactDel
	 * @return OvhTypeTelephonyPhonebookOnGroupContactDelResponse
	 */
	public function telephonyPhonebookOnGroupContactDel(OvhTypeTelephonyPhonebookOnGroupContactDel $_ovhTypeTelephonyPhonebookOnGroupContactDel)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookOnGroupContactDelResponse(self::getSoapClient()->telephonyPhonebookOnGroupContactDel($_ovhTypeTelephonyPhonebookOnGroupContactDel->getSession(),$_ovhTypeTelephonyPhonebookOnGroupContactDel->getGroup(),$_ovhTypeTelephonyPhonebookOnGroupContactDel->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsAddCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsAddCsvAttachment::getSmsAccount()
	 * @uses OvhTypeTelephonySmsAddCsvAttachment::getCsvUrl()
	 * @uses OvhTypeTelephonySmsAddCsvAttachment::getId()
	 * @uses OvhTypeTelephonySmsAddCsvAttachment::getName()
	 * @param OvhTypeTelephonySmsAddCsvAttachment TelephonySmsAddCsvAttachment
	 * @return OvhTypeTelephonySmsAddCsvAttachmentResponse
	 */
	public function telephonySmsAddCsvAttachment(OvhTypeTelephonySmsAddCsvAttachment $_ovhTypeTelephonySmsAddCsvAttachment)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsAddCsvAttachmentResponse(self::getSoapClient()->telephonySmsAddCsvAttachment($_ovhTypeTelephonySmsAddCsvAttachment->getSmsAccount(),$_ovhTypeTelephonySmsAddCsvAttachment->getCsvUrl(),$_ovhTypeTelephonySmsAddCsvAttachment->getId(),$_ovhTypeTelephonySmsAddCsvAttachment->getName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyConferenceModeratorCallNumberModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyConferenceModeratorCallNumberModify::getSession()
	 * @uses OvhTypeTelephonyConferenceModeratorCallNumberModify::getNumber()
	 * @uses OvhTypeTelephonyConferenceModeratorCallNumberModify::getCountry()
	 * @uses OvhTypeTelephonyConferenceModeratorCallNumberModify::getRoom()
	 * @uses OvhTypeTelephonyConferenceModeratorCallNumberModify::getModeratorCallNumber()
	 * @uses OvhTypeTelephonyConferenceModeratorCallNumberModify::getModeratorCountryCode()
	 * @param OvhTypeTelephonyConferenceModeratorCallNumberModify TelephonyConferenceModeratorCallNumberModify
	 * @return OvhTypeTelephonyConferenceModeratorCallNumberModifyResponse
	 */
	public function telephonyConferenceModeratorCallNumberModify(OvhTypeTelephonyConferenceModeratorCallNumberModify $_ovhTypeTelephonyConferenceModeratorCallNumberModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyConferenceModeratorCallNumberModifyResponse(self::getSoapClient()->telephonyConferenceModeratorCallNumberModify($_ovhTypeTelephonyConferenceModeratorCallNumberModify->getSession(),$_ovhTypeTelephonyConferenceModeratorCallNumberModify->getNumber(),$_ovhTypeTelephonyConferenceModeratorCallNumberModify->getCountry(),$_ovhTypeTelephonyConferenceModeratorCallNumberModify->getRoom(),$_ovhTypeTelephonyConferenceModeratorCallNumberModify->getModeratorCallNumber(),$_ovhTypeTelephonyConferenceModeratorCallNumberModify->getModeratorCountryCode())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyOfferSimultaneousLinesAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyOfferSimultaneousLinesAdd::getSession()
	 * @uses OvhTypeTelephonyOfferSimultaneousLinesAdd::getNumber()
	 * @uses OvhTypeTelephonyOfferSimultaneousLinesAdd::getCountry()
	 * @uses OvhTypeTelephonyOfferSimultaneousLinesAdd::getSimultaneousLines()
	 * @param OvhTypeTelephonyOfferSimultaneousLinesAdd TelephonyOfferSimultaneousLinesAdd
	 * @return OvhTypeTelephonyOfferSimultaneousLinesAddResponse
	 */
	public function telephonyOfferSimultaneousLinesAdd(OvhTypeTelephonyOfferSimultaneousLinesAdd $_ovhTypeTelephonyOfferSimultaneousLinesAdd)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyOfferSimultaneousLinesAddResponse(self::getSoapClient()->telephonyOfferSimultaneousLinesAdd($_ovhTypeTelephonyOfferSimultaneousLinesAdd->getSession(),$_ovhTypeTelephonyOfferSimultaneousLinesAdd->getNumber(),$_ovhTypeTelephonyOfferSimultaneousLinesAdd->getCountry(),$_ovhTypeTelephonyOfferSimultaneousLinesAdd->getSimultaneousLines())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyToneRemoteUpload
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyToneRemoteUpload::getSession()
	 * @uses OvhTypeTelephonyToneRemoteUpload::getNumber()
	 * @uses OvhTypeTelephonyToneRemoteUpload::getCountry()
	 * @uses OvhTypeTelephonyToneRemoteUpload::getToneType()
	 * @uses OvhTypeTelephonyToneRemoteUpload::getFilename()
	 * @uses OvhTypeTelephonyToneRemoteUpload::getUrl()
	 * @param OvhTypeTelephonyToneRemoteUpload TelephonyToneRemoteUpload
	 * @return OvhTypeTelephonyToneRemoteUploadResponse
	 */
	public function telephonyToneRemoteUpload(OvhTypeTelephonyToneRemoteUpload $_ovhTypeTelephonyToneRemoteUpload)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyToneRemoteUploadResponse(self::getSoapClient()->telephonyToneRemoteUpload($_ovhTypeTelephonyToneRemoteUpload->getSession(),$_ovhTypeTelephonyToneRemoteUpload->getNumber(),$_ovhTypeTelephonyToneRemoteUpload->getCountry(),$_ovhTypeTelephonyToneRemoteUpload->getToneType(),$_ovhTypeTelephonyToneRemoteUpload->getFilename(),$_ovhTypeTelephonyToneRemoteUpload->getUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFMHuntingModificationMode
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFMHuntingModificationMode::getSession()
	 * @uses OvhTypeTelephonyFMHuntingModificationMode::getNumber()
	 * @uses OvhTypeTelephonyFMHuntingModificationMode::getCountry()
	 * @uses OvhTypeTelephonyFMHuntingModificationMode::getBillingAccount()
	 * @uses OvhTypeTelephonyFMHuntingModificationMode::getStrategy()
	 * @uses OvhTypeTelephonyFMHuntingModificationMode::getPattern()
	 * @param OvhTypeTelephonyFMHuntingModificationMode TelephonyFMHuntingModificationMode
	 * @return OvhTypeTelephonyFMHuntingModificationModeResponse
	 */
	public function telephonyFMHuntingModificationMode(OvhTypeTelephonyFMHuntingModificationMode $_ovhTypeTelephonyFMHuntingModificationMode)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFMHuntingModificationModeResponse(self::getSoapClient()->telephonyFMHuntingModificationMode($_ovhTypeTelephonyFMHuntingModificationMode->getSession(),$_ovhTypeTelephonyFMHuntingModificationMode->getNumber(),$_ovhTypeTelephonyFMHuntingModificationMode->getCountry(),$_ovhTypeTelephonyFMHuntingModificationMode->getBillingAccount(),$_ovhTypeTelephonyFMHuntingModificationMode->getStrategy(),$_ovhTypeTelephonyFMHuntingModificationMode->getPattern())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyAliasToSipOffer
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyAliasToSipOffer::getSession()
	 * @uses OvhTypeTelephonyAliasToSipOffer::getNumber()
	 * @uses OvhTypeTelephonyAliasToSipOffer::getCountry()
	 * @uses OvhTypeTelephonyAliasToSipOffer::getOffer()
	 * @uses OvhTypeTelephonyAliasToSipOffer::getDelete()
	 * @param OvhTypeTelephonyAliasToSipOffer TelephonyAliasToSipOffer
	 * @return OvhTypeTelephonyAliasToSipOfferResponse
	 */
	public function telephonyAliasToSipOffer(OvhTypeTelephonyAliasToSipOffer $_ovhTypeTelephonyAliasToSipOffer)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyAliasToSipOfferResponse(self::getSoapClient()->telephonyAliasToSipOffer($_ovhTypeTelephonyAliasToSipOffer->getSession(),$_ovhTypeTelephonyAliasToSipOffer->getNumber(),$_ovhTypeTelephonyAliasToSipOffer->getCountry(),$_ovhTypeTelephonyAliasToSipOffer->getOffer(),$_ovhTypeTelephonyAliasToSipOffer->getDelete())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyConferenceList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyConferenceList::getSession()
	 * @uses OvhTypeTelephonyConferenceList::getNumber()
	 * @uses OvhTypeTelephonyConferenceList::getCountry()
	 * @param OvhTypeTelephonyConferenceList TelephonyConferenceList
	 * @return OvhTypeTelephonyConferenceListResponse
	 */
	public function telephonyConferenceList(OvhTypeTelephonyConferenceList $_ovhTypeTelephonyConferenceList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyConferenceListResponse(self::getSoapClient()->telephonyConferenceList($_ovhTypeTelephonyConferenceList->getSession(),$_ovhTypeTelephonyConferenceList->getNumber(),$_ovhTypeTelephonyConferenceList->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsUserMultiSend
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsUserMultiSend::getLogin()
	 * @uses OvhTypeTelephonySmsUserMultiSend::getPassword()
	 * @uses OvhTypeTelephonySmsUserMultiSend::getSmsAccount()
	 * @uses OvhTypeTelephonySmsUserMultiSend::getNumberFrom()
	 * @uses OvhTypeTelephonySmsUserMultiSend::getNumberTo()
	 * @uses OvhTypeTelephonySmsUserMultiSend::getMessage()
	 * @uses OvhTypeTelephonySmsUserMultiSend::getSmsValidity()
	 * @uses OvhTypeTelephonySmsUserMultiSend::getSmsClass()
	 * @uses OvhTypeTelephonySmsUserMultiSend::getSmsDeferred()
	 * @uses OvhTypeTelephonySmsUserMultiSend::getSmsPriority()
	 * @uses OvhTypeTelephonySmsUserMultiSend::getSmsCoding()
	 * @uses OvhTypeTelephonySmsUserMultiSend::getTag()
	 * @uses OvhTypeTelephonySmsUserMultiSend::getNumberToCsv()
	 * @param OvhTypeTelephonySmsUserMultiSend TelephonySmsUserMultiSend
	 * @return OvhTypeTelephonySmsUserMultiSendResponse
	 */
	public function telephonySmsUserMultiSend(OvhTypeTelephonySmsUserMultiSend $_ovhTypeTelephonySmsUserMultiSend)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsUserMultiSendResponse(self::getSoapClient()->telephonySmsUserMultiSend($_ovhTypeTelephonySmsUserMultiSend->getLogin(),$_ovhTypeTelephonySmsUserMultiSend->getPassword(),$_ovhTypeTelephonySmsUserMultiSend->getSmsAccount(),$_ovhTypeTelephonySmsUserMultiSend->getNumberFrom(),$_ovhTypeTelephonySmsUserMultiSend->getNumberTo(),$_ovhTypeTelephonySmsUserMultiSend->getMessage(),$_ovhTypeTelephonySmsUserMultiSend->getSmsValidity(),$_ovhTypeTelephonySmsUserMultiSend->getSmsClass(),$_ovhTypeTelephonySmsUserMultiSend->getSmsDeferred(),$_ovhTypeTelephonySmsUserMultiSend->getSmsPriority(),$_ovhTypeTelephonySmsUserMultiSend->getSmsCoding(),$_ovhTypeTelephonySmsUserMultiSend->getTag(),$_ovhTypeTelephonySmsUserMultiSend->getNumberToCsv())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsGetCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsGetCsvAttachment::getSmsAccount()
	 * @uses OvhTypeTelephonySmsGetCsvAttachment::getId()
	 * @param OvhTypeTelephonySmsGetCsvAttachment TelephonySmsGetCsvAttachment
	 * @return OvhTypeTelephonySmsGetCsvAttachmentResponse
	 */
	public function telephonySmsGetCsvAttachment(OvhTypeTelephonySmsGetCsvAttachment $_ovhTypeTelephonySmsGetCsvAttachment)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsGetCsvAttachmentResponse(self::getSoapClient()->telephonySmsGetCsvAttachment($_ovhTypeTelephonySmsGetCsvAttachment->getSmsAccount(),$_ovhTypeTelephonySmsGetCsvAttachment->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsHistory
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsHistory::getSession()
	 * @uses OvhTypeTelephonySmsHistory::getSmsAccount()
	 * @uses OvhTypeTelephonySmsHistory::getSmsId()
	 * @uses OvhTypeTelephonySmsHistory::getUser()
	 * @uses OvhTypeTelephonySmsHistory::getPagingStart()
	 * @uses OvhTypeTelephonySmsHistory::getPagingLimit()
	 * @uses OvhTypeTelephonySmsHistory::getSortField()
	 * @uses OvhTypeTelephonySmsHistory::getSortOrder()
	 * @uses OvhTypeTelephonySmsHistory::getTag()
	 * @param OvhTypeTelephonySmsHistory TelephonySmsHistory
	 * @return OvhTypeTelephonySmsHistoryResponse
	 */
	public function telephonySmsHistory(OvhTypeTelephonySmsHistory $_ovhTypeTelephonySmsHistory)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsHistoryResponse(self::getSoapClient()->telephonySmsHistory($_ovhTypeTelephonySmsHistory->getSession(),$_ovhTypeTelephonySmsHistory->getSmsAccount(),$_ovhTypeTelephonySmsHistory->getSmsId(),$_ovhTypeTelephonySmsHistory->getUser(),$_ovhTypeTelephonySmsHistory->getPagingStart(),$_ovhTypeTelephonySmsHistory->getPagingLimit(),$_ovhTypeTelephonySmsHistory->getSortField(),$_ovhTypeTelephonySmsHistory->getSortOrder(),$_ovhTypeTelephonySmsHistory->getTag())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyAbbreviatedNumberOnGroupModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupModify::getSession()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupModify::getGroup()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupModify::getAbbreviatedNumber()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupModify::getRelatedNumber()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupModify::getName()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupModify::getSurname()
	 * @param OvhTypeTelephonyAbbreviatedNumberOnGroupModify TelephonyAbbreviatedNumberOnGroupModify
	 * @return OvhTypeTelephonyAbbreviatedNumberOnGroupModifyResponse
	 */
	public function telephonyAbbreviatedNumberOnGroupModify(OvhTypeTelephonyAbbreviatedNumberOnGroupModify $_ovhTypeTelephonyAbbreviatedNumberOnGroupModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyAbbreviatedNumberOnGroupModifyResponse(self::getSoapClient()->telephonyAbbreviatedNumberOnGroupModify($_ovhTypeTelephonyAbbreviatedNumberOnGroupModify->getSession(),$_ovhTypeTelephonyAbbreviatedNumberOnGroupModify->getGroup(),$_ovhTypeTelephonyAbbreviatedNumberOnGroupModify->getAbbreviatedNumber(),$_ovhTypeTelephonyAbbreviatedNumberOnGroupModify->getRelatedNumber(),$_ovhTypeTelephonyAbbreviatedNumberOnGroupModify->getName(),$_ovhTypeTelephonyAbbreviatedNumberOnGroupModify->getSurname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyHuntingGenericScreenList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyHuntingGenericScreenList::getSession()
	 * @uses OvhTypeTelephonyHuntingGenericScreenList::getNumber()
	 * @uses OvhTypeTelephonyHuntingGenericScreenList::getCountry()
	 * @param OvhTypeTelephonyHuntingGenericScreenList TelephonyHuntingGenericScreenList
	 * @return OvhTypeTelephonyHuntingGenericScreenListResponse
	 */
	public function telephonyHuntingGenericScreenList(OvhTypeTelephonyHuntingGenericScreenList $_ovhTypeTelephonyHuntingGenericScreenList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyHuntingGenericScreenListResponse(self::getSoapClient()->telephonyHuntingGenericScreenList($_ovhTypeTelephonyHuntingGenericScreenList->getSession(),$_ovhTypeTelephonyHuntingGenericScreenList->getNumber(),$_ovhTypeTelephonyHuntingGenericScreenList->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyHuntingGenericScreenStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyHuntingGenericScreenStatus::getSession()
	 * @uses OvhTypeTelephonyHuntingGenericScreenStatus::getNumber()
	 * @uses OvhTypeTelephonyHuntingGenericScreenStatus::getCountry()
	 * @param OvhTypeTelephonyHuntingGenericScreenStatus TelephonyHuntingGenericScreenStatus
	 * @return OvhTypeTelephonyHuntingGenericScreenStatusResponse
	 */
	public function telephonyHuntingGenericScreenStatus(OvhTypeTelephonyHuntingGenericScreenStatus $_ovhTypeTelephonyHuntingGenericScreenStatus)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyHuntingGenericScreenStatusResponse(self::getSoapClient()->telephonyHuntingGenericScreenStatus($_ovhTypeTelephonyHuntingGenericScreenStatus->getSession(),$_ovhTypeTelephonyHuntingGenericScreenStatus->getNumber(),$_ovhTypeTelephonyHuntingGenericScreenStatus->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyHuntingModificationMembers
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyHuntingModificationMembers::getSession()
	 * @uses OvhTypeTelephonyHuntingModificationMembers::getNumber()
	 * @uses OvhTypeTelephonyHuntingModificationMembers::getCountry()
	 * @uses OvhTypeTelephonyHuntingModificationMembers::getBillingAccount()
	 * @uses OvhTypeTelephonyHuntingModificationMembers::getList_destinations()
	 * @uses OvhTypeTelephonyHuntingModificationMembers::getList_noReplyTimer()
	 * @uses OvhTypeTelephonyHuntingModificationMembers::getList_logged()
	 * @param OvhTypeTelephonyHuntingModificationMembers TelephonyHuntingModificationMembers
	 * @return OvhTypeTelephonyHuntingModificationMembersResponse
	 */
	public function telephonyHuntingModificationMembers(OvhTypeTelephonyHuntingModificationMembers $_ovhTypeTelephonyHuntingModificationMembers)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyHuntingModificationMembersResponse(self::getSoapClient()->telephonyHuntingModificationMembers($_ovhTypeTelephonyHuntingModificationMembers->getSession(),$_ovhTypeTelephonyHuntingModificationMembers->getNumber(),$_ovhTypeTelephonyHuntingModificationMembers->getCountry(),$_ovhTypeTelephonyHuntingModificationMembers->getBillingAccount(),$_ovhTypeTelephonyHuntingModificationMembers->getList_destinations(),$_ovhTypeTelephonyHuntingModificationMembers->getList_noReplyTimer(),$_ovhTypeTelephonyHuntingModificationMembers->getList_logged())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyVoicemailMessagesDownload
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyVoicemailMessagesDownload::getSession()
	 * @uses OvhTypeTelephonyVoicemailMessagesDownload::getNumber()
	 * @uses OvhTypeTelephonyVoicemailMessagesDownload::getCountry()
	 * @uses OvhTypeTelephonyVoicemailMessagesDownload::getMessType()
	 * @uses OvhTypeTelephonyVoicemailMessagesDownload::getFormat()
	 * @param OvhTypeTelephonyVoicemailMessagesDownload TelephonyVoicemailMessagesDownload
	 * @return OvhTypeTelephonyVoicemailMessagesDownloadResponse
	 */
	public function telephonyVoicemailMessagesDownload(OvhTypeTelephonyVoicemailMessagesDownload $_ovhTypeTelephonyVoicemailMessagesDownload)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyVoicemailMessagesDownloadResponse(self::getSoapClient()->telephonyVoicemailMessagesDownload($_ovhTypeTelephonyVoicemailMessagesDownload->getSession(),$_ovhTypeTelephonyVoicemailMessagesDownload->getNumber(),$_ovhTypeTelephonyVoicemailMessagesDownload->getCountry(),$_ovhTypeTelephonyVoicemailMessagesDownload->getMessType(),$_ovhTypeTelephonyVoicemailMessagesDownload->getFormat())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFaxCampaignCreation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFaxCampaignCreation::getSession()
	 * @uses OvhTypeTelephonyFaxCampaignCreation::getNumber()
	 * @uses OvhTypeTelephonyFaxCampaignCreation::getCountry()
	 * @uses OvhTypeTelephonyFaxCampaignCreation::getCampaignName()
	 * @uses OvhTypeTelephonyFaxCampaignCreation::getPdfUrl()
	 * @uses OvhTypeTelephonyFaxCampaignCreation::getPdfName()
	 * @uses OvhTypeTelephonyFaxCampaignCreation::getRecipients()
	 * @uses OvhTypeTelephonyFaxCampaignCreation::getFaxQuality()
	 * @uses OvhTypeTelephonyFaxCampaignCreation::getInitialStatus()
	 * @uses OvhTypeTelephonyFaxCampaignCreation::getLaunchDate()
	 * @uses OvhTypeTelephonyFaxCampaignCreation::getRemoteRecipients()
	 * @param OvhTypeTelephonyFaxCampaignCreation TelephonyFaxCampaignCreation
	 * @return OvhTypeTelephonyFaxCampaignCreationResponse
	 */
	public function telephonyFaxCampaignCreation(OvhTypeTelephonyFaxCampaignCreation $_ovhTypeTelephonyFaxCampaignCreation)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFaxCampaignCreationResponse(self::getSoapClient()->telephonyFaxCampaignCreation($_ovhTypeTelephonyFaxCampaignCreation->getSession(),$_ovhTypeTelephonyFaxCampaignCreation->getNumber(),$_ovhTypeTelephonyFaxCampaignCreation->getCountry(),$_ovhTypeTelephonyFaxCampaignCreation->getCampaignName(),$_ovhTypeTelephonyFaxCampaignCreation->getPdfUrl(),$_ovhTypeTelephonyFaxCampaignCreation->getPdfName(),$_ovhTypeTelephonyFaxCampaignCreation->getRecipients(),$_ovhTypeTelephonyFaxCampaignCreation->getFaxQuality(),$_ovhTypeTelephonyFaxCampaignCreation->getInitialStatus(),$_ovhTypeTelephonyFaxCampaignCreation->getLaunchDate(),$_ovhTypeTelephonyFaxCampaignCreation->getRemoteRecipients())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineLogsNotificationOptions
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineLogsNotificationOptions::getSession()
	 * @uses OvhTypeTelephonyLineLogsNotificationOptions::getNumber()
	 * @uses OvhTypeTelephonyLineLogsNotificationOptions::getCountry()
	 * @param OvhTypeTelephonyLineLogsNotificationOptions TelephonyLineLogsNotificationOptions
	 * @return OvhTypeTelephonyLineLogsNotificationOptionsResponse
	 */
	public function telephonyLineLogsNotificationOptions(OvhTypeTelephonyLineLogsNotificationOptions $_ovhTypeTelephonyLineLogsNotificationOptions)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineLogsNotificationOptionsResponse(self::getSoapClient()->telephonyLineLogsNotificationOptions($_ovhTypeTelephonyLineLogsNotificationOptions->getSession(),$_ovhTypeTelephonyLineLogsNotificationOptions->getNumber(),$_ovhTypeTelephonyLineLogsNotificationOptions->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFMHuntingModificationMembers
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFMHuntingModificationMembers::getSession()
	 * @uses OvhTypeTelephonyFMHuntingModificationMembers::getNumber()
	 * @uses OvhTypeTelephonyFMHuntingModificationMembers::getCountry()
	 * @uses OvhTypeTelephonyFMHuntingModificationMembers::getBillingAccount()
	 * @uses OvhTypeTelephonyFMHuntingModificationMembers::getList_destinations()
	 * @uses OvhTypeTelephonyFMHuntingModificationMembers::getList_noReplyTimer()
	 * @uses OvhTypeTelephonyFMHuntingModificationMembers::getList_logged()
	 * @param OvhTypeTelephonyFMHuntingModificationMembers TelephonyFMHuntingModificationMembers
	 * @return OvhTypeTelephonyFMHuntingModificationMembersResponse
	 */
	public function telephonyFMHuntingModificationMembers(OvhTypeTelephonyFMHuntingModificationMembers $_ovhTypeTelephonyFMHuntingModificationMembers)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFMHuntingModificationMembersResponse(self::getSoapClient()->telephonyFMHuntingModificationMembers($_ovhTypeTelephonyFMHuntingModificationMembers->getSession(),$_ovhTypeTelephonyFMHuntingModificationMembers->getNumber(),$_ovhTypeTelephonyFMHuntingModificationMembers->getCountry(),$_ovhTypeTelephonyFMHuntingModificationMembers->getBillingAccount(),$_ovhTypeTelephonyFMHuntingModificationMembers->getList_destinations(),$_ovhTypeTelephonyFMHuntingModificationMembers->getList_noReplyTimer(),$_ovhTypeTelephonyFMHuntingModificationMembers->getList_logged())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookAdd::getSession()
	 * @uses OvhTypeTelephonyPhonebookAdd::getNumber()
	 * @uses OvhTypeTelephonyPhonebookAdd::getCountry()
	 * @uses OvhTypeTelephonyPhonebookAdd::getName()
	 * @param OvhTypeTelephonyPhonebookAdd TelephonyPhonebookAdd
	 * @return OvhTypeTelephonyPhonebookAddResponse
	 */
	public function telephonyPhonebookAdd(OvhTypeTelephonyPhonebookAdd $_ovhTypeTelephonyPhonebookAdd)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookAddResponse(self::getSoapClient()->telephonyPhonebookAdd($_ovhTypeTelephonyPhonebookAdd->getSession(),$_ovhTypeTelephonyPhonebookAdd->getNumber(),$_ovhTypeTelephonyPhonebookAdd->getCountry(),$_ovhTypeTelephonyPhonebookAdd->getName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyRestrictionModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyRestrictionModify::getSession()
	 * @uses OvhTypeTelephonyRestrictionModify::getNumber()
	 * @uses OvhTypeTelephonyRestrictionModify::getCountry()
	 * @uses OvhTypeTelephonyRestrictionModify::getRestrictions()
	 * @param OvhTypeTelephonyRestrictionModify TelephonyRestrictionModify
	 * @return OvhTypeTelephonyRestrictionModifyResponse
	 */
	public function telephonyRestrictionModify(OvhTypeTelephonyRestrictionModify $_ovhTypeTelephonyRestrictionModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyRestrictionModifyResponse(self::getSoapClient()->telephonyRestrictionModify($_ovhTypeTelephonyRestrictionModify->getSession(),$_ovhTypeTelephonyRestrictionModify->getNumber(),$_ovhTypeTelephonyRestrictionModify->getCountry(),$_ovhTypeTelephonyRestrictionModify->getRestrictions())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyRatesList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyRatesList::getCountryCode()
	 * @uses OvhTypeTelephonyRatesList::getType()
	 * @param OvhTypeTelephonyRatesList TelephonyRatesList
	 * @return OvhTypeTelephonyRatesListResponse
	 */
	public function telephonyRatesList(OvhTypeTelephonyRatesList $_ovhTypeTelephonyRatesList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyRatesListResponse(self::getSoapClient()->telephonyRatesList($_ovhTypeTelephonyRatesList->getCountryCode(),$_ovhTypeTelephonyRatesList->getType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyHuntingGenericScreenOptions
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyHuntingGenericScreenOptions::getSession()
	 * @uses OvhTypeTelephonyHuntingGenericScreenOptions::getNumber()
	 * @uses OvhTypeTelephonyHuntingGenericScreenOptions::getCountry()
	 * @param OvhTypeTelephonyHuntingGenericScreenOptions TelephonyHuntingGenericScreenOptions
	 * @return OvhTypeTelephonyHuntingGenericScreenOptionsResponse
	 */
	public function telephonyHuntingGenericScreenOptions(OvhTypeTelephonyHuntingGenericScreenOptions $_ovhTypeTelephonyHuntingGenericScreenOptions)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyHuntingGenericScreenOptionsResponse(self::getSoapClient()->telephonyHuntingGenericScreenOptions($_ovhTypeTelephonyHuntingGenericScreenOptions->getSession(),$_ovhTypeTelephonyHuntingGenericScreenOptions->getNumber(),$_ovhTypeTelephonyHuntingGenericScreenOptions->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyBillingAccountAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyBillingAccountAdd::getSession()
	 * @param OvhTypeTelephonyBillingAccountAdd TelephonyBillingAccountAdd
	 * @return OvhTypeTelephonyBillingAccountAddResponse
	 */
	public function telephonyBillingAccountAdd(OvhTypeTelephonyBillingAccountAdd $_ovhTypeTelephonyBillingAccountAdd)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyBillingAccountAddResponse(self::getSoapClient()->telephonyBillingAccountAdd($_ovhTypeTelephonyBillingAccountAdd->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsSenderValidate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsSenderValidate::getSession()
	 * @uses OvhTypeTelephonySmsSenderValidate::getSmsAccount()
	 * @uses OvhTypeTelephonySmsSenderValidate::getNumber()
	 * @uses OvhTypeTelephonySmsSenderValidate::getCode()
	 * @param OvhTypeTelephonySmsSenderValidate TelephonySmsSenderValidate
	 * @return OvhTypeTelephonySmsSenderValidateResponse
	 */
	public function telephonySmsSenderValidate(OvhTypeTelephonySmsSenderValidate $_ovhTypeTelephonySmsSenderValidate)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsSenderValidateResponse(self::getSoapClient()->telephonySmsSenderValidate($_ovhTypeTelephonySmsSenderValidate->getSession(),$_ovhTypeTelephonySmsSenderValidate->getSmsAccount(),$_ovhTypeTelephonySmsSenderValidate->getNumber(),$_ovhTypeTelephonySmsSenderValidate->getCode())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyHuntingModificationSimultaneousCalls
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyHuntingModificationSimultaneousCalls::getSession()
	 * @uses OvhTypeTelephonyHuntingModificationSimultaneousCalls::getNumber()
	 * @uses OvhTypeTelephonyHuntingModificationSimultaneousCalls::getCountry()
	 * @uses OvhTypeTelephonyHuntingModificationSimultaneousCalls::getBillingAccount()
	 * @uses OvhTypeTelephonyHuntingModificationSimultaneousCalls::getNumberOfCalls()
	 * @param OvhTypeTelephonyHuntingModificationSimultaneousCalls TelephonyHuntingModificationSimultaneousCalls
	 * @return OvhTypeTelephonyHuntingModificationSimultaneousCallsResponse
	 */
	public function telephonyHuntingModificationSimultaneousCalls(OvhTypeTelephonyHuntingModificationSimultaneousCalls $_ovhTypeTelephonyHuntingModificationSimultaneousCalls)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyHuntingModificationSimultaneousCallsResponse(self::getSoapClient()->telephonyHuntingModificationSimultaneousCalls($_ovhTypeTelephonyHuntingModificationSimultaneousCalls->getSession(),$_ovhTypeTelephonyHuntingModificationSimultaneousCalls->getNumber(),$_ovhTypeTelephonyHuntingModificationSimultaneousCalls->getCountry(),$_ovhTypeTelephonyHuntingModificationSimultaneousCalls->getBillingAccount(),$_ovhTypeTelephonyHuntingModificationSimultaneousCalls->getNumberOfCalls())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFaxCampaignList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFaxCampaignList::getSession()
	 * @uses OvhTypeTelephonyFaxCampaignList::getNumber()
	 * @uses OvhTypeTelephonyFaxCampaignList::getCountry()
	 * @uses OvhTypeTelephonyFaxCampaignList::getCampaignStatus()
	 * @uses OvhTypeTelephonyFaxCampaignList::getPagingStart()
	 * @uses OvhTypeTelephonyFaxCampaignList::getPagingLimit()
	 * @uses OvhTypeTelephonyFaxCampaignList::getSortField()
	 * @uses OvhTypeTelephonyFaxCampaignList::getSortOrder()
	 * @param OvhTypeTelephonyFaxCampaignList TelephonyFaxCampaignList
	 * @return OvhTypeTelephonyFaxCampaignListResponse
	 */
	public function telephonyFaxCampaignList(OvhTypeTelephonyFaxCampaignList $_ovhTypeTelephonyFaxCampaignList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFaxCampaignListResponse(self::getSoapClient()->telephonyFaxCampaignList($_ovhTypeTelephonyFaxCampaignList->getSession(),$_ovhTypeTelephonyFaxCampaignList->getNumber(),$_ovhTypeTelephonyFaxCampaignList->getCountry(),$_ovhTypeTelephonyFaxCampaignList->getCampaignStatus(),$_ovhTypeTelephonyFaxCampaignList->getPagingStart(),$_ovhTypeTelephonyFaxCampaignList->getPagingLimit(),$_ovhTypeTelephonyFaxCampaignList->getSortField(),$_ovhTypeTelephonyFaxCampaignList->getSortOrder())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsGetUserQuotaForUser
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsGetUserQuotaForUser::getSmsAccount()
	 * @uses OvhTypeTelephonySmsGetUserQuotaForUser::getLogin()
	 * @uses OvhTypeTelephonySmsGetUserQuotaForUser::getPassword()
	 * @param OvhTypeTelephonySmsGetUserQuotaForUser TelephonySmsGetUserQuotaForUser
	 * @return OvhTypeTelephonySmsGetUserQuotaForUserResponse
	 */
	public function telephonySmsGetUserQuotaForUser(OvhTypeTelephonySmsGetUserQuotaForUser $_ovhTypeTelephonySmsGetUserQuotaForUser)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsGetUserQuotaForUserResponse(self::getSoapClient()->telephonySmsGetUserQuotaForUser($_ovhTypeTelephonySmsGetUserQuotaForUser->getSmsAccount(),$_ovhTypeTelephonySmsGetUserQuotaForUser->getLogin(),$_ovhTypeTelephonySmsGetUserQuotaForUser->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFunctionKeyModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFunctionKeyModify::getSession()
	 * @uses OvhTypeTelephonyFunctionKeyModify::getNumber()
	 * @uses OvhTypeTelephonyFunctionKeyModify::getCountry()
	 * @uses OvhTypeTelephonyFunctionKeyModify::getKeyNum()
	 * @uses OvhTypeTelephonyFunctionKeyModify::getFunction()
	 * @uses OvhTypeTelephonyFunctionKeyModify::getRelatedNumber()
	 * @param OvhTypeTelephonyFunctionKeyModify TelephonyFunctionKeyModify
	 * @return OvhTypeTelephonyFunctionKeyModifyResponse
	 */
	public function telephonyFunctionKeyModify(OvhTypeTelephonyFunctionKeyModify $_ovhTypeTelephonyFunctionKeyModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFunctionKeyModifyResponse(self::getSoapClient()->telephonyFunctionKeyModify($_ovhTypeTelephonyFunctionKeyModify->getSession(),$_ovhTypeTelephonyFunctionKeyModify->getNumber(),$_ovhTypeTelephonyFunctionKeyModify->getCountry(),$_ovhTypeTelephonyFunctionKeyModify->getKeyNum(),$_ovhTypeTelephonyFunctionKeyModify->getFunction(),$_ovhTypeTelephonyFunctionKeyModify->getRelatedNumber())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyAbbreviatedNumberList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyAbbreviatedNumberList::getSession()
	 * @uses OvhTypeTelephonyAbbreviatedNumberList::getNumber()
	 * @uses OvhTypeTelephonyAbbreviatedNumberList::getCountry()
	 * @param OvhTypeTelephonyAbbreviatedNumberList TelephonyAbbreviatedNumberList
	 * @return OvhTypeTelephonyAbbreviatedNumberListResponse
	 */
	public function telephonyAbbreviatedNumberList(OvhTypeTelephonyAbbreviatedNumberList $_ovhTypeTelephonyAbbreviatedNumberList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyAbbreviatedNumberListResponse(self::getSoapClient()->telephonyAbbreviatedNumberList($_ovhTypeTelephonyAbbreviatedNumberList->getSession(),$_ovhTypeTelephonyAbbreviatedNumberList->getNumber(),$_ovhTypeTelephonyAbbreviatedNumberList->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFaxModifyPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFaxModifyPassword::getSession()
	 * @uses OvhTypeTelephonyFaxModifyPassword::getNumber()
	 * @uses OvhTypeTelephonyFaxModifyPassword::getCountry()
	 * @uses OvhTypeTelephonyFaxModifyPassword::getPassword()
	 * @param OvhTypeTelephonyFaxModifyPassword TelephonyFaxModifyPassword
	 * @return OvhTypeTelephonyFaxModifyPasswordResponse
	 */
	public function telephonyFaxModifyPassword(OvhTypeTelephonyFaxModifyPassword $_ovhTypeTelephonyFaxModifyPassword)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFaxModifyPasswordResponse(self::getSoapClient()->telephonyFaxModifyPassword($_ovhTypeTelephonyFaxModifyPassword->getSession(),$_ovhTypeTelephonyFaxModifyPassword->getNumber(),$_ovhTypeTelephonyFaxModifyPassword->getCountry(),$_ovhTypeTelephonyFaxModifyPassword->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsDelete::getSession()
	 * @uses OvhTypeTelephonySmsDelete::getSmsAccount()
	 * @uses OvhTypeTelephonySmsDelete::getSmsIds()
	 * @param OvhTypeTelephonySmsDelete TelephonySmsDelete
	 * @return OvhTypeTelephonySmsDeleteResponse
	 */
	public function telephonySmsDelete(OvhTypeTelephonySmsDelete $_ovhTypeTelephonySmsDelete)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsDeleteResponse(self::getSoapClient()->telephonySmsDelete($_ovhTypeTelephonySmsDelete->getSession(),$_ovhTypeTelephonySmsDelete->getSmsAccount(),$_ovhTypeTelephonySmsDelete->getSmsIds())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyDirectoryModifyPublication
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyDirectoryModifyPublication::getSession()
	 * @uses OvhTypeTelephonyDirectoryModifyPublication::getCallNumber()
	 * @uses OvhTypeTelephonyDirectoryModifyPublication::getCountryCode()
	 * @uses OvhTypeTelephonyDirectoryModifyPublication::getLineDescription()
	 * @uses OvhTypeTelephonyDirectoryModifyPublication::getDisplayFirstName()
	 * @uses OvhTypeTelephonyDirectoryModifyPublication::getDisplayOnlyCity()
	 * @uses OvhTypeTelephonyDirectoryModifyPublication::getDisplayUniversalDirectory()
	 * @uses OvhTypeTelephonyDirectoryModifyPublication::getDisplayMarketingDirectory()
	 * @uses OvhTypeTelephonyDirectoryModifyPublication::getDisplaySearchReverse()
	 * @uses OvhTypeTelephonyDirectoryModifyPublication::getReceivePJDirectory()
	 * @param OvhTypeTelephonyDirectoryModifyPublication TelephonyDirectoryModifyPublication
	 * @return OvhTypeTelephonyDirectoryModifyPublicationResponse
	 */
	public function telephonyDirectoryModifyPublication(OvhTypeTelephonyDirectoryModifyPublication $_ovhTypeTelephonyDirectoryModifyPublication)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyDirectoryModifyPublicationResponse(self::getSoapClient()->telephonyDirectoryModifyPublication($_ovhTypeTelephonyDirectoryModifyPublication->getSession(),$_ovhTypeTelephonyDirectoryModifyPublication->getCallNumber(),$_ovhTypeTelephonyDirectoryModifyPublication->getCountryCode(),$_ovhTypeTelephonyDirectoryModifyPublication->getLineDescription(),$_ovhTypeTelephonyDirectoryModifyPublication->getDisplayFirstName(),$_ovhTypeTelephonyDirectoryModifyPublication->getDisplayOnlyCity(),$_ovhTypeTelephonyDirectoryModifyPublication->getDisplayUniversalDirectory(),$_ovhTypeTelephonyDirectoryModifyPublication->getDisplayMarketingDirectory(),$_ovhTypeTelephonyDirectoryModifyPublication->getDisplaySearchReverse(),$_ovhTypeTelephonyDirectoryModifyPublication->getReceivePJDirectory())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookOnGroupAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookOnGroupAdd::getSession()
	 * @uses OvhTypeTelephonyPhonebookOnGroupAdd::getGroup()
	 * @uses OvhTypeTelephonyPhonebookOnGroupAdd::getName()
	 * @param OvhTypeTelephonyPhonebookOnGroupAdd TelephonyPhonebookOnGroupAdd
	 * @return OvhTypeTelephonyPhonebookOnGroupAddResponse
	 */
	public function telephonyPhonebookOnGroupAdd(OvhTypeTelephonyPhonebookOnGroupAdd $_ovhTypeTelephonyPhonebookOnGroupAdd)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookOnGroupAddResponse(self::getSoapClient()->telephonyPhonebookOnGroupAdd($_ovhTypeTelephonyPhonebookOnGroupAdd->getSession(),$_ovhTypeTelephonyPhonebookOnGroupAdd->getGroup(),$_ovhTypeTelephonyPhonebookOnGroupAdd->getName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineSwitchOfferPossibility
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineSwitchOfferPossibility::getSession()
	 * @uses OvhTypeTelephonyLineSwitchOfferPossibility::getNumber()
	 * @uses OvhTypeTelephonyLineSwitchOfferPossibility::getCountry()
	 * @param OvhTypeTelephonyLineSwitchOfferPossibility TelephonyLineSwitchOfferPossibility
	 * @return OvhTypeTelephonyLineSwitchOfferPossibilityResponse
	 */
	public function telephonyLineSwitchOfferPossibility(OvhTypeTelephonyLineSwitchOfferPossibility $_ovhTypeTelephonyLineSwitchOfferPossibility)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineSwitchOfferPossibilityResponse(self::getSoapClient()->telephonyLineSwitchOfferPossibility($_ovhTypeTelephonyLineSwitchOfferPossibility->getSession(),$_ovhTypeTelephonyLineSwitchOfferPossibility->getNumber(),$_ovhTypeTelephonyLineSwitchOfferPossibility->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsSenderList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsSenderList::getSession()
	 * @uses OvhTypeTelephonySmsSenderList::getSmsAccount()
	 * @param OvhTypeTelephonySmsSenderList TelephonySmsSenderList
	 * @return OvhTypeTelephonySmsSenderListResponse
	 */
	public function telephonySmsSenderList(OvhTypeTelephonySmsSenderList $_ovhTypeTelephonySmsSenderList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsSenderListResponse(self::getSoapClient()->telephonySmsSenderList($_ovhTypeTelephonySmsSenderList->getSession(),$_ovhTypeTelephonySmsSenderList->getSmsAccount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFunctionKeyList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFunctionKeyList::getSession()
	 * @uses OvhTypeTelephonyFunctionKeyList::getNumber()
	 * @uses OvhTypeTelephonyFunctionKeyList::getCountry()
	 * @param OvhTypeTelephonyFunctionKeyList TelephonyFunctionKeyList
	 * @return OvhTypeTelephonyFunctionKeyListResponse
	 */
	public function telephonyFunctionKeyList(OvhTypeTelephonyFunctionKeyList $_ovhTypeTelephonyFunctionKeyList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFunctionKeyListResponse(self::getSoapClient()->telephonyFunctionKeyList($_ovhTypeTelephonyFunctionKeyList->getSession(),$_ovhTypeTelephonyFunctionKeyList->getNumber(),$_ovhTypeTelephonyFunctionKeyList->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineSwitchOffer
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineSwitchOffer::getSession()
	 * @uses OvhTypeTelephonyLineSwitchOffer::getNumber()
	 * @uses OvhTypeTelephonyLineSwitchOffer::getCountry()
	 * @uses OvhTypeTelephonyLineSwitchOffer::getOffer()
	 * @param OvhTypeTelephonyLineSwitchOffer TelephonyLineSwitchOffer
	 * @return OvhTypeTelephonyLineSwitchOfferResponse
	 */
	public function telephonyLineSwitchOffer(OvhTypeTelephonyLineSwitchOffer $_ovhTypeTelephonyLineSwitchOffer)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineSwitchOfferResponse(self::getSoapClient()->telephonyLineSwitchOffer($_ovhTypeTelephonyLineSwitchOffer->getSession(),$_ovhTypeTelephonyLineSwitchOffer->getNumber(),$_ovhTypeTelephonyLineSwitchOffer->getCountry(),$_ovhTypeTelephonyLineSwitchOffer->getOffer())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFreefaxToVoicefaxCheckList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFreefaxToVoicefaxCheckList::getSession()
	 * @uses OvhTypeTelephonyFreefaxToVoicefaxCheckList::getBillingAccount()
	 * @param OvhTypeTelephonyFreefaxToVoicefaxCheckList TelephonyFreefaxToVoicefaxCheckList
	 * @return OvhTypeTelephonyFreefaxToVoicefaxCheckListResponse
	 */
	public function telephonyFreefaxToVoicefaxCheckList(OvhTypeTelephonyFreefaxToVoicefaxCheckList $_ovhTypeTelephonyFreefaxToVoicefaxCheckList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFreefaxToVoicefaxCheckListResponse(self::getSoapClient()->telephonyFreefaxToVoicefaxCheckList($_ovhTypeTelephonyFreefaxToVoicefaxCheckList->getSession(),$_ovhTypeTelephonyFreefaxToVoicefaxCheckList->getBillingAccount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyVoicemailModifyPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyVoicemailModifyPassword::getSession()
	 * @uses OvhTypeTelephonyVoicemailModifyPassword::getNumber()
	 * @uses OvhTypeTelephonyVoicemailModifyPassword::getCountry()
	 * @uses OvhTypeTelephonyVoicemailModifyPassword::getPassword()
	 * @uses OvhTypeTelephonyVoicemailModifyPassword::getForcePassword()
	 * @param OvhTypeTelephonyVoicemailModifyPassword TelephonyVoicemailModifyPassword
	 * @return OvhTypeTelephonyVoicemailModifyPasswordResponse
	 */
	public function telephonyVoicemailModifyPassword(OvhTypeTelephonyVoicemailModifyPassword $_ovhTypeTelephonyVoicemailModifyPassword)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyVoicemailModifyPasswordResponse(self::getSoapClient()->telephonyVoicemailModifyPassword($_ovhTypeTelephonyVoicemailModifyPassword->getSession(),$_ovhTypeTelephonyVoicemailModifyPassword->getNumber(),$_ovhTypeTelephonyVoicemailModifyPassword->getCountry(),$_ovhTypeTelephonyVoicemailModifyPassword->getPassword(),$_ovhTypeTelephonyVoicemailModifyPassword->getForcePassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyConferenceRoomModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyConferenceRoomModify::getSession()
	 * @uses OvhTypeTelephonyConferenceRoomModify::getNumber()
	 * @uses OvhTypeTelephonyConferenceRoomModify::getCountry()
	 * @uses OvhTypeTelephonyConferenceRoomModify::getCurrentRoom()
	 * @uses OvhTypeTelephonyConferenceRoomModify::getNewRoom()
	 * @param OvhTypeTelephonyConferenceRoomModify TelephonyConferenceRoomModify
	 * @return OvhTypeTelephonyConferenceRoomModifyResponse
	 */
	public function telephonyConferenceRoomModify(OvhTypeTelephonyConferenceRoomModify $_ovhTypeTelephonyConferenceRoomModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyConferenceRoomModifyResponse(self::getSoapClient()->telephonyConferenceRoomModify($_ovhTypeTelephonyConferenceRoomModify->getSession(),$_ovhTypeTelephonyConferenceRoomModify->getNumber(),$_ovhTypeTelephonyConferenceRoomModify->getCountry(),$_ovhTypeTelephonyConferenceRoomModify->getCurrentRoom(),$_ovhTypeTelephonyConferenceRoomModify->getNewRoom())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookShare
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookShare::getSession()
	 * @uses OvhTypeTelephonyPhonebookShare::getNumber()
	 * @uses OvhTypeTelephonyPhonebookShare::getCountry()
	 * @uses OvhTypeTelephonyPhonebookShare::getId()
	 * @uses OvhTypeTelephonyPhonebookShare::getTargetNumber()
	 * @uses OvhTypeTelephonyPhonebookShare::getName()
	 * @uses OvhTypeTelephonyPhonebookShare::getMode()
	 * @param OvhTypeTelephonyPhonebookShare TelephonyPhonebookShare
	 * @return OvhTypeTelephonyPhonebookShareResponse
	 */
	public function telephonyPhonebookShare(OvhTypeTelephonyPhonebookShare $_ovhTypeTelephonyPhonebookShare)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookShareResponse(self::getSoapClient()->telephonyPhonebookShare($_ovhTypeTelephonyPhonebookShare->getSession(),$_ovhTypeTelephonyPhonebookShare->getNumber(),$_ovhTypeTelephonyPhonebookShare->getCountry(),$_ovhTypeTelephonyPhonebookShare->getId(),$_ovhTypeTelephonyPhonebookShare->getTargetNumber(),$_ovhTypeTelephonyPhonebookShare->getName(),$_ovhTypeTelephonyPhonebookShare->getMode())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsSetUserQuota
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsSetUserQuota::getSession()
	 * @uses OvhTypeTelephonySmsSetUserQuota::getSmsAccount()
	 * @uses OvhTypeTelephonySmsSetUserQuota::getLogin()
	 * @uses OvhTypeTelephonySmsSetUserQuota::getStatus()
	 * @uses OvhTypeTelephonySmsSetUserQuota::getQuotaDiff()
	 * @param OvhTypeTelephonySmsSetUserQuota TelephonySmsSetUserQuota
	 * @return OvhTypeTelephonySmsSetUserQuotaResponse
	 */
	public function telephonySmsSetUserQuota(OvhTypeTelephonySmsSetUserQuota $_ovhTypeTelephonySmsSetUserQuota)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsSetUserQuotaResponse(self::getSoapClient()->telephonySmsSetUserQuota($_ovhTypeTelephonySmsSetUserQuota->getSession(),$_ovhTypeTelephonySmsSetUserQuota->getSmsAccount(),$_ovhTypeTelephonySmsSetUserQuota->getLogin(),$_ovhTypeTelephonySmsSetUserQuota->getStatus(),$_ovhTypeTelephonySmsSetUserQuota->getQuotaDiff())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsHistoryCsv
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsHistoryCsv::getSession()
	 * @uses OvhTypeTelephonySmsHistoryCsv::getSmsAccount()
	 * @uses OvhTypeTelephonySmsHistoryCsv::getSmsId()
	 * @uses OvhTypeTelephonySmsHistoryCsv::getUser()
	 * @uses OvhTypeTelephonySmsHistoryCsv::getPagingStart()
	 * @uses OvhTypeTelephonySmsHistoryCsv::getPagingLimit()
	 * @uses OvhTypeTelephonySmsHistoryCsv::getSortField()
	 * @uses OvhTypeTelephonySmsHistoryCsv::getSortOrder()
	 * @uses OvhTypeTelephonySmsHistoryCsv::getTag()
	 * @param OvhTypeTelephonySmsHistoryCsv TelephonySmsHistoryCsv
	 * @return OvhTypeTelephonySmsHistoryCsvResponse
	 */
	public function telephonySmsHistoryCsv(OvhTypeTelephonySmsHistoryCsv $_ovhTypeTelephonySmsHistoryCsv)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsHistoryCsvResponse(self::getSoapClient()->telephonySmsHistoryCsv($_ovhTypeTelephonySmsHistoryCsv->getSession(),$_ovhTypeTelephonySmsHistoryCsv->getSmsAccount(),$_ovhTypeTelephonySmsHistoryCsv->getSmsId(),$_ovhTypeTelephonySmsHistoryCsv->getUser(),$_ovhTypeTelephonySmsHistoryCsv->getPagingStart(),$_ovhTypeTelephonySmsHistoryCsv->getPagingLimit(),$_ovhTypeTelephonySmsHistoryCsv->getSortField(),$_ovhTypeTelephonySmsHistoryCsv->getSortOrder(),$_ovhTypeTelephonySmsHistoryCsv->getTag())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyVxmlValidate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyVxmlValidate::getSession()
	 * @uses OvhTypeTelephonyVxmlValidate::getNumber()
	 * @uses OvhTypeTelephonyVxmlValidate::getCountry()
	 * @uses OvhTypeTelephonyVxmlValidate::getUrl()
	 * @param OvhTypeTelephonyVxmlValidate TelephonyVxmlValidate
	 * @return OvhTypeTelephonyVxmlValidateResponse
	 */
	public function telephonyVxmlValidate(OvhTypeTelephonyVxmlValidate $_ovhTypeTelephonyVxmlValidate)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyVxmlValidateResponse(self::getSoapClient()->telephonyVxmlValidate($_ovhTypeTelephonyVxmlValidate->getSession(),$_ovhTypeTelephonyVxmlValidate->getNumber(),$_ovhTypeTelephonyVxmlValidate->getCountry(),$_ovhTypeTelephonyVxmlValidate->getUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyAbbreviatedNumberOnGroupList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupList::getSession()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupList::getGroup()
	 * @param OvhTypeTelephonyAbbreviatedNumberOnGroupList TelephonyAbbreviatedNumberOnGroupList
	 * @return OvhTypeTelephonyAbbreviatedNumberOnGroupListResponse
	 */
	public function telephonyAbbreviatedNumberOnGroupList(OvhTypeTelephonyAbbreviatedNumberOnGroupList $_ovhTypeTelephonyAbbreviatedNumberOnGroupList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyAbbreviatedNumberOnGroupListResponse(self::getSoapClient()->telephonyAbbreviatedNumberOnGroupList($_ovhTypeTelephonyAbbreviatedNumberOnGroupList->getSession(),$_ovhTypeTelephonyAbbreviatedNumberOnGroupList->getGroup())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineLogs
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineLogs::getSession()
	 * @uses OvhTypeTelephonyLineLogs::getNumber()
	 * @uses OvhTypeTelephonyLineLogs::getCountry()
	 * @uses OvhTypeTelephonyLineLogs::getPagingStart()
	 * @uses OvhTypeTelephonyLineLogs::getPagingLimit()
	 * @param OvhTypeTelephonyLineLogs TelephonyLineLogs
	 * @return OvhTypeTelephonyLineLogsResponse
	 */
	public function telephonyLineLogs(OvhTypeTelephonyLineLogs $_ovhTypeTelephonyLineLogs)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineLogsResponse(self::getSoapClient()->telephonyLineLogs($_ovhTypeTelephonyLineLogs->getSession(),$_ovhTypeTelephonyLineLogs->getNumber(),$_ovhTypeTelephonyLineLogs->getCountry(),$_ovhTypeTelephonyLineLogs->getPagingStart(),$_ovhTypeTelephonyLineLogs->getPagingLimit())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyClick2CallUserList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyClick2CallUserList::getSession()
	 * @uses OvhTypeTelephonyClick2CallUserList::getNumber()
	 * @uses OvhTypeTelephonyClick2CallUserList::getCountry()
	 * @param OvhTypeTelephonyClick2CallUserList TelephonyClick2CallUserList
	 * @return OvhTypeTelephonyClick2CallUserListResponse
	 */
	public function telephonyClick2CallUserList(OvhTypeTelephonyClick2CallUserList $_ovhTypeTelephonyClick2CallUserList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyClick2CallUserListResponse(self::getSoapClient()->telephonyClick2CallUserList($_ovhTypeTelephonyClick2CallUserList->getSession(),$_ovhTypeTelephonyClick2CallUserList->getNumber(),$_ovhTypeTelephonyClick2CallUserList->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyVoicemailMailboxList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyVoicemailMailboxList::getSession()
	 * @uses OvhTypeTelephonyVoicemailMailboxList::getNumber()
	 * @uses OvhTypeTelephonyVoicemailMailboxList::getCountry()
	 * @uses OvhTypeTelephonyVoicemailMailboxList::getPagingStart()
	 * @uses OvhTypeTelephonyVoicemailMailboxList::getPagingLimit()
	 * @uses OvhTypeTelephonyVoicemailMailboxList::getSortField()
	 * @uses OvhTypeTelephonyVoicemailMailboxList::getSortOrder()
	 * @param OvhTypeTelephonyVoicemailMailboxList TelephonyVoicemailMailboxList
	 * @return OvhTypeTelephonyVoicemailMailboxListResponse
	 */
	public function telephonyVoicemailMailboxList(OvhTypeTelephonyVoicemailMailboxList $_ovhTypeTelephonyVoicemailMailboxList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyVoicemailMailboxListResponse(self::getSoapClient()->telephonyVoicemailMailboxList($_ovhTypeTelephonyVoicemailMailboxList->getSession(),$_ovhTypeTelephonyVoicemailMailboxList->getNumber(),$_ovhTypeTelephonyVoicemailMailboxList->getCountry(),$_ovhTypeTelephonyVoicemailMailboxList->getPagingStart(),$_ovhTypeTelephonyVoicemailMailboxList->getPagingLimit(),$_ovhTypeTelephonyVoicemailMailboxList->getSortField(),$_ovhTypeTelephonyVoicemailMailboxList->getSortOrder())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFaxCampaignDetails
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFaxCampaignDetails::getSession()
	 * @uses OvhTypeTelephonyFaxCampaignDetails::getNumber()
	 * @uses OvhTypeTelephonyFaxCampaignDetails::getCountry()
	 * @uses OvhTypeTelephonyFaxCampaignDetails::getReference()
	 * @uses OvhTypeTelephonyFaxCampaignDetails::getSendRecipients()
	 * @param OvhTypeTelephonyFaxCampaignDetails TelephonyFaxCampaignDetails
	 * @return OvhTypeTelephonyFaxCampaignDetailsResponse
	 */
	public function telephonyFaxCampaignDetails(OvhTypeTelephonyFaxCampaignDetails $_ovhTypeTelephonyFaxCampaignDetails)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFaxCampaignDetailsResponse(self::getSoapClient()->telephonyFaxCampaignDetails($_ovhTypeTelephonyFaxCampaignDetails->getSession(),$_ovhTypeTelephonyFaxCampaignDetails->getNumber(),$_ovhTypeTelephonyFaxCampaignDetails->getCountry(),$_ovhTypeTelephonyFaxCampaignDetails->getReference(),$_ovhTypeTelephonyFaxCampaignDetails->getSendRecipients())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookOnGroupDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookOnGroupDel::getSession()
	 * @uses OvhTypeTelephonyPhonebookOnGroupDel::getGroup()
	 * @uses OvhTypeTelephonyPhonebookOnGroupDel::getId()
	 * @param OvhTypeTelephonyPhonebookOnGroupDel TelephonyPhonebookOnGroupDel
	 * @return OvhTypeTelephonyPhonebookOnGroupDelResponse
	 */
	public function telephonyPhonebookOnGroupDel(OvhTypeTelephonyPhonebookOnGroupDel $_ovhTypeTelephonyPhonebookOnGroupDel)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookOnGroupDelResponse(self::getSoapClient()->telephonyPhonebookOnGroupDel($_ovhTypeTelephonyPhonebookOnGroupDel->getSession(),$_ovhTypeTelephonyPhonebookOnGroupDel->getGroup(),$_ovhTypeTelephonyPhonebookOnGroupDel->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookOnGroupList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookOnGroupList::getSession()
	 * @uses OvhTypeTelephonyPhonebookOnGroupList::getGroup()
	 * @param OvhTypeTelephonyPhonebookOnGroupList TelephonyPhonebookOnGroupList
	 * @return OvhTypeTelephonyPhonebookOnGroupListResponse
	 */
	public function telephonyPhonebookOnGroupList(OvhTypeTelephonyPhonebookOnGroupList $_ovhTypeTelephonyPhonebookOnGroupList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookOnGroupListResponse(self::getSoapClient()->telephonyPhonebookOnGroupList($_ovhTypeTelephonyPhonebookOnGroupList->getSession(),$_ovhTypeTelephonyPhonebookOnGroupList->getGroup())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySpecialNumberCustomList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySpecialNumberCustomList::getSession()
	 * @uses OvhTypeTelephonySpecialNumberCustomList::getCountry()
	 * @uses OvhTypeTelephonySpecialNumberCustomList::getPrefix()
	 * @param OvhTypeTelephonySpecialNumberCustomList TelephonySpecialNumberCustomList
	 * @return OvhTypeTelephonySpecialNumberCustomListResponse
	 */
	public function telephonySpecialNumberCustomList(OvhTypeTelephonySpecialNumberCustomList $_ovhTypeTelephonySpecialNumberCustomList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySpecialNumberCustomListResponse(self::getSoapClient()->telephonySpecialNumberCustomList($_ovhTypeTelephonySpecialNumberCustomList->getSession(),$_ovhTypeTelephonySpecialNumberCustomList->getCountry(),$_ovhTypeTelephonySpecialNumberCustomList->getPrefix())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFMHuntingModificationSimultaneousCalls
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFMHuntingModificationSimultaneousCalls::getSession()
	 * @uses OvhTypeTelephonyFMHuntingModificationSimultaneousCalls::getNumber()
	 * @uses OvhTypeTelephonyFMHuntingModificationSimultaneousCalls::getCountry()
	 * @uses OvhTypeTelephonyFMHuntingModificationSimultaneousCalls::getBillingAccount()
	 * @uses OvhTypeTelephonyFMHuntingModificationSimultaneousCalls::getNumberOfCalls()
	 * @param OvhTypeTelephonyFMHuntingModificationSimultaneousCalls TelephonyFMHuntingModificationSimultaneousCalls
	 * @return OvhTypeTelephonyFMHuntingModificationSimultaneousCallsResponse
	 */
	public function telephonyFMHuntingModificationSimultaneousCalls(OvhTypeTelephonyFMHuntingModificationSimultaneousCalls $_ovhTypeTelephonyFMHuntingModificationSimultaneousCalls)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFMHuntingModificationSimultaneousCallsResponse(self::getSoapClient()->telephonyFMHuntingModificationSimultaneousCalls($_ovhTypeTelephonyFMHuntingModificationSimultaneousCalls->getSession(),$_ovhTypeTelephonyFMHuntingModificationSimultaneousCalls->getNumber(),$_ovhTypeTelephonyFMHuntingModificationSimultaneousCalls->getCountry(),$_ovhTypeTelephonyFMHuntingModificationSimultaneousCalls->getBillingAccount(),$_ovhTypeTelephonyFMHuntingModificationSimultaneousCalls->getNumberOfCalls())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyVoicemailMailboxDownload
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyVoicemailMailboxDownload::getSession()
	 * @uses OvhTypeTelephonyVoicemailMailboxDownload::getNumber()
	 * @uses OvhTypeTelephonyVoicemailMailboxDownload::getCountry()
	 * @uses OvhTypeTelephonyVoicemailMailboxDownload::getId()
	 * @uses OvhTypeTelephonyVoicemailMailboxDownload::getFormat()
	 * @uses OvhTypeTelephonyVoicemailMailboxDownload::getFolder()
	 * @param OvhTypeTelephonyVoicemailMailboxDownload TelephonyVoicemailMailboxDownload
	 * @return OvhTypeTelephonyVoicemailMailboxDownloadResponse
	 */
	public function telephonyVoicemailMailboxDownload(OvhTypeTelephonyVoicemailMailboxDownload $_ovhTypeTelephonyVoicemailMailboxDownload)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyVoicemailMailboxDownloadResponse(self::getSoapClient()->telephonyVoicemailMailboxDownload($_ovhTypeTelephonyVoicemailMailboxDownload->getSession(),$_ovhTypeTelephonyVoicemailMailboxDownload->getNumber(),$_ovhTypeTelephonyVoicemailMailboxDownload->getCountry(),$_ovhTypeTelephonyVoicemailMailboxDownload->getId(),$_ovhTypeTelephonyVoicemailMailboxDownload->getFormat(),$_ovhTypeTelephonyVoicemailMailboxDownload->getFolder())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyReversmentsRefundIsPending
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyReversmentsRefundIsPending::getSession()
	 * @uses OvhTypeTelephonyReversmentsRefundIsPending::getBillingAccount()
	 * @param OvhTypeTelephonyReversmentsRefundIsPending TelephonyReversmentsRefundIsPending
	 * @return OvhTypeTelephonyReversmentsRefundIsPendingResponse
	 */
	public function telephonyReversmentsRefundIsPending(OvhTypeTelephonyReversmentsRefundIsPending $_ovhTypeTelephonyReversmentsRefundIsPending)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyReversmentsRefundIsPendingResponse(self::getSoapClient()->telephonyReversmentsRefundIsPending($_ovhTypeTelephonyReversmentsRefundIsPending->getSession(),$_ovhTypeTelephonyReversmentsRefundIsPending->getBillingAccount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyScreenListInfoModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyScreenListInfoModify::getSession()
	 * @uses OvhTypeTelephonyScreenListInfoModify::getNumber()
	 * @uses OvhTypeTelephonyScreenListInfoModify::getCountry()
	 * @uses OvhTypeTelephonyScreenListInfoModify::getScreenListType()
	 * @uses OvhTypeTelephonyScreenListInfoModify::getNumbersScreen()
	 * @uses OvhTypeTelephonyScreenListInfoModify::getNaturesScreen()
	 * @param OvhTypeTelephonyScreenListInfoModify TelephonyScreenListInfoModify
	 * @return OvhTypeTelephonyScreenListInfoModifyResponse
	 */
	public function telephonyScreenListInfoModify(OvhTypeTelephonyScreenListInfoModify $_ovhTypeTelephonyScreenListInfoModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyScreenListInfoModifyResponse(self::getSoapClient()->telephonyScreenListInfoModify($_ovhTypeTelephonyScreenListInfoModify->getSession(),$_ovhTypeTelephonyScreenListInfoModify->getNumber(),$_ovhTypeTelephonyScreenListInfoModify->getCountry(),$_ovhTypeTelephonyScreenListInfoModify->getScreenListType(),$_ovhTypeTelephonyScreenListInfoModify->getNumbersScreen(),$_ovhTypeTelephonyScreenListInfoModify->getNaturesScreen())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyHuntingGenericScreenStatusModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyHuntingGenericScreenStatusModify::getSession()
	 * @uses OvhTypeTelephonyHuntingGenericScreenStatusModify::getNumber()
	 * @uses OvhTypeTelephonyHuntingGenericScreenStatusModify::getCountry()
	 * @uses OvhTypeTelephonyHuntingGenericScreenStatusModify::getStatus()
	 * @param OvhTypeTelephonyHuntingGenericScreenStatusModify TelephonyHuntingGenericScreenStatusModify
	 * @return OvhTypeTelephonyHuntingGenericScreenStatusModifyResponse
	 */
	public function telephonyHuntingGenericScreenStatusModify(OvhTypeTelephonyHuntingGenericScreenStatusModify $_ovhTypeTelephonyHuntingGenericScreenStatusModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyHuntingGenericScreenStatusModifyResponse(self::getSoapClient()->telephonyHuntingGenericScreenStatusModify($_ovhTypeTelephonyHuntingGenericScreenStatusModify->getSession(),$_ovhTypeTelephonyHuntingGenericScreenStatusModify->getNumber(),$_ovhTypeTelephonyHuntingGenericScreenStatusModify->getCountry(),$_ovhTypeTelephonyHuntingGenericScreenStatusModify->getStatus())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookContactAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookContactAdd::getSession()
	 * @uses OvhTypeTelephonyPhonebookContactAdd::getNumber()
	 * @uses OvhTypeTelephonyPhonebookContactAdd::getCountry()
	 * @uses OvhTypeTelephonyPhonebookContactAdd::getId()
	 * @uses OvhTypeTelephonyPhonebookContactAdd::getName()
	 * @uses OvhTypeTelephonyPhonebookContactAdd::getSurname()
	 * @uses OvhTypeTelephonyPhonebookContactAdd::getWorkPhone()
	 * @uses OvhTypeTelephonyPhonebookContactAdd::getWorkMobile()
	 * @uses OvhTypeTelephonyPhonebookContactAdd::getHomePhone()
	 * @uses OvhTypeTelephonyPhonebookContactAdd::getHomeMobile()
	 * @uses OvhTypeTelephonyPhonebookContactAdd::getGroup()
	 * @param OvhTypeTelephonyPhonebookContactAdd TelephonyPhonebookContactAdd
	 * @return OvhTypeTelephonyPhonebookContactAddResponse
	 */
	public function telephonyPhonebookContactAdd(OvhTypeTelephonyPhonebookContactAdd $_ovhTypeTelephonyPhonebookContactAdd)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookContactAddResponse(self::getSoapClient()->telephonyPhonebookContactAdd($_ovhTypeTelephonyPhonebookContactAdd->getSession(),$_ovhTypeTelephonyPhonebookContactAdd->getNumber(),$_ovhTypeTelephonyPhonebookContactAdd->getCountry(),$_ovhTypeTelephonyPhonebookContactAdd->getId(),$_ovhTypeTelephonyPhonebookContactAdd->getName(),$_ovhTypeTelephonyPhonebookContactAdd->getSurname(),$_ovhTypeTelephonyPhonebookContactAdd->getWorkPhone(),$_ovhTypeTelephonyPhonebookContactAdd->getWorkMobile(),$_ovhTypeTelephonyPhonebookContactAdd->getHomePhone(),$_ovhTypeTelephonyPhonebookContactAdd->getHomeMobile(),$_ovhTypeTelephonyPhonebookContactAdd->getGroup())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPortabilityOrderSpecialNumber
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getSession()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getBillingAccount()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getOffer()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getDesireDate()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getCallNumber()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getCustContactName()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getCustContactNumber()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getCustName()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getCustSiret()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getCustStreetName()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getCustStreetNumber()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getCustBuilding()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getCustStair()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getCustFloor()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getCustDoor()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getCustZip()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getCustCity()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getComment()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getEvenPorted()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getCategory()
	 * @uses OvhTypeTelephonyPortabilityOrderSpecialNumber::getExtraNumbers()
	 * @param OvhTypeTelephonyPortabilityOrderSpecialNumber TelephonyPortabilityOrderSpecialNumber
	 * @return OvhTypeTelephonyPortabilityOrderSpecialNumberResponse
	 */
	public function telephonyPortabilityOrderSpecialNumber(OvhTypeTelephonyPortabilityOrderSpecialNumber $_ovhTypeTelephonyPortabilityOrderSpecialNumber)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPortabilityOrderSpecialNumberResponse(self::getSoapClient()->telephonyPortabilityOrderSpecialNumber($_ovhTypeTelephonyPortabilityOrderSpecialNumber->getSession(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getBillingAccount(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getOffer(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getDesireDate(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getCallNumber(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getCustContactName(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getCustContactNumber(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getCustName(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getCustSiret(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getCustStreetName(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getCustStreetNumber(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getCustBuilding(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getCustStair(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getCustFloor(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getCustDoor(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getCustZip(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getCustCity(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getComment(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getEvenPorted(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getCategory(),$_ovhTypeTelephonyPortabilityOrderSpecialNumber->getExtraNumbers())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookOnGroupModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookOnGroupModify::getSession()
	 * @uses OvhTypeTelephonyPhonebookOnGroupModify::getGroup()
	 * @uses OvhTypeTelephonyPhonebookOnGroupModify::getId()
	 * @uses OvhTypeTelephonyPhonebookOnGroupModify::getName()
	 * @param OvhTypeTelephonyPhonebookOnGroupModify TelephonyPhonebookOnGroupModify
	 * @return OvhTypeTelephonyPhonebookOnGroupModifyResponse
	 */
	public function telephonyPhonebookOnGroupModify(OvhTypeTelephonyPhonebookOnGroupModify $_ovhTypeTelephonyPhonebookOnGroupModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookOnGroupModifyResponse(self::getSoapClient()->telephonyPhonebookOnGroupModify($_ovhTypeTelephonyPhonebookOnGroupModify->getSession(),$_ovhTypeTelephonyPhonebookOnGroupModify->getGroup(),$_ovhTypeTelephonyPhonebookOnGroupModify->getId(),$_ovhTypeTelephonyPhonebookOnGroupModify->getName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineSwitchOldOfferPossibility
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineSwitchOldOfferPossibility::getSession()
	 * @uses OvhTypeTelephonyLineSwitchOldOfferPossibility::getNumbers()
	 * @uses OvhTypeTelephonyLineSwitchOldOfferPossibility::getCountry()
	 * @param OvhTypeTelephonyLineSwitchOldOfferPossibility TelephonyLineSwitchOldOfferPossibility
	 * @return OvhTypeTelephonyLineSwitchOldOfferPossibilityResponse
	 */
	public function telephonyLineSwitchOldOfferPossibility(OvhTypeTelephonyLineSwitchOldOfferPossibility $_ovhTypeTelephonyLineSwitchOldOfferPossibility)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineSwitchOldOfferPossibilityResponse(self::getSoapClient()->telephonyLineSwitchOldOfferPossibility($_ovhTypeTelephonyLineSwitchOldOfferPossibility->getSession(),$_ovhTypeTelephonyLineSwitchOldOfferPossibility->getNumbers(),$_ovhTypeTelephonyLineSwitchOldOfferPossibility->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyHuntingModificationAnonymousCallRejection
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyHuntingModificationAnonymousCallRejection::getSession()
	 * @uses OvhTypeTelephonyHuntingModificationAnonymousCallRejection::getNumber()
	 * @uses OvhTypeTelephonyHuntingModificationAnonymousCallRejection::getCountry()
	 * @uses OvhTypeTelephonyHuntingModificationAnonymousCallRejection::getBillingAccount()
	 * @uses OvhTypeTelephonyHuntingModificationAnonymousCallRejection::getAnonymousCallRejection()
	 * @param OvhTypeTelephonyHuntingModificationAnonymousCallRejection TelephonyHuntingModificationAnonymousCallRejection
	 * @return OvhTypeTelephonyHuntingModificationAnonymousCallRejectionResponse
	 */
	public function telephonyHuntingModificationAnonymousCallRejection(OvhTypeTelephonyHuntingModificationAnonymousCallRejection $_ovhTypeTelephonyHuntingModificationAnonymousCallRejection)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyHuntingModificationAnonymousCallRejectionResponse(self::getSoapClient()->telephonyHuntingModificationAnonymousCallRejection($_ovhTypeTelephonyHuntingModificationAnonymousCallRejection->getSession(),$_ovhTypeTelephonyHuntingModificationAnonymousCallRejection->getNumber(),$_ovhTypeTelephonyHuntingModificationAnonymousCallRejection->getCountry(),$_ovhTypeTelephonyHuntingModificationAnonymousCallRejection->getBillingAccount(),$_ovhTypeTelephonyHuntingModificationAnonymousCallRejection->getAnonymousCallRejection())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyNumberGetBillingAccount
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyNumberGetBillingAccount::getSession()
	 * @uses OvhTypeTelephonyNumberGetBillingAccount::getNumber()
	 * @uses OvhTypeTelephonyNumberGetBillingAccount::getCountry()
	 * @param OvhTypeTelephonyNumberGetBillingAccount TelephonyNumberGetBillingAccount
	 * @return OvhTypeTelephonyNumberGetBillingAccountResponse
	 */
	public function telephonyNumberGetBillingAccount(OvhTypeTelephonyNumberGetBillingAccount $_ovhTypeTelephonyNumberGetBillingAccount)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyNumberGetBillingAccountResponse(self::getSoapClient()->telephonyNumberGetBillingAccount($_ovhTypeTelephonyNumberGetBillingAccount->getSession(),$_ovhTypeTelephonyNumberGetBillingAccount->getNumber(),$_ovhTypeTelephonyNumberGetBillingAccount->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyTonesOptionsList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyTonesOptionsList::getSession()
	 * @uses OvhTypeTelephonyTonesOptionsList::getNumber()
	 * @uses OvhTypeTelephonyTonesOptionsList::getCountry()
	 * @param OvhTypeTelephonyTonesOptionsList TelephonyTonesOptionsList
	 * @return OvhTypeTelephonyTonesOptionsListResponse
	 */
	public function telephonyTonesOptionsList(OvhTypeTelephonyTonesOptionsList $_ovhTypeTelephonyTonesOptionsList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyTonesOptionsListResponse(self::getSoapClient()->telephonyTonesOptionsList($_ovhTypeTelephonyTonesOptionsList->getSession(),$_ovhTypeTelephonyTonesOptionsList->getNumber(),$_ovhTypeTelephonyTonesOptionsList->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyListSummationCallsFromNumber
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyListSummationCallsFromNumber::getSession()
	 * @uses OvhTypeTelephonyListSummationCallsFromNumber::getNumber()
	 * @uses OvhTypeTelephonyListSummationCallsFromNumber::getCountry()
	 * @uses OvhTypeTelephonyListSummationCallsFromNumber::getReversableDelay()
	 * @uses OvhTypeTelephonyListSummationCallsFromNumber::getSortOrder()
	 * @uses OvhTypeTelephonyListSummationCallsFromNumber::getSortField()
	 * @param OvhTypeTelephonyListSummationCallsFromNumber TelephonyListSummationCallsFromNumber
	 * @return OvhTypeTelephonyListSummationCallsFromNumberResponse
	 */
	public function telephonyListSummationCallsFromNumber(OvhTypeTelephonyListSummationCallsFromNumber $_ovhTypeTelephonyListSummationCallsFromNumber)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyListSummationCallsFromNumberResponse(self::getSoapClient()->telephonyListSummationCallsFromNumber($_ovhTypeTelephonyListSummationCallsFromNumber->getSession(),$_ovhTypeTelephonyListSummationCallsFromNumber->getNumber(),$_ovhTypeTelephonyListSummationCallsFromNumber->getCountry(),$_ovhTypeTelephonyListSummationCallsFromNumber->getReversableDelay(),$_ovhTypeTelephonyListSummationCallsFromNumber->getSortOrder(),$_ovhTypeTelephonyListSummationCallsFromNumber->getSortField())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookContactModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookContactModify::getSession()
	 * @uses OvhTypeTelephonyPhonebookContactModify::getNumber()
	 * @uses OvhTypeTelephonyPhonebookContactModify::getCountry()
	 * @uses OvhTypeTelephonyPhonebookContactModify::getId()
	 * @uses OvhTypeTelephonyPhonebookContactModify::getName()
	 * @uses OvhTypeTelephonyPhonebookContactModify::getSurname()
	 * @uses OvhTypeTelephonyPhonebookContactModify::getWorkPhone()
	 * @uses OvhTypeTelephonyPhonebookContactModify::getWorkMobile()
	 * @uses OvhTypeTelephonyPhonebookContactModify::getHomePhone()
	 * @uses OvhTypeTelephonyPhonebookContactModify::getHomeMobile()
	 * @uses OvhTypeTelephonyPhonebookContactModify::getGroup()
	 * @param OvhTypeTelephonyPhonebookContactModify TelephonyPhonebookContactModify
	 * @return OvhTypeTelephonyPhonebookContactModifyResponse
	 */
	public function telephonyPhonebookContactModify(OvhTypeTelephonyPhonebookContactModify $_ovhTypeTelephonyPhonebookContactModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookContactModifyResponse(self::getSoapClient()->telephonyPhonebookContactModify($_ovhTypeTelephonyPhonebookContactModify->getSession(),$_ovhTypeTelephonyPhonebookContactModify->getNumber(),$_ovhTypeTelephonyPhonebookContactModify->getCountry(),$_ovhTypeTelephonyPhonebookContactModify->getId(),$_ovhTypeTelephonyPhonebookContactModify->getName(),$_ovhTypeTelephonyPhonebookContactModify->getSurname(),$_ovhTypeTelephonyPhonebookContactModify->getWorkPhone(),$_ovhTypeTelephonyPhonebookContactModify->getWorkMobile(),$_ovhTypeTelephonyPhonebookContactModify->getHomePhone(),$_ovhTypeTelephonyPhonebookContactModify->getHomeMobile(),$_ovhTypeTelephonyPhonebookContactModify->getGroup())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineList::getSession()
	 * @uses OvhTypeTelephonyLineList::getBillingAccount()
	 * @param OvhTypeTelephonyLineList TelephonyLineList
	 * @return OvhTypeTelephonyLineListResponse
	 */
	public function telephonyLineList(OvhTypeTelephonyLineList $_ovhTypeTelephonyLineList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineListResponse(self::getSoapClient()->telephonyLineList($_ovhTypeTelephonyLineList->getSession(),$_ovhTypeTelephonyLineList->getBillingAccount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineOptionsModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineOptionsModify::getSession()
	 * @uses OvhTypeTelephonyLineOptionsModify::getNumber()
	 * @uses OvhTypeTelephonyLineOptionsModify::getCountry()
	 * @uses OvhTypeTelephonyLineOptionsModify::getIdentificationRestriction()
	 * @uses OvhTypeTelephonyLineOptionsModify::getAnonymousCallRejection()
	 * @uses OvhTypeTelephonyLineOptionsModify::getDoNotDisturb()
	 * @uses OvhTypeTelephonyLineOptionsModify::getAbsentSuscriber()
	 * @uses OvhTypeTelephonyLineOptionsModify::getLockOutCall()
	 * @uses OvhTypeTelephonyLineOptionsModify::getLockOutCallPassword()
	 * @uses OvhTypeTelephonyLineOptionsModify::getForwardUnconditional()
	 * @uses OvhTypeTelephonyLineOptionsModify::getForwardUnconditionalNumber()
	 * @uses OvhTypeTelephonyLineOptionsModify::getForwardNoReply()
	 * @uses OvhTypeTelephonyLineOptionsModify::getForwardNoReplyDelay()
	 * @uses OvhTypeTelephonyLineOptionsModify::getForwardNoReplyNumber()
	 * @uses OvhTypeTelephonyLineOptionsModify::getForwardBusy()
	 * @uses OvhTypeTelephonyLineOptionsModify::getForwardBusyNumber()
	 * @uses OvhTypeTelephonyLineOptionsModify::getForwardBackup()
	 * @uses OvhTypeTelephonyLineOptionsModify::getForwardBackupNumber()
	 * @uses OvhTypeTelephonyLineOptionsModify::getDisplayCallNumber()
	 * @uses OvhTypeTelephonyLineOptionsModify::getCallWaiting()
	 * @uses OvhTypeTelephonyLineOptionsModify::getForwardNoReplyNature()
	 * @uses OvhTypeTelephonyLineOptionsModify::getForwardBackupNature()
	 * @uses OvhTypeTelephonyLineOptionsModify::getForwardUnconditionalNature()
	 * @uses OvhTypeTelephonyLineOptionsModify::getForwardBusyNature()
	 * @param OvhTypeTelephonyLineOptionsModify TelephonyLineOptionsModify
	 * @return OvhTypeTelephonyLineOptionsModifyResponse
	 */
	public function telephonyLineOptionsModify(OvhTypeTelephonyLineOptionsModify $_ovhTypeTelephonyLineOptionsModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineOptionsModifyResponse(self::getSoapClient()->telephonyLineOptionsModify($_ovhTypeTelephonyLineOptionsModify->getSession(),$_ovhTypeTelephonyLineOptionsModify->getNumber(),$_ovhTypeTelephonyLineOptionsModify->getCountry(),$_ovhTypeTelephonyLineOptionsModify->getIdentificationRestriction(),$_ovhTypeTelephonyLineOptionsModify->getAnonymousCallRejection(),$_ovhTypeTelephonyLineOptionsModify->getDoNotDisturb(),$_ovhTypeTelephonyLineOptionsModify->getAbsentSuscriber(),$_ovhTypeTelephonyLineOptionsModify->getLockOutCall(),$_ovhTypeTelephonyLineOptionsModify->getLockOutCallPassword(),$_ovhTypeTelephonyLineOptionsModify->getForwardUnconditional(),$_ovhTypeTelephonyLineOptionsModify->getForwardUnconditionalNumber(),$_ovhTypeTelephonyLineOptionsModify->getForwardNoReply(),$_ovhTypeTelephonyLineOptionsModify->getForwardNoReplyDelay(),$_ovhTypeTelephonyLineOptionsModify->getForwardNoReplyNumber(),$_ovhTypeTelephonyLineOptionsModify->getForwardBusy(),$_ovhTypeTelephonyLineOptionsModify->getForwardBusyNumber(),$_ovhTypeTelephonyLineOptionsModify->getForwardBackup(),$_ovhTypeTelephonyLineOptionsModify->getForwardBackupNumber(),$_ovhTypeTelephonyLineOptionsModify->getDisplayCallNumber(),$_ovhTypeTelephonyLineOptionsModify->getCallWaiting(),$_ovhTypeTelephonyLineOptionsModify->getForwardNoReplyNature(),$_ovhTypeTelephonyLineOptionsModify->getForwardBackupNature(),$_ovhTypeTelephonyLineOptionsModify->getForwardUnconditionalNature(),$_ovhTypeTelephonyLineOptionsModify->getForwardBusyNature())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyHuntingGenericScreenSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyHuntingGenericScreenSet::getSession()
	 * @uses OvhTypeTelephonyHuntingGenericScreenSet::getNumber()
	 * @uses OvhTypeTelephonyHuntingGenericScreenSet::getCountry()
	 * @uses OvhTypeTelephonyHuntingGenericScreenSet::getTimesStart()
	 * @uses OvhTypeTelephonyHuntingGenericScreenSet::getTimesEnd()
	 * @uses OvhTypeTelephonyHuntingGenericScreenSet::getDaysType()
	 * @uses OvhTypeTelephonyHuntingGenericScreenSet::getForwardPolicyIndex()
	 * @param OvhTypeTelephonyHuntingGenericScreenSet TelephonyHuntingGenericScreenSet
	 * @return OvhTypeTelephonyHuntingGenericScreenSetResponse
	 */
	public function telephonyHuntingGenericScreenSet(OvhTypeTelephonyHuntingGenericScreenSet $_ovhTypeTelephonyHuntingGenericScreenSet)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyHuntingGenericScreenSetResponse(self::getSoapClient()->telephonyHuntingGenericScreenSet($_ovhTypeTelephonyHuntingGenericScreenSet->getSession(),$_ovhTypeTelephonyHuntingGenericScreenSet->getNumber(),$_ovhTypeTelephonyHuntingGenericScreenSet->getCountry(),$_ovhTypeTelephonyHuntingGenericScreenSet->getTimesStart(),$_ovhTypeTelephonyHuntingGenericScreenSet->getTimesEnd(),$_ovhTypeTelephonyHuntingGenericScreenSet->getDaysType(),$_ovhTypeTelephonyHuntingGenericScreenSet->getForwardPolicyIndex())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyVxmlAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyVxmlAdd::getSession()
	 * @uses OvhTypeTelephonyVxmlAdd::getNumber()
	 * @uses OvhTypeTelephonyVxmlAdd::getCountry()
	 * @uses OvhTypeTelephonyVxmlAdd::getUrl()
	 * @param OvhTypeTelephonyVxmlAdd TelephonyVxmlAdd
	 * @return OvhTypeTelephonyVxmlAddResponse
	 */
	public function telephonyVxmlAdd(OvhTypeTelephonyVxmlAdd $_ovhTypeTelephonyVxmlAdd)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyVxmlAddResponse(self::getSoapClient()->telephonyVxmlAdd($_ovhTypeTelephonyVxmlAdd->getSession(),$_ovhTypeTelephonyVxmlAdd->getNumber(),$_ovhTypeTelephonyVxmlAdd->getCountry(),$_ovhTypeTelephonyVxmlAdd->getUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFaxCampaignStartStop
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFaxCampaignStartStop::getSession()
	 * @uses OvhTypeTelephonyFaxCampaignStartStop::getNumber()
	 * @uses OvhTypeTelephonyFaxCampaignStartStop::getCountry()
	 * @uses OvhTypeTelephonyFaxCampaignStartStop::getReference()
	 * @uses OvhTypeTelephonyFaxCampaignStartStop::getForceStart()
	 * @param OvhTypeTelephonyFaxCampaignStartStop TelephonyFaxCampaignStartStop
	 * @return OvhTypeTelephonyFaxCampaignStartStopResponse
	 */
	public function telephonyFaxCampaignStartStop(OvhTypeTelephonyFaxCampaignStartStop $_ovhTypeTelephonyFaxCampaignStartStop)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFaxCampaignStartStopResponse(self::getSoapClient()->telephonyFaxCampaignStartStop($_ovhTypeTelephonyFaxCampaignStartStop->getSession(),$_ovhTypeTelephonyFaxCampaignStartStop->getNumber(),$_ovhTypeTelephonyFaxCampaignStartStop->getCountry(),$_ovhTypeTelephonyFaxCampaignStartStop->getReference(),$_ovhTypeTelephonyFaxCampaignStartStop->getForceStart())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyDirectoryModifyAddress
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getSession()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getCallNumber()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getCountryCode()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getName()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getFirstName()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getWayNumber()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getWayNumberExtra()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getWayType()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getWayName()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getAddressExtra()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getUrbanDistrict()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getPostBox()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getCedex()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getPostCode()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getCity()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getCountry()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getEmail()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getLegalForm()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getSocialNomination()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getPJSocialNomination()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getSocialNominationExtra()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getOccupation()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getSiret()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getApe()
	 * @uses OvhTypeTelephonyDirectoryModifyAddress::getPJCode()
	 * @param OvhTypeTelephonyDirectoryModifyAddress TelephonyDirectoryModifyAddress
	 * @return OvhTypeTelephonyDirectoryModifyAddressResponse
	 */
	public function telephonyDirectoryModifyAddress(OvhTypeTelephonyDirectoryModifyAddress $_ovhTypeTelephonyDirectoryModifyAddress)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyDirectoryModifyAddressResponse(self::getSoapClient()->telephonyDirectoryModifyAddress($_ovhTypeTelephonyDirectoryModifyAddress->getSession(),$_ovhTypeTelephonyDirectoryModifyAddress->getCallNumber(),$_ovhTypeTelephonyDirectoryModifyAddress->getCountryCode(),$_ovhTypeTelephonyDirectoryModifyAddress->getName(),$_ovhTypeTelephonyDirectoryModifyAddress->getFirstName(),$_ovhTypeTelephonyDirectoryModifyAddress->getWayNumber(),$_ovhTypeTelephonyDirectoryModifyAddress->getWayNumberExtra(),$_ovhTypeTelephonyDirectoryModifyAddress->getWayType(),$_ovhTypeTelephonyDirectoryModifyAddress->getWayName(),$_ovhTypeTelephonyDirectoryModifyAddress->getAddressExtra(),$_ovhTypeTelephonyDirectoryModifyAddress->getUrbanDistrict(),$_ovhTypeTelephonyDirectoryModifyAddress->getPostBox(),$_ovhTypeTelephonyDirectoryModifyAddress->getCedex(),$_ovhTypeTelephonyDirectoryModifyAddress->getPostCode(),$_ovhTypeTelephonyDirectoryModifyAddress->getCity(),$_ovhTypeTelephonyDirectoryModifyAddress->getCountry(),$_ovhTypeTelephonyDirectoryModifyAddress->getEmail(),$_ovhTypeTelephonyDirectoryModifyAddress->getLegalForm(),$_ovhTypeTelephonyDirectoryModifyAddress->getSocialNomination(),$_ovhTypeTelephonyDirectoryModifyAddress->getPJSocialNomination(),$_ovhTypeTelephonyDirectoryModifyAddress->getSocialNominationExtra(),$_ovhTypeTelephonyDirectoryModifyAddress->getOccupation(),$_ovhTypeTelephonyDirectoryModifyAddress->getSiret(),$_ovhTypeTelephonyDirectoryModifyAddress->getApe(),$_ovhTypeTelephonyDirectoryModifyAddress->getPJCode())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySecurityDepositCredit
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySecurityDepositCredit::getSession()
	 * @uses OvhTypeTelephonySecurityDepositCredit::getBillingAccount()
	 * @uses OvhTypeTelephonySecurityDepositCredit::getAmount()
	 * @param OvhTypeTelephonySecurityDepositCredit TelephonySecurityDepositCredit
	 * @return OvhTypeTelephonySecurityDepositCreditResponse
	 */
	public function telephonySecurityDepositCredit(OvhTypeTelephonySecurityDepositCredit $_ovhTypeTelephonySecurityDepositCredit)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySecurityDepositCreditResponse(self::getSoapClient()->telephonySecurityDepositCredit($_ovhTypeTelephonySecurityDepositCredit->getSession(),$_ovhTypeTelephonySecurityDepositCredit->getBillingAccount(),$_ovhTypeTelephonySecurityDepositCredit->getAmount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineOrder
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineOrder::getSession()
	 * @uses OvhTypeTelephonyLineOrder::getBillingAccount()
	 * @uses OvhTypeTelephonyLineOrder::getOffer()
	 * @uses OvhTypeTelephonyLineOrder::getPrefix()
	 * @uses OvhTypeTelephonyLineOrder::getQuantity()
	 * @uses OvhTypeTelephonyLineOrder::getPayWithPoints()
	 * @param OvhTypeTelephonyLineOrder TelephonyLineOrder
	 * @return OvhTypeTelephonyLineOrderResponse
	 */
	public function telephonyLineOrder(OvhTypeTelephonyLineOrder $_ovhTypeTelephonyLineOrder)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineOrderResponse(self::getSoapClient()->telephonyLineOrder($_ovhTypeTelephonyLineOrder->getSession(),$_ovhTypeTelephonyLineOrder->getBillingAccount(),$_ovhTypeTelephonyLineOrder->getOffer(),$_ovhTypeTelephonyLineOrder->getPrefix(),$_ovhTypeTelephonyLineOrder->getQuantity(),$_ovhTypeTelephonyLineOrder->getPayWithPoints())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFunctionKeyDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFunctionKeyDel::getSession()
	 * @uses OvhTypeTelephonyFunctionKeyDel::getNumber()
	 * @uses OvhTypeTelephonyFunctionKeyDel::getCountry()
	 * @uses OvhTypeTelephonyFunctionKeyDel::getKeyNum()
	 * @param OvhTypeTelephonyFunctionKeyDel TelephonyFunctionKeyDel
	 * @return OvhTypeTelephonyFunctionKeyDelResponse
	 */
	public function telephonyFunctionKeyDel(OvhTypeTelephonyFunctionKeyDel $_ovhTypeTelephonyFunctionKeyDel)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFunctionKeyDelResponse(self::getSoapClient()->telephonyFunctionKeyDel($_ovhTypeTelephonyFunctionKeyDel->getSession(),$_ovhTypeTelephonyFunctionKeyDel->getNumber(),$_ovhTypeTelephonyFunctionKeyDel->getCountry(),$_ovhTypeTelephonyFunctionKeyDel->getKeyNum())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyNicGetSipDomain
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyNicGetSipDomain::getSession()
	 * @param OvhTypeTelephonyNicGetSipDomain TelephonyNicGetSipDomain
	 * @return OvhTypeTelephonyNicGetSipDomainResponse
	 */
	public function telephonyNicGetSipDomain(OvhTypeTelephonyNicGetSipDomain $_ovhTypeTelephonyNicGetSipDomain)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyNicGetSipDomainResponse(self::getSoapClient()->telephonyNicGetSipDomain($_ovhTypeTelephonyNicGetSipDomain->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsUserCreditLeft
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsUserCreditLeft::getSmsAccount()
	 * @uses OvhTypeTelephonySmsUserCreditLeft::getLogin()
	 * @uses OvhTypeTelephonySmsUserCreditLeft::getPassword()
	 * @param OvhTypeTelephonySmsUserCreditLeft TelephonySmsUserCreditLeft
	 * @return OvhTypeTelephonySmsUserCreditLeftResponse
	 */
	public function telephonySmsUserCreditLeft(OvhTypeTelephonySmsUserCreditLeft $_ovhTypeTelephonySmsUserCreditLeft)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsUserCreditLeftResponse(self::getSoapClient()->telephonySmsUserCreditLeft($_ovhTypeTelephonySmsUserCreditLeft->getSmsAccount(),$_ovhTypeTelephonySmsUserCreditLeft->getLogin(),$_ovhTypeTelephonySmsUserCreditLeft->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPortabilityOrder
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPortabilityOrder::getSession()
	 * @uses OvhTypeTelephonyPortabilityOrder::getBillingAccount()
	 * @uses OvhTypeTelephonyPortabilityOrder::getOffer()
	 * @uses OvhTypeTelephonyPortabilityOrder::getDesireDate()
	 * @uses OvhTypeTelephonyPortabilityOrder::getCallNumber()
	 * @uses OvhTypeTelephonyPortabilityOrder::getCustContactName()
	 * @uses OvhTypeTelephonyPortabilityOrder::getCustContactNumber()
	 * @uses OvhTypeTelephonyPortabilityOrder::getCustName()
	 * @uses OvhTypeTelephonyPortabilityOrder::getCustSiret()
	 * @uses OvhTypeTelephonyPortabilityOrder::getCustStreetName()
	 * @uses OvhTypeTelephonyPortabilityOrder::getCustStreetNumber()
	 * @uses OvhTypeTelephonyPortabilityOrder::getCustBuilding()
	 * @uses OvhTypeTelephonyPortabilityOrder::getCustStair()
	 * @uses OvhTypeTelephonyPortabilityOrder::getCustFloor()
	 * @uses OvhTypeTelephonyPortabilityOrder::getCustDoor()
	 * @uses OvhTypeTelephonyPortabilityOrder::getCustZip()
	 * @uses OvhTypeTelephonyPortabilityOrder::getCustCity()
	 * @uses OvhTypeTelephonyPortabilityOrder::getComment()
	 * @uses OvhTypeTelephonyPortabilityOrder::getEvenPorted()
	 * @uses OvhTypeTelephonyPortabilityOrder::getExtraNumbers()
	 * @param OvhTypeTelephonyPortabilityOrder TelephonyPortabilityOrder
	 * @return OvhTypeTelephonyPortabilityOrderResponse
	 */
	public function telephonyPortabilityOrder(OvhTypeTelephonyPortabilityOrder $_ovhTypeTelephonyPortabilityOrder)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPortabilityOrderResponse(self::getSoapClient()->telephonyPortabilityOrder($_ovhTypeTelephonyPortabilityOrder->getSession(),$_ovhTypeTelephonyPortabilityOrder->getBillingAccount(),$_ovhTypeTelephonyPortabilityOrder->getOffer(),$_ovhTypeTelephonyPortabilityOrder->getDesireDate(),$_ovhTypeTelephonyPortabilityOrder->getCallNumber(),$_ovhTypeTelephonyPortabilityOrder->getCustContactName(),$_ovhTypeTelephonyPortabilityOrder->getCustContactNumber(),$_ovhTypeTelephonyPortabilityOrder->getCustName(),$_ovhTypeTelephonyPortabilityOrder->getCustSiret(),$_ovhTypeTelephonyPortabilityOrder->getCustStreetName(),$_ovhTypeTelephonyPortabilityOrder->getCustStreetNumber(),$_ovhTypeTelephonyPortabilityOrder->getCustBuilding(),$_ovhTypeTelephonyPortabilityOrder->getCustStair(),$_ovhTypeTelephonyPortabilityOrder->getCustFloor(),$_ovhTypeTelephonyPortabilityOrder->getCustDoor(),$_ovhTypeTelephonyPortabilityOrder->getCustZip(),$_ovhTypeTelephonyPortabilityOrder->getCustCity(),$_ovhTypeTelephonyPortabilityOrder->getComment(),$_ovhTypeTelephonyPortabilityOrder->getEvenPorted(),$_ovhTypeTelephonyPortabilityOrder->getExtraNumbers())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyVoicemailMailboxDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyVoicemailMailboxDelete::getSession()
	 * @uses OvhTypeTelephonyVoicemailMailboxDelete::getNumber()
	 * @uses OvhTypeTelephonyVoicemailMailboxDelete::getCountry()
	 * @uses OvhTypeTelephonyVoicemailMailboxDelete::getIds()
	 * @uses OvhTypeTelephonyVoicemailMailboxDelete::getFolder()
	 * @param OvhTypeTelephonyVoicemailMailboxDelete TelephonyVoicemailMailboxDelete
	 * @return OvhTypeTelephonyVoicemailMailboxDeleteResponse
	 */
	public function telephonyVoicemailMailboxDelete(OvhTypeTelephonyVoicemailMailboxDelete $_ovhTypeTelephonyVoicemailMailboxDelete)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyVoicemailMailboxDeleteResponse(self::getSoapClient()->telephonyVoicemailMailboxDelete($_ovhTypeTelephonyVoicemailMailboxDelete->getSession(),$_ovhTypeTelephonyVoicemailMailboxDelete->getNumber(),$_ovhTypeTelephonyVoicemailMailboxDelete->getCountry(),$_ovhTypeTelephonyVoicemailMailboxDelete->getIds(),$_ovhTypeTelephonyVoicemailMailboxDelete->getFolder())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyBillingAccountDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyBillingAccountDel::getSession()
	 * @uses OvhTypeTelephonyBillingAccountDel::getBillingAccount()
	 * @uses OvhTypeTelephonyBillingAccountDel::getCancelDelete()
	 * @param OvhTypeTelephonyBillingAccountDel TelephonyBillingAccountDel
	 * @return OvhTypeTelephonyBillingAccountDelResponse
	 */
	public function telephonyBillingAccountDel(OvhTypeTelephonyBillingAccountDel $_ovhTypeTelephonyBillingAccountDel)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyBillingAccountDelResponse(self::getSoapClient()->telephonyBillingAccountDel($_ovhTypeTelephonyBillingAccountDel->getSession(),$_ovhTypeTelephonyBillingAccountDel->getBillingAccount(),$_ovhTypeTelephonyBillingAccountDel->getCancelDelete())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyNumberClean
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyNumberClean::getSession()
	 * @uses OvhTypeTelephonyNumberClean::getNumber()
	 * @uses OvhTypeTelephonyNumberClean::getCountry()
	 * @param OvhTypeTelephonyNumberClean TelephonyNumberClean
	 * @return OvhTypeTelephonyNumberCleanResponse
	 */
	public function telephonyNumberClean(OvhTypeTelephonyNumberClean $_ovhTypeTelephonyNumberClean)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyNumberCleanResponse(self::getSoapClient()->telephonyNumberClean($_ovhTypeTelephonyNumberClean->getSession(),$_ovhTypeTelephonyNumberClean->getNumber(),$_ovhTypeTelephonyNumberClean->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPlugAndPhoneOperation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPlugAndPhoneOperation::getSession()
	 * @uses OvhTypeTelephonyPlugAndPhoneOperation::getNumber()
	 * @uses OvhTypeTelephonyPlugAndPhoneOperation::getCountry()
	 * @uses OvhTypeTelephonyPlugAndPhoneOperation::getOperation()
	 * @param OvhTypeTelephonyPlugAndPhoneOperation TelephonyPlugAndPhoneOperation
	 * @return OvhTypeTelephonyPlugAndPhoneOperationResponse
	 */
	public function telephonyPlugAndPhoneOperation(OvhTypeTelephonyPlugAndPhoneOperation $_ovhTypeTelephonyPlugAndPhoneOperation)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPlugAndPhoneOperationResponse(self::getSoapClient()->telephonyPlugAndPhoneOperation($_ovhTypeTelephonyPlugAndPhoneOperation->getSession(),$_ovhTypeTelephonyPlugAndPhoneOperation->getNumber(),$_ovhTypeTelephonyPlugAndPhoneOperation->getCountry(),$_ovhTypeTelephonyPlugAndPhoneOperation->getOperation())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsSetQuotaNotification
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsSetQuotaNotification::getSession()
	 * @uses OvhTypeTelephonySmsSetQuotaNotification::getSmsAccount()
	 * @uses OvhTypeTelephonySmsSetQuotaNotification::getLogin()
	 * @uses OvhTypeTelephonySmsSetQuotaNotification::getSupport()
	 * @uses OvhTypeTelephonySmsSetQuotaNotification::getAlertNumber()
	 * @uses OvhTypeTelephonySmsSetQuotaNotification::getAlertThreshold()
	 * @param OvhTypeTelephonySmsSetQuotaNotification TelephonySmsSetQuotaNotification
	 * @return OvhTypeTelephonySmsSetQuotaNotificationResponse
	 */
	public function telephonySmsSetQuotaNotification(OvhTypeTelephonySmsSetQuotaNotification $_ovhTypeTelephonySmsSetQuotaNotification)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsSetQuotaNotificationResponse(self::getSoapClient()->telephonySmsSetQuotaNotification($_ovhTypeTelephonySmsSetQuotaNotification->getSession(),$_ovhTypeTelephonySmsSetQuotaNotification->getSmsAccount(),$_ovhTypeTelephonySmsSetQuotaNotification->getLogin(),$_ovhTypeTelephonySmsSetQuotaNotification->getSupport(),$_ovhTypeTelephonySmsSetQuotaNotification->getAlertNumber(),$_ovhTypeTelephonySmsSetQuotaNotification->getAlertThreshold())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsUserList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsUserList::getSession()
	 * @uses OvhTypeTelephonySmsUserList::getSmsAccount()
	 * @param OvhTypeTelephonySmsUserList TelephonySmsUserList
	 * @return OvhTypeTelephonySmsUserListResponse
	 */
	public function telephonySmsUserList(OvhTypeTelephonySmsUserList $_ovhTypeTelephonySmsUserList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsUserListResponse(self::getSoapClient()->telephonySmsUserList($_ovhTypeTelephonySmsUserList->getSession(),$_ovhTypeTelephonySmsUserList->getSmsAccount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyHuntingInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyHuntingInfo::getSession()
	 * @uses OvhTypeTelephonyHuntingInfo::getNumber()
	 * @uses OvhTypeTelephonyHuntingInfo::getCountry()
	 * @param OvhTypeTelephonyHuntingInfo TelephonyHuntingInfo
	 * @return OvhTypeTelephonyHuntingInfoResponse
	 */
	public function telephonyHuntingInfo(OvhTypeTelephonyHuntingInfo $_ovhTypeTelephonyHuntingInfo)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyHuntingInfoResponse(self::getSoapClient()->telephonyHuntingInfo($_ovhTypeTelephonyHuntingInfo->getSession(),$_ovhTypeTelephonyHuntingInfo->getNumber(),$_ovhTypeTelephonyHuntingInfo->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookContactList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookContactList::getSession()
	 * @uses OvhTypeTelephonyPhonebookContactList::getNumber()
	 * @uses OvhTypeTelephonyPhonebookContactList::getCountry()
	 * @uses OvhTypeTelephonyPhonebookContactList::getId()
	 * @uses OvhTypeTelephonyPhonebookContactList::getGroup()
	 * @param OvhTypeTelephonyPhonebookContactList TelephonyPhonebookContactList
	 * @return OvhTypeTelephonyPhonebookContactListResponse
	 */
	public function telephonyPhonebookContactList(OvhTypeTelephonyPhonebookContactList $_ovhTypeTelephonyPhonebookContactList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookContactListResponse(self::getSoapClient()->telephonyPhonebookContactList($_ovhTypeTelephonyPhonebookContactList->getSession(),$_ovhTypeTelephonyPhonebookContactList->getNumber(),$_ovhTypeTelephonyPhonebookContactList->getCountry(),$_ovhTypeTelephonyPhonebookContactList->getId(),$_ovhTypeTelephonyPhonebookContactList->getGroup())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyConferenceLanguageModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyConferenceLanguageModify::getSession()
	 * @uses OvhTypeTelephonyConferenceLanguageModify::getNumber()
	 * @uses OvhTypeTelephonyConferenceLanguageModify::getCountry()
	 * @uses OvhTypeTelephonyConferenceLanguageModify::getRoom()
	 * @uses OvhTypeTelephonyConferenceLanguageModify::getNewLanguage()
	 * @param OvhTypeTelephonyConferenceLanguageModify TelephonyConferenceLanguageModify
	 * @return OvhTypeTelephonyConferenceLanguageModifyResponse
	 */
	public function telephonyConferenceLanguageModify(OvhTypeTelephonyConferenceLanguageModify $_ovhTypeTelephonyConferenceLanguageModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyConferenceLanguageModifyResponse(self::getSoapClient()->telephonyConferenceLanguageModify($_ovhTypeTelephonyConferenceLanguageModify->getSession(),$_ovhTypeTelephonyConferenceLanguageModify->getNumber(),$_ovhTypeTelephonyConferenceLanguageModify->getCountry(),$_ovhTypeTelephonyConferenceLanguageModify->getRoom(),$_ovhTypeTelephonyConferenceLanguageModify->getNewLanguage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsUserPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsUserPassword::getSession()
	 * @uses OvhTypeTelephonySmsUserPassword::getSmsAccount()
	 * @uses OvhTypeTelephonySmsUserPassword::getLogin()
	 * @uses OvhTypeTelephonySmsUserPassword::getPassword()
	 * @param OvhTypeTelephonySmsUserPassword TelephonySmsUserPassword
	 * @return OvhTypeTelephonySmsUserPasswordResponse
	 */
	public function telephonySmsUserPassword(OvhTypeTelephonySmsUserPassword $_ovhTypeTelephonySmsUserPassword)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsUserPasswordResponse(self::getSoapClient()->telephonySmsUserPassword($_ovhTypeTelephonySmsUserPassword->getSession(),$_ovhTypeTelephonySmsUserPassword->getSmsAccount(),$_ovhTypeTelephonySmsUserPassword->getLogin(),$_ovhTypeTelephonySmsUserPassword->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineGetOfferPrices
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineGetOfferPrices::getSession()
	 * @uses OvhTypeTelephonyLineGetOfferPrices::getBillingAccount()
	 * @param OvhTypeTelephonyLineGetOfferPrices TelephonyLineGetOfferPrices
	 * @return OvhTypeTelephonyLineGetOfferPricesResponse
	 */
	public function telephonyLineGetOfferPrices(OvhTypeTelephonyLineGetOfferPrices $_ovhTypeTelephonyLineGetOfferPrices)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineGetOfferPricesResponse(self::getSoapClient()->telephonyLineGetOfferPrices($_ovhTypeTelephonyLineGetOfferPrices->getSession(),$_ovhTypeTelephonyLineGetOfferPrices->getBillingAccount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsGetQuotaNotification
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsGetQuotaNotification::getSession()
	 * @uses OvhTypeTelephonySmsGetQuotaNotification::getSmsAccount()
	 * @uses OvhTypeTelephonySmsGetQuotaNotification::getLogin()
	 * @param OvhTypeTelephonySmsGetQuotaNotification TelephonySmsGetQuotaNotification
	 * @return OvhTypeTelephonySmsGetQuotaNotificationResponse
	 */
	public function telephonySmsGetQuotaNotification(OvhTypeTelephonySmsGetQuotaNotification $_ovhTypeTelephonySmsGetQuotaNotification)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsGetQuotaNotificationResponse(self::getSoapClient()->telephonySmsGetQuotaNotification($_ovhTypeTelephonySmsGetQuotaNotification->getSession(),$_ovhTypeTelephonySmsGetQuotaNotification->getSmsAccount(),$_ovhTypeTelephonySmsGetQuotaNotification->getLogin())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyHuntingModificationMode
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyHuntingModificationMode::getSession()
	 * @uses OvhTypeTelephonyHuntingModificationMode::getNumber()
	 * @uses OvhTypeTelephonyHuntingModificationMode::getCountry()
	 * @uses OvhTypeTelephonyHuntingModificationMode::getBillingAccount()
	 * @uses OvhTypeTelephonyHuntingModificationMode::getStrategy()
	 * @uses OvhTypeTelephonyHuntingModificationMode::getPattern()
	 * @param OvhTypeTelephonyHuntingModificationMode TelephonyHuntingModificationMode
	 * @return OvhTypeTelephonyHuntingModificationModeResponse
	 */
	public function telephonyHuntingModificationMode(OvhTypeTelephonyHuntingModificationMode $_ovhTypeTelephonyHuntingModificationMode)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyHuntingModificationModeResponse(self::getSoapClient()->telephonyHuntingModificationMode($_ovhTypeTelephonyHuntingModificationMode->getSession(),$_ovhTypeTelephonyHuntingModificationMode->getNumber(),$_ovhTypeTelephonyHuntingModificationMode->getCountry(),$_ovhTypeTelephonyHuntingModificationMode->getBillingAccount(),$_ovhTypeTelephonyHuntingModificationMode->getStrategy(),$_ovhTypeTelephonyHuntingModificationMode->getPattern())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyScreenListBlackWhiteChoice
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyScreenListBlackWhiteChoice::getSession()
	 * @uses OvhTypeTelephonyScreenListBlackWhiteChoice::getNumber()
	 * @uses OvhTypeTelephonyScreenListBlackWhiteChoice::getCountry()
	 * @param OvhTypeTelephonyScreenListBlackWhiteChoice TelephonyScreenListBlackWhiteChoice
	 * @return OvhTypeTelephonyScreenListBlackWhiteChoiceResponse
	 */
	public function telephonyScreenListBlackWhiteChoice(OvhTypeTelephonyScreenListBlackWhiteChoice $_ovhTypeTelephonyScreenListBlackWhiteChoice)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyScreenListBlackWhiteChoiceResponse(self::getSoapClient()->telephonyScreenListBlackWhiteChoice($_ovhTypeTelephonyScreenListBlackWhiteChoice->getSession(),$_ovhTypeTelephonyScreenListBlackWhiteChoice->getNumber(),$_ovhTypeTelephonyScreenListBlackWhiteChoice->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsDeleteCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsDeleteCsvAttachment::getSmsAccount()
	 * @uses OvhTypeTelephonySmsDeleteCsvAttachment::getIds()
	 * @param OvhTypeTelephonySmsDeleteCsvAttachment TelephonySmsDeleteCsvAttachment
	 * @return OvhTypeTelephonySmsDeleteCsvAttachmentResponse
	 */
	public function telephonySmsDeleteCsvAttachment(OvhTypeTelephonySmsDeleteCsvAttachment $_ovhTypeTelephonySmsDeleteCsvAttachment)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsDeleteCsvAttachmentResponse(self::getSoapClient()->telephonySmsDeleteCsvAttachment($_ovhTypeTelephonySmsDeleteCsvAttachment->getSmsAccount(),$_ovhTypeTelephonySmsDeleteCsvAttachment->getIds())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyNumberZoneAndPrefixList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyNumberZoneAndPrefixList::getSession()
	 * @param OvhTypeTelephonyNumberZoneAndPrefixList TelephonyNumberZoneAndPrefixList
	 * @return OvhTypeTelephonyNumberZoneAndPrefixListResponse
	 */
	public function telephonyNumberZoneAndPrefixList(OvhTypeTelephonyNumberZoneAndPrefixList $_ovhTypeTelephonyNumberZoneAndPrefixList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyNumberZoneAndPrefixListResponse(self::getSoapClient()->telephonyNumberZoneAndPrefixList($_ovhTypeTelephonyNumberZoneAndPrefixList->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineSetSipDomain
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineSetSipDomain::getSession()
	 * @uses OvhTypeTelephonyLineSetSipDomain::getNumber()
	 * @uses OvhTypeTelephonyLineSetSipDomain::getCountry()
	 * @uses OvhTypeTelephonyLineSetSipDomain::getDomain()
	 * @param OvhTypeTelephonyLineSetSipDomain TelephonyLineSetSipDomain
	 * @return OvhTypeTelephonyLineSetSipDomainResponse
	 */
	public function telephonyLineSetSipDomain(OvhTypeTelephonyLineSetSipDomain $_ovhTypeTelephonyLineSetSipDomain)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineSetSipDomainResponse(self::getSoapClient()->telephonyLineSetSipDomain($_ovhTypeTelephonyLineSetSipDomain->getSession(),$_ovhTypeTelephonyLineSetSipDomain->getNumber(),$_ovhTypeTelephonyLineSetSipDomain->getCountry(),$_ovhTypeTelephonyLineSetSipDomain->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyConferenceAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyConferenceAdd::getSession()
	 * @uses OvhTypeTelephonyConferenceAdd::getNumber()
	 * @uses OvhTypeTelephonyConferenceAdd::getCountry()
	 * @uses OvhTypeTelephonyConferenceAdd::getLanguage()
	 * @param OvhTypeTelephonyConferenceAdd TelephonyConferenceAdd
	 * @return OvhTypeTelephonyConferenceAddResponse
	 */
	public function telephonyConferenceAdd(OvhTypeTelephonyConferenceAdd $_ovhTypeTelephonyConferenceAdd)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyConferenceAddResponse(self::getSoapClient()->telephonyConferenceAdd($_ovhTypeTelephonyConferenceAdd->getSession(),$_ovhTypeTelephonyConferenceAdd->getNumber(),$_ovhTypeTelephonyConferenceAdd->getCountry(),$_ovhTypeTelephonyConferenceAdd->getLanguage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookOnGroupContactList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactList::getSession()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactList::getGroup()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactList::getId()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactList::getGroupName()
	 * @param OvhTypeTelephonyPhonebookOnGroupContactList TelephonyPhonebookOnGroupContactList
	 * @return OvhTypeTelephonyPhonebookOnGroupContactListResponse
	 */
	public function telephonyPhonebookOnGroupContactList(OvhTypeTelephonyPhonebookOnGroupContactList $_ovhTypeTelephonyPhonebookOnGroupContactList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookOnGroupContactListResponse(self::getSoapClient()->telephonyPhonebookOnGroupContactList($_ovhTypeTelephonyPhonebookOnGroupContactList->getSession(),$_ovhTypeTelephonyPhonebookOnGroupContactList->getGroup(),$_ovhTypeTelephonyPhonebookOnGroupContactList->getId(),$_ovhTypeTelephonyPhonebookOnGroupContactList->getGroupName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyDeleteLine
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyDeleteLine::getSession()
	 * @uses OvhTypeTelephonyDeleteLine::getNumber()
	 * @uses OvhTypeTelephonyDeleteLine::getCountry()
	 * @uses OvhTypeTelephonyDeleteLine::getCancelDelete()
	 * @param OvhTypeTelephonyDeleteLine TelephonyDeleteLine
	 * @return OvhTypeTelephonyDeleteLineResponse
	 */
	public function telephonyDeleteLine(OvhTypeTelephonyDeleteLine $_ovhTypeTelephonyDeleteLine)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyDeleteLineResponse(self::getSoapClient()->telephonyDeleteLine($_ovhTypeTelephonyDeleteLine->getSession(),$_ovhTypeTelephonyDeleteLine->getNumber(),$_ovhTypeTelephonyDeleteLine->getCountry(),$_ovhTypeTelephonyDeleteLine->getCancelDelete())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPortabilityStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPortabilityStatus::getSession()
	 * @param OvhTypeTelephonyPortabilityStatus TelephonyPortabilityStatus
	 * @return OvhTypeTelephonyPortabilityStatusResponse
	 */
	public function telephonyPortabilityStatus(OvhTypeTelephonyPortabilityStatus $_ovhTypeTelephonyPortabilityStatus)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPortabilityStatusResponse(self::getSoapClient()->telephonyPortabilityStatus($_ovhTypeTelephonyPortabilityStatus->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySecurityDepositInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySecurityDepositInfo::getSession()
	 * @uses OvhTypeTelephonySecurityDepositInfo::getBillingAccount()
	 * @param OvhTypeTelephonySecurityDepositInfo TelephonySecurityDepositInfo
	 * @return OvhTypeTelephonySecurityDepositInfoResponse
	 */
	public function telephonySecurityDepositInfo(OvhTypeTelephonySecurityDepositInfo $_ovhTypeTelephonySecurityDepositInfo)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySecurityDepositInfoResponse(self::getSoapClient()->telephonySecurityDepositInfo($_ovhTypeTelephonySecurityDepositInfo->getSession(),$_ovhTypeTelephonySecurityDepositInfo->getBillingAccount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsListCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsListCsvAttachment::getSmsAccount()
	 * @uses OvhTypeTelephonySmsListCsvAttachment::getId()
	 * @param OvhTypeTelephonySmsListCsvAttachment TelephonySmsListCsvAttachment
	 * @return OvhTypeTelephonySmsListCsvAttachmentResponse
	 */
	public function telephonySmsListCsvAttachment(OvhTypeTelephonySmsListCsvAttachment $_ovhTypeTelephonySmsListCsvAttachment)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsListCsvAttachmentResponse(self::getSoapClient()->telephonySmsListCsvAttachment($_ovhTypeTelephonySmsListCsvAttachment->getSmsAccount(),$_ovhTypeTelephonySmsListCsvAttachment->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyVxmlModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyVxmlModify::getSession()
	 * @uses OvhTypeTelephonyVxmlModify::getNumber()
	 * @uses OvhTypeTelephonyVxmlModify::getCountry()
	 * @uses OvhTypeTelephonyVxmlModify::getUrl()
	 * @param OvhTypeTelephonyVxmlModify TelephonyVxmlModify
	 * @return OvhTypeTelephonyVxmlModifyResponse
	 */
	public function telephonyVxmlModify(OvhTypeTelephonyVxmlModify $_ovhTypeTelephonyVxmlModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyVxmlModifyResponse(self::getSoapClient()->telephonyVxmlModify($_ovhTypeTelephonyVxmlModify->getSession(),$_ovhTypeTelephonyVxmlModify->getNumber(),$_ovhTypeTelephonyVxmlModify->getCountry(),$_ovhTypeTelephonyVxmlModify->getUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyConferenceAnnounceDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyConferenceAnnounceDelete::getSession()
	 * @uses OvhTypeTelephonyConferenceAnnounceDelete::getNumber()
	 * @uses OvhTypeTelephonyConferenceAnnounceDelete::getCountry()
	 * @uses OvhTypeTelephonyConferenceAnnounceDelete::getRoom()
	 * @uses OvhTypeTelephonyConferenceAnnounceDelete::getAnnounceType()
	 * @param OvhTypeTelephonyConferenceAnnounceDelete TelephonyConferenceAnnounceDelete
	 * @return OvhTypeTelephonyConferenceAnnounceDeleteResponse
	 */
	public function telephonyConferenceAnnounceDelete(OvhTypeTelephonyConferenceAnnounceDelete $_ovhTypeTelephonyConferenceAnnounceDelete)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyConferenceAnnounceDeleteResponse(self::getSoapClient()->telephonyConferenceAnnounceDelete($_ovhTypeTelephonyConferenceAnnounceDelete->getSession(),$_ovhTypeTelephonyConferenceAnnounceDelete->getNumber(),$_ovhTypeTelephonyConferenceAnnounceDelete->getCountry(),$_ovhTypeTelephonyConferenceAnnounceDelete->getRoom(),$_ovhTypeTelephonyConferenceAnnounceDelete->getAnnounceType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyScreenListInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyScreenListInfo::getSession()
	 * @uses OvhTypeTelephonyScreenListInfo::getNumber()
	 * @uses OvhTypeTelephonyScreenListInfo::getCountry()
	 * @uses OvhTypeTelephonyScreenListInfo::getScreenListType()
	 * @param OvhTypeTelephonyScreenListInfo TelephonyScreenListInfo
	 * @return OvhTypeTelephonyScreenListInfoResponse
	 */
	public function telephonyScreenListInfo(OvhTypeTelephonyScreenListInfo $_ovhTypeTelephonyScreenListInfo)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyScreenListInfoResponse(self::getSoapClient()->telephonyScreenListInfo($_ovhTypeTelephonyScreenListInfo->getSession(),$_ovhTypeTelephonyScreenListInfo->getNumber(),$_ovhTypeTelephonyScreenListInfo->getCountry(),$_ovhTypeTelephonyScreenListInfo->getScreenListType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineLogsOnGroup
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineLogsOnGroup::getGroup()
	 * @uses OvhTypeTelephonyLineLogsOnGroup::getPagingStart()
	 * @uses OvhTypeTelephonyLineLogsOnGroup::getPagingLimit()
	 * @param OvhTypeTelephonyLineLogsOnGroup TelephonyLineLogsOnGroup
	 * @return OvhTypeTelephonyLineLogsOnGroupResponse
	 */
	public function telephonyLineLogsOnGroup(OvhTypeTelephonyLineLogsOnGroup $_ovhTypeTelephonyLineLogsOnGroup)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineLogsOnGroupResponse(self::getSoapClient()->telephonyLineLogsOnGroup($_ovhTypeTelephonyLineLogsOnGroup->getGroup(),$_ovhTypeTelephonyLineLogsOnGroup->getPagingStart(),$_ovhTypeTelephonyLineLogsOnGroup->getPagingLimit())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyConferenceAnnouncesStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyConferenceAnnouncesStatus::getSession()
	 * @uses OvhTypeTelephonyConferenceAnnouncesStatus::getNumber()
	 * @uses OvhTypeTelephonyConferenceAnnouncesStatus::getCountry()
	 * @uses OvhTypeTelephonyConferenceAnnouncesStatus::getRoom()
	 * @param OvhTypeTelephonyConferenceAnnouncesStatus TelephonyConferenceAnnouncesStatus
	 * @return OvhTypeTelephonyConferenceAnnouncesStatusResponse
	 */
	public function telephonyConferenceAnnouncesStatus(OvhTypeTelephonyConferenceAnnouncesStatus $_ovhTypeTelephonyConferenceAnnouncesStatus)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyConferenceAnnouncesStatusResponse(self::getSoapClient()->telephonyConferenceAnnouncesStatus($_ovhTypeTelephonyConferenceAnnouncesStatus->getSession(),$_ovhTypeTelephonyConferenceAnnouncesStatus->getNumber(),$_ovhTypeTelephonyConferenceAnnouncesStatus->getCountry(),$_ovhTypeTelephonyConferenceAnnouncesStatus->getRoom())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookContactDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookContactDel::getSession()
	 * @uses OvhTypeTelephonyPhonebookContactDel::getNumber()
	 * @uses OvhTypeTelephonyPhonebookContactDel::getCountry()
	 * @uses OvhTypeTelephonyPhonebookContactDel::getId()
	 * @param OvhTypeTelephonyPhonebookContactDel TelephonyPhonebookContactDel
	 * @return OvhTypeTelephonyPhonebookContactDelResponse
	 */
	public function telephonyPhonebookContactDel(OvhTypeTelephonyPhonebookContactDel $_ovhTypeTelephonyPhonebookContactDel)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookContactDelResponse(self::getSoapClient()->telephonyPhonebookContactDel($_ovhTypeTelephonyPhonebookContactDel->getSession(),$_ovhTypeTelephonyPhonebookContactDel->getNumber(),$_ovhTypeTelephonyPhonebookContactDel->getCountry(),$_ovhTypeTelephonyPhonebookContactDel->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyRatesListCsv
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyRatesListCsv::getCountryCode()
	 * @uses OvhTypeTelephonyRatesListCsv::getType()
	 * @param OvhTypeTelephonyRatesListCsv TelephonyRatesListCsv
	 * @return OvhTypeTelephonyRatesListCsvResponse
	 */
	public function telephonyRatesListCsv(OvhTypeTelephonyRatesListCsv $_ovhTypeTelephonyRatesListCsv)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyRatesListCsvResponse(self::getSoapClient()->telephonyRatesListCsv($_ovhTypeTelephonyRatesListCsv->getCountryCode(),$_ovhTypeTelephonyRatesListCsv->getType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFMHuntingModificationAnonymousCallRejection
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFMHuntingModificationAnonymousCallRejection::getSession()
	 * @uses OvhTypeTelephonyFMHuntingModificationAnonymousCallRejection::getNumber()
	 * @uses OvhTypeTelephonyFMHuntingModificationAnonymousCallRejection::getCountry()
	 * @uses OvhTypeTelephonyFMHuntingModificationAnonymousCallRejection::getBillingAccount()
	 * @uses OvhTypeTelephonyFMHuntingModificationAnonymousCallRejection::getAnonymousCallRejection()
	 * @param OvhTypeTelephonyFMHuntingModificationAnonymousCallRejection TelephonyFMHuntingModificationAnonymousCallRejection
	 * @return OvhTypeTelephonyFMHuntingModificationAnonymousCallRejectionResponse
	 */
	public function telephonyFMHuntingModificationAnonymousCallRejection(OvhTypeTelephonyFMHuntingModificationAnonymousCallRejection $_ovhTypeTelephonyFMHuntingModificationAnonymousCallRejection)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFMHuntingModificationAnonymousCallRejectionResponse(self::getSoapClient()->telephonyFMHuntingModificationAnonymousCallRejection($_ovhTypeTelephonyFMHuntingModificationAnonymousCallRejection->getSession(),$_ovhTypeTelephonyFMHuntingModificationAnonymousCallRejection->getNumber(),$_ovhTypeTelephonyFMHuntingModificationAnonymousCallRejection->getCountry(),$_ovhTypeTelephonyFMHuntingModificationAnonymousCallRejection->getBillingAccount(),$_ovhTypeTelephonyFMHuntingModificationAnonymousCallRejection->getAnonymousCallRejection())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyDdiModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyDdiModify::getSession()
	 * @uses OvhTypeTelephonyDdiModify::getNumber()
	 * @uses OvhTypeTelephonyDdiModify::getCountry()
	 * @uses OvhTypeTelephonyDdiModify::getBillingAccount()
	 * @uses OvhTypeTelephonyDdiModify::getDestination()
	 * @param OvhTypeTelephonyDdiModify TelephonyDdiModify
	 * @return OvhTypeTelephonyDdiModifyResponse
	 */
	public function telephonyDdiModify(OvhTypeTelephonyDdiModify $_ovhTypeTelephonyDdiModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyDdiModifyResponse(self::getSoapClient()->telephonyDdiModify($_ovhTypeTelephonyDdiModify->getSession(),$_ovhTypeTelephonyDdiModify->getNumber(),$_ovhTypeTelephonyDdiModify->getCountry(),$_ovhTypeTelephonyDdiModify->getBillingAccount(),$_ovhTypeTelephonyDdiModify->getDestination())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyRedirectInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyRedirectInfo::getSession()
	 * @uses OvhTypeTelephonyRedirectInfo::getNumber()
	 * @uses OvhTypeTelephonyRedirectInfo::getCountry()
	 * @param OvhTypeTelephonyRedirectInfo TelephonyRedirectInfo
	 * @return OvhTypeTelephonyRedirectInfoResponse
	 */
	public function telephonyRedirectInfo(OvhTypeTelephonyRedirectInfo $_ovhTypeTelephonyRedirectInfo)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyRedirectInfoResponse(self::getSoapClient()->telephonyRedirectInfo($_ovhTypeTelephonyRedirectInfo->getSession(),$_ovhTypeTelephonyRedirectInfo->getNumber(),$_ovhTypeTelephonyRedirectInfo->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsSend
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsSend::getSession()
	 * @uses OvhTypeTelephonySmsSend::getSmsAccount()
	 * @uses OvhTypeTelephonySmsSend::getNumberFrom()
	 * @uses OvhTypeTelephonySmsSend::getNumberTo()
	 * @uses OvhTypeTelephonySmsSend::getMessage()
	 * @uses OvhTypeTelephonySmsSend::getSmsValidity()
	 * @uses OvhTypeTelephonySmsSend::getSmsClass()
	 * @uses OvhTypeTelephonySmsSend::getSmsDeferred()
	 * @uses OvhTypeTelephonySmsSend::getSmsPriority()
	 * @uses OvhTypeTelephonySmsSend::getSmsCoding()
	 * @uses OvhTypeTelephonySmsSend::getTag()
	 * @param OvhTypeTelephonySmsSend TelephonySmsSend
	 * @return OvhTypeTelephonySmsSendResponse
	 */
	public function telephonySmsSend(OvhTypeTelephonySmsSend $_ovhTypeTelephonySmsSend)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsSendResponse(self::getSoapClient()->telephonySmsSend($_ovhTypeTelephonySmsSend->getSession(),$_ovhTypeTelephonySmsSend->getSmsAccount(),$_ovhTypeTelephonySmsSend->getNumberFrom(),$_ovhTypeTelephonySmsSend->getNumberTo(),$_ovhTypeTelephonySmsSend->getMessage(),$_ovhTypeTelephonySmsSend->getSmsValidity(),$_ovhTypeTelephonySmsSend->getSmsClass(),$_ovhTypeTelephonySmsSend->getSmsDeferred(),$_ovhTypeTelephonySmsSend->getSmsPriority(),$_ovhTypeTelephonySmsSend->getSmsCoding(),$_ovhTypeTelephonySmsSend->getTag())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineGetSipDomain
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineGetSipDomain::getSession()
	 * @uses OvhTypeTelephonyLineGetSipDomain::getNumber()
	 * @uses OvhTypeTelephonyLineGetSipDomain::getCountry()
	 * @param OvhTypeTelephonyLineGetSipDomain TelephonyLineGetSipDomain
	 * @return OvhTypeTelephonyLineGetSipDomainResponse
	 */
	public function telephonyLineGetSipDomain(OvhTypeTelephonyLineGetSipDomain $_ovhTypeTelephonyLineGetSipDomain)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineGetSipDomainResponse(self::getSoapClient()->telephonyLineGetSipDomain($_ovhTypeTelephonyLineGetSipDomain->getSession(),$_ovhTypeTelephonyLineGetSipDomain->getNumber(),$_ovhTypeTelephonyLineGetSipDomain->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyToneDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyToneDelete::getSession()
	 * @uses OvhTypeTelephonyToneDelete::getNumber()
	 * @uses OvhTypeTelephonyToneDelete::getCountry()
	 * @uses OvhTypeTelephonyToneDelete::getToneType()
	 * @param OvhTypeTelephonyToneDelete TelephonyToneDelete
	 * @return OvhTypeTelephonyToneDeleteResponse
	 */
	public function telephonyToneDelete(OvhTypeTelephonyToneDelete $_ovhTypeTelephonyToneDelete)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyToneDeleteResponse(self::getSoapClient()->telephonyToneDelete($_ovhTypeTelephonyToneDelete->getSession(),$_ovhTypeTelephonyToneDelete->getNumber(),$_ovhTypeTelephonyToneDelete->getCountry(),$_ovhTypeTelephonyToneDelete->getToneType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookOnGroupContactModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactModify::getSession()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactModify::getGroup()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactModify::getId()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactModify::getName()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactModify::getSurname()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactModify::getWorkPhone()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactModify::getWorkMobile()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactModify::getHomePhone()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactModify::getHomeMobile()
	 * @uses OvhTypeTelephonyPhonebookOnGroupContactModify::getGroupName()
	 * @param OvhTypeTelephonyPhonebookOnGroupContactModify TelephonyPhonebookOnGroupContactModify
	 * @return OvhTypeTelephonyPhonebookOnGroupContactModifyResponse
	 */
	public function telephonyPhonebookOnGroupContactModify(OvhTypeTelephonyPhonebookOnGroupContactModify $_ovhTypeTelephonyPhonebookOnGroupContactModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookOnGroupContactModifyResponse(self::getSoapClient()->telephonyPhonebookOnGroupContactModify($_ovhTypeTelephonyPhonebookOnGroupContactModify->getSession(),$_ovhTypeTelephonyPhonebookOnGroupContactModify->getGroup(),$_ovhTypeTelephonyPhonebookOnGroupContactModify->getId(),$_ovhTypeTelephonyPhonebookOnGroupContactModify->getName(),$_ovhTypeTelephonyPhonebookOnGroupContactModify->getSurname(),$_ovhTypeTelephonyPhonebookOnGroupContactModify->getWorkPhone(),$_ovhTypeTelephonyPhonebookOnGroupContactModify->getWorkMobile(),$_ovhTypeTelephonyPhonebookOnGroupContactModify->getHomePhone(),$_ovhTypeTelephonyPhonebookOnGroupContactModify->getHomeMobile(),$_ovhTypeTelephonyPhonebookOnGroupContactModify->getGroupName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyScreenListBlackWhiteChoiceModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyScreenListBlackWhiteChoiceModify::getSession()
	 * @uses OvhTypeTelephonyScreenListBlackWhiteChoiceModify::getNumber()
	 * @uses OvhTypeTelephonyScreenListBlackWhiteChoiceModify::getCountry()
	 * @uses OvhTypeTelephonyScreenListBlackWhiteChoiceModify::getScreenList()
	 * @uses OvhTypeTelephonyScreenListBlackWhiteChoiceModify::getOutgoingCodeUnlock()
	 * @uses OvhTypeTelephonyScreenListBlackWhiteChoiceModify::getIncomingOoutgoing()
	 * @param OvhTypeTelephonyScreenListBlackWhiteChoiceModify TelephonyScreenListBlackWhiteChoiceModify
	 * @return OvhTypeTelephonyScreenListBlackWhiteChoiceModifyResponse
	 */
	public function telephonyScreenListBlackWhiteChoiceModify(OvhTypeTelephonyScreenListBlackWhiteChoiceModify $_ovhTypeTelephonyScreenListBlackWhiteChoiceModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyScreenListBlackWhiteChoiceModifyResponse(self::getSoapClient()->telephonyScreenListBlackWhiteChoiceModify($_ovhTypeTelephonyScreenListBlackWhiteChoiceModify->getSession(),$_ovhTypeTelephonyScreenListBlackWhiteChoiceModify->getNumber(),$_ovhTypeTelephonyScreenListBlackWhiteChoiceModify->getCountry(),$_ovhTypeTelephonyScreenListBlackWhiteChoiceModify->getScreenList(),$_ovhTypeTelephonyScreenListBlackWhiteChoiceModify->getOutgoingCodeUnlock(),$_ovhTypeTelephonyScreenListBlackWhiteChoiceModify->getIncomingOoutgoing())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyAbbreviatedNumberOnGroupDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupDel::getSession()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupDel::getGroup()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupDel::getAbbreviatedNumber()
	 * @param OvhTypeTelephonyAbbreviatedNumberOnGroupDel TelephonyAbbreviatedNumberOnGroupDel
	 * @return OvhTypeTelephonyAbbreviatedNumberOnGroupDelResponse
	 */
	public function telephonyAbbreviatedNumberOnGroupDel(OvhTypeTelephonyAbbreviatedNumberOnGroupDel $_ovhTypeTelephonyAbbreviatedNumberOnGroupDel)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyAbbreviatedNumberOnGroupDelResponse(self::getSoapClient()->telephonyAbbreviatedNumberOnGroupDel($_ovhTypeTelephonyAbbreviatedNumberOnGroupDel->getSession(),$_ovhTypeTelephonyAbbreviatedNumberOnGroupDel->getGroup(),$_ovhTypeTelephonyAbbreviatedNumberOnGroupDel->getAbbreviatedNumber())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsSenderDescription
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsSenderDescription::getSession()
	 * @uses OvhTypeTelephonySmsSenderDescription::getSmsAccount()
	 * @uses OvhTypeTelephonySmsSenderDescription::getNumber()
	 * @uses OvhTypeTelephonySmsSenderDescription::getDescription()
	 * @param OvhTypeTelephonySmsSenderDescription TelephonySmsSenderDescription
	 * @return OvhTypeTelephonySmsSenderDescriptionResponse
	 */
	public function telephonySmsSenderDescription(OvhTypeTelephonySmsSenderDescription $_ovhTypeTelephonySmsSenderDescription)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsSenderDescriptionResponse(self::getSoapClient()->telephonySmsSenderDescription($_ovhTypeTelephonySmsSenderDescription->getSession(),$_ovhTypeTelephonySmsSenderDescription->getSmsAccount(),$_ovhTypeTelephonySmsSenderDescription->getNumber(),$_ovhTypeTelephonySmsSenderDescription->getDescription())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyAbbreviatedNumberListPaginated
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyAbbreviatedNumberListPaginated::getSession()
	 * @uses OvhTypeTelephonyAbbreviatedNumberListPaginated::getNumber()
	 * @uses OvhTypeTelephonyAbbreviatedNumberListPaginated::getCountry()
	 * @uses OvhTypeTelephonyAbbreviatedNumberListPaginated::getPagingStart()
	 * @uses OvhTypeTelephonyAbbreviatedNumberListPaginated::getPagingLimit()
	 * @uses OvhTypeTelephonyAbbreviatedNumberListPaginated::getSortField()
	 * @uses OvhTypeTelephonyAbbreviatedNumberListPaginated::getSortOrder()
	 * @param OvhTypeTelephonyAbbreviatedNumberListPaginated TelephonyAbbreviatedNumberListPaginated
	 * @return OvhTypeTelephonyAbbreviatedNumberListPaginatedResponse
	 */
	public function telephonyAbbreviatedNumberListPaginated(OvhTypeTelephonyAbbreviatedNumberListPaginated $_ovhTypeTelephonyAbbreviatedNumberListPaginated)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyAbbreviatedNumberListPaginatedResponse(self::getSoapClient()->telephonyAbbreviatedNumberListPaginated($_ovhTypeTelephonyAbbreviatedNumberListPaginated->getSession(),$_ovhTypeTelephonyAbbreviatedNumberListPaginated->getNumber(),$_ovhTypeTelephonyAbbreviatedNumberListPaginated->getCountry(),$_ovhTypeTelephonyAbbreviatedNumberListPaginated->getPagingStart(),$_ovhTypeTelephonyAbbreviatedNumberListPaginated->getPagingLimit(),$_ovhTypeTelephonyAbbreviatedNumberListPaginated->getSortField(),$_ovhTypeTelephonyAbbreviatedNumberListPaginated->getSortOrder())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsUserListCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsUserListCsvAttachment::getSmsAccount()
	 * @uses OvhTypeTelephonySmsUserListCsvAttachment::getLogin()
	 * @uses OvhTypeTelephonySmsUserListCsvAttachment::getPassword()
	 * @uses OvhTypeTelephonySmsUserListCsvAttachment::getId()
	 * @param OvhTypeTelephonySmsUserListCsvAttachment TelephonySmsUserListCsvAttachment
	 * @return OvhTypeTelephonySmsUserListCsvAttachmentResponse
	 */
	public function telephonySmsUserListCsvAttachment(OvhTypeTelephonySmsUserListCsvAttachment $_ovhTypeTelephonySmsUserListCsvAttachment)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsUserListCsvAttachmentResponse(self::getSoapClient()->telephonySmsUserListCsvAttachment($_ovhTypeTelephonySmsUserListCsvAttachment->getSmsAccount(),$_ovhTypeTelephonySmsUserListCsvAttachment->getLogin(),$_ovhTypeTelephonySmsUserListCsvAttachment->getPassword(),$_ovhTypeTelephonySmsUserListCsvAttachment->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsUserSend
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsUserSend::getLogin()
	 * @uses OvhTypeTelephonySmsUserSend::getPassword()
	 * @uses OvhTypeTelephonySmsUserSend::getSmsAccount()
	 * @uses OvhTypeTelephonySmsUserSend::getNumberFrom()
	 * @uses OvhTypeTelephonySmsUserSend::getNumberTo()
	 * @uses OvhTypeTelephonySmsUserSend::getMessage()
	 * @uses OvhTypeTelephonySmsUserSend::getSmsValidity()
	 * @uses OvhTypeTelephonySmsUserSend::getSmsClass()
	 * @uses OvhTypeTelephonySmsUserSend::getSmsDeferred()
	 * @uses OvhTypeTelephonySmsUserSend::getSmsPriority()
	 * @uses OvhTypeTelephonySmsUserSend::getSmsCoding()
	 * @uses OvhTypeTelephonySmsUserSend::getTag()
	 * @param OvhTypeTelephonySmsUserSend TelephonySmsUserSend
	 * @return OvhTypeTelephonySmsUserSendResponse
	 */
	public function telephonySmsUserSend(OvhTypeTelephonySmsUserSend $_ovhTypeTelephonySmsUserSend)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsUserSendResponse(self::getSoapClient()->telephonySmsUserSend($_ovhTypeTelephonySmsUserSend->getLogin(),$_ovhTypeTelephonySmsUserSend->getPassword(),$_ovhTypeTelephonySmsUserSend->getSmsAccount(),$_ovhTypeTelephonySmsUserSend->getNumberFrom(),$_ovhTypeTelephonySmsUserSend->getNumberTo(),$_ovhTypeTelephonySmsUserSend->getMessage(),$_ovhTypeTelephonySmsUserSend->getSmsValidity(),$_ovhTypeTelephonySmsUserSend->getSmsClass(),$_ovhTypeTelephonySmsUserSend->getSmsDeferred(),$_ovhTypeTelephonySmsUserSend->getSmsPriority(),$_ovhTypeTelephonySmsUserSend->getSmsCoding(),$_ovhTypeTelephonySmsUserSend->getTag())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookOnGroupGroupList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookOnGroupGroupList::getSession()
	 * @uses OvhTypeTelephonyPhonebookOnGroupGroupList::getGroup()
	 * @uses OvhTypeTelephonyPhonebookOnGroupGroupList::getId()
	 * @param OvhTypeTelephonyPhonebookOnGroupGroupList TelephonyPhonebookOnGroupGroupList
	 * @return OvhTypeTelephonyPhonebookOnGroupGroupListResponse
	 */
	public function telephonyPhonebookOnGroupGroupList(OvhTypeTelephonyPhonebookOnGroupGroupList $_ovhTypeTelephonyPhonebookOnGroupGroupList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookOnGroupGroupListResponse(self::getSoapClient()->telephonyPhonebookOnGroupGroupList($_ovhTypeTelephonyPhonebookOnGroupGroupList->getSession(),$_ovhTypeTelephonyPhonebookOnGroupGroupList->getGroup(),$_ovhTypeTelephonyPhonebookOnGroupGroupList->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyClick2CallUserPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyClick2CallUserPassword::getSession()
	 * @uses OvhTypeTelephonyClick2CallUserPassword::getNumber()
	 * @uses OvhTypeTelephonyClick2CallUserPassword::getCountry()
	 * @uses OvhTypeTelephonyClick2CallUserPassword::getLogin()
	 * @uses OvhTypeTelephonyClick2CallUserPassword::getPassword()
	 * @param OvhTypeTelephonyClick2CallUserPassword TelephonyClick2CallUserPassword
	 * @return OvhTypeTelephonyClick2CallUserPasswordResponse
	 */
	public function telephonyClick2CallUserPassword(OvhTypeTelephonyClick2CallUserPassword $_ovhTypeTelephonyClick2CallUserPassword)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyClick2CallUserPasswordResponse(self::getSoapClient()->telephonyClick2CallUserPassword($_ovhTypeTelephonyClick2CallUserPassword->getSession(),$_ovhTypeTelephonyClick2CallUserPassword->getNumber(),$_ovhTypeTelephonyClick2CallUserPassword->getCountry(),$_ovhTypeTelephonyClick2CallUserPassword->getLogin(),$_ovhTypeTelephonyClick2CallUserPassword->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsGetUserQuota
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsGetUserQuota::getSession()
	 * @uses OvhTypeTelephonySmsGetUserQuota::getSmsAccount()
	 * @uses OvhTypeTelephonySmsGetUserQuota::getLogin()
	 * @param OvhTypeTelephonySmsGetUserQuota TelephonySmsGetUserQuota
	 * @return OvhTypeTelephonySmsGetUserQuotaResponse
	 */
	public function telephonySmsGetUserQuota(OvhTypeTelephonySmsGetUserQuota $_ovhTypeTelephonySmsGetUserQuota)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsGetUserQuotaResponse(self::getSoapClient()->telephonySmsGetUserQuota($_ovhTypeTelephonySmsGetUserQuota->getSession(),$_ovhTypeTelephonySmsGetUserQuota->getSmsAccount(),$_ovhTypeTelephonySmsGetUserQuota->getLogin())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsSenderDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsSenderDelete::getSession()
	 * @uses OvhTypeTelephonySmsSenderDelete::getSmsAccount()
	 * @uses OvhTypeTelephonySmsSenderDelete::getNumber()
	 * @param OvhTypeTelephonySmsSenderDelete TelephonySmsSenderDelete
	 * @return OvhTypeTelephonySmsSenderDeleteResponse
	 */
	public function telephonySmsSenderDelete(OvhTypeTelephonySmsSenderDelete $_ovhTypeTelephonySmsSenderDelete)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsSenderDeleteResponse(self::getSoapClient()->telephonySmsSenderDelete($_ovhTypeTelephonySmsSenderDelete->getSession(),$_ovhTypeTelephonySmsSenderDelete->getSmsAccount(),$_ovhTypeTelephonySmsSenderDelete->getNumber())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyToneStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyToneStatus::getSession()
	 * @uses OvhTypeTelephonyToneStatus::getNumber()
	 * @uses OvhTypeTelephonyToneStatus::getCountry()
	 * @param OvhTypeTelephonyToneStatus TelephonyToneStatus
	 * @return OvhTypeTelephonyToneStatusResponse
	 */
	public function telephonyToneStatus(OvhTypeTelephonyToneStatus $_ovhTypeTelephonyToneStatus)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyToneStatusResponse(self::getSoapClient()->telephonyToneStatus($_ovhTypeTelephonyToneStatus->getSession(),$_ovhTypeTelephonyToneStatus->getNumber(),$_ovhTypeTelephonyToneStatus->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyDdiInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyDdiInfo::getSession()
	 * @uses OvhTypeTelephonyDdiInfo::getNumber()
	 * @uses OvhTypeTelephonyDdiInfo::getCountry()
	 * @param OvhTypeTelephonyDdiInfo TelephonyDdiInfo
	 * @return OvhTypeTelephonyDdiInfoResponse
	 */
	public function telephonyDdiInfo(OvhTypeTelephonyDdiInfo $_ovhTypeTelephonyDdiInfo)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyDdiInfoResponse(self::getSoapClient()->telephonyDdiInfo($_ovhTypeTelephonyDdiInfo->getSession(),$_ovhTypeTelephonyDdiInfo->getNumber(),$_ovhTypeTelephonyDdiInfo->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyHuntingGroupList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyHuntingGroupList::getSession()
	 * @uses OvhTypeTelephonyHuntingGroupList::getNumber()
	 * @uses OvhTypeTelephonyHuntingGroupList::getCountry()
	 * @param OvhTypeTelephonyHuntingGroupList TelephonyHuntingGroupList
	 * @return OvhTypeTelephonyHuntingGroupListResponse
	 */
	public function telephonyHuntingGroupList(OvhTypeTelephonyHuntingGroupList $_ovhTypeTelephonyHuntingGroupList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyHuntingGroupListResponse(self::getSoapClient()->telephonyHuntingGroupList($_ovhTypeTelephonyHuntingGroupList->getSession(),$_ovhTypeTelephonyHuntingGroupList->getNumber(),$_ovhTypeTelephonyHuntingGroupList->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyDirectoryListWayType
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyDirectoryListWayType::getSession()
	 * @param OvhTypeTelephonyDirectoryListWayType TelephonyDirectoryListWayType
	 * @return OvhTypeTelephonyDirectoryListWayTypeResponse
	 */
	public function telephonyDirectoryListWayType(OvhTypeTelephonyDirectoryListWayType $_ovhTypeTelephonyDirectoryListWayType)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyDirectoryListWayTypeResponse(self::getSoapClient()->telephonyDirectoryListWayType($_ovhTypeTelephonyDirectoryListWayType->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsUserHistoryCsv
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsUserHistoryCsv::getLogin()
	 * @uses OvhTypeTelephonySmsUserHistoryCsv::getPassword()
	 * @uses OvhTypeTelephonySmsUserHistoryCsv::getSmsAccount()
	 * @uses OvhTypeTelephonySmsUserHistoryCsv::getSmsId()
	 * @uses OvhTypeTelephonySmsUserHistoryCsv::getUser()
	 * @uses OvhTypeTelephonySmsUserHistoryCsv::getPagingStart()
	 * @uses OvhTypeTelephonySmsUserHistoryCsv::getPagingLimit()
	 * @uses OvhTypeTelephonySmsUserHistoryCsv::getSortField()
	 * @uses OvhTypeTelephonySmsUserHistoryCsv::getSortOrder()
	 * @uses OvhTypeTelephonySmsUserHistoryCsv::getTag()
	 * @param OvhTypeTelephonySmsUserHistoryCsv TelephonySmsUserHistoryCsv
	 * @return OvhTypeTelephonySmsUserHistoryCsvResponse
	 */
	public function telephonySmsUserHistoryCsv(OvhTypeTelephonySmsUserHistoryCsv $_ovhTypeTelephonySmsUserHistoryCsv)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsUserHistoryCsvResponse(self::getSoapClient()->telephonySmsUserHistoryCsv($_ovhTypeTelephonySmsUserHistoryCsv->getLogin(),$_ovhTypeTelephonySmsUserHistoryCsv->getPassword(),$_ovhTypeTelephonySmsUserHistoryCsv->getSmsAccount(),$_ovhTypeTelephonySmsUserHistoryCsv->getSmsId(),$_ovhTypeTelephonySmsUserHistoryCsv->getUser(),$_ovhTypeTelephonySmsUserHistoryCsv->getPagingStart(),$_ovhTypeTelephonySmsUserHistoryCsv->getPagingLimit(),$_ovhTypeTelephonySmsUserHistoryCsv->getSortField(),$_ovhTypeTelephonySmsUserHistoryCsv->getSortOrder(),$_ovhTypeTelephonySmsUserHistoryCsv->getTag())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyCallList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyCallList::getSession()
	 * @uses OvhTypeTelephonyCallList::getNumber()
	 * @uses OvhTypeTelephonyCallList::getCountry()
	 * @uses OvhTypeTelephonyCallList::getListBegin()
	 * @uses OvhTypeTelephonyCallList::getListLimit()
	 * @uses OvhTypeTelephonyCallList::getListType()
	 * @uses OvhTypeTelephonyCallList::getDate()
	 * @uses OvhTypeTelephonyCallList::getCallReceived()
	 * @uses OvhTypeTelephonyCallList::getFilterSearch()
	 * @uses OvhTypeTelephonyCallList::getFilterValue()
	 * @uses OvhTypeTelephonyCallList::getPlanType()
	 * @param OvhTypeTelephonyCallList TelephonyCallList
	 * @return OvhTypeTelephonyCallListResponse
	 */
	public function telephonyCallList(OvhTypeTelephonyCallList $_ovhTypeTelephonyCallList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyCallListResponse(self::getSoapClient()->telephonyCallList($_ovhTypeTelephonyCallList->getSession(),$_ovhTypeTelephonyCallList->getNumber(),$_ovhTypeTelephonyCallList->getCountry(),$_ovhTypeTelephonyCallList->getListBegin(),$_ovhTypeTelephonyCallList->getListLimit(),$_ovhTypeTelephonyCallList->getListType(),$_ovhTypeTelephonyCallList->getDate(),$_ovhTypeTelephonyCallList->getCallReceived(),$_ovhTypeTelephonyCallList->getFilterSearch(),$_ovhTypeTelephonyCallList->getFilterValue(),$_ovhTypeTelephonyCallList->getPlanType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call TelephonySipToAliasOffer
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySipToAliasOffer::getSession()
	 * @uses OvhTypeTelephonySipToAliasOffer::getNumber()
	 * @uses OvhTypeTelephonySipToAliasOffer::getCountry()
	 * @uses OvhTypeTelephonySipToAliasOffer::getDelete()
	 * @param OvhTypeTelephonySipToAliasOffer TelephonySipToAliasOffer
	 * @return OvhTypeTelephonySipToAliasOfferResponse
	 */
	public function TelephonySipToAliasOffer(OvhTypeTelephonySipToAliasOffer $_ovhTypeTelephonySipToAliasOffer)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySipToAliasOfferResponse(self::getSoapClient()->TelephonySipToAliasOffer($_ovhTypeTelephonySipToAliasOffer->getSession(),$_ovhTypeTelephonySipToAliasOffer->getNumber(),$_ovhTypeTelephonySipToAliasOffer->getCountry(),$_ovhTypeTelephonySipToAliasOffer->getDelete())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyAliasToSipPossibilities
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyAliasToSipPossibilities::getSession()
	 * @uses OvhTypeTelephonyAliasToSipPossibilities::getNumber()
	 * @uses OvhTypeTelephonyAliasToSipPossibilities::getCountry()
	 * @param OvhTypeTelephonyAliasToSipPossibilities TelephonyAliasToSipPossibilities
	 * @return OvhTypeTelephonyAliasToSipPossibilitiesResponse
	 */
	public function telephonyAliasToSipPossibilities(OvhTypeTelephonyAliasToSipPossibilities $_ovhTypeTelephonyAliasToSipPossibilities)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyAliasToSipPossibilitiesResponse(self::getSoapClient()->telephonyAliasToSipPossibilities($_ovhTypeTelephonyAliasToSipPossibilities->getSession(),$_ovhTypeTelephonyAliasToSipPossibilities->getNumber(),$_ovhTypeTelephonyAliasToSipPossibilities->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyAbbreviatedNumberOnGroupAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupAdd::getSession()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupAdd::getGroup()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupAdd::getAbbreviatedNumber()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupAdd::getRelatedNumber()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupAdd::getName()
	 * @uses OvhTypeTelephonyAbbreviatedNumberOnGroupAdd::getSurname()
	 * @param OvhTypeTelephonyAbbreviatedNumberOnGroupAdd TelephonyAbbreviatedNumberOnGroupAdd
	 * @return OvhTypeTelephonyAbbreviatedNumberOnGroupAddResponse
	 */
	public function telephonyAbbreviatedNumberOnGroupAdd(OvhTypeTelephonyAbbreviatedNumberOnGroupAdd $_ovhTypeTelephonyAbbreviatedNumberOnGroupAdd)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyAbbreviatedNumberOnGroupAddResponse(self::getSoapClient()->telephonyAbbreviatedNumberOnGroupAdd($_ovhTypeTelephonyAbbreviatedNumberOnGroupAdd->getSession(),$_ovhTypeTelephonyAbbreviatedNumberOnGroupAdd->getGroup(),$_ovhTypeTelephonyAbbreviatedNumberOnGroupAdd->getAbbreviatedNumber(),$_ovhTypeTelephonyAbbreviatedNumberOnGroupAdd->getRelatedNumber(),$_ovhTypeTelephonyAbbreviatedNumberOnGroupAdd->getName(),$_ovhTypeTelephonyAbbreviatedNumberOnGroupAdd->getSurname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyHuntingModificationQueue
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyHuntingModificationQueue::getSession()
	 * @uses OvhTypeTelephonyHuntingModificationQueue::getNumber()
	 * @uses OvhTypeTelephonyHuntingModificationQueue::getCountry()
	 * @uses OvhTypeTelephonyHuntingModificationQueue::getBillingAccount()
	 * @uses OvhTypeTelephonyHuntingModificationQueue::getOnHoldTimer()
	 * @uses OvhTypeTelephonyHuntingModificationQueue::getQueueSize()
	 * @param OvhTypeTelephonyHuntingModificationQueue TelephonyHuntingModificationQueue
	 * @return OvhTypeTelephonyHuntingModificationQueueResponse
	 */
	public function telephonyHuntingModificationQueue(OvhTypeTelephonyHuntingModificationQueue $_ovhTypeTelephonyHuntingModificationQueue)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyHuntingModificationQueueResponse(self::getSoapClient()->telephonyHuntingModificationQueue($_ovhTypeTelephonyHuntingModificationQueue->getSession(),$_ovhTypeTelephonyHuntingModificationQueue->getNumber(),$_ovhTypeTelephonyHuntingModificationQueue->getCountry(),$_ovhTypeTelephonyHuntingModificationQueue->getBillingAccount(),$_ovhTypeTelephonyHuntingModificationQueue->getOnHoldTimer(),$_ovhTypeTelephonyHuntingModificationQueue->getQueueSize())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyDirectoryInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyDirectoryInfo::getSession()
	 * @uses OvhTypeTelephonyDirectoryInfo::getCallNumber()
	 * @uses OvhTypeTelephonyDirectoryInfo::getCountryCode()
	 * @param OvhTypeTelephonyDirectoryInfo TelephonyDirectoryInfo
	 * @return OvhTypeTelephonyDirectoryInfoResponse
	 */
	public function telephonyDirectoryInfo(OvhTypeTelephonyDirectoryInfo $_ovhTypeTelephonyDirectoryInfo)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyDirectoryInfoResponse(self::getSoapClient()->telephonyDirectoryInfo($_ovhTypeTelephonyDirectoryInfo->getSession(),$_ovhTypeTelephonyDirectoryInfo->getCallNumber(),$_ovhTypeTelephonyDirectoryInfo->getCountryCode())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyBillDetails
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyBillDetails::getSession()
	 * @uses OvhTypeTelephonyBillDetails::getBillingAccount()
	 * @uses OvhTypeTelephonyBillDetails::getDate()
	 * @param OvhTypeTelephonyBillDetails TelephonyBillDetails
	 * @return OvhTypeTelephonyBillDetailsResponse
	 */
	public function telephonyBillDetails(OvhTypeTelephonyBillDetails $_ovhTypeTelephonyBillDetails)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyBillDetailsResponse(self::getSoapClient()->telephonyBillDetails($_ovhTypeTelephonyBillDetails->getSession(),$_ovhTypeTelephonyBillDetails->getBillingAccount(),$_ovhTypeTelephonyBillDetails->getDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineLogsNotificationOptionsModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineLogsNotificationOptionsModify::getSession()
	 * @uses OvhTypeTelephonyLineLogsNotificationOptionsModify::getNumber()
	 * @uses OvhTypeTelephonyLineLogsNotificationOptionsModify::getCountry()
	 * @uses OvhTypeTelephonyLineLogsNotificationOptionsModify::getFrequency()
	 * @uses OvhTypeTelephonyLineLogsNotificationOptionsModify::getSendIfNull()
	 * @uses OvhTypeTelephonyLineLogsNotificationOptionsModify::getEmail()
	 * @param OvhTypeTelephonyLineLogsNotificationOptionsModify TelephonyLineLogsNotificationOptionsModify
	 * @return OvhTypeTelephonyLineLogsNotificationOptionsModifyResponse
	 */
	public function telephonyLineLogsNotificationOptionsModify(OvhTypeTelephonyLineLogsNotificationOptionsModify $_ovhTypeTelephonyLineLogsNotificationOptionsModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineLogsNotificationOptionsModifyResponse(self::getSoapClient()->telephonyLineLogsNotificationOptionsModify($_ovhTypeTelephonyLineLogsNotificationOptionsModify->getSession(),$_ovhTypeTelephonyLineLogsNotificationOptionsModify->getNumber(),$_ovhTypeTelephonyLineLogsNotificationOptionsModify->getCountry(),$_ovhTypeTelephonyLineLogsNotificationOptionsModify->getFrequency(),$_ovhTypeTelephonyLineLogsNotificationOptionsModify->getSendIfNull(),$_ovhTypeTelephonyLineLogsNotificationOptionsModify->getEmail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyClick2CallDoBySession
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyClick2CallDoBySession::getSession()
	 * @uses OvhTypeTelephonyClick2CallDoBySession::getCalling()
	 * @uses OvhTypeTelephonyClick2CallDoBySession::getCalled()
	 * @uses OvhTypeTelephonyClick2CallDoBySession::getBillingNumber()
	 * @param OvhTypeTelephonyClick2CallDoBySession TelephonyClick2CallDoBySession
	 * @return OvhTypeTelephonyClick2CallDoBySessionResponse
	 */
	public function telephonyClick2CallDoBySession(OvhTypeTelephonyClick2CallDoBySession $_ovhTypeTelephonyClick2CallDoBySession)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyClick2CallDoBySessionResponse(self::getSoapClient()->telephonyClick2CallDoBySession($_ovhTypeTelephonyClick2CallDoBySession->getSession(),$_ovhTypeTelephonyClick2CallDoBySession->getCalling(),$_ovhTypeTelephonyClick2CallDoBySession->getCalled(),$_ovhTypeTelephonyClick2CallDoBySession->getBillingNumber())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyAbbreviatedNumberAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyAbbreviatedNumberAdd::getSession()
	 * @uses OvhTypeTelephonyAbbreviatedNumberAdd::getNumber()
	 * @uses OvhTypeTelephonyAbbreviatedNumberAdd::getCountry()
	 * @uses OvhTypeTelephonyAbbreviatedNumberAdd::getAbbreviatedNumber()
	 * @uses OvhTypeTelephonyAbbreviatedNumberAdd::getRelatedNumber()
	 * @uses OvhTypeTelephonyAbbreviatedNumberAdd::getName()
	 * @uses OvhTypeTelephonyAbbreviatedNumberAdd::getSurname()
	 * @param OvhTypeTelephonyAbbreviatedNumberAdd TelephonyAbbreviatedNumberAdd
	 * @return OvhTypeTelephonyAbbreviatedNumberAddResponse
	 */
	public function telephonyAbbreviatedNumberAdd(OvhTypeTelephonyAbbreviatedNumberAdd $_ovhTypeTelephonyAbbreviatedNumberAdd)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyAbbreviatedNumberAddResponse(self::getSoapClient()->telephonyAbbreviatedNumberAdd($_ovhTypeTelephonyAbbreviatedNumberAdd->getSession(),$_ovhTypeTelephonyAbbreviatedNumberAdd->getNumber(),$_ovhTypeTelephonyAbbreviatedNumberAdd->getCountry(),$_ovhTypeTelephonyAbbreviatedNumberAdd->getAbbreviatedNumber(),$_ovhTypeTelephonyAbbreviatedNumberAdd->getRelatedNumber(),$_ovhTypeTelephonyAbbreviatedNumberAdd->getName(),$_ovhTypeTelephonyAbbreviatedNumberAdd->getSurname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyNumberOrder
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyNumberOrder::getSession()
	 * @uses OvhTypeTelephonyNumberOrder::getBillingAccount()
	 * @uses OvhTypeTelephonyNumberOrder::getAliasNumber()
	 * @uses OvhTypeTelephonyNumberOrder::getPrefix()
	 * @uses OvhTypeTelephonyNumberOrder::getCountry()
	 * @uses OvhTypeTelephonyNumberOrder::getName()
	 * @uses OvhTypeTelephonyNumberOrder::getFirstname()
	 * @uses OvhTypeTelephonyNumberOrder::getStreetName()
	 * @uses OvhTypeTelephonyNumberOrder::getStreetNumber()
	 * @uses OvhTypeTelephonyNumberOrder::getAddress()
	 * @uses OvhTypeTelephonyNumberOrder::getZip()
	 * @uses OvhTypeTelephonyNumberOrder::getCity()
	 * @uses OvhTypeTelephonyNumberOrder::getEmail()
	 * @uses OvhTypeTelephonyNumberOrder::getNumberToReserve()
	 * @uses OvhTypeTelephonyNumberOrder::getProcedureId()
	 * @param OvhTypeTelephonyNumberOrder TelephonyNumberOrder
	 * @return OvhTypeTelephonyNumberOrderResponse
	 */
	public function telephonyNumberOrder(OvhTypeTelephonyNumberOrder $_ovhTypeTelephonyNumberOrder)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyNumberOrderResponse(self::getSoapClient()->telephonyNumberOrder($_ovhTypeTelephonyNumberOrder->getSession(),$_ovhTypeTelephonyNumberOrder->getBillingAccount(),$_ovhTypeTelephonyNumberOrder->getAliasNumber(),$_ovhTypeTelephonyNumberOrder->getPrefix(),$_ovhTypeTelephonyNumberOrder->getCountry(),$_ovhTypeTelephonyNumberOrder->getName(),$_ovhTypeTelephonyNumberOrder->getFirstname(),$_ovhTypeTelephonyNumberOrder->getStreetName(),$_ovhTypeTelephonyNumberOrder->getStreetNumber(),$_ovhTypeTelephonyNumberOrder->getAddress(),$_ovhTypeTelephonyNumberOrder->getZip(),$_ovhTypeTelephonyNumberOrder->getCity(),$_ovhTypeTelephonyNumberOrder->getEmail(),$_ovhTypeTelephonyNumberOrder->getNumberToReserve(),$_ovhTypeTelephonyNumberOrder->getProcedureId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyNumberCityForZoneList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyNumberCityForZoneList::getSession()
	 * @uses OvhTypeTelephonyNumberCityForZoneList::getZone()
	 * @param OvhTypeTelephonyNumberCityForZoneList TelephonyNumberCityForZoneList
	 * @return OvhTypeTelephonyNumberCityForZoneListResponse
	 */
	public function telephonyNumberCityForZoneList(OvhTypeTelephonyNumberCityForZoneList $_ovhTypeTelephonyNumberCityForZoneList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyNumberCityForZoneListResponse(self::getSoapClient()->telephonyNumberCityForZoneList($_ovhTypeTelephonyNumberCityForZoneList->getSession(),$_ovhTypeTelephonyNumberCityForZoneList->getZone())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyTonesOptionsModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyTonesOptionsModify::getSession()
	 * @uses OvhTypeTelephonyTonesOptionsModify::getNumber()
	 * @uses OvhTypeTelephonyTonesOptionsModify::getCountry()
	 * @uses OvhTypeTelephonyTonesOptionsModify::getToneRingback()
	 * @uses OvhTypeTelephonyTonesOptionsModify::getToneOnHold()
	 * @uses OvhTypeTelephonyTonesOptionsModify::getToneOnClosure()
	 * @uses OvhTypeTelephonyTonesOptionsModify::getToneOnCallWaiting()
	 * @param OvhTypeTelephonyTonesOptionsModify TelephonyTonesOptionsModify
	 * @return OvhTypeTelephonyTonesOptionsModifyResponse
	 */
	public function telephonyTonesOptionsModify(OvhTypeTelephonyTonesOptionsModify $_ovhTypeTelephonyTonesOptionsModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyTonesOptionsModifyResponse(self::getSoapClient()->telephonyTonesOptionsModify($_ovhTypeTelephonyTonesOptionsModify->getSession(),$_ovhTypeTelephonyTonesOptionsModify->getNumber(),$_ovhTypeTelephonyTonesOptionsModify->getCountry(),$_ovhTypeTelephonyTonesOptionsModify->getToneRingback(),$_ovhTypeTelephonyTonesOptionsModify->getToneOnHold(),$_ovhTypeTelephonyTonesOptionsModify->getToneOnClosure(),$_ovhTypeTelephonyTonesOptionsModify->getToneOnCallWaiting())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyVoicemailMessagesRemoteUpload
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyVoicemailMessagesRemoteUpload::getSession()
	 * @uses OvhTypeTelephonyVoicemailMessagesRemoteUpload::getNumber()
	 * @uses OvhTypeTelephonyVoicemailMessagesRemoteUpload::getCountry()
	 * @uses OvhTypeTelephonyVoicemailMessagesRemoteUpload::getMessType()
	 * @uses OvhTypeTelephonyVoicemailMessagesRemoteUpload::getFilename()
	 * @uses OvhTypeTelephonyVoicemailMessagesRemoteUpload::getUrl()
	 * @param OvhTypeTelephonyVoicemailMessagesRemoteUpload TelephonyVoicemailMessagesRemoteUpload
	 * @return OvhTypeTelephonyVoicemailMessagesRemoteUploadResponse
	 */
	public function telephonyVoicemailMessagesRemoteUpload(OvhTypeTelephonyVoicemailMessagesRemoteUpload $_ovhTypeTelephonyVoicemailMessagesRemoteUpload)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyVoicemailMessagesRemoteUploadResponse(self::getSoapClient()->telephonyVoicemailMessagesRemoteUpload($_ovhTypeTelephonyVoicemailMessagesRemoteUpload->getSession(),$_ovhTypeTelephonyVoicemailMessagesRemoteUpload->getNumber(),$_ovhTypeTelephonyVoicemailMessagesRemoteUpload->getCountry(),$_ovhTypeTelephonyVoicemailMessagesRemoteUpload->getMessType(),$_ovhTypeTelephonyVoicemailMessagesRemoteUpload->getFilename(),$_ovhTypeTelephonyVoicemailMessagesRemoteUpload->getUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyOfferInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyOfferInfo::getSession()
	 * @uses OvhTypeTelephonyOfferInfo::getNumber()
	 * @uses OvhTypeTelephonyOfferInfo::getCountry()
	 * @param OvhTypeTelephonyOfferInfo TelephonyOfferInfo
	 * @return OvhTypeTelephonyOfferInfoResponse
	 */
	public function telephonyOfferInfo(OvhTypeTelephonyOfferInfo $_ovhTypeTelephonyOfferInfo)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyOfferInfoResponse(self::getSoapClient()->telephonyOfferInfo($_ovhTypeTelephonyOfferInfo->getSession(),$_ovhTypeTelephonyOfferInfo->getNumber(),$_ovhTypeTelephonyOfferInfo->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookDel::getSession()
	 * @uses OvhTypeTelephonyPhonebookDel::getNumber()
	 * @uses OvhTypeTelephonyPhonebookDel::getCountry()
	 * @uses OvhTypeTelephonyPhonebookDel::getId()
	 * @param OvhTypeTelephonyPhonebookDel TelephonyPhonebookDel
	 * @return OvhTypeTelephonyPhonebookDelResponse
	 */
	public function telephonyPhonebookDel(OvhTypeTelephonyPhonebookDel $_ovhTypeTelephonyPhonebookDel)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookDelResponse(self::getSoapClient()->telephonyPhonebookDel($_ovhTypeTelephonyPhonebookDel->getSession(),$_ovhTypeTelephonyPhonebookDel->getNumber(),$_ovhTypeTelephonyPhonebookDel->getCountry(),$_ovhTypeTelephonyPhonebookDel->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsUserAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsUserAdd::getSession()
	 * @uses OvhTypeTelephonySmsUserAdd::getSmsAccount()
	 * @uses OvhTypeTelephonySmsUserAdd::getLogin()
	 * @uses OvhTypeTelephonySmsUserAdd::getPassword()
	 * @param OvhTypeTelephonySmsUserAdd TelephonySmsUserAdd
	 * @return OvhTypeTelephonySmsUserAddResponse
	 */
	public function telephonySmsUserAdd(OvhTypeTelephonySmsUserAdd $_ovhTypeTelephonySmsUserAdd)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsUserAddResponse(self::getSoapClient()->telephonySmsUserAdd($_ovhTypeTelephonySmsUserAdd->getSession(),$_ovhTypeTelephonySmsUserAdd->getSmsAccount(),$_ovhTypeTelephonySmsUserAdd->getLogin(),$_ovhTypeTelephonySmsUserAdd->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsUserHistory
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsUserHistory::getLogin()
	 * @uses OvhTypeTelephonySmsUserHistory::getPassword()
	 * @uses OvhTypeTelephonySmsUserHistory::getSmsAccount()
	 * @uses OvhTypeTelephonySmsUserHistory::getSmsId()
	 * @uses OvhTypeTelephonySmsUserHistory::getUser()
	 * @uses OvhTypeTelephonySmsUserHistory::getPagingStart()
	 * @uses OvhTypeTelephonySmsUserHistory::getPagingLimit()
	 * @uses OvhTypeTelephonySmsUserHistory::getSortField()
	 * @uses OvhTypeTelephonySmsUserHistory::getSortOrder()
	 * @uses OvhTypeTelephonySmsUserHistory::getTag()
	 * @param OvhTypeTelephonySmsUserHistory TelephonySmsUserHistory
	 * @return OvhTypeTelephonySmsUserHistoryResponse
	 */
	public function telephonySmsUserHistory(OvhTypeTelephonySmsUserHistory $_ovhTypeTelephonySmsUserHistory)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsUserHistoryResponse(self::getSoapClient()->telephonySmsUserHistory($_ovhTypeTelephonySmsUserHistory->getLogin(),$_ovhTypeTelephonySmsUserHistory->getPassword(),$_ovhTypeTelephonySmsUserHistory->getSmsAccount(),$_ovhTypeTelephonySmsUserHistory->getSmsId(),$_ovhTypeTelephonySmsUserHistory->getUser(),$_ovhTypeTelephonySmsUserHistory->getPagingStart(),$_ovhTypeTelephonySmsUserHistory->getPagingLimit(),$_ovhTypeTelephonySmsUserHistory->getSortField(),$_ovhTypeTelephonySmsUserHistory->getSortOrder(),$_ovhTypeTelephonySmsUserHistory->getTag())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyOfferModifyPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyOfferModifyPassword::getSession()
	 * @uses OvhTypeTelephonyOfferModifyPassword::getNumber()
	 * @uses OvhTypeTelephonyOfferModifyPassword::getCountry()
	 * @uses OvhTypeTelephonyOfferModifyPassword::getPassword()
	 * @param OvhTypeTelephonyOfferModifyPassword TelephonyOfferModifyPassword
	 * @return OvhTypeTelephonyOfferModifyPasswordResponse
	 */
	public function telephonyOfferModifyPassword(OvhTypeTelephonyOfferModifyPassword $_ovhTypeTelephonyOfferModifyPassword)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyOfferModifyPasswordResponse(self::getSoapClient()->telephonyOfferModifyPassword($_ovhTypeTelephonyOfferModifyPassword->getSession(),$_ovhTypeTelephonyOfferModifyPassword->getNumber(),$_ovhTypeTelephonyOfferModifyPassword->getCountry(),$_ovhTypeTelephonyOfferModifyPassword->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFunctionKeyAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFunctionKeyAdd::getSession()
	 * @uses OvhTypeTelephonyFunctionKeyAdd::getNumber()
	 * @uses OvhTypeTelephonyFunctionKeyAdd::getCountry()
	 * @uses OvhTypeTelephonyFunctionKeyAdd::getKeyNum()
	 * @uses OvhTypeTelephonyFunctionKeyAdd::getFunction()
	 * @uses OvhTypeTelephonyFunctionKeyAdd::getRelatedNumber()
	 * @param OvhTypeTelephonyFunctionKeyAdd TelephonyFunctionKeyAdd
	 * @return OvhTypeTelephonyFunctionKeyAddResponse
	 */
	public function telephonyFunctionKeyAdd(OvhTypeTelephonyFunctionKeyAdd $_ovhTypeTelephonyFunctionKeyAdd)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFunctionKeyAddResponse(self::getSoapClient()->telephonyFunctionKeyAdd($_ovhTypeTelephonyFunctionKeyAdd->getSession(),$_ovhTypeTelephonyFunctionKeyAdd->getNumber(),$_ovhTypeTelephonyFunctionKeyAdd->getCountry(),$_ovhTypeTelephonyFunctionKeyAdd->getKeyNum(),$_ovhTypeTelephonyFunctionKeyAdd->getFunction(),$_ovhTypeTelephonyFunctionKeyAdd->getRelatedNumber())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookList::getSession()
	 * @uses OvhTypeTelephonyPhonebookList::getNumber()
	 * @uses OvhTypeTelephonyPhonebookList::getCountry()
	 * @param OvhTypeTelephonyPhonebookList TelephonyPhonebookList
	 * @return OvhTypeTelephonyPhonebookListResponse
	 */
	public function telephonyPhonebookList(OvhTypeTelephonyPhonebookList $_ovhTypeTelephonyPhonebookList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookListResponse(self::getSoapClient()->telephonyPhonebookList($_ovhTypeTelephonyPhonebookList->getSession(),$_ovhTypeTelephonyPhonebookList->getNumber(),$_ovhTypeTelephonyPhonebookList->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPlugAndPhoneReset
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPlugAndPhoneReset::getSession()
	 * @uses OvhTypeTelephonyPlugAndPhoneReset::getNumber()
	 * @uses OvhTypeTelephonyPlugAndPhoneReset::getCountry()
	 * @uses OvhTypeTelephonyPlugAndPhoneReset::getIp()
	 * @param OvhTypeTelephonyPlugAndPhoneReset TelephonyPlugAndPhoneReset
	 * @return OvhTypeTelephonyPlugAndPhoneResetResponse
	 */
	public function telephonyPlugAndPhoneReset(OvhTypeTelephonyPlugAndPhoneReset $_ovhTypeTelephonyPlugAndPhoneReset)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPlugAndPhoneResetResponse(self::getSoapClient()->telephonyPlugAndPhoneReset($_ovhTypeTelephonyPlugAndPhoneReset->getSession(),$_ovhTypeTelephonyPlugAndPhoneReset->getNumber(),$_ovhTypeTelephonyPlugAndPhoneReset->getCountry(),$_ovhTypeTelephonyPlugAndPhoneReset->getIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsUserDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsUserDel::getSession()
	 * @uses OvhTypeTelephonySmsUserDel::getSmsAccount()
	 * @uses OvhTypeTelephonySmsUserDel::getLogin()
	 * @param OvhTypeTelephonySmsUserDel TelephonySmsUserDel
	 * @return OvhTypeTelephonySmsUserDelResponse
	 */
	public function telephonySmsUserDel(OvhTypeTelephonySmsUserDel $_ovhTypeTelephonySmsUserDel)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsUserDelResponse(self::getSoapClient()->telephonySmsUserDel($_ovhTypeTelephonySmsUserDel->getSession(),$_ovhTypeTelephonySmsUserDel->getSmsAccount(),$_ovhTypeTelephonySmsUserDel->getLogin())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyVoicemailMessagesStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyVoicemailMessagesStatus::getSession()
	 * @uses OvhTypeTelephonyVoicemailMessagesStatus::getNumber()
	 * @uses OvhTypeTelephonyVoicemailMessagesStatus::getCountry()
	 * @param OvhTypeTelephonyVoicemailMessagesStatus TelephonyVoicemailMessagesStatus
	 * @return OvhTypeTelephonyVoicemailMessagesStatusResponse
	 */
	public function telephonyVoicemailMessagesStatus(OvhTypeTelephonyVoicemailMessagesStatus $_ovhTypeTelephonyVoicemailMessagesStatus)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyVoicemailMessagesStatusResponse(self::getSoapClient()->telephonyVoicemailMessagesStatus($_ovhTypeTelephonyVoicemailMessagesStatus->getSession(),$_ovhTypeTelephonyVoicemailMessagesStatus->getNumber(),$_ovhTypeTelephonyVoicemailMessagesStatus->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookModify::getSession()
	 * @uses OvhTypeTelephonyPhonebookModify::getNumber()
	 * @uses OvhTypeTelephonyPhonebookModify::getCountry()
	 * @uses OvhTypeTelephonyPhonebookModify::getId()
	 * @uses OvhTypeTelephonyPhonebookModify::getName()
	 * @param OvhTypeTelephonyPhonebookModify TelephonyPhonebookModify
	 * @return OvhTypeTelephonyPhonebookModifyResponse
	 */
	public function telephonyPhonebookModify(OvhTypeTelephonyPhonebookModify $_ovhTypeTelephonyPhonebookModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookModifyResponse(self::getSoapClient()->telephonyPhonebookModify($_ovhTypeTelephonyPhonebookModify->getSession(),$_ovhTypeTelephonyPhonebookModify->getNumber(),$_ovhTypeTelephonyPhonebookModify->getCountry(),$_ovhTypeTelephonyPhonebookModify->getId(),$_ovhTypeTelephonyPhonebookModify->getName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyOfferModifyName
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyOfferModifyName::getSession()
	 * @uses OvhTypeTelephonyOfferModifyName::getNumber()
	 * @uses OvhTypeTelephonyOfferModifyName::getCountry()
	 * @uses OvhTypeTelephonyOfferModifyName::getName()
	 * @param OvhTypeTelephonyOfferModifyName TelephonyOfferModifyName
	 * @return OvhTypeTelephonyOfferModifyNameResponse
	 */
	public function telephonyOfferModifyName(OvhTypeTelephonyOfferModifyName $_ovhTypeTelephonyOfferModifyName)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyOfferModifyNameResponse(self::getSoapClient()->telephonyOfferModifyName($_ovhTypeTelephonyOfferModifyName->getSession(),$_ovhTypeTelephonyOfferModifyName->getNumber(),$_ovhTypeTelephonyOfferModifyName->getCountry(),$_ovhTypeTelephonyOfferModifyName->getName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPhonebookGroupList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPhonebookGroupList::getSession()
	 * @uses OvhTypeTelephonyPhonebookGroupList::getNumber()
	 * @uses OvhTypeTelephonyPhonebookGroupList::getCountry()
	 * @uses OvhTypeTelephonyPhonebookGroupList::getId()
	 * @param OvhTypeTelephonyPhonebookGroupList TelephonyPhonebookGroupList
	 * @return OvhTypeTelephonyPhonebookGroupListResponse
	 */
	public function telephonyPhonebookGroupList(OvhTypeTelephonyPhonebookGroupList $_ovhTypeTelephonyPhonebookGroupList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPhonebookGroupListResponse(self::getSoapClient()->telephonyPhonebookGroupList($_ovhTypeTelephonyPhonebookGroupList->getSession(),$_ovhTypeTelephonyPhonebookGroupList->getNumber(),$_ovhTypeTelephonyPhonebookGroupList->getCountry(),$_ovhTypeTelephonyPhonebookGroupList->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyBillingAccountInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyBillingAccountInfo::getSession()
	 * @uses OvhTypeTelephonyBillingAccountInfo::getBillingAccount()
	 * @param OvhTypeTelephonyBillingAccountInfo TelephonyBillingAccountInfo
	 * @return OvhTypeTelephonyBillingAccountInfoResponse
	 */
	public function telephonyBillingAccountInfo(OvhTypeTelephonyBillingAccountInfo $_ovhTypeTelephonyBillingAccountInfo)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyBillingAccountInfoResponse(self::getSoapClient()->telephonyBillingAccountInfo($_ovhTypeTelephonyBillingAccountInfo->getSession(),$_ovhTypeTelephonyBillingAccountInfo->getBillingAccount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsSenderAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsSenderAdd::getSession()
	 * @uses OvhTypeTelephonySmsSenderAdd::getSmsAccount()
	 * @uses OvhTypeTelephonySmsSenderAdd::getNumber()
	 * @param OvhTypeTelephonySmsSenderAdd TelephonySmsSenderAdd
	 * @return OvhTypeTelephonySmsSenderAddResponse
	 */
	public function telephonySmsSenderAdd(OvhTypeTelephonySmsSenderAdd $_ovhTypeTelephonySmsSenderAdd)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsSenderAddResponse(self::getSoapClient()->telephonySmsSenderAdd($_ovhTypeTelephonySmsSenderAdd->getSession(),$_ovhTypeTelephonySmsSenderAdd->getSmsAccount(),$_ovhTypeTelephonySmsSenderAdd->getNumber())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineConsumptionCSVByMail
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineConsumptionCSVByMail::getSession()
	 * @uses OvhTypeTelephonyLineConsumptionCSVByMail::getNumber()
	 * @uses OvhTypeTelephonyLineConsumptionCSVByMail::getCountry()
	 * @uses OvhTypeTelephonyLineConsumptionCSVByMail::getDate()
	 * @param OvhTypeTelephonyLineConsumptionCSVByMail TelephonyLineConsumptionCSVByMail
	 * @return OvhTypeTelephonyLineConsumptionCSVByMailResponse
	 */
	public function telephonyLineConsumptionCSVByMail(OvhTypeTelephonyLineConsumptionCSVByMail $_ovhTypeTelephonyLineConsumptionCSVByMail)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineConsumptionCSVByMailResponse(self::getSoapClient()->telephonyLineConsumptionCSVByMail($_ovhTypeTelephonyLineConsumptionCSVByMail->getSession(),$_ovhTypeTelephonyLineConsumptionCSVByMail->getNumber(),$_ovhTypeTelephonyLineConsumptionCSVByMail->getCountry(),$_ovhTypeTelephonyLineConsumptionCSVByMail->getDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsUserDeleteCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsUserDeleteCsvAttachment::getSmsAccount()
	 * @uses OvhTypeTelephonySmsUserDeleteCsvAttachment::getLogin()
	 * @uses OvhTypeTelephonySmsUserDeleteCsvAttachment::getPassword()
	 * @uses OvhTypeTelephonySmsUserDeleteCsvAttachment::getIds()
	 * @param OvhTypeTelephonySmsUserDeleteCsvAttachment TelephonySmsUserDeleteCsvAttachment
	 * @return OvhTypeTelephonySmsUserDeleteCsvAttachmentResponse
	 */
	public function telephonySmsUserDeleteCsvAttachment(OvhTypeTelephonySmsUserDeleteCsvAttachment $_ovhTypeTelephonySmsUserDeleteCsvAttachment)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsUserDeleteCsvAttachmentResponse(self::getSoapClient()->telephonySmsUserDeleteCsvAttachment($_ovhTypeTelephonySmsUserDeleteCsvAttachment->getSmsAccount(),$_ovhTypeTelephonySmsUserDeleteCsvAttachment->getLogin(),$_ovhTypeTelephonySmsUserDeleteCsvAttachment->getPassword(),$_ovhTypeTelephonySmsUserDeleteCsvAttachment->getIds())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyListReversableCallsFromNumber
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyListReversableCallsFromNumber::getSession()
	 * @uses OvhTypeTelephonyListReversableCallsFromNumber::getNumber()
	 * @uses OvhTypeTelephonyListReversableCallsFromNumber::getCountry()
	 * @uses OvhTypeTelephonyListReversableCallsFromNumber::getReversableDelay()
	 * @uses OvhTypeTelephonyListReversableCallsFromNumber::getPagingStart()
	 * @uses OvhTypeTelephonyListReversableCallsFromNumber::getPagingLimit()
	 * @uses OvhTypeTelephonyListReversableCallsFromNumber::getSortOrder()
	 * @uses OvhTypeTelephonyListReversableCallsFromNumber::getSortField()
	 * @param OvhTypeTelephonyListReversableCallsFromNumber TelephonyListReversableCallsFromNumber
	 * @return OvhTypeTelephonyListReversableCallsFromNumberResponse
	 */
	public function telephonyListReversableCallsFromNumber(OvhTypeTelephonyListReversableCallsFromNumber $_ovhTypeTelephonyListReversableCallsFromNumber)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyListReversableCallsFromNumberResponse(self::getSoapClient()->telephonyListReversableCallsFromNumber($_ovhTypeTelephonyListReversableCallsFromNumber->getSession(),$_ovhTypeTelephonyListReversableCallsFromNumber->getNumber(),$_ovhTypeTelephonyListReversableCallsFromNumber->getCountry(),$_ovhTypeTelephonyListReversableCallsFromNumber->getReversableDelay(),$_ovhTypeTelephonyListReversableCallsFromNumber->getPagingStart(),$_ovhTypeTelephonyListReversableCallsFromNumber->getPagingLimit(),$_ovhTypeTelephonyListReversableCallsFromNumber->getSortOrder(),$_ovhTypeTelephonyListReversableCallsFromNumber->getSortField())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyBillingAccountList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyBillingAccountList::getSession()
	 * @param OvhTypeTelephonyBillingAccountList TelephonyBillingAccountList
	 * @return OvhTypeTelephonyBillingAccountListResponse
	 */
	public function telephonyBillingAccountList(OvhTypeTelephonyBillingAccountList $_ovhTypeTelephonyBillingAccountList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyBillingAccountListResponse(self::getSoapClient()->telephonyBillingAccountList($_ovhTypeTelephonyBillingAccountList->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonySmsGetQuotaNotificationForUser
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonySmsGetQuotaNotificationForUser::getSmsAccount()
	 * @uses OvhTypeTelephonySmsGetQuotaNotificationForUser::getLogin()
	 * @uses OvhTypeTelephonySmsGetQuotaNotificationForUser::getPassword()
	 * @param OvhTypeTelephonySmsGetQuotaNotificationForUser TelephonySmsGetQuotaNotificationForUser
	 * @return OvhTypeTelephonySmsGetQuotaNotificationForUserResponse
	 */
	public function telephonySmsGetQuotaNotificationForUser(OvhTypeTelephonySmsGetQuotaNotificationForUser $_ovhTypeTelephonySmsGetQuotaNotificationForUser)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonySmsGetQuotaNotificationForUserResponse(self::getSoapClient()->telephonySmsGetQuotaNotificationForUser($_ovhTypeTelephonySmsGetQuotaNotificationForUser->getSmsAccount(),$_ovhTypeTelephonySmsGetQuotaNotificationForUser->getLogin(),$_ovhTypeTelephonySmsGetQuotaNotificationForUser->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyChangeNicModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyChangeNicModify::getSession()
	 * @uses OvhTypeTelephonyChangeNicModify::getNicNames()
	 * @uses OvhTypeTelephonyChangeNicModify::getNicPasswords()
	 * @uses OvhTypeTelephonyChangeNicModify::getNicTypes()
	 * @uses OvhTypeTelephonyChangeNicModify::getChangeTypes()
	 * @uses OvhTypeTelephonyChangeNicModify::getChangeElts()
	 * @param OvhTypeTelephonyChangeNicModify TelephonyChangeNicModify
	 * @return OvhTypeTelephonyChangeNicModifyResponse
	 */
	public function telephonyChangeNicModify(OvhTypeTelephonyChangeNicModify $_ovhTypeTelephonyChangeNicModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyChangeNicModifyResponse(self::getSoapClient()->telephonyChangeNicModify($_ovhTypeTelephonyChangeNicModify->getSession(),$_ovhTypeTelephonyChangeNicModify->getNicNames(),$_ovhTypeTelephonyChangeNicModify->getNicPasswords(),$_ovhTypeTelephonyChangeNicModify->getNicTypes(),$_ovhTypeTelephonyChangeNicModify->getChangeTypes(),$_ovhTypeTelephonyChangeNicModify->getChangeElts())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyClick2CallUserAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyClick2CallUserAdd::getSession()
	 * @uses OvhTypeTelephonyClick2CallUserAdd::getNumber()
	 * @uses OvhTypeTelephonyClick2CallUserAdd::getCountry()
	 * @uses OvhTypeTelephonyClick2CallUserAdd::getLogin()
	 * @uses OvhTypeTelephonyClick2CallUserAdd::getPassword()
	 * @param OvhTypeTelephonyClick2CallUserAdd TelephonyClick2CallUserAdd
	 * @return OvhTypeTelephonyClick2CallUserAddResponse
	 */
	public function telephonyClick2CallUserAdd(OvhTypeTelephonyClick2CallUserAdd $_ovhTypeTelephonyClick2CallUserAdd)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyClick2CallUserAddResponse(self::getSoapClient()->telephonyClick2CallUserAdd($_ovhTypeTelephonyClick2CallUserAdd->getSession(),$_ovhTypeTelephonyClick2CallUserAdd->getNumber(),$_ovhTypeTelephonyClick2CallUserAdd->getCountry(),$_ovhTypeTelephonyClick2CallUserAdd->getLogin(),$_ovhTypeTelephonyClick2CallUserAdd->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyConferenceOptionsModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyConferenceOptionsModify::getSession()
	 * @uses OvhTypeTelephonyConferenceOptionsModify::getNumber()
	 * @uses OvhTypeTelephonyConferenceOptionsModify::getCountry()
	 * @uses OvhTypeTelephonyConferenceOptionsModify::getRoom()
	 * @uses OvhTypeTelephonyConferenceOptionsModify::getAskName()
	 * @uses OvhTypeTelephonyConferenceOptionsModify::getTellMemberCount()
	 * @uses OvhTypeTelephonyConferenceOptionsModify::getAnnounce_rcv()
	 * @uses OvhTypeTelephonyConferenceOptionsModify::getAnnounce_snd()
	 * @uses OvhTypeTelephonyConferenceOptionsModify::getDtmfmenu()
	 * @uses OvhTypeTelephonyConferenceOptionsModify::getRecordConf()
	 * @uses OvhTypeTelephonyConferenceOptionsModify::getRecordDir()
	 * @param OvhTypeTelephonyConferenceOptionsModify TelephonyConferenceOptionsModify
	 * @return OvhTypeTelephonyConferenceOptionsModifyResponse
	 */
	public function telephonyConferenceOptionsModify(OvhTypeTelephonyConferenceOptionsModify $_ovhTypeTelephonyConferenceOptionsModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyConferenceOptionsModifyResponse(self::getSoapClient()->telephonyConferenceOptionsModify($_ovhTypeTelephonyConferenceOptionsModify->getSession(),$_ovhTypeTelephonyConferenceOptionsModify->getNumber(),$_ovhTypeTelephonyConferenceOptionsModify->getCountry(),$_ovhTypeTelephonyConferenceOptionsModify->getRoom(),$_ovhTypeTelephonyConferenceOptionsModify->getAskName(),$_ovhTypeTelephonyConferenceOptionsModify->getTellMemberCount(),$_ovhTypeTelephonyConferenceOptionsModify->getAnnounce_rcv(),$_ovhTypeTelephonyConferenceOptionsModify->getAnnounce_snd(),$_ovhTypeTelephonyConferenceOptionsModify->getDtmfmenu(),$_ovhTypeTelephonyConferenceOptionsModify->getRecordConf(),$_ovhTypeTelephonyConferenceOptionsModify->getRecordDir())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyHuntingGenericScreenOptionsModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyHuntingGenericScreenOptionsModify::getSession()
	 * @uses OvhTypeTelephonyHuntingGenericScreenOptionsModify::getNumber()
	 * @uses OvhTypeTelephonyHuntingGenericScreenOptionsModify::getCountry()
	 * @uses OvhTypeTelephonyHuntingGenericScreenOptionsModify::getForwardUnconditionalNumber()
	 * @uses OvhTypeTelephonyHuntingGenericScreenOptionsModify::getMainVoicemail()
	 * @uses OvhTypeTelephonyHuntingGenericScreenOptionsModify::getForwardPolicyIndex()
	 * @uses OvhTypeTelephonyHuntingGenericScreenOptionsModify::getTimeout()
	 * @param OvhTypeTelephonyHuntingGenericScreenOptionsModify TelephonyHuntingGenericScreenOptionsModify
	 * @return OvhTypeTelephonyHuntingGenericScreenOptionsModifyResponse
	 */
	public function telephonyHuntingGenericScreenOptionsModify(OvhTypeTelephonyHuntingGenericScreenOptionsModify $_ovhTypeTelephonyHuntingGenericScreenOptionsModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyHuntingGenericScreenOptionsModifyResponse(self::getSoapClient()->telephonyHuntingGenericScreenOptionsModify($_ovhTypeTelephonyHuntingGenericScreenOptionsModify->getSession(),$_ovhTypeTelephonyHuntingGenericScreenOptionsModify->getNumber(),$_ovhTypeTelephonyHuntingGenericScreenOptionsModify->getCountry(),$_ovhTypeTelephonyHuntingGenericScreenOptionsModify->getForwardUnconditionalNumber(),$_ovhTypeTelephonyHuntingGenericScreenOptionsModify->getMainVoicemail(),$_ovhTypeTelephonyHuntingGenericScreenOptionsModify->getForwardPolicyIndex(),$_ovhTypeTelephonyHuntingGenericScreenOptionsModify->getTimeout())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyPlugAndPhoneInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyPlugAndPhoneInfo::getSession()
	 * @uses OvhTypeTelephonyPlugAndPhoneInfo::getNumber()
	 * @uses OvhTypeTelephonyPlugAndPhoneInfo::getCountry()
	 * @param OvhTypeTelephonyPlugAndPhoneInfo TelephonyPlugAndPhoneInfo
	 * @return OvhTypeTelephonyPlugAndPhoneInfoResponse
	 */
	public function telephonyPlugAndPhoneInfo(OvhTypeTelephonyPlugAndPhoneInfo $_ovhTypeTelephonyPlugAndPhoneInfo)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyPlugAndPhoneInfoResponse(self::getSoapClient()->telephonyPlugAndPhoneInfo($_ovhTypeTelephonyPlugAndPhoneInfo->getSession(),$_ovhTypeTelephonyPlugAndPhoneInfo->getNumber(),$_ovhTypeTelephonyPlugAndPhoneInfo->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyFaxCampaignDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyFaxCampaignDelete::getSession()
	 * @uses OvhTypeTelephonyFaxCampaignDelete::getNumber()
	 * @uses OvhTypeTelephonyFaxCampaignDelete::getCountry()
	 * @uses OvhTypeTelephonyFaxCampaignDelete::getReference()
	 * @param OvhTypeTelephonyFaxCampaignDelete TelephonyFaxCampaignDelete
	 * @return OvhTypeTelephonyFaxCampaignDeleteResponse
	 */
	public function telephonyFaxCampaignDelete(OvhTypeTelephonyFaxCampaignDelete $_ovhTypeTelephonyFaxCampaignDelete)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyFaxCampaignDeleteResponse(self::getSoapClient()->telephonyFaxCampaignDelete($_ovhTypeTelephonyFaxCampaignDelete->getSession(),$_ovhTypeTelephonyFaxCampaignDelete->getNumber(),$_ovhTypeTelephonyFaxCampaignDelete->getCountry(),$_ovhTypeTelephonyFaxCampaignDelete->getReference())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyReversmentsRefundFromBillingAccount
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyReversmentsRefundFromBillingAccount::getSession()
	 * @uses OvhTypeTelephonyReversmentsRefundFromBillingAccount::getBillingAccount()
	 * @param OvhTypeTelephonyReversmentsRefundFromBillingAccount TelephonyReversmentsRefundFromBillingAccount
	 * @return OvhTypeTelephonyReversmentsRefundFromBillingAccountResponse
	 */
	public function telephonyReversmentsRefundFromBillingAccount(OvhTypeTelephonyReversmentsRefundFromBillingAccount $_ovhTypeTelephonyReversmentsRefundFromBillingAccount)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyReversmentsRefundFromBillingAccountResponse(self::getSoapClient()->telephonyReversmentsRefundFromBillingAccount($_ovhTypeTelephonyReversmentsRefundFromBillingAccount->getSession(),$_ovhTypeTelephonyReversmentsRefundFromBillingAccount->getBillingAccount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyVoicemailMessageDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyVoicemailMessageDelete::getSession()
	 * @uses OvhTypeTelephonyVoicemailMessageDelete::getNumber()
	 * @uses OvhTypeTelephonyVoicemailMessageDelete::getCountry()
	 * @uses OvhTypeTelephonyVoicemailMessageDelete::getMessageType()
	 * @param OvhTypeTelephonyVoicemailMessageDelete TelephonyVoicemailMessageDelete
	 * @return OvhTypeTelephonyVoicemailMessageDeleteResponse
	 */
	public function telephonyVoicemailMessageDelete(OvhTypeTelephonyVoicemailMessageDelete $_ovhTypeTelephonyVoicemailMessageDelete)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyVoicemailMessageDeleteResponse(self::getSoapClient()->telephonyVoicemailMessageDelete($_ovhTypeTelephonyVoicemailMessageDelete->getSession(),$_ovhTypeTelephonyVoicemailMessageDelete->getNumber(),$_ovhTypeTelephonyVoicemailMessageDelete->getCountry(),$_ovhTypeTelephonyVoicemailMessageDelete->getMessageType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyLineOptionsList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyLineOptionsList::getSession()
	 * @uses OvhTypeTelephonyLineOptionsList::getNumber()
	 * @uses OvhTypeTelephonyLineOptionsList::getCountry()
	 * @param OvhTypeTelephonyLineOptionsList TelephonyLineOptionsList
	 * @return OvhTypeTelephonyLineOptionsListResponse
	 */
	public function telephonyLineOptionsList(OvhTypeTelephonyLineOptionsList $_ovhTypeTelephonyLineOptionsList)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyLineOptionsListResponse(self::getSoapClient()->telephonyLineOptionsList($_ovhTypeTelephonyLineOptionsList->getSession(),$_ovhTypeTelephonyLineOptionsList->getNumber(),$_ovhTypeTelephonyLineOptionsList->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call telephonyAbbreviatedNumberModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTelephonyAbbreviatedNumberModify::getSession()
	 * @uses OvhTypeTelephonyAbbreviatedNumberModify::getNumber()
	 * @uses OvhTypeTelephonyAbbreviatedNumberModify::getCountry()
	 * @uses OvhTypeTelephonyAbbreviatedNumberModify::getAbbreviatedNumber()
	 * @uses OvhTypeTelephonyAbbreviatedNumberModify::getRelatedNumber()
	 * @uses OvhTypeTelephonyAbbreviatedNumberModify::getName()
	 * @uses OvhTypeTelephonyAbbreviatedNumberModify::getSurname()
	 * @param OvhTypeTelephonyAbbreviatedNumberModify TelephonyAbbreviatedNumberModify
	 * @return OvhTypeTelephonyAbbreviatedNumberModifyResponse
	 */
	public function telephonyAbbreviatedNumberModify(OvhTypeTelephonyAbbreviatedNumberModify $_ovhTypeTelephonyAbbreviatedNumberModify)
	{
		try
		{
			$this->setResult(new OvhTypeTelephonyAbbreviatedNumberModifyResponse(self::getSoapClient()->telephonyAbbreviatedNumberModify($_ovhTypeTelephonyAbbreviatedNumberModify->getSession(),$_ovhTypeTelephonyAbbreviatedNumberModify->getNumber(),$_ovhTypeTelephonyAbbreviatedNumberModify->getCountry(),$_ovhTypeTelephonyAbbreviatedNumberModify->getAbbreviatedNumber(),$_ovhTypeTelephonyAbbreviatedNumberModify->getRelatedNumber(),$_ovhTypeTelephonyAbbreviatedNumberModify->getName(),$_ovhTypeTelephonyAbbreviatedNumberModify->getSurname())));
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
	 * @return OvhTypeTelephonyAbbreviatedNumberModifyResponse
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