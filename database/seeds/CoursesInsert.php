<?php

use Illuminate\Database\Seeder;

class CoursesInsert extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $durations = [
            '1 week',
            '1 month',
            '2.5 months',
            '3.5 months',
            '2 months',
            '5 months',
        ];
        \DB::statement('ALTER TABLE courses AUTO_INCREMENT = 1');



        for($i=0; $i < 300; $i++)
        {
            $description = $this->courseDescription() ;
                $countyId = array_rand(\App\County::getCountyIds());
                $cityId = \App\City::getRandomCity($countyId);
                DB::table('courses')->insert([
                    'course_name'           => 'Curs nr.' . $i,
                    'course_description'    => $description ?: 'asdadsadada',
                    'course_description_short' => substr($description,0,300) .'...',
                    'course_from'           => date('Y-m-d'),
                    'course_to'             => date('Y-m-d'),
                    'duration'              => array_rand($durations),
                    'city_id'               => $cityId,
                    'county_id'             => $countyId ?: 10,
                    'partner_id'            => rand(1,9),
                    'viewed'                => rand(0,1000),
                    'course_on_site'        => rand(0,1),
                    'is_paid'               => rand(0,1),
                    'category_course_id'    => rand(1,5),
                    'price'                 => rand(200, 1500)
                ]);
        }
    }


    private static function courseDescription()
    {
        $description = [
           1 => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet augue risus. Praesent dignissim purus non luctus egestas. Nullam massa enim, sagittis sit amet nisi vel, congue efficitur nisi. Donec pulvinar lectus vel nisi imperdiet, et tempus ligula volutpat. Proin lacinia dapibus ligula vel fermentum. Nulla vel arcu id augue elementum vestibulum ac sed enim. Donec efficitur neque at nunc scelerisque faucibus. Fusce vel leo ac turpis ultrices dapibus. Donec nec diam a est aliquet mollis. Ut interdum velit non enim imperdiet rhoncus. Suspendisse tristique, urna vel luctus convallis, nisl risus dapibus lacus, eu dignissim lectus mauris quis felis.Suspendisse commodo maximus vestibulum. Curabitur enim erat, dapibus in urna non, vestibulum ultrices augue. Nullam venenatis porttitor enim interdum imperdiet. Phasellus facilisis velit lacinia eros eleifend, eget sollicitudin elit luctus. Etiam pretium turpis non justo feugiat, quis rhoncus magna pellentesque. Mauris ornare mattis accumsan. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam malesuada ultricies pulvinar. Sed vel mi in felis convallis commodo. Phasellus et ullamcorper ligula, et semper felis. Proin viverra orci tortor, eget interdum neque placerat non.",

           2 => "Praesent suscipit luctus lacus, ac faucibus neque sagittis ornare. Nam fermentum quam diam, a lobortis odio facilisis eget. Maecenas vehicula faucibus mi in ultrices. Proin gravida vel neque quis finibus. In eu mattis ex. Vivamus scelerisque, mauris eget ornare rhoncus, est tortor maximus tellus, sit amet elementum ante quam quis magna. Nunc lobortis nibh in faucibus facilisis. Integer et velit eu odio auctor pharetra vel aliquam erat. Etiam tempor rhoncus tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis nulla non massa pulvinar iaculis. Ut et metus at mi condimentum consequat. Cras in nulla ornare, cursus arcu eu, commodo felis. Morbi consectetur accumsan lorem eget luctus. Duis eleifend nunc eu consectetur sollicitudin.Vivamus sit amet nunc ut tellus semper gravida et a elit. Nulla sodales lorem id tempus imperdiet. Etiam at vestibulum dui, nec aliquam turpis. Aliquam in tempor purus, at commodo augue. Suspendisse nec dolor erat. Donec in magna eu orci efficitur tincidunt. Curabitur neque sem, vulputate euismod tincidunt vel, sollicitudin in urna. Maecenas non velit eu metus commodo auctor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.",

           3=>  "Nunc ut mi ultricies, pulvinar nunc sed, vestibulum nulla. Donec rutrum diam magna, luctus tempor sem pulvinar vel. Pellentesque nec suscipit justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus consequat vestibulum felis, ac posuere tellus mattis sit amet. Sed imperdiet libero et urna blandit viverra. Praesent lobortis faucibus tincidunt. Nam maximus vel diam ac consequat. Nam non sem a odio pulvinar vulputate. Curabitur tristique a augue pretium suscipit. In ullamcorper orci ac lorem consequat rhoncus.Donec ultrices lobortis scelerisque. Sed ac maximus velit. In ac elit at purus vestibulum feugiat id quis tortor. Praesent lacinia elementum massa, a porta purus maximus eu. Phasellus laoreet dolor vitae nisl venenatis consequat. Sed porttitor turpis in varius sagittis. Sed varius, ante eu tincidunt fringilla, ante nunc pellentesque metus, in molestie libero urna eget ante. Phasellus tempor porta tortor, non iaculis nunc. Integer bibendum lacinia metus ut ullamcorper. Nullam finibus interdum tellus, ut scelerisque neque mattis ac. Curabitur pharetra augue laoreet elit ullamcorper euismod. Praesent tincidunt felis et euismod faucibus. Nullam feugiat sollicitudin auctor. Donec convallis mi erat, quis pharetra enim ornare a. Suspendisse vehicula porttitor metus, sagittis egestas dui ultrices malesuada. Aenean commodo ipsum ut risus tristique, id molestie libero gravida.Donec iaculis condimentum mi sed auctor. Proin dignissim pellentesque massa et iaculis. Vestibulum tempor luctus massa vel convallis. Ut ullamcorper eros vitae magna varius mollis. Cras feugiat turpis id hendrerit fermentum. Sed id porttitor ipsum. Quisque accumsan maximus elit sit amet facilisis. Proin in dignissim justo. Quisque scelerisque lectus nec urna congue suscipit. Phasellus in erat nec eros lobortis feugiat non at sem. Quisque eu consequat nibh, vel facilisis quam. Praesent sollicitudin nec risus eu volutpat. Mauris quis vehicula orci. Donec vel tincidunt enim. In eu magna a ipsum rhoncus dapibus sit amet et ipsum.",

           4=> "Integer a ligula ac quam ullamcorper elementum. Aliquam lacinia ultricies porttitor. Proin hendrerit, tortor et dapibus ornare, elit sem commodo tellus, nec aliquam nisl nisi consequat sem. Nulla enim nulla, feugiat vulputate nulla finibus, suscipit vulputate leo. Suspendisse potenti. Cras blandit eu nulla id aliquet. Curabitur dapibus eros congue est egestas bibendum.Fusce sed convallis lacus. Vestibulum volutpat libero at nisl facilisis faucibus. Quisque rhoncus, massa quis interdum dictum, metus augue laoreet dui, molestie elementum orci est sed lorem. Nam eget diam id sapien pulvinar iaculis. Duis blandit nisi vitae risus pellentesque tempor. Curabitur dictum neque ac massa finibus, ut tristique sapien dignissim. Fusce arcu augue, dictum sodales ultricies a, tempor sed eros. Sed id tellus diam. Sed augue urna, finibus sed interdum eget, commodo non sem.Duis rutrum, lorem eget aliquam mollis, ex tortor tristique nulla, eu fermentum arcu risus at dui. Suspendisse hendrerit sed purus vel commodo. Duis a neque et tellus dictum tempus id vel dolor. Nullam eget mauris vel elit ornare elementum quis sed mi. Nunc nec scelerisque urna. Quisque sodales odio sit amet magna placerat ultrices. Aenean ullamcorper libero ac libero tristique efficitur. Donec maximus mi sed purus ultricies convallis. Quisque dapibus suscipit lacinia. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras eu eros pharetra, pretium metus id, venenatis ante. Pellentesque ac quam et magna blandit interdum eget in mi. Sed sodales felis auctor eros tristique commodo. Donec pharetra nunc vel accumsan ultricies.Morbi dui dui, rutrum a pharetra in, congue id erat. Ut vulputate tempus molestie. Mauris nec nisl vel tellus pretium auctor vel vel ligula. Aenean nec sapien mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. In nec accumsan libero. Maecenas a ante sapien. Suspendisse faucibus finibus dui, id pulvinar mi faucibus sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi mollis arcu non nisl tempus viverra. Cras et odio molestie, bibendum massa et, condimentum purus. Nulla interdum, ante a sodales consectetur, augue nisi euismod ante, at interdum nisi mauris ut dolor. Quisque vulputate justo in dignissim fermentum. Nam tempor, mauris nec laoreet cursus, libero libero consectetur ipsum, vitae fermentum tellus quam finibus est. Maecenas ultrices gravida dui, ac congue sem venenatis at. Nunc efficitur arcu ut odio dictum, et pellentesque justo fermentum."
        ];

        return $description[rand(1, 4)];
    }
}
