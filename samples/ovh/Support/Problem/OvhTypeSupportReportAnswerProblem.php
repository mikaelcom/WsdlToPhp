<?php
/**
 * Class file for OvhTypeSupportReportAnswerProblem
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportReportAnswerProblem
 * @date 02/07/2012
 */
class OvhTypeSupportReportAnswerProblem extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The messageId
	 * @var int
	 */
	public $messageId;
	/**
	 * The reportReason
	 * @var string
	 */
	public $reportReason;
	/**
	 * Constructor
	 * @param string session
	 * @param int messageId
	 * @param string reportReason
	 * @return OvhTypeSupportReportAnswerProblem
	 */
	public function __construct($_session = null,$_messageId = null,$_reportReason = null)
	{
		parent::__construct(array('session'=>$_session,'messageId'=>$_messageId,'reportReason'=>$_reportReason));
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
	 * Set messageId
	 * @param int messageId
	 * @return int
	 */
	public function setMessageId($_messageId)
	{
		return ($this->messageId = $_messageId);
	}
	/**
	 * Get messageId
	 * @return int
	 */
	public function getMessageId()
	{
		return $this->messageId;
	}
	/**
	 * Set reportReason
	 * @param string reportReason
	 * @return string
	 */
	public function setReportReason($_reportReason)
	{
		return ($this->reportReason = $_reportReason);
	}
	/**
	 * Get reportReason
	 * @return string
	 */
	public function getReportReason()
	{
		return $this->reportReason;
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