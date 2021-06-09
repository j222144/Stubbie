<?php

namespace Database\Seeders;

use App\Models\Bookmark;
use Illuminate\Database\Seeder;

class BookmarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookmarks =[
            [
                'user_id'=>'1',
                'bookmark_name'=>'FirstBookmark',
                'website_url'=>'https://laravel.com/docs/8.x/eloquent-relationships#many-to-many',
                'private'=>false,
                'favourite'=>false,
            ],
            [
                'user_id'=>'1',
                'bookmark_name'=>'SecondBookmark',
                'website_url'=>'https://stackoverflow.com/questions/464474/check-if-a-sql-table-exists',
                'private'=>false,
                'favourite'=>false,
            ],
            [
                'user_id'=>'1',
                'bookmark_name'=>'ThirdBookmark',
                'website_url'=>'https://stackoverflow.com/questions/47630950/how-can-i-switch-to-another-branch-in-git',
                'private'=>false,
                'favourite'=>false,
            ],
        ];

        foreach ($bookmarks as $bookmark){
            Bookmark::create($bookmark);
        }
    }
}
