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
        
  
  User::create([
        'name' => 'vino',
        'username' => 'pino',
        'email' => 'joan@gmail.com',
        'password' => bcrypt('12345678')
  ]);

//   User::create([
//     'name' => 'pino',
//     'email' => 'pino24@gmail.com',
//     'password' => bcrypt('123456')
// ]);
    User::factory(7)->create();

  Category::create([
    'name' => 'Web Programming', 
    'slug' => 'web-programming'
  ]);

  Category::create([
    'name' => 'Web Design', 
    'slug' => 'web-design'
  ]);

  Category::create([
    'name' => 'Personal', 
    'slug' => 'personal'
  ]);

    Category::create([
    'name' => 'Front End', 
    'slug' => ''
  ]);



  Post::factory(20)->create();
//   Post::create([
//       'title' => 'judul pertama',
//       'slug' => 'judul-pertama',
//       'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
//       'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et sequi, saepe hic minima debitis voluptatem molestiae rerum est cupiditate nulla voluptate, ut illum officiis ea tempora assumenda fuga magnam consequatur dolorum fugit quisquam aspernatur corporis, autem maxime? Facere natus vitae deserunt possimus ratione. Ad dolores neque laborum eaque delectus. Ea ab quam consequatur quod dignissimos non voluptates iste nihil ipsum totam, iure possimus atque. Aspernatur consequuntur veniam eius sapiente earum dignissimos ducimus tempore cum amet dolorem, facilis quasi, atque soluta, quidem voluptatum corrupti minus recusandae laboriosam facere corporis repellat veritatis non? Modi aliquam ut fuga ipsum deleniti ab alias aspernatur odit quod magnam officia nihil reprehenderit voluptates dolores quidem quo possimus repellat, tempore dicta provident! Aliquid sequi natus, voluptatem nesciunt ab repudiandae eos veniam, adipisci, non dolore accusamus dicta odio. Voluptas eum necessitatibus magnam, laborum quod maiores qui neque, obcaecati, rem sequi accusamus excepturi dicta velit nulla cupiditate praesentium?',
//       'category_id' => 1,
//       'user_id' => 2
//   ]);

//   Post::create([
//     'title' => 'judul Ke dua',
//     'slug' => 'judul-kedua',
//     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
//     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et sequi, saepe hic minima debitis voluptatem molestiae rerum est cupiditate nulla voluptate, ut illum officiis ea tempora assumenda fuga magnam consequatur dolorum fugit quisquam aspernatur corporis, autem maxime? Facere natus vitae deserunt possimus ratione. Ad dolores neque laborum eaque delectus. Ea ab quam consequatur quod dignissimos non voluptates iste nihil ipsum totam, iure possimus atque. Aspernatur consequuntur veniam eius sapiente earum dignissimos ducimus tempore cum amet dolorem, facilis quasi, atque soluta, quidem voluptatum corrupti minus recusandae laboriosam facere corporis repellat veritatis non? Modi aliquam ut fuga ipsum deleniti ab alias aspernatur odit quod magnam officia nihil reprehenderit voluptates dolores quidem quo possimus repellat, tempore dicta provident! Aliquid sequi natus, voluptatem nesciunt ab repudiandae eos veniam, adipisci, non dolore accusamus dicta odio. Voluptas eum necessitatibus magnam, laborum quod maiores qui neque, obcaecati, rem sequi accusamus excepturi dicta velit nulla cupiditate praesentium?',
//     'category_id' => 1,
//     'user_id' => 1
// ]);

// Post::create([
//     'title' => 'judul Ketiga',
//     'slug' => 'judul-ke-tiga',
//     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
//     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et sequi, saepe hic minima debitis voluptatem molestiae rerum est cupiditate nulla voluptate, ut illum officiis ea tempora assumenda fuga magnam consequatur dolorum fugit quisquam aspernatur corporis, autem maxime? Facere natus vitae deserunt possimus ratione. Ad dolores neque laborum eaque delectus. Ea ab quam consequatur quod dignissimos non voluptates iste nihil ipsum totam, iure possimus atque. Aspernatur consequuntur veniam eius sapiente earum dignissimos ducimus tempore cum amet dolorem, facilis quasi, atque soluta, quidem voluptatum corrupti minus recusandae laboriosam facere corporis repellat veritatis non? Modi aliquam ut fuga ipsum deleniti ab alias aspernatur odit quod magnam officia nihil reprehenderit voluptates dolores quidem quo possimus repellat, tempore dicta provident! Aliquid sequi natus, voluptatem nesciunt ab repudiandae eos veniam, adipisci, non dolore accusamus dicta odio. Voluptas eum necessitatibus magnam, laborum quod maiores qui neque, obcaecati, rem sequi accusamus excepturi dicta velit nulla cupiditate praesentium?',
//     'category_id' => 2,
//     'user_id' => 2
// ]);
//         Post::create([
//         'title' => 'judul Ke Empat',
//         'slug' => 'judul-ke-empat',
//         'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
//         'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et sequi, saepe hic minima debitis voluptatem molestiae rerum est cupiditate nulla voluptate, ut illum officiis ea tempora assumenda fuga magnam consequatur dolorum fugit quisquam aspernatur corporis, autem maxime? Facere natus vitae deserunt possimus ratione. Ad dolores neque laborum eaque delectus. Ea ab quam consequatur quod dignissimos non voluptates iste nihil ipsum totam, iure possimus atque. Aspernatur consequuntur veniam eius sapiente earum dignissimos ducimus tempore cum amet dolorem, facilis quasi, atque soluta, quidem voluptatum corrupti minus recusandae laboriosam facere corporis repellat veritatis non? Modi aliquam ut fuga ipsum deleniti ab alias aspernatur odit quod magnam officia nihil reprehenderit voluptates dolores quidem quo possimus repellat, tempore dicta provident! Aliquid sequi natus, voluptatem nesciunt ab repudiandae eos veniam, adipisci, non dolore accusamus dicta odio. Voluptas eum necessitatibus magnam, laborum quod maiores qui neque, obcaecati, rem sequi accusamus excepturi dicta velit nulla cupiditate praesentium?',
//         'category_id' => 2,
//         'user_id' => 1
//       ]);
    }
}
