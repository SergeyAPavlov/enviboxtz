<?php

namespace Tests\Unit;

use App\Model\ConcreteFeedback;
use Tests\TestCase;

class TestFeedback extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $app = $this->createApplication();
        $this->assertTrue(is_object($app));
    }

    public function testSaveFeedback()
    {
        $app = $this->createApplication();
        $feedback = $app->make(ConcreteFeedback::class);

        $row = ['name' => 'test', 'phone' => '123', 'text' => 'Lorem ipsum'];
        try {
            $save = $feedback->saveFeedback($row);
        } catch (\Exception $e) {
            $mess = $e->getMessage();
        }

        $this->assertTrue($save);

    }
}
