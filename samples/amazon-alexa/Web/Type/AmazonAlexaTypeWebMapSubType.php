<?php
/**
 * Class file for AmazonAlexaTypeWebMapSubType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeWebMapSubType
 * @date 10/07/2012
 */
class AmazonAlexaTypeWebMapSubType extends AmazonAlexaWsdlClass
{
	/**
	 * The StartNumber
	 * @var UnsignedIntegerType
	 */
	public $StartNumber;
	/**
	 * The Count
	 * @var UnsignedIntegerType
	 */
	public $Count;
	/**
	 * The Total
	 * @var UnsignedIntegerType
	 */
	public $Total;
	/**
	 * The Results
	 * @var AmazonAlexaTypeResults
	 */
	public $Results;
	/**
	 * Constructor
	 * @param UnsignedIntegerType StartNumber
	 * @param UnsignedIntegerType Count
	 * @param UnsignedIntegerType Total
	 * @param AmazonAlexaTypeResults Results
	 * @return AmazonAlexaTypeWebMapSubType
	 */
	public function __construct($_StartNumber = null,$_Count = null,$_Total = null,$_Results = null)
	{
		parent::__construct(array('StartNumber'=>$_StartNumber,'Count'=>$_Count,'Total'=>$_Total,'Results'=>$_Results));
	}
	/**
	 * Set StartNumber
	 * @param UnsignedIntegerType StartNumber
	 * @return UnsignedIntegerType
	 */
	public function setStartNumber($_StartNumber)
	{
		return ($this->StartNumber = $_StartNumber);
	}
	/**
	 * Get StartNumber
	 * @return UnsignedIntegerType
	 */
	public function getStartNumber()
	{
		return $this->StartNumber;
	}
	/**
	 * Set Count
	 * @param UnsignedIntegerType Count
	 * @return UnsignedIntegerType
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return UnsignedIntegerType
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Total
	 * @param UnsignedIntegerType Total
	 * @return UnsignedIntegerType
	 */
	public function setTotal($_Total)
	{
		return ($this->Total = $_Total);
	}
	/**
	 * Get Total
	 * @return UnsignedIntegerType
	 */
	public function getTotal()
	{
		return $this->Total;
	}
	/**
	 * Set Results
	 * @param Results Results
	 * @return Results
	 */
	public function setResults($_Results)
	{
		return ($this->Results = $_Results);
	}
	/**
	 * Get Results
	 * @return AmazonAlexaTypeResults
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