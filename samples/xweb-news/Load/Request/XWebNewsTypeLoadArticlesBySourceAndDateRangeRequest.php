<?php
/**
 * Class file for XWebNewsTypeLoadArticlesBySourceAndDateRangeRequest
 * @date 09/07/2012
 */
/**
 * Class XWebNewsTypeLoadArticlesBySourceAndDateRangeRequest
 * @date 09/07/2012
 */
class XWebNewsTypeLoadArticlesBySourceAndDateRangeRequest extends XWebNewsWsdlClass
{
	/**
	 * The Source_Identifier
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source_Identifier;
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
	 * @param string Source_Identifier
	 * @param dateTime Date_Start
	 * @param dateTime Date_End
	 * @return XWebNewsTypeLoadArticlesBySourceAndDateRangeRequest
	 */
	public function __construct($_Source_Identifier,$_Date_Start,$_Date_End)
	{
		parent::__construct(array('Source_Identifier'=>$_Source_Identifier,'Date_Start'=>$_Date_Start,'Date_End'=>$_Date_End));
	}
	/**
	 * Set Source_Identifier
	 * @param string Source_Identifier
	 * @return string
	 */
	public function setSource_Identifier($_Source_Identifier)
	{
		return ($this->Source_Identifier = $_Source_Identifier);
	}
	/**
	 * Get Source_Identifier
	 * @return string
	 */
	public function getSource_Identifier()
	{
		return $this->Source_Identifier;
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