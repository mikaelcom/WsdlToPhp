<?php
/**
 * Class file for SOGeoCensusTypeGetLocalAreaIncomeByZipResponse
 * @date 06/07/2012
 */
/**
 * Class SOGeoCensusTypeGetLocalAreaIncomeByZipResponse
 * @date 06/07/2012
 */
class SOGeoCensusTypeGetLocalAreaIncomeByZipResponse extends SOGeoCensusWsdlClass
{
	/**
	 * The GetLocalAreaIncomeByZipResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCensusTypeCensusIncome
	 */
	public $GetLocalAreaIncomeByZipResult;
	/**
	 * Constructor
	 * @param SOGeoCensusTypeCensusIncome GetLocalAreaIncomeByZipResult
	 * @return SOGeoCensusTypeGetLocalAreaIncomeByZipResponse
	 */
	public function __construct($_GetLocalAreaIncomeByZipResult = null)
	{
		parent::__construct(array('GetLocalAreaIncomeByZipResult'=>$_GetLocalAreaIncomeByZipResult));
	}
	/**
	 * Set GetLocalAreaIncomeByZipResult
	 * @param CensusIncome GetLocalAreaIncomeByZipResult
	 * @return CensusIncome
	 */
	public function setGetLocalAreaIncomeByZipResult($_GetLocalAreaIncomeByZipResult)
	{
		return ($this->GetLocalAreaIncomeByZipResult = $_GetLocalAreaIncomeByZipResult);
	}
	/**
	 * Get GetLocalAreaIncomeByZipResult
	 * @return SOGeoCensusTypeCensusIncome
	 */
	public function getGetLocalAreaIncomeByZipResult()
	{
		return $this->GetLocalAreaIncomeByZipResult;
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