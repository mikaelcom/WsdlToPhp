<?php
/**
 * Class file for AmazonEc2ServiceGet
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceGet
 * @date 10/07/2012
 */
class AmazonEc2ServiceGet extends AmazonEc2WsdlClass
{
	/**
	 * Method to call GetConsoleOutput
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeGetConsoleOutputType::getInstanceId()
	 * @param AmazonEc2TypeGetConsoleOutputType GetConsoleOutputType
	 * @return AmazonEc2TypeGetConsoleOutputResponseType
	 */
	public function GetConsoleOutput(AmazonEc2TypeGetConsoleOutputType $_AmazonEc2TypeGetConsoleOutputType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetConsoleOutput(array('instanceId'=>$_AmazonEc2TypeGetConsoleOutputType->getInstanceId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPasswordData
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeGetPasswordDataType::getInstanceId()
	 * @param AmazonEc2TypeGetPasswordDataType GetPasswordDataType
	 * @return AmazonEc2TypeGetPasswordDataResponseType
	 */
	public function GetPasswordData(AmazonEc2TypeGetPasswordDataType $_AmazonEc2TypeGetPasswordDataType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPasswordData(array('instanceId'=>$_AmazonEc2TypeGetPasswordDataType->getInstanceId())));
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
	 * @return AmazonEc2TypeGetPasswordDataResponseType
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