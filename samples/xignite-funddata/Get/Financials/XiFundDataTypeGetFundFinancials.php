<?php
/**
 * Class file for XiFundDataTypeGetFundFinancials
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundFinancials
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundFinancials extends XiFundDataWsdlClass
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
	 * The Year
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Year;
	/**
	 * Constructor
	 * @param string CIK
	 * @param int Year
	 * @return XiFundDataTypeGetFundFinancials
	 */
	public function __construct($_CIK = null,$_Year)
	{
		parent::__construct(array('CIK'=>$_CIK,'Year'=>$_Year));
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
	 * Set Year
	 * @param int Year
	 * @return int
	 */
	public function setYear($_Year)
	{
		return ($this->Year = $_Year);
	}
	/**
	 * Get Year
	 * @return int
	 */
	public function getYear()
	{
		return $this->Year;
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