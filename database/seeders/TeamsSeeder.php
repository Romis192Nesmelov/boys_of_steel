<?php

namespace Database\Seeders;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
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
                'name' => 'СКА',
                'captain' => 'Шарипов Константин',
                'email' => 'hcskacvo@mail.ru',
                'phone' => '+7(919)303-91-91',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur justo sem. Mauris felis purus, volutpat sed ex eget, sagittis rutrum erat. Integer fermentum finibus dolor, ac vehicula velit finibus nec. Morbi eu diam ligula. Aliquam euismod nulla purus, in dapibus ipsum rhoncus non. Vestibulum sed interdum nibh. Duis accumsan lacus nec dui rutrum facilisis.</p><p>Mauris vitae suscipit orci. Quisque sed sollicitudin nisl, a lacinia arcu. Curabitur sollicitudin lectus eu sagittis pharetra. Curabitur nisi leo, sollicitudin viverra ultricies ut, mollis sed lectus. Sed risus felis, suscipit sit amet finibus aliquam, venenatis ut mauris. Nunc tincidunt egestas augue vitae pellentesque. Vestibulum lacinia neque ex, et pretium ante cursus sed. Morbi a augue luctus, tincidunt leo eu, iaculis nisl. Phasellus maximus placerat lectus a venenatis. Nunc ac efficitur massa. Morbi bibendum ut justo in finibus. Proin ut ultrices urna. Cras tincidunt dolor quis lacus vulputate porttitor. Donec eleifend efficitur lorem eu ultrices. Donec luctus massa eget urna venenatis molestie non et quam.</p><p>Curabitur a purus sit amet quam commodo pulvinar. Nullam vestibulum pellentesque interdum. Praesent ut convallis sapien, vel luctus mi. Sed cursus, odio at ultrices scelerisque, lorem quam molestie tellus, et luctus dolor tellus vel nisl. Fusce faucibus lorem sit amet massa ullamcorper facilisis. Mauris condimentum, nulla sit amet lobortis luctus, dolor risus porttitor leo, ac mattis augue dui accumsan metus. Cras rutrum a lacus vel bibendum.</p>',
                'city_id' => 4,
            ],
            [
                'logo' => 'ratnik_club.png',
                'name' => 'Динамо-Ратник',
                'captain' => 'Кудинов Андрей',
                'email' => 'prezident@fh74.ru',
                'phone' => '+7(919)319-00-24',
                'description' => '<p>Cras lobortis, ipsum sed molestie auctor, dui nibh congue leo, sed dignissim ante lectus sed nisl. In hac habitasse platea dictumst. Nunc in odio ac orci ultrices bibendum. Etiam et velit efficitur, tempor arcu nec, rutrum eros. In vehicula orci ornare felis ultricies porta. Donec purus enim, ullamcorper mollis cursus nec, finibus ac urna. Pellentesque eleifend sagittis quam, eu dapibus sem feugiat a. Curabitur euismod enim nunc, sed bibendum urna convallis in. Aliquam at libero placerat mi lobortis dignissim vel id elit. Sed ut nunc ultrices, lobortis est aliquet, aliquet magna. Integer et odio quis dolor imperdiet ullamcorper in et tortor. Donec tortor tortor, porttitor in erat at, blandit placerat tortor. Donec in ipsum dictum, venenatis lacus vel, mollis lectus. Donec vestibulum, metus a egestas rutrum, tellus sem vestibulum justo, eu egestas eros metus a nunc. Mauris egestas magna sed felis tempus convallis. Aenean neque tortor, consequat quis mauris non, mollis maximus diam.</p><p>Sed egestas augue nec velit auctor, in vestibulum ex iaculis. Nulla enim nisl, faucibus porttitor quam at, malesuada tempor lectus. Praesent bibendum vulputate libero ut commodo. Nulla pellentesque felis at aliquet bibendum. Etiam vel nulla venenatis, varius erat ut, maximus elit. Aliquam id augue egestas, dignissim dui sit amet, aliquam nibh. Etiam eget suscipit felis. Proin leo diam, fringilla vitae nisi id, pharetra finibus mauris.</p><p>Phasellus pretium lectus scelerisque dui lobortis interdum. Aliquam quis elit dolor. Vivamus tristique mollis suscipit. Nulla facilisi. Aenean ac tempor erat. Donec quis risus ligula. Sed id hendrerit odio, vitae venenatis lacus.</p>',
                'city_id' => 8,
            ],
            [
                'logo' => 'patriot_club.png',
                'name' => 'Патриот',
                'captain' => 'Кобозев Сергей',
                'email' => 'ksm.77@bk.ru',
                'phone' => '+7(915)432-90-66',
                'description' => '<p>Vestibulum sollicitudin convallis ligula ut lacinia. Aliquam erat volutpat. Suspendisse interdum vehicula orci, sed tincidunt nunc blandit eu. Fusce lacinia pharetra mattis. Suspendisse interdum metus neque, vitae congue erat tristique vitae. Nam bibendum aliquet urna, at venenatis leo elementum sed. Phasellus feugiat quam enim, quis eleifend sapien posuere vel. Donec metus elit, dapibus a magna et, semper suscipit magna. Cras vel tempus erat. Quisque in est velit. Mauris hendrerit turpis eget magna viverra, malesuada condimentum elit condimentum. Etiam egestas dui odio, vel faucibus neque eleifend eget. Duis urna est, aliquam congue cursus ut, bibendum a urna. Curabitur ut vestibulum quam, et pretium justo.</p><p>Nam in orci pellentesque, facilisis ligula at, varius arcu. Aenean fringilla sagittis sapien eget bibendum. Nulla ornare augue a dolor sodales rhoncus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin scelerisque ipsum ut nisi condimentum, quis volutpat nulla porta. Donec vel facilisis metus. Cras tristique risus eget urna luctus, et ornare metus ornare. Aenean euismod elementum dui vitae tincidunt.</p><p>Donec vehicula, neque at malesuada aliquet, mi tortor auctor erat, sit amet aliquet nisl diam ut diam. Ut finibus dolor at est sollicitudin, et congue velit imperdiet. Cras auctor posuere rhoncus. Quisque pulvinar, sem vel fringilla iaculis, urna tellus iaculis dui, in gravida justo diam et justo. Fusce nec interdum justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi fringilla rutrum molestie. Proin sollicitudin porttitor semper. Proin consequat, tortor non efficitur fermentum, augue elit tincidunt magna, nec imperdiet lacus lorem sit amet mauris.</p>',
                'city_id' => 1,
            ],
            [
                'name' => 'Шурави',
                'captain' => 'Равиль',
                'email' => 'ra@megi.ru',
                'phone' => '+7(917)447-40-03',
                'description' => '<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum venenatis ex non dui dignissim, eu fermentum quam tristique. Praesent semper iaculis velit, ac porta tellus pulvinar ultrices. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas aliquet hendrerit dui, eu fermentum neque dapibus fermentum. In hac habitasse platea dictumst. Nulla fringilla sodales purus, sed dapibus ligula. Ut blandit lorem quam, et pharetra nunc aliquet sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam ipsum nibh, sagittis vitae sagittis in, iaculis eget turpis. Nulla facilisi. Curabitur sagittis orci vel est consectetur varius. Duis aliquet sapien ipsum, quis auctor leo lacinia ac. Quisque ullamcorper pulvinar ipsum non porttitor.</p><p>Phasellus in leo eu leo varius porttitor. Donec pharetra dui tellus, id vehicula quam maximus et. Suspendisse ac rhoncus felis. Sed nec enim cursus, malesuada dui non, tincidunt risus. Quisque tincidunt purus tincidunt erat tincidunt tincidunt. Aenean odio mauris, sagittis ac faucibus eget, sollicitudin vitae enim. Nunc nec ultricies leo. Aliquam porttitor nulla et lacus vulputate vehicula. Quisque lacinia vestibulum nibh quis scelerisque. Cras nec mi nec orci semper molestie auctor non libero. Ut eu est velit. Proin dignissim, diam id porttitor pharetra, odio urna finibus est, a posuere nibh nisi sit amet lorem.</p><p>In sed odio sed magna pulvinar pulvinar. Aliquam molestie nunc sagittis, dapibus mi quis, maximus felis. Nunc molestie suscipit molestie. Vivamus porttitor gravida facilisis. Etiam ut gravida quam. Ut quis erat posuere, vestibulum enim et, volutpat justo. Maecenas a est tristique, consequat elit nec, laoreet risus.</p>',
                'city_id' => 9,
            ],
            [
                'name' => 'Барс',
                'captain' => 'Седых Сергей',
                'email' => 'sedykh.sa.fhoo@gmail.com',
                'phone' => '+7(966)396-97-00',
                'description' => '<p>Quisque feugiat, nulla non lobortis semper, enim leo varius mi, eu tristique mauris turpis ac ex. Sed tristique elit sit amet leo consequat malesuada. Nulla vulputate tristique magna, ac porta est efficitur eu. Aenean iaculis diam ut augue ornare ultrices. Nunc dapibus sagittis arcu ut cursus. Nulla non placerat ligula. Nulla eget maximus nibh. Vestibulum ac purus vulputate, volutpat libero vitae, cursus sem. Ut sit amet porta purus. Quisque eget convallis risus.</p><p>Nulla consectetur, augue non aliquam egestas, ex ex bibendum tortor, et maximus magna massa ut sem. In pulvinar blandit nisi eget rutrum. Aenean porta, neque ut ultricies lobortis, ipsum sapien tempor enim, a feugiat dui libero non nunc. Aenean quis condimentum urna. Nunc eu mauris eros. Phasellus at justo sapien. Curabitur ipsum ante, interdum a ligula vel, hendrerit lacinia tortor. In a urna sapien.</p><p>Praesent semper euismod dolor non consectetur. Nunc sit amet arcu gravida, dapibus libero nec, convallis arcu. Nulla gravida tincidunt risus sed congue. Vestibulum in consectetur sem, quis gravida enim. Aenean aliquet mi vel lectus condimentum, id accumsan mi viverra. Proin dapibus leo in eros volutpat vestibulum. Nullam mi ante, faucibus in bibendum ac, blandit sit amet massa. Nam egestas nec ex at faucibus. Aenean consectetur ultricies quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur magna sem, accumsan eu fringilla ac, scelerisque et quam. Donec vel posuere orci, id tristique ligula. Sed ut mauris et elit viverra condimentum ut vitae ipsum.</p>',
                'city_id' => 13,
            ],
            [
                'name' => 'Динамо',
                'captain' => 'Руслан Энверович',
                'email' => 'dynamo-nn@bk.ru',
                'phone' => '+7(987)087-99-99',
                'description' => '<p>Donec vitae eleifend justo. Duis maximus enim convallis dui facilisis porta. Integer eu erat tortor. Phasellus pellentesque, augue in mollis blandit, neque augue imperdiet lacus, quis aliquam urna augue nec justo. Sed in augue ipsum. Nullam commodo, ante vel fermentum cursus, tortor erat facilisis diam, vitae aliquet orci diam eget nisl. Sed at tellus nec dolor malesuada auctor sit amet id dolor. Curabitur tincidunt massa dolor, vitae tincidunt diam vehicula et. Cras interdum feugiat augue eget commodo. Sed semper porttitor nisl, vel porttitor urna commodo sit amet. Maecenas et dui non purus consequat molestie id non mauris.</p><p>Fusce suscipit dictum ullamcorper. In a mi sed magna hendrerit suscipit. Cras tincidunt magna ac felis euismod, id fermentum sapien accumsan. Phasellus mattis metus eget dolor facilisis, ut lacinia turpis aliquet. Nulla fermentum consectetur eros sagittis dapibus. Mauris justo ipsum, tristique ut nibh vitae, congue lobortis felis. Nulla facilisi. Aliquam ligula felis, rutrum vel nisi eget, convallis varius sapien. Mauris convallis congue odio, at mattis mi volutpat in. Nulla dignissim, purus vel dapibus egestas, dolor neque bibendum augue, non elementum massa elit vel ante. Nulla facilisi. Vivamus at luctus sapien, vitae tristique mauris. Aliquam finibus ultricies ante ut ornare. Curabitur neque sem, placerat id vehicula at, ullamcorper semper felis.</p><p>Maecenas vitae faucibus odio, ut efficitur augue. Maecenas maximus mi in nunc maximus, sit amet laoreet diam tempor. Morbi convallis finibus velit non imperdiet. Aliquam iaculis a justo et rutrum. Suspendisse potenti. Curabitur efficitur metus id egestas condimentum. Suspendisse metus mi, scelerisque ut nunc at, tempus aliquam dolor. Praesent tincidunt interdum libero, vitae porta augue mollis vitae.</p>',
                'city_id' => 7,
            ],
            [
                'name' => 'Мирные Люди',
                'captain' => 'Агарков Андрей',
                'email' => 'andrewagarkoff@yandex.ru',
                'description' => '<p>Aliquam viverra, ante ut fringilla blandit, massa est mollis augue, eget sodales augue metus id ante. Curabitur feugiat non nisl ac gravida. Morbi consectetur lacus ullamcorper nisl sagittis aliquam. Ut feugiat, magna a ullamcorper placerat, dui metus suscipit libero, ut finibus est quam eget tellus. Duis pulvinar finibus interdum. Cras placerat mattis sapien ac volutpat. Pellentesque vehicula purus id lacus eleifend aliquam. Ut mollis libero dictum dui pulvinar, in dignissim arcu porttitor. Sed in luctus erat, vitae tempor ante. Phasellus dignissim id urna id sagittis. Integer ut lectus tellus. Donec ullamcorper purus feugiat lorem iaculis rhoncus. Suspendisse fermentum porttitor sapien sit amet tempor. Suspendisse tempor ut metus vel condimentum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p><p>Pellentesque viverra erat ultrices, luctus nibh sed, tincidunt turpis. Vivamus dictum est quis nibh viverra rutrum. Ut ultrices eu lorem et vestibulum. Fusce commodo metus in velit sagittis tincidunt. Phasellus condimentum cursus ex. Aenean volutpat egestas dui, sit amet pretium nisl rutrum vitae. Suspendisse potenti.</p><p>Quisque lacus lectus, feugiat eu turpis et, pharetra laoreet ipsum. Maecenas et nulla tristique elit placerat imperdiet ac a augue. Ut maximus turpis in odio imperdiet fringilla. Aenean ut elit efficitur, placerat nunc et, faucibus arcu. Integer in egestas sem, et elementum massa. Aliquam erat volutpat. Etiam nec augue ex. In diam diam, facilisis efficitur lacinia vitae, ullamcorper in lorem.</p>',
                'city_id' => 10,
            ],
            [
                'name' => 'Бастион',
                'captain' => 'Лютов Владимир Викторович',
                'description' => '<p>Praesent ac lectus finibus, egestas massa pharetra, viverra tortor. Quisque at mattis purus, non facilisis arcu. Aliquam bibendum non risus vel placerat. Nullam elementum nec tellus gravida efficitur. Nam eu magna sit amet velit congue sagittis. Cras rutrum nisl placerat ex pharetra rutrum. Praesent laoreet eros dui, eu feugiat eros eleifend non. Quisque suscipit nibh non viverra facilisis. Nulla volutpat ullamcorper diam. Vestibulum at dolor ut nibh faucibus mollis.</p><p>Ut vehicula egestas augue, a mattis justo interdum fringilla. Maecenas in aliquam dolor. Donec luctus nisi laoreet lectus sodales aliquet. Sed pulvinar mattis lacus, at ultrices eros. Vestibulum nec lobortis turpis. Proin bibendum fermentum mauris, vehicula condimentum purus eleifend consectetur. Sed ut diam pulvinar orci lobortis posuere. Morbi iaculis, nulla imperdiet bibendum pulvinar, ipsum nisi tempor dui, ac hendrerit ante ipsum id diam. Sed orci justo, tincidunt aliquet nisi in, viverra cursus tellus. Aenean mollis, tortor id ultricies euismod, ex ante tempor erat, sed tempor massa magna quis diam.</p><p>Vivamus sit amet turpis posuere, congue mi nec, convallis est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet dui non lectus efficitur ultricies ut sed ipsum. Praesent ligula nisi, mattis sed suscipit in, commodo sed tortor. Aenean vel congue massa. Vestibulum porttitor diam lorem, id finibus lacus egestas eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>',
                'city_id' => 2,
            ],
        ];

        foreach ($data as $item) {
            Team::query()->create($item);
        }
    }
}
