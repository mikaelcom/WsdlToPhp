<?php
/**
 * Class file for SPEmailWsTypeModifyContact
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeModifyContact
 * @date 06/07/2012
 */
class SPEmailWsTypeModifyContact extends SPEmailWsWsdlClass
{
	/**
	 * The OldAlias
	 * @var string
	 */
	public $OldAlias;
	/**
	 * The NewAlias
	 * @var string
	 */
	public $NewAlias;
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
	 * @param string OldAlias
	 * @param string NewAlias
	 * @param string FirstName
	 * @param string LastName
	 * @param string ForwardingEmail
	 * @param ContactFlags Flags
	 * @return SPEmailWsTypeModifyContact
	 */
	public function __construct($_OldAlias = null,$_NewAlias = null,$_FirstName = null,$_LastName = null,$_ForwardingEmail = null,$_Flags = null)
	{
		parent::__construct(array('OldAlias'=>$_OldAlias,'NewAlias'=>$_NewAlias,'FirstName'=>$_FirstName,'LastName'=>$_LastName,'ForwardingEmail'=>$_ForwardingEmail,'Flags'=>$_Flags));
	}
	/**
	 * Set OldAlias
	 * @param string OldAlias
	 * @return string
	 */
	public function setOldAlias($_OldAlias)
	{
		return ($this->OldAlias = $_OldAlias);
	}
	/**
	 * Get OldAlias
	 * @return string
	 */
	public function getOldAlias()
	{
		return $this->OldAlias;
	}
	/**
	 * Set NewAlias
	 * @param string NewAlias
	 * @return string
	 */
	public function setNewAlias($_NewAlias)
	{
		return ($this->NewAlias = $_NewAlias);
	}
	/**
	 * Get NewAlias
	 * @return string
	 */
	public function getNewAlias()
	{
		return $this->NewAlias;
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