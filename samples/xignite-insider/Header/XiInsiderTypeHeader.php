<?php
/**
 * Class file for XiInsiderTypeHeader
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeHeader
 * @date 08/07/2012
 */
class XiInsiderTypeHeader extends XiInsiderWsdlClass
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
	 * The Tracer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Tracer;
	/**
	 * Constructor
	 * @param string Username
	 * @param string Password
	 * @param string Tracer
	 * @return XiInsiderTypeHeader
	 */
	public function __construct($_Username = null,$_Password = null,$_Tracer = null)
	{
		parent::__construct(array('Username'=>$_Username,'Password'=>$_Password,'Tracer'=>$_Tracer));
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
	 * Set Tracer
	 * @param string Tracer
	 * @return string
	 */
	public function setTracer($_Tracer)
	{
		return ($this->Tracer = $_Tracer);
	}
	/**
	 * Get Tracer
	 * @return string
	 */
	public function getTracer()
	{
		return $this->Tracer;
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