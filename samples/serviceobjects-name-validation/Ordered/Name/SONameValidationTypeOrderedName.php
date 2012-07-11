<?php
/**
 * Class file for SONameValidationTypeOrderedName
 * @date 08/07/2012
 */
/**
 * Class SONameValidationTypeOrderedName
 * @date 08/07/2012
 */
class SONameValidationTypeOrderedName extends SONameValidationWsdlClass
{
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
	 * The FirstNameFound
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstNameFound;
	/**
	 * The LastNameFound
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastNameFound;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONameValidationTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string FirstName
	 * @param string LastName
	 * @param string FirstNameFound
	 * @param string LastNameFound
	 * @param SONameValidationTypeErr Error
	 * @return SONameValidationTypeOrderedName
	 */
	public function __construct($_FirstName = null,$_LastName = null,$_FirstNameFound = null,$_LastNameFound = null,$_Error = null)
	{
		parent::__construct(array('FirstName'=>$_FirstName,'LastName'=>$_LastName,'FirstNameFound'=>$_FirstNameFound,'LastNameFound'=>$_LastNameFound,'Error'=>$_Error));
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
	 * Set FirstNameFound
	 * @param string FirstNameFound
	 * @return string
	 */
	public function setFirstNameFound($_FirstNameFound)
	{
		return ($this->FirstNameFound = $_FirstNameFound);
	}
	/**
	 * Get FirstNameFound
	 * @return string
	 */
	public function getFirstNameFound()
	{
		return $this->FirstNameFound;
	}
	/**
	 * Set LastNameFound
	 * @param string LastNameFound
	 * @return string
	 */
	public function setLastNameFound($_LastNameFound)
	{
		return ($this->LastNameFound = $_LastNameFound);
	}
	/**
	 * Get LastNameFound
	 * @return string
	 */
	public function getLastNameFound()
	{
		return $this->LastNameFound;
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SONameValidationTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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