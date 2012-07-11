<?php
/**
 * Class file for XiEdgarTypeGetRecentFilings
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeGetRecentFilings
 * @date 08/07/2012
 */
class XiEdgarTypeGetRecentFilings extends XiEdgarWsdlClass
{
	/**
	 * The Day
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeDayTypes
	 */
	public $Day;
	/**
	 * The Form
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeRecentFormTypes
	 */
	public $Form;
	/**
	 * Constructor
	 * @param XiEdgarTypeDayTypes Day
	 * @param XiEdgarTypeRecentFormTypes Form
	 * @return XiEdgarTypeGetRecentFilings
	 */
	public function __construct($_Day,$_Form)
	{
		parent::__construct(array('Day'=>$_Day,'Form'=>$_Form));
	}
	/**
	 * Set Day
	 * @param DayTypes Day
	 * @return DayTypes
	 */
	public function setDay($_Day)
	{
		return ($this->Day = XiEdgarTypeDayTypes::valueIsValid($_Day)?$_Day:null);
	}
	/**
	 * Get Day
	 * @return XiEdgarTypeDayTypes
	 */
	public function getDay()
	{
		return $this->Day;
	}
	/**
	 * Set Form
	 * @param RecentFormTypes Form
	 * @return RecentFormTypes
	 */
	public function setForm($_Form)
	{
		return ($this->Form = XiEdgarTypeRecentFormTypes::valueIsValid($_Form)?$_Form:null);
	}
	/**
	 * Get Form
	 * @return XiEdgarTypeRecentFormTypes
	 */
	public function getForm()
	{
		return $this->Form;
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