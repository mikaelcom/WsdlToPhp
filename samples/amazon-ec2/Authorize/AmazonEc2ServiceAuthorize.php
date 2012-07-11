<?php
/**
 * Class file for AmazonEc2ServiceAuthorize
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceAuthorize
 * @date 10/07/2012
 */
class AmazonEc2ServiceAuthorize extends AmazonEc2WsdlClass
{
	/**
	 * Method to call AuthorizeSecurityGroupEgress
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeAuthorizeSecurityGroupEgressType::getGroupId()
	 * @uses AmazonEc2TypeAuthorizeSecurityGroupEgressType::getIpPermissions()
	 * @param AmazonEc2TypeAuthorizeSecurityGroupEgressType AuthorizeSecurityGroupEgressType
	 * @return AmazonEc2TypeAuthorizeSecurityGroupEgressResponseType
	 */
	public function AuthorizeSecurityGroupEgress(AmazonEc2TypeAuthorizeSecurityGroupEgressType $_AmazonEc2TypeAuthorizeSecurityGroupEgressType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AuthorizeSecurityGroupEgress(array('groupId'=>$_AmazonEc2TypeAuthorizeSecurityGroupEgressType->getGroupId(),'ipPermissions'=>$_AmazonEc2TypeAuthorizeSecurityGroupEgressType->getIpPermissions())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AuthorizeSecurityGroupIngress
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeAuthorizeSecurityGroupIngressType::getUserId()
	 * @uses AmazonEc2TypeAuthorizeSecurityGroupIngressType::getGroupId()
	 * @uses AmazonEc2TypeAuthorizeSecurityGroupIngressType::getGroupName()
	 * @uses AmazonEc2TypeAuthorizeSecurityGroupIngressType::getIpPermissions()
	 * @param AmazonEc2TypeAuthorizeSecurityGroupIngressType AuthorizeSecurityGroupIngressType
	 * @return AmazonEc2TypeAuthorizeSecurityGroupIngressResponseType
	 */
	public function AuthorizeSecurityGroupIngress(AmazonEc2TypeAuthorizeSecurityGroupIngressType $_AmazonEc2TypeAuthorizeSecurityGroupIngressType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AuthorizeSecurityGroupIngress(array('userId'=>$_AmazonEc2TypeAuthorizeSecurityGroupIngressType->getUserId(),'groupId'=>$_AmazonEc2TypeAuthorizeSecurityGroupIngressType->getGroupId(),'groupName'=>$_AmazonEc2TypeAuthorizeSecurityGroupIngressType->getGroupName(),'ipPermissions'=>$_AmazonEc2TypeAuthorizeSecurityGroupIngressType->getIpPermissions())));
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
	 * @return AmazonEc2TypeAuthorizeSecurityGroupIngressResponseType
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