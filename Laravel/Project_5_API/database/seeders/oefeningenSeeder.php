<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\models\oefeningen;

class oefeningenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oefeningen')->insert([
            'Name' => 'Sqaut',
            'instructie_nl' => 'Squat:
            1.	Ga staan op een plek waar je genoeg ruimte om je heen hebt.
            2.	Zak vervolgens door je knieën heen tot je billen onder kniehoogte zijn.
            3.	Ga hierna weer recht staan.
            4.	Herhaal stap twee en drie 15 keer.',
            'instructie_en' => 'Squat: 
            1.	Stand in a place where you have enough space around you.
            2.	Then bend your knees until your buttocks are below knee height.
            3.	Then stand up straight again.4.	Repeat steps 2 and 3 15 times.',
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'push up',
            'instructie_nl' => 'Push-up: 
            1.	Ga op je buik liggen.
            2.	Zet vervolgens je handen neer op de grond op schouderhoogte.
            3.	Duw daarna je lichaam omhoog tot je armen zijn gestrekt.
            4.	Zak hierna weer door je armen tot de neus bijna de grond raakt.
            5.	Herhaal stap drie en vier 10 keer.',
            'instructie_en' => 'Push-up:
            1.	Lie on your stomach, on the floor.
            2.	Then put your hands down at shoulder height flat on the floor.
            3.	Then push your body up until your arms are stretched.
            4. After this, you sink through your arms again until your nose almost touches the ground.
            5.	Repeat steps 3 and 4 10 times.',
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Dip',
            'instructie_nl' => 'Dip:
            1.	Pak 2 stoelen.
            2.	Zet de stoelen langs je neer zodat deze met de rug naar je toe staan.
            3.	Duw jezelf omhoog zodat je met je voeten van de grond af zijn en je armen recht zijn.
            4.	Laat vervolgens jezelf naar beneden zakken tot je voeten net niet de grond raken.
            5.	Herhaal stap drie en vier 10 keer',
            'instructie_en' => "Dip:
            1.	get 2 chairs.
            2.	Place the chairs next to you so that they stand with their backs to you.
            3.	Push yourself up so that you are off the ground with your feet and your arms are straight.
            4.	Then you lower yourself down until your feet just don't touch the ground.
            5.	Repeat steps 3 and 4 10 times.",
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Plank',
            'instructie_nl' => 'Plank:
            1.	Ga op je buik liggen.
            2.	Leg je onderarmen op de grond.
            3.	Zorg ervoor dat je elle bogen onder je schouders staan.
            4.	Houd dit nu 30 sec vol.',
            'instructie_en' => "Plank:
            1.	Lie on your stomach.
            2.	Place your forearms on the floor.
            3.	Make sure your elbows are under your shoulders.
            4.	Now keep this up for 30 sec.",
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Paardentrap',
            'instructie_nl' => 'Paardentrap:
            1. Ga op handen en knieën zitten
            2. Strek je linkerbeen naar achter tot deze recht is.
            3. Zet je linkerbeen weer terug op de grond.
            4. Strek je rechterbeen naar achter tot deze recht is.
            5. Zet je rechterbeen weer terug op de grond.
             6. Herhaal nu deze stappen 10 keer zodat je 20 keer je been hebt gestrekt.',
            'instructie_en' => "donkey kicks:
            1.	Get on your hands and knees
            2.	Stretch your left leg backwards until it is straight.
            3.	Put your left foot back on the ground.
            4.	Stretch your right leg back until it is straight.
            5.	Put your right foot back on the ground.
            6.	Now repeat these steps 10 times so that you have stretched your leg 20 times.",
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Mountain climber',
            'instructie_nl' => 'Mountain climber:
            1.	Ga op je buik liggen.
            2.	Zet je handen op de grond neer en strek je armen.
            3.	Zorg ervoor dat je handen onder je schouders staan.
            4.	Trek nu je linkerknie richting je rechter elle boog.
            5.	En zet je linkervoet weer terug 
            6.	Trek nu je rechterknie richting je linker elle boog.
            7.	En zet je rechtervoet weer terug 
            8.	Herhaal deze stappen nu 10 keer.',
            'instructie_en' => "Mountain climber:
            1.	Lie on your stomach.
            2.	Just put your hands on the floor and stretch it.
            3.	Make sure your hands are under your shoulders.
            4.	Now pull your left knee towards your right elbow.
            5.	And put your left foot back again 
            6.	Now pull your right knee towards your left elbow.
            7.	And put your right foot back 
            8.	Now repeat these steps 10 times.",
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Burpee',
            'instructie_nl' => 'Burpee:1. Ga staan op een plek waar je genoeg ruimte om je heen hebt.
            2. Spring in de lucht met je armen om hoog.
            3. Ga nu door je knieën en ga staan in push up houding.
            4. Ga nu door je armen heen en zorg ervoor dat je neus de grond net niet raakt.
             5. Strek nu je armen weer.
            6. En ga weer staan.
            7. En spring weer.
            8. Herhaal dit nu 15 keer',
            'instructie_en' => "Burpee:
            1.	Stand in a place where you have enough space around you.
            2.	Jump in the air with your arms high.
            3.	Now go through your knees and stand in push up position. 
            4.	Now go through your arms and make sure that your nose does not touch the ground.
            5.	Now stretch your arms again.
            6.	And stand up again.
            7.	And jump again.
            8.	Now repeat 15 times.",
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Lunge',
            'instructie_nl' => 'Lunge:
            1. Ga recht staan.
            2. En zet je rechtervoet naar voren toe en zorg dat deze in een 90 graden hoek staat.
            3. Zorg ervoor dat je linkerbeen ook in een 90 graden hoek is waarbij de knie net de grond niet raakt.
            4. Zet nu je linkervoet naar voren en zorg ervoor dat deze nu in een 90 graden hoek staat.
            5. Nu moet je dus je linkerbeen ook met een 90 graden hoek staat en de knie net niet de grond raakt.
            6. Herhaal dit nu 10 keer.',
            'instructie_en' => "Lungs:
            1.	Stand up.
            2.	And put your right foot forward and make sure it is at a 90 degree angle.
            3.	Make sure that your left leg is also at a 90 degree angle where the knee just beardly touch the ground.
            4.	Now put your left foot forward and make sure that it is now at a 90 degree angle.
            5.	Now you also have to stand your left leg with a 90 degree angle and the knee just beardly touch the ground.
            6.	Now repeat this 10 times.",
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Wall sit',
            'instructie_nl' => 'Wall sit:
             1. Ga staan tegen de muur.
            2. Zorg ervoor dat je benen in een 90 graden hoek staat.
            3. Je rug moet nu recht tegen de muur zijn.
            4. En zorg ervoor dat je dit nu 30 sec vol houdt.',
            'instructie_en' => "Wall sit:
            1.	Stand against the wall.
            2.	And make sure your legs are at a 90 degree angle.
            3.	Your back should now be right against the wall.
            4.	And make sure you keep this up for 30 seconds now.",
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Crunch',
            'instructie_nl' => 'Crunch:1. Ga op je rug liggen.
            2. En zet je voeten recht op de grond en je benen een beetje gebogen.
            3. Leg je handen onder je hoofd.
            4. En zorg ervoor dat je hoofd omhooggaat en je rug recht op de grond houden.
            5. En laat dit weer zakken tot op de grond.
            6. Herhaal dit nu 20 keer.',
            'instructie_en' => "Crunch:
            1.	Lie on your back.
            2.	And put your feet straight on the ground and your legs a little bent.
            3.	Put your hands under your head.
            4.	And make sure your head goes up and keeps your back straight on the ground.
            5.	And lower this back to the ground.
            6.	Now repeat this 20 times.",
        ]);
    }
}
