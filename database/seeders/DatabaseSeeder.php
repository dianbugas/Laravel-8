<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // User::create([
        //     'name' => 'Dian bugas',
        //     'email' => 'dianbugas@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        // User::create([
        //     'name' => 'Zulkifli',
        //     'email' => 'zul@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-prgramming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa nisi nemo, quod quaerat autem, sed vel neque cumque unde placeat facilis ea provident',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa nisi nemo, quod quaerat autem, sed vel neque cumque unde placeat facilis ea provident magni nesciunt qui dolorum ipsam sequi exercitationem accusantium animi aliquam! Eos est sunt iure eaque totam nihil voluptatibus libero sint quo consectetur. Fuga aliquid debitis blanditiis earum tempora rerum repudiandae doloribus sunt, nesciunt iste magni eius, omnis voluptatibus assumenda non iure distinctio saepe officia doloremque dolore facilis aut! Ducimus porro dolor nemo incidunt, dolore aut dignissimos ipsum aperiam deserunt voluptate vel quasi ipsam odit enim fuga amet architecto aliquam molestias accusantium, recusandae pariatur error temporibus asperiores. Enim.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa nisi nemo, quod quaerat autem, sed vel neque cumque unde placeat facilis ea provident',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa nisi nemo, quod quaerat autem, sed vel neque cumque unde placeat facilis ea provident magni nesciunt qui dolorum ipsam sequi exercitationem accusantium animi aliquam! Eos est sunt iure eaque totam nihil voluptatibus libero sint quo consectetur. Fuga aliquid debitis blanditiis earum tempora rerum repudiandae doloribus sunt, nesciunt iste magni eius, omnis voluptatibus assumenda non iure distinctio saepe officia doloremque dolore facilis aut! Ducimus porro dolor nemo incidunt, dolore aut dignissimos ipsum aperiam deserunt voluptate vel quasi ipsam odit enim fuga amet architecto aliquam molestias accusantium, recusandae pariatur error temporibus asperiores. Enim.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa nisi nemo, quod quaerat autem, sed vel neque cumque unde placeat facilis ea provident',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa nisi nemo, quod quaerat autem, sed vel neque cumque unde placeat facilis ea provident magni nesciunt qui dolorum ipsam sequi exercitationem accusantium animi aliquam! Eos est sunt iure eaque totam nihil voluptatibus libero sint quo consectetur. Fuga aliquid debitis blanditiis earum tempora rerum repudiandae doloribus sunt, nesciunt iste magni eius, omnis voluptatibus assumenda non iure distinctio saepe officia doloremque dolore facilis aut! Ducimus porro dolor nemo incidunt, dolore aut dignissimos ipsum aperiam deserunt voluptate vel quasi ipsam odit enim fuga amet architecto aliquam molestias accusantium, recusandae pariatur error temporibus asperiores. Enim.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Empat',
        //     'slug' => 'judul-empat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa nisi nemo, quod quaerat autem, sed vel neque cumque unde placeat facilis ea provident',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa nisi nemo, quod quaerat autem, sed vel neque cumque unde placeat facilis ea provident magni nesciunt qui dolorum ipsam sequi exercitationem accusantium animi aliquam! Eos est sunt iure eaque totam nihil voluptatibus libero sint quo consectetur. Fuga aliquid debitis blanditiis earum tempora rerum repudiandae doloribus sunt, nesciunt iste magni eius, omnis voluptatibus assumenda non iure distinctio saepe officia doloremque dolore facilis aut! Ducimus porro dolor nemo incidunt, dolore aut dignissimos ipsum aperiam deserunt voluptate vel quasi ipsam odit enim fuga amet architecto aliquam molestias accusantium, recusandae pariatur error temporibus asperiores. Enim.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
