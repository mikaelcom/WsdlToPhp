<?php
/**
 * Class file for AmazonEc2ServiceConfirm
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceConfirm
 * @date 10/07/2012
 */
class AmazonEc2ServiceConfirm extends AmazonEc2WsdlClass
{
	/**
	 * Method to call ConfirmProductInstance
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeConfirmProductInstanceType::getProductCode()
	 * @uses AmazonEc2TypeConfirmProductInstanceType::getInstanceId()
	 * @param AmazonEc2TypeConfirmProductInstanceType ConfirmProductInstanceType
	 * @return AmazonEc2TypeConfirmProductInstanceResponseType
	 */
	public function ConfirmProductInstance(AmazonEc2TypeConfirmProductInstanceType $_AmazonEc2TypeConfirmProductInstanceType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ConfirmProductInstance(array('productCode'=>$_AmazonEc2TypeConfirmProductInstanceType->getProductCode(),'instanceId'=>$_AmazonEc2TypeConfirmProductInstanceType->getInstanceId())));
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
	 * @return AmazonEc2TypeConfirmProductInstanceResponseType
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