<?php
/**
 * Class file for AmazonEc2TypeBlockDeviceMappingItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeBlockDeviceMappingItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeBlockDeviceMappingItemType extends AmazonEc2WsdlClass
{
	/**
	 * The deviceName
	 * @var string
	 */
	public $deviceName;
	/**
	 * The virtualName
	 * @var string
	 */
	public $virtualName;
	/**
	 * The ebs
	 * @var AmazonEc2TypeEbsBlockDeviceType
	 */
	public $ebs;
	/**
	 * The noDevice
	 * @var AmazonEc2TypeEmptyElementType
	 */
	public $noDevice;
	/**
	 * Constructor
	 * @param string deviceName
	 * @param string virtualName
	 * @param AmazonEc2TypeEbsBlockDeviceType ebs
	 * @param AmazonEc2TypeEmptyElementType noDevice
	 * @return AmazonEc2TypeBlockDeviceMappingItemType
	 */
	public function __construct($_deviceName = null,$_virtualName = null,$_ebs = null,$_noDevice = null)
	{
		parent::__construct(array('deviceName'=>$_deviceName,'virtualName'=>$_virtualName,'ebs'=>$_ebs,'noDevice'=>$_noDevice));
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
	 * Set virtualName
	 * @param string virtualName
	 * @return string
	 */
	public function setVirtualName($_virtualName)
	{
		return ($this->virtualName = $_virtualName);
	}
	/**
	 * Get virtualName
	 * @return string
	 */
	public function getVirtualName()
	{
		return $this->virtualName;
	}
	/**
	 * Set ebs
	 * @param EbsBlockDeviceType ebs
	 * @return EbsBlockDeviceType
	 */
	public function setEbs($_ebs)
	{
		return ($this->ebs = $_ebs);
	}
	/**
	 * Get ebs
	 * @return AmazonEc2TypeEbsBlockDeviceType
	 */
	public function getEbs()
	{
		return $this->ebs;
	}
	/**
	 * Set noDevice
	 * @param EmptyElementType noDevice
	 * @return EmptyElementType
	 */
	public function setNoDevice($_noDevice)
	{
		return ($this->noDevice = $_noDevice);
	}
	/**
	 * Get noDevice
	 * @return AmazonEc2TypeEmptyElementType
	 */
	public function getNoDevice()
	{
		return $this->noDevice;
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