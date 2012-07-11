<?php
/**
 * Class file for AmazonEc2ServiceAllocate
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceAllocate
 * @date 10/07/2012
 */
class AmazonEc2ServiceAllocate extends AmazonEc2WsdlClass
{
	/**
	 * Method to call AllocateAddress
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeAllocateAddressType::getDomain()
	 * @param AmazonEc2TypeAllocateAddressType AllocateAddressType
	 * @return AmazonEc2TypeAllocateAddressResponseType
	 */
	public function AllocateAddress(AmazonEc2TypeAllocateAddressType $_AmazonEc2TypeAllocateAddressType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AllocateAddress(array('domain'=>$_AmazonEc2TypeAllocateAddressType->getDomain())));
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
	 * @return AmazonEc2TypeAllocateAddressResponseType
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