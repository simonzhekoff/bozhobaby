<?php namespace Buzz\Oksireserv\Tests\Variables;

use PluginTestCase;
use Buzz\Oksireserv\Classes\Variables;
use Buzz\Oksireserv\Models\Settings;

class VariablesTest extends PluginTestCase
{
    public function testGetDateTime()
    {
        $result = Variables::getDateTimeFormat();
        $this->assertSame('d/m/Y H:i', $result);
    }

    public function testGetReservationLength()
    {
        $result = Variables::getReservationLength();
        $this->assertSame('2 hours', $result);
    }

    public function testGetReservationLengthAfterSet()
    {
        Settings::set('reservation_length', 90);
        Settings::set('reservation_length_unit', 'minutes');
        $result = Variables::getReservationLength();
        $this->assertSame('90 minutes', $result);
    }
}
