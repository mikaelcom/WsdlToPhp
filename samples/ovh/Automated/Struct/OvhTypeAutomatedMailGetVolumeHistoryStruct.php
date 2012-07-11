<?php
/**
 * Class file for OvhTypeAutomatedMailGetVolumeHistoryStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAutomatedMailGetVolumeHistoryStruct
 * @date 02/07/2012
 */
class OvhTypeAutomatedMailGetVolumeHistoryStruct extends OvhWsdlClass
{
	/**
	 * The volume
	 * @var int
	 */
	public $volume;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * Constructor
	 * @param int volume
	 * @param string date
	 * @return OvhTypeAutomatedMailGetVolumeHistoryStruct
	 */
	public function __construct($_volume = null,$_date = null)
	{
		parent::__construct(array('volume'=>$_volume,'date'=>$_date));
	}
	/**
	 * Set volume
	 * @param int volume
	 * @return int
	 */
	public function setVolume($_volume)
	{
		return ($this->volume = $_volume);
	}
	/**
	 * Get volume
	 * @return int
	 */
	public function getVolume()
	{
		return $this->volume;
	}
	/**
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
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