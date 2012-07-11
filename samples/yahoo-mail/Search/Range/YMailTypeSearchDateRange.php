<?php
/**
 * Class file for YMailTypeSearchDateRange
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSearchDateRange
 * @date 02/07/2012
 */
class YMailTypeSearchDateRange extends YMailWsdlClass
{
	/**
	 * The dateStart
	 * Meta informations :
	 * 	- use : required
	 * @var dateTime
	 */
	public $dateStart;
	/**
	 * The dateEnd
	 * Meta informations :
	 * 	- use : required
	 * @var dateTime
	 */
	public $dateEnd;
	/**
	 * Constructor
	 * @param dateTime dateStart
	 * @param dateTime dateEnd
	 * @return YMailTypeSearchDateRange
	 */
	public function __construct($_dateStart = null,$_dateEnd = null)
	{
		parent::__construct(array('dateStart'=>$_dateStart,'dateEnd'=>$_dateEnd));
	}
	/**
	 * Set dateStart
	 * @param dateTime dateStart
	 * @return dateTime
	 */
	public function setDateStart($_dateStart)
	{
		return ($this->dateStart = $_dateStart);
	}
	/**
	 * Get dateStart
	 * @return dateTime
	 */
	public function getDateStart()
	{
		return $this->dateStart;
	}
	/**
	 * Set dateEnd
	 * @param dateTime dateEnd
	 * @return dateTime
	 */
	public function setDateEnd($_dateEnd)
	{
		return ($this->dateEnd = $_dateEnd);
	}
	/**
	 * Get dateEnd
	 * @return dateTime
	 */
	public function getDateEnd()
	{
		return $this->dateEnd;
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