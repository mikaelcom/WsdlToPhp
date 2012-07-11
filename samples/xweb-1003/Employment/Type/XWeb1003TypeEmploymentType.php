<?php
/**
 * Class file for XWeb1003TypeEmploymentType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeEmploymentType
 * @date 09/07/2012
 */
class XWeb1003TypeEmploymentType extends XWeb1003WsdlClass
{
	/**
	 * The Is_Self_Employed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Is_Self_Employed;
	/**
	 * The Employer
	 * @var XWeb1003TypeEmployer
	 */
	public $Employer;
	/**
	 * The Position
	 * @var Position
	 */
	public $Position;
	/**
	 * The Title
	 * @var Title
	 */
	public $Title;
	/**
	 * The Type_Of_Business
	 * @var Type_Of_Business
	 */
	public $Type_Of_Business;
	/**
	 * The Business_Phone
	 * @var Business_Phone
	 */
	public $Business_Phone;
	/**
	 * The Date_From
	 * @var Date_From
	 */
	public $Date_From;
	/**
	 * The Date_To
	 * @var Date_To
	 */
	public $Date_To;
	/**
	 * The Monthly_Income
	 * @var Monthly_Income
	 */
	public $Monthly_Income;
	/**
	 * The Employment_Sequence
	 * @var anonymous89
	 */
	public $Employment_Sequence;
	/**
	 * Constructor
	 * @param boolean Is_Self_Employed
	 * @param XWeb1003TypeEmployer Employer
	 * @param Position Position
	 * @param Title Title
	 * @param Type_Of_Business Type_Of_Business
	 * @param Business_Phone Business_Phone
	 * @param Date_From Date_From
	 * @param Date_To Date_To
	 * @param Monthly_Income Monthly_Income
	 * @param anonymous89 Employment_Sequence
	 * @return XWeb1003TypeEmploymentType
	 */
	public function __construct($_Is_Self_Employed = null,$_Employer = null,$_Position = null,$_Title = null,$_Type_Of_Business = null,$_Business_Phone = null,$_Date_From = null,$_Date_To = null,$_Monthly_Income = null,$_Employment_Sequence = null)
	{
		parent::__construct(array('Is_Self_Employed'=>$_Is_Self_Employed,'Employer'=>$_Employer,'Position'=>$_Position,'Title'=>$_Title,'Type_Of_Business'=>$_Type_Of_Business,'Business_Phone'=>$_Business_Phone,'Date_From'=>$_Date_From,'Date_To'=>$_Date_To,'Monthly_Income'=>$_Monthly_Income,'Employment_Sequence'=>$_Employment_Sequence));
	}
	/**
	 * Set Is_Self_Employed
	 * @param boolean Is_Self_Employed
	 * @return boolean
	 */
	public function setIs_Self_Employed($_Is_Self_Employed)
	{
		return ($this->Is_Self_Employed = $_Is_Self_Employed);
	}
	/**
	 * Get Is_Self_Employed
	 * @return boolean
	 */
	public function getIs_Self_Employed()
	{
		return $this->Is_Self_Employed;
	}
	/**
	 * Set Employer
	 * @param Employer Employer
	 * @return Employer
	 */
	public function setEmployer($_Employer)
	{
		return ($this->Employer = $_Employer);
	}
	/**
	 * Get Employer
	 * @return XWeb1003TypeEmployer
	 */
	public function getEmployer()
	{
		return $this->Employer;
	}
	/**
	 * Set Position
	 * @param Position Position
	 * @return Position
	 */
	public function setPosition($_Position)
	{
		return ($this->Position = $_Position);
	}
	/**
	 * Get Position
	 * @return Position
	 */
	public function getPosition()
	{
		return $this->Position;
	}
	/**
	 * Set Title
	 * @param Title Title
	 * @return Title
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return Title
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Type_Of_Business
	 * @param Type_Of_Business Type_Of_Business
	 * @return Type_Of_Business
	 */
	public function setType_Of_Business($_Type_Of_Business)
	{
		return ($this->Type_Of_Business = $_Type_Of_Business);
	}
	/**
	 * Get Type_Of_Business
	 * @return Type_Of_Business
	 */
	public function getType_Of_Business()
	{
		return $this->Type_Of_Business;
	}
	/**
	 * Set Business_Phone
	 * @param Business_Phone Business_Phone
	 * @return Business_Phone
	 */
	public function setBusiness_Phone($_Business_Phone)
	{
		return ($this->Business_Phone = $_Business_Phone);
	}
	/**
	 * Get Business_Phone
	 * @return Business_Phone
	 */
	public function getBusiness_Phone()
	{
		return $this->Business_Phone;
	}
	/**
	 * Set Date_From
	 * @param Date_From Date_From
	 * @return Date_From
	 */
	public function setDate_From($_Date_From)
	{
		return ($this->Date_From = $_Date_From);
	}
	/**
	 * Get Date_From
	 * @return Date_From
	 */
	public function getDate_From()
	{
		return $this->Date_From;
	}
	/**
	 * Set Date_To
	 * @param Date_To Date_To
	 * @return Date_To
	 */
	public function setDate_To($_Date_To)
	{
		return ($this->Date_To = $_Date_To);
	}
	/**
	 * Get Date_To
	 * @return Date_To
	 */
	public function getDate_To()
	{
		return $this->Date_To;
	}
	/**
	 * Set Monthly_Income
	 * @param Monthly_Income Monthly_Income
	 * @return Monthly_Income
	 */
	public function setMonthly_Income($_Monthly_Income)
	{
		return ($this->Monthly_Income = $_Monthly_Income);
	}
	/**
	 * Get Monthly_Income
	 * @return Monthly_Income
	 */
	public function getMonthly_Income()
	{
		return $this->Monthly_Income;
	}
	/**
	 * Set Employment_Sequence
	 * @param anonymous89 Employment_Sequence
	 * @return anonymous89
	 */
	public function setEmployment_Sequence($_Employment_Sequence)
	{
		return ($this->Employment_Sequence = $_Employment_Sequence);
	}
	/**
	 * Get Employment_Sequence
	 * @return anonymous89
	 */
	public function getEmployment_Sequence()
	{
		return $this->Employment_Sequence;
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