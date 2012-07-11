<?php
/**
 * Class file for XWebNewsTypeLoadArticlesByDateRangePagedRequest
 * @date 09/07/2012
 */
/**
 * Class XWebNewsTypeLoadArticlesByDateRangePagedRequest
 * @date 09/07/2012
 */
class XWebNewsTypeLoadArticlesByDateRangePagedRequest extends XWebNewsWsdlClass
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
	 * The Page_Number
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $Page_Number;
	/**
	 * The Page_Size
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $Page_Size;
	/**
	 * Constructor
	 * @param dateTime Date_Start
	 * @param dateTime Date_End
	 * @param positiveInteger Page_Number
	 * @param positiveInteger Page_Size
	 * @return XWebNewsTypeLoadArticlesByDateRangePagedRequest
	 */
	public function __construct($_Date_Start,$_Date_End,$_Page_Number,$_Page_Size)
	{
		parent::__construct(array('Date_Start'=>$_Date_Start,'Date_End'=>$_Date_End,'Page_Number'=>$_Page_Number,'Page_Size'=>$_Page_Size));
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
	 * Set Page_Number
	 * @param positiveInteger Page_Number
	 * @return positiveInteger
	 */
	public function setPage_Number($_Page_Number)
	{
		return ($this->Page_Number = $_Page_Number);
	}
	/**
	 * Get Page_Number
	 * @return positiveInteger
	 */
	public function getPage_Number()
	{
		return $this->Page_Number;
	}
	/**
	 * Set Page_Size
	 * @param positiveInteger Page_Size
	 * @return positiveInteger
	 */
	public function setPage_Size($_Page_Size)
	{
		return ($this->Page_Size = $_Page_Size);
	}
	/**
	 * Get Page_Size
	 * @return positiveInteger
	 */
	public function getPage_Size()
	{
		return $this->Page_Size;
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