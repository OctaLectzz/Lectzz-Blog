<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Users //
        User::factory(3)->create();
        // User::create([
        //     "name"   => "Octavyan Putra Ramadhan",
        //     "email"  => "octavyan4@gmail.com",
        //     'Password' => bcrypt('Lectzz0410')
        // ]);

        // User::create([
        //     "name"   => "OctaLectzz",
        //     "email"  => "octalectzz@gmail.com",
        //     'Password' => bcrypt('OctaLectzz0410')
        // ]);

        

        // Categories //
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


        // Posts //
        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente deserunt sequi doloremque natus optio fuga officia illum sint, in numquam corporis voluptatem. Fuga, voluptas. Soluta minima illo molestiae,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente deserunt sequi doloremque natus optio fuga officia illum sint, in numquam corporis voluptatem. Fuga, voluptas. Soluta minima illo molestiae, recusandae eligendi perferendis aspernatur natus odio nihil, vel sapiente magnam cupiditate assumenda nulla possimus nobis reprehenderit. Eligendi quos quas optio nobis possimus quam id! Rem provident eaque quo nihil necessitatibus aliquam, eius exercitationem molestias minima dolorum mollitia numquam suscipit totam vero nam sunt ipsam repudiandae maiores alias, iste impedit? Eaque consectetur voluptates ut non obcaecati eveniet, impedit sint molestiae culpa reiciendis atque sunt itaque explicabo eius facilis expedita perferendis praesentium. Inventore, quidem.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, consequatur? Quia nostrum amet hic vel at vero minus voluptas possimus ipsam suscipit facilis alias doloremque, voluptatum labore, officiis iste mollitia nemo quibusdam in maxime! Dolore repellat ea dolorem perferendis non at ducimus ipsa assumenda. Odio, impedit ea! Quia vitae expedita sint fugiat magni architecto et inventore,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, consequatur? Quia nostrum amet hic vel at vero minus voluptas possimus ipsam suscipit facilis alias doloremque, voluptatum labore, officiis iste mollitia nemo quibusdam in maxime! Dolore repellat ea dolorem perferendis non at ducimus ipsa assumenda. Odio, impedit ea! Quia vitae expedita sint fugiat magni architecto et inventore, dolorum recusandae officiis doloremque harum quidem. Tempora dolores odio impedit magni illo optio quo, aliquid perspiciatis iure quisquam, temporibus omnis, in deserunt ab explicabo nesciunt ipsam ullam! Ea, velit. Eveniet aliquid sequi qui nisi, amet numquam? Qui sint cupiditate ratione expedita? Molestiae nemo nam eos quae labore saepe dolor velit aliquid. Rerum quis,</p><p>commodi perferendis ut libero quo deleniti accusamus earum cumque debitis officia nemo! Distinctio, facilis corporis. Tempora blanditiis, mollitia temporibus libero voluptate minus dolorum ipsa perspiciatis molestias odit expedita delectus molestiae quibusdam eveniet asperiores voluptatibus quod vel? Ducimus perspiciatis pariatur consequatur placeat libero nulla cum, autem enim quae impedit maiores ratione voluptatum quaerat assumenda illo temporibus cupiditate incidunt sequi alias consectetur exercitationem eius earum? Labore vitae consequatur rem veniam quasi nobis autem quo incidunt doloremque, dignissimos aliquam distinctio laudantium ut ea magni cumque tenetur. Quidem nobis voluptatibus pariatur! Rem dolorem alias architecto.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla itaque veritatis voluptatibus labore ipsum, eaque dolorum quas consequatur consectetur molestias unde culpa magni deserunt nostrum facere similique quibusdam? Maiores dolorem id beatae facere quis alias quos repudiandae. Unde sit ducimus nam illo nobis odio aliquam fugit quos dolorum dolores voluptas sed odit ex, provident dicta dolorem eius error. Animi impedit nobis possimus accusantium ipsum error nam ullam,',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla itaque veritatis voluptatibus labore ipsum, eaque dolorum quas consequatur consectetur molestias unde culpa magni deserunt nostrum facere similique quibusdam? Maiores dolorem id beatae facere quis alias quos repudiandae. Unde sit ducimus nam illo nobis odio aliquam fugit quos dolorum dolores voluptas sed odit ex, provident dicta dolorem eius error. Animi impedit nobis possimus accusantium ipsum error nam ullam, libero saepe consectetur maxime eius atque voluptatibus quaerat omnis ipsam distinctio, consequatur enim! Velit quam delectus enim ullam iure mollitia autem iste at consectetur sed deserunt odit, necessitatibus voluptatibus labore illo laudantium officia? Quo fugiat quam ipsum, numquam dolorem corrupti nihil quaerat aut illo ipsam officia, voluptas ratione vel id dolor tenetur impedit aperiam. Alias nobis maxime illum. Perspiciatis sequi, dolor.</p><p>eaque itaque aliquam architecto qui doloribus dolorem nihil explicabo quia quasi rem quaerat nisi delectus distinctio ad cupiditate suscipit. Tenetur nobis officiis beatae repudiandae nostrum. Fugit necessitatibus nostrum dolorem consectetur officiis commodi provident aspernatur quaerat! Ipsa repellendus at voluptatibus, laboriosam quam deserunt corporis eos eaque facilis assumenda suscipit minus ratione quasi amet similique quas porro! Voluptatum, sed quasi! Beatae ducimus at repellendus suscipit sequi quos ratione, vitae eaque doloribus dolorem officia inventore, voluptatibus voluptatem velit. Voluptates fugit ab iusto officiis omnis. Ipsa suscipit illum voluptate cupiditate delectus aliquid nam, iste inventore iusto repellat eveniet recusandae, odio alias mollitia perspiciatis saepe voluptatum vel.</p><p>Quae animi modi ad nisi facilis voluptas vel, voluptatem atque cum id. Quasi qui officia beatae voluptates exercitationem incidunt. Vitae nesciunt soluta et maxime quasi nostrum iusto. Ipsum error dolorem voluptatem eum alias omnis dolorum ducimus unde dolor rem ipsa, voluptatum deserunt enim quidem totam doloremque reprehenderit temporibus nulla repellendus veritatis debitis. A voluptas, ratione accusamus neque quod suscipit aperiam possimus commodi, maiores dolor laboriosam officiis quisquam. Voluptate, maiores magnam.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla itaque veritatis voluptatibus labore ipsum, eaque dolorum quas consequatur consectetur molestias unde culpa magni deserunt nostrum facere similique quibusdam? Maiores dolorem id beatae facere quis alias quos repudiandae. Unde sit ducimus nam illo nobis odio aliquam fugit quos dolorum dolores voluptas sed odit ex, provident dicta dolorem eius error. Animi impedit nobis possimus accusantium ipsum error nam ullam,',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla itaque veritatis voluptatibus labore ipsum, eaque dolorum quas consequatur consectetur molestias unde culpa magni deserunt nostrum facere similique quibusdam? Maiores dolorem id beatae facere quis alias quos repudiandae. Unde sit ducimus nam illo nobis odio aliquam fugit quos dolorum dolores voluptas sed odit ex, provident dicta dolorem eius error. Animi impedit nobis possimus accusantium ipsum error nam ullam, libero saepe consectetur maxime eius atque voluptatibus quaerat omnis ipsam distinctio, consequatur enim! Velit quam delectus enim ullam iure mollitia autem iste at consectetur sed deserunt odit, necessitatibus voluptatibus labore illo laudantium officia? Quo fugiat quam ipsum, numquam dolorem corrupti nihil quaerat aut illo ipsam officia, voluptas ratione vel id dolor tenetur impedit aperiam. Alias nobis maxime illum. Perspiciatis sequi, dolor.</p><p>eaque itaque aliquam architecto qui doloribus dolorem nihil explicabo quia quasi rem quaerat nisi delectus distinctio ad cupiditate suscipit. Tenetur nobis officiis beatae repudiandae nostrum. Fugit necessitatibus nostrum dolorem consectetur officiis commodi provident aspernatur quaerat! Ipsa repellendus at voluptatibus, laboriosam quam deserunt corporis eos eaque facilis assumenda suscipit minus ratione quasi amet similique quas porro! Voluptatum, sed quasi! Beatae ducimus at repellendus suscipit sequi quos ratione, vitae eaque doloribus dolorem officia inventore, voluptatibus voluptatem velit. Voluptates fugit ab iusto officiis omnis. Ipsa suscipit illum voluptate cupiditate delectus aliquid nam, iste inventore iusto repellat eveniet recusandae, odio alias mollitia perspiciatis saepe voluptatum vel.</p><p>Quae animi modi ad nisi facilis voluptas vel, voluptatem atque cum id. Quasi qui officia beatae voluptates exercitationem incidunt. Vitae nesciunt soluta et maxime quasi nostrum iusto. Ipsum error dolorem voluptatem eum alias omnis dolorum ducimus unde dolor rem ipsa, voluptatum deserunt enim quidem totam doloremque reprehenderit temporibus nulla repellendus veritatis debitis. A voluptas, ratione accusamus neque quod suscipit aperiam possimus commodi, maiores dolor laboriosam officiis quisquam. Voluptate, maiores magnam.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
