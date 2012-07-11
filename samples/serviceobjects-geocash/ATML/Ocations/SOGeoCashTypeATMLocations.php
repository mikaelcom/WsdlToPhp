<?php
/**
 * Class file for SOGeoCashTypeATMLocations
 * @date 08/07/2012
 */
/**
 * Class SOGeoCashTypeATMLocations
 * @date 08/07/2012
 */
class SOGeoCashTypeATMLocations extends SOGeoCashWsdlClass
{
	/**
	 * The ATM
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOGeoCashTypeATM
	 */
	public $ATM;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCashTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param SOGeoCashTypeATM ATM
	 * @param SOGeoCashTypeErr Error
	 * @return SOGeoCashTypeATMLocations
	 */
	public function __construct($_ATM = null,$_Error = null)
	{
		parent::__construct(array('ATM'=>$_ATM,'Error'=>$_Error));
	}
	/**
	 * Set ATM
	 * @param ATM ATM
	 * @return ATM
	 */
	public function setATM($_ATM)
	{
		return ($this->ATM = $_ATM);
	}
	/**
	 * Get ATM
	 * @return SOGeoCashTypeATM
	 */
	public function getATM()
	{
		return $this->ATM;
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
	 * @return SOGeoCashTypeErr
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