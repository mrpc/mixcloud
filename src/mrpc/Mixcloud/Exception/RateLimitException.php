<?php

namespace mrpc\Mixcloud\Exception;

use \Exception;

/**
 * mixcloud rate limit exceptiopn
 *
 * @category Services
 * @package Services_Soundcloud
 * @author Yannis - Pastis Glaros <mrpc@pramnoshosting.gr>
 * @copyright 2019 Yannis - Pastis Glaros <mrpc@pramnoshosting.gr>
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 * @link https://github.com/mrpc/mixcloud
 */
class RateLimitException extends Exception
{

    /**
     * HTTP response body.
     * @access protected
     * @var string
     */
    protected $httpBody;

    /**
     * HTTP response code.
     * @access protected
     * @var integer
     */
    protected $httpCode;
    /**
     * Retry after x seconds
     * @access protected
     * @var integer
     */
    protected $retryAfter;

    /**
     * Default message.
     * @access protected
     * @var string
     */
    protected $message = 'Cannot complete request due to rate limit. '
        . 'Please try again after %d minutes.';

    /**
     * Constructor.
     *
     * @param string $message
     * @param string $code
     * @param string $httpBody
     * @param integer $httpCode
     * @param integer $retryAfter
     *
     * @return void
     */
    public function __construct($message = null, $code = 0,
        $httpBody = null, $httpCode = 0, $retryAfter = 0)
    {
        $this->httpBody = $httpBody;
        $this->httpCode = $httpCode;
        $this->retryAfter = $retryAfter;
        if (!$message) {
            $message = sprintf($this->message, (int)$this->retryAfter/60);
        }

        parent::__construct($message, $code);
    }

    public function getRetryAfter()
    {

    }

    /**
     * Get HTTP response body.
     *
     * @return mixed
     */
    public function getHttpBody()
    {
        return $this->httpBody;
    }

    /**
     * Get HTTP response code.
     *
     * @return mixed
     */
    public function getHttpCode()
    {
        return $this->httpCode;
    }

}
