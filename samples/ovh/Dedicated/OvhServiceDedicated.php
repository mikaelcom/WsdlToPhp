<?php
/**
 * Class file for OvhServiceDedicated
 * @date 02/07/2012
 */
/**
 * Class OvhServiceDedicated
 * @date 02/07/2012
 */
class OvhServiceDedicated extends OvhWsdlClass
{
	/**
	 * Method to call dedicatedReverseDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedReverseDel::getSession()
	 * @uses OvhTypeDedicatedReverseDel::getHostname()
	 * @uses OvhTypeDedicatedReverseDel::getIp()
	 * @param OvhTypeDedicatedReverseDel DedicatedReverseDel
	 * @return OvhTypeDedicatedReverseDelResponse
	 */
	public function dedicatedReverseDel(OvhTypeDedicatedReverseDel $_ovhTypeDedicatedReverseDel)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedReverseDelResponse(self::getSoapClient()->dedicatedReverseDel($_ovhTypeDedicatedReverseDel->getSession(),$_ovhTypeDedicatedReverseDel->getHostname(),$_ovhTypeDedicatedReverseDel->getIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedDelServiceMonitoringAlert
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedDelServiceMonitoringAlert::getSession()
	 * @uses OvhTypeDedicatedDelServiceMonitoringAlert::getIp()
	 * @uses OvhTypeDedicatedDelServiceMonitoringAlert::getPort()
	 * @uses OvhTypeDedicatedDelServiceMonitoringAlert::getItemId()
	 * @uses OvhTypeDedicatedDelServiceMonitoringAlert::getMedia()
	 * @uses OvhTypeDedicatedDelServiceMonitoringAlert::getDestination()
	 * @param OvhTypeDedicatedDelServiceMonitoringAlert DedicatedDelServiceMonitoringAlert
	 * @return OvhTypeDedicatedDelServiceMonitoringAlertResponse
	 */
	public function dedicatedDelServiceMonitoringAlert(OvhTypeDedicatedDelServiceMonitoringAlert $_ovhTypeDedicatedDelServiceMonitoringAlert)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedDelServiceMonitoringAlertResponse(self::getSoapClient()->dedicatedDelServiceMonitoringAlert($_ovhTypeDedicatedDelServiceMonitoringAlert->getSession(),$_ovhTypeDedicatedDelServiceMonitoringAlert->getIp(),$_ovhTypeDedicatedDelServiceMonitoringAlert->getPort(),$_ovhTypeDedicatedDelServiceMonitoringAlert->getItemId(),$_ovhTypeDedicatedDelServiceMonitoringAlert->getMedia(),$_ovhTypeDedicatedDelServiceMonitoringAlert->getDestination())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedAddServiceMonitoringAlertSMS
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedAddServiceMonitoringAlertSMS::getSession()
	 * @uses OvhTypeDedicatedAddServiceMonitoringAlertSMS::getIp()
	 * @uses OvhTypeDedicatedAddServiceMonitoringAlertSMS::getPort()
	 * @uses OvhTypeDedicatedAddServiceMonitoringAlertSMS::getItemId()
	 * @uses OvhTypeDedicatedAddServiceMonitoringAlertSMS::getSmsAccount()
	 * @uses OvhTypeDedicatedAddServiceMonitoringAlertSMS::getPhoneNumberTo()
	 * @param OvhTypeDedicatedAddServiceMonitoringAlertSMS DedicatedAddServiceMonitoringAlertSMS
	 * @return OvhTypeDedicatedAddServiceMonitoringAlertSMSResponse
	 */
	public function dedicatedAddServiceMonitoringAlertSMS(OvhTypeDedicatedAddServiceMonitoringAlertSMS $_ovhTypeDedicatedAddServiceMonitoringAlertSMS)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedAddServiceMonitoringAlertSMSResponse(self::getSoapClient()->dedicatedAddServiceMonitoringAlertSMS($_ovhTypeDedicatedAddServiceMonitoringAlertSMS->getSession(),$_ovhTypeDedicatedAddServiceMonitoringAlertSMS->getIp(),$_ovhTypeDedicatedAddServiceMonitoringAlertSMS->getPort(),$_ovhTypeDedicatedAddServiceMonitoringAlertSMS->getItemId(),$_ovhTypeDedicatedAddServiceMonitoringAlertSMS->getSmsAccount(),$_ovhTypeDedicatedAddServiceMonitoringAlertSMS->getPhoneNumberTo())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedIpLoadBalancingList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedIpLoadBalancingList::getSession()
	 * @param OvhTypeDedicatedIpLoadBalancingList DedicatedIpLoadBalancingList
	 * @return OvhTypeDedicatedIpLoadBalancingListResponse
	 */
	public function dedicatedIpLoadBalancingList(OvhTypeDedicatedIpLoadBalancingList $_ovhTypeDedicatedIpLoadBalancingList)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedIpLoadBalancingListResponse(self::getSoapClient()->dedicatedIpLoadBalancingList($_ovhTypeDedicatedIpLoadBalancingList->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupReinstallConfiguration
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupReinstallConfiguration::getSession()
	 * @uses OvhTypeDedicatedBackupReinstallConfiguration::getHostname()
	 * @param OvhTypeDedicatedBackupReinstallConfiguration DedicatedBackupReinstallConfiguration
	 * @return OvhTypeDedicatedBackupReinstallConfigurationResponse
	 */
	public function dedicatedBackupReinstallConfiguration(OvhTypeDedicatedBackupReinstallConfiguration $_ovhTypeDedicatedBackupReinstallConfiguration)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupReinstallConfigurationResponse(self::getSoapClient()->dedicatedBackupReinstallConfiguration($_ovhTypeDedicatedBackupReinstallConfiguration->getSession(),$_ovhTypeDedicatedBackupReinstallConfiguration->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupGetHisto
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupGetHisto::getSession()
	 * @uses OvhTypeDedicatedBackupGetHisto::getHostname()
	 * @uses OvhTypeDedicatedBackupGetHisto::getBackupId()
	 * @param OvhTypeDedicatedBackupGetHisto DedicatedBackupGetHisto
	 * @return OvhTypeDedicatedBackupGetHistoResponse
	 */
	public function dedicatedBackupGetHisto(OvhTypeDedicatedBackupGetHisto $_ovhTypeDedicatedBackupGetHisto)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupGetHistoResponse(self::getSoapClient()->dedicatedBackupGetHisto($_ovhTypeDedicatedBackupGetHisto->getSession(),$_ovhTypeDedicatedBackupGetHisto->getHostname(),$_ovhTypeDedicatedBackupGetHisto->getBackupId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupUpdate::getSession()
	 * @uses OvhTypeDedicatedBackupUpdate::getHostname()
	 * @uses OvhTypeDedicatedBackupUpdate::getBackupId()
	 * @uses OvhTypeDedicatedBackupUpdate::getEmail()
	 * @uses OvhTypeDedicatedBackupUpdate::getSnapshot()
	 * @uses OvhTypeDedicatedBackupUpdate::getSshPort()
	 * @uses OvhTypeDedicatedBackupUpdate::getStatus()
	 * @uses OvhTypeDedicatedBackupUpdate::getLanguage()
	 * @uses OvhTypeDedicatedBackupUpdate::getSrc()
	 * @param OvhTypeDedicatedBackupUpdate DedicatedBackupUpdate
	 * @return OvhTypeDedicatedBackupUpdateResponse
	 */
	public function dedicatedBackupUpdate(OvhTypeDedicatedBackupUpdate $_ovhTypeDedicatedBackupUpdate)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupUpdateResponse(self::getSoapClient()->dedicatedBackupUpdate($_ovhTypeDedicatedBackupUpdate->getSession(),$_ovhTypeDedicatedBackupUpdate->getHostname(),$_ovhTypeDedicatedBackupUpdate->getBackupId(),$_ovhTypeDedicatedBackupUpdate->getEmail(),$_ovhTypeDedicatedBackupUpdate->getSnapshot(),$_ovhTypeDedicatedBackupUpdate->getSshPort(),$_ovhTypeDedicatedBackupUpdate->getStatus(),$_ovhTypeDedicatedBackupUpdate->getLanguage(),$_ovhTypeDedicatedBackupUpdate->getSrc())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedNetbootGetRescueEmail
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedNetbootGetRescueEmail::getSession()
	 * @uses OvhTypeDedicatedNetbootGetRescueEmail::getHostname()
	 * @param OvhTypeDedicatedNetbootGetRescueEmail DedicatedNetbootGetRescueEmail
	 * @return OvhTypeDedicatedNetbootGetRescueEmailResponse
	 */
	public function dedicatedNetbootGetRescueEmail(OvhTypeDedicatedNetbootGetRescueEmail $_ovhTypeDedicatedNetbootGetRescueEmail)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedNetbootGetRescueEmailResponse(self::getSoapClient()->dedicatedNetbootGetRescueEmail($_ovhTypeDedicatedNetbootGetRescueEmail->getSession(),$_ovhTypeDedicatedNetbootGetRescueEmail->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedRtmListBackdoor
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedRtmListBackdoor::getSession()
	 * @uses OvhTypeDedicatedRtmListBackdoor::getHostname()
	 * @param OvhTypeDedicatedRtmListBackdoor DedicatedRtmListBackdoor
	 * @return OvhTypeDedicatedRtmListBackdoorResponse
	 */
	public function dedicatedRtmListBackdoor(OvhTypeDedicatedRtmListBackdoor $_ovhTypeDedicatedRtmListBackdoor)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedRtmListBackdoorResponse(self::getSoapClient()->dedicatedRtmListBackdoor($_ovhTypeDedicatedRtmListBackdoor->getSession(),$_ovhTypeDedicatedRtmListBackdoor->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringNotificationCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringNotificationCreate::getSession()
	 * @uses OvhTypeDedicatedMonitoringNotificationCreate::getHostname()
	 * @uses OvhTypeDedicatedMonitoringNotificationCreate::getNicAlert()
	 * @uses OvhTypeDedicatedMonitoringNotificationCreate::getLanguage()
	 * @uses OvhTypeDedicatedMonitoringNotificationCreate::getStatus()
	 * @param OvhTypeDedicatedMonitoringNotificationCreate DedicatedMonitoringNotificationCreate
	 * @return OvhTypeDedicatedMonitoringNotificationCreateResponse
	 */
	public function dedicatedMonitoringNotificationCreate(OvhTypeDedicatedMonitoringNotificationCreate $_ovhTypeDedicatedMonitoringNotificationCreate)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringNotificationCreateResponse(self::getSoapClient()->dedicatedMonitoringNotificationCreate($_ovhTypeDedicatedMonitoringNotificationCreate->getSession(),$_ovhTypeDedicatedMonitoringNotificationCreate->getHostname(),$_ovhTypeDedicatedMonitoringNotificationCreate->getNicAlert(),$_ovhTypeDedicatedMonitoringNotificationCreate->getLanguage(),$_ovhTypeDedicatedMonitoringNotificationCreate->getStatus())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupList::getSession()
	 * @uses OvhTypeDedicatedBackupList::getHostname()
	 * @uses OvhTypeDedicatedBackupList::getBackupId()
	 * @uses OvhTypeDedicatedBackupList::getBackupName()
	 * @param OvhTypeDedicatedBackupList DedicatedBackupList
	 * @return OvhTypeDedicatedBackupListResponse
	 */
	public function dedicatedBackupList(OvhTypeDedicatedBackupList $_ovhTypeDedicatedBackupList)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupListResponse(self::getSoapClient()->dedicatedBackupList($_ovhTypeDedicatedBackupList->getSession(),$_ovhTypeDedicatedBackupList->getHostname(),$_ovhTypeDedicatedBackupList->getBackupId(),$_ovhTypeDedicatedBackupList->getBackupName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedNetbootGetAll
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedNetbootGetAll::getSession()
	 * @uses OvhTypeDedicatedNetbootGetAll::getHostname()
	 * @param OvhTypeDedicatedNetbootGetAll DedicatedNetbootGetAll
	 * @return OvhTypeDedicatedNetbootGetAllResponse
	 */
	public function dedicatedNetbootGetAll(OvhTypeDedicatedNetbootGetAll $_ovhTypeDedicatedNetbootGetAll)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedNetbootGetAllResponse(self::getSoapClient()->dedicatedNetbootGetAll($_ovhTypeDedicatedNetbootGetAll->getSession(),$_ovhTypeDedicatedNetbootGetAll->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedVirtualMacIpAvailableGetList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedVirtualMacIpAvailableGetList::getSession()
	 * @uses OvhTypeDedicatedVirtualMacIpAvailableGetList::getHostname()
	 * @param OvhTypeDedicatedVirtualMacIpAvailableGetList DedicatedVirtualMacIpAvailableGetList
	 * @return OvhTypeDedicatedVirtualMacIpAvailableGetListResponse
	 */
	public function dedicatedVirtualMacIpAvailableGetList(OvhTypeDedicatedVirtualMacIpAvailableGetList $_ovhTypeDedicatedVirtualMacIpAvailableGetList)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedVirtualMacIpAvailableGetListResponse(self::getSoapClient()->dedicatedVirtualMacIpAvailableGetList($_ovhTypeDedicatedVirtualMacIpAvailableGetList->getSession(),$_ovhTypeDedicatedVirtualMacIpAvailableGetList->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringSMSCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringSMSCreate::getSession()
	 * @uses OvhTypeDedicatedMonitoringSMSCreate::getHostname()
	 * @uses OvhTypeDedicatedMonitoringSMSCreate::getSmsAccount()
	 * @uses OvhTypeDedicatedMonitoringSMSCreate::getPhoneNumberTo()
	 * @uses OvhTypeDedicatedMonitoringSMSCreate::getLanguage()
	 * @uses OvhTypeDedicatedMonitoringSMSCreate::getStatus()
	 * @param OvhTypeDedicatedMonitoringSMSCreate DedicatedMonitoringSMSCreate
	 * @return OvhTypeDedicatedMonitoringSMSCreateResponse
	 */
	public function dedicatedMonitoringSMSCreate(OvhTypeDedicatedMonitoringSMSCreate $_ovhTypeDedicatedMonitoringSMSCreate)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringSMSCreateResponse(self::getSoapClient()->dedicatedMonitoringSMSCreate($_ovhTypeDedicatedMonitoringSMSCreate->getSession(),$_ovhTypeDedicatedMonitoringSMSCreate->getHostname(),$_ovhTypeDedicatedMonitoringSMSCreate->getSmsAccount(),$_ovhTypeDedicatedMonitoringSMSCreate->getPhoneNumberTo(),$_ovhTypeDedicatedMonitoringSMSCreate->getLanguage(),$_ovhTypeDedicatedMonitoringSMSCreate->getStatus())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedRipeQuery
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedRipeQuery::getSession()
	 * @uses OvhTypeDedicatedRipeQuery::getSearch()
	 * @uses OvhTypeDedicatedRipeQuery::getType()
	 * @param OvhTypeDedicatedRipeQuery DedicatedRipeQuery
	 * @return OvhTypeDedicatedRipeQueryResponse
	 */
	public function dedicatedRipeQuery(OvhTypeDedicatedRipeQuery $_ovhTypeDedicatedRipeQuery)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedRipeQueryResponse(self::getSoapClient()->dedicatedRipeQuery($_ovhTypeDedicatedRipeQuery->getSession(),$_ovhTypeDedicatedRipeQuery->getSearch(),$_ovhTypeDedicatedRipeQuery->getType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupFtpPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupFtpPassword::getSession()
	 * @uses OvhTypeDedicatedBackupFtpPassword::getHostname()
	 * @uses OvhTypeDedicatedBackupFtpPassword::getEmail()
	 * @uses OvhTypeDedicatedBackupFtpPassword::getLanguage()
	 * @param OvhTypeDedicatedBackupFtpPassword DedicatedBackupFtpPassword
	 * @return OvhTypeDedicatedBackupFtpPasswordResponse
	 */
	public function dedicatedBackupFtpPassword(OvhTypeDedicatedBackupFtpPassword $_ovhTypeDedicatedBackupFtpPassword)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupFtpPasswordResponse(self::getSoapClient()->dedicatedBackupFtpPassword($_ovhTypeDedicatedBackupFtpPassword->getSession(),$_ovhTypeDedicatedBackupFtpPassword->getHostname(),$_ovhTypeDedicatedBackupFtpPassword->getEmail(),$_ovhTypeDedicatedBackupFtpPassword->getLanguage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedRtmBackdoorUpdateAlert
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedRtmBackdoorUpdateAlert::getSession()
	 * @uses OvhTypeDedicatedRtmBackdoorUpdateAlert::getHostname()
	 * @uses OvhTypeDedicatedRtmBackdoorUpdateAlert::getBackdoorId()
	 * @uses OvhTypeDedicatedRtmBackdoorUpdateAlert::getDo_not_mail()
	 * @param OvhTypeDedicatedRtmBackdoorUpdateAlert DedicatedRtmBackdoorUpdateAlert
	 * @return OvhTypeDedicatedRtmBackdoorUpdateAlertResponse
	 */
	public function dedicatedRtmBackdoorUpdateAlert(OvhTypeDedicatedRtmBackdoorUpdateAlert $_ovhTypeDedicatedRtmBackdoorUpdateAlert)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedRtmBackdoorUpdateAlertResponse(self::getSoapClient()->dedicatedRtmBackdoorUpdateAlert($_ovhTypeDedicatedRtmBackdoorUpdateAlert->getSession(),$_ovhTypeDedicatedRtmBackdoorUpdateAlert->getHostname(),$_ovhTypeDedicatedRtmBackdoorUpdateAlert->getBackdoorId(),$_ovhTypeDedicatedRtmBackdoorUpdateAlert->getDo_not_mail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedSecondaryDNSAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedSecondaryDNSAdd::getSession()
	 * @uses OvhTypeDedicatedSecondaryDNSAdd::getHostname()
	 * @uses OvhTypeDedicatedSecondaryDNSAdd::getIp()
	 * @uses OvhTypeDedicatedSecondaryDNSAdd::getDomain()
	 * @uses OvhTypeDedicatedSecondaryDNSAdd::getNameserver()
	 * @uses OvhTypeDedicatedSecondaryDNSAdd::getNameserverIp()
	 * @param OvhTypeDedicatedSecondaryDNSAdd DedicatedSecondaryDNSAdd
	 * @return OvhTypeDedicatedSecondaryDNSAddResponse
	 */
	public function dedicatedSecondaryDNSAdd(OvhTypeDedicatedSecondaryDNSAdd $_ovhTypeDedicatedSecondaryDNSAdd)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedSecondaryDNSAddResponse(self::getSoapClient()->dedicatedSecondaryDNSAdd($_ovhTypeDedicatedSecondaryDNSAdd->getSession(),$_ovhTypeDedicatedSecondaryDNSAdd->getHostname(),$_ovhTypeDedicatedSecondaryDNSAdd->getIp(),$_ovhTypeDedicatedSecondaryDNSAdd->getDomain(),$_ovhTypeDedicatedSecondaryDNSAdd->getNameserver(),$_ovhTypeDedicatedSecondaryDNSAdd->getNameserverIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedRtmGetStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedRtmGetStatus::getSession()
	 * @uses OvhTypeDedicatedRtmGetStatus::getHostname()
	 * @param OvhTypeDedicatedRtmGetStatus DedicatedRtmGetStatus
	 * @return OvhTypeDedicatedRtmGetStatusResponse
	 */
	public function dedicatedRtmGetStatus(OvhTypeDedicatedRtmGetStatus $_ovhTypeDedicatedRtmGetStatus)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedRtmGetStatusResponse(self::getSoapClient()->dedicatedRtmGetStatus($_ovhTypeDedicatedRtmGetStatus->getSession(),$_ovhTypeDedicatedRtmGetStatus->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedNetbootGetAvailable
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedNetbootGetAvailable::getSession()
	 * @uses OvhTypeDedicatedNetbootGetAvailable::getHostname()
	 * @param OvhTypeDedicatedNetbootGetAvailable DedicatedNetbootGetAvailable
	 * @return OvhTypeDedicatedNetbootGetAvailableResponse
	 */
	public function dedicatedNetbootGetAvailable(OvhTypeDedicatedNetbootGetAvailable $_ovhTypeDedicatedNetbootGetAvailable)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedNetbootGetAvailableResponse(self::getSoapClient()->dedicatedNetbootGetAvailable($_ovhTypeDedicatedNetbootGetAvailable->getSession(),$_ovhTypeDedicatedNetbootGetAvailable->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMailinglistGetAllowed
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMailinglistGetAllowed::getSession()
	 * @param OvhTypeDedicatedMailinglistGetAllowed DedicatedMailinglistGetAllowed
	 * @return OvhTypeDedicatedMailinglistGetAllowedResponse
	 */
	public function dedicatedMailinglistGetAllowed(OvhTypeDedicatedMailinglistGetAllowed $_ovhTypeDedicatedMailinglistGetAllowed)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMailinglistGetAllowedResponse(self::getSoapClient()->dedicatedMailinglistGetAllowed($_ovhTypeDedicatedMailinglistGetAllowed->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupInfo::getSession()
	 * @uses OvhTypeDedicatedBackupInfo::getHostname()
	 * @uses OvhTypeDedicatedBackupInfo::getBackupId()
	 * @param OvhTypeDedicatedBackupInfo DedicatedBackupInfo
	 * @return OvhTypeDedicatedBackupInfoResponse
	 */
	public function dedicatedBackupInfo(OvhTypeDedicatedBackupInfo $_ovhTypeDedicatedBackupInfo)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupInfoResponse(self::getSoapClient()->dedicatedBackupInfo($_ovhTypeDedicatedBackupInfo->getSession(),$_ovhTypeDedicatedBackupInfo->getHostname(),$_ovhTypeDedicatedBackupInfo->getBackupId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedFailoverRipeAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedFailoverRipeAdd::getSession()
	 * @uses OvhTypeDedicatedFailoverRipeAdd::getHostname()
	 * @uses OvhTypeDedicatedFailoverRipeAdd::getNetname()
	 * @uses OvhTypeDedicatedFailoverRipeAdd::getDescription()
	 * @uses OvhTypeDedicatedFailoverRipeAdd::getCountry()
	 * @uses OvhTypeDedicatedFailoverRipeAdd::getAddressesNumber()
	 * @uses OvhTypeDedicatedFailoverRipeAdd::getComment()
	 * @uses OvhTypeDedicatedFailoverRipeAdd::getRoutedToInterface()
	 * @param OvhTypeDedicatedFailoverRipeAdd DedicatedFailoverRipeAdd
	 * @return OvhTypeDedicatedFailoverRipeAddResponse
	 */
	public function dedicatedFailoverRipeAdd(OvhTypeDedicatedFailoverRipeAdd $_ovhTypeDedicatedFailoverRipeAdd)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedFailoverRipeAddResponse(self::getSoapClient()->dedicatedFailoverRipeAdd($_ovhTypeDedicatedFailoverRipeAdd->getSession(),$_ovhTypeDedicatedFailoverRipeAdd->getHostname(),$_ovhTypeDedicatedFailoverRipeAdd->getNetname(),$_ovhTypeDedicatedFailoverRipeAdd->getDescription(),$_ovhTypeDedicatedFailoverRipeAdd->getCountry(),$_ovhTypeDedicatedFailoverRipeAdd->getAddressesNumber(),$_ovhTypeDedicatedFailoverRipeAdd->getComment(),$_ovhTypeDedicatedFailoverRipeAdd->getRoutedToInterface())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedFilterIrcClientRuleAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedFilterIrcClientRuleAdd::getSession()
	 * @uses OvhTypeDedicatedFilterIrcClientRuleAdd::getHostname()
	 * @uses OvhTypeDedicatedFilterIrcClientRuleAdd::getFromIp()
	 * @uses OvhTypeDedicatedFilterIrcClientRuleAdd::getToIp()
	 * @param OvhTypeDedicatedFilterIrcClientRuleAdd DedicatedFilterIrcClientRuleAdd
	 * @return OvhTypeDedicatedFilterIrcClientRuleAddResponse
	 */
	public function dedicatedFilterIrcClientRuleAdd(OvhTypeDedicatedFilterIrcClientRuleAdd $_ovhTypeDedicatedFilterIrcClientRuleAdd)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedFilterIrcClientRuleAddResponse(self::getSoapClient()->dedicatedFilterIrcClientRuleAdd($_ovhTypeDedicatedFilterIrcClientRuleAdd->getSession(),$_ovhTypeDedicatedFilterIrcClientRuleAdd->getHostname(),$_ovhTypeDedicatedFilterIrcClientRuleAdd->getFromIp(),$_ovhTypeDedicatedFilterIrcClientRuleAdd->getToIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedInstallationTemplateList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedInstallationTemplateList::getSession()
	 * @param OvhTypeDedicatedInstallationTemplateList DedicatedInstallationTemplateList
	 * @return OvhTypeDedicatedInstallationTemplateListResponse
	 */
	public function dedicatedInstallationTemplateList(OvhTypeDedicatedInstallationTemplateList $_ovhTypeDedicatedInstallationTemplateList)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedInstallationTemplateListResponse(self::getSoapClient()->dedicatedInstallationTemplateList($_ovhTypeDedicatedInstallationTemplateList->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupGetCalendar
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupGetCalendar::getSession()
	 * @param OvhTypeDedicatedBackupGetCalendar DedicatedBackupGetCalendar
	 * @return OvhTypeDedicatedBackupGetCalendarResponse
	 */
	public function dedicatedBackupGetCalendar(OvhTypeDedicatedBackupGetCalendar $_ovhTypeDedicatedBackupGetCalendar)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupGetCalendarResponse(self::getSoapClient()->dedicatedBackupGetCalendar($_ovhTypeDedicatedBackupGetCalendar->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedIpLoadBalancingServerDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedIpLoadBalancingServerDel::getSession()
	 * @uses OvhTypeDedicatedIpLoadBalancingServerDel::getIpLoadBalancing()
	 * @uses OvhTypeDedicatedIpLoadBalancingServerDel::getHostname()
	 * @param OvhTypeDedicatedIpLoadBalancingServerDel DedicatedIpLoadBalancingServerDel
	 * @return OvhTypeDedicatedIpLoadBalancingServerDelResponse
	 */
	public function dedicatedIpLoadBalancingServerDel(OvhTypeDedicatedIpLoadBalancingServerDel $_ovhTypeDedicatedIpLoadBalancingServerDel)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedIpLoadBalancingServerDelResponse(self::getSoapClient()->dedicatedIpLoadBalancingServerDel($_ovhTypeDedicatedIpLoadBalancingServerDel->getSession(),$_ovhTypeDedicatedIpLoadBalancingServerDel->getIpLoadBalancing(),$_ovhTypeDedicatedIpLoadBalancingServerDel->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedEditServiceMonitoringItem
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedEditServiceMonitoringItem::getSession()
	 * @uses OvhTypeDedicatedEditServiceMonitoringItem::getIp()
	 * @uses OvhTypeDedicatedEditServiceMonitoringItem::getItemId()
	 * @uses OvhTypeDedicatedEditServiceMonitoringItem::getPeriod()
	 * @uses OvhTypeDedicatedEditServiceMonitoringItem::getString()
	 * @param OvhTypeDedicatedEditServiceMonitoringItem DedicatedEditServiceMonitoringItem
	 * @return OvhTypeDedicatedEditServiceMonitoringItemResponse
	 */
	public function dedicatedEditServiceMonitoringItem(OvhTypeDedicatedEditServiceMonitoringItem $_ovhTypeDedicatedEditServiceMonitoringItem)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedEditServiceMonitoringItemResponse(self::getSoapClient()->dedicatedEditServiceMonitoringItem($_ovhTypeDedicatedEditServiceMonitoringItem->getSession(),$_ovhTypeDedicatedEditServiceMonitoringItem->getIp(),$_ovhTypeDedicatedEditServiceMonitoringItem->getItemId(),$_ovhTypeDedicatedEditServiceMonitoringItem->getPeriod(),$_ovhTypeDedicatedEditServiceMonitoringItem->getString())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedIPForUDPServerList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedIPForUDPServerList::getSession()
	 * @uses OvhTypeDedicatedIPForUDPServerList::getHostname()
	 * @param OvhTypeDedicatedIPForUDPServerList DedicatedIPForUDPServerList
	 * @return OvhTypeDedicatedIPForUDPServerListResponse
	 */
	public function dedicatedIPForUDPServerList(OvhTypeDedicatedIPForUDPServerList $_ovhTypeDedicatedIPForUDPServerList)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedIPForUDPServerListResponse(self::getSoapClient()->dedicatedIPForUDPServerList($_ovhTypeDedicatedIPForUDPServerList->getSession(),$_ovhTypeDedicatedIPForUDPServerList->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupSet::getSession()
	 * @uses OvhTypeDedicatedBackupSet::getHostname()
	 * @uses OvhTypeDedicatedBackupSet::getBackupId()
	 * @uses OvhTypeDedicatedBackupSet::getEmail()
	 * @uses OvhTypeDedicatedBackupSet::getBackupType()
	 * @uses OvhTypeDedicatedBackupSet::getSnapshot()
	 * @uses OvhTypeDedicatedBackupSet::getSshPort()
	 * @uses OvhTypeDedicatedBackupSet::getStatus()
	 * @uses OvhTypeDedicatedBackupSet::getLanguage()
	 * @uses OvhTypeDedicatedBackupSet::getSrc()
	 * @param OvhTypeDedicatedBackupSet DedicatedBackupSet
	 * @return OvhTypeDedicatedBackupSetResponse
	 */
	public function dedicatedBackupSet(OvhTypeDedicatedBackupSet $_ovhTypeDedicatedBackupSet)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupSetResponse(self::getSoapClient()->dedicatedBackupSet($_ovhTypeDedicatedBackupSet->getSession(),$_ovhTypeDedicatedBackupSet->getHostname(),$_ovhTypeDedicatedBackupSet->getBackupId(),$_ovhTypeDedicatedBackupSet->getEmail(),$_ovhTypeDedicatedBackupSet->getBackupType(),$_ovhTypeDedicatedBackupSet->getSnapshot(),$_ovhTypeDedicatedBackupSet->getSshPort(),$_ovhTypeDedicatedBackupSet->getStatus(),$_ovhTypeDedicatedBackupSet->getLanguage(),$_ovhTypeDedicatedBackupSet->getSrc())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedVirtualMacIpDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedVirtualMacIpDelete::getSession()
	 * @uses OvhTypeDedicatedVirtualMacIpDelete::getHostname()
	 * @uses OvhTypeDedicatedVirtualMacIpDelete::getIp()
	 * @param OvhTypeDedicatedVirtualMacIpDelete DedicatedVirtualMacIpDelete
	 * @return OvhTypeDedicatedVirtualMacIpDeleteResponse
	 */
	public function dedicatedVirtualMacIpDelete(OvhTypeDedicatedVirtualMacIpDelete $_ovhTypeDedicatedVirtualMacIpDelete)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedVirtualMacIpDeleteResponse(self::getSoapClient()->dedicatedVirtualMacIpDelete($_ovhTypeDedicatedVirtualMacIpDelete->getSession(),$_ovhTypeDedicatedVirtualMacIpDelete->getHostname(),$_ovhTypeDedicatedVirtualMacIpDelete->getIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedFailoverRipeSplit
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedFailoverRipeSplit::getSession()
	 * @uses OvhTypeDedicatedFailoverRipeSplit::getHostname()
	 * @uses OvhTypeDedicatedFailoverRipeSplit::getNetname()
	 * @uses OvhTypeDedicatedFailoverRipeSplit::getNetworkIp()
	 * @param OvhTypeDedicatedFailoverRipeSplit DedicatedFailoverRipeSplit
	 * @return OvhTypeDedicatedFailoverRipeSplitResponse
	 */
	public function dedicatedFailoverRipeSplit(OvhTypeDedicatedFailoverRipeSplit $_ovhTypeDedicatedFailoverRipeSplit)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedFailoverRipeSplitResponse(self::getSoapClient()->dedicatedFailoverRipeSplit($_ovhTypeDedicatedFailoverRipeSplit->getSession(),$_ovhTypeDedicatedFailoverRipeSplit->getHostname(),$_ovhTypeDedicatedFailoverRipeSplit->getNetname(),$_ovhTypeDedicatedFailoverRipeSplit->getNetworkIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedReverseInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedReverseInfo::getSession()
	 * @uses OvhTypeDedicatedReverseInfo::getHostname()
	 * @uses OvhTypeDedicatedReverseInfo::getIp()
	 * @param OvhTypeDedicatedReverseInfo DedicatedReverseInfo
	 * @return OvhTypeDedicatedReverseInfoResponse
	 */
	public function dedicatedReverseInfo(OvhTypeDedicatedReverseInfo $_ovhTypeDedicatedReverseInfo)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedReverseInfoResponse(self::getSoapClient()->dedicatedReverseInfo($_ovhTypeDedicatedReverseInfo->getSession(),$_ovhTypeDedicatedReverseInfo->getHostname(),$_ovhTypeDedicatedReverseInfo->getIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedCapabilitiesGetAll
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedCapabilitiesGetAll::getSession()
	 * @param OvhTypeDedicatedCapabilitiesGetAll DedicatedCapabilitiesGetAll
	 * @return OvhTypeDedicatedCapabilitiesGetAllResponse
	 */
	public function dedicatedCapabilitiesGetAll(OvhTypeDedicatedCapabilitiesGetAll $_ovhTypeDedicatedCapabilitiesGetAll)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedCapabilitiesGetAllResponse(self::getSoapClient()->dedicatedCapabilitiesGetAll($_ovhTypeDedicatedCapabilitiesGetAll->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupIncludeAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupIncludeAdd::getSession()
	 * @uses OvhTypeDedicatedBackupIncludeAdd::getHostname()
	 * @uses OvhTypeDedicatedBackupIncludeAdd::getBackupId()
	 * @uses OvhTypeDedicatedBackupIncludeAdd::getInclude()
	 * @param OvhTypeDedicatedBackupIncludeAdd DedicatedBackupIncludeAdd
	 * @return OvhTypeDedicatedBackupIncludeAddResponse
	 */
	public function dedicatedBackupIncludeAdd(OvhTypeDedicatedBackupIncludeAdd $_ovhTypeDedicatedBackupIncludeAdd)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupIncludeAddResponse(self::getSoapClient()->dedicatedBackupIncludeAdd($_ovhTypeDedicatedBackupIncludeAdd->getSession(),$_ovhTypeDedicatedBackupIncludeAdd->getHostname(),$_ovhTypeDedicatedBackupIncludeAdd->getBackupId(),$_ovhTypeDedicatedBackupIncludeAdd->getInclude())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedFailoverRipeList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedFailoverRipeList::getSession()
	 * @uses OvhTypeDedicatedFailoverRipeList::getHostname()
	 * @param OvhTypeDedicatedFailoverRipeList DedicatedFailoverRipeList
	 * @return OvhTypeDedicatedFailoverRipeListResponse
	 */
	public function dedicatedFailoverRipeList(OvhTypeDedicatedFailoverRipeList $_ovhTypeDedicatedFailoverRipeList)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedFailoverRipeListResponse(self::getSoapClient()->dedicatedFailoverRipeList($_ovhTypeDedicatedFailoverRipeList->getSession(),$_ovhTypeDedicatedFailoverRipeList->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringServiceAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringServiceAdd::getSession()
	 * @uses OvhTypeDedicatedMonitoringServiceAdd::getHostname()
	 * @uses OvhTypeDedicatedMonitoringServiceAdd::getIp()
	 * @uses OvhTypeDedicatedMonitoringServiceAdd::getPort()
	 * @uses OvhTypeDedicatedMonitoringServiceAdd::getProtocol()
	 * @uses OvhTypeDedicatedMonitoringServiceAdd::getPeriod()
	 * @uses OvhTypeDedicatedMonitoringServiceAdd::getString()
	 * @uses OvhTypeDedicatedMonitoringServiceAdd::getUrl()
	 * @uses OvhTypeDedicatedMonitoringServiceAdd::getEmail()
	 * @param OvhTypeDedicatedMonitoringServiceAdd DedicatedMonitoringServiceAdd
	 * @return OvhTypeDedicatedMonitoringServiceAddResponse
	 */
	public function dedicatedMonitoringServiceAdd(OvhTypeDedicatedMonitoringServiceAdd $_ovhTypeDedicatedMonitoringServiceAdd)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringServiceAddResponse(self::getSoapClient()->dedicatedMonitoringServiceAdd($_ovhTypeDedicatedMonitoringServiceAdd->getSession(),$_ovhTypeDedicatedMonitoringServiceAdd->getHostname(),$_ovhTypeDedicatedMonitoringServiceAdd->getIp(),$_ovhTypeDedicatedMonitoringServiceAdd->getPort(),$_ovhTypeDedicatedMonitoringServiceAdd->getProtocol(),$_ovhTypeDedicatedMonitoringServiceAdd->getPeriod(),$_ovhTypeDedicatedMonitoringServiceAdd->getString(),$_ovhTypeDedicatedMonitoringServiceAdd->getUrl(),$_ovhTypeDedicatedMonitoringServiceAdd->getEmail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedHardRebootDo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedHardRebootDo::getSession()
	 * @uses OvhTypeDedicatedHardRebootDo::getHostname()
	 * @uses OvhTypeDedicatedHardRebootDo::getReason()
	 * @uses OvhTypeDedicatedHardRebootDo::getEmail()
	 * @uses OvhTypeDedicatedHardRebootDo::getEmailLanguage()
	 * @param OvhTypeDedicatedHardRebootDo DedicatedHardRebootDo
	 * @return OvhTypeDedicatedHardRebootDoResponse
	 */
	public function dedicatedHardRebootDo(OvhTypeDedicatedHardRebootDo $_ovhTypeDedicatedHardRebootDo)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedHardRebootDoResponse(self::getSoapClient()->dedicatedHardRebootDo($_ovhTypeDedicatedHardRebootDo->getSession(),$_ovhTypeDedicatedHardRebootDo->getHostname(),$_ovhTypeDedicatedHardRebootDo->getReason(),$_ovhTypeDedicatedHardRebootDo->getEmail(),$_ovhTypeDedicatedHardRebootDo->getEmailLanguage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedReverseList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedReverseList::getSession()
	 * @uses OvhTypeDedicatedReverseList::getHostname()
	 * @param OvhTypeDedicatedReverseList DedicatedReverseList
	 * @return OvhTypeDedicatedReverseListResponse
	 */
	public function dedicatedReverseList(OvhTypeDedicatedReverseList $_ovhTypeDedicatedReverseList)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedReverseListResponse(self::getSoapClient()->dedicatedReverseList($_ovhTypeDedicatedReverseList->getSession(),$_ovhTypeDedicatedReverseList->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupFtpAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupFtpAdd::getSession()
	 * @uses OvhTypeDedicatedBackupFtpAdd::getHostname()
	 * @param OvhTypeDedicatedBackupFtpAdd DedicatedBackupFtpAdd
	 * @return OvhTypeDedicatedBackupFtpAddResponse
	 */
	public function dedicatedBackupFtpAdd(OvhTypeDedicatedBackupFtpAdd $_ovhTypeDedicatedBackupFtpAdd)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupFtpAddResponse(self::getSoapClient()->dedicatedBackupFtpAdd($_ovhTypeDedicatedBackupFtpAdd->getSession(),$_ovhTypeDedicatedBackupFtpAdd->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedVirtualMacIpUsedGetList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedVirtualMacIpUsedGetList::getSession()
	 * @uses OvhTypeDedicatedVirtualMacIpUsedGetList::getHostname()
	 * @param OvhTypeDedicatedVirtualMacIpUsedGetList DedicatedVirtualMacIpUsedGetList
	 * @return OvhTypeDedicatedVirtualMacIpUsedGetListResponse
	 */
	public function dedicatedVirtualMacIpUsedGetList(OvhTypeDedicatedVirtualMacIpUsedGetList $_ovhTypeDedicatedVirtualMacIpUsedGetList)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedVirtualMacIpUsedGetListResponse(self::getSoapClient()->dedicatedVirtualMacIpUsedGetList($_ovhTypeDedicatedVirtualMacIpUsedGetList->getSession(),$_ovhTypeDedicatedVirtualMacIpUsedGetList->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedNetbootInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedNetbootInfo::getSession()
	 * @uses OvhTypeDedicatedNetbootInfo::getHostname()
	 * @param OvhTypeDedicatedNetbootInfo DedicatedNetbootInfo
	 * @return OvhTypeDedicatedNetbootInfoResponse
	 */
	public function dedicatedNetbootInfo(OvhTypeDedicatedNetbootInfo $_ovhTypeDedicatedNetbootInfo)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedNetbootInfoResponse(self::getSoapClient()->dedicatedNetbootInfo($_ovhTypeDedicatedNetbootInfo->getSession(),$_ovhTypeDedicatedNetbootInfo->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedIpLoadBalancingAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedIpLoadBalancingAdd::getSession()
	 * @uses OvhTypeDedicatedIpLoadBalancingAdd::getName()
	 * @uses OvhTypeDedicatedIpLoadBalancingAdd::getIpLoadBalancing()
	 * @uses OvhTypeDedicatedIpLoadBalancingAdd::getServerList()
	 * @param OvhTypeDedicatedIpLoadBalancingAdd DedicatedIpLoadBalancingAdd
	 * @return OvhTypeDedicatedIpLoadBalancingAddResponse
	 */
	public function dedicatedIpLoadBalancingAdd(OvhTypeDedicatedIpLoadBalancingAdd $_ovhTypeDedicatedIpLoadBalancingAdd)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedIpLoadBalancingAddResponse(self::getSoapClient()->dedicatedIpLoadBalancingAdd($_ovhTypeDedicatedIpLoadBalancingAdd->getSession(),$_ovhTypeDedicatedIpLoadBalancingAdd->getName(),$_ovhTypeDedicatedIpLoadBalancingAdd->getIpLoadBalancing(),$_ovhTypeDedicatedIpLoadBalancingAdd->getServerList())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedAvailableNotificationNicsGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedAvailableNotificationNicsGet::getSession()
	 * @uses OvhTypeDedicatedAvailableNotificationNicsGet::getHostname()
	 * @param OvhTypeDedicatedAvailableNotificationNicsGet DedicatedAvailableNotificationNicsGet
	 * @return OvhTypeDedicatedAvailableNotificationNicsGetResponse
	 */
	public function dedicatedAvailableNotificationNicsGet(OvhTypeDedicatedAvailableNotificationNicsGet $_ovhTypeDedicatedAvailableNotificationNicsGet)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedAvailableNotificationNicsGetResponse(self::getSoapClient()->dedicatedAvailableNotificationNicsGet($_ovhTypeDedicatedAvailableNotificationNicsGet->getSession(),$_ovhTypeDedicatedAvailableNotificationNicsGet->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringServiceDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringServiceDel::getSession()
	 * @uses OvhTypeDedicatedMonitoringServiceDel::getHostname()
	 * @uses OvhTypeDedicatedMonitoringServiceDel::getItemsIdTable()
	 * @param OvhTypeDedicatedMonitoringServiceDel DedicatedMonitoringServiceDel
	 * @return OvhTypeDedicatedMonitoringServiceDelResponse
	 */
	public function dedicatedMonitoringServiceDel(OvhTypeDedicatedMonitoringServiceDel $_ovhTypeDedicatedMonitoringServiceDel)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringServiceDelResponse(self::getSoapClient()->dedicatedMonitoringServiceDel($_ovhTypeDedicatedMonitoringServiceDel->getSession(),$_ovhTypeDedicatedMonitoringServiceDel->getHostname(),$_ovhTypeDedicatedMonitoringServiceDel->getItemsIdTable())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedIpLoadBalancingServerStateModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedIpLoadBalancingServerStateModify::getSession()
	 * @uses OvhTypeDedicatedIpLoadBalancingServerStateModify::getIpLoadBalancing()
	 * @uses OvhTypeDedicatedIpLoadBalancingServerStateModify::getHostname()
	 * @uses OvhTypeDedicatedIpLoadBalancingServerStateModify::getState()
	 * @param OvhTypeDedicatedIpLoadBalancingServerStateModify DedicatedIpLoadBalancingServerStateModify
	 * @return OvhTypeDedicatedIpLoadBalancingServerStateModifyResponse
	 */
	public function dedicatedIpLoadBalancingServerStateModify(OvhTypeDedicatedIpLoadBalancingServerStateModify $_ovhTypeDedicatedIpLoadBalancingServerStateModify)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedIpLoadBalancingServerStateModifyResponse(self::getSoapClient()->dedicatedIpLoadBalancingServerStateModify($_ovhTypeDedicatedIpLoadBalancingServerStateModify->getSession(),$_ovhTypeDedicatedIpLoadBalancingServerStateModify->getIpLoadBalancing(),$_ovhTypeDedicatedIpLoadBalancingServerStateModify->getHostname(),$_ovhTypeDedicatedIpLoadBalancingServerStateModify->getState())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedReverseModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedReverseModify::getSession()
	 * @uses OvhTypeDedicatedReverseModify::getHostname()
	 * @uses OvhTypeDedicatedReverseModify::getIp()
	 * @uses OvhTypeDedicatedReverseModify::getReverse()
	 * @param OvhTypeDedicatedReverseModify DedicatedReverseModify
	 * @return OvhTypeDedicatedReverseModifyResponse
	 */
	public function dedicatedReverseModify(OvhTypeDedicatedReverseModify $_ovhTypeDedicatedReverseModify)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedReverseModifyResponse(self::getSoapClient()->dedicatedReverseModify($_ovhTypeDedicatedReverseModify->getSession(),$_ovhTypeDedicatedReverseModify->getHostname(),$_ovhTypeDedicatedReverseModify->getIp(),$_ovhTypeDedicatedReverseModify->getReverse())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedFailoverList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedFailoverList::getSession()
	 * @uses OvhTypeDedicatedFailoverList::getHostname()
	 * @param OvhTypeDedicatedFailoverList DedicatedFailoverList
	 * @return OvhTypeDedicatedFailoverListResponse
	 */
	public function dedicatedFailoverList(OvhTypeDedicatedFailoverList $_ovhTypeDedicatedFailoverList)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedFailoverListResponse(self::getSoapClient()->dedicatedFailoverList($_ovhTypeDedicatedFailoverList->getSession(),$_ovhTypeDedicatedFailoverList->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedSecondaryDNSInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedSecondaryDNSInfo::getSession()
	 * @uses OvhTypeDedicatedSecondaryDNSInfo::getHostname()
	 * @uses OvhTypeDedicatedSecondaryDNSInfo::getIp()
	 * @param OvhTypeDedicatedSecondaryDNSInfo DedicatedSecondaryDNSInfo
	 * @return OvhTypeDedicatedSecondaryDNSInfoResponse
	 */
	public function dedicatedSecondaryDNSInfo(OvhTypeDedicatedSecondaryDNSInfo $_ovhTypeDedicatedSecondaryDNSInfo)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedSecondaryDNSInfoResponse(self::getSoapClient()->dedicatedSecondaryDNSInfo($_ovhTypeDedicatedSecondaryDNSInfo->getSession(),$_ovhTypeDedicatedSecondaryDNSInfo->getHostname(),$_ovhTypeDedicatedSecondaryDNSInfo->getIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedRipeUpdateInetnum
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedRipeUpdateInetnum::getSession()
	 * @uses OvhTypeDedicatedRipeUpdateInetnum::getBlock()
	 * @uses OvhTypeDedicatedRipeUpdateInetnum::getNetname()
	 * @uses OvhTypeDedicatedRipeUpdateInetnum::getDescr()
	 * @uses OvhTypeDedicatedRipeUpdateInetnum::getRipeId()
	 * @param OvhTypeDedicatedRipeUpdateInetnum DedicatedRipeUpdateInetnum
	 * @return OvhTypeDedicatedRipeUpdateInetnumResponse
	 */
	public function dedicatedRipeUpdateInetnum(OvhTypeDedicatedRipeUpdateInetnum $_ovhTypeDedicatedRipeUpdateInetnum)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedRipeUpdateInetnumResponse(self::getSoapClient()->dedicatedRipeUpdateInetnum($_ovhTypeDedicatedRipeUpdateInetnum->getSession(),$_ovhTypeDedicatedRipeUpdateInetnum->getBlock(),$_ovhTypeDedicatedRipeUpdateInetnum->getNetname(),$_ovhTypeDedicatedRipeUpdateInetnum->getDescr(),$_ovhTypeDedicatedRipeUpdateInetnum->getRipeId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedGetAvailableNetworkFromCountry
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedGetAvailableNetworkFromCountry::getSession()
	 * @uses OvhTypeDedicatedGetAvailableNetworkFromCountry::getHostname()
	 * @uses OvhTypeDedicatedGetAvailableNetworkFromCountry::getCountry()
	 * @param OvhTypeDedicatedGetAvailableNetworkFromCountry DedicatedGetAvailableNetworkFromCountry
	 * @return OvhTypeDedicatedGetAvailableNetworkFromCountryResponse
	 */
	public function dedicatedGetAvailableNetworkFromCountry(OvhTypeDedicatedGetAvailableNetworkFromCountry $_ovhTypeDedicatedGetAvailableNetworkFromCountry)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedGetAvailableNetworkFromCountryResponse(self::getSoapClient()->dedicatedGetAvailableNetworkFromCountry($_ovhTypeDedicatedGetAvailableNetworkFromCountry->getSession(),$_ovhTypeDedicatedGetAvailableNetworkFromCountry->getHostname(),$_ovhTypeDedicatedGetAvailableNetworkFromCountry->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedFailoverAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedFailoverAdd::getSession()
	 * @uses OvhTypeDedicatedFailoverAdd::getHostname()
	 * @uses OvhTypeDedicatedFailoverAdd::getComment()
	 * @uses OvhTypeDedicatedFailoverAdd::getWantedIp()
	 * @uses OvhTypeDedicatedFailoverAdd::getRoutedTo()
	 * @uses OvhTypeDedicatedFailoverAdd::getCountry()
	 * @param OvhTypeDedicatedFailoverAdd DedicatedFailoverAdd
	 * @return OvhTypeDedicatedFailoverAddResponse
	 */
	public function dedicatedFailoverAdd(OvhTypeDedicatedFailoverAdd $_ovhTypeDedicatedFailoverAdd)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedFailoverAddResponse(self::getSoapClient()->dedicatedFailoverAdd($_ovhTypeDedicatedFailoverAdd->getSession(),$_ovhTypeDedicatedFailoverAdd->getHostname(),$_ovhTypeDedicatedFailoverAdd->getComment(),$_ovhTypeDedicatedFailoverAdd->getWantedIp(),$_ovhTypeDedicatedFailoverAdd->getRoutedTo(),$_ovhTypeDedicatedFailoverAdd->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedFilterIrcServerRuleList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedFilterIrcServerRuleList::getSession()
	 * @uses OvhTypeDedicatedFilterIrcServerRuleList::getHostname()
	 * @param OvhTypeDedicatedFilterIrcServerRuleList DedicatedFilterIrcServerRuleList
	 * @return OvhTypeDedicatedFilterIrcServerRuleListResponse
	 */
	public function dedicatedFilterIrcServerRuleList(OvhTypeDedicatedFilterIrcServerRuleList $_ovhTypeDedicatedFilterIrcServerRuleList)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedFilterIrcServerRuleListResponse(self::getSoapClient()->dedicatedFilterIrcServerRuleList($_ovhTypeDedicatedFilterIrcServerRuleList->getSession(),$_ovhTypeDedicatedFilterIrcServerRuleList->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedRipeCreateOrganisation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedRipeCreateOrganisation::getSession()
	 * @uses OvhTypeDedicatedRipeCreateOrganisation::getName()
	 * @uses OvhTypeDedicatedRipeCreateOrganisation::getAddress()
	 * @uses OvhTypeDedicatedRipeCreateOrganisation::getEmail()
	 * @uses OvhTypeDedicatedRipeCreateOrganisation::getAbuse()
	 * @uses OvhTypeDedicatedRipeCreateOrganisation::getDescr()
	 * @uses OvhTypeDedicatedRipeCreateOrganisation::getPhone()
	 * @uses OvhTypeDedicatedRipeCreateOrganisation::getFax()
	 * @uses OvhTypeDedicatedRipeCreateOrganisation::getRemarks()
	 * @param OvhTypeDedicatedRipeCreateOrganisation DedicatedRipeCreateOrganisation
	 * @return OvhTypeDedicatedRipeCreateOrganisationResponse
	 */
	public function dedicatedRipeCreateOrganisation(OvhTypeDedicatedRipeCreateOrganisation $_ovhTypeDedicatedRipeCreateOrganisation)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedRipeCreateOrganisationResponse(self::getSoapClient()->dedicatedRipeCreateOrganisation($_ovhTypeDedicatedRipeCreateOrganisation->getSession(),$_ovhTypeDedicatedRipeCreateOrganisation->getName(),$_ovhTypeDedicatedRipeCreateOrganisation->getAddress(),$_ovhTypeDedicatedRipeCreateOrganisation->getEmail(),$_ovhTypeDedicatedRipeCreateOrganisation->getAbuse(),$_ovhTypeDedicatedRipeCreateOrganisation->getDescr(),$_ovhTypeDedicatedRipeCreateOrganisation->getPhone(),$_ovhTypeDedicatedRipeCreateOrganisation->getFax(),$_ovhTypeDedicatedRipeCreateOrganisation->getRemarks())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupExcludeAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupExcludeAdd::getSession()
	 * @uses OvhTypeDedicatedBackupExcludeAdd::getHostname()
	 * @uses OvhTypeDedicatedBackupExcludeAdd::getBackupId()
	 * @uses OvhTypeDedicatedBackupExcludeAdd::getExclude()
	 * @param OvhTypeDedicatedBackupExcludeAdd DedicatedBackupExcludeAdd
	 * @return OvhTypeDedicatedBackupExcludeAddResponse
	 */
	public function dedicatedBackupExcludeAdd(OvhTypeDedicatedBackupExcludeAdd $_ovhTypeDedicatedBackupExcludeAdd)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupExcludeAddResponse(self::getSoapClient()->dedicatedBackupExcludeAdd($_ovhTypeDedicatedBackupExcludeAdd->getSession(),$_ovhTypeDedicatedBackupExcludeAdd->getHostname(),$_ovhTypeDedicatedBackupExcludeAdd->getBackupId(),$_ovhTypeDedicatedBackupExcludeAdd->getExclude())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedFilterIrcServerRuleDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedFilterIrcServerRuleDel::getSession()
	 * @uses OvhTypeDedicatedFilterIrcServerRuleDel::getHostname()
	 * @uses OvhTypeDedicatedFilterIrcServerRuleDel::getToIp()
	 * @param OvhTypeDedicatedFilterIrcServerRuleDel DedicatedFilterIrcServerRuleDel
	 * @return OvhTypeDedicatedFilterIrcServerRuleDelResponse
	 */
	public function dedicatedFilterIrcServerRuleDel(OvhTypeDedicatedFilterIrcServerRuleDel $_ovhTypeDedicatedFilterIrcServerRuleDel)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedFilterIrcServerRuleDelResponse(self::getSoapClient()->dedicatedFilterIrcServerRuleDel($_ovhTypeDedicatedFilterIrcServerRuleDel->getSession(),$_ovhTypeDedicatedFilterIrcServerRuleDel->getHostname(),$_ovhTypeDedicatedFilterIrcServerRuleDel->getToIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedFailoverRipeModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedFailoverRipeModify::getSession()
	 * @uses OvhTypeDedicatedFailoverRipeModify::getHostname()
	 * @uses OvhTypeDedicatedFailoverRipeModify::getHostnameNew()
	 * @uses OvhTypeDedicatedFailoverRipeModify::getNetworkIp()
	 * @uses OvhTypeDedicatedFailoverRipeModify::getSuffix()
	 * @uses OvhTypeDedicatedFailoverRipeModify::getIp()
	 * @param OvhTypeDedicatedFailoverRipeModify DedicatedFailoverRipeModify
	 * @return OvhTypeDedicatedFailoverRipeModifyResponse
	 */
	public function dedicatedFailoverRipeModify(OvhTypeDedicatedFailoverRipeModify $_ovhTypeDedicatedFailoverRipeModify)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedFailoverRipeModifyResponse(self::getSoapClient()->dedicatedFailoverRipeModify($_ovhTypeDedicatedFailoverRipeModify->getSession(),$_ovhTypeDedicatedFailoverRipeModify->getHostname(),$_ovhTypeDedicatedFailoverRipeModify->getHostnameNew(),$_ovhTypeDedicatedFailoverRipeModify->getNetworkIp(),$_ovhTypeDedicatedFailoverRipeModify->getSuffix(),$_ovhTypeDedicatedFailoverRipeModify->getIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringList::getSession()
	 * @uses OvhTypeDedicatedMonitoringList::getHostname()
	 * @param OvhTypeDedicatedMonitoringList DedicatedMonitoringList
	 * @return OvhTypeDedicatedMonitoringListResponse
	 */
	public function dedicatedMonitoringList(OvhTypeDedicatedMonitoringList $_ovhTypeDedicatedMonitoringList)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringListResponse(self::getSoapClient()->dedicatedMonitoringList($_ovhTypeDedicatedMonitoringList->getSession(),$_ovhTypeDedicatedMonitoringList->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupExcludeDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupExcludeDel::getSession()
	 * @uses OvhTypeDedicatedBackupExcludeDel::getHostname()
	 * @uses OvhTypeDedicatedBackupExcludeDel::getBackupId()
	 * @uses OvhTypeDedicatedBackupExcludeDel::getExclude()
	 * @param OvhTypeDedicatedBackupExcludeDel DedicatedBackupExcludeDel
	 * @return OvhTypeDedicatedBackupExcludeDelResponse
	 */
	public function dedicatedBackupExcludeDel(OvhTypeDedicatedBackupExcludeDel $_ovhTypeDedicatedBackupExcludeDel)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupExcludeDelResponse(self::getSoapClient()->dedicatedBackupExcludeDel($_ovhTypeDedicatedBackupExcludeDel->getSession(),$_ovhTypeDedicatedBackupExcludeDel->getHostname(),$_ovhTypeDedicatedBackupExcludeDel->getBackupId(),$_ovhTypeDedicatedBackupExcludeDel->getExclude())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedHardRebootStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedHardRebootStatus::getSession()
	 * @uses OvhTypeDedicatedHardRebootStatus::getHostname()
	 * @param OvhTypeDedicatedHardRebootStatus DedicatedHardRebootStatus
	 * @return OvhTypeDedicatedHardRebootStatusResponse
	 */
	public function dedicatedHardRebootStatus(OvhTypeDedicatedHardRebootStatus $_ovhTypeDedicatedHardRebootStatus)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedHardRebootStatusResponse(self::getSoapClient()->dedicatedHardRebootStatus($_ovhTypeDedicatedHardRebootStatus->getSession(),$_ovhTypeDedicatedHardRebootStatus->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedGetServiceMonitoringItem
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedGetServiceMonitoringItem::getSession()
	 * @uses OvhTypeDedicatedGetServiceMonitoringItem::getIp()
	 * @uses OvhTypeDedicatedGetServiceMonitoringItem::getItemId()
	 * @param OvhTypeDedicatedGetServiceMonitoringItem DedicatedGetServiceMonitoringItem
	 * @return OvhTypeDedicatedGetServiceMonitoringItemResponse
	 */
	public function dedicatedGetServiceMonitoringItem(OvhTypeDedicatedGetServiceMonitoringItem $_ovhTypeDedicatedGetServiceMonitoringItem)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedGetServiceMonitoringItemResponse(self::getSoapClient()->dedicatedGetServiceMonitoringItem($_ovhTypeDedicatedGetServiceMonitoringItem->getSession(),$_ovhTypeDedicatedGetServiceMonitoringItem->getIp(),$_ovhTypeDedicatedGetServiceMonitoringItem->getItemId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedReverseAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedReverseAdd::getSession()
	 * @uses OvhTypeDedicatedReverseAdd::getHostname()
	 * @uses OvhTypeDedicatedReverseAdd::getIp()
	 * @uses OvhTypeDedicatedReverseAdd::getReverse()
	 * @param OvhTypeDedicatedReverseAdd DedicatedReverseAdd
	 * @return OvhTypeDedicatedReverseAddResponse
	 */
	public function dedicatedReverseAdd(OvhTypeDedicatedReverseAdd $_ovhTypeDedicatedReverseAdd)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedReverseAddResponse(self::getSoapClient()->dedicatedReverseAdd($_ovhTypeDedicatedReverseAdd->getSession(),$_ovhTypeDedicatedReverseAdd->getHostname(),$_ovhTypeDedicatedReverseAdd->getIp(),$_ovhTypeDedicatedReverseAdd->getReverse())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupGetFreePlanning
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupGetFreePlanning::getSession()
	 * @uses OvhTypeDedicatedBackupGetFreePlanning::getHostname()
	 * @uses OvhTypeDedicatedBackupGetFreePlanning::getBackupId()
	 * @param OvhTypeDedicatedBackupGetFreePlanning DedicatedBackupGetFreePlanning
	 * @return OvhTypeDedicatedBackupGetFreePlanningResponse
	 */
	public function dedicatedBackupGetFreePlanning(OvhTypeDedicatedBackupGetFreePlanning $_ovhTypeDedicatedBackupGetFreePlanning)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupGetFreePlanningResponse(self::getSoapClient()->dedicatedBackupGetFreePlanning($_ovhTypeDedicatedBackupGetFreePlanning->getSession(),$_ovhTypeDedicatedBackupGetFreePlanning->getHostname(),$_ovhTypeDedicatedBackupGetFreePlanning->getBackupId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedInstallAllowedDistributionGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedInstallAllowedDistributionGet::getSession()
	 * @uses OvhTypeDedicatedInstallAllowedDistributionGet::getHostname()
	 * @param OvhTypeDedicatedInstallAllowedDistributionGet DedicatedInstallAllowedDistributionGet
	 * @return OvhTypeDedicatedInstallAllowedDistributionGetResponse
	 */
	public function dedicatedInstallAllowedDistributionGet(OvhTypeDedicatedInstallAllowedDistributionGet $_ovhTypeDedicatedInstallAllowedDistributionGet)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedInstallAllowedDistributionGetResponse(self::getSoapClient()->dedicatedInstallAllowedDistributionGet($_ovhTypeDedicatedInstallAllowedDistributionGet->getSession(),$_ovhTypeDedicatedInstallAllowedDistributionGet->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedCapabilitiesGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedCapabilitiesGet::getSession()
	 * @uses OvhTypeDedicatedCapabilitiesGet::getHostname()
	 * @param OvhTypeDedicatedCapabilitiesGet DedicatedCapabilitiesGet
	 * @return OvhTypeDedicatedCapabilitiesGetResponse
	 */
	public function dedicatedCapabilitiesGet(OvhTypeDedicatedCapabilitiesGet $_ovhTypeDedicatedCapabilitiesGet)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedCapabilitiesGetResponse(self::getSoapClient()->dedicatedCapabilitiesGet($_ovhTypeDedicatedCapabilitiesGet->getSession(),$_ovhTypeDedicatedCapabilitiesGet->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringSMSDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringSMSDel::getSession()
	 * @uses OvhTypeDedicatedMonitoringSMSDel::getHostname()
	 * @uses OvhTypeDedicatedMonitoringSMSDel::getId()
	 * @param OvhTypeDedicatedMonitoringSMSDel DedicatedMonitoringSMSDel
	 * @return OvhTypeDedicatedMonitoringSMSDelResponse
	 */
	public function dedicatedMonitoringSMSDel(OvhTypeDedicatedMonitoringSMSDel $_ovhTypeDedicatedMonitoringSMSDel)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringSMSDelResponse(self::getSoapClient()->dedicatedMonitoringSMSDel($_ovhTypeDedicatedMonitoringSMSDel->getSession(),$_ovhTypeDedicatedMonitoringSMSDel->getHostname(),$_ovhTypeDedicatedMonitoringSMSDel->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringAdd::getSession()
	 * @uses OvhTypeDedicatedMonitoringAdd::getHostname()
	 * @uses OvhTypeDedicatedMonitoringAdd::getEmail()
	 * @uses OvhTypeDedicatedMonitoringAdd::getLanguage()
	 * @uses OvhTypeDedicatedMonitoringAdd::getStatus()
	 * @param OvhTypeDedicatedMonitoringAdd DedicatedMonitoringAdd
	 * @return OvhTypeDedicatedMonitoringAddResponse
	 */
	public function dedicatedMonitoringAdd(OvhTypeDedicatedMonitoringAdd $_ovhTypeDedicatedMonitoringAdd)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringAddResponse(self::getSoapClient()->dedicatedMonitoringAdd($_ovhTypeDedicatedMonitoringAdd->getSession(),$_ovhTypeDedicatedMonitoringAdd->getHostname(),$_ovhTypeDedicatedMonitoringAdd->getEmail(),$_ovhTypeDedicatedMonitoringAdd->getLanguage(),$_ovhTypeDedicatedMonitoringAdd->getStatus())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedOperationList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedOperationList::getSession()
	 * @uses OvhTypeDedicatedOperationList::getHostname()
	 * @param OvhTypeDedicatedOperationList DedicatedOperationList
	 * @return OvhTypeDedicatedOperationListResponse
	 */
	public function dedicatedOperationList(OvhTypeDedicatedOperationList $_ovhTypeDedicatedOperationList)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedOperationListResponse(self::getSoapClient()->dedicatedOperationList($_ovhTypeDedicatedOperationList->getSession(),$_ovhTypeDedicatedOperationList->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupIncludeDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupIncludeDel::getSession()
	 * @uses OvhTypeDedicatedBackupIncludeDel::getHostname()
	 * @uses OvhTypeDedicatedBackupIncludeDel::getBackupId()
	 * @uses OvhTypeDedicatedBackupIncludeDel::getInclude()
	 * @param OvhTypeDedicatedBackupIncludeDel DedicatedBackupIncludeDel
	 * @return OvhTypeDedicatedBackupIncludeDelResponse
	 */
	public function dedicatedBackupIncludeDel(OvhTypeDedicatedBackupIncludeDel $_ovhTypeDedicatedBackupIncludeDel)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupIncludeDelResponse(self::getSoapClient()->dedicatedBackupIncludeDel($_ovhTypeDedicatedBackupIncludeDel->getSession(),$_ovhTypeDedicatedBackupIncludeDel->getHostname(),$_ovhTypeDedicatedBackupIncludeDel->getBackupId(),$_ovhTypeDedicatedBackupIncludeDel->getInclude())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBandwidthSwitching
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBandwidthSwitching::getSession()
	 * @uses OvhTypeDedicatedBandwidthSwitching::getHostname()
	 * @uses OvhTypeDedicatedBandwidthSwitching::getOldBandwidth()
	 * @uses OvhTypeDedicatedBandwidthSwitching::getNewBandwidth()
	 * @param OvhTypeDedicatedBandwidthSwitching DedicatedBandwidthSwitching
	 * @return OvhTypeDedicatedBandwidthSwitchingResponse
	 */
	public function dedicatedBandwidthSwitching(OvhTypeDedicatedBandwidthSwitching $_ovhTypeDedicatedBandwidthSwitching)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBandwidthSwitchingResponse(self::getSoapClient()->dedicatedBandwidthSwitching($_ovhTypeDedicatedBandwidthSwitching->getSession(),$_ovhTypeDedicatedBandwidthSwitching->getHostname(),$_ovhTypeDedicatedBandwidthSwitching->getOldBandwidth(),$_ovhTypeDedicatedBandwidthSwitching->getNewBandwidth())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedIpLoadBalancingDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedIpLoadBalancingDel::getSession()
	 * @uses OvhTypeDedicatedIpLoadBalancingDel::getIpLoadBalancing()
	 * @param OvhTypeDedicatedIpLoadBalancingDel DedicatedIpLoadBalancingDel
	 * @return OvhTypeDedicatedIpLoadBalancingDelResponse
	 */
	public function dedicatedIpLoadBalancingDel(OvhTypeDedicatedIpLoadBalancingDel $_ovhTypeDedicatedIpLoadBalancingDel)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedIpLoadBalancingDelResponse(self::getSoapClient()->dedicatedIpLoadBalancingDel($_ovhTypeDedicatedIpLoadBalancingDel->getSession(),$_ovhTypeDedicatedIpLoadBalancingDel->getIpLoadBalancing())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedInstallationTemplateUse
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedInstallationTemplateUse::getSession()
	 * @uses OvhTypeDedicatedInstallationTemplateUse::getHostname()
	 * @uses OvhTypeDedicatedInstallationTemplateUse::getTemplate()
	 * @param OvhTypeDedicatedInstallationTemplateUse DedicatedInstallationTemplateUse
	 * @return OvhTypeDedicatedInstallationTemplateUseResponse
	 */
	public function dedicatedInstallationTemplateUse(OvhTypeDedicatedInstallationTemplateUse $_ovhTypeDedicatedInstallationTemplateUse)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedInstallationTemplateUseResponse(self::getSoapClient()->dedicatedInstallationTemplateUse($_ovhTypeDedicatedInstallationTemplateUse->getSession(),$_ovhTypeDedicatedInstallationTemplateUse->getHostname(),$_ovhTypeDedicatedInstallationTemplateUse->getTemplate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedIpLoadBalancingServerAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedIpLoadBalancingServerAdd::getSession()
	 * @uses OvhTypeDedicatedIpLoadBalancingServerAdd::getIpLoadBalancing()
	 * @uses OvhTypeDedicatedIpLoadBalancingServerAdd::getHostname()
	 * @param OvhTypeDedicatedIpLoadBalancingServerAdd DedicatedIpLoadBalancingServerAdd
	 * @return OvhTypeDedicatedIpLoadBalancingServerAddResponse
	 */
	public function dedicatedIpLoadBalancingServerAdd(OvhTypeDedicatedIpLoadBalancingServerAdd $_ovhTypeDedicatedIpLoadBalancingServerAdd)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedIpLoadBalancingServerAddResponse(self::getSoapClient()->dedicatedIpLoadBalancingServerAdd($_ovhTypeDedicatedIpLoadBalancingServerAdd->getSession(),$_ovhTypeDedicatedIpLoadBalancingServerAdd->getIpLoadBalancing(),$_ovhTypeDedicatedIpLoadBalancingServerAdd->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedRipeUpdateOrganisation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedRipeUpdateOrganisation::getSession()
	 * @uses OvhTypeDedicatedRipeUpdateOrganisation::getRipeId()
	 * @uses OvhTypeDedicatedRipeUpdateOrganisation::getName()
	 * @uses OvhTypeDedicatedRipeUpdateOrganisation::getAddress()
	 * @uses OvhTypeDedicatedRipeUpdateOrganisation::getEmail()
	 * @uses OvhTypeDedicatedRipeUpdateOrganisation::getAbuse()
	 * @uses OvhTypeDedicatedRipeUpdateOrganisation::getDescr()
	 * @uses OvhTypeDedicatedRipeUpdateOrganisation::getPhone()
	 * @uses OvhTypeDedicatedRipeUpdateOrganisation::getFax()
	 * @uses OvhTypeDedicatedRipeUpdateOrganisation::getRemarks()
	 * @param OvhTypeDedicatedRipeUpdateOrganisation DedicatedRipeUpdateOrganisation
	 * @return OvhTypeDedicatedRipeUpdateOrganisationResponse
	 */
	public function dedicatedRipeUpdateOrganisation(OvhTypeDedicatedRipeUpdateOrganisation $_ovhTypeDedicatedRipeUpdateOrganisation)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedRipeUpdateOrganisationResponse(self::getSoapClient()->dedicatedRipeUpdateOrganisation($_ovhTypeDedicatedRipeUpdateOrganisation->getSession(),$_ovhTypeDedicatedRipeUpdateOrganisation->getRipeId(),$_ovhTypeDedicatedRipeUpdateOrganisation->getName(),$_ovhTypeDedicatedRipeUpdateOrganisation->getAddress(),$_ovhTypeDedicatedRipeUpdateOrganisation->getEmail(),$_ovhTypeDedicatedRipeUpdateOrganisation->getAbuse(),$_ovhTypeDedicatedRipeUpdateOrganisation->getDescr(),$_ovhTypeDedicatedRipeUpdateOrganisation->getPhone(),$_ovhTypeDedicatedRipeUpdateOrganisation->getFax(),$_ovhTypeDedicatedRipeUpdateOrganisation->getRemarks())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedNetbootModifyById
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedNetbootModifyById::getSession()
	 * @uses OvhTypeDedicatedNetbootModifyById::getHostname()
	 * @uses OvhTypeDedicatedNetbootModifyById::getId()
	 * @uses OvhTypeDedicatedNetbootModifyById::getRoot()
	 * @uses OvhTypeDedicatedNetbootModifyById::getRescueEmail()
	 * @param OvhTypeDedicatedNetbootModifyById DedicatedNetbootModifyById
	 * @return OvhTypeDedicatedNetbootModifyByIdResponse
	 */
	public function dedicatedNetbootModifyById(OvhTypeDedicatedNetbootModifyById $_ovhTypeDedicatedNetbootModifyById)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedNetbootModifyByIdResponse(self::getSoapClient()->dedicatedNetbootModifyById($_ovhTypeDedicatedNetbootModifyById->getSession(),$_ovhTypeDedicatedNetbootModifyById->getHostname(),$_ovhTypeDedicatedNetbootModifyById->getId(),$_ovhTypeDedicatedNetbootModifyById->getRoot(),$_ovhTypeDedicatedNetbootModifyById->getRescueEmail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupGetDate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupGetDate::getSession()
	 * @uses OvhTypeDedicatedBackupGetDate::getHostname()
	 * @uses OvhTypeDedicatedBackupGetDate::getBackupId()
	 * @param OvhTypeDedicatedBackupGetDate DedicatedBackupGetDate
	 * @return OvhTypeDedicatedBackupGetDateResponse
	 */
	public function dedicatedBackupGetDate(OvhTypeDedicatedBackupGetDate $_ovhTypeDedicatedBackupGetDate)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupGetDateResponse(self::getSoapClient()->dedicatedBackupGetDate($_ovhTypeDedicatedBackupGetDate->getSession(),$_ovhTypeDedicatedBackupGetDate->getHostname(),$_ovhTypeDedicatedBackupGetDate->getBackupId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedSecondaryDNSDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedSecondaryDNSDel::getSession()
	 * @uses OvhTypeDedicatedSecondaryDNSDel::getHostname()
	 * @uses OvhTypeDedicatedSecondaryDNSDel::getIp()
	 * @uses OvhTypeDedicatedSecondaryDNSDel::getDomain()
	 * @uses OvhTypeDedicatedSecondaryDNSDel::getNameserver()
	 * @param OvhTypeDedicatedSecondaryDNSDel DedicatedSecondaryDNSDel
	 * @return OvhTypeDedicatedSecondaryDNSDelResponse
	 */
	public function dedicatedSecondaryDNSDel(OvhTypeDedicatedSecondaryDNSDel $_ovhTypeDedicatedSecondaryDNSDel)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedSecondaryDNSDelResponse(self::getSoapClient()->dedicatedSecondaryDNSDel($_ovhTypeDedicatedSecondaryDNSDel->getSession(),$_ovhTypeDedicatedSecondaryDNSDel->getHostname(),$_ovhTypeDedicatedSecondaryDNSDel->getIp(),$_ovhTypeDedicatedSecondaryDNSDel->getDomain(),$_ovhTypeDedicatedSecondaryDNSDel->getNameserver())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedSecondaryDNSGetAll
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedSecondaryDNSGetAll::getSession()
	 * @uses OvhTypeDedicatedSecondaryDNSGetAll::getHostname()
	 * @param OvhTypeDedicatedSecondaryDNSGetAll DedicatedSecondaryDNSGetAll
	 * @return OvhTypeDedicatedSecondaryDNSGetAllResponse
	 */
	public function dedicatedSecondaryDNSGetAll(OvhTypeDedicatedSecondaryDNSGetAll $_ovhTypeDedicatedSecondaryDNSGetAll)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedSecondaryDNSGetAllResponse(self::getSoapClient()->dedicatedSecondaryDNSGetAll($_ovhTypeDedicatedSecondaryDNSGetAll->getSession(),$_ovhTypeDedicatedSecondaryDNSGetAll->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringNotificationDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringNotificationDel::getSession()
	 * @uses OvhTypeDedicatedMonitoringNotificationDel::getHostname()
	 * @uses OvhTypeDedicatedMonitoringNotificationDel::getId()
	 * @param OvhTypeDedicatedMonitoringNotificationDel DedicatedMonitoringNotificationDel
	 * @return OvhTypeDedicatedMonitoringNotificationDelResponse
	 */
	public function dedicatedMonitoringNotificationDel(OvhTypeDedicatedMonitoringNotificationDel $_ovhTypeDedicatedMonitoringNotificationDel)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringNotificationDelResponse(self::getSoapClient()->dedicatedMonitoringNotificationDel($_ovhTypeDedicatedMonitoringNotificationDel->getSession(),$_ovhTypeDedicatedMonitoringNotificationDel->getHostname(),$_ovhTypeDedicatedMonitoringNotificationDel->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBandwidthManagementGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBandwidthManagementGet::getSession()
	 * @uses OvhTypeDedicatedBandwidthManagementGet::getHostname()
	 * @param OvhTypeDedicatedBandwidthManagementGet DedicatedBandwidthManagementGet
	 * @return OvhTypeDedicatedBandwidthManagementGetResponse
	 */
	public function dedicatedBandwidthManagementGet(OvhTypeDedicatedBandwidthManagementGet $_ovhTypeDedicatedBandwidthManagementGet)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBandwidthManagementGetResponse(self::getSoapClient()->dedicatedBandwidthManagementGet($_ovhTypeDedicatedBandwidthManagementGet->getSession(),$_ovhTypeDedicatedBandwidthManagementGet->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringStatusUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringStatusUpdate::getSession()
	 * @uses OvhTypeDedicatedMonitoringStatusUpdate::getHostname()
	 * @uses OvhTypeDedicatedMonitoringStatusUpdate::getDisabled()
	 * @param OvhTypeDedicatedMonitoringStatusUpdate DedicatedMonitoringStatusUpdate
	 * @return OvhTypeDedicatedMonitoringStatusUpdateResponse
	 */
	public function dedicatedMonitoringStatusUpdate(OvhTypeDedicatedMonitoringStatusUpdate $_ovhTypeDedicatedMonitoringStatusUpdate)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringStatusUpdateResponse(self::getSoapClient()->dedicatedMonitoringStatusUpdate($_ovhTypeDedicatedMonitoringStatusUpdate->getSession(),$_ovhTypeDedicatedMonitoringStatusUpdate->getHostname(),$_ovhTypeDedicatedMonitoringStatusUpdate->getDisabled())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedIPForUDPMoveGetStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedIPForUDPMoveGetStatus::getSession()
	 * @uses OvhTypeDedicatedIPForUDPMoveGetStatus::getHostname()
	 * @uses OvhTypeDedicatedIPForUDPMoveGetStatus::getIp()
	 * @param OvhTypeDedicatedIPForUDPMoveGetStatus DedicatedIPForUDPMoveGetStatus
	 * @return OvhTypeDedicatedIPForUDPMoveGetStatusResponse
	 */
	public function dedicatedIPForUDPMoveGetStatus(OvhTypeDedicatedIPForUDPMoveGetStatus $_ovhTypeDedicatedIPForUDPMoveGetStatus)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedIPForUDPMoveGetStatusResponse(self::getSoapClient()->dedicatedIPForUDPMoveGetStatus($_ovhTypeDedicatedIPForUDPMoveGetStatus->getSession(),$_ovhTypeDedicatedIPForUDPMoveGetStatus->getHostname(),$_ovhTypeDedicatedIPForUDPMoveGetStatus->getIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedRipeDeleteOrganisation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedRipeDeleteOrganisation::getSession()
	 * @uses OvhTypeDedicatedRipeDeleteOrganisation::getRipeId()
	 * @uses OvhTypeDedicatedRipeDeleteOrganisation::getComment()
	 * @param OvhTypeDedicatedRipeDeleteOrganisation DedicatedRipeDeleteOrganisation
	 * @return OvhTypeDedicatedRipeDeleteOrganisationResponse
	 */
	public function dedicatedRipeDeleteOrganisation(OvhTypeDedicatedRipeDeleteOrganisation $_ovhTypeDedicatedRipeDeleteOrganisation)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedRipeDeleteOrganisationResponse(self::getSoapClient()->dedicatedRipeDeleteOrganisation($_ovhTypeDedicatedRipeDeleteOrganisation->getSession(),$_ovhTypeDedicatedRipeDeleteOrganisation->getRipeId(),$_ovhTypeDedicatedRipeDeleteOrganisation->getComment())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedFailoverRipeGetIp
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedFailoverRipeGetIp::getSession()
	 * @uses OvhTypeDedicatedFailoverRipeGetIp::getHostname()
	 * @param OvhTypeDedicatedFailoverRipeGetIp DedicatedFailoverRipeGetIp
	 * @return OvhTypeDedicatedFailoverRipeGetIpResponse
	 */
	public function dedicatedFailoverRipeGetIp(OvhTypeDedicatedFailoverRipeGetIp $_ovhTypeDedicatedFailoverRipeGetIp)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedFailoverRipeGetIpResponse(self::getSoapClient()->dedicatedFailoverRipeGetIp($_ovhTypeDedicatedFailoverRipeGetIp->getSession(),$_ovhTypeDedicatedFailoverRipeGetIp->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedInstallBasic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedInstallBasic::getSession()
	 * @uses OvhTypeDedicatedInstallBasic::getHostname()
	 * @uses OvhTypeDedicatedInstallBasic::getStatus()
	 * @uses OvhTypeDedicatedInstallBasic::getLanguage()
	 * @uses OvhTypeDedicatedInstallBasic::getBitFormat()
	 * @uses OvhTypeDedicatedInstallBasic::getOs()
	 * @uses OvhTypeDedicatedInstallBasic::getSql()
	 * @uses OvhTypeDedicatedInstallBasic::getCustomerScriptLink()
	 * @uses OvhTypeDedicatedInstallBasic::getCustomerScriptReturn()
	 * @param OvhTypeDedicatedInstallBasic DedicatedInstallBasic
	 * @return OvhTypeDedicatedInstallBasicResponse
	 */
	public function dedicatedInstallBasic(OvhTypeDedicatedInstallBasic $_ovhTypeDedicatedInstallBasic)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedInstallBasicResponse(self::getSoapClient()->dedicatedInstallBasic($_ovhTypeDedicatedInstallBasic->getSession(),$_ovhTypeDedicatedInstallBasic->getHostname(),$_ovhTypeDedicatedInstallBasic->getStatus(),$_ovhTypeDedicatedInstallBasic->getLanguage(),$_ovhTypeDedicatedInstallBasic->getBitFormat(),$_ovhTypeDedicatedInstallBasic->getOs(),$_ovhTypeDedicatedInstallBasic->getSql(),$_ovhTypeDedicatedInstallBasic->getCustomerScriptLink(),$_ovhTypeDedicatedInstallBasic->getCustomerScriptReturn())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedInstallReset
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedInstallReset::getSession()
	 * @uses OvhTypeDedicatedInstallReset::getHostname()
	 * @param OvhTypeDedicatedInstallReset DedicatedInstallReset
	 * @return OvhTypeDedicatedInstallResetResponse
	 */
	public function dedicatedInstallReset(OvhTypeDedicatedInstallReset $_ovhTypeDedicatedInstallReset)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedInstallResetResponse(self::getSoapClient()->dedicatedInstallReset($_ovhTypeDedicatedInstallReset->getSession(),$_ovhTypeDedicatedInstallReset->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringServiceAddNotification
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringServiceAddNotification::getSession()
	 * @uses OvhTypeDedicatedMonitoringServiceAddNotification::getHostname()
	 * @uses OvhTypeDedicatedMonitoringServiceAddNotification::getIp()
	 * @uses OvhTypeDedicatedMonitoringServiceAddNotification::getPort()
	 * @uses OvhTypeDedicatedMonitoringServiceAddNotification::getProtocol()
	 * @uses OvhTypeDedicatedMonitoringServiceAddNotification::getPeriod()
	 * @uses OvhTypeDedicatedMonitoringServiceAddNotification::getString()
	 * @uses OvhTypeDedicatedMonitoringServiceAddNotification::getUrl()
	 * @uses OvhTypeDedicatedMonitoringServiceAddNotification::getNicAlert()
	 * @param OvhTypeDedicatedMonitoringServiceAddNotification DedicatedMonitoringServiceAddNotification
	 * @return OvhTypeDedicatedMonitoringServiceAddNotificationResponse
	 */
	public function dedicatedMonitoringServiceAddNotification(OvhTypeDedicatedMonitoringServiceAddNotification $_ovhTypeDedicatedMonitoringServiceAddNotification)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringServiceAddNotificationResponse(self::getSoapClient()->dedicatedMonitoringServiceAddNotification($_ovhTypeDedicatedMonitoringServiceAddNotification->getSession(),$_ovhTypeDedicatedMonitoringServiceAddNotification->getHostname(),$_ovhTypeDedicatedMonitoringServiceAddNotification->getIp(),$_ovhTypeDedicatedMonitoringServiceAddNotification->getPort(),$_ovhTypeDedicatedMonitoringServiceAddNotification->getProtocol(),$_ovhTypeDedicatedMonitoringServiceAddNotification->getPeriod(),$_ovhTypeDedicatedMonitoringServiceAddNotification->getString(),$_ovhTypeDedicatedMonitoringServiceAddNotification->getUrl(),$_ovhTypeDedicatedMonitoringServiceAddNotification->getNicAlert())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedFilterIrcClientRuleDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedFilterIrcClientRuleDel::getSession()
	 * @uses OvhTypeDedicatedFilterIrcClientRuleDel::getHostname()
	 * @uses OvhTypeDedicatedFilterIrcClientRuleDel::getFromIp()
	 * @uses OvhTypeDedicatedFilterIrcClientRuleDel::getToIp()
	 * @param OvhTypeDedicatedFilterIrcClientRuleDel DedicatedFilterIrcClientRuleDel
	 * @return OvhTypeDedicatedFilterIrcClientRuleDelResponse
	 */
	public function dedicatedFilterIrcClientRuleDel(OvhTypeDedicatedFilterIrcClientRuleDel $_ovhTypeDedicatedFilterIrcClientRuleDel)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedFilterIrcClientRuleDelResponse(self::getSoapClient()->dedicatedFilterIrcClientRuleDel($_ovhTypeDedicatedFilterIrcClientRuleDel->getSession(),$_ovhTypeDedicatedFilterIrcClientRuleDel->getHostname(),$_ovhTypeDedicatedFilterIrcClientRuleDel->getFromIp(),$_ovhTypeDedicatedFilterIrcClientRuleDel->getToIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMrtgInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMrtgInfo::getSession()
	 * @uses OvhTypeDedicatedMrtgInfo::getHostname()
	 * @uses OvhTypeDedicatedMrtgInfo::getType()
	 * @uses OvhTypeDedicatedMrtgInfo::getDuration()
	 * @uses OvhTypeDedicatedMrtgInfo::getIp()
	 * @param OvhTypeDedicatedMrtgInfo DedicatedMrtgInfo
	 * @return OvhTypeDedicatedMrtgInfoResponse
	 */
	public function dedicatedMrtgInfo(OvhTypeDedicatedMrtgInfo $_ovhTypeDedicatedMrtgInfo)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMrtgInfoResponse(self::getSoapClient()->dedicatedMrtgInfo($_ovhTypeDedicatedMrtgInfo->getSession(),$_ovhTypeDedicatedMrtgInfo->getHostname(),$_ovhTypeDedicatedMrtgInfo->getType(),$_ovhTypeDedicatedMrtgInfo->getDuration(),$_ovhTypeDedicatedMrtgInfo->getIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupReinstallData
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupReinstallData::getSession()
	 * @uses OvhTypeDedicatedBackupReinstallData::getHostname()
	 * @uses OvhTypeDedicatedBackupReinstallData::getBackupId()
	 * @param OvhTypeDedicatedBackupReinstallData DedicatedBackupReinstallData
	 * @return OvhTypeDedicatedBackupReinstallDataResponse
	 */
	public function dedicatedBackupReinstallData(OvhTypeDedicatedBackupReinstallData $_ovhTypeDedicatedBackupReinstallData)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupReinstallDataResponse(self::getSoapClient()->dedicatedBackupReinstallData($_ovhTypeDedicatedBackupReinstallData->getSession(),$_ovhTypeDedicatedBackupReinstallData->getHostname(),$_ovhTypeDedicatedBackupReinstallData->getBackupId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupFtpInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupFtpInfo::getSession()
	 * @uses OvhTypeDedicatedBackupFtpInfo::getHostname()
	 * @param OvhTypeDedicatedBackupFtpInfo DedicatedBackupFtpInfo
	 * @return OvhTypeDedicatedBackupFtpInfoResponse
	 */
	public function dedicatedBackupFtpInfo(OvhTypeDedicatedBackupFtpInfo $_ovhTypeDedicatedBackupFtpInfo)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupFtpInfoResponse(self::getSoapClient()->dedicatedBackupFtpInfo($_ovhTypeDedicatedBackupFtpInfo->getSession(),$_ovhTypeDedicatedBackupFtpInfo->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringModify::getSession()
	 * @uses OvhTypeDedicatedMonitoringModify::getHostname()
	 * @uses OvhTypeDedicatedMonitoringModify::getId()
	 * @uses OvhTypeDedicatedMonitoringModify::getEmail()
	 * @uses OvhTypeDedicatedMonitoringModify::getLanguage()
	 * @uses OvhTypeDedicatedMonitoringModify::getStatus()
	 * @param OvhTypeDedicatedMonitoringModify DedicatedMonitoringModify
	 * @return OvhTypeDedicatedMonitoringModifyResponse
	 */
	public function dedicatedMonitoringModify(OvhTypeDedicatedMonitoringModify $_ovhTypeDedicatedMonitoringModify)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringModifyResponse(self::getSoapClient()->dedicatedMonitoringModify($_ovhTypeDedicatedMonitoringModify->getSession(),$_ovhTypeDedicatedMonitoringModify->getHostname(),$_ovhTypeDedicatedMonitoringModify->getId(),$_ovhTypeDedicatedMonitoringModify->getEmail(),$_ovhTypeDedicatedMonitoringModify->getLanguage(),$_ovhTypeDedicatedMonitoringModify->getStatus())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedGetRandomAvailableIpFromCountry
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedGetRandomAvailableIpFromCountry::getSession()
	 * @uses OvhTypeDedicatedGetRandomAvailableIpFromCountry::getHostname()
	 * @uses OvhTypeDedicatedGetRandomAvailableIpFromCountry::getCountry()
	 * @param OvhTypeDedicatedGetRandomAvailableIpFromCountry DedicatedGetRandomAvailableIpFromCountry
	 * @return OvhTypeDedicatedGetRandomAvailableIpFromCountryResponse
	 */
	public function dedicatedGetRandomAvailableIpFromCountry(OvhTypeDedicatedGetRandomAvailableIpFromCountry $_ovhTypeDedicatedGetRandomAvailableIpFromCountry)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedGetRandomAvailableIpFromCountryResponse(self::getSoapClient()->dedicatedGetRandomAvailableIpFromCountry($_ovhTypeDedicatedGetRandomAvailableIpFromCountry->getSession(),$_ovhTypeDedicatedGetRandomAvailableIpFromCountry->getHostname(),$_ovhTypeDedicatedGetRandomAvailableIpFromCountry->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedInstallBasicProgress
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedInstallBasicProgress::getSession()
	 * @uses OvhTypeDedicatedInstallBasicProgress::getHostname()
	 * @param OvhTypeDedicatedInstallBasicProgress DedicatedInstallBasicProgress
	 * @return OvhTypeDedicatedInstallBasicProgressResponse
	 */
	public function dedicatedInstallBasicProgress(OvhTypeDedicatedInstallBasicProgress $_ovhTypeDedicatedInstallBasicProgress)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedInstallBasicProgressResponse(self::getSoapClient()->dedicatedInstallBasicProgress($_ovhTypeDedicatedInstallBasicProgress->getSession(),$_ovhTypeDedicatedInstallBasicProgress->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedAddServiceMonitoringAlertEmail
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedAddServiceMonitoringAlertEmail::getSession()
	 * @uses OvhTypeDedicatedAddServiceMonitoringAlertEmail::getIp()
	 * @uses OvhTypeDedicatedAddServiceMonitoringAlertEmail::getPort()
	 * @uses OvhTypeDedicatedAddServiceMonitoringAlertEmail::getItemId()
	 * @uses OvhTypeDedicatedAddServiceMonitoringAlertEmail::getEmail()
	 * @param OvhTypeDedicatedAddServiceMonitoringAlertEmail DedicatedAddServiceMonitoringAlertEmail
	 * @return OvhTypeDedicatedAddServiceMonitoringAlertEmailResponse
	 */
	public function dedicatedAddServiceMonitoringAlertEmail(OvhTypeDedicatedAddServiceMonitoringAlertEmail $_ovhTypeDedicatedAddServiceMonitoringAlertEmail)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedAddServiceMonitoringAlertEmailResponse(self::getSoapClient()->dedicatedAddServiceMonitoringAlertEmail($_ovhTypeDedicatedAddServiceMonitoringAlertEmail->getSession(),$_ovhTypeDedicatedAddServiceMonitoringAlertEmail->getIp(),$_ovhTypeDedicatedAddServiceMonitoringAlertEmail->getPort(),$_ovhTypeDedicatedAddServiceMonitoringAlertEmail->getItemId(),$_ovhTypeDedicatedAddServiceMonitoringAlertEmail->getEmail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedFailoverUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedFailoverUpdate::getSession()
	 * @uses OvhTypeDedicatedFailoverUpdate::getHostname()
	 * @uses OvhTypeDedicatedFailoverUpdate::getIp()
	 * @uses OvhTypeDedicatedFailoverUpdate::getRoutedTo()
	 * @param OvhTypeDedicatedFailoverUpdate DedicatedFailoverUpdate
	 * @return OvhTypeDedicatedFailoverUpdateResponse
	 */
	public function dedicatedFailoverUpdate(OvhTypeDedicatedFailoverUpdate $_ovhTypeDedicatedFailoverUpdate)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedFailoverUpdateResponse(self::getSoapClient()->dedicatedFailoverUpdate($_ovhTypeDedicatedFailoverUpdate->getSession(),$_ovhTypeDedicatedFailoverUpdate->getHostname(),$_ovhTypeDedicatedFailoverUpdate->getIp(),$_ovhTypeDedicatedFailoverUpdate->getRoutedTo())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedFilterIrcServerRuleAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedFilterIrcServerRuleAdd::getSession()
	 * @uses OvhTypeDedicatedFilterIrcServerRuleAdd::getHostname()
	 * @uses OvhTypeDedicatedFilterIrcServerRuleAdd::getToIp()
	 * @param OvhTypeDedicatedFilterIrcServerRuleAdd DedicatedFilterIrcServerRuleAdd
	 * @return OvhTypeDedicatedFilterIrcServerRuleAddResponse
	 */
	public function dedicatedFilterIrcServerRuleAdd(OvhTypeDedicatedFilterIrcServerRuleAdd $_ovhTypeDedicatedFilterIrcServerRuleAdd)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedFilterIrcServerRuleAddResponse(self::getSoapClient()->dedicatedFilterIrcServerRuleAdd($_ovhTypeDedicatedFilterIrcServerRuleAdd->getSession(),$_ovhTypeDedicatedFilterIrcServerRuleAdd->getHostname(),$_ovhTypeDedicatedFilterIrcServerRuleAdd->getToIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedVirtualMacIpAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedVirtualMacIpAdd::getSession()
	 * @uses OvhTypeDedicatedVirtualMacIpAdd::getHostname()
	 * @uses OvhTypeDedicatedVirtualMacIpAdd::getIp()
	 * @uses OvhTypeDedicatedVirtualMacIpAdd::getNewMac()
	 * @uses OvhTypeDedicatedVirtualMacIpAdd::getTypeMac()
	 * @uses OvhTypeDedicatedVirtualMacIpAdd::getMacName()
	 * @uses OvhTypeDedicatedVirtualMacIpAdd::getMac()
	 * @param OvhTypeDedicatedVirtualMacIpAdd DedicatedVirtualMacIpAdd
	 * @return OvhTypeDedicatedVirtualMacIpAddResponse
	 */
	public function dedicatedVirtualMacIpAdd(OvhTypeDedicatedVirtualMacIpAdd $_ovhTypeDedicatedVirtualMacIpAdd)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedVirtualMacIpAddResponse(self::getSoapClient()->dedicatedVirtualMacIpAdd($_ovhTypeDedicatedVirtualMacIpAdd->getSession(),$_ovhTypeDedicatedVirtualMacIpAdd->getHostname(),$_ovhTypeDedicatedVirtualMacIpAdd->getIp(),$_ovhTypeDedicatedVirtualMacIpAdd->getNewMac(),$_ovhTypeDedicatedVirtualMacIpAdd->getTypeMac(),$_ovhTypeDedicatedVirtualMacIpAdd->getMacName(),$_ovhTypeDedicatedVirtualMacIpAdd->getMac())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedRipeGetRipeIds
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedRipeGetRipeIds::getSession()
	 * @param OvhTypeDedicatedRipeGetRipeIds DedicatedRipeGetRipeIds
	 * @return OvhTypeDedicatedRipeGetRipeIdsResponse
	 */
	public function dedicatedRipeGetRipeIds(OvhTypeDedicatedRipeGetRipeIds $_ovhTypeDedicatedRipeGetRipeIds)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedRipeGetRipeIdsResponse(self::getSoapClient()->dedicatedRipeGetRipeIds($_ovhTypeDedicatedRipeGetRipeIds->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedInfo::getSession()
	 * @uses OvhTypeDedicatedInfo::getHostname()
	 * @param OvhTypeDedicatedInfo DedicatedInfo
	 * @return OvhTypeDedicatedInfoResponse
	 */
	public function dedicatedInfo(OvhTypeDedicatedInfo $_ovhTypeDedicatedInfo)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedInfoResponse(self::getSoapClient()->dedicatedInfo($_ovhTypeDedicatedInfo->getSession(),$_ovhTypeDedicatedInfo->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedBackupUpdateDate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedBackupUpdateDate::getSession()
	 * @uses OvhTypeDedicatedBackupUpdateDate::getHostname()
	 * @uses OvhTypeDedicatedBackupUpdateDate::getBackupId()
	 * @uses OvhTypeDedicatedBackupUpdateDate::getMonday()
	 * @uses OvhTypeDedicatedBackupUpdateDate::getTuesday()
	 * @uses OvhTypeDedicatedBackupUpdateDate::getWednesday()
	 * @uses OvhTypeDedicatedBackupUpdateDate::getThursday()
	 * @uses OvhTypeDedicatedBackupUpdateDate::getFriday()
	 * @uses OvhTypeDedicatedBackupUpdateDate::getSaturday()
	 * @uses OvhTypeDedicatedBackupUpdateDate::getSunday()
	 * @param OvhTypeDedicatedBackupUpdateDate DedicatedBackupUpdateDate
	 * @return OvhTypeDedicatedBackupUpdateDateResponse
	 */
	public function dedicatedBackupUpdateDate(OvhTypeDedicatedBackupUpdateDate $_ovhTypeDedicatedBackupUpdateDate)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedBackupUpdateDateResponse(self::getSoapClient()->dedicatedBackupUpdateDate($_ovhTypeDedicatedBackupUpdateDate->getSession(),$_ovhTypeDedicatedBackupUpdateDate->getHostname(),$_ovhTypeDedicatedBackupUpdateDate->getBackupId(),$_ovhTypeDedicatedBackupUpdateDate->getMonday(),$_ovhTypeDedicatedBackupUpdateDate->getTuesday(),$_ovhTypeDedicatedBackupUpdateDate->getWednesday(),$_ovhTypeDedicatedBackupUpdateDate->getThursday(),$_ovhTypeDedicatedBackupUpdateDate->getFriday(),$_ovhTypeDedicatedBackupUpdateDate->getSaturday(),$_ovhTypeDedicatedBackupUpdateDate->getSunday())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringStatusGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringStatusGet::getSession()
	 * @uses OvhTypeDedicatedMonitoringStatusGet::getHostname()
	 * @param OvhTypeDedicatedMonitoringStatusGet DedicatedMonitoringStatusGet
	 * @return OvhTypeDedicatedMonitoringStatusGetResponse
	 */
	public function dedicatedMonitoringStatusGet(OvhTypeDedicatedMonitoringStatusGet $_ovhTypeDedicatedMonitoringStatusGet)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringStatusGetResponse(self::getSoapClient()->dedicatedMonitoringStatusGet($_ovhTypeDedicatedMonitoringStatusGet->getSession(),$_ovhTypeDedicatedMonitoringStatusGet->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedNetbootModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedNetbootModify::getSession()
	 * @uses OvhTypeDedicatedNetbootModify::getHostname()
	 * @uses OvhTypeDedicatedNetbootModify::getKernel()
	 * @uses OvhTypeDedicatedNetbootModify::getCpufamily()
	 * @uses OvhTypeDedicatedNetbootModify::getGrsec()
	 * @uses OvhTypeDedicatedNetbootModify::getSmp()
	 * @uses OvhTypeDedicatedNetbootModify::getIpv6()
	 * @uses OvhTypeDedicatedNetbootModify::getRoot()
	 * @uses OvhTypeDedicatedNetbootModify::getRescueEmail()
	 * @uses OvhTypeDedicatedNetbootModify::getHz()
	 * @param OvhTypeDedicatedNetbootModify DedicatedNetbootModify
	 * @return OvhTypeDedicatedNetbootModifyResponse
	 */
	public function dedicatedNetbootModify(OvhTypeDedicatedNetbootModify $_ovhTypeDedicatedNetbootModify)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedNetbootModifyResponse(self::getSoapClient()->dedicatedNetbootModify($_ovhTypeDedicatedNetbootModify->getSession(),$_ovhTypeDedicatedNetbootModify->getHostname(),$_ovhTypeDedicatedNetbootModify->getKernel(),$_ovhTypeDedicatedNetbootModify->getCpufamily(),$_ovhTypeDedicatedNetbootModify->getGrsec(),$_ovhTypeDedicatedNetbootModify->getSmp(),$_ovhTypeDedicatedNetbootModify->getIpv6(),$_ovhTypeDedicatedNetbootModify->getRoot(),$_ovhTypeDedicatedNetbootModify->getRescueEmail(),$_ovhTypeDedicatedNetbootModify->getHz())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedFilterIrcClientRuleList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedFilterIrcClientRuleList::getSession()
	 * @uses OvhTypeDedicatedFilterIrcClientRuleList::getHostname()
	 * @param OvhTypeDedicatedFilterIrcClientRuleList DedicatedFilterIrcClientRuleList
	 * @return OvhTypeDedicatedFilterIrcClientRuleListResponse
	 */
	public function dedicatedFilterIrcClientRuleList(OvhTypeDedicatedFilterIrcClientRuleList $_ovhTypeDedicatedFilterIrcClientRuleList)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedFilterIrcClientRuleListResponse(self::getSoapClient()->dedicatedFilterIrcClientRuleList($_ovhTypeDedicatedFilterIrcClientRuleList->getSession(),$_ovhTypeDedicatedFilterIrcClientRuleList->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedIPForUDPMove
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedIPForUDPMove::getSession()
	 * @uses OvhTypeDedicatedIPForUDPMove::getHostname()
	 * @uses OvhTypeDedicatedIPForUDPMove::getHostnameTo()
	 * @uses OvhTypeDedicatedIPForUDPMove::getIp()
	 * @param OvhTypeDedicatedIPForUDPMove DedicatedIPForUDPMove
	 * @return OvhTypeDedicatedIPForUDPMoveResponse
	 */
	public function dedicatedIPForUDPMove(OvhTypeDedicatedIPForUDPMove $_ovhTypeDedicatedIPForUDPMove)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedIPForUDPMoveResponse(self::getSoapClient()->dedicatedIPForUDPMove($_ovhTypeDedicatedIPForUDPMove->getSession(),$_ovhTypeDedicatedIPForUDPMove->getHostname(),$_ovhTypeDedicatedIPForUDPMove->getHostnameTo(),$_ovhTypeDedicatedIPForUDPMove->getIp())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringSMSModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringSMSModify::getSession()
	 * @uses OvhTypeDedicatedMonitoringSMSModify::getHostname()
	 * @uses OvhTypeDedicatedMonitoringSMSModify::getId()
	 * @uses OvhTypeDedicatedMonitoringSMSModify::getSmsAccount()
	 * @uses OvhTypeDedicatedMonitoringSMSModify::getPhoneNumberTo()
	 * @uses OvhTypeDedicatedMonitoringSMSModify::getLanguage()
	 * @uses OvhTypeDedicatedMonitoringSMSModify::getStatus()
	 * @param OvhTypeDedicatedMonitoringSMSModify DedicatedMonitoringSMSModify
	 * @return OvhTypeDedicatedMonitoringSMSModifyResponse
	 */
	public function dedicatedMonitoringSMSModify(OvhTypeDedicatedMonitoringSMSModify $_ovhTypeDedicatedMonitoringSMSModify)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringSMSModifyResponse(self::getSoapClient()->dedicatedMonitoringSMSModify($_ovhTypeDedicatedMonitoringSMSModify->getSession(),$_ovhTypeDedicatedMonitoringSMSModify->getHostname(),$_ovhTypeDedicatedMonitoringSMSModify->getId(),$_ovhTypeDedicatedMonitoringSMSModify->getSmsAccount(),$_ovhTypeDedicatedMonitoringSMSModify->getPhoneNumberTo(),$_ovhTypeDedicatedMonitoringSMSModify->getLanguage(),$_ovhTypeDedicatedMonitoringSMSModify->getStatus())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringDel::getSession()
	 * @uses OvhTypeDedicatedMonitoringDel::getHostname()
	 * @uses OvhTypeDedicatedMonitoringDel::getId()
	 * @param OvhTypeDedicatedMonitoringDel DedicatedMonitoringDel
	 * @return OvhTypeDedicatedMonitoringDelResponse
	 */
	public function dedicatedMonitoringDel(OvhTypeDedicatedMonitoringDel $_ovhTypeDedicatedMonitoringDel)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringDelResponse(self::getSoapClient()->dedicatedMonitoringDel($_ovhTypeDedicatedMonitoringDel->getSession(),$_ovhTypeDedicatedMonitoringDel->getHostname(),$_ovhTypeDedicatedMonitoringDel->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringServiceAddSMS
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringServiceAddSMS::getSession()
	 * @uses OvhTypeDedicatedMonitoringServiceAddSMS::getHostname()
	 * @uses OvhTypeDedicatedMonitoringServiceAddSMS::getIp()
	 * @uses OvhTypeDedicatedMonitoringServiceAddSMS::getPort()
	 * @uses OvhTypeDedicatedMonitoringServiceAddSMS::getProtocol()
	 * @uses OvhTypeDedicatedMonitoringServiceAddSMS::getPeriod()
	 * @uses OvhTypeDedicatedMonitoringServiceAddSMS::getString()
	 * @uses OvhTypeDedicatedMonitoringServiceAddSMS::getUrl()
	 * @uses OvhTypeDedicatedMonitoringServiceAddSMS::getSmsAccount()
	 * @uses OvhTypeDedicatedMonitoringServiceAddSMS::getPhoneNumberTo()
	 * @param OvhTypeDedicatedMonitoringServiceAddSMS DedicatedMonitoringServiceAddSMS
	 * @return OvhTypeDedicatedMonitoringServiceAddSMSResponse
	 */
	public function dedicatedMonitoringServiceAddSMS(OvhTypeDedicatedMonitoringServiceAddSMS $_ovhTypeDedicatedMonitoringServiceAddSMS)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringServiceAddSMSResponse(self::getSoapClient()->dedicatedMonitoringServiceAddSMS($_ovhTypeDedicatedMonitoringServiceAddSMS->getSession(),$_ovhTypeDedicatedMonitoringServiceAddSMS->getHostname(),$_ovhTypeDedicatedMonitoringServiceAddSMS->getIp(),$_ovhTypeDedicatedMonitoringServiceAddSMS->getPort(),$_ovhTypeDedicatedMonitoringServiceAddSMS->getProtocol(),$_ovhTypeDedicatedMonitoringServiceAddSMS->getPeriod(),$_ovhTypeDedicatedMonitoringServiceAddSMS->getString(),$_ovhTypeDedicatedMonitoringServiceAddSMS->getUrl(),$_ovhTypeDedicatedMonitoringServiceAddSMS->getSmsAccount(),$_ovhTypeDedicatedMonitoringServiceAddSMS->getPhoneNumberTo())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedList::getSession()
	 * @param OvhTypeDedicatedList DedicatedList
	 * @return OvhTypeDedicatedListResponse
	 */
	public function dedicatedList(OvhTypeDedicatedList $_ovhTypeDedicatedList)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedListResponse(self::getSoapClient()->dedicatedList($_ovhTypeDedicatedList->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedIPForUDPGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedIPForUDPGet::getSession()
	 * @uses OvhTypeDedicatedIPForUDPGet::getHostname()
	 * @param OvhTypeDedicatedIPForUDPGet DedicatedIPForUDPGet
	 * @return OvhTypeDedicatedIPForUDPGetResponse
	 */
	public function dedicatedIPForUDPGet(OvhTypeDedicatedIPForUDPGet $_ovhTypeDedicatedIPForUDPGet)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedIPForUDPGetResponse(self::getSoapClient()->dedicatedIPForUDPGet($_ovhTypeDedicatedIPForUDPGet->getSession(),$_ovhTypeDedicatedIPForUDPGet->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedGetAvailableIpFromNetwork
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedGetAvailableIpFromNetwork::getSession()
	 * @uses OvhTypeDedicatedGetAvailableIpFromNetwork::getHostname()
	 * @uses OvhTypeDedicatedGetAvailableIpFromNetwork::getNetwork()
	 * @param OvhTypeDedicatedGetAvailableIpFromNetwork DedicatedGetAvailableIpFromNetwork
	 * @return OvhTypeDedicatedGetAvailableIpFromNetworkResponse
	 */
	public function dedicatedGetAvailableIpFromNetwork(OvhTypeDedicatedGetAvailableIpFromNetwork $_ovhTypeDedicatedGetAvailableIpFromNetwork)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedGetAvailableIpFromNetworkResponse(self::getSoapClient()->dedicatedGetAvailableIpFromNetwork($_ovhTypeDedicatedGetAvailableIpFromNetwork->getSession(),$_ovhTypeDedicatedGetAvailableIpFromNetwork->getHostname(),$_ovhTypeDedicatedGetAvailableIpFromNetwork->getNetwork())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMailinglistSubscribe
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMailinglistSubscribe::getSession()
	 * @uses OvhTypeDedicatedMailinglistSubscribe::getEmail()
	 * @uses OvhTypeDedicatedMailinglistSubscribe::getMailingList()
	 * @param OvhTypeDedicatedMailinglistSubscribe DedicatedMailinglistSubscribe
	 * @return OvhTypeDedicatedMailinglistSubscribeResponse
	 */
	public function dedicatedMailinglistSubscribe(OvhTypeDedicatedMailinglistSubscribe $_ovhTypeDedicatedMailinglistSubscribe)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMailinglistSubscribeResponse(self::getSoapClient()->dedicatedMailinglistSubscribe($_ovhTypeDedicatedMailinglistSubscribe->getSession(),$_ovhTypeDedicatedMailinglistSubscribe->getEmail(),$_ovhTypeDedicatedMailinglistSubscribe->getMailingList())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedIpLoadBalancingNameModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedIpLoadBalancingNameModify::getSession()
	 * @uses OvhTypeDedicatedIpLoadBalancingNameModify::getIpLoadBalancing()
	 * @uses OvhTypeDedicatedIpLoadBalancingNameModify::getName()
	 * @param OvhTypeDedicatedIpLoadBalancingNameModify DedicatedIpLoadBalancingNameModify
	 * @return OvhTypeDedicatedIpLoadBalancingNameModifyResponse
	 */
	public function dedicatedIpLoadBalancingNameModify(OvhTypeDedicatedIpLoadBalancingNameModify $_ovhTypeDedicatedIpLoadBalancingNameModify)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedIpLoadBalancingNameModifyResponse(self::getSoapClient()->dedicatedIpLoadBalancingNameModify($_ovhTypeDedicatedIpLoadBalancingNameModify->getSession(),$_ovhTypeDedicatedIpLoadBalancingNameModify->getIpLoadBalancing(),$_ovhTypeDedicatedIpLoadBalancingNameModify->getName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dedicatedMonitoringServiceList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDedicatedMonitoringServiceList::getSession()
	 * @uses OvhTypeDedicatedMonitoringServiceList::getHostname()
	 * @param OvhTypeDedicatedMonitoringServiceList DedicatedMonitoringServiceList
	 * @return OvhTypeDedicatedMonitoringServiceListResponse
	 */
	public function dedicatedMonitoringServiceList(OvhTypeDedicatedMonitoringServiceList $_ovhTypeDedicatedMonitoringServiceList)
	{
		try
		{
			$this->setResult(new OvhTypeDedicatedMonitoringServiceListResponse(self::getSoapClient()->dedicatedMonitoringServiceList($_ovhTypeDedicatedMonitoringServiceList->getSession(),$_ovhTypeDedicatedMonitoringServiceList->getHostname())));
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
	 * @return OvhTypeDedicatedMonitoringServiceListResponse
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