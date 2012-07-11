<?php
/**
 * Class file for OvhTypeRpsGetIoStatsReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRpsGetIoStatsReturn
 * @date 02/07/2012
 */
class OvhTypeRpsGetIoStatsReturn extends OvhWsdlClass
{
	/**
	 * The average
	 * @var OvhTypeRpsGetIOStatsDetailStruct
	 */
	public $average;
	/**
	 * The current
	 * @var OvhTypeRpsGetIOStatsDetailStruct
	 */
	public $current;
	/**
	 * The max
	 * @var OvhTypeRpsGetIOStatsDetailStruct
	 */
	public $max;
	/**
	 * The image
	 * @var string
	 */
	public $image;
	/**
	 * Constructor
	 * @param OvhTypeRpsGetIOStatsDetailStruct average
	 * @param OvhTypeRpsGetIOStatsDetailStruct current
	 * @param OvhTypeRpsGetIOStatsDetailStruct max
	 * @param string image
	 * @return OvhTypeRpsGetIoStatsReturn
	 */
	public function __construct($_average = null,$_current = null,$_max = null,$_image = null)
	{
		parent::__construct(array('average'=>$_average,'current'=>$_current,'max'=>$_max,'image'=>$_image));
	}
	/**
	 * Set average
	 * @param rpsGetIOStatsDetailStruct average
	 * @return rpsGetIOStatsDetailStruct
	 */
	public function setAverage($_average)
	{
		return ($this->average = $_average);
	}
	/**
	 * Get average
	 * @return OvhTyperpsGetIOStatsDetailStruct
	 */
	public function getAverage()
	{
		return $this->average;
	}
	/**
	 * Set current
	 * @param rpsGetIOStatsDetailStruct current
	 * @return rpsGetIOStatsDetailStruct
	 */
	public function setCurrent($_current)
	{
		return ($this->current = $_current);
	}
	/**
	 * Get current
	 * @return OvhTyperpsGetIOStatsDetailStruct
	 */
	public function getCurrent()
	{
		return $this->current;
	}
	/**
	 * Set max
	 * @param rpsGetIOStatsDetailStruct max
	 * @return rpsGetIOStatsDetailStruct
	 */
	public function setMax($_max)
	{
		return ($this->max = $_max);
	}
	/**
	 * Get max
	 * @return OvhTyperpsGetIOStatsDetailStruct
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