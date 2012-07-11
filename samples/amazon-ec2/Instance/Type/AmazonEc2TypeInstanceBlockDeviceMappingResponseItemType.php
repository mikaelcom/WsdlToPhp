<?php
/**
 * Class file for AmazonEc2TypeInstanceBlockDeviceMappingResponseItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceBlockDeviceMappingResponseItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceBlockDeviceMappingResponseItemType extends AmazonEc2WsdlClass
{
	/**
	 * The deviceName
	 * @var string
	 */
	public $deviceName;
	/**
	 * The ebs
	 * @var AmazonEc2TypeEbsInstanceBlockDeviceMappingResponseType
	 */
	public $ebs;
	/**
	 * Constructor
	 * @param string deviceName
	 * @param AmazonEc2TypeEbsInstanceBlockDeviceMappingResponseType ebs
	 * @return AmazonEc2TypeInstanceBlockDeviceMappingResponseItemType
	 */
	public function __construct($_deviceName = null,$_ebs = null)
	{
		parent::__construct(array('deviceName'=>$_deviceName,'ebs'=>$_ebs));
	}
	/**
	 * Set deviceName
	 * @param string deviceName
	 * @return string
	 */
	public function setDeviceName($_deviceName)
	{
		return ($this->deviceName = $_deviceName);
	}
	/**
	 * Get deviceName
	 * @return string
	 */
	public function getDeviceName()
	{
		return $this->deviceName;
	}
	/**
	 * Set ebs
	 * @param EbsInstanceBlockDeviceMappingResponseType ebs
	 * @return EbsInstanceBlockDeviceMappingResponseType
	 */
	public function setEbs($_ebs)
	{
		return ($this->ebs = $_ebs);
	}
	/**
	 * Get ebs
	 * @return AmazonEc2TypeEbsInstanceBlockDeviceMappingResponseType
	 */
	public function getEbs()
	{
		return $this->ebs;
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