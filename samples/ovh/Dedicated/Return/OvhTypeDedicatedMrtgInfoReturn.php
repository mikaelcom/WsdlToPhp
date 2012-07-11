<?php
/**
 * Class file for OvhTypeDedicatedMrtgInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMrtgInfoReturn
 * @date 02/07/2012
 */
class OvhTypeDedicatedMrtgInfoReturn extends OvhWsdlClass
{
	/**
	 * The average
	 * @var OvhTypeDedicatedMrtgInfoStruct
	 */
	public $average;
	/**
	 * The current
	 * @var OvhTypeDedicatedMrtgInfoStruct
	 */
	public $current;
	/**
	 * The max
	 * @var OvhTypeDedicatedMrtgInfoStruct
	 */
	public $max;
	/**
	 * The image
	 * @var string
	 */
	public $image;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedMrtgInfoStruct average
	 * @param OvhTypeDedicatedMrtgInfoStruct current
	 * @param OvhTypeDedicatedMrtgInfoStruct max
	 * @param string image
	 * @return OvhTypeDedicatedMrtgInfoReturn
	 */
	public function __construct($_average = null,$_current = null,$_max = null,$_image = null)
	{
		parent::__construct(array('average'=>$_average,'current'=>$_current,'max'=>$_max,'image'=>$_image));
	}
	/**
	 * Set average
	 * @param dedicatedMrtgInfoStruct average
	 * @return dedicatedMrtgInfoStruct
	 */
	public function setAverage($_average)
	{
		return ($this->average = $_average);
	}
	/**
	 * Get average
	 * @return OvhTypededicatedMrtgInfoStruct
	 */
	public function getAverage()
	{
		return $this->average;
	}
	/**
	 * Set current
	 * @param dedicatedMrtgInfoStruct current
	 * @return dedicatedMrtgInfoStruct
	 */
	public function setCurrent($_current)
	{
		return ($this->current = $_current);
	}
	/**
	 * Get current
	 * @return OvhTypededicatedMrtgInfoStruct
	 */
	public function getCurrent()
	{
		return $this->current;
	}
	/**
	 * Set max
	 * @param dedicatedMrtgInfoStruct max
	 * @return dedicatedMrtgInfoStruct
	 */
	public function setMax($_max)
	{
		return ($this->max = $_max);
	}
	/**
	 * Get max
	 * @return OvhTypededicatedMrtgInfoStruct
	 */
	public function getMax()
	{
		return $this->max;
	}
	/**
	 * Set image
	 * @param string image
	 * @return string
	 */
	public function setImage($_image)
	{
		return ($this->image = $_image);
	}
	/**
	 * Get image
	 * @return string
	 */
	public function getImage()
	{
		return $this->image;
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