<?php
/**
 * Class file for OvhTypeTelephonyReversmentsDetailsStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyReversmentsDetailsStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyReversmentsDetailsStruct extends OvhWsdlClass
{
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The connectionDuration
	 * @var string
	 */
	public $connectionDuration;
	/**
	 * The callingNumber
	 * @var string
	 */
	public $callingNumber;
	/**
	 * The priceReversed
	 * @var string
	 */
	public $priceReversed;
	/**
	 * The operatorCode
	 * @var string
	 */
	public $operatorCode;
	/**
	 * Constructor
	 * @param string date
	 * @param string connectionDuration
	 * @param string callingNumber
	 * @param string priceReversed
	 * @param string operatorCode
	 * @return OvhTypeTelephonyReversmentsDetailsStruct
	 */
	public function __construct($_date = null,$_connectionDuration = null,$_callingNumber = null,$_priceReversed = null,$_operatorCode = null)
	{
		parent::__construct(array('date'=>$_date,'connectionDuration'=>$_connectionDuration,'callingNumber'=>$_callingNumber,'priceReversed'=>$_priceReversed,'operatorCode'=>$_operatorCode));
	}
	/**
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set connectionDuration
	 * @param string connectionDuration
	 * @return string
	 */
	public function setConnectionDuration($_connectionDuration)
	{
		return ($this->connectionDuration = $_connectionDuration);
	}
	/**
	 * Get connectionDuration
	 * @return string
	 */
	public function getConnectionDuration()
	{
		return $this->connectionDuration;
	}
	/**
	 * Set callingNumber
	 * @param string callingNumber
	 * @return string
	 */
	public function setCallingNumber($_callingNumber)
	{
		return ($this->callingNumber = $_callingNumber);
	}
	/**
	 * Get callingNumber
	 * @return string
	 */
	public function getCallingNumber()
	{
		return $this->callingNumber;
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
	 * Set operatorCode
	 * @param string operatorCode
	 * @return string
	 */
	public function setOperatorCode($_operatorCode)
	{
		return ($this->operatorCode = $_operatorCode);
	}
	/**
	 * Get operatorCode
	 * @return string
	 */
	public function getOperatorCode()
	{
		return $this->operatorCode;
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