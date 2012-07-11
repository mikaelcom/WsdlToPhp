<?php
/**
 * Class file for SOPhone2NameTypePhone2NameResult
 * @date 08/07/2012
 */
/**
 * Class SOPhone2NameTypePhone2NameResult
 * @date 08/07/2012
 */
class SOPhone2NameTypePhone2NameResult extends SOPhone2NameWsdlClass
{
	/**
	 * The Phone2NameInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhone2NameTypePhone2NameInfo
	 */
	public $Phone2NameInfo;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhone2NameTypeError
	 */
	public $Error;
	/**
	 * The DEBUG
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DEBUG;
	/**
	 * Constructor
	 * @param SOPhone2NameTypePhone2NameInfo Phone2NameInfo
	 * @param SOPhone2NameTypeError Error
	 * @param string DEBUG
	 * @return SOPhone2NameTypePhone2NameResult
	 */
	public function __construct($_Phone2NameInfo = null,$_Error = null,$_DEBUG = null)
	{
		parent::__construct(array('Phone2NameInfo'=>$_Phone2NameInfo,'Error'=>$_Error,'DEBUG'=>$_DEBUG));
	}
	/**
	 * Set Phone2NameInfo
	 * @param Phone2NameInfo Phone2NameInfo
	 * @return Phone2NameInfo
	 */
	public function setPhone2NameInfo($_Phone2NameInfo)
	{
		return ($this->Phone2NameInfo = $_Phone2NameInfo);
	}
	/**
	 * Get Phone2NameInfo
	 * @return SOPhone2NameTypePhone2NameInfo
	 */
	public function getPhone2NameInfo()
	{
		return $this->Phone2NameInfo;
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
	 * @return SOPhone2NameTypeError
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set DEBUG
	 * @param string DEBUG
	 * @return string
	 */
	public function setDEBUG($_DEBUG)
	{
		return ($this->DEBUG = $_DEBUG);
	}
	/**
	 * Get DEBUG
	 * @return string
	 */
	public function getDEBUG()
	{
		return $this->DEBUG;
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