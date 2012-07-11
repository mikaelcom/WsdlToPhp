<?php
/**
 * Class file for YMailTypeUserVacationPref
 * @date 02/07/2012
 */
/**
 * Class YMailTypeUserVacationPref
 * @date 02/07/2012
 */
class YMailTypeUserVacationPref extends YMailWsdlClass
{
	/**
	 * The vacationResponseOn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $vacationResponseOn;
	/**
	 * The vacationResponseSubject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $vacationResponseSubject;
	/**
	 * The vacationResponseText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $vacationResponseText;
	/**
	 * The vacationResponseDomain0
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $vacationResponseDomain0;
	/**
	 * The vacationResponseDomain1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $vacationResponseDomain1;
	/**
	 * The vacationResponseStartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $vacationResponseStartDate;
	/**
	 * The vacationResponseEndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $vacationResponseEndDate;
	/**
	 * Constructor
	 * @param boolean vacationResponseOn
	 * @param string vacationResponseSubject
	 * @param string vacationResponseText
	 * @param string vacationResponseDomain0
	 * @param string vacationResponseDomain1
	 * @param string vacationResponseStartDate
	 * @param string vacationResponseEndDate
	 * @return YMailTypeUserVacationPref
	 */
	public function __construct($_vacationResponseOn = null,$_vacationResponseSubject = null,$_vacationResponseText = null,$_vacationResponseDomain0 = null,$_vacationResponseDomain1 = null,$_vacationResponseStartDate = null,$_vacationResponseEndDate = null)
	{
		parent::__construct(array('vacationResponseOn'=>$_vacationResponseOn,'vacationResponseSubject'=>$_vacationResponseSubject,'vacationResponseText'=>$_vacationResponseText,'vacationResponseDomain0'=>$_vacationResponseDomain0,'vacationResponseDomain1'=>$_vacationResponseDomain1,'vacationResponseStartDate'=>$_vacationResponseStartDate,'vacationResponseEndDate'=>$_vacationResponseEndDate));
	}
	/**
	 * Set vacationResponseOn
	 * @param boolean vacationResponseOn
	 * @return boolean
	 */
	public function setVacationResponseOn($_vacationResponseOn)
	{
		return ($this->vacationResponseOn = $_vacationResponseOn);
	}
	/**
	 * Get vacationResponseOn
	 * @return boolean
	 */
	public function getVacationResponseOn()
	{
		return $this->vacationResponseOn;
	}
	/**
	 * Set vacationResponseSubject
	 * @param string vacationResponseSubject
	 * @return string
	 */
	public function setVacationResponseSubject($_vacationResponseSubject)
	{
		return ($this->vacationResponseSubject = $_vacationResponseSubject);
	}
	/**
	 * Get vacationResponseSubject
	 * @return string
	 */
	public function getVacationResponseSubject()
	{
		return $this->vacationResponseSubject;
	}
	/**
	 * Set vacationResponseText
	 * @param string vacationResponseText
	 * @return string
	 */
	public function setVacationResponseText($_vacationResponseText)
	{
		return ($this->vacationResponseText = $_vacationResponseText);
	}
	/**
	 * Get vacationResponseText
	 * @return string
	 */
	public function getVacationResponseText()
	{
		return $this->vacationResponseText;
	}
	/**
	 * Set vacationResponseDomain0
	 * @param string vacationResponseDomain0
	 * @return string
	 */
	public function setVacationResponseDomain0($_vacationResponseDomain0)
	{
		return ($this->vacationResponseDomain0 = $_vacationResponseDomain0);
	}
	/**
	 * Get vacationResponseDomain0
	 * @return string
	 */
	public function getVacationResponseDomain0()
	{
		return $this->vacationResponseDomain0;
	}
	/**
	 * Set vacationResponseDomain1
	 * @param string vacationResponseDomain1
	 * @return string
	 */
	public function setVacationResponseDomain1($_vacationResponseDomain1)
	{
		return ($this->vacationResponseDomain1 = $_vacationResponseDomain1);
	}
	/**
	 * Get vacationResponseDomain1
	 * @return string
	 */
	public function getVacationResponseDomain1()
	{
		return $this->vacationResponseDomain1;
	}
	/**
	 * Set vacationResponseStartDate
	 * @param string vacationResponseStartDate
	 * @return string
	 */
	public function setVacationResponseStartDate($_vacationResponseStartDate)
	{
		return ($this->vacationResponseStartDate = $_vacationResponseStartDate);
	}
	/**
	 * Get vacationResponseStartDate
	 * @return string
	 */
	public function getVacationResponseStartDate()
	{
		return $this->vacationResponseStartDate;
	}
	/**
	 * Set vacationResponseEndDate
	 * @param string vacationResponseEndDate
	 * @return string
	 */
	public function setVacationResponseEndDate($_vacationResponseEndDate)
	{
		return ($this->vacationResponseEndDate = $_vacationResponseEndDate);
	}
	/**
	 * Get vacationResponseEndDate
	 * @return string
	 */
	public function getVacationResponseEndDate()
	{
		return $this->vacationResponseEndDate;
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