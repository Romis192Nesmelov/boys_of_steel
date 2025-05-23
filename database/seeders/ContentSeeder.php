<?php

namespace Database\Seeders;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'head' => 'Место проведения',
                'text' => '<p>Et est minus perferendis sint magnam assumenda. Officia suscipit est est nam quia et sunt. Itaque perspiciatis iure sed.</p><p>A magni eaque voluptatem provident optio voluptas qui. Fugiat tempora aut qui culpa ut quis. Qui voluptatum excepturi cumque necessitatibus.</p><p>Sit unde neque libero tenetur minus dicta veniam. Provident eius aut omnis illum aut exercitationem fugit incidunt. Quo facilis consequuntur numquam quidem et consequatur. Quia temporibus odit harum tempore vel ducimus.</p><p>Ut et vitae rem blanditiis dolorem repudiandae laudantium. Quaerat rerum et assumenda repudiandae. Rerum doloremque commodi omnis sint.</p><p>Earum voluptas odio et aut. Iure cupiditate hic et quo dolorem et et unde. Dolor doloribus laudantium qui et. Aut laudantium reprehenderit quos amet ipsum similique. Doloribus quis et veniam asperiores repellendus modi sit laborum.</p>'
            ],
            [
                'head' => 'Тайминг проведения игр<br>третьего открытого турнира «ПАРНИ ИЗ СТАЛИ»',
                'text' => '<table class="w-full text-gray-300"><tr><th>Дата</th><th>Команда</th><th>Время</th></tr><tr><td rowspan="8">27.05.2025<br>(раскатка)</td><td>ХК «Шурави»</td><td>11.00-12.00</td></tr><tr><td>ХК «Динамо-Ратник»</td><td>12.15-13.15</td></tr><tr><td>ХК «СКА»</td><td>13.30- 14.30</td></tr><tr><td>ХК «Мирные Люди»</td><td>14.45-15.45</td></tr><tr><td>ХК «Патриот»</td><td>16.00-17.00</td></tr><tr><td>ХК «Динамо»</td><td>17.15-18.15</td></tr><tr><td>ХК «БАРС»</td><td>18.30-19.30</td></tr><tr><td>ХК «Нева-Бастион»</td><td>19.45-20.45</td></tr><tr><td>28.05.2025</td><td>Торжественная церемония открытия чемпионата</td><td class="text-red-600">14.00-14.30</td></tr><tr><td rowspan="6">28.05.2025<br>(1 круг, 1 игровой день)</td><td>1 игра А1-А3 (большая арена)</td><td>14.40-16.10</td></tr><tr><td>2 игра А2-А4 (малая арена)</td><td>14.40-16.10</td></tr><tr><td>3 игра Б1-Б3 (большая арена)</td><td>16.30-18.00</td></tr><tr><td>4 игра (малая арена)</td><td>16.30-18.00</td></tr><tr><td>5 игра А3-А4 (большая арена)</td><td>18.15-19.45</td></tr><tr><td>6 игра (малая арена)</td><td>18.15-19.45</td></tr><tr><td rowspan="7">29.05.2025<br>(1 круг, 2 игровой день)</td><td>1 игра (большая арена)</td><td>10.00-11.30</td></tr><tr><td>2 игра (малая арена)</td><td>10.00-11.30</td></tr><tr><td>3 игра (большая арена)</td><td>11.45-13.15</td></tr><tr><td>4 игра (малая арена)</td><td>11.45-13.15</td></tr><tr><td>5 игра (большая арена)</td><td>13.30-15.00</td></tr><tr><td>6 игра (малая арена)</td><td>13.30-15.00</td></tr><tr><td>7 игра фиджитал хоккей восток/запад (малая арена)</td><td>15.30-16.15</td></tr><tr><td rowspan="7">30.05.2025<br>(стыковые матчи за 3-8 места)</td><td>1 игра стыковая за выход в финал, для команд,<br>занявших 1 и 2 места в своих подгруппах А1-Б2 (большая арена)</td><td>10.00-11.30</td></tr><tr><td>2 игра стыковая за выход в финал,<br>занявших 1 и 2 места в своих подгруппах А2-Б1 (малая арена)</td><td>10.00-11.30</td></tr><tr><td>3 игра стыковая для команд,<br>занявших 3 и 4 места в своих подгруппах А3-Б4 (большая арена)</td><td>11.45-13.15</td></tr><tr><td>4 игра стыковая для команд,<br>занявших 3 и 4 места в своих подгруппах А4-Б3 (малая арена)</td><td>11.45-13.15</td></tr><tr><td>5 игра стыковая за 3-4 место (большая арена)</td><td>13.30-15.00</td></tr><tr><td>6 игра стыковая за 5-6 место (большая арена)</td><td>15.15-16.45</td></tr><tr><td>7 игра стыковая за 7-8 место (малая арена)</td><td>15.15-16.45</td></tr><tr><td rowspan="6">31.05.2025<br>(выставочный матч следж-хоккей, финальный матч, торжественная церемония награждения и закрытия турнира)</td><td>Торжественная церемония закрытия турнира</td><td class="text-red-600">12.00</td></tr><tr><td>Выставочный матч следж-команд</td><td>12.30-13.15</td></tr><tr><td>Награждение следж-команд</td><td>13.15-13.30</td></tr><tr><td>Финальный матч за 1-2 место</td><td>13.45-15.15</td></tr><tr><td>Церемония награждения, общее фотографирование</td><td>15.20-16.15</td></tr><tr><td>Завершение мероприятия</td><td><span class="text-red-600">16.30</span>-(16.45)</td></tr></table><ul class="text-gray-300 mt-3 text-left list-disc"><li>Формат игры: 5 мин раскатка, 3 периода по 20 мин грязного времени, 2 последние минуты 3 - го периода чистого времени, перерыв между периодами 5 минут</li><li>Формат игры следж: 5 мин раскатка, 3 периода по 15 мин грязного времени, 5 минут перерыв между периодами</li><li>Формат игры фиджитал: раскатка 5 мин, 3 периода по 7 минут чистого времени (3х3), 2 минуты перерыв между периодами</li></ul>'
            ],
            [
                'head' => 'Текст на главной',
                'image' => 'images/content/bos_cup.svg',
                'text' => '<p class="mt-2 mb-6 text-gray-300 text-base pl-2">Проект направлен на создание спортивного братства, вовлечение ветеранов боевых действий и членов их семей в коллективные спортивные соревнования, адаптацию и социализацию ветеранов в кругу общих интересов через физкультуру и спорт.</p><p class="text-gray-300 text-base mb-2 pl-2">Проект направлен на создание спортивного братства, вовлечение ветеранов боевых действий и членов их семей в коллективные спортивные соревнования, адаптацию и социализацию ветеранов в кругу общих интересов через физкультуру и спорт.</p><p class="text-gray-300 text-base mb-2 pl-2">Проведение хоккейного турнира с участием 8 команд ветеранов из Самары, Омска, Санкт-Петербурга, Уфы, Нижнего Новгорода, Екатеринбурга, Челябинска и Москвы ставит перед собой решение следующих важных задач:</p><ul class="text-gray-300 list-disc text-base ps-10"><li>создание спортивного сообщества ветеранов, объединенных общей командной вовлеченностью и повышением уровня спортивного мастерства;</li><li>привлечения внимания общественности к социализации ветеранов;</li><li>совершенствование нравственно-моральных идеалов, развитие и укрепление дружбы и уважения, укрепление межведомственных связей;</li><li>патриотическое воспитание молодежи и приобщение к здоровому образу жизни;</li><li>охват всех регионов и субъектов РФ, путем создания в них своих представительств и организации проведения региональных регулярных чемпионатов, увеличение числа команд-участниц;</li><li>создание дивизионов по возрастным и другим критериям.</li></ul>'
            ],
            [
                'head' => 'Следж-хоккей',
                'text' => '<p>Et est minus perferendis sint magnam assumenda. Officia suscipit est est nam quia et sunt. Itaque perspiciatis iure sed.</p><p>A magni eaque voluptatem provident optio voluptas qui. Fugiat tempora aut qui culpa ut quis. Qui voluptatum excepturi cumque necessitatibus.</p><p>Sit unde neque libero tenetur minus dicta veniam. Provident eius aut omnis illum aut exercitationem fugit incidunt. Quo facilis consequuntur numquam quidem et consequatur. Quia temporibus odit harum tempore vel ducimus.</p><p>Ut et vitae rem blanditiis dolorem repudiandae laudantium. Quaerat rerum et assumenda repudiandae. Rerum doloremque commodi omnis sint.</p><p>Earum voluptas odio et aut. Iure cupiditate hic et quo dolorem et et unde. Dolor doloribus laudantium qui et. Aut laudantium reprehenderit quos amet ipsum similique. Doloribus quis et veniam asperiores repellendus modi sit laborum.</p>'
            ],
            [
                'head' => 'Фиджитал-хоккей',
                'text' => '<p>Et est minus perferendis sint magnam assumenda. Officia suscipit est est nam quia et sunt. Itaque perspiciatis iure sed.</p><p>A magni eaque voluptatem provident optio voluptas qui. Fugiat tempora aut qui culpa ut quis. Qui voluptatum excepturi cumque necessitatibus.</p><p>Sit unde neque libero tenetur minus dicta veniam. Provident eius aut omnis illum aut exercitationem fugit incidunt. Quo facilis consequuntur numquam quidem et consequatur. Quia temporibus odit harum tempore vel ducimus.</p><p>Ut et vitae rem blanditiis dolorem repudiandae laudantium. Quaerat rerum et assumenda repudiandae. Rerum doloremque commodi omnis sint.</p><p>Earum voluptas odio et aut. Iure cupiditate hic et quo dolorem et et unde. Dolor doloribus laudantium qui et. Aut laudantium reprehenderit quos amet ipsum similique. Doloribus quis et veniam asperiores repellendus modi sit laborum.</p>'
            ],
        ];

        foreach ($data as $content) {
            Content::query()->create($content);
        }
    }
}
