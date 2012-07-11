<?php
/**
 * Class file for XWebSurveyTypeOptionType
 * @date 09/07/2012
 */
/**
 * Class XWebSurveyTypeOptionType
 * @date 09/07/2012
 */
class XWebSurveyTypeOptionType extends XWebSurveyWsdlClass
{
	/**
	 * The Name
	 * @var Name
	 */
	public $Name;
	/**
	 * The Votes
	 * @var Votes
	 */
	public $Votes;
	/**
	 * The Percentage
	 * @var Percentage
	 */
	public $Percentage;
	/**
	 * The Option_Sequence
	 * @var anonymous11
	 */
	public $Option_Sequence;
	/**
	 * The Date_Created
	 * @var anonymous12
	 */
	public $Date_Created;
	/**
	 * Constructor
	 * @param Name Name
	 * @param Votes Votes
	 * @param Percentage Percentage
	 * @param anonymous11 Option_Sequence
	 * @param anonymous12 Date_Created
	 * @return XWebSurveyTypeOptionType
	 */
	public function __construct($_Name = null,$_Votes = null,$_Percentage = null,$_Option_Sequence = null,$_Date_Created = null)
	{
		parent::__construct(array('Name'=>$_Name,'Votes'=>$_Votes,'Percentage'=>$_Percentage,'Option_Sequence'=>$_Option_Sequence,'Date_Created'=>$_Date_Created));
	}
	/**
	 * Set Name
	 * @param Name Name
	 * @return Name
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return Name
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Votes
	 * @param Votes Votes
	 * @return Votes
	 */
	public function setVotes($_Votes)
	{
		return ($this->Votes = $_Votes);
	}
	/**
	 * Get Votes
	 * @return Votes
	 */
	public function getVotes()
	{
		return $this->Votes;
	}
	/**
	 * Set Percentage
	 * @param Percentage Percentage
	 * @return Percentage
	 */
	public function setPercentage($_Percentage)
	{
		return ($this->Percentage = $_Percentage);
	}
	/**
	 * Get Percentage
	 * @return Percentage
	 */
	public function getPercentage()
	{
		return $this->Percentage;
	}
	/**
	 * Set Option_Sequence
	 * @param anonymous11 Option_Sequence
	 * @return anonymous11
	 */
	public function setOption_Sequence($_Option_Sequence)
	{
		return ($this->Option_Sequence = $_Option_Sequence);
	}
	/**
	 * Get Option_Sequence
	 * @return anonymous11
	 */
	public function getOption_Sequence()
	{
		return $this->Option_Sequence;
	}
	/**
	 * Set Date_Created
	 * @param anonymous12 Date_Created
	 * @return anonymous12
	 */
	public function setDate_Created($_Date_Created)
	{
		return ($this->Date_Created = $_Date_Created);
	}
	/**
	 * Get Date_Created
	 * @return anonymous12
	 */
	public function getDate_Created()
	{
		return $this->Date_Created;
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