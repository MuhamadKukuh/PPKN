<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class blogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 10; $i++){
            Blog::create([
                'title' => 'Artikel '.$i,
                'slug'  => 'artikel-'.$i,
                'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat autem vitae dolores modi ducimus blanditiis est. Rerum dignissimos odio commodi ut maxime modi error iure expedita quam fuga iusto atque mollitia, omnis, quae optio! Minus, obcaecati molestias. Maiores eligendi sed delectus, laborum repellendus voluptatibus exercitationem voluptatum eaque! Quidem fugiat sed dignissimos explicabo, corporis dolorem quasi ab quaerat recusandae in delectus repellendus, eaque facilis perferendis soluta illo, quis cum magni sapiente distinctio. Ullam animi sunt molestiae alias, quam cupiditate eum ipsa quibusdam natus. Animi voluptates, accusamus maxime debitis totam voluptatum quaerat inventore delectus aliquam modi fugit numquam, aperiam libero iste natus.",
                'user_id'   => 1,
                'category_id' => $i
            ]);
        }
    }
}
