<?php
/**
 * Class file for AmazonEc2TypeReportInstanceStatusType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeReportInstanceStatusType
 * @date 10/07/2012
 */
class AmazonEc2TypeReportInstanceStatusType extends AmazonEc2WsdlClass
{
	/**
	 * The instancesSet
	 * @var AmazonEc2TypeInstanceIdSetType
	 */
	public $instancesSet;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The startTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $startTime;
	/**
	 * The endTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $endTime;
	/**
	 * The reasonCodesSet
	 * @var AmazonEc2TypeReportInstanceStatusReasonCodesSetType
	 */
	public $reasonCodesSet;
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $description;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInstanceIdSetType instancesSet
	 * @param string status
	 * @param dateTime startTime
	 * @param dateTime endTime
	 * @param AmazonEc2TypeReportInstanceStatusReasonCodesSetType reasonCodesSet
	 * @param string description
	 * @return AmazonEc2TypeReportInstanceStatusType
	 */
	public function __construct($_instancesSet = null,$_status = null,$_startTime = null,$_endTime = null,$_reasonCodesSet = null,$_description = null)
	{
		parent::__construct(array('instancesSet'=>$_instancesSet,'status'=>$_status,'startTime'=>$_startTime,'endTime'=>$_endTime,'reasonCodesSet'=>$_reasonCodesSet,'description'=>$_description));
	}
	/**
	 * Set instancesSet
	 * @param InstanceIdSetType instancesSet
	 * @return InstanceIdSetType
	 */
	public function setInstancesSet($_instancesSet)
	{
		return ($this->instancesSet = $_instancesSet);
	}
	/**
	 * Get instancesSet
	 * @return AmazonEc2TypeInstanceIdSetType
	 */
	public function getInstancesSet()
	{
		return $this->instancesSet;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set startTime
	 * @param dateTime startTime
	 * @return dateTime
	 */
	public function setStartTime($_startTime)
	{
		return ($this->startTime = $_startTime);
	}
	/**
	 * Get startTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->startTime;
	}
	/**
	 * Set endTime
	 * @param dateTime endTime
	 * @return dateTime
	 */
	public function setEndTime($_endTime)
	{
		return ($this->endTime = $_endTime);
	}
	/**
	 * Get endTime
	 * @return dateTime
	 */
	public function getEndTime()
	{
		return $this->endTime;
	}
	/**
	 * Set reasonCodesSet
	 * @param ReportInstanceStatusReasonCodesSetType reasonCodesSet
	 * @return ReportInstanceStatusReasonCodesSetType
	 */
	public function setReasonCodesSet($_reasonCodesSet)
	{
		return ($this->reasonCodesSet = $_reasonCodesSet);
	}
	/**
	 * Get reasonCodesSet
	 * @return AmazonEc2TypeReportInstanceStatusReasonCodesSetType
	 */
	public function getReasonCodesSet()
	{
		return $this->reasonCodesSet;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>