<?php
/**
 * Class file for OvhTypeTelephonyChangeNicModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyChangeNicModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyChangeNicModify extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The nicNames
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $nicNames;
	/**
	 * The nicPasswords
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $nicPasswords;
	/**
	 * The nicTypes
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $nicTypes;
	/**
	 * The changeTypes
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $changeTypes;
	/**
	 * The changeElts
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $changeElts;
	/**
	 * Constructor
	 * @param string session
	 * @param OvhTypeMyArrayOfStringType nicNames
	 * @param OvhTypeMyArrayOfStringType nicPasswords
	 * @param OvhTypeMyArrayOfStringType nicTypes
	 * @param OvhTypeMyArrayOfStringType changeTypes
	 * @param OvhTypeMyArrayOfStringType changeElts
	 * @return OvhTypeTelephonyChangeNicModify
	 */
	public function __construct($_session = null,$_nicNames = null,$_nicPasswords = null,$_nicTypes = null,$_changeTypes = null,$_changeElts = null)
	{
		parent::__construct(array('session'=>$_session,'nicNames'=>new OvhTypeMyArrayOfStringType($_nicNames),'nicPasswords'=>new OvhTypeMyArrayOfStringType($_nicPasswords),'nicTypes'=>new OvhTypeMyArrayOfStringType($_nicTypes),'changeTypes'=>new OvhTypeMyArrayOfStringType($_changeTypes),'changeElts'=>new OvhTypeMyArrayOfStringType($_changeElts)));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set nicNames
	 * @param MyArrayOfStringType nicNames
	 * @return MyArrayOfStringType
	 */
	public function setNicNames($_nicNames)
	{
		return ($this->nicNames = $_nicNames);
	}
	/**
	 * Get nicNames
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getNicNames()
	{
		return $this->nicNames;
	}
	/**
	 * Set nicPasswords
	 * @param MyArrayOfStringType nicPasswords
	 * @return MyArrayOfStringType
	 */
	public function setNicPasswords($_nicPasswords)
	{
		return ($this->nicPasswords = $_nicPasswords);
	}
	/**
	 * Get nicPasswords
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getNicPasswords()
	{
		return $this->nicPasswords;
	}
	/**
	 * Set nicTypes
	 * @param MyArrayOfStringType nicTypes
	 * @return MyArrayOfStringType
	 */
	public function setNicTypes($_nicTypes)
	{
		return ($this->nicTypes = $_nicTypes);
	}
	/**
	 * Get nicTypes
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getNicTypes()
	{
		return $this->nicTypes;
	}
	/**
	 * Set changeTypes
	 * @param MyArrayOfStringType changeTypes
	 * @return MyArrayOfStringType
	 */
	public function setChangeTypes($_changeTypes)
	{
		return ($this->changeTypes = $_changeTypes);
	}
	/**
	 * Get changeTypes
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getChangeTypes()
	{
		return $this->changeTypes;
	}
	/**
	 * Set changeElts
	 * @param MyArrayOfStringType changeElts
	 * @return MyArrayOfStringType
	 */
	public function setChangeElts($_changeElts)
	{
		return ($this->changeElts = $_changeElts);
	}
	/**
	 * Get changeElts
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getChangeElts()
	{
		return $this->changeElts;
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