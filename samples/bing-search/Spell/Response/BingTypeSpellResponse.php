<?php
/**
 * Class file for BingTypeSpellResponse
 * @date 02/07/2012
 */
/**
 * Class BingTypeSpellResponse
 * @date 02/07/2012
 */
class BingTypeSpellResponse extends BingWsdlClass
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
	 * The Results
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfSpellResult
	 */
	public $Results;
	/**
	 * Constructor
	 * @param unsignedInt Total
	 * @param BingTypeArrayOfSpellResult Results
	 * @return BingTypeSpellResponse
	 */
	public function __construct($_Total = null,$_Results = null)
	{
		parent::__construct(array('Total'=>$_Total,'Results'=>new BingTypeArrayOfSpellResult($_Results)));
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
	 * Set Results
	 * @param ArrayOfSpellResult Results
	 * @return ArrayOfSpellResult
	 */
	public function setResults($_Results)
	{
		return ($this->Results = $_Results);
	}
	/**
	 * Get Results
	 * @return BingTypeArrayOfSpellResult
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