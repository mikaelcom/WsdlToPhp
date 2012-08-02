<?php
/**
 * Class file for DirectSmileTypeGetdHttUrl
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetdHttUrl
 * @date 02/08/2012
 */
class DirectSmileTypeGetdHttUrl extends DirectSmileWsdlClass
{
	/**
	 * The SID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SID;
	/**
	 * The dHttAlias
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $dHttAlias;
	/**
	 * Constructor
	 * @param string SID
	 * @param string dHttAlias
	 * @return DirectSmileTypeGetdHttUrl
	 */
	public function __construct($_SID = null,$_dHttAlias = null)
	{
		parent::__construct(array('SID'=>$_SID,'dHttAlias'=>$_dHttAlias));
	}
	/**
	 * Set SID
	 * @param string SID
	 * @return string
	 */
	public function setSID($_SID)
	{
		return ($this->SID = $_SID);
	}
	/**
	 * Get SID
	 * @return string
	 */
	public function getSID()
	{
		return $this->SID;
	}
	/**
	 * Set dHttAlias
	 * @param string dHttAlias
	 * @return string
	 */
	public function setDHttAlias($_dHttAlias)
	{
		return ($this->dHttAlias = $_dHttAlias);
	}
	/**
	 * Get dHttAlias
	 * @return string
	 */
	public function getDHttAlias()
	{
		return $this->dHttAlias;
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