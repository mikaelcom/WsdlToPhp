<?php
/**
 * Class file for SPEmailWsTypeCreateContact
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeCreateContact
 * @date 06/07/2012
 */
class SPEmailWsTypeCreateContact extends SPEmailWsWsdlClass
{
	/**
	 * The Alias
	 * @var string
	 */
	public $Alias;
	/**
	 * The FirstName
	 * @var string
	 */
	public $FirstName;
	/**
	 * The LastName
	 * @var string
	 */
	public $LastName;
	/**
	 * The ForwardingEmail
	 * @var string
	 */
	public $ForwardingEmail;
	/**
	 * The Flags
	 * @var ContactFlags
	 */
	public $Flags;
	/**
	 * Constructor
	 * @param string Alias
	 * @param string FirstName
	 * @param string LastName
	 * @param string ForwardingEmail
	 * @param ContactFlags Flags
	 * @return SPEmailWsTypeCreateContact
	 */
	public function __construct($_Alias = null,$_FirstName = null,$_LastName = null,$_ForwardingEmail = null,$_Flags = null)
	{
		parent::__construct(array('Alias'=>$_Alias,'FirstName'=>$_FirstName,'LastName'=>$_LastName,'ForwardingEmail'=>$_ForwardingEmail,'Flags'=>$_Flags));
	}
	/**
	 * Set Alias
	 * @param string Alias
	 * @return string
	 */
	public function setAlias($_Alias)
	{
		return ($this->Alias = $_Alias);
	}
	/**
	 * Get Alias
	 * @return string
	 */
	public function getAlias()
	{
		return $this->Alias;
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
	 * Set ForwardingEmail
	 * @param string ForwardingEmail
	 * @return string
	 */
	public function setForwardingEmail($_ForwardingEmail)
	{
		return ($this->ForwardingEmail = $_ForwardingEmail);
	}
	/**
	 * Get ForwardingEmail
	 * @return string
	 */
	public function getForwardingEmail()
	{
		return $this->ForwardingEmail;
	}
	/**
	 * Set Flags
	 * @param ContactFlags Flags
	 * @return ContactFlags
	 */
	public function setFlags($_Flags)
	{
		return ($this->Flags = $_Flags);
	}
	/**
	 * Get Flags
	 * @return ContactFlags
	 */
	public function getFlags()
	{
		return $this->Flags;
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