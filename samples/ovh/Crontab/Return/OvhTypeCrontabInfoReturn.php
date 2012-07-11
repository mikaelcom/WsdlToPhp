<?php
/**
 * Class file for OvhTypeCrontabInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeCrontabInfoReturn
 * @date 02/07/2012
 */
class OvhTypeCrontabInfoReturn extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The path
	 * @var string
	 */
	public $path;
	/**
	 * The desc
	 * @var string
	 */
	public $desc;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The enabled
	 * @var boolean
	 */
	public $enabled;
	/**
	 * The programLanguage
	 * @var string
	 */
	public $programLanguage;
	/**
	 * The weekDay
	 * @var string
	 */
	public $weekDay;
	/**
	 * The days
	 * @var OvhTypeMyArrayOfIntType
	 */
	public $days;
	/**
	 * The hours
	 * @var OvhTypeMyArrayOfIntType
	 */
	public $hours;
	/**
	 * Constructor
	 * @param int id
	 * @param string path
	 * @param string desc
	 * @param string email
	 * @param boolean enabled
	 * @param string programLanguage
	 * @param string weekDay
	 * @param OvhTypeMyArrayOfIntType days
	 * @param OvhTypeMyArrayOfIntType hours
	 * @return OvhTypeCrontabInfoReturn
	 */
	public function __construct($_id = null,$_path = null,$_desc = null,$_email = null,$_enabled = null,$_programLanguage = null,$_weekDay = null,$_days = null,$_hours = null)
	{
		parent::__construct(array('id'=>$_id,'path'=>$_path,'desc'=>$_desc,'email'=>$_email,'enabled'=>$_enabled,'programLanguage'=>$_programLanguage,'weekDay'=>$_weekDay,'days'=>new OvhTypeMyArrayOfIntType($_days),'hours'=>new OvhTypeMyArrayOfIntType($_hours)));
	}
	/**
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set path
	 * @param string path
	 * @return string
	 */
	public function setPath($_path)
	{
		return ($this->path = $_path);
	}
	/**
	 * Get path
	 * @return string
	 */
	public function getPath()
	{
		return $this->path;
	}
	/**
	 * Set desc
	 * @param string desc
	 * @return string
	 */
	public function setDesc($_desc)
	{
		return ($this->desc = $_desc);
	}
	/**
	 * Get desc
	 * @return string
	 */
	public function getDesc()
	{
		return $this->desc;
	}
	/**
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set enabled
	 * @param boolean enabled
	 * @return boolean
	 */
	public function setEnabled($_enabled)
	{
		return ($this->enabled = $_enabled);
	}
	/**
	 * Get enabled
	 * @return boolean
	 */
	public function getEnabled()
	{
		return $this->enabled;
	}
	/**
	 * Set programLanguage
	 * @param string programLanguage
	 * @return string
	 */
	public function setProgramLanguage($_programLanguage)
	{
		return ($this->programLanguage = $_programLanguage);
	}
	/**
	 * Get programLanguage
	 * @return string
	 */
	public function getProgramLanguage()
	{
		return $this->programLanguage;
	}
	/**
	 * Set weekDay
	 * @param string weekDay
	 * @return string
	 */
	public function setWeekDay($_weekDay)
	{
		return ($this->weekDay = $_weekDay);
	}
	/**
	 * Get weekDay
	 * @return string
	 */
	public function getWeekDay()
	{
		return $this->weekDay;
	}
	/**
	 * Set days
	 * @param MyArrayOfIntType days
	 * @return MyArrayOfIntType
	 */
	public function setDays($_days)
	{
		return ($this->days = $_days);
	}
	/**
	 * Get days
	 * @return OvhTypeMyArrayOfIntType
	 */
	public function getDays()
	{
		return $this->days;
	}
	/**
	 * Set hours
	 * @param MyArrayOfIntType hours
	 * @return MyArrayOfIntType
	 */
	public function setHours($_hours)
	{
		return ($this->hours = $_hours);
	}
	/**
	 * Get hours
	 * @return OvhTypeMyArrayOfIntType
	 */
	public function getHours()
	{
		return $this->hours;
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