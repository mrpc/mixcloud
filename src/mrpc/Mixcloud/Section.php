<?php

namespace mrpc\Mixcloud;

/**
 * Section object
 *
 * @package   Mixcloud
 * @author    Yannis - Pastis Glaros <mrpc@pramnoshosting.gr>
 * @copyright 2019 Yannis - Pastis Glaros <mrpc@pramnoshosting.gr>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://github.com/mrpc/mixcloud
 */
class Section
{
    /**
     * The track section artist name.
     * REQUIRED (if a track).
     * @var string
     */
    public $artist;
    /**
     * The track section song title.
     * REQUIRED (if a track).
     * @var string
     */
    public $song;
    /**
     * The name of a chapter section.
     * @var string
     */
    public $chapter;
    /**
     * The time, in seconds (integer), at which section X starts.
     * @var int
     */
    public $time;
}