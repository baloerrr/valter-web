<?php

namespace Database\Seeders;

use App\Models\Kegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kegiatan::factory()->create([
            'nama_kegiatan' => 'Lomba Web Design',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum velit necessitatibus ipsa quas ea, odit ullam minima aliquid odio sed, esse neque expedita corporis. Incidunt consequuntur placeat neque ducimus dolorum, repellendus velit eveniet blanditiis quisquam tempore quibusdam quasi dolorem animi id quod. Eos, perspiciatis. Ad nam blanditiis hic, suscipit odit ex quos est asperiores sunt quasi. Neque possimus, explicabo nesciunt mollitia quis eveniet. Et delectus sed voluptatum illo sint architecto, fugiat necessitatibus ratione eius quasi praesentium cumque, corrupti numquam? Velit dolorem perferendis labore est consectetur, saepe eaque possimus unde a fuga expedita voluptatem nisi dicta, inventore magni repudiandae cum, temporibus rerum eius minus. Beatae perspiciatis ipsum unde, quod facere ab enim dicta nulla explicabo? Cum fuga harum placeat neque tempora.',
            'gambar' => 'assets/img/valter/webdesign.png',
            'slug' => 'lomba-web-design'
        ]);
        Kegiatan::factory()->create([
            'nama_kegiatan' => 'Lomba Design Logo',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum velit necessitatibus ipsa quas ea, odit ullam minima aliquid odio sed, esse neque expedita corporis. Incidunt consequuntur placeat neque ducimus dolorum, repellendus velit eveniet blanditiis quisquam tempore quibusdam quasi dolorem animi id quod. Eos, perspiciatis. Ad nam blanditiis hic, suscipit odit ex quos est asperiores sunt quasi. Neque possimus, explicabo nesciunt mollitia quis eveniet. Et delectus sed voluptatum illo sint architecto, fugiat necessitatibus ratione eius quasi praesentium cumque, corrupti numquam? Velit dolorem perferendis labore est consectetur, saepe eaque possimus unde a fuga expedita voluptatem nisi dicta, inventore magni repudiandae cum, temporibus rerum eius minus. Beatae perspiciatis ipsum unde, quod facere ab enim dicta nulla explicabo? Cum fuga harum placeat neque tempora.',
            'gambar' => 'assets/img/valter/design_logo.png',
            'slug' => 'lomba-design-logo'
        ]);
        Kegiatan::factory()->create([
            'nama_kegiatan' => 'Lomba Mobile Legend',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum velit necessitatibus ipsa quas ea, odit ullam minima aliquid odio sed, esse neque expedita corporis. Incidunt consequuntur placeat neque ducimus dolorum, repellendus velit eveniet blanditiis quisquam tempore quibusdam quasi dolorem animi id quod. Eos, perspiciatis. Ad nam blanditiis hic, suscipit odit ex quos est asperiores sunt quasi. Neque possimus, explicabo nesciunt mollitia quis eveniet. Et delectus sed voluptatum illo sint architecto, fugiat necessitatibus ratione eius quasi praesentium cumque, corrupti numquam? Velit dolorem perferendis labore est consectetur, saepe eaque possimus unde a fuga expedita voluptatem nisi dicta, inventore magni repudiandae cum, temporibus rerum eius minus. Beatae perspiciatis ipsum unde, quod facere ab enim dicta nulla explicabo? Cum fuga harum placeat neque tempora.',
            'gambar' => 'assets/img/valter/mobile_legend.png',
            'slug' => 'lomba-mobile-legend'
        ]);
        Kegiatan::factory()->create([
            'nama_kegiatan' => 'Seminar',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum velit necessitatibus ipsa quas ea, odit ullam minima aliquid odio sed, esse neque expedita corporis. Incidunt consequuntur placeat neque ducimus dolorum, repellendus velit eveniet blanditiis quisquam tempore quibusdam quasi dolorem animi id quod. Eos, perspiciatis. Ad nam blanditiis hic, suscipit odit ex quos est asperiores sunt quasi. Neque possimus, explicabo nesciunt mollitia quis eveniet. Et delectus sed voluptatum illo sint architecto, fugiat necessitatibus ratione eius quasi praesentium cumque, corrupti numquam? Velit dolorem perferendis labore est consectetur, saepe eaque possimus unde a fuga expedita voluptatem nisi dicta, inventore magni repudiandae cum, temporibus rerum eius minus. Beatae perspiciatis ipsum unde, quod facere ab enim dicta nulla explicabo? Cum fuga harum placeat neque tempora.',
            'gambar' => 'assets/img/valter/seminar.png',
            'slug' => 'seminar'
        ]);
        Kegiatan::factory()->create([
            'nama_kegiatan' => 'Pelatihan',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum velit necessitatibus ipsa quas ea, odit ullam minima aliquid odio sed, esse neque expedita corporis. Incidunt consequuntur placeat neque ducimus dolorum, repellendus velit eveniet blanditiis quisquam tempore quibusdam quasi dolorem animi id quod. Eos, perspiciatis. Ad nam blanditiis hic, suscipit odit ex quos est asperiores sunt quasi. Neque possimus, explicabo nesciunt mollitia quis eveniet. Et delectus sed voluptatum illo sint architecto, fugiat necessitatibus ratione eius quasi praesentium cumque, corrupti numquam? Velit dolorem perferendis labore est consectetur, saepe eaque possimus unde a fuga expedita voluptatem nisi dicta, inventore magni repudiandae cum, temporibus rerum eius minus. Beatae perspiciatis ipsum unde, quod facere ab enim dicta nulla explicabo? Cum fuga harum placeat neque tempora.',
            'gambar' => 'assets/img/valter/pelatihan.png',
            'slug' => 'pelatihan'
        ]);
    }
}
