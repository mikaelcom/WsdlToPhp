<?php
/**
 * Class file for ATReportingTypeQueryInstantStream
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeQueryInstantStream
 * @date 03/07/2012
 */
class ATReportingTypeQueryInstantStream extends ATReportingWsdlClass
{
	/**
	 * The startDate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $startDate;
	/**
	 * The endDate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $endDate;
	/**
	 * The query
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $query;
	/**
	 * The param
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $param;
	/**
	 * Constructor
	 * @param int startDate
	 * @param int endDate
	 * @param string query
	 * @param string param
	 * @return ATReportingTypeQueryInstantStream
	 */
	public function __construct($_startDate,$_endDate,$_query = null,$_param = null)
	{
		parent::__construct(array('startDate'=>$_startDate,'endDate'=>$_endDate,'query'=>$_query,'param'=>$_param));
	}
	/**
	 * Set startDate
	 * @param int startDate
	 * @return int
	 */
	public function setStartDate($_startDate)
	{
		return ($this->startDate = $_startDate);
	}
	/**
	 * Get startDate
	 * @return int
	 */
	public function getStartDate()
	{
		return $this->startDate;
	}
	/**
	 * Set endDate
	 * @param int endDate
	 * @return int
	 */
	public function setEndDate($_endDate)
	{
		return ($this->endDate = $_endDate);
	}
	/**
	 * Get endDate
	 * @return int
	 */
	public function getEndDate()
	{
		return $this->endDate;
	}
	/**
	 * Set query
	 * @param string query
	 * @return string
	 */
	public function setQuery($_query)
	{
		return ($this->query = $_query);
	}
	/**
	 * Get query
	 * @return string
	 */
	public function getQuery()
	{
		return $this->query;
	}
	/**
	 * Set param
	 * @param string param
	 * @return string
	 */
	public function setParam($_param)
	{
		return ($this->param = $_param);
	}
	/**
	 * Get param
	 * @return string
	 */
	public function getParam()
	{
		return $this->param;
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