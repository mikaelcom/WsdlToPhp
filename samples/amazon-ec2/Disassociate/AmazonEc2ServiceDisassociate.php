<?php
/**
 * Class file for AmazonEc2ServiceDisassociate
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceDisassociate
 * @date 10/07/2012
 */
class AmazonEc2ServiceDisassociate extends AmazonEc2WsdlClass
{
	/**
	 * Method to call DisassociateAddress
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDisassociateAddressType::getPublicIp()
	 * @uses AmazonEc2TypeDisassociateAddressType::getAssociationId()
	 * @param AmazonEc2TypeDisassociateAddressType DisassociateAddressType
	 * @return AmazonEc2TypeDisassociateAddressResponseType
	 */
	public function DisassociateAddress(AmazonEc2TypeDisassociateAddressType $_AmazonEc2TypeDisassociateAddressType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DisassociateAddress(array('publicIp'=>$_AmazonEc2TypeDisassociateAddressType->getPublicIp(),'associationId'=>$_AmazonEc2TypeDisassociateAddressType->getAssociationId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DisassociateRouteTable
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeDisassociateRouteTableType::getAssociationId()
	 * @param AmazonEc2TypeDisassociateRouteTableType DisassociateRouteTableType
	 * @return AmazonEc2TypeDisassociateRouteTableResponseType
	 */
	public function DisassociateRouteTable(AmazonEc2TypeDisassociateRouteTableType $_AmazonEc2TypeDisassociateRouteTableType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DisassociateRouteTable(array('associationId'=>$_AmazonEc2TypeDisassociateRouteTableType->getAssociationId())));
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
	 * @return AmazonEc2TypeDisassociateRouteTableResponseType
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