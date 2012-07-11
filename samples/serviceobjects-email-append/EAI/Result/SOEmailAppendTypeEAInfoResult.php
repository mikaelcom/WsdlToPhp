<?php
/**
 * Class file for SOEmailAppendTypeEAInfoResult
 * @date 08/07/2012
 */
/**
 * Class SOEmailAppendTypeEAInfoResult
 * @date 08/07/2012
 */
class SOEmailAppendTypeEAInfoResult extends SOEmailAppendWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOEmailAppendTypeError
	 */
	public $Error;
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
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Email;
	/**
	 * The Certainty
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Certainty;
	/**
	 * The Corrections
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Corrections;
	/**
	 * Constructor
	 * @param SOEmailAppendTypeError Error
	 * @param string FirstName
	 * @param string LastName
	 * @param string Email
	 * @param string Certainty
	 * @param string Corrections
	 * @return SOEmailAppendTypeEAInfoResult
	 */
	public function __construct($_Error = null,$_FirstName = null,$_LastName = null,$_Email = null,$_Certainty = null,$_Corrections = null)
	{
		parent::__construct(array('Error'=>$_Error,'FirstName'=>$_FirstName,'LastName'=>$_LastName,'Email'=>$_Email,'Certainty'=>$_Certainty,'Corrections'=>$_Corrections));
	}
	/**
	 * Set Error
	 * @param Error Error
	 * @return Error
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOEmailAppendTypeError
	 */
	public function getError()
	{
		return $this->Error;
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
	 * Set Certainty
	 * @param string Certainty
	 * @return string
	 */
	public function setCertainty($_Certainty)
	{
		return ($this->Certainty = $_Certainty);
	}
	/**
	 * Get Certainty
	 * @return string
	 */
	public function getCertainty()
	{
		return $this->Certainty;
	}
	/**
	 * Set Corrections
	 * @param string Corrections
	 * @return string
	 */
	public function setCorrections($_Corrections)
	{
		return ($this->Corrections = $_Corrections);
	}
	/**
	 * Get Corrections
	 * @return string
	 */
	public function getCorrections()
	{
		return $this->Corrections;
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