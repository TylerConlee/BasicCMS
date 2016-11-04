<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BasicTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Page ID');
    }

    public function testCreatePage()
    {
        $this->visit('/page/create')
            ->see('Title');
    }
    public function testTrashPage()
    {
        $this->visit('/admin/trash')
            ->see('Actions');
    }
}
