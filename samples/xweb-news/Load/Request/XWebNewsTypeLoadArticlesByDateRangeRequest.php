<?php
/**
 * Class file for XWebNewsTypeLoadArticlesByDateRangeRequest
 * @date 09/07/2012
 */
/**
 * Class XWebNewsTypeLoadArticlesByDateRangeRequest
 * @date 09/07/2012
 */
class XWebNewsTypeLoadArticlesByDateRangeRequest extends XWebNewsWsdlClass
{
	/**
	 * The Date_Start
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $Date_Start;
	/**
	 * The Date_End
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $Date_End;
	/**
	 * Constructor
	 * @param dateTime Date_Start
	 * @param dateTime Date_End
	 * @return XWebNewsTypeLoadArticlesByDateRangeRequest
	 */
	public function __construct($_Date_Start,$_Date_End)
	{
		parent::__construct(array('Date_Start'=>$_Date_Start,'Date_End'=>$_Date_End));
	}
	/**
	 * Set Date_Start
	 * @param dateTime Date_Start
	 * @return dateTime
	 */
	public function setDate_Start($_Date_Start)
	{
		return ($this->Date_Start = $_Date_Start);
	}
	/**
	 * Get Date_Start
	 * @return dateTime
	 */
	public function getDate_Start()
	{
		return $this->Date_Start;
	}
	/**
	 * Set Date_End
	 * @param dateTime Date_End
	 * @return dateTime
	 */
	public function setDate_End($_Date_End)
	{
		return ($this->Date_End = $_Date_End);
	}
	/**
	 * Get Date_End
	 * @return dateTime
	 */
	public function getDate_End()
	{
		return $this->Date_End;
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