<?php
/**
 * Class file for PaylineWebPaymentTypeTransaction
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeTransaction
 * Documentation : This element contains information about the transaction
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeTransaction extends PaylineWebPaymentWsdlClass
{
	/**
	 * The id
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $id;
	/**
	 * The date
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $date;
	/**
	 * The isDuplicated
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $isDuplicated;
	/**
	 * The isPossibleFraud
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $isPossibleFraud;
	/**
	 * The fraudResult
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $fraudResult;
	/**
	 * The explanation
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $explanation;
	/**
	 * The threeDSecure
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $threeDSecure;
	/**
	 * The score
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $score;
	/**
	 * Constructor
	 * @param string id
	 * @param string date
	 * @param string isDuplicated
	 * @param string isPossibleFraud
	 * @param string fraudResult
	 * @param string explanation
	 * @param string threeDSecure
	 * @param string score
	 * @return PaylineWebPaymentTypeTransaction
	 */
	public function __construct($_id = null,$_date = null,$_isDuplicated = null,$_isPossibleFraud = null,$_fraudResult = null,$_explanation = null,$_threeDSecure = null,$_score = null)
	{
		parent::__construct(array('id'=>$_id,'date'=>$_date,'isDuplicated'=>$_isDuplicated,'isPossibleFraud'=>$_isPossibleFraud,'fraudResult'=>$_fraudResult,'explanation'=>$_explanation,'threeDSecure'=>$_threeDSecure,'score'=>$_score));
	}
	/**
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
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
	 * Set isDuplicated
	 * @param string isDuplicated
	 * @return string
	 */
	public function setIsDuplicated($_isDuplicated)
	{
		return ($this->isDuplicated = $_isDuplicated);
	}
	/**
	 * Get isDuplicated
	 * @return string
	 */
	public function getIsDuplicated()
	{
		return $this->isDuplicated;
	}
	/**
	 * Set isPossibleFraud
	 * @param string isPossibleFraud
	 * @return string
	 */
	public function setIsPossibleFraud($_isPossibleFraud)
	{
		return ($this->isPossibleFraud = $_isPossibleFraud);
	}
	/**
	 * Get isPossibleFraud
	 * @return string
	 */
	public function getIsPossibleFraud()
	{
		return $this->isPossibleFraud;
	}
	/**
	 * Set fraudResult
	 * @param string fraudResult
	 * @return string
	 */
	public function setFraudResult($_fraudResult)
	{
		return ($this->fraudResult = $_fraudResult);
	}
	/**
	 * Get fraudResult
	 * @return string
	 */
	public function getFraudResult()
	{
		return $this->fraudResult;
	}
	/**
	 * Set explanation
	 * @param string explanation
	 * @return string
	 */
	public function setExplanation($_explanation)
	{
		return ($this->explanation = $_explanation);
	}
	/**
	 * Get explanation
	 * @return string
	 */
	public function getExplanation()
	{
		return $this->explanation;
	}
	/**
	 * Set threeDSecure
	 * @param string threeDSecure
	 * @return string
	 */
	public function setThreeDSecure($_threeDSecure)
	{
		return ($this->threeDSecure = $_threeDSecure);
	}
	/**
	 * Get threeDSecure
	 * @return string
	 */
	public function getThreeDSecure()
	{
		return $this->threeDSecure;
	}
	/**
	 * Set score
	 * @param string score
	 * @return string
	 */
	public function setScore($_score)
	{
		return ($this->score = $_score);
	}
	/**
	 * Get score
	 * @return string
	 */
	public function getScore()
	{
		return $this->score;
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