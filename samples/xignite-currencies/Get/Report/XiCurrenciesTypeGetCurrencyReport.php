<?php
/**
 * Class file for XiCurrenciesTypeGetCurrencyReport
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetCurrencyReport
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetCurrencyReport extends XiCurrenciesWsdlClass
{
	/**
	 * The From
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $From;
	/**
	 * The To
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $To;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * Constructor
	 * @param string From
	 * @param string To
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiCurrenciesTypeGetCurrencyReport
	 */
	public function __construct($_From = null,$_To = null,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('From'=>$_From,'To'=>$_To,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set From
	 * @param string From
	 * @return string
	 */
	public function setFrom($_From)
	{
		return ($this->From = $_From);
	}
	/**
	 * Get From
	 * @return string
	 */
	public function getFrom()
	{
		return $this->From;
	}
	/**
	 * Set To
	 * @param string To
	 * @return string
	 */
	public function setTo($_To)
	{
		return ($this->To = $_To);
	}
	/**
	 * Get To
	 * @return string
	 */
	public function getTo()
	{
		return $this->To;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
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