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
            'Name' => 'sqaut',
            'instructie_nl' => 'Sqaut:<br>1.  Ga staan op een plek waar je genoeg ruimte om je heen hebt.<br>2.   Vervolgens Zak door je knieën heen tot je billen onder kniehoogte is.
            <br>3.  Ga hierna weer recht staan.<br> 4.  Herhaal stap 2 en 3 15 keer.',
            'instructie_en' => 'Squat: <br>1.	Stand in a place where you have enough space around you.<br>2.	Then bend your knees until your buttocks are below knee height.
            <br>3.	Then stand up straight again.<br>4.	Repeat steps 2 and 3 15 times.',
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'push up',
            'instructie_nl' => 'Push-up: <br>1.	Ga op je buik liggen, op de grond.+<br>2.   Vervolgens doe zet je je handen neer op schouderhoogte plat op de grond.
            <br>3.	Duw daarna je lichaam omhoog tot je armen zijn gestrekt.<br>4.	Hierna zak je weer door je armen tot je neus bijna de grond raakt.
            <br>5.	Herhaal stap 3 en 4 10 keer.',
            'instructie_en' => 'Push-up:<br>1.	Lie on your stomach, on the floor.<br>2.	Then put your hands down at shoulder height flat on the floor.
            <br>3.	Then push your body up until your arms are stretched.<br>4. After this, you sink through your arms again until your nose almost touches the ground.
            <br>5.	Repeat steps 3 and 4 10 times.',
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Dip',
            'instructie_nl' => 'Dip:<br>1.	Pak 2 stoelen.<br>2.	Zet de stoelen langs je neer zodat deze met hun rug naar je toe staan.
            <br>3.	Duw je zelf omhoog zodat je met je voeten van de grond af bent en je armen recht zijn.<br>4.	Vervolgens laat je jezelf naar beneden zakken tot je voeten net niet de grond raken.
            <br>5.	Herhaal stap 3 en 4 10 keer',
            'instructie_en' => "Dip:<br>1.	get 2 chairs.<br>2.	Place the chairs next to you so that they stand with their backs to you.
            <br>3.	Push yourself up so that you are off the ground with your feet and your arms are straight.
            <br>4.	Then you lower yourself down until your feet just don't touch the ground.<br>5.	Repeat steps 3 and 4 10 times.",
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Plank',
            'instructie_nl' => 'Plank:<br>1.	Ga op je buik liggen.<br>2.	Leg e onderarmen op de grond.
            <br>3.	Zorg er voor dat je elle bogen onder je schouders staan.<br>4.	Houd dit nu 30 sec vol.',
            'instructie_en' => "Plank:<br>1.	Lie on your stomach.<br>2.	Place your forearms on the floor.
            <br>3.	Make sure your elbows are under your shoulders.<br>4.	Now keep this up for 30 sec.",
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Paardentrap',
            'instructie_nl' => 'Paardentrap:<br>1.	Ga op handen en knieën zitten<br>2.	Strek je linker been naar achter tot deze recht is.<br>3.	Zet je linker voet weer terug op de grond.
            <br>4.	Strek je rechter been naar achter tot deze recht is.<br>5.	Zet je rechter voet weer terug op de grond.<br>6.	Herhaal nu deze stappen 10 keer zodat je 20 keer je been hebt gestrekt.',
            'instructie_en' => "donkey kicks:<br>1.	Get on your hands and knees<br>2.	Stretch your left leg backwards until it is straight.<br>3.	Put your left foot back on the ground.
            <br>4.	Stretch your right leg back until it is straight.<br>5.	Put your right foot back on the ground.<br>6.	Now repeat these steps 10 times so that you have stretched your leg 20 times.",
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Mountain climber',
            'instructie_nl' => 'Mountain climber:<br>1.	Ga op je buik liggen.<br>2.	Net je handen op de grond neer en strek deze.<br>3.	Zorg er voor dat je handen onder je schouders staan.<br>4.	Trek nu je linker knie richting je rechter elle boog.
            <br>5.	En zet je linker voet weer terug <br>6.	Trek nu je rechter knie richting je linker elle boog.<br>7.	En zet je rechter voet weer terug <br>8.	Herhaal deze stappen nu 10 keer.',
            'instructie_en' => "Mountain climber:<br>1.	Lie on your stomach.<br>2.	Just put your hands on the floor and stretch it.<br>3.	Make sure your hands are under your shoulders.<br>4.	Now pull your left knee towards your right elbow.
            <br>5.	And put your left foot back again <br>6.	Now pull your right knee towards your left elbow.<br>7.	And put your right foot back <br>8.	Now repeat these steps 10 times.",
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Burpee',
            'instructie_nl' => 'Burpee:<br>1.	Ga staan op een plek waar je genoeg ruimte om je heen hebt.<br>2.	Spring in de lucht met je armen om hoog.<br>3.	Ga nu door je knieën en ga staan in push up houding staan <br>4.	Ga nu door je armen heen en zorg er voor dat je neus de grond net niet raakt.
            <br>5.	Strek nu je armen weer.<br>6.	En ga weer staan.<br>7.	En spring weer.<br>8.	Herhaal dit nu 15 keer',
            'instructie_en' => "Burpee:<br>1.	Stand in a place where you have enough space around you.<br>2.	Jump in the air with your arms high.<br>3.	Now go through your knees and stand in push up position <br>4.	Now go through your arms and make sure that your nose does not touch the ground.
            <br>5.	Now stretch your arms again.<br>6.	And stand up again.<br>7.	And jump again.<br>8.	Now repeat 15 times",
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Lunge',
            'instructie_nl' => 'Lunge:<br>1.	Ga recht staan.
            <br>2.	En zet je rechter voet naar voren toe en zorg dat deze in een 90 graden hoek staat. <br>3.	Zorg er voor dat je linker been ook in een 90 graden hoek is waarbij de knie net de grond niet raakt.
            <br> 4.	Zet nu je linker voet naar voren en zorg er voor dat deze nu in een 90 graden hoek staat.<br> 5.	Nu moet je dus je linker been ook met een 90 graden hoek staat en de knie net niet de grond raakt.<br> 6.	Herhaal dit nu 10 keer.',
            'instructie_en' => "Lungs:<br>1.	Stand up.<br>2.	And put your right foot forward and make sure it is at a 90 degree angle.<br>3.	Make sure that your left leg is also at a 90 degree angle where the knee just beardly touch the ground.
            <br>4.	Now put your left foot forward and make sure that it is now at a 90 degree angle.<br>5.	Now you also have to stand your left leg with a 90 degree angle and the knee just beardly touch the ground.<br>6.	Now repeat this 10 times.
            ",
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Wall sit',
            'instructie_nl' => 'Wall sit:<br>1.	Ga staan tegen de muur.<br>2.	En zorg er voor dat je benen in een 90 graden hoek staat.
            <br>3.	Je rug moet nu recht tegen de muur staan.<br>4.	En zorg er voor dat je dit nu 30 sec vol houd.',
            'instructie_en' => "Wall sit:<br>1.	Stand against the wall.<br>2.	And make sure your legs are at a 90 degree angle.
            <br>3.	Your back should now be right against the wall.<br>4.	And make sure you keep this up for 30 seconds now.",
        ]);
        DB::table('oefeningen')->insert([
            'Name' => 'Crunch',
            'instructie_nl' => 'Crunch:<br>1.	Ga op je rug liggen.<br>2.	En zet je voeten recht op de grond en je benen een beetje gebogen.
            <br>3.	Leg je handen onder je hoofd.<br>4.	En zorg er voor dat je hoofd omhoog gaat en je rug recht op de grond houden.<br>5.	En laat dit weer zakken tot op de grond.<br>6.	Herhaal dit nu 20 keer.',
            'instructie_en' => "Crunch:<br>1.	Lie on your back.<br>2.	And put your feet straight on the ground and your legs a little bent.<br>3.	Put your hands under your head.
            <br>4.	And make sure your head goes up and keeps your back straight on the ground.<br>5.	And lower this back to the ground.<br>6.	Now repeat this 20 times.",
        ]);
    }
}
