<?php
/**
 * Created by PhpStorm.
 * User: jonas
 * Date: 20-3-15
 * Time: 15:58
 */

namespace CultuurNet\CalendarSummary\Period;

use \CultureFeed_Cdb_Data_Calendar_Period;

class MediumPeriodFormatterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MediumPeriodFormatter
     */
    protected $formatter;

    public function setUp()
    {
        $this->formatter = new MediumPeriodFormatter();
    }

    public function testFormatsAPeriod()
    {
        $period = new CultureFeed_Cdb_Data_Calendar_Period(
            '2015-03-20',
            '2015-03-27'
        );

        $this->assertEquals(
            '<span class="cf-from cf-meta">Van</span> <span class="cf-date">20 maart 2015</span>'
            . '<span class="cf-to cf-meta">tot</span> <span class="cf-date">27 maart 2015</span>',
            $this->formatter->format($period)
        );
    }

    public function testFormatsAPeriodDayWithoutLeadingZero()
    {
        $period = new CultureFeed_Cdb_Data_Calendar_Period(
            '2015-03-01',
            '2015-03-05'
        );

        $this->assertEquals(
            '<span class="cf-from cf-meta">Van</span> <span class="cf-date">1 maart 2015</span>'
            . '<span class="cf-to cf-meta">tot</span> <span class="cf-date">5 maart 2015</span>',
            $this->formatter->format($period)
        );
    }
}
