<?php
/**
 * Class file for XiFundDataTypeGetAllFundFinancials
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetAllFundFinancials
 * @date 08/07/2012
 */
class XiFundDataTypeGetAllFundFinancials extends XiFundDataWsdlClass
{
	/**
	 * The CIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CIK;
	/**
	 * The StartYear
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $StartYear;
	/**
	 * The EndYear
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $EndYear;
	/**
	 * Constructor
	 * @param string CIK
	 * @param int StartYear
	 * @param int EndYear
	 * @return XiFundDataTypeGetAllFundFinancials
	 */
	public function __construct($_CIK = null,$_StartYear,$_EndYear)
	{
		parent::__construct(array('CIK'=>$_CIK,'StartYear'=>$_StartYear,'EndYear'=>$_EndYear));
	}
	/**
	 * Set CIK
	 * @param string CIK
	 * @return string
	 */
	public function setCIK($_CIK)
	{
		return ($this->CIK = $_CIK);
	}
	/**
	 * Get CIK
	 * @return string
	 */
	public function getCIK()
	{
		return $this->CIK;
	}
	/**
	 * Set StartYear
	 * @param int StartYear
	 * @return int
	 */
	public function setStartYear($_StartYear)
	{
		return ($this->StartYear = $_StartYear);
	}
	/**
	 * Get StartYear
	 * @return int
	 */
	public function getStartYear()
	{
		return $this->StartYear;
	}
	/**
	 * Set EndYear
	 * @param int EndYear
	 * @return int
	 */
	public function setEndYear($_EndYear)
	{
		return ($this->EndYear = $_EndYear);
	}
	/**
	 * Get EndYear
	 * @return int
	 */
	public function getEndYear()
	{
		return $this->EndYear;
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