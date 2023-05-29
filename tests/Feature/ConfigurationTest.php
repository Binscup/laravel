<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Config;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConfigurationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $x1 = config("coba.matapelajaran.matapelajaran_x.x1");
        $x1config = Config::get("coba.matapelajaran.matapelajaran_x.x1");
        $xx1 = config("coba.matapelajaran.matapelajaran_x.x3.xx1");

        self::assertEquals($x1, "kelas x");
        self::assertEquals($x1config, $x1);

    }
}
