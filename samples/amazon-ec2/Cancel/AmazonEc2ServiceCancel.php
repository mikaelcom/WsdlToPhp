<?php
/**
 * Class file for AmazonEc2ServiceCancel
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceCancel
 * @date 10/07/2012
 */
class AmazonEc2ServiceCancel extends AmazonEc2WsdlClass
{
	/**
	 * Method to call CancelBundleTask
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCancelBundleTaskType::getBundleId()
	 * @param AmazonEc2TypeCancelBundleTaskType CancelBundleTaskType
	 * @return AmazonEc2TypeCancelBundleTaskResponseType
	 */
	public function CancelBundleTask(AmazonEc2TypeCancelBundleTaskType $_AmazonEc2TypeCancelBundleTaskType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CancelBundleTask(array('bundleId'=>$_AmazonEc2TypeCancelBundleTaskType->getBundleId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CancelConversionTask
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCancelConversionTaskType::getConversionTaskId()
	 * @param AmazonEc2TypeCancelConversionTaskType CancelConversionTaskType
	 * @return AmazonEc2TypeCancelConversionTaskResponseType
	 */
	public function CancelConversionTask(AmazonEc2TypeCancelConversionTaskType $_AmazonEc2TypeCancelConversionTaskType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CancelConversionTask(array('conversionTaskId'=>$_AmazonEc2TypeCancelConversionTaskType->getConversionTaskId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CancelExportTask
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCancelExportTaskType::getExportTaskId()
	 * @param AmazonEc2TypeCancelExportTaskType CancelExportTaskType
	 * @return AmazonEc2TypeCancelExportTaskResponseType
	 */
	public function CancelExportTask(AmazonEc2TypeCancelExportTaskType $_AmazonEc2TypeCancelExportTaskType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CancelExportTask(array('exportTaskId'=>$_AmazonEc2TypeCancelExportTaskType->getExportTaskId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CancelSpotInstanceRequests
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeCancelSpotInstanceRequestsType::getSpotInstanceRequestIdSet()
	 * @param AmazonEc2TypeCancelSpotInstanceRequestsType CancelSpotInstanceRequestsType
	 * @return AmazonEc2TypeCancelSpotInstanceRequestsResponseType
	 */
	public function CancelSpotInstanceRequests(AmazonEc2TypeCancelSpotInstanceRequestsType $_AmazonEc2TypeCancelSpotInstanceRequestsType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CancelSpotInstanceRequests(array('spotInstanceRequestIdSet'=>$_AmazonEc2TypeCancelSpotInstanceRequestsType->getSpotInstanceRequestIdSet())));
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
	 * @return AmazonEc2TypeCancelSpotInstanceRequestsResponseType
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