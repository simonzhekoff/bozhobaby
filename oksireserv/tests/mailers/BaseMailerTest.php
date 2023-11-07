<?php namespace Buzz\Oksireserv\Tests\Mailers;

use App;
use PluginTestCase;
use Buzz\Oksireserv\Mailers\BaseMailer;
use Buzz\Oksireserv\Mailers\ReservationMailer;

class BaseMailerTest extends PluginTestCase
{
    /**
     * Get model.
     *
     * @return BaseMailer
     */
    public function getModel()
    {
        return App::make(BaseMailer::class);
    }

    public function testGetTemplateIdent()
    {
        $model = $this->getModel();

        $ident = $model->getTemplateIdent('reservation');
        $locale = App::getLocale();

        $this->assertEquals('buzz.oksireserv::mail.reservation-' . $locale, $ident);
    }

    public function testGetTemplateIdentWithLocale()
    {
        $model = $this->getModel();

        $ident = $model->getTemplateIdent('reservation-admin', 'cs');

        $this->assertEquals('buzz.oksireserv::mail.reservation-admin-cs', $ident);
    }
}
