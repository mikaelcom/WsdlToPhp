<?php
/**
 * Class file for QuakemlTypeLatestEvents
 * @date 10/07/2012
 */
/**
 * Class QuakemlTypeLatestEvents
 * @date 10/07/2012
 */
class QuakemlTypeLatestEvents extends QuakemlWsdlClass
{
	/**
	 * The complete
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var int
	 */
	public $complete;
	/**
	 * The num
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var int
	 */
	public $num;
	/**
	 * Constructor
	 * @param int complete
	 * @param int num
	 * @return QuakemlTypeLatestEvents
	 */
	public function __construct($_complete = null,$_num = null)
	{
		parent::__construct(array('complete'=>$_complete,'num'=>$_num));
	}
	/**
	 * Set complete
	 * @param int complete
	 * @return int
	 */
	public function setComplete($_complete)
	{
		return ($this->complete = $_complete);
	}
	/**
	 * Get complete
	 * @return int
	 */
	public function getComplete()
	{
		return $this->complete;
	}
	/**
	 * Set num
	 * @param int num
	 * @return int
	 */
	public function setNum($_num)
	{
		return ($this->num = $_num);
	}
	/**
	 * Get num
	 * @return int
	 */
	public function getNum()
	{
		return $this->num;
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