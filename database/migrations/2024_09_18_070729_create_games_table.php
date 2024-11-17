<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('picture_path')->unique();
            $table->string('game_path')->unique();
            $table->timestamps();
        });

        DB::table('games')->insert(
            array(
                [
                'name' => 'Might of Freya Megaways',
                'type' => 'slot',
                'picture_path' => "asset('assets/slots/Might_of_Freya_Megaway.png')",
                'game_path' => 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?gameSymbol=vswaysmfreya&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobby_url=https%3A%2F%2Fwww.pragmaticplay.com%2Fen%2F&lang=SK&cur=EUR',
                'updated_at' => now(),
                'created_at' => now()
                ],
                [
                'name' => 'Eternal Empress',
                'type' => 'slot',
                'picture_path' => "asset('assets/slots/Eternal_Empress.png')",
                'game_path' => 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?gameSymbol=vswaysfreezet&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobby_url=https%3A%2F%2Fwww.pragmaticplay.com%2Fen%2F&lang=EN&cur=EUR',
                'updated_at' => now(),
                'created_at' => now()
                ],
                [
                'name' => 'Himalayan Wild',
                'type' => 'slot',
                'picture_path' => "asset('assets/slots/Himalayan_Wild.png')",
                'game_path' => 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?gameSymbol=vs5himalaw&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobby_url=https%3A%2F%2Fwww.pragmaticplay.com%2Fen%2F&lang=EN&cur=EUR',
                'updated_at' => now(),
                'created_at' => now()
                ],
                [
                'name' => 'Wolf Gold Ultimate',
                'type' => 'slot',
                'picture_path' => "asset('assets/slots/Wolf_Gold_Ultimate.png')",
                'game_path' => 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?gameSymbol=vs25ultwolgol&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobby_url=https%3A%2F%2Fwww.pragmaticplay.com%2Fen%2F&lang=EN&cur=EUR',
                'updated_at' => now(),
                'created_at' => now()
                ],
                [
                'name' => 'Moleionaire',
                'type' => 'slot',
                'picture_path' => "asset('assets/slots/Moleionaire.png')",
                'game_path' => 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?gameSymbol=vs20clreacts&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobby_url=https%3A%2F%2Fwww.pragmaticplay.com%2Fen%2F&lang=EN&cur=EUR',
                'updated_at' => now(),
                'created_at' => now()
                ],
                [
                'name' => 'Candy Corner',
                'type' => 'slot',
                'picture_path' => "asset('assets/slots/Candy_Corner.png')",
                'game_path' => 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?gameSymbol=vs20fourmc&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobby_url=https%3A%2F%2Fwww.pragmaticplay.com%2Fen%2F&lang=EN&cur=EUR',
                'updated_at' => now(),
                'created_at' => now()
                ],
                [
                'name' => 'Fangtastic Freespins',
                'type' => 'slot',
                'picture_path' => "asset('assets/slots/Fangtastic_Freespins.png')",
                'game_path' => 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?gameSymbol=vs10fangfree&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobby_url=https%3A%2F%2Fwww.pragmaticplay.com%2Fen%2F&lang=EN&cur=EUR',
                'updated_at' => now(),
                'created_at' => now()
                ],
                [
                'name' => '7 Clovers of Fortune',
                'type' => 'slot',
                'picture_path' => "asset('assets/slots/7_Clovers_of_Fortune.png')",
                'game_path' => 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?gameSymbol=vswayssevenc&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobby_url=https%3A%2F%2Fwww.pragmaticplay.com%2Fen%2F&lang=SK&cur=EUR',
                'updated_at' => now(),
                'created_at' => now()
                ],
                [
                'name' => 'Big Bass Halloween 2',
                'type' => 'slot',
                'picture_path' => "asset('assets/slots/Big_Bass_Halloween_2.png')",
                'game_path' => 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?gameSymbol=vs10bhallbnza2&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobby_url=https%3A%2F%2Fwww.pragmaticplay.com%2Fen%2F&lang=SK&cur=EUR',
                'updated_at' => now(),
                'created_at' => now()
                ],
                [
                'name' => 'Vampy Party',
                'type' => 'slot',
                'picture_path' => "asset('assets/slots/Vampy_Party.png')",
                'game_path' => 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?gameSymbol=vswayswbounty&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobby_url=https%3A%2F%2Fwww.pragmaticplay.com%2Fen%2F&lang=SK&cur=EUR',
                'updated_at' => now(),
                'created_at' => now()
                ],
                [
                'name' => 'Release the Kraken Megaway',
                'type' => 'slot',
                'picture_path' => "asset('assets/slots/Release_the_Kraken_Megaway.png')",
                'game_path' => 'https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?gameSymbol=vswayskrakenmw&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&jurisdiction=99&lobby_url=https%3A%2F%2Fwww.pragmaticplay.com%2Fen%2F&lang=SK&cur=EUR',
                'updated_at' => now(),
                'created_at' => now()
                ],
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
