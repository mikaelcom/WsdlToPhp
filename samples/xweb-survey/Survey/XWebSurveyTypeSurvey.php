<?php
/**
 * Class file for XWebSurveyTypeSurvey
 * @date 09/07/2012
 */
/**
 * Class XWebSurveyTypeSurvey
 * @date 09/07/2012
 */
class XWebSurveyTypeSurvey extends XWebSurveyWsdlClass
{
	/**
	 * The Name
	 * @var Name
	 */
	public $Name;
	/**
	 * The Description
	 * @var Description
	 */
	public $Description;
	/**
	 * The Total_Votes
	 * @var Total_Votes
	 */
	public $Total_Votes;
	/**
	 * The Options
	 * @var XWebSurveyTypeOptions
	 */
	public $Options;
	/**
	 * The Survey_ID
	 * @var anonymous5
	 */
	public $Survey_ID;
	/**
	 * The Date_Created
	 * @var anonymous6
	 */
	public $Date_Created;
	/**
	 * Constructor
	 * @param Name Name
	 * @param Description Description
	 * @param Total_Votes Total_Votes
	 * @param XWebSurveyTypeOptions Options
	 * @param anonymous5 Survey_ID
	 * @param anonymous6 Date_Created
	 * @return XWebSurveyTypeSurvey
	 */
	public function __construct($_Name = null,$_Description = null,$_Total_Votes = null,$_Options = null,$_Survey_ID = null,$_Date_Created = null)
	{
		parent::__construct(array('Name'=>$_Name,'Description'=>$_Description,'Total_Votes'=>$_Total_Votes,'Options'=>$_Options,'Survey_ID'=>$_Survey_ID,'Date_Created'=>$_Date_Created));
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
	 * Set Description
	 * @param Description Description
	 * @return Description
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return Description
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Total_Votes
	 * @param Total_Votes Total_Votes
	 * @return Total_Votes
	 */
	public function setTotal_Votes($_Total_Votes)
	{
		return ($this->Total_Votes = $_Total_Votes);
	}
	/**
	 * Get Total_Votes
	 * @return Total_Votes
	 */
	public function getTotal_Votes()
	{
		return $this->Total_Votes;
	}
	/**
	 * Set Options
	 * @param Options Options
	 * @return Options
	 */
	public function setOptions($_Options)
	{
		return ($this->Options = $_Options);
	}
	/**
	 * Get Options
	 * @return XWebSurveyTypeOptions
	 */
	public function getOptions()
	{
		return $this->Options;
	}
	/**
	 * Set Survey_ID
	 * @param anonymous5 Survey_ID
	 * @return anonymous5
	 */
	public function setSurvey_ID($_Survey_ID)
	{
		return ($this->Survey_ID = $_Survey_ID);
	}
	/**
	 * Get Survey_ID
	 * @return anonymous5
	 */
	public function getSurvey_ID()
	{
		return $this->Survey_ID;
	}
	/**
	 * Set Date_Created
	 * @param anonymous6 Date_Created
	 * @return anonymous6
	 */
	public function setDate_Created($_Date_Created)
	{
		return ($this->Date_Created = $_Date_Created);
	}
	/**
	 * Get Date_Created
	 * @return anonymous6
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