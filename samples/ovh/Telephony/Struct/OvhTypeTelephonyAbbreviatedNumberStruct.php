<?php
/**
 * Class file for OvhTypeTelephonyAbbreviatedNumberStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyAbbreviatedNumberStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyAbbreviatedNumberStruct extends OvhWsdlClass
{
	/**
	 * The abbreviatedNumber
	 * @var string
	 */
	public $abbreviatedNumber;
	/**
	 * The relatedNumber
	 * @var string
	 */
	public $relatedNumber;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The surname
	 * @var string
	 */
	public $surname;
	/**
	 * Constructor
	 * @param string abbreviatedNumber
	 * @param string relatedNumber
	 * @param string name
	 * @param string surname
	 * @return OvhTypeTelephonyAbbreviatedNumberStruct
	 */
	public function __construct($_abbreviatedNumber = null,$_relatedNumber = null,$_name = null,$_surname = null)
	{
		parent::__construct(array('abbreviatedNumber'=>$_abbreviatedNumber,'relatedNumber'=>$_relatedNumber,'name'=>$_name,'surname'=>$_surname));
	}
	/**
	 * Set abbreviatedNumber
	 * @param string abbreviatedNumber
	 * @return string
	 */
	public function setAbbreviatedNumber($_abbreviatedNumber)
	{
		return ($this->abbreviatedNumber = $_abbreviatedNumber);
	}
	/**
	 * Get abbreviatedNumber
	 * @return string
	 */
	public function getAbbreviatedNumber()
	{
		return $this->abbreviatedNumber;
	}
	/**
	 * Set relatedNumber
	 * @param string relatedNumber
	 * @return string
	 */
	public function setRelatedNumber($_relatedNumber)
	{
		return ($this->relatedNumber = $_relatedNumber);
	}
	/**
	 * Get relatedNumber
	 * @return string
	 */
	public function getRelatedNumber()
	{
		return $this->relatedNumber;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set surname
	 * @param string surname
	 * @return string
	 */
	public function setSurname($_surname)
	{
		return ($this->surname = $_surname);
	}
	/**
	 * Get surname
	 * @return string
	 */
	public function getSurname()
	{
		return $this->surname;
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