<?php
/**
 * Class file for AmazonEc2ServiceReport
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceReport
 * @date 10/07/2012
 */
class AmazonEc2ServiceReport extends AmazonEc2WsdlClass
{
	/**
	 * Method to call ReportInstanceStatus
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeReportInstanceStatusType::getInstancesSet()
	 * @uses AmazonEc2TypeReportInstanceStatusType::getStatus()
	 * @uses AmazonEc2TypeReportInstanceStatusType::getStartTime()
	 * @uses AmazonEc2TypeReportInstanceStatusType::getEndTime()
	 * @uses AmazonEc2TypeReportInstanceStatusType::getReasonCodesSet()
	 * @uses AmazonEc2TypeReportInstanceStatusType::getDescription()
	 * @param AmazonEc2TypeReportInstanceStatusType ReportInstanceStatusType
	 * @return AmazonEc2TypeReportInstanceStatusResponseType
	 */
	public function ReportInstanceStatus(AmazonEc2TypeReportInstanceStatusType $_AmazonEc2TypeReportInstanceStatusType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReportInstanceStatus(array('instancesSet'=>$_AmazonEc2TypeReportInstanceStatusType->getInstancesSet(),'status'=>$_AmazonEc2TypeReportInstanceStatusType->getStatus(),'startTime'=>$_AmazonEc2TypeReportInstanceStatusType->getStartTime(),'endTime'=>$_AmazonEc2TypeReportInstanceStatusType->getEndTime(),'reasonCodesSet'=>$_AmazonEc2TypeReportInstanceStatusType->getReasonCodesSet(),'description'=>$_AmazonEc2TypeReportInstanceStatusType->getDescription())));
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
	 * @return AmazonEc2TypeReportInstanceStatusResponseType
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