<?php
/**
 * Class file for AmazonEc2ServiceDescribe
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceDescribe
 * @date 10/07/2012
 */
class AmazonEc2ServiceDescribe extends AmazonEc2WsdlClass
{
	/**
	 * Method to call DescribeAddresses
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeAddressesType::getPublicIpsSet()
	 * @uses AmazonEc2TypeDescribeAddressesType::getAllocationIdsSet()
	 * @uses AmazonEc2TypeDescribeAddressesType::getFilterSet()
	 * @param AmazonEc2TypeDescribeAddressesType DescribeAddressesType
	 * @return AmazonEc2TypeDescribeAddressesResponseType
	 */
	public function DescribeAddresses(AmazonEc2TypeDescribeAddressesType $_AmazonEc2TypeDescribeAddressesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeAddresses(array('publicIpsSet'=>$_AmazonEc2TypeDescribeAddressesType->getPublicIpsSet(),'allocationIdsSet'=>$_AmazonEc2TypeDescribeAddressesType->getAllocationIdsSet(),'filterSet'=>$_AmazonEc2TypeDescribeAddressesType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeAvailabilityZones
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeAvailabilityZonesType::getAvailabilityZoneSet()
	 * @uses AmazonEc2TypeDescribeAvailabilityZonesType::getFilterSet()
	 * @param AmazonEc2TypeDescribeAvailabilityZonesType DescribeAvailabilityZonesType
	 * @return AmazonEc2TypeDescribeAvailabilityZonesResponseType
	 */
	public function DescribeAvailabilityZones(AmazonEc2TypeDescribeAvailabilityZonesType $_AmazonEc2TypeDescribeAvailabilityZonesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeAvailabilityZones(array('availabilityZoneSet'=>$_AmazonEc2TypeDescribeAvailabilityZonesType->getAvailabilityZoneSet(),'filterSet'=>$_AmazonEc2TypeDescribeAvailabilityZonesType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeBundleTasks
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeBundleTasksType::getBundlesSet()
	 * @uses AmazonEc2TypeDescribeBundleTasksType::getFilterSet()
	 * @param AmazonEc2TypeDescribeBundleTasksType DescribeBundleTasksType
	 * @return AmazonEc2TypeDescribeBundleTasksResponseType
	 */
	public function DescribeBundleTasks(AmazonEc2TypeDescribeBundleTasksType $_AmazonEc2TypeDescribeBundleTasksType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeBundleTasks(array('bundlesSet'=>$_AmazonEc2TypeDescribeBundleTasksType->getBundlesSet(),'filterSet'=>$_AmazonEc2TypeDescribeBundleTasksType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeConversionTasks
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeConversionTasksType::getConversionTaskIdSet()
	 * @param AmazonEc2TypeDescribeConversionTasksType DescribeConversionTasksType
	 * @return AmazonEc2TypeDescribeConversionTasksResponseType
	 */
	public function DescribeConversionTasks(AmazonEc2TypeDescribeConversionTasksType $_AmazonEc2TypeDescribeConversionTasksType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeConversionTasks(array('conversionTaskIdSet'=>$_AmazonEc2TypeDescribeConversionTasksType->getConversionTaskIdSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeCustomerGateways
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeCustomerGatewaysType::getCustomerGatewaySet()
	 * @uses AmazonEc2TypeDescribeCustomerGatewaysType::getFilterSet()
	 * @param AmazonEc2TypeDescribeCustomerGatewaysType DescribeCustomerGatewaysType
	 * @return AmazonEc2TypeDescribeCustomerGatewaysResponseType
	 */
	public function DescribeCustomerGateways(AmazonEc2TypeDescribeCustomerGatewaysType $_AmazonEc2TypeDescribeCustomerGatewaysType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeCustomerGateways(array('customerGatewaySet'=>$_AmazonEc2TypeDescribeCustomerGatewaysType->getCustomerGatewaySet(),'filterSet'=>$_AmazonEc2TypeDescribeCustomerGatewaysType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeDhcpOptions
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeDhcpOptionsType::getDhcpOptionsSet()
	 * @uses AmazonEc2TypeDescribeDhcpOptionsType::getFilterSet()
	 * @param AmazonEc2TypeDescribeDhcpOptionsType DescribeDhcpOptionsType
	 * @return AmazonEc2TypeDescribeDhcpOptionsResponseType
	 */
	public function DescribeDhcpOptions(AmazonEc2TypeDescribeDhcpOptionsType $_AmazonEc2TypeDescribeDhcpOptionsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeDhcpOptions(array('dhcpOptionsSet'=>$_AmazonEc2TypeDescribeDhcpOptionsType->getDhcpOptionsSet(),'filterSet'=>$_AmazonEc2TypeDescribeDhcpOptionsType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeExportTasks
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeExportTasksType::getExportTaskIdSet()
	 * @param AmazonEc2TypeDescribeExportTasksType DescribeExportTasksType
	 * @return AmazonEc2TypeDescribeExportTasksResponseType
	 */
	public function DescribeExportTasks(AmazonEc2TypeDescribeExportTasksType $_AmazonEc2TypeDescribeExportTasksType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeExportTasks(array('exportTaskIdSet'=>$_AmazonEc2TypeDescribeExportTasksType->getExportTaskIdSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeImageAttribute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeImageAttributeType::getImageId()
	 * @uses AmazonEc2TypeDescribeImageAttributeType::getLaunchPermission()
	 * @uses AmazonEc2TypeDescribeImageAttributeType::getProductCodes()
	 * @uses AmazonEc2TypeDescribeImageAttributeType::getKernel()
	 * @uses AmazonEc2TypeDescribeImageAttributeType::getRamdisk()
	 * @uses AmazonEc2TypeDescribeImageAttributeType::getBlockDeviceMapping()
	 * @uses AmazonEc2TypeDescribeImageAttributeType::getDescription()
	 * @uses AmazonEc2TypeDescribeImageAttributeType::getInstanceTypeCategory()
	 * @param AmazonEc2TypeDescribeImageAttributeType DescribeImageAttributeType
	 * @return AmazonEc2TypeDescribeImageAttributeResponseType
	 */
	public function DescribeImageAttribute(AmazonEc2TypeDescribeImageAttributeType $_AmazonEc2TypeDescribeImageAttributeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeImageAttribute(array('imageId'=>$_AmazonEc2TypeDescribeImageAttributeType->getImageId(),'launchPermission'=>$_AmazonEc2TypeDescribeImageAttributeType->getLaunchPermission(),'productCodes'=>$_AmazonEc2TypeDescribeImageAttributeType->getProductCodes(),'kernel'=>$_AmazonEc2TypeDescribeImageAttributeType->getKernel(),'ramdisk'=>$_AmazonEc2TypeDescribeImageAttributeType->getRamdisk(),'blockDeviceMapping'=>$_AmazonEc2TypeDescribeImageAttributeType->getBlockDeviceMapping(),'description'=>$_AmazonEc2TypeDescribeImageAttributeType->getDescription(),'instanceTypeCategory'=>$_AmazonEc2TypeDescribeImageAttributeType->getInstanceTypeCategory())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeImages
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeImagesType::getExecutableBySet()
	 * @uses AmazonEc2TypeDescribeImagesType::getImagesSet()
	 * @uses AmazonEc2TypeDescribeImagesType::getOwnersSet()
	 * @uses AmazonEc2TypeDescribeImagesType::getFilterSet()
	 * @param AmazonEc2TypeDescribeImagesType DescribeImagesType
	 * @return AmazonEc2TypeDescribeImagesResponseType
	 */
	public function DescribeImages(AmazonEc2TypeDescribeImagesType $_AmazonEc2TypeDescribeImagesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeImages(array('executableBySet'=>$_AmazonEc2TypeDescribeImagesType->getExecutableBySet(),'imagesSet'=>$_AmazonEc2TypeDescribeImagesType->getImagesSet(),'ownersSet'=>$_AmazonEc2TypeDescribeImagesType->getOwnersSet(),'filterSet'=>$_AmazonEc2TypeDescribeImagesType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeInstanceAttribute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeInstanceAttributeType::getInstanceId()
	 * @uses AmazonEc2TypeDescribeInstanceAttributeType::getInstanceType()
	 * @uses AmazonEc2TypeDescribeInstanceAttributeType::getKernel()
	 * @uses AmazonEc2TypeDescribeInstanceAttributeType::getRamdisk()
	 * @uses AmazonEc2TypeDescribeInstanceAttributeType::getUserData()
	 * @uses AmazonEc2TypeDescribeInstanceAttributeType::getDisableApiTermination()
	 * @uses AmazonEc2TypeDescribeInstanceAttributeType::getInstanceInitiatedShutdownBehavior()
	 * @uses AmazonEc2TypeDescribeInstanceAttributeType::getRootDeviceName()
	 * @uses AmazonEc2TypeDescribeInstanceAttributeType::getBlockDeviceMapping()
	 * @uses AmazonEc2TypeDescribeInstanceAttributeType::getSourceDestCheck()
	 * @uses AmazonEc2TypeDescribeInstanceAttributeType::getGroupSet()
	 * @uses AmazonEc2TypeDescribeInstanceAttributeType::getProductCodes()
	 * @param AmazonEc2TypeDescribeInstanceAttributeType DescribeInstanceAttributeType
	 * @return AmazonEc2TypeDescribeInstanceAttributeResponseType
	 */
	public function DescribeInstanceAttribute(AmazonEc2TypeDescribeInstanceAttributeType $_AmazonEc2TypeDescribeInstanceAttributeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeInstanceAttribute(array('instanceId'=>$_AmazonEc2TypeDescribeInstanceAttributeType->getInstanceId(),'instanceType'=>$_AmazonEc2TypeDescribeInstanceAttributeType->getInstanceType(),'kernel'=>$_AmazonEc2TypeDescribeInstanceAttributeType->getKernel(),'ramdisk'=>$_AmazonEc2TypeDescribeInstanceAttributeType->getRamdisk(),'userData'=>$_AmazonEc2TypeDescribeInstanceAttributeType->getUserData(),'disableApiTermination'=>$_AmazonEc2TypeDescribeInstanceAttributeType->getDisableApiTermination(),'instanceInitiatedShutdownBehavior'=>$_AmazonEc2TypeDescribeInstanceAttributeType->getInstanceInitiatedShutdownBehavior(),'rootDeviceName'=>$_AmazonEc2TypeDescribeInstanceAttributeType->getRootDeviceName(),'blockDeviceMapping'=>$_AmazonEc2TypeDescribeInstanceAttributeType->getBlockDeviceMapping(),'sourceDestCheck'=>$_AmazonEc2TypeDescribeInstanceAttributeType->getSourceDestCheck(),'groupSet'=>$_AmazonEc2TypeDescribeInstanceAttributeType->getGroupSet(),'productCodes'=>$_AmazonEc2TypeDescribeInstanceAttributeType->getProductCodes())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeInstances
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeInstancesType::getInstancesSet()
	 * @uses AmazonEc2TypeDescribeInstancesType::getFilterSet()
	 * @param AmazonEc2TypeDescribeInstancesType DescribeInstancesType
	 * @return AmazonEc2TypeDescribeInstancesResponseType
	 */
	public function DescribeInstances(AmazonEc2TypeDescribeInstancesType $_AmazonEc2TypeDescribeInstancesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeInstances(array('instancesSet'=>$_AmazonEc2TypeDescribeInstancesType->getInstancesSet(),'filterSet'=>$_AmazonEc2TypeDescribeInstancesType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeInstanceStatus
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeInstanceStatusType::getInstancesSet()
	 * @uses AmazonEc2TypeDescribeInstanceStatusType::getFilterSet()
	 * @uses AmazonEc2TypeDescribeInstanceStatusType::getNextToken()
	 * @uses AmazonEc2TypeDescribeInstanceStatusType::getMaxResults()
	 * @uses AmazonEc2TypeDescribeInstanceStatusType::getIncludeAllInstances()
	 * @param AmazonEc2TypeDescribeInstanceStatusType DescribeInstanceStatusType
	 * @return AmazonEc2TypeDescribeInstanceStatusResponseType
	 */
	public function DescribeInstanceStatus(AmazonEc2TypeDescribeInstanceStatusType $_AmazonEc2TypeDescribeInstanceStatusType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeInstanceStatus(array('instancesSet'=>$_AmazonEc2TypeDescribeInstanceStatusType->getInstancesSet(),'filterSet'=>$_AmazonEc2TypeDescribeInstanceStatusType->getFilterSet(),'nextToken'=>$_AmazonEc2TypeDescribeInstanceStatusType->getNextToken(),'maxResults'=>$_AmazonEc2TypeDescribeInstanceStatusType->getMaxResults(),'includeAllInstances'=>$_AmazonEc2TypeDescribeInstanceStatusType->getIncludeAllInstances())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeInternetGateways
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeInternetGatewaysType::getInternetGatewayIdSet()
	 * @uses AmazonEc2TypeDescribeInternetGatewaysType::getFilterSet()
	 * @param AmazonEc2TypeDescribeInternetGatewaysType DescribeInternetGatewaysType
	 * @return AmazonEc2TypeDescribeInternetGatewaysResponseType
	 */
	public function DescribeInternetGateways(AmazonEc2TypeDescribeInternetGatewaysType $_AmazonEc2TypeDescribeInternetGatewaysType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeInternetGateways(array('internetGatewayIdSet'=>$_AmazonEc2TypeDescribeInternetGatewaysType->getInternetGatewayIdSet(),'filterSet'=>$_AmazonEc2TypeDescribeInternetGatewaysType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeKeyPairs
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeKeyPairsType::getKeySet()
	 * @uses AmazonEc2TypeDescribeKeyPairsType::getFilterSet()
	 * @param AmazonEc2TypeDescribeKeyPairsType DescribeKeyPairsType
	 * @return AmazonEc2TypeDescribeKeyPairsResponseType
	 */
	public function DescribeKeyPairs(AmazonEc2TypeDescribeKeyPairsType $_AmazonEc2TypeDescribeKeyPairsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeKeyPairs(array('keySet'=>$_AmazonEc2TypeDescribeKeyPairsType->getKeySet(),'filterSet'=>$_AmazonEc2TypeDescribeKeyPairsType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeLicenses
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeLicensesType::getLicenseIdSet()
	 * @uses AmazonEc2TypeDescribeLicensesType::getFilterSet()
	 * @param AmazonEc2TypeDescribeLicensesType DescribeLicensesType
	 * @return AmazonEc2TypeDescribeLicensesResponseType
	 */
	public function DescribeLicenses(AmazonEc2TypeDescribeLicensesType $_AmazonEc2TypeDescribeLicensesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeLicenses(array('licenseIdSet'=>$_AmazonEc2TypeDescribeLicensesType->getLicenseIdSet(),'filterSet'=>$_AmazonEc2TypeDescribeLicensesType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeNetworkAcls
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeNetworkAclsType::getNetworkAclIdSet()
	 * @uses AmazonEc2TypeDescribeNetworkAclsType::getFilterSet()
	 * @param AmazonEc2TypeDescribeNetworkAclsType DescribeNetworkAclsType
	 * @return AmazonEc2TypeDescribeNetworkAclsResponseType
	 */
	public function DescribeNetworkAcls(AmazonEc2TypeDescribeNetworkAclsType $_AmazonEc2TypeDescribeNetworkAclsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeNetworkAcls(array('networkAclIdSet'=>$_AmazonEc2TypeDescribeNetworkAclsType->getNetworkAclIdSet(),'filterSet'=>$_AmazonEc2TypeDescribeNetworkAclsType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeNetworkInterfaceAttribute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeNetworkInterfaceAttributeType::getNetworkInterfaceId()
	 * @uses AmazonEc2TypeDescribeNetworkInterfaceAttributeType::getDescription()
	 * @uses AmazonEc2TypeDescribeNetworkInterfaceAttributeType::getSourceDestCheck()
	 * @uses AmazonEc2TypeDescribeNetworkInterfaceAttributeType::getGroupSet()
	 * @uses AmazonEc2TypeDescribeNetworkInterfaceAttributeType::getAttachment()
	 * @param AmazonEc2TypeDescribeNetworkInterfaceAttributeType DescribeNetworkInterfaceAttributeType
	 * @return AmazonEc2TypeDescribeNetworkInterfaceAttributeResponseType
	 */
	public function DescribeNetworkInterfaceAttribute(AmazonEc2TypeDescribeNetworkInterfaceAttributeType $_AmazonEc2TypeDescribeNetworkInterfaceAttributeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeNetworkInterfaceAttribute(array('networkInterfaceId'=>$_AmazonEc2TypeDescribeNetworkInterfaceAttributeType->getNetworkInterfaceId(),'description'=>$_AmazonEc2TypeDescribeNetworkInterfaceAttributeType->getDescription(),'sourceDestCheck'=>$_AmazonEc2TypeDescribeNetworkInterfaceAttributeType->getSourceDestCheck(),'groupSet'=>$_AmazonEc2TypeDescribeNetworkInterfaceAttributeType->getGroupSet(),'attachment'=>$_AmazonEc2TypeDescribeNetworkInterfaceAttributeType->getAttachment())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeNetworkInterfaces
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeNetworkInterfacesType::getNetworkInterfaceIdSet()
	 * @uses AmazonEc2TypeDescribeNetworkInterfacesType::getFilterSet()
	 * @param AmazonEc2TypeDescribeNetworkInterfacesType DescribeNetworkInterfacesType
	 * @return AmazonEc2TypeDescribeNetworkInterfacesResponseType
	 */
	public function DescribeNetworkInterfaces(AmazonEc2TypeDescribeNetworkInterfacesType $_AmazonEc2TypeDescribeNetworkInterfacesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeNetworkInterfaces(array('networkInterfaceIdSet'=>$_AmazonEc2TypeDescribeNetworkInterfacesType->getNetworkInterfaceIdSet(),'filterSet'=>$_AmazonEc2TypeDescribeNetworkInterfacesType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribePlacementGroups
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribePlacementGroupsType::getPlacementGroupSet()
	 * @uses AmazonEc2TypeDescribePlacementGroupsType::getFilterSet()
	 * @param AmazonEc2TypeDescribePlacementGroupsType DescribePlacementGroupsType
	 * @return AmazonEc2TypeDescribePlacementGroupsResponseType
	 */
	public function DescribePlacementGroups(AmazonEc2TypeDescribePlacementGroupsType $_AmazonEc2TypeDescribePlacementGroupsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribePlacementGroups(array('placementGroupSet'=>$_AmazonEc2TypeDescribePlacementGroupsType->getPlacementGroupSet(),'filterSet'=>$_AmazonEc2TypeDescribePlacementGroupsType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeRegions
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeRegionsType::getRegionSet()
	 * @uses AmazonEc2TypeDescribeRegionsType::getFilterSet()
	 * @param AmazonEc2TypeDescribeRegionsType DescribeRegionsType
	 * @return AmazonEc2TypeDescribeRegionsResponseType
	 */
	public function DescribeRegions(AmazonEc2TypeDescribeRegionsType $_AmazonEc2TypeDescribeRegionsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeRegions(array('regionSet'=>$_AmazonEc2TypeDescribeRegionsType->getRegionSet(),'filterSet'=>$_AmazonEc2TypeDescribeRegionsType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeReservedInstances
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeReservedInstancesType::getReservedInstancesSet()
	 * @uses AmazonEc2TypeDescribeReservedInstancesType::getFilterSet()
	 * @uses AmazonEc2TypeDescribeReservedInstancesType::getOfferingType()
	 * @param AmazonEc2TypeDescribeReservedInstancesType DescribeReservedInstancesType
	 * @return AmazonEc2TypeDescribeReservedInstancesResponseType
	 */
	public function DescribeReservedInstances(AmazonEc2TypeDescribeReservedInstancesType $_AmazonEc2TypeDescribeReservedInstancesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeReservedInstances(array('reservedInstancesSet'=>$_AmazonEc2TypeDescribeReservedInstancesType->getReservedInstancesSet(),'filterSet'=>$_AmazonEc2TypeDescribeReservedInstancesType->getFilterSet(),'offeringType'=>$_AmazonEc2TypeDescribeReservedInstancesType->getOfferingType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeReservedInstancesOfferings
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeReservedInstancesOfferingsType::getReservedInstancesOfferingsSet()
	 * @uses AmazonEc2TypeDescribeReservedInstancesOfferingsType::getInstanceType()
	 * @uses AmazonEc2TypeDescribeReservedInstancesOfferingsType::getAvailabilityZone()
	 * @uses AmazonEc2TypeDescribeReservedInstancesOfferingsType::getProductDescription()
	 * @uses AmazonEc2TypeDescribeReservedInstancesOfferingsType::getFilterSet()
	 * @uses AmazonEc2TypeDescribeReservedInstancesOfferingsType::getInstanceTenancy()
	 * @uses AmazonEc2TypeDescribeReservedInstancesOfferingsType::getOfferingType()
	 * @param AmazonEc2TypeDescribeReservedInstancesOfferingsType DescribeReservedInstancesOfferingsType
	 * @return AmazonEc2TypeDescribeReservedInstancesOfferingsResponseType
	 */
	public function DescribeReservedInstancesOfferings(AmazonEc2TypeDescribeReservedInstancesOfferingsType $_AmazonEc2TypeDescribeReservedInstancesOfferingsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeReservedInstancesOfferings(array('reservedInstancesOfferingsSet'=>$_AmazonEc2TypeDescribeReservedInstancesOfferingsType->getReservedInstancesOfferingsSet(),'instanceType'=>$_AmazonEc2TypeDescribeReservedInstancesOfferingsType->getInstanceType(),'availabilityZone'=>$_AmazonEc2TypeDescribeReservedInstancesOfferingsType->getAvailabilityZone(),'productDescription'=>$_AmazonEc2TypeDescribeReservedInstancesOfferingsType->getProductDescription(),'filterSet'=>$_AmazonEc2TypeDescribeReservedInstancesOfferingsType->getFilterSet(),'instanceTenancy'=>$_AmazonEc2TypeDescribeReservedInstancesOfferingsType->getInstanceTenancy(),'offeringType'=>$_AmazonEc2TypeDescribeReservedInstancesOfferingsType->getOfferingType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeRouteTables
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeRouteTablesType::getRouteTableIdSet()
	 * @uses AmazonEc2TypeDescribeRouteTablesType::getFilterSet()
	 * @param AmazonEc2TypeDescribeRouteTablesType DescribeRouteTablesType
	 * @return AmazonEc2TypeDescribeRouteTablesResponseType
	 */
	public function DescribeRouteTables(AmazonEc2TypeDescribeRouteTablesType $_AmazonEc2TypeDescribeRouteTablesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeRouteTables(array('routeTableIdSet'=>$_AmazonEc2TypeDescribeRouteTablesType->getRouteTableIdSet(),'filterSet'=>$_AmazonEc2TypeDescribeRouteTablesType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeSecurityGroups
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeSecurityGroupsType::getSecurityGroupSet()
	 * @uses AmazonEc2TypeDescribeSecurityGroupsType::getSecurityGroupIdSet()
	 * @uses AmazonEc2TypeDescribeSecurityGroupsType::getFilterSet()
	 * @param AmazonEc2TypeDescribeSecurityGroupsType DescribeSecurityGroupsType
	 * @return AmazonEc2TypeDescribeSecurityGroupsResponseType
	 */
	public function DescribeSecurityGroups(AmazonEc2TypeDescribeSecurityGroupsType $_AmazonEc2TypeDescribeSecurityGroupsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeSecurityGroups(array('securityGroupSet'=>$_AmazonEc2TypeDescribeSecurityGroupsType->getSecurityGroupSet(),'securityGroupIdSet'=>$_AmazonEc2TypeDescribeSecurityGroupsType->getSecurityGroupIdSet(),'filterSet'=>$_AmazonEc2TypeDescribeSecurityGroupsType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeSnapshotAttribute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeSnapshotAttributeType::getSnapshotId()
	 * @uses AmazonEc2TypeDescribeSnapshotAttributeType::getCreateVolumePermission()
	 * @uses AmazonEc2TypeDescribeSnapshotAttributeType::getProductCodes()
	 * @param AmazonEc2TypeDescribeSnapshotAttributeType DescribeSnapshotAttributeType
	 * @return AmazonEc2TypeDescribeSnapshotAttributeResponseType
	 */
	public function DescribeSnapshotAttribute(AmazonEc2TypeDescribeSnapshotAttributeType $_AmazonEc2TypeDescribeSnapshotAttributeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeSnapshotAttribute(array('snapshotId'=>$_AmazonEc2TypeDescribeSnapshotAttributeType->getSnapshotId(),'createVolumePermission'=>$_AmazonEc2TypeDescribeSnapshotAttributeType->getCreateVolumePermission(),'productCodes'=>$_AmazonEc2TypeDescribeSnapshotAttributeType->getProductCodes())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeSnapshots
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeSnapshotsType::getSnapshotSet()
	 * @uses AmazonEc2TypeDescribeSnapshotsType::getOwnersSet()
	 * @uses AmazonEc2TypeDescribeSnapshotsType::getRestorableBySet()
	 * @uses AmazonEc2TypeDescribeSnapshotsType::getFilterSet()
	 * @param AmazonEc2TypeDescribeSnapshotsType DescribeSnapshotsType
	 * @return AmazonEc2TypeDescribeSnapshotsResponseType
	 */
	public function DescribeSnapshots(AmazonEc2TypeDescribeSnapshotsType $_AmazonEc2TypeDescribeSnapshotsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeSnapshots(array('snapshotSet'=>$_AmazonEc2TypeDescribeSnapshotsType->getSnapshotSet(),'ownersSet'=>$_AmazonEc2TypeDescribeSnapshotsType->getOwnersSet(),'restorableBySet'=>$_AmazonEc2TypeDescribeSnapshotsType->getRestorableBySet(),'filterSet'=>$_AmazonEc2TypeDescribeSnapshotsType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeSpotDatafeedSubscription
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @param AmazonEc2TypeDescribeSpotDatafeedSubscriptionType DescribeSpotDatafeedSubscriptionType
	 * @return AmazonEc2TypeDescribeSpotDatafeedSubscriptionResponseType
	 */
	public function DescribeSpotDatafeedSubscription(AmazonEc2TypeDescribeSpotDatafeedSubscriptionType $_AmazonEc2TypeDescribeSpotDatafeedSubscriptionType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeSpotDatafeedSubscription(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeSpotInstanceRequests
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeSpotInstanceRequestsType::getSpotInstanceRequestIdSet()
	 * @uses AmazonEc2TypeDescribeSpotInstanceRequestsType::getFilterSet()
	 * @param AmazonEc2TypeDescribeSpotInstanceRequestsType DescribeSpotInstanceRequestsType
	 * @return AmazonEc2TypeDescribeSpotInstanceRequestsResponseType
	 */
	public function DescribeSpotInstanceRequests(AmazonEc2TypeDescribeSpotInstanceRequestsType $_AmazonEc2TypeDescribeSpotInstanceRequestsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeSpotInstanceRequests(array('spotInstanceRequestIdSet'=>$_AmazonEc2TypeDescribeSpotInstanceRequestsType->getSpotInstanceRequestIdSet(),'filterSet'=>$_AmazonEc2TypeDescribeSpotInstanceRequestsType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeSpotPriceHistory
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeSpotPriceHistoryType::getStartTime()
	 * @uses AmazonEc2TypeDescribeSpotPriceHistoryType::getEndTime()
	 * @uses AmazonEc2TypeDescribeSpotPriceHistoryType::getInstanceTypeSet()
	 * @uses AmazonEc2TypeDescribeSpotPriceHistoryType::getProductDescriptionSet()
	 * @uses AmazonEc2TypeDescribeSpotPriceHistoryType::getFilterSet()
	 * @uses AmazonEc2TypeDescribeSpotPriceHistoryType::getAvailabilityZone()
	 * @uses AmazonEc2TypeDescribeSpotPriceHistoryType::getMaxResults()
	 * @uses AmazonEc2TypeDescribeSpotPriceHistoryType::getNextToken()
	 * @param AmazonEc2TypeDescribeSpotPriceHistoryType DescribeSpotPriceHistoryType
	 * @return AmazonEc2TypeDescribeSpotPriceHistoryResponseType
	 */
	public function DescribeSpotPriceHistory(AmazonEc2TypeDescribeSpotPriceHistoryType $_AmazonEc2TypeDescribeSpotPriceHistoryType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeSpotPriceHistory(array('startTime'=>$_AmazonEc2TypeDescribeSpotPriceHistoryType->getStartTime(),'endTime'=>$_AmazonEc2TypeDescribeSpotPriceHistoryType->getEndTime(),'instanceTypeSet'=>$_AmazonEc2TypeDescribeSpotPriceHistoryType->getInstanceTypeSet(),'productDescriptionSet'=>$_AmazonEc2TypeDescribeSpotPriceHistoryType->getProductDescriptionSet(),'filterSet'=>$_AmazonEc2TypeDescribeSpotPriceHistoryType->getFilterSet(),'availabilityZone'=>$_AmazonEc2TypeDescribeSpotPriceHistoryType->getAvailabilityZone(),'maxResults'=>$_AmazonEc2TypeDescribeSpotPriceHistoryType->getMaxResults(),'nextToken'=>$_AmazonEc2TypeDescribeSpotPriceHistoryType->getNextToken())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeSubnets
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeSubnetsType::getSubnetSet()
	 * @uses AmazonEc2TypeDescribeSubnetsType::getFilterSet()
	 * @param AmazonEc2TypeDescribeSubnetsType DescribeSubnetsType
	 * @return AmazonEc2TypeDescribeSubnetsResponseType
	 */
	public function DescribeSubnets(AmazonEc2TypeDescribeSubnetsType $_AmazonEc2TypeDescribeSubnetsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeSubnets(array('subnetSet'=>$_AmazonEc2TypeDescribeSubnetsType->getSubnetSet(),'filterSet'=>$_AmazonEc2TypeDescribeSubnetsType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeTags
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeTagsType::getFilterSet()
	 * @param AmazonEc2TypeDescribeTagsType DescribeTagsType
	 * @return AmazonEc2TypeDescribeTagsResponseType
	 */
	public function DescribeTags(AmazonEc2TypeDescribeTagsType $_AmazonEc2TypeDescribeTagsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeTags(array('filterSet'=>$_AmazonEc2TypeDescribeTagsType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeVolumeAttribute
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeVolumeAttributeType::getVolumeId()
	 * @uses AmazonEc2TypeDescribeVolumeAttributeType::getAutoEnableIO()
	 * @uses AmazonEc2TypeDescribeVolumeAttributeType::getProductCodes()
	 * @param AmazonEc2TypeDescribeVolumeAttributeType DescribeVolumeAttributeType
	 * @return AmazonEc2TypeDescribeVolumeAttributeResponseType
	 */
	public function DescribeVolumeAttribute(AmazonEc2TypeDescribeVolumeAttributeType $_AmazonEc2TypeDescribeVolumeAttributeType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeVolumeAttribute(array('volumeId'=>$_AmazonEc2TypeDescribeVolumeAttributeType->getVolumeId(),'autoEnableIO'=>$_AmazonEc2TypeDescribeVolumeAttributeType->getAutoEnableIO(),'productCodes'=>$_AmazonEc2TypeDescribeVolumeAttributeType->getProductCodes())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeVolumes
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeVolumesType::getVolumeSet()
	 * @uses AmazonEc2TypeDescribeVolumesType::getFilterSet()
	 * @param AmazonEc2TypeDescribeVolumesType DescribeVolumesType
	 * @return AmazonEc2TypeDescribeVolumesResponseType
	 */
	public function DescribeVolumes(AmazonEc2TypeDescribeVolumesType $_AmazonEc2TypeDescribeVolumesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeVolumes(array('volumeSet'=>$_AmazonEc2TypeDescribeVolumesType->getVolumeSet(),'filterSet'=>$_AmazonEc2TypeDescribeVolumesType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeVolumeStatus
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeVolumeStatusType::getVolumeSet()
	 * @uses AmazonEc2TypeDescribeVolumeStatusType::getFilterSet()
	 * @uses AmazonEc2TypeDescribeVolumeStatusType::getMaxResults()
	 * @uses AmazonEc2TypeDescribeVolumeStatusType::getNextToken()
	 * @param AmazonEc2TypeDescribeVolumeStatusType DescribeVolumeStatusType
	 * @return AmazonEc2TypeDescribeVolumeStatusResponseType
	 */
	public function DescribeVolumeStatus(AmazonEc2TypeDescribeVolumeStatusType $_AmazonEc2TypeDescribeVolumeStatusType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeVolumeStatus(array('volumeSet'=>$_AmazonEc2TypeDescribeVolumeStatusType->getVolumeSet(),'filterSet'=>$_AmazonEc2TypeDescribeVolumeStatusType->getFilterSet(),'maxResults'=>$_AmazonEc2TypeDescribeVolumeStatusType->getMaxResults(),'nextToken'=>$_AmazonEc2TypeDescribeVolumeStatusType->getNextToken())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeVpcs
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeVpcsType::getVpcSet()
	 * @uses AmazonEc2TypeDescribeVpcsType::getFilterSet()
	 * @param AmazonEc2TypeDescribeVpcsType DescribeVpcsType
	 * @return AmazonEc2TypeDescribeVpcsResponseType
	 */
	public function DescribeVpcs(AmazonEc2TypeDescribeVpcsType $_AmazonEc2TypeDescribeVpcsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeVpcs(array('vpcSet'=>$_AmazonEc2TypeDescribeVpcsType->getVpcSet(),'filterSet'=>$_AmazonEc2TypeDescribeVpcsType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeVpnConnections
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeVpnConnectionsType::getVpnConnectionSet()
	 * @uses AmazonEc2TypeDescribeVpnConnectionsType::getFilterSet()
	 * @param AmazonEc2TypeDescribeVpnConnectionsType DescribeVpnConnectionsType
	 * @return AmazonEc2TypeDescribeVpnConnectionsResponseType
	 */
	public function DescribeVpnConnections(AmazonEc2TypeDescribeVpnConnectionsType $_AmazonEc2TypeDescribeVpnConnectionsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeVpnConnections(array('vpnConnectionSet'=>$_AmazonEc2TypeDescribeVpnConnectionsType->getVpnConnectionSet(),'filterSet'=>$_AmazonEc2TypeDescribeVpnConnectionsType->getFilterSet())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeVpnGateways
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDescribeVpnGatewaysType::getVpnGatewaySet()
	 * @uses AmazonEc2TypeDescribeVpnGatewaysType::getFilterSet()
	 * @param AmazonEc2TypeDescribeVpnGatewaysType DescribeVpnGatewaysType
	 * @return AmazonEc2TypeDescribeVpnGatewaysResponseType
	 */
	public function DescribeVpnGateways(AmazonEc2TypeDescribeVpnGatewaysType $_AmazonEc2TypeDescribeVpnGatewaysType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeVpnGateways(array('vpnGatewaySet'=>$_AmazonEc2TypeDescribeVpnGatewaysType->getVpnGatewaySet(),'filterSet'=>$_AmazonEc2TypeDescribeVpnGatewaysType->getFilterSet())));
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
	 * @return AmazonEc2TypeDescribeVpnGatewaysResponseType
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