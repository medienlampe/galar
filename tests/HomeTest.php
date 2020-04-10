<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class HomeTest extends TestCase
{
    /**
     * This test checks the Home component.
     *
     * @return void
     */
    public function testHome()
    {
        $this->get('/');

        $this->assertEquals(
            response()->json(["message" => $this->app->version()])->getContent(),
            $this->response->getContent()
        );
    }
}
