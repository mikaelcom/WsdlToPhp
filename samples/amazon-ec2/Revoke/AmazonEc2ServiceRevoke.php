<?php
/**
 * Class file for AmazonEc2ServiceRevoke
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceRevoke
 * @date 10/07/2012
 */
class AmazonEc2ServiceRevoke extends AmazonEc2WsdlClass
{
	/**
	 * Method to call RevokeSecurityGroupEgress
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeRevokeSecurityGroupEgressType::getGroupId()
	 * @uses AmazonEc2TypeRevokeSecurityGroupEgressType::getIpPermissions()
	 * @param AmazonEc2TypeRevokeSecurityGroupEgressType RevokeSecurityGroupEgressType
	 * @return AmazonEc2TypeRevokeSecurityGroupEgressResponseType
	 */
	public function RevokeSecurityGroupEgress(AmazonEc2TypeRevokeSecurityGroupEgressType $_AmazonEc2TypeRevokeSecurityGroupEgressType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RevokeSecurityGroupEgress(array('groupId'=>$_AmazonEc2TypeRevokeSecurityGroupEgressType->getGroupId(),'ipPermissions'=>$_AmazonEc2TypeRevokeSecurityGroupEgressType->getIpPermissions())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RevokeSecurityGroupIngress
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeRevokeSecurityGroupIngressType::getUserId()
	 * @uses AmazonEc2TypeRevokeSecurityGroupIngressType::getGroupId()
	 * @uses AmazonEc2TypeRevokeSecurityGroupIngressType::getGroupName()
	 * @uses AmazonEc2TypeRevokeSecurityGroupIngressType::getIpPermissions()
	 * @param AmazonEc2TypeRevokeSecurityGroupIngressType RevokeSecurityGroupIngressType
	 * @return AmazonEc2TypeRevokeSecurityGroupIngressResponseType
	 */
	public function RevokeSecurityGroupIngress(AmazonEc2TypeRevokeSecurityGroupIngressType $_AmazonEc2TypeRevokeSecurityGroupIngressType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RevokeSecurityGroupIngress(array('userId'=>$_AmazonEc2TypeRevokeSecurityGroupIngressType->getUserId(),'groupId'=>$_AmazonEc2TypeRevokeSecurityGroupIngressType->getGroupId(),'groupName'=>$_AmazonEc2TypeRevokeSecurityGroupIngressType->getGroupName(),'ipPermissions'=>$_AmazonEc2TypeRevokeSecurityGroupIngressType->getIpPermissions())));
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
	 * @return AmazonEc2TypeRevokeSecurityGroupIngressResponseType
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