<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
  
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            

                $browser->visit('/')
                     ->assertTitle('Laravel');   
                    //->assertSee('Laravel');
        });
    }
   
   /* 
    public function testIsLoginPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertTitle('Laravel')
                ->assertSee('Forgot Your Password?');
        });
    }
    
    */
}
