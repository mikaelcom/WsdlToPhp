<?php
/**
 * Class file for OvhTypeTelephonyReversmentsSummationStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyReversmentsSummationStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyReversmentsSummationStruct extends OvhWsdlClass
{
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The seconds
	 * @var string
	 */
	public $seconds;
	/**
	 * The priceReversed
	 * @var string
	 */
	public $priceReversed;
	/**
	 * The calls
	 * @var string
	 */
	public $calls;
	/**
	 * Constructor
	 * @param string type
	 * @param string name
	 * @param string seconds
	 * @param string priceReversed
	 * @param string calls
	 * @return OvhTypeTelephonyReversmentsSummationStruct
	 */
	public function __construct($_type = null,$_name = null,$_seconds = null,$_priceReversed = null,$_calls = null)
	{
		parent::__construct(array('type'=>$_type,'name'=>$_name,'seconds'=>$_seconds,'priceReversed'=>$_priceReversed,'calls'=>$_calls));
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set seconds
	 * @param string seconds
	 * @return string
	 */
	public function setSeconds($_seconds)
	{
		return ($this->seconds = $_seconds);
	}
	/**
	 * Get seconds
	 * @return string
	 */
	public function getSeconds()
	{
		return $this->seconds;
	}
	/**
	 * Set priceReversed
	 * @param string priceReversed
	 * @return string
	 */
	public function setPriceReversed($_priceReversed)
	{
		return ($this->priceReversed = $_priceReversed);
	}
	/**
	 * Get priceReversed
	 * @return string
	 */
	public function getPriceReversed()
	{
		return $this->priceReversed;
	}
	/**
	 * Set calls
	 * @param string calls
	 * @return string
	 */
	public function setCalls($_calls)
	{
		return ($this->calls = $_calls);
	}
	/**
	 * Get calls
	 * @return string
	 */
	public function getCalls()
	{
		return $this->calls;
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