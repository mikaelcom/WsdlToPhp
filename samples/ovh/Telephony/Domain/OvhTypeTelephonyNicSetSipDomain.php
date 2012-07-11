<?php
/**
 * Class file for OvhTypeTelephonyNicSetSipDomain
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyNicSetSipDomain
 * @date 02/07/2012
 */
class OvhTypeTelephonyNicSetSipDomain extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The fr
	 * @var string
	 */
	public $fr;
	/**
	 * The de
	 * @var string
	 */
	public $de;
	/**
	 * The es
	 * @var string
	 */
	public $es;
	/**
	 * The uk
	 * @var string
	 */
	public $uk;
	/**
	 * The be
	 * @var string
	 */
	public $be;
	/**
	 * Constructor
	 * @param string session
	 * @param string fr
	 * @param string de
	 * @param string es
	 * @param string uk
	 * @param string be
	 * @return OvhTypeTelephonyNicSetSipDomain
	 */
	public function __construct($_session = null,$_fr = null,$_de = null,$_es = null,$_uk = null,$_be = null)
	{
		parent::__construct(array('session'=>$_session,'fr'=>$_fr,'de'=>$_de,'es'=>$_es,'uk'=>$_uk,'be'=>$_be));
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
	 * Set fr
	 * @param string fr
	 * @return string
	 */
	public function setFr($_fr)
	{
		return ($this->fr = $_fr);
	}
	/**
	 * Get fr
	 * @return string
	 */
	public function getFr()
	{
		return $this->fr;
	}
	/**
	 * Set de
	 * @param string de
	 * @return string
	 */
	public function setDe($_de)
	{
		return ($this->de = $_de);
	}
	/**
	 * Get de
	 * @return string
	 */
	public function getDe()
	{
		return $this->de;
	}
	/**
	 * Set es
	 * @param string es
	 * @return string
	 */
	public function setEs($_es)
	{
		return ($this->es = $_es);
	}
	/**
	 * Get es
	 * @return string
	 */
	public function getEs()
	{
		return $this->es;
	}
	/**
	 * Set uk
	 * @param string uk
	 * @return string
	 */
	public function setUk($_uk)
	{
		return ($this->uk = $_uk);
	}
	/**
	 * Get uk
	 * @return string
	 */
	public function getUk()
	{
		return $this->uk;
	}
	/**
	 * Set be
	 * @param string be
	 * @return string
	 */
	public function setBe($_be)
	{
		return ($this->be = $_be);
	}
	/**
	 * Get be
	 * @return string
	 */
	public function getBe()
	{
		return $this->be;
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