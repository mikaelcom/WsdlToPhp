<?php
/**
 * Class file for AmazonAlexaTypeCountry
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCountry
 * @date 10/07/2012
 */
class AmazonAlexaTypeCountry extends AmazonAlexaWsdlClass
{
	/**
	 * The Rank
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $Rank;
	/**
	 * The Contribution
	 * @var AmazonAlexaTypeContribution
	 */
	public $Contribution;
	/**
	 * The Code
	 * @var UNKNOWN
	 */
	public $Code;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeGenericDataType Rank
	 * @param AmazonAlexaTypeContribution Contribution
	 * @param UNKNOWN Code
	 * @return AmazonAlexaTypeCountry
	 */
	public function __construct($_Rank = null,$_Contribution = null,$_Code = null)
	{
		parent::__construct(array('Rank'=>$_Rank,'Contribution'=>$_Contribution,'Code'=>$_Code));
	}
	/**
	 * Set Rank
	 * @param GenericDataType Rank
	 * @return GenericDataType
	 */
	public function setRank($_Rank)
	{
		return ($this->Rank = $_Rank);
	}
	/**
	 * Get Rank
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function getRank()
	{
		return $this->Rank;
	}
	/**
	 * Set Contribution
	 * @param Contribution Contribution
	 * @return Contribution
	 */
	public function setContribution($_Contribution)
	{
		return ($this->Contribution = $_Contribution);
	}
	/**
	 * Get Contribution
	 * @return AmazonAlexaTypeContribution
	 */
	public function getContribution()
	{
		return $this->Contribution;
	}
	/**
	 * Set Code
	 * @param UNKNOWN Code
	 * @return UNKNOWN
	 */
	public function setCode($_Code)
	{
		return ($this->Code = $_Code);
	}
	/**
	 * Get Code
	 * @return UNKNOWN
	 */
	public function getCode()
	{
		return $this->Code;
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