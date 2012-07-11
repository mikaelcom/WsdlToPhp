<?php
/**
 * Class file for AmazonAlexaTypeCity
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCity
 * @date 10/07/2012
 */
class AmazonAlexaTypeCity extends AmazonAlexaWsdlClass
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
	 * The Name
	 * @var UNKNOWN
	 */
	public $Name;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeGenericDataType Rank
	 * @param AmazonAlexaTypeContribution Contribution
	 * @param UNKNOWN Code
	 * @param UNKNOWN Name
	 * @return AmazonAlexaTypeCity
	 */
	public function __construct($_Rank = null,$_Contribution = null,$_Code = null,$_Name = null)
	{
		parent::__construct(array('Rank'=>$_Rank,'Contribution'=>$_Contribution,'Code'=>$_Code,'Name'=>$_Name));
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
	 * Set Name
	 * @param UNKNOWN Name
	 * @return UNKNOWN
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return UNKNOWN
	 */
	public function getName()
	{
		return $this->Name;
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