<?php
/**
 * Class file for BingTypeMobileWebResponse
 * @date 02/07/2012
 */
/**
 * Class BingTypeMobileWebResponse
 * @date 02/07/2012
 */
class BingTypeMobileWebResponse extends BingWsdlClass
{
	/**
	 * The Total
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $Total;
	/**
	 * The Offset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $Offset;
	/**
	 * The Results
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfMobileWebResult
	 */
	public $Results;
	/**
	 * Constructor
	 * @param unsignedInt Total
	 * @param unsignedInt Offset
	 * @param BingTypeArrayOfMobileWebResult Results
	 * @return BingTypeMobileWebResponse
	 */
	public function __construct($_Total = null,$_Offset = null,$_Results = null)
	{
		parent::__construct(array('Total'=>$_Total,'Offset'=>$_Offset,'Results'=>new BingTypeArrayOfMobileWebResult($_Results)));
	}
	/**
	 * Set Total
	 * @param unsignedInt Total
	 * @return unsignedInt
	 */
	public function setTotal($_Total)
	{
		return ($this->Total = $_Total);
	}
	/**
	 * Get Total
	 * @return unsignedInt
	 */
	public function getTotal()
	{
		return $this->Total;
	}
	/**
	 * Set Offset
	 * @param unsignedInt Offset
	 * @return unsignedInt
	 */
	public function setOffset($_Offset)
	{
		return ($this->Offset = $_Offset);
	}
	/**
	 * Get Offset
	 * @return unsignedInt
	 */
	public function getOffset()
	{
		return $this->Offset;
	}
	/**
	 * Set Results
	 * @param ArrayOfMobileWebResult Results
	 * @return ArrayOfMobileWebResult
	 */
	public function setResults($_Results)
	{
		return ($this->Results = $_Results);
	}
	/**
	 * Get Results
	 * @return BingTypeArrayOfMobileWebResult
	 */
	public function getResults()
	{
		return $this->Results;
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