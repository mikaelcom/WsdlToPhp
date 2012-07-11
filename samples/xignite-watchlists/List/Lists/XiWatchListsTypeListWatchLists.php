<?php
/**
 * Class file for XiWatchListsTypeListWatchLists
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeListWatchLists
 * @date 08/07/2012
 */
class XiWatchListsTypeListWatchLists extends XiWatchListsWsdlClass
{
	/**
	 * The Username
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Username;
	/**
	 * The Password
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Password;
	/**
	 * Constructor
	 * @param string Username
	 * @param string Password
	 * @return XiWatchListsTypeListWatchLists
	 */
	public function __construct($_Username = null,$_Password = null)
	{
		parent::__construct(array('Username'=>$_Username,'Password'=>$_Password));
	}
	/**
	 * Set Username
	 * @param string Username
	 * @return string
	 */
	public function setUsername($_Username)
	{
		return ($this->Username = $_Username);
	}
	/**
	 * Get Username
	 * @return string
	 */
	public function getUsername()
	{
		return $this->Username;
	}
	/**
	 * Set Password
	 * @param string Password
	 * @return string
	 */
	public function setPassword($_Password)
	{
		return ($this->Password = $_Password);
	}
	/**
	 * Get Password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->Password;
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