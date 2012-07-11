<?php
/**
 * Class file for OvhTypeDedicatedMrtgInfoStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMrtgInfoStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedMrtgInfoStruct extends OvhWsdlClass
{
	/**
	 * The in
	 * @var string
	 */
	public $in;
	/**
	 * The out
	 * @var string
	 */
	public $out;
	/**
	 * Constructor
	 * @param string in
	 * @param string out
	 * @return OvhTypeDedicatedMrtgInfoStruct
	 */
	public function __construct($_in = null,$_out = null)
	{
		parent::__construct(array('in'=>$_in,'out'=>$_out));
	}
	/**
	 * Set in
	 * @param string in
	 * @return string
	 */
	public function setIn($_in)
	{
		return ($this->in = $_in);
	}
	/**
	 * Get in
	 * @return string
	 */
	public function getIn()
	{
		return $this->in;
	}
	/**
	 * Set out
	 * @param string out
	 * @return string
	 */
	public function setOut($_out)
	{
		return ($this->out = $_out);
	}
	/**
	 * Get out
	 * @return string
	 */
	public function getOut()
	{
		return $this->out;
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