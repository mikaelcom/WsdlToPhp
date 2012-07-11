<?php
/**
 * Class file for AmazonEc2TypeModifyVolumeAttributeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeModifyVolumeAttributeType
 * @date 10/07/2012
 */
class AmazonEc2TypeModifyVolumeAttributeType extends AmazonEc2WsdlClass
{
	/**
	 * The volumeId
	 * @var string
	 */
	public $volumeId;
	/**
	 * The autoEnableIO
	 * @var AmazonEc2TypeAttributeBooleanValueType
	 */
	public $autoEnableIO;
	/**
	 * Constructor
	 * @param string volumeId
	 * @param AmazonEc2TypeAttributeBooleanValueType autoEnableIO
	 * @return AmazonEc2TypeModifyVolumeAttributeType
	 */
	public function __construct($_volumeId = null,$_autoEnableIO = null)
	{
		parent::__construct(array('volumeId'=>$_volumeId,'autoEnableIO'=>$_autoEnableIO));
	}
	/**
	 * Set volumeId
	 * @param string volumeId
	 * @return string
	 */
	public function setVolumeId($_volumeId)
	{
		return ($this->volumeId = $_volumeId);
	}
	/**
	 * Get volumeId
	 * @return string
	 */
	public function getVolumeId()
	{
		return $this->volumeId;
	}
	/**
	 * Set autoEnableIO
	 * @param AttributeBooleanValueType autoEnableIO
	 * @return AttributeBooleanValueType
	 */
	public function setAutoEnableIO($_autoEnableIO)
	{
		return ($this->autoEnableIO = $_autoEnableIO);
	}
	/**
	 * Get autoEnableIO
	 * @return AmazonEc2TypeAttributeBooleanValueType
	 */
	public function getAutoEnableIO()
	{
		return $this->autoEnableIO;
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