<?php
/**
 * Class file for OvhTypeTelephonyDirectoryWayTypeStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyDirectoryWayTypeStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyDirectoryWayTypeStruct extends OvhWsdlClass
{
	/**
	 * The abbreviatedName
	 * @var string
	 */
	public $abbreviatedName;
	/**
	 * The wayName
	 * @var string
	 */
	public $wayName;
	/**
	 * The tag
	 * @var string
	 */
	public $tag;
	/**
	 * Constructor
	 * @param string abbreviatedName
	 * @param string wayName
	 * @param string tag
	 * @return OvhTypeTelephonyDirectoryWayTypeStruct
	 */
	public function __construct($_abbreviatedName = null,$_wayName = null,$_tag = null)
	{
		parent::__construct(array('abbreviatedName'=>$_abbreviatedName,'wayName'=>$_wayName,'tag'=>$_tag));
	}
	/**
	 * Set abbreviatedName
	 * @param string abbreviatedName
	 * @return string
	 */
	public function setAbbreviatedName($_abbreviatedName)
	{
		return ($this->abbreviatedName = $_abbreviatedName);
	}
	/**
	 * Get abbreviatedName
	 * @return string
	 */
	public function getAbbreviatedName()
	{
		return $this->abbreviatedName;
	}
	/**
	 * Set wayName
	 * @param string wayName
	 * @return string
	 */
	public function setWayName($_wayName)
	{
		return ($this->wayName = $_wayName);
	}
	/**
	 * Get wayName
	 * @return string
	 */
	public function getWayName()
	{
		return $this->wayName;
	}
	/**
	 * Set tag
	 * @param string tag
	 * @return string
	 */
	public function setTag($_tag)
	{
		return ($this->tag = $_tag);
	}
	/**
	 * Get tag
	 * @return string
	 */
	public function getTag()
	{
		return $this->tag;
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