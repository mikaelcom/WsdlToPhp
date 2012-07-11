<?php
/**
 * Class file for SONameAppendTypeNameAppendResponse
 * @date 08/07/2012
 */
/**
 * Class SONameAppendTypeNameAppendResponse
 * @date 08/07/2012
 */
class SONameAppendTypeNameAppendResponse extends SONameAppendWsdlClass
{
	/**
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Email;
	/**
	 * The FirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstName;
	/**
	 * The LastName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastName;
	/**
	 * The Gender
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Gender;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Error;
	/**
	 * The ErrorNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ErrorNumber;
	/**
	 * The Frequency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Frequency;
	/**
	 * The Certainty
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Certainty;
	/**
	 * Constructor
	 * @param string Email
	 * @param string FirstName
	 * @param string LastName
	 * @param string Gender
	 * @param string Error
	 * @param string ErrorNumber
	 * @param double Frequency
	 * @param int Certainty
	 * @return SONameAppendTypeNameAppendResponse
	 */
	public function __construct($_Email = null,$_FirstName = null,$_LastName = null,$_Gender = null,$_Error = null,$_ErrorNumber = null,$_Frequency,$_Certainty)
	{
		parent::__construct(array('Email'=>$_Email,'FirstName'=>$_FirstName,'LastName'=>$_LastName,'Gender'=>$_Gender,'Error'=>$_Error,'ErrorNumber'=>$_ErrorNumber,'Frequency'=>$_Frequency,'Certainty'=>$_Certainty));
	}
	/**
	 * Set Email
	 * @param string Email
	 * @return string
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = $_Email);
	}
	/**
	 * Get Email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set FirstName
	 * @param string FirstName
	 * @return string
	 */
	public function setFirstName($_FirstName)
	{
		return ($this->FirstName = $_FirstName);
	}
	/**
	 * Get FirstName
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->FirstName;
	}
	/**
	 * Set LastName
	 * @param string LastName
	 * @return string
	 */
	public function setLastName($_LastName)
	{
		return ($this->LastName = $_LastName);
	}
	/**
	 * Get LastName
	 * @return string
	 */
	public function getLastName()
	{
		return $this->LastName;
	}
	/**
	 * Set Gender
	 * @param string Gender
	 * @return string
	 */
	public function setGender($_Gender)
	{
		return ($this->Gender = $_Gender);
	}
	/**
	 * Get Gender
	 * @return string
	 */
	public function getGender()
	{
		return $this->Gender;
	}
	/**
	 * Set Error
	 * @param string Error
	 * @return string
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return string
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set ErrorNumber
	 * @param string ErrorNumber
	 * @return string
	 */
	public function setErrorNumber($_ErrorNumber)
	{
		return ($this->ErrorNumber = $_ErrorNumber);
	}
	/**
	 * Get ErrorNumber
	 * @return string
	 */
	public function getErrorNumber()
	{
		return $this->ErrorNumber;
	}
	/**
	 * Set Frequency
	 * @param double Frequency
	 * @return double
	 */
	public function setFrequency($_Frequency)
	{
		return ($this->Frequency = $_Frequency);
	}
	/**
	 * Get Frequency
	 * @return double
	 */
	public function getFrequency()
	{
		return $this->Frequency;
	}
	/**
	 * Set Certainty
	 * @param int Certainty
	 * @return int
	 */
	public function setCertainty($_Certainty)
	{
		return ($this->Certainty = $_Certainty);
	}
	/**
	 * Get Certainty
	 * @return int
	 */
	public function getCertainty()
	{
		return $this->Certainty;
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